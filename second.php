<?php
if(isset($_SESSION['useridd']))
{
echo "already logged in";
header("location:dashboard.php");
}
else
{
$conn = mysqli_connect("localhost", "root", "","dac");

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT username FROM users where username='".$_POST['userid']."' and password ='".$_POST['pass']."'"; 
$result = mysqli_query($conn, $sql);

$useridd=$_POST['userid'];
echo "hiiii1";

if (mysqli_num_rows($result) == 1) 
   {

     echo "hiiii2";
       //  while($row = mysqli_fetch_assoc($result))
      // {
     //  echo "id: ".$row["username"]."<br>";
    //  if($row["username"]==$useridd)
   //     {
    
        session_start();
        $_SESSION['useridd']=$useridd;
        header("location:dashboard.php");
  
  
        //     }
       // }
     
 }
else    {
            echo "no result found";
    
     //    header("location:first.php");
        }


//mysqli_close($conn);
}
?>
