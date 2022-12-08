
$response = array('insert_success' => false , 'insert_message' => ' ','message_status' =>false , 'message_message' =>'');

//  function send_mail($email) {
//      $to_email = $email;
//      $otp = rand(111111,999999);    
//      $subject = "Password assistance";
//      $body = "To authenticate, please use the following One Time Password(OTP): \n\n {$otp }  \n
//                 Don't share this OTP with anyone. \n\n\t we hope to see you again soon  ";
//      $headers = "From:harikrishna92364@gmail.com";

//       if (mail($to_email, $subject, $body, $headers)){
//       	$response['message_status'] = true;
//       	$response['message_message'] = 'OTP sent successfully';
        
//  				} else{
//        $response['message_status'] = false;
//       	$response['message_message'] = 'OTP failed to send';
//       	echo json_encode($response);
//       	exit();
//  			}

// 	return $otp;
// }


if(isset($_SESSION['email'])){
   $email =  $_SESSION['email'];
  $OTP =  send_mail($email);  

   $OTP =  send_mail('harikrishna92364@gmail.com');  
	 $sql = "SELECT *  FROM `new_users` WHERE email = '$email'  ";
   $result =  mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    $generate = "INSERT INTO `email_verification`(email,otp,isexpired) VALUES('$email','$OTP',false)";
	  $res =  mysqli_query($conn,$generate);
	  $response['insert_success'] = true;
    $response['insert_message'] = 'otp is inserted in db successfully!!';
    echo json_encode($response);
    exit();
}
else{
	 $response['insert_success'] = false;
   $response['insert_message'] = 'No account found ';
   echo json_encode($response);
   exit();
}
//   // $input_otp = $_POST['verfication_code'];
  // echo json_encode($input_otp);
}

?>

