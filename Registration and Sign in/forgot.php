
 <?php 

 include "../db.php";



?>

 <html>
     <head>
         <title>Forgot page </title>
          <?php include "header.php" ?>
         
       <link rel="stylesheet" href="css/style.css">

     </head>

     <body>


<div class="d-flex flex-row justify-content-center">
  <div class="signin_form card py-5 px-5 shadow">
             
             

                <form  method="POST"  >
                     <h1 class="heading pb-4"> Password assistance</h1>
                     <small class="pb-3">Enter the email address or mobile phone number associated with your medico account.
        <div>
<label for="input">Email or mobile phone number</label><br />
                    <input
                         type="email" 
                         name="email"
                         id="input" 
                         class="form-control"
                       />
                         <span id="error"> </span>
                         </div>
                       

                    <input 
                        type="text" 
                        name="verfication_code"
                        id="otp1"
                        hidden
                      />
                                                    <button type="submit" name="submit"   id="Submit-btn" class="w-100 submitBTN  "> Continue
                    
                            </button>

                    

                </form>
            </div>

<div class="bg-secondary container-fluid p-5 text-center">
    <h1> Footer</h1>
    </div>
</div>
</div>


 <!-- <script type="text/javascript" src="js/forgot.js"></script> -->
<script>


</script>

     </body>
 </html>
