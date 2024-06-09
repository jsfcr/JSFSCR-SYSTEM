<div class="col-sm-8 col-md-6 col-lg-3 bg-danger mx-auto">
	
	<div class="card border border-0">
		<div class="card-header col-sm-6 col-md-8 col-lg-10 mx-auto border-0">
			<img class="card-img-top" src="<?php echo loglogo; ?>" alt="Card image">
		</div>
			<form method="post" id="loginform" nowvalidate> 
		<div class="card-body">
		
				
				<div class="form-floating input-group input-group-sm mb-3">
					<div class="input-group-text"><i class="bi bi-person-fill"></i></div>
					<input name="usercred" class="form-control form-input bg-transparent fs-6" type="text" placeholder="Email Adrress / Mobile number" id="username" autocomplete="off"  required>
					<label for="username" class="form-label-custom ms-4">Email Address / Mobile number</label>
				</div>

				

				<div class="form-floating input-group input-group-sm mb-3">
					<div class="input-group-text"><i class="bi bi-shield-lock-fill"></i></div>
					<input  name="passcred" class="form-control form-input bg-transparent fs-6" type="password" placeholder="Password">
					<label class="form-label-custom ms-4">Password</label>
				</div>

			<div class="container-fluid row col-12 mx-auto">
				<div class="form-check col-4 ">
				
					<input type="checkbox" id="rem" class="form-check-input border border-primary">
					<label for="rem" class="form-check-label">Remember</label>
				</div>
				<?php 
					echo $logstat;
				 ?>
				<div class="col-8 text-end">
					<a href="#" class="text-underline-danger text-danger">Forgot Password ?</a>
				</div>
				<div class="col-12 text-center">
					<span class="">Not registered? </span>
					<a href="#" class="link text-primary">Sign up</a> <span class="">here! </span>
				</div>

			</div>
				

			
			
		</div>
		<div class="card-footer row border-0">
			<button class="mx-auto btn btn-primary" id="submitLbtn" name="loginBtn" value="loginBtn">Login</button>
		</div>
	</form>
	</div>

</div>

<?php 

	if (isset($_POST['loginBtn'])) {
	
		
		logincredential($_POST['usercred'],$_POST['passcred'],$conn);

	}
 ?>