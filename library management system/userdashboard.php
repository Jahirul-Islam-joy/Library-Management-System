<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library management system</title>
   
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1-dist/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    
</head>
<body class="userDashboardBody">  
<div class="full-wrape userDashboardBody">


<!--Nav bar-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-info">
   <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Library Management System</a>
        </div>


    <!--Here we are creating dashboard navbar Menu-->
    <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
	
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
             <div class="dropdown-menu">
                    <a class="dropdown-item" href="viewprofile.php"> View Profile</a>
                    <a class="dropdown-item" href="editprofile.php"> Edit Profile</a>
                    <a class="dropdown-item" href="changepassword.php"> Change Password</a>
            </div>
            </li>

			<li class="nav-item"> 
			<a class="nav-link" href="logout.php">Logout</a>
			 </li>
            

        </ul>   

   </div>
 </nav>
 

 <div class="row container-fluid userdash">

    
  

     <div class="col-md-3"></div>
        <div class="col-md-3">
        <div class="card" style="width: 18rem;border-radius:20px">
            
            <div class="card-body" >
               <h5 class="card-title card-header">Issued books </h5>
               <p class="card-text card-body">No of Books:--</p>
                 <a href="#" class="btn btn-success">View issued books </a>
            </div>
        </div>


        </div>
        


        <div class="col-md-3">
        <div class="card" style="width: 18rem;border-radius:20px">
            
            <div class="card-body" >
               <h5 class="card-title card-header">Book Not returned </h5>
               <p class="card-text card-body">No of Books:--</p>
                 <a href="#" class="btn btn-danger ">View Not return books </a>
            </div>

        </div>
        <div class="col-md-3"></div>



 
	</div>
   

   
    


   
</body>
</html>