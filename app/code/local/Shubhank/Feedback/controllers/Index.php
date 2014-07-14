<?php

class Shubhank_Feedback_IndexController extends Mage_Core_Controller_Front_Action{

	public function indexAction(){
		$this->loadLayout();
		$this->renderLayout();
		return $this;
	}

	public function newFeedback(){
		$this->loadLayout();
		$this->renderLayout();
		return $this;
	}
}