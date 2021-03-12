<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
   
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap-4.4.1-dist/js/juqery_latest.js"></script>
    <script type="text/javascript" src="../bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style.css">
    
    
</head>
<body>  
<div class="full-wrape">


<!--Nav bar-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-info">
   <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Library Management System</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item  active"> <a class="nav-link" href="index.php">Admin Login</a></li>
            <li class="nav-item active"> <a class="nav-link" href="../signup.php">Sign Up</a></li>
            <li class="nav-item active"> <a class="nav-link" href="../index.php">Login</a></li>

        </ul>   

   </div>
 </nav>

   

    <div class=" row full-row">
        <div class="col-md-4 left col-sm-12 " id="side_bar">
            <h4>Library Timing </h4>
            <ul>
                <li>Opening Timing: 9:00 Am</li>
                <li>Closing Timing: 5:00 PM</li>
                <li>Everyday is Open</li>
            </ul>

            <h4>Rules & Regulations </h4>
            <ul>
                <li>Atmost 5 books you can take </li>
                <li>Return the books at the right time </li>
                <li>Take care of the books</li>
                
            </ul>
            
        </div>

        <div class="col-md-6 col-sm-12 form-right-login"  id="main_content">
            

            <form action="" method="post" class="form-body">
            <center> <h2>Admin Login</h2></center> 
                <div class="form-group">
                    <label for="name">Username or Email:</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Username or Email" required>

                </div>
                <div class="form-group">
                    <label for="name">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" >

                </div>
                
             
                <button type="submit" name="login" class="btn btn-primary">Log in</button>


            </form>
        
            <?php
				session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from admins where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] = $row['name'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['id'] = $row['id'];
								header("Location:admindashboard.php");
							}
							else{
								?>
								<center><span class="alert-danger">Wrong Password</span></center>
								<?php
							}
						}
					}
				}
			?>
    </div>
    <div class="col-md-2 left col-sm-12 " id="side_bar"></div>


    </div>

   
    


    </div>
</body>
</html>