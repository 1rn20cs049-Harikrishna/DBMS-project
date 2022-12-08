  <?php  session_start(); //include 'functionality/mail.php'; ?> 
 <!DOCTYPE html>
<html>
<head>
<?php 	 include ('header.php'); 
 
?>
<link rel="stylesheet" href="css/style.css">

<title>Sign In verification</title>

</head>
<body>
<!-- 	<div class="col-12"> 
		<div class="d-flex flex-row justify-content-center">
			<div class="d-flex flex-column justify-content-center">
 -->
	<div class="text-center pt-3">
		 <h1 class="text-warning"> </h1>		
    </div>
	

<div class="d-flex flex-row justify-content-center">
  <div class="signin_form card py-5 px-5 shadow">

         	 

				<form  method="POST"  action="" id="form" >
					 <h1 class="heading"> Verification required</h1>
		    				<small>To continue, complete this verification step. We've sent an One Time Password(OTP)  to <br /> <b><?php echo  isset($_SESSION['email']) ?  $_SESSION['email'] : '' ?> </b>. <br />Please enter it below to complete verification.</small>
	
					<div>
							<label for="opt">Enter OTP</label>
							 <a href="./forgot.php" class="p-auto link-signin">change? </a>  <br/> 
	
					  	 	<input type="text" name="verfication_code" id="otp" /> <br />
					    	 <span id="error"> </span>

					    	<input type="hidden" name="otp" id='geotp'  value = " <?php echo isset($_SESSION['email']) ? $_SESSION['email']: ''   ?>" />
					</div>
					    
	     <button type="submit" name="submit"   id="Submit-btn" class="submitBTN  "> continue </button> <br />

	     <button type='submit' class="btn btn-info text-light" id='getotp'> Get OTP </button>
							<br />				
					

				</form>
				


				<div class="mt-3">
							<p><span>New to Medico?</span></p>
			 							<a  href="./registration.php" class="btn w-100 NewUser border-secondary "> Create  your Medico account </a>
							</div>
						</div>
</div>


<!-- <div class="bg-secondary container-fluid p-5 text-center">
	<h1> Footer</h1>
	</div> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

$(document).ready(function(){


 	$('#form').on('submit',function(e){

	e.preventDefault();
 // 	$('#getotp').click(function(e){
 	
 	
 //    $.ajax ({   

 //  		 url : "http://localhost/DBMS/Registration%20and%20Sign%20in/functionality/MAIL.php",
 //       type:'POST',
 //       // dataType :'json',
 //     //  data : {  otp : $('#geotp').val() },
 //       error: function (request, error) {
 //        console.log(arguments);
 //        alert(" Can't do because: " + error);
 //    },
 //      success :function(idea){

// 			console.log(idea);


 // }
     
 //    });
 // });
// 	});


$('#Submit-btn').click(function(event){
  //event.preventDefault();
	let verification_code = $('#otp').val();

//    // if



	if(verification_code === ''){
		//$('#error').html('Otp is required');
		 $('#error').addClass('error');
	} 

if( verification_code.length  != 6) {

$('#error').html('Enter properly');
		$('#error').addClass('error');
		return;

	}
	else{
let formOTP = { verfication_code :  verification_code };

	$.ajax({
       // url : "functionality/register.php",
		 url : "http://localhost/DBMS/Registration%20and%20Sign%20in/functionality/VerifyRegisterOTP.php",
       type:'POST',
       // data: formOTP,
       data : formOTP,
       success :function(res){
      // data = JSON.parse(res);
      // let {message_status ,message_message} = data;

      // if(message_status){
      // 	window.location.href="./../Home/home.php";
      // }
      window.location.href="./../Home/home.php";
			console.log(res);
}

});	

}
});

});

 });






	</script>
</body>



</html>