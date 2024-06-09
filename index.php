<?php 

include 'config.php';
include con.''.connGlob;
include cls.''.clsGlob;
include cls.''.varGlob;
include cls.''.useIncGlob;

include stl.'top.php';



$logstat;

	if (!isset($_SESSION['log'])) {
		$_SESSION['log']=false;
		$logstat 	= 0;
		
	}elseif($_SESSION['log']==true){
		$logstat 	= 1;
		
	}elseif($_SESSION['log']==false){
		$logstat 	= 0;
		
	}




if ($logstat==0) {
	include stl.'login.php';
}
else
{
	include stl.'header.php';
	include stl.'nav.php';
	include stl.'body.php';
	include stl.'footer.php';
}



include stl.'bottom.php';


 ?>