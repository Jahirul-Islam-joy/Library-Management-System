<?php
  require('functions.php');
	session_start();
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

<div class="adminDashboardBody">


<div class="full-wrape ">


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
			<a class="nav-link" href="adminlogout.php">Logout</a>
			 </li>
            

        </ul>   

   </div>
 </nav>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" 
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="admindashboard.php" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
				<div class="dropdown-menu">
					<a href="" class="dropdown-item">Add New Book</a>
					<a href="" class="dropdown-item">Manage Books</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
				<div class="dropdown-menu">
					<a href="" class="dropdown-item">Add New Category</a>
					<a href="" class="dropdown-item">Manage Category</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
				<div class="dropdown-menu">
					<a href="" class="dropdown-item">Add New Author</a>
					<a href="" class="dropdown-item">Manage Authors</a>
				</div>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Issue Book</a>
			</li>
		</ul>
	</div>

</nav>
 



 <div class="row container-fluid userdash" style="padding-left:100px">

    
    
    <div class="col-md-3" >
        <div class="card" style="width: 18rem;border-radius:20px">
            
            <div class="card-body" >
               <h5 class="card-title card-header">Registered users</h5>
               <p class="card-text card-body">No of Registered Users : <?php echo get_user_count();?> </p>
                 <a href="registereduser.php" class="btn btn-danger">view registered users </a>
            </div>
          </div>

        </div>


        <div class="col-md-3" >
        <div class="card" style="width: 18rem;border-radius:20px">
            
            <div class="card-body" >
               <h5 class="card-title card-header">Total books </h5>
               <p class="card-text card-body">No of Books: <?php echo get_book_count();?></p>
                 <a href="#" class="btn btn-primary">View total books </a>
            </div>
          </div>

        </div>
        
        <div class="col-md-3">
        <div class="card" style="width: 18rem;border-radius:20px">
            
            <div class="card-body" >
               <h5 class="card-title card-header">Books catagories </h5>
               <p class="card-text card-body">No of catagories : <?php echo get_category_count();?></p>
                 <a href="#" class="btn btn-warning">View catagories</a>
            </div>
          </div>

        </div>
        <div class="col-md-3">
        <div class="card" style="width: 18rem;border-radius:20px">
            
            <div class="card-body" >
               <h5 class="card-title card-header">Book Authors </h5>
               <p class="card-text card-body">No of Authors: <?php echo get_author_count();?> </p>
                 <a href="#" class="btn btn-success">View book authors  </a>
            </div>
          </div>

        </div>


        </div>



 
   
    

    <div class="row container-fluid userdash2"style="padding-left:100px">

    
    <div class="col-md-1"></div>
    


        <div class="col-md-3">
        <div class="card" style="width: 18rem;border-radius:20px">
            
            <div class="card-body" >
               <h5 class="card-title card-header">Issued Books</h5>
               <p class="card-text card-body">No of issued Books: <?php echo get_issued_book_count(); ?></p>
                 <a href="#" class="btn btn-dark">View issued books</a>
            </div>
          </div>

        </div>
        
        <div class="col-md-3">
        <div class="card" style="width: 18rem;border-radius:20px">
            
            <div class="card-body" >
               <h5 class="card-title card-header">Books not return</h5>
               <p class="card-text card-body">Books:--</p>
                 <a href="#" class="btn btn-info">Go somewhere</a>
            </div>
          </div>

        </div>
        <div class="col-md-2"></div>


        </div>



 
	</div>
   

   
    


</div>



   
</body>
</html>