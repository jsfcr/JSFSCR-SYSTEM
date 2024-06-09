<?php 

	$getAllHist = mysqli_query($conn, "SELECT * from user_hist order by hist_date desc");
	

 ?>