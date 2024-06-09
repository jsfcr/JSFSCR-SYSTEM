<?php 

	switch ($mode) {
		case 'stlst':
			include mod.''.stlst.''.mn.''.blist;
			break;
		
		default:
			include mod.''.dash.''.mn.''.mnphp;
			break;
	}
 ?>