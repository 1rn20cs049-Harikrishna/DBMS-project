
<html>
<head>
	<?php include ('header.php');	 ?>
  <link rel="stylesheet" href="css/style.css">
  <title>Sign In</title>

</head>

<body class="signin-body">
  <div class="text-center pt-3">
    <!-- <h1 class="text-warning"> Welcome hk! </h1> -->
  </div>

<div class="d-flex flex-row justify-content-center">
  <div class="signin_form card py-5 px-5 shadow">

    <form method="POST" action=""  id="myform">
      <h1 class="heading"> Sign In to Medico</h1>
              <div>
                    <label for="input">Email or mobile phone number</label><br />
                    <input type="text" name="userinput" id="input" /> <br />
                    <!--  <input type="text" name="" id="email" hidden> -->
                    <span id="error"> </span>
              </div>
        <button type="submit" name="submit" id="Submit-btn" class="submitBTN w-100"> Continue </button>   <br />
      <small>By continuing, you agree to Medico Conditions of Use</small>     <hr />
      <a href="./forgot.php" class="link-signin">Forgot your password? </a>
    </form>



    <div class="mt-3">
      <p><span>New to Medico?</span></p>
      <a href="./registration.php" class="btn w-100 NewUser border-secondary "> Create your Medico account </a>
    </div>
  </div>

<!-- <div class="bg-secondary container-fluid p-5 text-center">
	<h1> Footer</h1>
	</div> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
	


$(document).ready(function(){

	$('#Submit-btn').click(function(event){
	          event.preventDefault();

  let userinput = $('#input').val();

 if(userinput === ''){
      $('#error').html('number or email is required');
      $('#error').css('color',"orange");
}

else {
   
  
    let formdata = { userinput: userinput};
// alert(JSON.stringify(formdata));
$.ajax({
       // url : "functionality/register.php",
     url : "http://localhost/DBMS/Registration%20and%20Sign%20in/functionality/SIGNIN.php",
       type:'POST',
       // data: JSON.stringify(formdata),
       data : formdata,
       error: function (request, error) {
        console.log(arguments);
        alert(" Can't do because: " + error);
    },
       success :function(data){
        // let { success ,message} = JSON.parse(data);
       // data =  JSON.parse(data);
        // if(data.success){
        //         $("#myform").trigger("reset");
             console.log(data);
  
        //  window.location.href ="./../Home/home.php";
        //     }
        //  else{
        //         $('.error_container').show().html(data.message);

        //     }

              
        }
      
       
  });


 $('#input').keydown(function(){
 	 $('#error').html('');
 });



} });



});


</script>
<!-- <script type="text/javascript" src="js/signin.js"></script> -->
</body>



</html>