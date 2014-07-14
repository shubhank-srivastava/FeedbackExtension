<?php

class Shubhank_Feedback_Helper_Data extends Mage_Core_Helper_Abstract{
       
       public function getFeedbackCounts(){
       	    $resource = Mage::getSingleton('core/resource');
            $readConnection = $resource->getConnection('core_read');
            for ($i=1; $i < 11; $i++) { 
                $query = "SELECT count(opt_id_".$i.") FROM ".$resource->getTableName('shubhank_feedback_type')." WHERE opt_id_".$i."=1;" ;
                $results[] = $readConnection->fetchOne($query);
            }
            return $results;
        }
}

?>