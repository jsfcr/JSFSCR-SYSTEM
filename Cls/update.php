<?php 
	include '../Con/connection.php';
	$folderPath = '../Img/fp_images/';
	$imgName = $_POST["fpImgName"];
	$imgUri = $_POST["imageURI"];

	// // requires php5
	define('UPLOAD_DIR', $folderPath);
	$img = $imgUri;
	$data = file_get_contents($img);
	$file = UPLOAD_DIR . $imgName . '.png';
	$success = file_put_contents($file, $data);
	print $success ? $file : 'Unable to save the file.';

	$fieldSpil = explode("-", $imgName);
	$finalfieldVal = $fieldSpil[1];
	$studentId = $fieldSpil[0];
	
	$filenewname = $imgName.'.png';
print_r($filenewname);	



try {
 mysqli_query($conn,"UPDATE student SET $finalfieldVal = '".$filenewname."' WHERE student_id = '".$studentId."'");
    echo "Updated successfully"; 
   // print_r($conn) ;
} catch (mysql_error $e) {
    echo "Update failed: " . $e->getMessage();
    //header('location:'.dmn.''.stl.'logout.php');
}

 ?>