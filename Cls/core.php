<?php 

if (isset($_POST["msyqlStatus"])) {

$queryStatus = $_POST["msyqlStatus"];

}
else
{
	$queryStatus = "default";
}
switch ($queryStatus) {
	case 'insert':
		include 'insert_all.php';
		break;

	case 'delete':
		include 'delete.php';
		break;

	case 'update':
		include 'update.php';
		break;

	case 'select':
		// code...
		break;
	
	default:
		// code...
		break;
}

 ?>