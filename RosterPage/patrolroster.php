<?php
$page_title = "Patrollers";

// include UI files
include_once "includes/header.php";


// include database and DAL objects
include_once 'objects/DAL.php';


// setup all the patrols into an array 
// 		-->  Note: This should go into a config file so that it is configurable.
//		--> Note: These values MUST be the same as the values in the PatrolAssignment table
//				  The values in the PatrolAssignment table should NOT be editable by users 
//				 (only admins who will then need to update this list)
$patrollAssignment = array(
	"Patrol 1",
	"Patrol 2",
	"Patrol 3",
	"Patrol 4",
	"Flex",
	"Candidate"
);

?>

<link rel="stylesheet" type="text/css" href="style/roster_style.css" />
<link rel="stylesheet" type="text/css" href="style/style.css" />
<style>
	table.roster img {
		border: 2px solid #eeeeee;
	    border-radius: 50%;
	    height: 70px;
	    padding: 1px;
	    width: 70px;
	}
	table.roster tr td:first-child {width: 31px;}
	
th {text-align: center;}

</style>


<?php 
// setup query for the DAL --> which will in turn query to Roster object
$query = new DAL();

// loop through the patrol assignment array to get the patrollers for each assignment
foreach($patrollAssignment as $assignment) {

?>
	<table id="patrol1" class="roster" cellspacing='0'> <!-- cellspacing='0' is important, must stay -->
		<caption align=top><font size=4><strong><?= $assignment ?></strong></font></caption>
		<tr>
			<th>Picture</th>
			<th>Name</th>
			<th>Patrol</th>
			<th>Assignments</th>
			<th>Primary Contact</th>
		</tr>
<?php
	// get the results from the DAL 
	$result = $query->getPatrolRoster($assignment);
	
	// loop through the results and hydrate the table with the patrol roster
	foreach($result as $patroller) 
	{
?>		
		<tr>
			<td><img src="img/<?= $patroller->PictureLink ?>" alt="mug" /></td>
			<td><?= $patroller->FirstName ?> <?= $patroller->LastName ?><div class=''></div></td>
			<td><?= $patroller->NSPNumber ?> </td>
			<td><?= $patroller->PatrolAssignment ?></td>
			<td><?= $patroller->ContactType ?> <?= $patroller->ContactDetails ?> </td>
		</tr>
<?php		
	}
?>
	</table>
	
<?php	
}
?>
 
</html>
