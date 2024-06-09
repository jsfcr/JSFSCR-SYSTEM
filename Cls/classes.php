<?php 

	

	function logincredential($user, $pass,$con){

		$loginSql = mysqli_query($con,"SELECT * from user_account WHERE user_username = '$user' and user_password = '$pass' and status = 1");

		$fetch = $loginSql->fetch_assoc();
		$count = $loginSql->num_rows;

		if ($count >= 1) {

			$_SESSION['log'] 			= true;
			$_SESSION['position'] 		= $fetch['position'];
			$_SESSION['fullname'] 		= $fetch['user_name'];
			$_SESSION['emp_id']			= $fetch['user_id'];
			$_SESSION['biometric']		= $fetch['user_biometric'];
			$_SESSION['user_status'] 	= $fetch['status'];
			header('location:'.dmn);		

		} else {

			$_SESSION['log'] 			= false;
			$logstat					= 0;
			echo '<script language="javascript">;
				alert("Username or Password is incorrect!");
				location.href="'.dmnmain.'error";
			</script>';
			
		}
	}














 ?>