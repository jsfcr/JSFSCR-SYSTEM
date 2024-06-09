<?php 

	switch ($mode) {
		case 'hfui':
			include mod.''.hfui.''.mn.''.user_hist;
			break;
		
		default:
			include mod.''.hfui.''.mn.''.mnphp;
			break;
	}
 ?>