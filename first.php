<?php
session_start();

if(isset($_SESSION['logout']))
{
  echo $_SESSION['logout'];
}

session_destroy();
///$hhh=$_GET[$varname];
//echo $hhh;

?>

<html>

<head>
<title>log in</title>
</head>

<body>
<form action="second.php" method="POST">
<input type="text" placeholder="user name" name="userid">
<input type="text" placeholder="password" name="pass">
<input type="submit" value="submit">
</body>

</form>

</html>
