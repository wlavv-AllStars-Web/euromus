<?php
class wmmodule_homepage extends Module
{
    public function __construct()
    {
        $this->name = "wmmodule_homepage";
        $this->tab = "front_office_features";
        $this->version = "1.0.0";
        $this->author = "All Stars Motorsport";
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;
        $this->module_key = '109266ed154d174c4856ec18homepage';
        $this->displayName = $this->l('Homepage editor');
        $this->description = $this->l('Professional');
        parent::__construct();
    }
	
    public function install()
    {
        if (parent::install() == false) return false;

		$tab = new Tab();
		$tab->active = 1;
		$tab->class_name = 'AdminWmModuleHomepage';
		$tab->position = 3;
		$tab->name = array();
		foreach (Language::getLanguages(true) as $lang) {
		$tab->name[$lang['id_lang']] = 'Homepage editor';
		}
		$tab->id_parent = 0;
		$tab->module = $this->name;
		$tab->add();
		$tab->save();

        return true;
    }
	
    public function uninstall()
    {
        if (parent::uninstall() == false) return false;
		
        return true;
    }
	
}