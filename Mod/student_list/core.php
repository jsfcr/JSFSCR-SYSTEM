<?php 

	switch ($mode) {
		case 'stlst':
			include mod.''.stlst.''.mn.''.student_list;
			break;
		
		default:
			include mod.''.stlst.''.mn.''.mnphp;
			break;
	}
 


include mod.''.stlst.''.fnc.'modal.php';

 ?>


 <script type="text/javascript" src="<?php echo mod.''.stlst.'ajax/student_list_func.js'; ?>"></script>