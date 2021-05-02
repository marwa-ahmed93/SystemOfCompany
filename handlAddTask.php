<?php   
session_start();
include 'connection.php';

//geting data
$emp_id=$_POST['em_id'];
$task_name=$_POST['task_name'];
$desc=$_POST['desc'];
$status=$_POST['status'];
$deadline=$_POST['deadline'];

//query
$query = "INSERT INTO `tasks`(`em_id`, `task_name`, `desc`, `status`, `deadline`)
 VALUES ($emp_id ,'$task_name','$desc','$status','$deadline')
 ";
$result = $conn->query($query);

if ($conn->query($query) === TRUE) {
    header('location: allTasks.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }



?>