<?php
session_start();
$_SESSION['access']="";
if(isset($_POST['sub'])){
  $sub = $_POST['sub'];

  $name = $_POST['name'];

  $email = $_POST['username'];
  $pass = $_POST['password'];
  $gender = $_POST['optradio'];



}

$connect=mysql_connect("localhost","root","") or die("could not connect");
$select=mysql_select_db("data1") or die("could not find database");
$que="SELECT emailid FROM registration WHERE emailid='$email'";
$query=mysql_query($que);
$num=mysql_num_rows($query);

if($num>=1){
mysql_close($connect);
$error= "That Email address already exists.";
$error_val=1;
if($email=="specialemail@gmail.com"){
  $error= "Special";
  $error_val=3;
}
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
  $error.="E-mail is not valid";
  $error_val=2;
  }

if($email=="speciale mail@gmail.com"){
  $error= "Special";
  $error_val=3;
}

if(empty($error)){

$query=mysql_query("INSERT INTO registration (name,gender,emailid,password) 
  VALUES('".mysql_escape_string($name)."','".mysql_escape_string($gender)."',
    '".mysql_escape_string($email)."','".mysql_escape_string($pass)."')");

 mysql_close($connect);
 echo "You have successfully registered";
			 		  
}

else
{
  if($error_val==1)
  {
    header("location:exists.html");
  }
  if($error_val==2)
  {
    header("location:error.php");
  }
  if($error_val==3)
  {
    header("location:special.html");
  }
}

?>