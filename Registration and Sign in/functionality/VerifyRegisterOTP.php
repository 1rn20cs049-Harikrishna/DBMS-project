<?php
	 session_start();	
   require('./../../db.php'); 
   // include "mail.php";
     $con = new Db_Connection();
    $conn = $con->Establish_Connection();

$response = array('message_status' =>false , 'message_message' =>'');

if(isset($_POST['verfication_code'])){
     $otp = $_POST['verfication_code'];


if(isset($_SESSION['email'])){
   $email =  $_SESSION['email'];

     $sql = "SELECT *  FROM `email_verification` WHERE email = '$email' AND isexpired = 0 ";
   $result =  mysqli_query($conn,$sql);
   $row = $result -> fetch_assoc();
if(mysqli_num_rows($result) != 0){
    

 if($otp == $row['otp']){
     $sql = "UPDATE `email_verification` SET isexpired=1 WHERE  email = '$email'  ";
   $result =  mysqli_query($conn,$sql);
     // $res =  mysqli_query($conn,$select);
      $response['message_status'] = true;
    $response['message_message'] = 'Logged in successfully!!';
    echo json_encode($response);
    exit();
}

else{
     $response['message_status'] = false;
   $response['message_message'] = 'OTP mismatch ';
   echo json_encode($response);
   exit();
}
}



}

//   // $input_otp = $_POST['verfication_code'];
  // echo json_encode($input_otp);
}else{
  $response['message_status'] = false;
   $response['message_message'] = 'No account found ';
   echo json_encode($response);
}
?>

