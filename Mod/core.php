<?php 

	switch ($param) {
		case 'user_history':
			include mod.''.hfui.''.core;
			break;

		case 'cases':
			include mod.''.cse.''.core;
			break;

		case 'new_case':
			include mod.''.ncse.''.core;
			break;

		case 'close_case':
			include mod.''.ccse.''.core;
			break;

		case 'pending_case':
			include mod.''.pcse.''.core;
			break;

		case 'student_list':
			include mod.''.stlst.''.core;
			break;

		case 'registration':
			include mod.''.reg.''.core;
			break;

		case 'dashboard':
			include mod.''.dash.''.core;
			break;
			
		
		default:
			include mod.''.dash.''.core;
			break;
	}




	
 ?>