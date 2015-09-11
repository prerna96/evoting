<?php
session_start();
if(isset($_SESSION['emailid']))
{
 
 unset($_SESSION['emailid']);
 session_destroy();
 
}
//window.setTimeout('window.location="home.php"; ',2000);

echo "<div id='waitimg'><img src='images/Wait.gif'></div>";

header('Refresh:3;url=home.php');
 //header("Location:home.php");
?>
<html>
<head>
<style>
#waitimg
{
 margin-top:100px;
 margin-left:300px;
 }
</style>
</head>
</html>