<?php 
// include('./../../db.php');

  
	$generate = "INSERT INTO `email_verification`(email,otp,isexpired) VALUES('$userinput','$OTP',false)";
   // $OTP= include ('mail.php');

?> 
<html>
<head>
	<?php include ('header.php');

	 ?>

<link rel="stylesheet" href="css/signin.css">
<title>Sign In</title>

</head>
<body>
	<div class="text-center pt-3">
		 <h1 class="text-warning"> Welcome hk! </h1>	
		 <!--  <div class="error_container w-100 pt-3">

         	  </div> -->
	</div>
	

	<div class="signin_form card">
		

		
             		
			
   
         	 
         	 

				<form  method="POST" action="functionality/SIGNIN.php" >
					 <h1 class="heading"> Sign In to Medico</h1> <br/>
					 <!-- <small></small> -->
                     <a href="./signin.php" >Change.</a>
					 			<div>
					<label for="input">Password</label><br />
					<input
					     type="text" 
					     name="userinput"
					     id="input" 

					   />
					     <span id="error"> </span>
					     </div>		
						  							<button type="submit" name="submit"   id="Submit-btn" class="submitBTN "> Continue
					
							</button>
							<br />
							

							<hr /> 
				   <a href="./forgot.php" class="link-signin">Forgot your password? </a> 

				
					

				</form>
				


				<div class="mt-3">
					<p><span>New to Medico?</span></p>
							 <a  href="./otp.php" class="btn w-100 NewUser border-none"> Get an OTP on Your phone (present Email)</a>
				</div>
			</div>



<div class="bg-secondary container-fluid p-5 text-center">
	<h1> Footer</h1>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="js/signin.js"></script>
</body>



</html>