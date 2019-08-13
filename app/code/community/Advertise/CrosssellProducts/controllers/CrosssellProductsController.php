<?php
class Advertise_CrosssellProducts_CrosssellProductsController extends Mage_Core_Controller_Front_Action {
    /**
     * Default Action
     * // Path to this method: /crosssellproducts/CrosssellProducts/index
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->_title($this->__("Adverti.se Crosssell Products"));
        $this->renderLayout();
    }

    // Path to this method: /crosssellproducts/CrosssellProducts/getcrosssell
    public function getcrosssellAction() {
        // Create crosssell products block with IDs in request
        echo $this->getLayout()->createBlock('catalog/product_list_crosssell')->setTemplate('checkout/cart/crosssell.phtml')->toHtml();
    }

    public function postAction()
    {

    }

}

?>
