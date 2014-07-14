<?php

class Shubhank_Feedback_Model_Type extends Mage_Core_Model_Abstract{

	public function _construct(){

		$this->_init('shubhank_feedback/type');
		parent::_construct();

	}

	public function createFeed($data){
		try{
			if(!empty($data)){
				$resource   = Mage::getSingleton('core/resource');
                $connection = $resource->getConnection('core_write');
                $orderId    = $data['orderId'];
                $opt        = $data['opt'];
                $feed       = $data['feed'];
                $query      ="INSERT INTO `shubhank_feedback_type` (`orderId`,`opt_id_1`,`opt_id_2`,`opt_id_3`,`opt_id_4`,`opt_id_5`,`opt_id_6`,`opt_id_7`,`opt_id_8`,`opt_id_9`,`opt_id_10`,`feed`,`feed_date`) VALUES (\"$orderId\",\"$opt[0]\",\"$opt[1]\",\"$opt[2]\",\"$opt[3]\",\"$opt[4]\",\"$opt[5]\",\"$opt[6]\",\"$opt[7]\",\"$opt[8]\",\"$opt[9]\",\"$feed\",NOW());";
                $connection->multiQuery($query);
 	
			}else {
				throw new Exception("Error Processing Request: Insufficient data provided.");
			}
			
		}catch (Exception $e){
			Mage::logException($e);
		}
		return $this;
	}
    
    public function getOptions(){
    	try {
    		$resource = Mage::getSingleton('core/resource');
            $readConnection = $resource->getConnection('core_read');
            $query = 'SELECT * FROM ' . $resource->getTableName('shubhank_feedback_options');
            $results = $readConnection->fetchAll($query);
            return $results;
    	} catch (Exception $e) {
    		Mage::logException($e);
    	}
    }

    public function getFeedbacks(){
    	try {
    		$resource = Mage::getSingleton('core/resource');
            $readConnection = $resource->getConnection('core_read');
            $query = 'SELECT * FROM ' . $resource->getTableName('shubhank_feedback_type');
            $results = $readConnection->fetchAll($query);
            return $results;
    	} catch (Exception $e) {
    		Mage::logException($e);
    	}
    } 

    public function saveOptions($data){
    	try {
				$resource   = Mage::getSingleton('core/resource');
                $writeConnection = $resource->getConnection('core_write');
                $readConnection = $resource->getConnection('core_read');
                $opt=$data['opt'];
                
                $query      ="SELECT * FROM `shubhank_feedback_options`;";
                $results=$readConnection->fetchOne($query);
                if(empty($results)){
                    for ($i=1; $i < 11 ; $i++) { 
                	    $query      ="INSERT INTO shubhank_feedback_options (options) VALUES (\"$opt[$i]\")";
                        $writeConnection->query($query);
                    }
                }else{
                	for ($i=1; $i < 11 ; $i++) { 
                	    $query      ="UPDATE shubhank_feedback_options SET options=\"$opt[$i]\" WHERE `id`=$i;";
                        $writeConnection->query($query);
                    }
                }
                return 1;
			
    	} catch (Exception $e) {
    		Mage::logException($e);
    	}
    }
    
}

?>