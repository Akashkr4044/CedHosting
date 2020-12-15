<?php 
require_once 'header.php';
session_start();
$email2=$_SESSION['email'];
?>
<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	    <form> 
				    <div class="register-top-grid">
 					    <div class="register-bottom-grid">
							<h3 style="font-family: Serif; color: #e7663f;">Email Verification</h3>
						    <div>
								<span><?php echo $_SESSION['email'] ?><label>*</label></span>
								<?php 
								echo '<a href="verification.php?email="'.$_SESSION['email'].'">Verify By Email</a>';
								?>
							</div>      
						</div>
				    </div>
				 	<div class="register-top-grid">
						<div class="register-bottom-grid">
				 			<h3 style="font-family: Serif; color: #e7663f;">Phone Verification</h3>
							<div>
								<span><?php echo $_SESSION['phone'] ?><label>*</label></span>
                            	<a href="verification2.php">Verify By Phone</a>
							</div>
						</div>
					</div>
			    </form>
			</div>
		</div>
	</div>
</div>
<?php 
require_once 'footer.php';

?>