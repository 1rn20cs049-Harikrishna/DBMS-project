<?php 

session_start();
include('./../../db.php');
$con = new Db_Connection();
$conn = $con->Establish_Connection();

class Register{
  private $name;
  private  $mobile;
  private  $email;
  private  $password;
  public $response = array();

  private $que;
  private $duplicate;
  private $sql;
  private $result;


  public function __construct($name,$mobile,$email,$password){
    $this->name =  $name;
    $this->mobile = $mobile;
    $this->email = $email;
    $this->password = $password;
    $this->response = array("success" => false,"message" => false);
    $this->Check_Receive();
    $this->Check_Number();
    $this->Check_Name();
    $this->Check_Password();
    $this->Check_Redundancy();
  }

private function Check_Receive(){
    if($this->name == '' || $this->mobile == '' || $this->email == '' || $this->password== ''){
        $this->response['success'] = false;
        $this->response ['message'] = 'fill out the form ';
        exit;
    }
}
   private function Check_Number(){

             if(strlen($this->name) < 3  ){
                       $this->response['success'] = false;
                       $this->response ['message'] = 'Name should consist minimum 4 character ';
                       echo json_encode($this->response);
                      exit();

                }
  }



  private function Check_Name(){
            if(strlen($this->mobile ) == 10){

                    if(preg_match("/^([0-9]{10})$/", $this->mobile)){
                     // $mobile = intval($mobile);
                                 $this->mobile = (int)$this->mobile;
                             } 
                    else{ 
                                $this->response['success'] = false;
                                $this->response ['message'] = 'Number format is incorrect ';
                                echo json_encode($this->response);
                                exit();
                        }

                 } 

            else{
                        $this->response['success'] = false;
                        $this->response ['message'] = 'Number must consist of 10 digits ';
                        echo json_encode($this->response);
                        exit();
                }   

        }
  private  function Check_Password(){
              if(strlen($this->password ) < 6){
                    $this->response['success'] = false;
                    $this->response ['message'] = 'Password must consist of minimum 6 characters ';
                    echo json_encode($this->response);
                     exit(); 
                }
  }

   private function Check_Redundancy(){

     global $conn; 
     $this->que = "SELECT * FROM `new_users` WHERE mobile = '$this->mobile' OR email = '$this->email' ";
    
     // echo   $this->duplicate;
    if(isset($this->name) &&  isset($this->password) &&  isset($this->mobile ) && $this->name != '' && $this->mobile != '' && $this->password  != ''){

       $this->duplicate = $conn->query($this->que);
    
    if(mysqli_num_rows ($this->duplicate) > 0){
           $this->response['success'] = false;
           $this->response ['message'] = 'Account already present with same phone or email';
       // echo json_encode();

       echo json_encode($this->response);
       exit();
    }
    else{
        $this->Insert_Record();
    }
  }
}
 


  private  function Insert_Record(){
    global $conn;
    $this->password = md5($this->password);
    $this->sql = "INSERT INTO `new_users` (name,mobile,email,password) VALUES ('$this->name', '$this->mobile', '$this->email', '$this->password')";
  
    $this->result = mysqli_query($conn, $this->sql);

    if($this->result){

             $_SESSION['username'] =  $this->name;
             $_SESSION['email'] = $this->email;
             $this->response['success'] = true;
             $this->response ['message'] = "Account created successfully! please verify ";
             echo json_encode($this->response);
    }
    else{
            $this->response['success'] = false;
            $this->response ['message'] = "Failed to create";
           echo json_encode($this->response);
    }
}



}




if(isset($_POST['name']) &&  isset($_POST['num']) && isset($_POST['email'] ) && isset($_POST['password'] )){
  $New_user = new Register(  $_POST['name'] ,
   $_POST['num'] ,
   $_POST['email'] ,
 $_POST['password'] );
  
}


/*$New_user = new Register(  echo isset($_POST['name']) ? $_POST['name'] : '' ,
    echo isset($_POST['mobile']) ? $_POST['mobile'] : '' ,
    echo isset($_POST['email']) ? $_POST['email'] : '',
    echo isset($_POST['password'])? $_POST['password'] :'');
*/
 else{

$response = array("success" => false,"message" => false);
$response['success'] = true ;
$response['message'] = "fill out the form with all details";
    echo json_encode($response);    
   exit();
}

$conn->close();


?>
