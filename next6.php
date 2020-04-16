<?php
if(isset($_COOKIE['clue']))
{
    require 'next-cookie.php';

}
else{
echo "<script>alert('Some, error occured. Plese Login Again'); window.location.href = 'login.php'</script>";
}
?>