<?php
class AdminWmModuleAlertMessagesController extends AdminController{
    
    public function __construct(){
        $this->bootstrap = true;
        parent::__construct();
        $this->context = Context::getContext();
    }

    public function initContent(){
        parent::initContent();
        include dirname(__FILE__).'/../../classes/WmModuleMain.php';
        $this->context->smarty->assign("wm_page_name", 'Alert Messages');
        $this->context->smarty->assign("messages", Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('SELECT * FROM '._DB_PREFIX_.'asd_alert_messages WHERE deleted = 0'));
        $content = $this->context->smarty->fetch(_PS_MODULE_DIR_. 'asd_alert_messages/views/templates/admin/view.tpl');
        $this->context->smarty->assign("content", $content);
    }
    
    public function postProcess(){
        if(Tools::getValue('action') == 'saveMessage') return self::saveMessage();
        elseif(Tools::getValue('action') == 'deleteMessage') return self::deleteMessage();
    }
    
    public function saveMessage(){

        $id = (int)Tools::getValue('id');
    
        // Retrieve values from request
        $title = pSQL(Tools::getValue('title'));
        $message_type = pSQL(Tools::getValue('message_type'));
        if(Tools::getValue('message_status') === true){
            $message_status = 1;
        }else{
            $message_status = 0;
        }
        
        $message_en = pSQL(Tools::getValue('message_en'));
        $message_es = pSQL(Tools::getValue('message_es'));
        $message_fr = pSQL(Tools::getValue('message_fr'));
        $message_ro = pSQL(Tools::getValue('message_ro'));
        $message_pt = pSQL(Tools::getValue('message_pt'));
        $message_it = pSQL(Tools::getValue('message_it'));

        if (Tools::getValue('id') == 0) {
            $sql = 'INSERT INTO ' . _DB_PREFIX_ . 'asd_alert_messages (title, message_type, message_status, message_en, message_es, message_fr, message_ro, message_pt, message_it) 
                VALUES (\'' . $title . '\', \'' . $message_type . '\', ' . $message_status . ', \'' . $message_en . '\', \'' . $message_es . '\', \'' . $message_fr . '\', \'' . $message_ro . '\', \'' . $message_pt . '\', \'' . $message_it . '\')';
        
            Db::getInstance()->execute($sql);
        }else {
            
            $sql = 'UPDATE ' . _DB_PREFIX_ . 'asd_alert_messages 
                    SET title = \'' . $title . '\', message_type = ' . $message_type . ', message_status = ' . $message_status . ', 
                        message_en = \'' . $message_en . '\', message_es = \'' . $message_es . '\', message_fr = \'' . $message_fr . '\', 
                        message_ro = \'' . $message_ro . '\', message_pt = \'' . $message_pt . '\', message_it = \'' . $message_it . '\' 
                    WHERE id = ' . $id;
            
            Db::getInstance()->execute($sql);
        }
        
        Tools::redirect($_SERVER['REQUEST_URI']); 
    }
    
    public function deleteMessage(){
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->execute("UPDATE "._DB_PREFIX_."asd_alert_messages SET `deleted`=1, deleted_date=NOW()  WHERE id=" . Tools::getValue('id'));
    }
    
    public function hookDisplayBackOfficeHeader()
    {
       $this->context->controller->addCss($this->_path.'css/tab.css');
    }
}