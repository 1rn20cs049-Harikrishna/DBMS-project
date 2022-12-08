<?php 
   // session_start();

    include('./../../db.php');   
    $con = new Db_Connection();
    $conn = $con->Establish_Connection();



class Signin {


    
}
  $response = array('success' => false,'message' => '');
  if(isset($_POST['userinput'])){

    $userinput =$_POST['userinput'];

    if(strlen($userinput) == 10){
        $query = "SELECT * FROM `new_users` WHERE  mobile = '$userinput'";
        $select = mysqli_query($conn,$query);
      } else{
        $query = "SELECT * FROM `new_users` WHERE email = '$userinput'";
          $select = mysqli_query($conn,$query);


          if($select){
            echo 'h';
          } else{
            echo 'k';
          }
      }
         
        
     
    

     if( mysqli_num_rows ( $select) > 0  ){
         // $_SESSION['email'] = $email;
      $response['success'] = true;
      $response['message'] = 'Logged in successfully!!';
      echo json_encode($response);
     } else{
        $response['success'] = false;
      $response['message'] = 'No account found!!!';
       echo json_encode($response);
    
     }

  }
   ?>