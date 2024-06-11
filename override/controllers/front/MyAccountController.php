<?php

use PrestaShop\PrestaShop\Adapter\Presenter\Order\OrderPresenter;
class MyAccountController extends MyAccountControllerCore
{
    public $auth = true;
    // public $php_self = 'my-account';
    // public $authRedirection = 'my-account';
    // public $ssl = true;
    // public function setMedia()
    // {
    //     parent::setMedia();
    //     // $this->addCSS(_THEME_CSS_DIR_.'my-account.css');
    //     $this->addJS('https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js');
    // }

    public $order_presenter;
    protected $customer;

    public function init()
    {
        parent::init();
        $this->customer = $this->context->customer;
    }


    public function postProcess(){
        $origin_newsletter = (bool)$this->customer->newsletter;

        if (Tools::isSubmit('submitIdentity')) {
            $email = trim(Tools::getValue('email'));
            

            if (Tools::getValue('months') != '' && Tools::getValue('days') != '' && Tools::getValue('years') != '') {
                $this->customer->birthday = (int)Tools::getValue('years').'-'.(int)Tools::getValue('months').'-'.(int)Tools::getValue('days');
            } elseif (Tools::getValue('months') == '' && Tools::getValue('days') == '' && Tools::getValue('years') == '') {
                $this->customer->birthday = null;
            } else {
                $this->errors[] = Tools::displayError('Invalid date of birth.');
            }

            if (Tools::getIsset('old_passwd')) {
                $old_passwd = trim(Tools::getValue('old_passwd'));
            }

            if (!Validate::isEmail($email)) {
                $this->errors[] = Tools::displayError('This email address is not valid');
            } elseif ($this->customer->email != $email && Customer::customerExists($email, true)) {
                $this->errors[] = Tools::displayError('An account using this email address has already been registered.');
            } elseif (!Tools::getIsset('old_passwd') || (Tools::encrypt($old_passwd) != $this->context->cookie->passwd)) {
                $this->errors[] = Tools::displayError('The password you entered is incorrect.');
            } elseif (Tools::getValue('passwd') != Tools::getValue('confirmation')) {
                $this->errors[] = Tools::displayError('The password and confirmation do not match.');
            } else {
                $prev_id_default_group = $this->customer->id_default_group;

                // Merge all errors of this file and of the Object Model
                $this->errors = array_merge($this->errors, $this->customer->validateController());
            }

            if (!count($this->errors)) {
                $this->customer->id_default_group = (int)$prev_id_default_group;
                $this->customer->firstname = Tools::ucwords($this->customer->firstname);

                if (Configuration::get('PS_B2B_ENABLE')) {
                    $this->customer->website = Tools::getValue('website'); // force update of website, even if box is empty, this allows user to remove the website
                    $this->customer->company = Tools::getValue('company');
                }

                if (!Tools::getIsset('newsletter')) {
                    $this->customer->newsletter = 0;
                } elseif (!$origin_newsletter && Tools::getIsset('newsletter')) {
                    if ($module_newsletter = Module::getInstanceByName('blocknewsletter')) {
                        /** @var Blocknewsletter $module_newsletter */
                        if ($module_newsletter->active) {
                            $module_newsletter->confirmSubscription($this->customer->email);
                        }
                    }
                }

                if (!Tools::getIsset('optin')) {
                    $this->customer->optin = 0;
                }
                
                if (Tools::getValue('passwd')) {
                    $this->context->cookie->passwd = $this->customer->passwd;
                }

                if ($this->customer->update()) {
                    $this->context->cookie->customer_lastname = $this->customer->lastname;
                    $this->context->cookie->customer_firstname = $this->customer->firstname;
                    $this->context->smarty->assign('confirmation', 1);
                } else {
                    $this->errors[] = Tools::displayError('The information cannot be updated.');
                }
            }
        } else {
            $_POST = array_map('stripslashes', $this->customer->getFields());
        }

        return $this->customer;
    }

    public function initContent()
    {

        parent::initContent();

        $idCustomer = $this->context->customer->id;
// paulo
        if ($this->context->customer->birthday) {
            $birthday = explode('-', $this->context->customer->birthday);
        } else {
            $birthday = array('-', '-', '-');
        }

        /* Generate years, months and days */
        $this->context->smarty->assign(array(
            'years' => Tools::dateYears(),
            'sl_year' => $birthday[0],
            'months' => Tools::dateMonths(),
            'sl_month' => $birthday[1],
            'days' => Tools::dateDays(),
            'sl_day' => $birthday[2],
            'errors' => $this->errors,
            'genders' => Gender::getGenders(),
        ));

        // Call a hook to display more information
        $this->context->smarty->assign(array(
            'HOOK_CUSTOMER_IDENTITY_FORM' => Hook::exec('displayCustomerIdentityForm'),
        ));

        $newsletter = Configuration::get('PS_CUSTOMER_NWSL') || (Module::isInstalled('blocknewsletter') && Module::getInstanceByName('blocknewsletter')->active);
        $this->context->smarty->assign('newsletter', $newsletter);
        $this->context->smarty->assign('optin', (bool)Configuration::get('PS_CUSTOMER_OPTIN'));

        $this->context->smarty->assign('field_required', $this->context->customer->validateFieldsRequiredDatabase());
// --->

        if ($this->order_presenter === null) {
            $this->order_presenter = new OrderPresenter();
        }

        // exit;

        $has_address = $this->context->customer->getAddresses($this->context->language->id);
        $this->context->smarty->assign(array(
            'has_customer_an_address' => empty($has_address),
            'voucherAllowed' => (int)CartRule::isFeatureActive(),
            'returnAllowed' => (int)Configuration::get('PS_ORDER_RETURN'),
            'lastYearOrdersMonth' => array_reverse(self::lastYearOrders($idCustomer)['month']),
            'lastYearOrdersTotal' => array_reverse(self::lastYearOrders($idCustomer)['total']),
            'lastYearOrdersColor' => self::random_hexcolor(),
            'ordersByBrand' => self::ordersByBrand($idCustomer),
            'ordersByBrandColors' => self::lastYearOrders($idCustomer)['colors'],
            'ordersByBrandBrands' => self::lastYearOrders($idCustomer)['brands'],
        ));

        // echo '<pre>'. print_r(self::ordersByBrand($idCustomer)['brands'],1) .'</pre>';
        // exit;
        // echo '<pre>'.print_r($this->getTemplateVarOrders(),1).'</pre>';
        // exit;

        $this->context->smarty->assign([
            'orders' => $this->getTemplateVarOrders(),
        ]);

        // echo  _PS_THEME_DIR_;
        // exit;
        $this->context->smarty->assign('HOOK_CUSTOMER_ACCOUNT', Hook::exec('displayCustomerAccount'));
        $this->setTemplate('customer/my-account');

    
    }

    public function getTemplateVarOrders()
    {
        $orders = [];
        $customer_orders = Order::getCustomerOrders($this->context->customer->id);
        foreach ($customer_orders as $customer_order) {
            $order = new Order((int) $customer_order['id_order']);
            $orders[$customer_order['id_order']] = $this->order_presenter->present($order);
        }

        return $orders;
    }


    public function lastYearOrders($idCustomer)
    {
        
        $current_date = date('Y-m-d');
        $month = '';
        $byMonth = '';

        for($i = 0; $i < 13; $i++){
            
            if($i == 0){
                $unixdateLower = strtotime($current_date . ' -1 month');
                $unixdateUpper = strtotime($current_date);
            }else{
                $unixdateLower = strtotime($current_date . ' -' . ($i+1) . ' month');
                $unixdateUpper = strtotime($current_date . ' -' . $i . ' month');
            }

            $lower = date('Y-m-d', $unixdateLower);
            $upper = date('Y-m-d', $unixdateUpper);

            $orders =  Db::getInstance()->getRow("SELECT sum(total_paid) AS total FROM eu_orders WHERE id_customer =" . $idCustomer . " AND date_add > '" . $lower . "' AND date_add < '" . $upper . "'");
            
            if($i == 0){
                $month .= '' . date("M",strtotime($current_date)) . '';
            }else{
                $month .= '' . date("M",strtotime($current_date . ' -' . $i . ' month')) . '';
            }
            
            $byMonth.= $orders['total'] + 0;
            
            
            if($i < 12){
              $byMonth.= ', ';  
              $month.= ', ';  
            } 
        }
        
        return ['month' => explode(',',$month), 'total' => explode(',',$byMonth)];
    }


    public function ordersByBrand($idCustomer)
    {
        $sql = "SELECT sum(eu_order_detail.product_price) AS total, eu_manufacturer.name
                    FROM eu_orders 
                    LEFT JOIN eu_order_detail 
                    ON eu_orders.id_order = eu_order_detail.id_order  
                    LEFT JOIN eu_product 
                    ON eu_order_detail.product_id = eu_product.id_product
                    LEFT JOIN eu_manufacturer 
                    ON eu_manufacturer.id_manufacturer = eu_product.id_manufacturer 
                    WHERE id_customer =" . $idCustomer . '
                    GROUP BY eu_product.id_manufacturer';
        

        $manufacturers =  Db::getInstance()->executeS($sql);
        
        $brands = '';
        $totals = '';
        $colors = '';
        foreach($manufacturers AS $index => $manufacturer){
            
            if($manufacturer['name'] !='Shipping'){
                if($index > 0){
                    $brands.= ', ';  
                    $colors.= ', ';  
                    $totals.= ', ';  
                } 
                $brands .= '' . $manufacturer['name'] . '';
                $colors .= '' . self::random_hexcolor() . '';
                $totals .= '' . number_format($manufacturer['total'], 0, '', '') . '';
            }
        }
        
        return ['brands' => explode(',',$brands), 'totals' => explode(',',$totals), 'colors' => explode(',',$colors)];

    }
    
    function random_color() { return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT); }
    
    function random_hexcolor() {
        return '#' . self::random_color() . self::random_color() . self::random_color();
    }

}