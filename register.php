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
<link rel="icon" type="image/png" sizes="16x16" href="p/images/favicon/favicon.ico">
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

        <div class="container-center lg animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-add-user"></i>
                </div>
                <div class="header-title">
                    <h3>Register</h3>
                    <small>
                        Please enter your data to register.
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <p>

                    </p>
                    <form name = "myform1" action="register1.php" onsubmit="return validateeform()" id="loginForm" method="post">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Name</label>
                                <input type="text" value="" id="username" class="form-control" name="name" required>
                                <span class="form-text small">Your unique username to app</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Contact</label>
                                <input type="text" value="" id="contact" class="form-control" name="contact" required>
                                <span class="form-text small">Your contact no.</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                <input type="password" value="" id="repeatpassword" class="form-control" name="password" required>
                                <span class="form-text small">Your hard to guess password</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="email" value="" id="email" class="form-control" name="email" required>
                                <span class="form-text small">Your address email to contact</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-accent">Register</button>
                            <a class="btn btn-default" href="login.php">Login</a>
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

function validateeform(){  
var num1=document.myform1.contact.value;  
var password=document.myform1.password.value;  
var name=document.myform1.username.value;  
var x=document.myform1.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  

if (name==null || name==""){  
  alert("Username can't be blank");  
  return false;  
}

 if (isNaN(num1)){  
  alert("Please Enter A Valid Contact no. ");   
  return false;
   
}else if(num1.length!=10){
   alert("Please enter a valid contact no. ");  
  return false;
}

if (password==null || password==""){  
  alert("Password can't be blank");  
  return false;  
  
}else if(password.length<6){  
 alert("Password must be at least 6 characters long.");  
 return false;  
  }

if (x==null || x==""){  
  alert("Email can't be blank");  
  return false;  
}else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  

</script> 

</body>
</html>