<?php

include_once 'objects/dbconn.php';
include_once 'objects/roster.php';

class DAL {
    
    private $dbConn = null;
	
	public function __construct() {
		try {
			 if (empty($dbConn)) {
				$db = new DBConn();
				$this->dbConn = $db->getConn();
			}
		}
		 catch (Exception $e)
         {
             echo $e;
         }
	}
	
	
	// ------------------------------------------------
	// 	By: David Renz
	//	Date: 1/2/2017
	// ------------------------------------------------
	//	getPatrolRoster  
	//		--> returns all patrollers in the patrol assignment
	//			which is passed in. (ie: 'Patrol 1')
	//	
	//	In: 	$rosterAssignment --> the patrol 
	//	Out:	an array of patrollers in the patrol
	// -------------------------------------------------
    public function getPatrolRoster($rosterAssignment) {
         try {
			$roster = new Roster();
			return $roster->getRoster($rosterAssignment, $this->dbConn);
         }
         catch (Exception $e)
         {
             echo $e;
         }
    }

	
}

?>




