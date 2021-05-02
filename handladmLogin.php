<?php
session_start();
include 'connection.php';
$email=$_POST['email'];
$password=$_POST['password'];

//clean data
function cleanData($input){

    $input = htmlspecialchars($input);
    $input = trim( $input);
   return  $input;
   }
//call function
$email = cleanData($email );
$password = cleanData($password );

$query = "SELECT email , password
FROM admins
WHERE email ='$email'
 AND password ='$password'
";
$result = $conn->query($query);

//validation
$errors=[];
$valid=true;
if($result->num_rows == 0 && $email !="" && $password !=""){
    $errors['data'] = "Not valid data";
    $valid=false;
}
if(!filter_var($email , FILTER_SANITIZE_STRING)|| $password==""){
    $errors['email']="Not valid email";
    $valid=false;

}

// if($password=="" || !filter_var($password , FILTER_SANITIZE_REGEXP ,
// array("options"=>array("regexp"=>"/^[a-z]{5,12}$/")))
//  ){
//     $errors['password']="Not valid password";
//     $valid=false;

// }
    $_SESSION['erroes']= $errors;

    if(isset($_SESSION['erroes'])){
        header('location: admLogin.php');
    }
    
    
    if($valid==true){
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        header('location: incAdm.php');
    }













?>