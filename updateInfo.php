<?php   
session_start();
include 'connection.php';
if(isset($_GET['task_id'])){
$task_id=$_GET['task_id'];

$query = "UPDATE `employees`
WHERE task_id='$task_id' ";
$result = $conn->query($query);

if ($conn->query($query) === TRUE) {
    header('location: viewEmployees.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }

}

?>