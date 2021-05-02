
 <?php 
// session_start();
// include 'connection.php';
//   $email=$_SESSION['email'];
//   $query=" SELECT *
//   FROM employees
//   WHERE email='$email' ";
//   $result = $conn->query($query);
//   $row=$result->fetch_assoc(); 

?>
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

            <?php
//  $task_id=$_GET['task_id'];
?>
<!-- <form id = "registration" action="edit.php" method="POST"> -->
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    
                    <form method="POST" action="handlMyProfile.php?id=<?php echo $row['id'] ; ?>" >

                        <div class="input-group">
                        <h2 class="title" >My Info</h2>
                        </div>
                     

                        <?php
    if(isset($_SESSION['errors'])){
      foreach($_SESSION['errors'] as $error){
        echo "<div class='alert alert-danger' role='alert'>
      ".$error.";
      </div>" ;
      }
     }
    ?>

                        <div class="row row-space">
                            <div class="col-5">
                                <div class="input-group">
                                  <p>First Name</p>
                                     <input class="input--style-1" type="text" name="firstName" value=""  >
                                </div>
                            </div>
                           
                        </div>

                        <div class="input-group">
                          <p>Email</p>
                            <input class="input--style-1" type="email"  name="email" value="" >
                        </div>

                        <div class="input-group">
                          <p>Password</p>
                            <input class="input--style-1" style="color: #666;" type="password"  name="password" value="" >
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-5">
                                <div class="input-group">
                                  <p>City</p>
                                    <input class="input--style-1" type="text" name="city" value="" >
                                   
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="input-group">
                                  <!-- <p>Gender</p> -->
                                  <select name="gender">
                                    <!-- <option disabled="disabled" selected="selected">Task status</option> -->
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                  <!-- <input class="input--style-1" type="text" name="gender" value="" > -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                          <p>Phone Number</p>
                            <input class="input--style-1" type="number" name="phone" value="" >
                        </div>

  <div class="input-group">
                          <p>Birthday</p>
                            <input class="input--style-1" type="date" name="birthday" value="" >
                        </div>


                        <input type="hidden" name="id" id="textField" value="" required="required"><br><br>
                        <div class="p-t-20">
        <!-- <a class="btn btn--radius btn--green"  href="updateInfo.php">Update Info</a> -->

                            <button class="btn btn--radius btn--green"  name="send" >Update Info</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


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


