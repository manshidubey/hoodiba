<?php
session_start();
$_SESSION['access']="";
if(isset($_POST['sub1'])){
  $sub = $_POST['sub1'];
  $pass = $_POST['password'];
  $email = $_POST['username'];


  
}
$_SESSION["username"]= "ABC";
/*$connect=mysql_connect("localhost","root","") or die("could not connect");
$select=mysql_select_db("data1") or die("could not find database");
$que="SELECT emailid, password FROM registration WHERE emailid='$email' and password='$pass'";
$query = mysql_query($que);
$num=mysql_num_rows($query);
*/
$connect=mysql_connect("localhost","root","") or die("could not connect");
$select=mysql_select_db("data1") or die("could not find database");
$que="SELECT emailid,password FROM registration WHERE emailid='$email' and password = '$pass'";
$query=mysql_query($que);
$num=mysql_num_rows($query);
if($num == 1)
{
	
	header("location:profile.php");
}

else
{
	echo "Sorry! something went wrong";
}
mysql_close($connect);

?>