
<?php 
include('./../db.php');

session_start();
$con = new Db_Connection();
$conn = $con->Establish_Connection();


if(isset($_POST['email'])){
     $to_email =$_POST['email'] ;
     $otp = rand(111111,999999);
    
     $subject = "Password assistance";
    $body = "To authenticate, please use the following One Time Password(OTP): \n\n {$otp }  \n
       Don't share this OTP with anyone. \n\n\t we hope to see you again soon  ";
    $headers = "From:harikrishna92364@gmail.com";
    if (mail($to_email, $subject, $body, $headers)){
 $sql = "INSERT INTO `email_verification`(email,otp,isexpired) VALUES('$to_email','$otp',false)";
  $result = $conn->query($sql);
  if($result){
     echo json_encode('sent');
  }else{
      echo json_encode('failed to send');
      exit;
  }

}
else{
    echo json_encode('failed to send');
    exit;
}
}
else{
    echo json_encode('not sent');
    exit;
}

 ?>





