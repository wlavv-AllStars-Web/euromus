<?php

class ClientStatisticsControllerCore extends FrontController{

    public $auth = true;

    public $php_self = 'clientStatistics';

    public function initContent(){
        
        parent::initContent();
        
        $idCustomer = $this->context->customer->id;


        $date = date_create($this->context->customer->date_add);
        $clientSince = date_format($date, "Y-m-d");

        $numberOfOrders = self::getNumberOfOrders($idCustomer);
        $totalOfOrders = self::getTotalOfOrders($idCustomer);
        
        $average = $totalOfOrders / $numberOfOrders;

        $this->context->smarty->assign(array(
            'customer' => $this->context->customer,
            'company_name' => $this->context->customer->company,
            'defaultLanguage' => self::getDefaultLanguage(),
            'counters' => self::getCounters($idCustomer),
            'lastOrder' => self::lastOrder($idCustomer),
            'clientSince' => $clientSince,
            'numberAddresses' => self::getNumberAddresses($idCustomer),
            'numberOfOrders' => $numberOfOrders,
            'totalOfOrders' => $totalOfOrders,
            'average' => number_format($average, 2, ',', ''),
            'lastViewedProducts' => self::getLastViewedProducts(),
            'mostBoughtProducts' => self::getMostBoughtProducts($idCustomer),
            'orderByDateAndStatus' => self::getOrderByDateAndStatus($idCustomer),
            'bestSellers' => self::bestSellers(),
            'top' => self::getTop100()
        ));
        
        $this->setTemplate('customer/statistics_counters.tpl');
    }


    public function getDefaultLanguage()
    {
        $defaultLanguageId = $this->context->customer->id_lang;
        
        switch($defaultLanguageId){
            case 1 : return 'English';
            case 2 : return 'Español';
            case 3 : return 'Français';
            case 4 : return 'Português';
            case 5 : return 'Română';
            default : return 'English';
        }

    }

    public function getCounters($idCustomer){
        
        $waiting_validation =  Db::getInstance()->getRow("SELECT count(current_state) AS waiting_validation FROM eu_orders WHERE id_customer =" . $idCustomer . " AND current_state = 13");
        $waiting_payment =  Db::getInstance()->getRow("SELECT count(current_state) AS waiting_payment FROM eu_orders WHERE id_customer =" . $idCustomer . " AND current_state = 14");
        $processing =  Db::getInstance()->getRow("SELECT count(current_state) AS processing FROM eu_orders WHERE id_customer =" . $idCustomer . " AND current_state = 3");
        $backorders =  Db::getInstance()->getRow("SELECT count(current_state) AS backorders FROM eu_orders WHERE id_customer =" . $idCustomer . " AND current_state = 9");
        $shipped =  Db::getInstance()->getRow("SELECT count(current_state) AS shipped FROM eu_orders WHERE id_customer =" . $idCustomer . " AND current_state = 4");
        $canceled =  Db::getInstance()->getRow("SELECT count(current_state) AS canceled FROM eu_orders WHERE id_customer =" . $idCustomer . " AND current_state = 6");
        
        $orders['waiting_validation'] = $waiting_validation['waiting_validation'];
        $orders['waiting_payment']    = $waiting_payment['waiting_payment'];
        $orders['processing']         = $processing['processing'];
        $orders['backorders']         = $backorders['backorders'];
        $orders['shipped']            = $shipped['shipped'];
        $orders['canceled']           = $canceled['canceled'];
        
        return $orders;
    }

    public function getOrderByDateAndStatus($idCustomer){
        
        $current_date = date('Y-m-d');
        
        $month = '';
        $status_array = ["Waiting validation", "Waiting payment", "Preparation in progress", "Backorders", "Shipped", "Canceled", "Payment accepted", "Refunded", "Delivered"];
        $status = '"Waiting validation", "Waiting payment", "Preparation in progress", "Backorders", "Shipped", "Canceled", "Payment accepted", "Refunded", "Delivered"';
        
        
        $waiting_validation_string = '';
        $waiting_payment_string = '';
        $processing_string = '';
        $backorders_string = '';
        $shipped_string = '';
        $canceled_string = '';
        $accepted_string = '';
        $refunded_string = '';
        $delivered_string = '';
        $colors = '';
        
        $order_by_month = array();
        
        $colors[]= '#000000';
        $colors[]= '#4258a7';
        $colors[]= '#048dcd';
        $colors[]= '#f78e1f';
        $colors[]= 'BlueViolet';
        $colors[]= '#e82025';
        $colors[]= '#00644a';
        $colors[]= '#7e63ab';
        $colors[]= '#8cc747';

        
        for($i = 1; $i < 13; $i++){
            $month .= '"' . date("M",strtotime($current_date . ' -' . $i . ' month')) . '"';

            if($i < 12){
                $month.= ', ';     
            }
        }
        
        for($i = 1; $i < 13; $i++){
            
            $unixdateLower = strtotime($current_date . ' -' . ($i+1) . ' month');
            $unixdateUpper = strtotime($current_date . ' -' . $i . ' month');
            
            $lower = date('Y-m-d', $unixdateLower);
            $upper = date('Y-m-d', $unixdateUpper);

            $waiting_validation =  Db::getInstance()->getRow("SELECT count(id_order_state) AS waiting_validation FROM eu_order_history LEFT JOIN eu_orders ON eu_order_history.id_order = eu_orders.id_order WHERE eu_orders.id_customer =" . $idCustomer . " AND eu_order_history.id_order_state = 15" . " AND eu_order_history.date_add > '" . $lower . "' AND eu_order_history.date_add < '" . $upper . "'");
            $waiting_payment =  Db::getInstance()->getRow("SELECT count(id_order_state) AS waiting_payment FROM eu_order_history LEFT JOIN eu_orders ON eu_order_history.id_order = eu_orders.id_order WHERE eu_orders.id_customer =" . $idCustomer . " AND eu_order_history.id_order_state = 10" . " AND eu_order_history.date_add > '" . $lower . "' AND eu_order_history.date_add < '" . $upper . "'");
            $processing =  Db::getInstance()->getRow("SELECT count(id_order_state) AS processing FROM eu_order_history LEFT JOIN eu_orders ON eu_order_history.id_order = eu_orders.id_order WHERE eu_orders.id_customer =" . $idCustomer . " AND eu_order_history.id_order_state = 3" . " AND eu_order_history.date_add > '" . $lower . "' AND eu_order_history.date_add < '" . $upper . "'");
            $backorders =  Db::getInstance()->getRow("SELECT count(id_order_state) AS backorders FROM eu_order_history LEFT JOIN eu_orders ON eu_order_history.id_order = eu_orders.id_order WHERE eu_orders.id_customer =" . $idCustomer . " AND eu_order_history.id_order_state = 9" . " AND eu_order_history.date_add > '" . $lower . "' AND eu_order_history.date_add < '" . $upper . "'");
            $shipped =  Db::getInstance()->getRow("SELECT count(id_order_state) AS shipped FROM eu_order_history LEFT JOIN eu_orders ON eu_order_history.id_order = eu_orders.id_order WHERE eu_orders.id_customer =" . $idCustomer . " AND eu_order_history.id_order_state = 4" . " AND eu_order_history.date_add > '" . $lower . "' AND eu_order_history.date_add < '" . $upper . "'");
            $canceled =  Db::getInstance()->getRow("SELECT count(id_order_state) AS canceled FROM eu_order_history LEFT JOIN eu_orders ON eu_order_history.id_order = eu_orders.id_order WHERE eu_orders.id_customer =" . $idCustomer . " AND eu_order_history.id_order_state = 6" . " AND eu_order_history.date_add > '" . $lower . "' AND eu_order_history.date_add < '" . $upper . "'");
            $accepted =  Db::getInstance()->getRow("SELECT count(id_order_state) AS accepted FROM eu_order_history LEFT JOIN eu_orders ON eu_order_history.id_order = eu_orders.id_order WHERE eu_orders.id_customer =" . $idCustomer . " AND eu_order_history.id_order_state = 2" . " AND eu_order_history.date_add > '" . $lower . "' AND eu_order_history.date_add < '" . $upper . "'");
            $refunded =  Db::getInstance()->getRow("SELECT count(id_order_state) AS refunded FROM eu_order_history LEFT JOIN eu_orders ON eu_order_history.id_order = eu_orders.id_order WHERE eu_orders.id_customer =" . $idCustomer . " AND eu_order_history.id_order_state = 7" . " AND eu_order_history.date_add > '" . $lower . "' AND eu_order_history.date_add < '" . $upper . "'");
            $delivered =  Db::getInstance()->getRow("SELECT count(id_order_state) AS delivered FROM eu_order_history LEFT JOIN eu_orders ON eu_order_history.id_order = eu_orders.id_order WHERE eu_orders.id_customer =" . $idCustomer . " AND eu_order_history.id_order_state = 5" . " AND eu_order_history.date_add > '" . $lower . "' AND eu_order_history.date_add < '" . $upper . "'");

            $waiting_validation_string .= $waiting_validation['waiting_validation'];
            $waiting_payment_string .= $waiting_payment['waiting_payment'];
            $processing_string .= $processing['processing'];
            $backorders_string .= $backorders['backorders'];
            $shipped_string .= $shipped['shipped'];
            $canceled_string .= $canceled['canceled'];
            $accepted_string .= $accepted['accepted'];
            $refunded_string .= $refunded['refunded'];
            $delivered_string .= $delivered['delivered'];
        
            if($i < 12) {
                $waiting_validation_string.= ', ';  
                $waiting_payment_string.= ', ';  
                $processing_string.= ', ';  
                $backorders_string.= ', ';  
                $shipped_string.= ', ';  
                $canceled_string.= ', ';  
                $accepted_string.= ', ';  
                $refunded_string.= ', ';  
                $delivered_string.= ', ';  
            }

        }
        
        return [ 
            $waiting_validation_string, 
            $waiting_payment_string, 
            $processing_string, 
            $backorders_string, 
            $shipped_string, 
            $canceled_string,
            $accepted_string,
            $refunded_string,
            $delivered_string,
            'colors' => $colors,
            'months' => $month,
            'status' => $status,
            'status_array' => $status_array
        ];
    }

    public function lastOrder($idCustomer){
        
        $order =  Db::getInstance()->getRow("SELECT date_add FROM eu_orders WHERE id_customer =" . $idCustomer . " ORDER BY id_order DESC");
        
        $date = date_create($order['date_add']);
        return date_format($date, "Y-m-d");
    }

    public function getNumberOfOrders($idCustomer){
        
        $orders =  Db::getInstance()->getRow("SELECT count(*) AS total FROM eu_orders WHERE id_customer =" . $idCustomer);
        return $orders['total'];
    }

    public function getTotalOfOrders($idCustomer){
        
        $orders =  Db::getInstance()->getRow("SELECT sum(total_paid) AS total FROM eu_orders WHERE id_customer =" . $idCustomer . " AND current_state IN (2, 3, 4, 5, 9, 10, 15)");
        return number_format($orders['total'], 2, ',', '');
    }

    public function getNumberAddresses($idCustomer){
        $addresses =  Db::getInstance()->getRow("SELECT count(*) total FROM eu_address WHERE id_customer =" . $idCustomer . " AND deleted=0");
        return $addresses['total'];
    }

    public function getLastViewedProducts(){


        $ids_viewed_products = explode(',', $this->context->cookie->viewed);
        $unique = array_unique($ids_viewed_products);
        $reversed = array_reverse($unique);
        $last_viewed_ids = array_slice($reversed, 0, 6);

        $products = array();
        foreach($last_viewed_ids AS $id){
            
            $sql = "SELECT eu_manufacturer.name AS brand, eu_product_lang.name AS name, eu_product.reference, eu_product.id_product AS id_product, eu_product_lang.description_short AS description_short, eu_manufacturer.id_manufacturer AS id_manufacturer
                    FROM eu_product
                    LEFT JOIN eu_product_lang
                    ON eu_product_lang.id_product = eu_product.id_product 
                    LEFT JOIN eu_manufacturer
                    ON eu_manufacturer.id_manufacturer = eu_product.id_manufacturer 
                    WHERE eu_product.id_product =" . $id . " AND eu_product_lang.id_lang = ". $this->context->language->id;
            
            $products[] = Db::getInstance()->getRow($sql);

        }
        return $products;
    }

    public function getMostBoughtProducts($idCustomer){
        
        $sql = "SELECT sum(product_quantity) AS number,eu_manufacturer.name AS brand, eu_manufacturer.id_manufacturer AS id_manufacturer, eu_product_lang.name AS name, eu_product.reference, eu_order_detail.product_id AS id_product, eu_product_lang.description_short AS description_short
            FROM eu_orders
            LEFT JOIN eu_order_detail
            ON eu_orders.id_order = eu_order_detail.id_order
            LEFT JOIN eu_product
            ON eu_order_detail.product_id = eu_product.id_product
            LEFT JOIN eu_product_lang
            ON eu_product_lang.id_product = eu_product.id_product 
            LEFT JOIN eu_manufacturer
            ON eu_manufacturer.id_manufacturer = eu_product.id_manufacturer 
            WHERE eu_orders.id_customer =" . $idCustomer . " AND eu_product_lang.id_lang = ". $this->context->language->id . " GROUP BY eu_order_detail.product_id ORDER BY number DESC 
            LIMIT 6";

        return Db::getInstance()->executeS($sql);
    }
    
    function random_color() { return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT); }
    
    function random_hexcolor() {
        return '#' . self::random_color() . self::random_color() . self::random_color();
    }

    public function bestSellers(){
        
        $bestseller = '';
        $bestsellerReference= '';

        $sql = "SELECT sum(product_quantity) AS product_quantity, product_reference
            FROM eu_order_detail
            WHERE id_order > 0
            AND product_reference NOT LIKE 'SHIPPING-%'
            GROUP BY product_id
            ORDER BY product_quantity DESC
            LIMIT 12";

        $products = Db::getInstance()->executeS($sql);
        
        foreach($products AS $i => $product){
            
            $bestsellerReference.= '"' . $product['product_reference'] . '"';
            $bestseller.= '"' . $product['product_quantity'] . '"';

            if($i < 11){
                $bestsellerReference.= ', '; 
                $bestseller.= ', '; 
            }
        }
        
        return [ 'colors' => '"' . self::random_hexcolor() . '"', 'references' => $bestsellerReference, 'values' => $bestseller ];
    }

    public function getTop100(){
        
        $top = [];

        $sql = "SELECT sum(product_quantity) AS product_quantity, product_reference, product_id
            FROM eu_order_detail
            WHERE id_order > 0
            GROUP BY product_id
            ORDER BY product_quantity DESC
            LIMIT 100";

        $products = Db::getInstance()->executeS($sql);
        
        foreach($products AS $i => $product){
            $top[]= ['reference' => $product['product_reference'], 'id_product' => $product['product_id']];
        }
        
        $top = array_chunk( $top , 33 ,true);
        
        return ['top1' => $top[0], 'top2' => $top[1], 'top3' => $top[2]];
    }
    
}
