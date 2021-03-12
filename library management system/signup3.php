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
            <li class="nav-item active"> <a class="nav-link" href="signup.php">Sign Up</a></li>
            <li class="nav-item active"> <a class="nav-link" href="index.php">Login</a></li>

        </ul>   

   </div>
 </nav>

   

    <div class=" row full-row">
        <div class="col-md-4 left " id="side_bar">
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

        <div class="col-md-6 form-right"  id="main_content">
            <center> <h2>Sign Up</h2></center> 

            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your full name " required>
                    


                </div>
                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter your email " required>

                </div>
                <div class="form-group">
                    <label for="name">Password:</label>
                    <input type="password" name="password" class="form-control"placeholder="Enter the password" required>

                </div>
                <div class="form-group">
                    <label for="name">Mobile No:</label>
                    <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile no" required>

                </div>
                <div class="form-group">
                    <label for="name">Address:</label><br>
                    <textarea  class="form-control "name="address" id="" cols="30" rows="3" placeholder="Enter your Address"></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>


            </form>
        

    </div>


    </div>
    <div class="col-md-2 left col-sm-12 " id="side_bar"></div>

   
    


    </div>
</body>
</html>