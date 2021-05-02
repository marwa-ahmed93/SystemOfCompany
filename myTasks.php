 <?php 
session_start();
include 'connection.php';  
    $email=$_SESSION['email'];
    $query=" SELECT *
    FROM employees
    WHERE email='$email' ";
    $result = $conn->query($query);
     $row=$result->fetch_assoc();
        
?>
<!DOCTYPE html>
<html>
  <head>
	<title>Company Name</title>
	<!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styleindex.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<link rel="stylesheet" type="text/css" href="css/styletasks.css">


  </head>
<body>

<header>
		<nav>
        <h1><?php echo $row['name']; ?></h1>
			<h1><img class="rounded-circle" width="35px" src="assets/avatar.png" alt=""></h1>
			<ul id="navli">
				<li><a class="homered" href="myTasks.php">my task</a></li>
				<li><a class="homeblack" href="chat.php">chat</a></li>
				<li><a class="homeblack" href="myProfile.php">profile</a></li>
				<li><a class="homeblack" href="logout.php">logout</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>


    <h2 class="task_title" >Empolyee Leaderboard</h2>
      
    
   
       
          <table>

<tr bgcolor="#000">
<th align = "center">task_id</th>
<th align = "center">emp_id</th>
				<th align = "center">Task_name</th>
				<th align = "center">Desc</th>
				<th align = "center">status</th>
                <th align = "center">Deadline</th>
                <th align = "center">Action</th>
				
            </tr>
         <?php


    $email=$_SESSION['email'];
    $query2=" SELECT *
    FROM employees
    WHERE email='$email' ";
    $result2 = $conn->query($query2);
    $row2=$result2->fetch_assoc();

 
    $emp_id = $row2['id'];
           

    $query = " SELECT *
    FROM tasks
    WHERE em_id = $emp_id";
    $result = $conn->query($query);


    



if ($result->num_rows > 0){
  // output data of each row
  while($row = $result->fetch_assoc()) {
      ?>

 <tr>
                <td> <?php echo $row['task_id'];   ?></td>
                <td><?php echo $row['em_id'];   ?></td>
                <td><?php echo $row['task_name'];   ?></td>
                <td><?php echo $row['desc'];   ?></td>
                <td><?php echo $row['status'];   ?></td>
                <td><?php echo $row['deadline'];   ?></td>

            

<!-- <td> <a href="https://back.php"></a>  <button type="button" class="btn btn-primary">Done</button> </td> -->
    

 <td>
 <?php
 if($row['status']=='in process'){
     ?>
<a class="btn btn-primary" href="done.php?task_id=<?php echo $row['task_id'] ?>">Done</a> 
<?php 
 }
elseif($row['status']=='done'){
    ?>
    <a class="btn btn-danger" href="back.php?task_id=<?php echo $row['task_id'] ?>" role="button">Back</a>
    <?php
    }
?>
</td> 
 

<!-- <a href="https://done.php"></a>  <button name="back" method="get" type="button" class="btn btn-danger">Back</button> -->

        

            </tr>
           
  <?php
  }
}
 else{
  echo "0 results";
}
$conn->close(); 
?>
	</table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    
    <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <script src="js/global.js"></script> 

  </body>
</html>


