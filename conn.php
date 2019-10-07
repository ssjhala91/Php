<?php



$conn = mysqli_connect("localhost", "root", "","dac");

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into userdata values("");

$sql = "SELECT userid FROM dac;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 
$row = mysqli_fetch_assoc($result) 

echo "id: " . $row["userid"]. "<br>";

if($row["userid"]==$_POST['userid'])
{
  session_start();

}
   
} else {
    echo "no result found";
}

//mysqli_close($conn);


?>