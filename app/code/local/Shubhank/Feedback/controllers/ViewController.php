<?php

class Shubhank_Feedback_ViewController extends Mage_Core_Controller_Front_Action{

	public function viewAction(){
		$this->loadLayout();
		$this->renderLayout();
		return $this;
	}
}

?>