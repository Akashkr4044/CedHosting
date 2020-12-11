

	<!---header--->
	<?php 
	require "header.php" ; 
	?>
	<!---header--->


<?php 
	require_once('class/user.php');
	require_once('class/dbcon.php');
	
    // use PHPMailer\PHPMailer\PHPMailer;
	// use PHPMailer\PHPMailer\Exception;
	// require '/home/cedcoss/vendor/autoload.php';

    $obj= new DB();
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
		$_SESSION['name']=$name;
		$_SESSION['phone']=$phone;
		$_SESSION['email']=$email;
		$_SESSION['ques']=$ques;
		$_SESSION['ans']=$ans;
	
	
		$obj2->entry($name,$phone,$ques,$ans,$userpassword,$email, $userpassword2,$obj->conn);

		// $otp = rand(1000,9999);
		// 		$_SESSION['otp']=$otp;
		// 		$mail = new PHPMailer();
		// 		try {                                       
		// 			     $mail->isSMTP(true);                                             
		// 			    $mail->Host       = 'smtp.gmail.com';                     
		// 			    $mail->SMTPAuth   = true;                              
		// 			    $mail->Username   = 'akashkumar.ak4044@gmail.com';                  
		// 			    $mail->Password   = '4024034044';                         
		// 			    $mail->SMTPSecure = 'tls';                               
		// 			    $mail->Port       = 587;   
					  
		// 			    $mail->setfrom('akashkumar.ak4044@gmail.com', 'CedHosting');            
		// 			    $mail->addAddress($email); 
		// 			    $mail->addAddress($email, $name); 
					       
		// 			    $mail->isHTML(true);                               
		// 			    $mail->Subject = 'Account Verification'; 
		// 			    $mail->Body    = 'Hi User,Here is your otp for account verification-'.$otp; 
		// 			    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
		// 			    $mail->send();
		// 			    header('location: verification.php?email=' . $email);
		// 			} 
		// 			catch (Exception $e)
		// 			 {
		// 			    echo "Mailer Error: " . $mail->ErrorInfo;
		// 			}


		// 			$otp2 = rand(1000,9999);
		// 			$_SESSION['otp2']=$otp2;

		// 			$fields = array(
		// 				"sender_id" => "FSTSMS",
		// 				"message" => "This is Test message".$otp2,
		// 				"language" => "english",
		// 				"route" => "p",
		// 				"numbers" => "$phone",
		// 			);
	
		// 			$curl = curl_init();
	
		// 			curl_setopt_array($curl, array(
		// 			CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
		// 			CURLOPT_RETURNTRANSFER => true,
		// 			CURLOPT_ENCODING => "",
		// 			CURLOPT_MAXREDIRS => 10,
		// 			CURLOPT_TIMEOUT => 30,
		// 			CURLOPT_SSL_VERIFYHOST => 0,
		// 			CURLOPT_SSL_VERIFYPEER => 0,
		// 			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		// 			CURLOPT_CUSTOMREQUEST => "POST",
		// 			CURLOPT_POSTFIELDS => json_encode($fields),
		// 			CURLOPT_HTTPHEADER => array(
		// 				"authorization: puder05xRibOXwsKBcGP2Q86a9SmqhnlIFyE7JNk4HfWZzYCoTZp8L5P0t1NqAgz3Y7wvTa2CmlnSxRK",
		// 				"accept: */*",
		// 				"cache-control: no-cache",
		// 				"content-type: application/json"
		// 			),
		// 			));
	
		// 			$response = curl_exec($curl);
		// 			$err = curl_error($curl);
	
		// 			curl_close($curl);
	
		// 			if ($err) {
		// 			echo "cURL Error #:" . $err;
		// 			} else {
		// 			echo $response;
		// 			}
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
							<input type="text" name="email" fv-not-empty="This field can't be empty" fv-email="Please supply a valid email." required> 
					 	</div>
					 	<div>
							<span>Full Name<label>*</label></span>
							<input type="text" name="name" class="prevent" pattern="^[a-zA-Z_]+( [a-zA-Z_]+)*$" onkeydown="return alphaonly(event);" fv-not-empty="This field can't be empty" required> 
						</div>
					</div>
					<div class="register-top-grid">
						<div>
							<span>Mobile<label>*</label></span>
							<input type="text" name="phone" id="mobile" maxlength="10" class="prevent" onkeydown="return onlynumber(event);" fv-not-empty="This field can't be empty" required> 
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="register-bottom-grid">
					 	<div>
					 		<span>Password<label>*</label></span>
					 		<input type="password" name="pass" class="prevent" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" minlength="8" maxlength="16"  fv-not-empty="This field can't be empty" required>
					 	</div>
					 	<div>
					 		<span>Confirm Password<label>*</label></span>
					 		<input type="password" name="repass" class="prevent" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required minlength="8" maxlength="16" fv-not-empty="This field can't be empty" required> 
						</div>
					</div>
					<div class="register-top-grid">
						<div>
						<span>Security Question<label>*</label></span>
                           <select style="width:524px;height:37px; " name="ques" required>
						      <option value="" selected disabled hidden>--Select Security Question--</option>
                              <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                              <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
                              <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
                              <option value="What was your dream job as a child?">What was your dream job as a child?</option>
                              <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
                           </select>
						</div>
						 <div>
						 <span>Security Answer<label>*</label></span>
						 <input type="text" class="prevent" name="ans" id="sans" fv-alphanum="This field must be a alpha-numeric value" fv-not-empty="This field can't be empty" required>
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
				function validate() {
                  if (Number.isInteger(parseInt($('#sans').val()))) {
                  alert('Enter Answer in Correct Fornat');
                  $('#sans').val(""); 
                 return false;
                    }
                 else {
                   return true;
                      }

}
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
	function alphaonly3(button) { 
		var code = button.which;
		
		if(count>0 && code==190){
			console.log(count);
		         	count=0;
				 return true; 
			       
		} 
	            console.log(button.which);
                
                if ((code > 64 && code < 91) || (code < 123 && code > 96)|| (code==08)||(code==09)||(code > 47 && code < 58)||code==37||code==39) {
					count++;
					console.log(count);
			       return true; 
		     	
				 }
				//  else if(code > 47 || code < 58){
				// 	count++;
				// 	return true; 
				//  }
			
				 else{
					return false;  
				 }
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
			alert('Invalid Phone no.');
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


$("#email").bind("keypress keyup keydown", function (e) {


var email = $('#email').val();
var regtwodots = /^(?!.*?\.\.).*?$/;
var lemail = email.length;
if ((email.charAt(0) == ".") || !(regtwodots.test(email))) {
alert("invalid email");
$('#email').val("");
return;
}

});

$('.prevent').on("cut copy paste drag drop",function(e) {
e.preventDefault();
});
			</script>
	<!---footer--->
	<?php include 'footer.php'; ?>
<!---footer--->
