<!--
Au
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Ced Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<script src="script.js"></script>
<!--script-->
</head>
<body>
	<!---header--->
	<?php include 'header.php'; ?>
	<!---header--->
	<?php
         require_once('classes/User.php');
         require_once('classes/Dbcon.php');
         $obj= new DbCon();
         $obj2=new User();
         if (isset($_POST['submit'])) {
         
         
         $name=isset($_POST['name'])?$_POST['name']:'';
         $name=strtolower($name);
         $phone=isset($_POST['phone'])?$_POST['phone']:'';
         $userpassword=isset($_POST['pass'])?$_POST['pass']:'';
         $userpassword2=isset($_POST['repass'])?$_POST['repass']:'';
         $email=isset($_POST['email'])?$_POST['email']:'';
         $ques=isset($_POST['ques'])?$_POST['ques']:'';
         $ans=isset($_POST['ans'])?$_POST['ans']:'';
         
         
         $obj2->entry($name,$phone,$ques,$ans,$userpassword,$email, $userpassword2,$obj->conn);
         
         
         }
         ?>
		<!---login--->
	<div class="content">
		<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  	<form action="" method="POST"> 
				 	<div class="register-top-grid">
						<h3>personal information</h3>
					 	<div>
							<span>Email Address<label>*</label></span>
							<input type="text" name="email" fv-not-empty="This field can't be empty" fv-email="Please supply a valid email."> 
					 	</div>
					 	<div>
							<span>Full Name<label>*</label></span>
							<input type="text" name="name" class="prevent" onkeydown="return alphaonly(event);" fv-not-empty="This field can't be empty"> 
						</div>
					</div>
					<div class="register-top-grid">
						<div>
							<span>Mobile<label>*</label></span>
							<input type="text" name="phone" id="mobile" maxlength="10" class="prevent" onkeydown="return onlynumber(event);" fv-not-empty="This field can't be empty"> 
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="register-bottom-grid">
					 	<div>
					 		<span>Password<label>*</label></span>
					 		<input type="password" name="pass" class="prevent" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" minlength="8" maxlength="16"  fv-not-empty="This field can't be empty">
					 	</div>
					 	<div>
					 		<span>Confirm Password<label>*</label></span>
					 		<input type="password" name="repass" class="prevent" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required minlength="8" maxlength="16" fv-not-empty="This field can't be empty">
						</div>
					</div>
					<div class="register-top-grid">
						<div>
						<span>Security Question<label>*</label></span>
                           <select style="width:524px;height:37px; " name="ques" required>
                              <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                              <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
                              <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
                              <option value="What was your dream job as a child?">What was your dream job as a child?</option>
                              <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
                           </select>
						</div>
						 <div>
						 <span>Security Answer<label>*</label></span>
						 <input type="text" fv-not-empty="This field can't be empty">
						 </div> 
					</div>			    
					<div class="clearfix"> </div>
					<div class="register-but">
						<input type="submit" value="submit" name="submit" class="a">
					   <div class="clearfix"> </div>
					</div>
				</form>
		   </div>
		 </div>
	</div>
<!-- registration -->

	</div>
<!-- login -->
<script>
         var count_mob=0;
         var count=0;
         var temp=0;
         var i=0;
         var i2=0;
         var count2=0;
         function alphaonly(button) {
         var code = button.which;
         if(count>0 && code==32 && (i2==0 || i2==1)){
         count=0;
         i2++;
         return true;
         
         }
         console.log(button.which);
         
         if ((code > 64 && code < 91) || (code < 123 && code > 96)|| (code==08)||(code==09)) {
         count++;
         return true;
         
         }
         else{
         return false;
         }
         
         }
         function onlynumber(button) {
         
         var code = button.which;
         
         if (code > 31 && (code < 48 || code > 57)&& (code < 96 || code > 105))
         return false;
         return true;
         var myval = $(this).val();
         
         }
         
         
         function alphaonly2(button) {
         console.log(button.which);
         
         var code = button.which;
         if(count>0 && code==32){
        
         count=0;
         return true;
         }
         else if(code==32){
         return false;
         }
         else{
         count++;
         return true;
         }
         }
         
         $("#mobile").bind("keyup", function (e) {
         
         mobile=$("#mobile").val();
         
         var fchar=$("#mobile").val().substr(0, 1);
         var schar=$("#mobile").val().substr(1,1);
         
         
         if(fchar==0) {
         $('#mobile').attr('maxlength','11');
         if(schar==0)
         {
         $("#mobile").val(0);
         if(fchar=="")
         {
         $("#mobile").val("");
         }
         
         }
         } else {
         $('#mobile').attr('maxlength','10');
         }
         if(mobile.length>9){
         for(i=0;i<=mobile.length;i++){
         
         if(mobile.substr(i,1)==mobile.substr(i+1,1)){
         count2++;
         console.log(count2);
         if(count2==9){
         count2=0;
         alert('Please match the valid number format');
         $("#mobile").val("");
         mobile='';
         console.log(mobile.length);
         }
         
         }
         else if(mobile.substr(i,1)!=mobile.substr(i+1,1)){
         count2=0;
         }
         }
         }
         });
         
         $('.prevent').on("cut copy paste drag drop",function(e) {
         e.preventDefault();
         });
      </script>
	<!---footer--->
	<?php include 'footer.php'; ?>
<!---footer--->
</body>
</html>