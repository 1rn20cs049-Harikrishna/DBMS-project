	<?php include ('header.php'); 

// $email = $_SESSION['email'];
// echo $email
	?>

<html>
<head>


<link rel="stylesheet" href="css/signin.css">
<title>Sign In</title>

</head>
<body>
	<div class="text-center pt-3">
		 <h1 class="text-warning"> </h1>	
		  <div class="error_container w-100 pt-3">

         	  </div>
	</div>
	

	<div class="signin_form card">
		

		
             		
			
   
         	 
         	 

				<form  method="POST"  action="../functionality/verifying.php" >
					 <h1 class="heading"> Authentication required</h1>
		    <small>We've sent a One Time Password(OTP) to the mobile number(Email) above. Please enter it to complete verification.</small>
	
			<div>
					<label for="opt">Enter OTP</label>
					
					   	<input 
					    type="text" 
					    name="verfication_code"
					    id="otp"
					    autocomplete="off" 
					  
					  />
					     <span id="error"> </span>
					     </div>
					   

				

					
						  							<button type="submit" name="submit"   id="Submit-btn" class="submitBTN "> Continue
					
							</button>
							<br />
						
										  

				
					

				</form>
				 <a href="./otp.php" class="p-1 link-signin">Resend OTP </a> 
	


				<div class="mt-3">
					<p><span>or</span></p>
 <a  href="./passwordORotp.php" class="btn w-100 NewUser border-secondary ">Sign in with your password </a>
				</div>
			</div>




<div class="bg-secondary container-fluid p-5 text-center">
	<h1> Footer</h1>
	</div>

<!-- <script type="text/javascript" src="js/signin.js"></script> -->
</body>



</html>