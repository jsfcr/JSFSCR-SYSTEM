<?php 

include '../Con/connection.php';

if (isset($_POST["delTable"]) and $_POST["stField"] and $_POST["stid"]) {

$tableSet = $_POST["delTable"];
$fieldSet = $_POST["stField"];
$dataSet = $_POST["stid"];



function delete($tablename="",$id="",$id_value="",$conn="",$log=0,$br_c="")
	{
		$sql	= "DELETE FROM `$tablename` WHERE `$id` = '$id_value' ";
		mysqli_query($conn,$sql);
			
	}

	delete($tableSet,$fieldSet,$dataSet,$conn);
	
}
	

 ?>