	<!---header--->
<?php require "header.php" ?>
	<!---header--->
<?php
  
 require_once('class/user.php');
 require_once('class/dbcon.php');
 $obj= new DB();
 $obj2=new User();

 if (isset($_POST['submit'])) {
    $email=isset($_POST['email'])?$_POST['email']:'';
    $email=strtolower($email);
	$password=isset($_POST['pass'])?$_POST['pass']:'';
	
    $obj2->admit($email,$password,$obj->conn);
 }

?>
		<!---login--->
			<div class="content">
				<div class="main-1">
					<div class="container">
						<div class="login-page">
							<div class="account_grid">
									<div class="col-md-6 login-left">
										<h3>new customers</h3>
										<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
										<a class="acount-btn" href="account.php">Create an Account</a>
									</div>
									<div class="col-md-6 login-right">
										<h3>registered</h3>
										<p>If you have an account with us, please log in.</p>
										<form action="" method="POST">
										<div>
											<span>Email Address<label>*</label></span>
											<input type="text" name="email" fv-not-empty="This field can't be empty" fv-email="Please supply a valid email." required> 
										</div>
										<div>
											<span>Password<label>*</label></span>
											<input type="password" name="pass" class="prevent" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" minlength="8" maxlength="16"  fv-not-empty="This field can't be empty" required> 
										</div>
										<a class="forgot" href="#">Forgot Your Password?</a>
										<input type="submit" value="Login" name="submit">
										</form>
									</div>	
									<div class="clearfix"> </div>
								</div>
						</div>
					</div>
				</div>
			</div>
<!-- login -->
				<!---footer--->
				<?php include 'footer.php'; ?>
			<!---footer--->
