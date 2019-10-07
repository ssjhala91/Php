<?php
if(isset($_SESSION['user']))
{
echo "already logged in";
header("location:dashboard.php");
}
else
{
  header("location:conn.php");
  session_start();
  $_SESSION['user']=$userid;

  header("location:dashboard.php");
}
?>