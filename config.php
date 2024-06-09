<?php 
	
	session_start();

	//extended variable for single special uses only
	define('paramValue', (!isset($_GET['param'])) ? '' : $_GET['param'] );
	
	//url setup
 	define( 'dmn','http://localhost/JSFSCR-SYSTEM/' );
    define( 'dmnmain',		dmn.'?param=');
    define('paramlnk', '?param='.paramValue.'');
    define('newparam', '?param=');


	//folder selection
	define('con', 'Con/');
	define('cls', 'Cls/');
	define('img', 'Img/');
	define('imgfp', 'fp_images/');
	define('stl', 'Style/');
	define('mod', 'Mod/');
	define('lib', 'Lib/');
	define('ph', 'php/');
	define('css', 'Css/');
	define('jsn', 'json/');
	define('fnc', 'function/');
	define('uru', 'UareUSampleWEB/');

	//global pages
	define('connGlob', 'connection.php');
	define('clsGlob', 'classes.php');
	define('insallGlob', 'insert_all.php');
	define('delGlob', 'delete.php');
	define('updGlob', 'update.php');
	define('cssGlob', 'css.css');
	define('varGlob', 'variable.php');
	define('jsGlob', 'jscript-global.js');
	define('useIncGlob', 'user_interaction.php');
	define('jsnGlob', 'philippine_provinces_cities_municipalities_and_barangays_2019v2.js');


	//module folders
	define('dash', 'dashboard/');
	define('reg', 'registration/');
	define('cse', 'cases/');
	define('ncse', 'new_case/');
	define('ccse', 'close_case/');
	define('pcse', 'pending_case/');
	define('stlst', 'student_list/');
	define('hfui', 'user_history/');
	define('mn', 'main/');


	//parameter call
	define('dashp', 'dashboard');
	define('regp', 'registration');
	define('csep', 'cases');
	define('ncsep', 'new_case');
	define('ccsep', 'close_case');
	define('pcsep', 'pending_case');
	define('stlstp', 'student_list');
	define('hfuip', 'user_history');
	define('mnp', 'main');


	//global pages
	define('core', 'core.php');
	define('mnphp', 'main.php');

	//unique pages
	define('case_list','case_list.php');
	define('ncase_list','new_case_list.php');
	define('ccase_list','close_case_list.php');
	define('pcase_list','pending_case_list.php');
	define('student_list','student_list.php');
	define('user_hist','user_history.php');
	define('reg_student', 'registration.php');


	//logo and bground
	define('bgimg', './'.img.'bg-seaofclouds.jpg');
	define('loglogo', './'.img.'logopng.png');
	define('logo2', './'.img.'logo2.png');


	//http request GET
	//$getValue = (isset($_GET["Dashboard"])) Dashboard : Error ;
	//define('Dash',  $getValue);
	



 ?>