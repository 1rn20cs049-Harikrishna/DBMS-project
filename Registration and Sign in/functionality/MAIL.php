 
<?php  

// session_start();   
//    require('./../../db.php'); 
// $con = new Db_Connection();
// $conn = $con->Establish_Connection();

// $response = array('insert_success' => false , 'insert_message' => ' ','message_status' =>false , 'message_message' =>'');


// class GMAIL{
//     private $to_email;
//     private $otp;
//     private $subject;
//     private $headers;

//     function __construct($email){
//          $this->to_email = $email;
//         $this->send_mail();
//     }
   
//    function send_mail() {
//       global $response;
//     global $conn;
     
//      $this->otp = rand(111111,999999);    
//      $this->subject = "Password assistance";
//      $this->body = "To authenticate, please use the following One Time Password(OTP): \n\n `{$this->otp }`  \n
//                 Don't share this OTP with anyone. \n\n\t we hope to see you again soon  ";
//      $this->headers = "From:harikrishna92364@gmail.com";

//       if (mail($this->to_email, $this->subject, $this->body, $this->headers)){

//         $generate = "INSERT INTO `email_verification`(email,otp,isexpired) VALUES('$this->to_email','$this->otp',false)";
//         $res =  mysqli_query($conn,$generate);

//         if($res){
      
//     $response['message_status'] = true;
//         $response['message_message'] = 'OTP sent successfully';
//       $response['insert_success'] = true;
//     $response['insert_message'] = 'otp is inserted in db successfully!!';
//     echo json_encode($response);
//    exit();
         
//       }
        
//         } else{
//          $response['message_status'] = false;
//         $response['message_message'] = 'OTP failed to send';
//          $response['insert_success'] = false;
//          $response['insert_message'] = 'otp not inserted ';
//         echo json_encode($response);
//          exit();
//      }

//     // return $otp;



// }
// }

 
// if(isset($_SESSION['email'])){
//    $email = $_SESSION['email']; 
  
//   // $sql = "SELECT *  FROM `new_users` WHERE email = '$email'  ";
//   //  $result =  mysqli_query($conn,$sql);

// // if(mysqli_num_rows($result) > 0){
// // //   // $New_Mail = new GMAIL($email );
// // }

// // else{
//    //  $response['insert_success'] = false;
//    //$response['insert_message'] = 'No account found ';
//   // echo json_encode($response);
//   exit;
// // }
// }


// }



   ?>
