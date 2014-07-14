<?php

class Shubhank_Feedback_IndexController extends Mage_Core_Controller_Front_Action{

	public function indexAction(){
		$this->_redirect('/');
	}

	public function newFeedAction(){
		
		try{
			$data=$this->getRequest()->getParams();
			$registry=Mage::getModel('shubhank_feedback/type');
			if($this->getRequest()->getPost()&&!empty($data)){
			    $registry->createFeed($data);
				$this->_redirect('/');
			}else 
			    throw new Exception("Error Processing Request: Insufficient data");
		}catch (Exception $e){
			$this->_redirect('*/*/');
		}
	}
}

?>