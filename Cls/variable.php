<?php 

$param = (isset($_GET["param"])) ? $_GET["param"] : '';

$mode = (isset($_GET["mode"])) ? $_GET["mode"] : '';

$func = (isset($_GET["fnc"])) ? $_GET["fnc"] : '';

//sample variable



//session variables
if (isset($_SESSION['log']) and $_SESSION['log'] == true) {
$position 		=			$_SESSION['position'];
$fullname 		=			$_SESSION['fullname'];
$empid 			=			$_SESSION['emp_id'];
$biometric 		=			$_SESSION['biometric'];
$user_stat 		=			$_SESSION['user_status'];


$sessionData = array(
		"position" => $position,
		"fullname" => $fullname,
		"empid" => $empid ,
		"biometric" => $biometric,
		"user_status" => $user_stat	
	);

$jsonData = json_encode($sessionData);
$filepath = jsn."session.json";
$fileWriteToJson = file_put_contents($filepath, $jsonData);
}




//dashboard title variables

$title1 = "Case List";
$title2 = "New Cases";
$title3 = "Pending Cases";
$title4 = "Case Close";
$title5 = "Student List";
$title6 = "User History";


$discript1 = "List of over all cases";
$discript2 = "List of new cases";
$discript3 = "List of Pending Cases";
$discript4 = "List of Close Cases";
$discript5 = "Student Master List";
$discript6 = "History of user interaction to the system";

$transferLink1 = newparam."".csep."&mode=clst";
$transferLink2 = newparam."".ncsep."&mode=ncst";
$transferLink3 = newparam."".pcsep."&mode=pcst";
$transferLink4 = newparam."".ccsep."&mode=ccls";
$transferLink5 = newparam."".stlstp."&mode=stlst";
$transferLink6 = newparam."".hfuip."&mode=hfui";

//insert db attibutes
$varG_stdID 			= "student_id";
$varG_stdName 			= "student_name";
$varG_stdMnme 			= "student_middle_name";
$varG_stdFnme 			= "student_family_name";
$varG_stdSfx 			= "student_suffix";
$varG_stdCrs 			= "student_course";
$varG_stdYr 			= "student_year";
$varG_stdHbrzp 			= "student_houseno_buillding_roomno";
$varG_stdRgn 			= "student_region";
$varG_stdPrvn 			= "student_province";
$varG_stdCty 			= "student_city";
$varG_stdBrgy 			= "student_barangay";
$varG_stdZpc 			= "zip_code";
$varG_stdLfPinky 		= "left_pinky";
$varG_stdLfRgtFinger 	= "left_ring_finger";
$varG_stdLfmdlFinger 	= "left_middle_finger";
$varG_stdLFindFinger 	= "left_index_finger";
$varG_stdLfThumb 		= "left_thumb";
$varG_stdRfThumb 		= "right_thumb";
$varG_stdRFindFinger 	= "right_index_finger";
$varG_stdRfmdlFinger 	= "right_middle_finger";
$varG_stdRfRgtFinger 	= "right_ring_finger";
$varG_stdRfPinky 		= "right_pinky";	
$imgUri_stdLfPinky 		= "img_left_pinky";
$imgUri_stdLfRgtFinger 	= "img_left_ring_finger";
$imgUri_stdLfmdlFinger 	= "img_left_middle_finger";
$imgUri_stdLFindFinger 	= "img_left_index_finger";
$imgUri_stdLfThumb 		= "img_left_thumb";
$imgUri_stdRfThumb 		= "img_right_thumb";
$imgUri_stdRFindFinger 	= "img_right_index_finger";
$imgUri_stdRfmdlFinger 	= "img_right_middle_finger";
$imgUri_stdRfRgtFinger 	= "img_right_ring_finger";
$imgUri_stdRfPinky 		= "img_right_pinky";


//finger print variable
$fingerP1 = "Pinky";
$fingerP2 = "Ring Finger";
$fingerP3 = "Middle Finger";
$fingerP4 = "Index Finger";
$fingerP5 = "Thumb";
$fingerP6 = "Thumb";
$fingerP7 = "Index Finger";
$fingerP8 = "Middle Finger";
$fingerP9 = "Ring Finger";
$fingerP10 = "Pinky";

$folderPathGlob = '../Img/fp_images/';



$fpArray = array(
	"fingerP1" => array("Pinky",$imgUri_stdLfPinky),
	"fingerP2" => array("Ring Finger",$imgUri_stdLfRgtFinger),
	"fingerP3" => array("Middle Finger",$imgUri_stdLfmdlFinger),
	"fingerP4" => array("Index Finger",$imgUri_stdLFindFinger),
	"fingerP5" => array("Thumb",$imgUri_stdLfThumb),
	"fingerP6" => array("Thumb",$imgUri_stdRfThumb),
	"fingerP7" => array("Index Finger",$imgUri_stdRFindFinger),
	"fingerP8" => array("Middle Finger",$imgUri_stdRfmdlFinger),
	"fingerP9" => array("Ring Finger",$imgUri_stdRfRgtFinger),
	"fingerP10" => array("Pinky",$imgUri_stdRfPinky)
);

//$deleteBtnP1 = '<button type="button" class="btn btn-danger" id="delBtn"><i class="bi bi-trash white"></i></button>';
$studentId = '';
function deleteBtnFunc($id){
	
	$deleteBtn = '<button type="button" class="btn btn-danger" onclick="openModalwithId(this.value)" value="'.$id.'"  id="delBtn" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash white"></i></button>';

	return $deleteBtn;
}

// close
 ?>