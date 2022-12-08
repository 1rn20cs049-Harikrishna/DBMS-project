 <?php include('../db.php'); 
// echo $_POST['variable']

print_r($_POST)
// session_start();
$name = $mobile = $email = $passowrd = '';

extract($_POST);
if(isset($_POST['submit'] ) ){
$name = $_POST['name'];
$mobile = $_POST['num'];
$email = $_POST['email']; // to convert mail id to lower case 
$password = md5($_POST['password']);


// function sendMail(){

echo $name;
echo $mobile;
echo $email;
echo $password;



// $sql = "INSERT INTO `new_users` (name,mobile,email,password) VALUES (?, ?, ?, ?)";

// $stmt = $conn->prepare($sql);
// $stmt->bind_param("siss", $name,$mobile, $email , $password );


$sql = "INSERT INTO `new_users` (name,mobile,email,password) VALUES ('$name', '$mobile', '$email', '$password')";


// // else{

	$que = "SELECT * FROM `new_users` WHERE mobile = '$mobile' OR email = '$email' ";
	
// // $sql2 = mysqli_query($conn, $query);
// // $stmt = $conn->prepare($sql2); 
// // $smt->bind_param("ss", $email,$email);
// // $smt->execute();
// // $result = $smt->get_result(); 
// // $query = $result->fetch_assoc(); 

$result = $conn->query($que);


if($name === '' || $mobile === '' || $password  === ''){
	echo "can't be empty";
}

elseif(mysqli_num_rows($result)>0){
   echo "<script> alert('Account  already  has been registered with email or mobile') </script>";
}

elseif (mysqli_query($conn, $sql)) {
 


   $to_email = $email;
$otp = rand(111111,999999);
$subject = "Password assistance";
$body = "To authenticate, please use the following One Time Password(OTP): \n\n {$otp }  \n
Don't share this OTP with anyone. \n\n\t we hope to see you again soon  ";
$headers = "From:harikrishna92364@gmail.com";
 
// if (mail($to_email, $subject, $body, $headers)){
//  echo "Email successfully sent to $to_email...";
//  }
//  else {
//    echo "Email sending failed!";
//  }
 







//     // $_SESSION['username'] =  $name;
//     // $_SESSION['email'] = $email;
        echo "<script> alert('Account Created Successfully ,verify your  account with mobile or E-mail')";
         header("Location: verify.php");

} 
else {
  echo "Error creating account: " . $conn->error;
}

// // if($conn->query($sql)){
// // 	echo "successfully";
// // }
// // if ($stmt->execute()) {

// // 	echo " <script> alert('Table MyGuests created successfully' </script>";
// //   //echo " <script> alert('Table MyGuests created successfully') </script>";
// //  } 
// //  else {
// //   echo "Error creating table: " . $conn->error;
// // }
// // // }


// $stmt->close();
}
$conn->close();


?>

 