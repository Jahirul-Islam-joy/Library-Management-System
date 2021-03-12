<?php
    session_start();
    $connection=mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
   
    $name="";
    $emai="";
    $mobile="";
    

    $query = "select * from books where email='$_SESSION[email]'";
    $query_run=mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($query_run))
    {
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library management system</title>
   
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
            <a class="navbar-brand" href="admindashboard.php">Library Management System</a>
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

    <br>

        <br>
     <!-- # now the table which show the view profile-->
     <div class="row">
        <div class="col-4"></div>
        <div class="col-md-4 form-right">
            <form action="">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="<?php echo $name; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" value="<?php echo $email; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" value="<?php echo $mobile; ?>" disabled>
                    </div>
                   

            </form>

            </div>
        <div class="col-md-4"></div>




     </div>

   

   
    


   
</body>
</html>