<?php
require 'includes/protected/config.php';

  $email = $_POST["u"];
  $password = $_POST["p"];
        $result = mysql_query("SELECT * FROM `users` WHERE `email`= '".$email."'") or die("Cannot connect to database!");
        $row = mysql_fetch_array($result);
        $user_count = mysql_num_rows($result);
        if ($user_count==1) {
            if ($row['password'] === $password) {
               
                    echo "<script>alert('voracious'); window.location.href = 'next6.php'</script>";

            }else{
             echo "<script>alert('Username or Password wrong !!!!'); window.location.href='next6.php';</script>";   
            }
        }else
        {
             echo "<script>alert('Email Not Found !!!!'); window.location.href='next6.php';</script>";
        }
