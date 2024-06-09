<?php 
include '../Con/connection.php';
if (isset($_POST["dataSet"]) and $_POST["tableSet"]) {



$dataSet = $_POST["dataSet"];
$tableSet = $_POST["tableSet"];
function insert_all($tablename="",$values=array(),$conn="",$log=0,$br_c="")
	{
		$fields			= "";
		$data_values	= "";
		$ctr			= 0;
		foreach($values as $key=> $value)
		{

			if( $ctr == 0 )
			{
				if($value == "now")
				{
					$fields			.= "`$key`";
					$data_values	.= "NOW()";
				}
				else
				{
					$fields			.= "`$key`";
					$data_values	.= "'$value'";
				}
			}
			else
			{
				if($value == "now")
				{
					$fields			.= ",`$key`";
					$data_values	.= ", NOW()";
				}
				else
				{
					$fields			.= ",`$key`";
					$data_values	.= ",'$value'";	
				}
			}
			$ctr++;
		}
	    $sql	= "INSERT INTO `$tablename` ( $fields ) VALUES ($data_values)";
		//echo $sql; exit();
		mysqli_query($conn,$sql);
		
	
	}
insert_all($tableSet,$dataSet,$conn);
// print_r($dataSet);
	
	
}
 ?>