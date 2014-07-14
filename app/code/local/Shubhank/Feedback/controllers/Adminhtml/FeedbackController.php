<?php

class Shubhank_Feedback_Adminhtml_FeedbackController extends Mage_Adminhtml_Controller_Action{

    public function indexAction(){
      $this->loadLayout();
		
		$block = $this->getLayout()->createBlock(
			'Mage_Core_Block_Template',
			'my_block_name_here',
			array('template' => 'shubhank/feedback.phtml')
		);
	    $this->getLayout()->getBlock('content')->append($block);
		$this->renderLayout();
    }

    public function groupAction(){
      $this->loadLayout();
		
		$block = $this->getLayout()->createBlock(
			'Mage_Core_Block_Template',
			'my_block_name_here',
			array('template' => 'shubhank/group.phtml')
		);
	    $this->getLayout()->getBlock('content')->append($block);
		$this->renderLayout();
    }
    
    public function optionAction(){
      $this->loadLayout();
		
		$block = $this->getLayout()->createBlock(
			'shubhank_feedback/adminhtml_adminform',
			'admin_form');
	    $this->getLayout()->getBlock('content')->append($block);
		$this->renderLayout();
    }
	
	public function saveoptionAction(){
        $this->loadLayout();
		
		$block = $this->getLayout()->createBlock(
			'Mage_Core_Block_Template',
			'my_block_name_here',
			array('template' => 'shubhank/saveoption.phtml')
		);
	    $this->getLayout()->getBlock('content')->append($block);
		$this->renderLayout();
    }
}

?>