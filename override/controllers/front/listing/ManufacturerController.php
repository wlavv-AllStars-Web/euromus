<?php

class ManufacturerController extends ManufacturerControllerCore
{

    public function getTemplateVarManufacturers()
    {
        $manufacturers = Manufacturer::getManufacturers(true, $this->context->language->id);
        $manufacturers_for_display = [];

        foreach ($manufacturers as $manufacturer) {
            $manufacturers_for_display[$manufacturer['id_manufacturer']] = $manufacturer;
            $manufacturers_for_display[$manufacturer['id_manufacturer']]['text'] = $manufacturer['short_description'];
            $manufacturers_for_display[$manufacturer['id_manufacturer']]['image'] = $this->context->link->getManufacturerImageLink($manufacturer['id_manufacturer'], 'small_default');
            $manufacturers_for_display[$manufacturer['id_manufacturer']]['image_h'] = $this->context->link->getManufacturerImageLink($manufacturer['id_manufacturer'], 'home_default');
            $manufacturers_for_display[$manufacturer['id_manufacturer']]['url'] = $this->context->link->getManufacturerLink($manufacturer['id_manufacturer']);
            $manufacturers_for_display[$manufacturer['id_manufacturer']]['nb_products'] = $manufacturer['nb_products'] > 1 ? ($this->trans('%number% products', ['%number%' => $manufacturer['nb_products']], 'Shop.Theme.Catalog')) : $this->trans('%number% product', ['%number%' => $manufacturer['nb_products']], 'Shop.Theme.Catalog');
        }

        return $manufacturers_for_display;
    }
}