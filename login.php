<?php
session_start();
if (isset($_SESSION['email'])) {
    

    header('location:./dashboard.php');
} ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>i-hack</title>
<link rel="icon" type="image/png" sizes="16x16" href="p/images/favicon/favicon-16x16.png">
    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>

    <!-- App styles -->
    <link rel="stylesheet" href="styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="styles/pe-icons/helper.css"/>
    <link rel="stylesheet" href="styles/stroke-icons/style.css"/>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="blank">

<!-- Wrapper-->
<div class="wrapper">


    <!-- Main content-->
    <section class="content">
        <div class="back-link">
            <a href="index.php" class="btn btn-accent">Back to Main</a>
        </div>

        <div class="container-center animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-unlock"></i>
                </div>
                <div class="header-title">
                    <h3>Login</h3>
                    <small>
                        Please enter your credentials to login.
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                <form name="myform" onsubmit="return validateform()" action="login1.php" id="loginForm" novalidate method="post">
                        <div class="form-group">
                            <label class="col-form-label" for="username">Email</label>
                            <input type="email" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="email" id="username" class="form-control">
                            <span class="form-text small">Your unique username to app</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                            <span class="form-text small">Your strong password</span>
                        </div>
                        <div>
                            <button class="btn btn-accent">Login</button>
                            <a class="btn btn-default" href="register.php">Register</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="vendor/pacejs/pace.min.js"></script>
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- App scripts -->
<script src="scripts/luna.js"></script>
<script>  
function validateform(){  

var password=document.myform.password.value;  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (x==null || x==""){  
  alert("Email can't be blank");  
  return false;  
}else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  

if (password==null || password==""){  
  alert("Password can't be blank");  
  return false;  
}//else if(password.length<6){  
 // alert("Password must be at least 6 characters long.");  
 // return false;  
  //}  
}  
</script>  

</body>
</html>