<div class="row">
	
	<form class="form-control col-12 row row-col-auto">

<?php 
	for ($i=0; $i <6; $i++) { 

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
			
			default:
				$tit = "Not set";
				$desc = "";
				$trnslnk = "";
				break;
		}

	

 ?>

<a href="'.dmnmain.'"></a>
		<div class="card img-fluid row-col-sm-3 row-col-md-4 my-3">
			<i>&nbsp</i>
			<div class="card-header bg-success">
				<h4><?php echo $tit; ?></h4>
			</div>

			<div class="card-body">
			 	<p class="small card-text"><?php echo $desc; ?></p>
			</div>

			<div class="card-footer">
			 	<li class="card-text">
			 		<a href="<?php echo $trnslnk;?>" class="card-link">View more </a>	
			 	</li>
			</div>

		</div>


<?php } ?>

		
	</form>

</div>