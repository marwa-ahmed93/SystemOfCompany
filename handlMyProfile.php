<?php
session_start();
include 'connection.php';
$id=$_GET['id'];

//geting data
$firstName=$_POST['firstName'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$birthday=$_POST['birthday'];


$query = "UPDATE `employees`
 SET `name`='$firstName',`email`='$email',`password`='$password',`phone`=$phone,`city`='$city',`gender`='$gender',`birthday`='$birthday' 
 WHERE id='$id'";

$result = $conn->query($query);
if ($conn->query($query) === TRUE) {
    header('location: myProfile.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }



?>














// //clean data
// function cleanData($input){

//     $input = htmlspecialchars($input);
//     $input = trim( $input);
//    return  $input;
//    }

// //call function
// $firstName = cleanData($firstName);
// $email = cleanData($email);
// $password = cleanData($password );
// $city = cleanData($city);
// $gender = cleanData($gender);
// $phone = cleanData($phone);
// $birthday = cleanData($birthday);

// $query =" UPDATE `employees`
// WHERE email = '$email'
// ";
// $result = $conn->query($query);

// //validation
// $errors=[];
// $valid=true;

// if($result->num_rows == 0 && $email !="" && $password !=""){
//     $errors['data'] = "Not valid data";
//     $valid=false;
// }
// if(!filter_var($email , FILTER_SANITIZE_STRING)|| $password==""){
//     $errors['email']="Not valid email";
//     $valid=false;

// }

// if($password=="" || !filter_var($password , FILTER_SANITIZE_REGEXP ,
// array("options"=>array("regexp"=>"/^[a-z-0-9]{5,12}$/")))
//  ){
//     $errors['password']="Not valid password";
//     $valid=false;

// }
//     $_SESSION['erroes']= $errors;

//     if(isset($_SESSION['erroes'])){
//         header('location: admLogin.php');
//     }
    
    
//     if($valid==true){

//         $_SESSION['email']=$email;
//         $_SESSION['password']=$password;
//         header('location: myTasks.php');
//     }

//validation
// $errors=[];
// $valid=true;
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $errors['email'] = "Not valid email address";
//     $valid=false;
//   }
//   if(!filter_var($password, 
//   FILTER_VALIDATE_REGEXP,
//   array( "options"=> array( "regexp" => "/.^[a-zA-Z0-9]{5,12}$/"))));{

//     $errors['password'] ="not valid password";
//     $valid=false;
//   } 

// $_SESSION['errors']=$errors;
// if(isset($errors)){
//     header('location: empLogin.php');
// }
// if($valid===true){
//     $_SESSION['email']=$email;
//     $_SESSION['password']=$password;
//     header('location: incEmp.php');  
// }












?>