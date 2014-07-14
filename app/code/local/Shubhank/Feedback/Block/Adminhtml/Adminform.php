<?php
class Shubhank_Feedback_Block_Adminhtml_Adminform extends Mage_Adminhtml_Block_Template {
public function __construct() {
    parent::__construct();
    $this->setTemplate('shubhank/option.phtml');
    $this->setFormAction(Mage::getUrl('*/*/saveoption'));
  }
}
?>