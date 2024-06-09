<?php 
	include '../Con/connection.php';
	$studIdds = $_POST["stIDD"];



	$getAllFpData = mysqli_query($conn,"SELECT * from student WHERE student_id = '$studIdds'");

	$fetchData = $getAllFpData->fetch_assoc();

	$dataArray = array(
		"img_left_pinky" => $fetchData["img_left_pinky"],
		"img_left_ring_finger" => $fetchData["img_left_ring_finger"],
		"img_left_middle_finger" => $fetchData["img_left_middle_finger"],
		"img_left_index_finger" => $fetchData["img_left_index_finger"],
		"img_left_thumb" => $fetchData["img_left_thumb"],
		"img_right_thumb" => $fetchData["img_right_thumb"],
		"img_right_index_finger" => $fetchData["img_right_index_finger"],
		"img_right_middle_finger" => $fetchData["img_right_middle_finger"],
		"img_right_ring_finger" => $fetchData["img_right_ring_finger"],
		"img_right_pinky" => $fetchData["img_right_pinky"]
	);

echo json_encode($dataArray);
	// if (file_exists($folderPathGlob.$filenameOnFolder)) {
    //    $imageView = '<img src="'.img.imgfp'"finger-print-notuploaded.png" class="img-fluid">';
    //    }
    //    else
    //    {
    //    $imageView = '<img src="'.img.'"finger-print-notuploaded.png" class="img-fluid">';
    //    }

 ?>