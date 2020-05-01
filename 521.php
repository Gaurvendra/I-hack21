<!DOCTYPE html>
<html lang="en">
<head>
    <?php
     $ip = $_SERVER['REMOTE_ADDR'];
     require 'includes/protected/config.php';
     $resulty= mysql_query("SELECT * FROM `ips` WHERE `ip`='".$ip."'");
     $rowy = mysql_fetch_array($resulty);
     $user_county = mysql_num_rows($resulty);

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Guess</title>
</head>
<body>
    <h3>You only have 3 attempts for this.</h3><br>
    <form action="" method="post">
        <input type="text" style="width:250px;" name="something" placeholder="Enter Something to get Answer" <?php if($user_county!=0) if($rowy['attempts']>=3) echo "disabled";?>><br>
        <input type="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['something']))
{
    $number=$_POST['something'];
    $err = "";
    $i=0;
    if($number == '68906')
    {
        echo "<script>alert('glorious')</script>";
    }
    else
    {
        $i++;
        //$ip = $_SERVER['REMOTE_ADDR'];
        // require 'includes/protected/config.php';
        // $resulty= mysql_query("SELECT * FROM `ips` WHERE `ip`='".$ip."'");
        // $rowy = mysql_fetch_array($resulty);
        // $user_county = mysql_num_rows($resulty);
        if($user_county == 0)
        {
            $sqly = mysql_query("INSERT INTO `ips`(`ip`, `attempts`) values ('".$ip."', '".$i."')");
            if($sqly)
            {
                echo "<script>alert('2 Attempts Left');</script>";
            }
        }
        else if($user_county == 1)
        {
            $attempts = $rowy['attempts'];
            if($attempts>=2)
            {
                $attempts++;
                mysql_query("UPDATE `ips` SET `attempts`='".$attempts."' WHERE `ip`='".$ip."'");
                echo "<script>alert('You used all your attempts :(');window.location.href = 'index.html';</script>";
                
            }
            else if($attempts==1)
            {
                $attempts++;
                mysql_query("UPDATE `ips` SET `attempts`='".$attempts."' WHERE `ip`='".$ip."'");
                echo "<script>alert('1 Attempt Left');</script>";

            }
        }
        //echo $user_county;
    

    }
}
?>