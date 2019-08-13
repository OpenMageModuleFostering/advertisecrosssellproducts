<?php
/**
 * CrosssellProductsController.php
 *
 * Backend controller
 *
 * @package Advertise_CrosssellProducts
 */
class Advertise_Importer_Adminhtml_CrosssellProductsController extends Mage_Adminhtml_Controller_Action
{
    /**
     * Default Action
     */
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Crosssell Products"));
	   $this->renderLayout();
    }
    
    public function postAction()
    {
    }
}