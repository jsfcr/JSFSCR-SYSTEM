
	
	

	<form class="bg-transparent border-0">
		<div class="row bg-transparent">
<?php 
	for ($i=0; $i < 6; $i++) { 

		switch ($i){
			case '0':
				$tit 	= $title1;
				$desc 	= $discript1;
				$trnslnk = $transferLink1;
				break;

			case '1':
				$tit 	= $title2;
				$desc 	= $discript2;
				$trnslnk = $transferLink2;
				break;

			case '2':
				$tit 	= $title3;
				$desc 	= $discript3;
				$trnslnk = $transferLink3;
				break;

			case '3':
				$tit 	= $title4;
				$desc 	= $discript4;
				$trnslnk = $transferLink4;
				break;

			case '4':
				$tit 	= $title5;
				$desc 	= $discript5;
				$trnslnk = $transferLink5;
				break;

			case '5':
				$tit 	= $title6;
				$desc 	= $discript6;
				$trnslnk = $transferLink6;
				break;
			
			// default:
			// 	$tit = "Not set";
			// 	$desc = "";
			// 	$trnslnk = "";
			// 	break;
		}

	

 ?>


	

		<div class="card col-sm-12 col-md-6 col-lg-4 bg-transparent border-0">
			<i>&nbsp</i>
			<div class="card-header bg-success round-topleft">
				<h4><?php echo $tit; ?></h4>
			</div>

			<div class="card-body bg-white">
			 	<p class="small card-text"><?php echo $desc; ?></p>
			</div>

			<div class="card-footer bg-white">
			 	<li class="card-text">
			 		<a href="<?php echo $trnslnk;?>" class="card-link">View more </a>	
			 	</li>
			</div>

		</div>


<?php } ?>

	

</div>

</form>


