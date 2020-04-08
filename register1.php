<?php
require 'includes/protected/config.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
$Email = $_POST['email'];
$password = $_POST['password'];
$ip = $_SERVER["REMOTE_ADDR"];

//first, we need to check if the user already exists. If not, then enter him/her into the db.
$result = mysql_query("SELECT * FROM `users` WHERE `email`= '".$Email."' ") or die("Cannot connect to database!");
$user_count = mysql_num_rows($result);
if ($user_count==0) {
    $random = mt_rand(1,4);
    $sql = mysql_query("INSERT into `users` (`email`, `password`, `name`, `contact`, `registration`, `level`, `random`, `ip`) values('".$Email."','".$password."','".$name."','".$contact."','success','1', '".$random."','".$ip."')");
    $sql1 = mysql_query("INSERT into `Progress` (`Email`) values('".$Email."')");

    if ($sql && $sql1) {
        session_start();
        $_SESSION['name'] = $name;
         $_SESSION['email'] = $Email;
        $_SESSION['success'] = true;
        header('location:./dashboard.php');
      }
}
else{
    echo "<script>alert('Email Already Registered !!!!'); window.location.href='login.php';</script>";
}