<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logint</title>
    <link rel="stylesheet" href="Login.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <h4>Register</h4>
            <form name="Register" action="" method="post">
            <input type="username" name="userName" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="password" name="userPassword" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <a href="Register.php" class="btn btn-primary btn-md">Register<i class="fa fa-sign-in"></i></a>
            </span>
            </from>
            </div>
            </div>
        </div>
    </div>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php
        require('db.php');
        if(isset($_REQUEST['username'])) {
            $username = stripslashes($_REQUEST['username']);
            
            $password = stripslashes($_REQUEST['password']);
            
            $query = "INSERT INTO users (username, password)
                        VALUES ('$username','".md5($password)."')";
            $result = mysqli_query($con,$query);
            if($result) {
                echo "<div class='form'>
                    <h3>You are registered successfully<h3>
                    <br> Click here to <a href='index.php'>Login</a>
                </div>";
            } else { 
            }
        }
         ?>
</body>
</html>