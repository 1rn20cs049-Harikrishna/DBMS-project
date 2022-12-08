
<html>
<head>
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<title>New Registration</title>
</head>
<body id="body">


	<div class="d-flex flex-row  justify-content-center mt-3">
		<div class="card d-flex flex-column  justify-content-start border border-info px-5 py-5 shadow" >
            <h1 class="heading"> Create Account</h1>
			<form  method="POST" action="" id="myform" class="mx-2" > 
																	        	<div id="error_container">
																				</div> 
	        <div class="pt-2">
		             <label for="input">Your name</label><br />
					 <input type="text"  name="name" id="username" placeholder ="First and last name" /> <br />
					 <small id="name_error"> </small>
				</div>

           		<div class="pt-2">
					<label for="input">Mobile number</label><br />
					<input type="text" name="num" id="number"  placeholder="Mobile number" pattern="\d{10}" title="Enter number without preceding +91"  /> <br/>
					<small id="number_error"> </small>
		        </div>


			    <div class="pt-2">
					<label for="input">Email (optional)</label><br />
					<input  type="email" name="email" id="email" />
			    </div>


                <div class="pt-2 ">
					<label for="input">Password</label><br />
					<input type="password" name="password" id="password" placeholder ="At least 6 characters" /><br/>
					<small>Passwords must be atleast 6 characters. </small> <br/>
					<span id="password_error"> </span>
	            </div>
	            <br />
				<small class="pb-1">By continuing, you agree to Medico Conditions of Use</small>
				<hr />


				<div class=" pt-2">
   							
   							<button type="submit"    class="btn w-100 NewUser border-secondary bg-primary p-2 text-light " id="submit" >Continue</button>
				</div>
			</form>


			<div>	 <a href="./forgot.php" class="link-signin">Forgot your password? </a> <br/>
		    	 <span> Already have an account ?
		    		<a href="./signin.php" class="link-signin" style="font-size: 18px;">Sign in </a>
		    	 </span>
			</div>
</div>

		
</div>




   <div class="bg-secondary container-fluid p-5 text-center mt-3">
	      <h1> Footer</h1>
	</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

let Name_error = $('#name_error');
let Number_error = $('#number_error');
let Password_error = $('#password_error');

$(document).ready(function(){

$("#myform").on( 'submit',function(e){ 
e.preventDefault(); 

let Username = $('#username').val();
let num = $('#number').val();
let Email = $('#email').val();
let Password = $('#password').val();

if(Username === ''){
	Name_error.fadeIn()
	Name_error.html("~ Enter your name");
    Name_error.addClass('error');
}
 if(num === ''){
	Number_error.html("~ Enter your mobile number");
	Number_error.addClass('error');
}
 if(Password === ''){
	Password_error.html("~ Enter your password");
	Password_error.addClass('error');
} 

if(Username !== '' && num !== '' && Password !== '' && Email !== ''){
    let formdata = { name :Username,num: num, email:Email,password:Password }
 
 
	$.ajax({
       // url : "functionality/register.php",
		 url : "http://localhost/DBMS/Registration%20and%20Sign%20in/functionality/register.php",
       type:'POST',
       // data: JSON.stringify(formdata),
       data : formdata,
       error: function (request, error) {
        console.log(arguments);
        alert(" Can't do because: " + error);
    },
       success :function(data){
       	let { success ,message} = JSON.parse(data);
       //	console.log(JSON.parse(data));
         console.log(data);
         let labelContainer = document.getElementById('error_container');
   
       	if(success){
       		 	$("#myform").trigger("reset");  
       		 	labelContainer.style.display = "none";
       			  hk();
       			window.location.href = 'verify.php';
            
    
         }else{
         	
  			   	$('#error_container').html(message);
  			   	$('#error_container').css('color','#ff1493');
 
            		
            }

            function hk(){
            	
            	$('#submit').css('cursor','wait');
            
            	formdata = { email:Email };
            	$.ajax({
 
				 url : "http://localhost/DBMS/Registration%20and%20Sign%20in/mail.php",
     			 type:'POST',
       // data: JSON.stringify(formdata),
 		      data : formdata,
     		  error: function (request, error) {
       		  console.log(arguments);
        	  alert(" Can't do because: " + error);
    },
       success :function(data){
       	$('#submit').html("Continue");
       	alert(message);
       	console.log(data);
       	window.location.href = 'verify.php';
            }

       	      
       	}    );

}
}

});
}

$('#username').on('keydown',function(event){
 Name_error.html('');
});

$('#number').on('keydown',function(event){
 Number_error.html("");

});

 $('#password').on('keydown',function(event){
 Password_error.html("");
});


});

});

</script> 
</body>



</html>
