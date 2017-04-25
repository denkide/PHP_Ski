<?php

class Roster
{
    public $PersonID;
	public $LastName;
	public $FirstName;
	public $NSPNumber;
	public $JoinYear;
	public $PictureLink;
	public $PersonTypeID;
	public $BirthDate;
	public $ContactItem;
	public $ContactDetails;
	public $ContactType;
	public $PatrolAssignment;
  
	public function __constructor() {
		// initialize something if you need to
	}
	
	public function getRoster($rosterAssignment, $dbConn)
	{
		try {
			$stmt = $dbConn->prepare("CALL wp_getRoster(?);");
			$stmt->execute(array($rosterAssignment));
			return $stmt->fetchAll(PDO::FETCH_CLASS,'Roster');
        }
        catch (Exception $e)
        {
             echo "<BR>Errors occurred: <br>" . $e;
        }
	}
	
	
}

?>