<?php

class Shubhank_Feedback_Model_Mysql4_Type_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract{

	public function _construct(){

	    $this->_init('shubhank_feedback/type');
	    parent::__construct();
	}
}

?>