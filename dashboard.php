<?php
require_once 'functions/function.php';
session_start();

if (isset($_SESSION['email'])) {
    no_login('header');
    
    login('sidebar');
       login('level');
    no_login('footer');
} else {
    header('location:./logout.php');
}
?>
