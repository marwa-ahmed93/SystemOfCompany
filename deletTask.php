
<?php   
session_start();
include 'connection.php';
$task_id=$_GET['task_id'];

$query = " DELETE
FROM tasks
WHERE task_id='$task_id' ";
$result = $conn->query($query);

if ($conn->query($query) === TRUE) {
    header('location: allTasks.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }



?>






