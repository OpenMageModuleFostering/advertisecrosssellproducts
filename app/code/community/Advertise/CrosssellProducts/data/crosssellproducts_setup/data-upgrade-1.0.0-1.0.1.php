<?php
/**
 * Upgrade db
 *
 * @package Advertise_CrosssellProducts
 */

$installer = $this;
$installer->startSetup();
$crosssellCount = Mage::getStoreConfig('advertise_crosssellproducts_options/advertise_crosssell_products/advertise_prod_count');
if ($crosssellCount) {
    // Copy old setting to new path
    Mage::getModel('core/config')->saveConfig('advertise_suggestedproducts_options/advertise_suggested_products/advertise_crosssell_prod_count', $crosssellCount );
    // Delete old path
    Mage::getModel('core/config')->deleteConfig('advertise_crosssellproducts_options/advertise_crosssell_products/advertise_prod_count');
}
$installer->endSetup();
?>