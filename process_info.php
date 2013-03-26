<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "Twitter";
// Create connection to the database.
$con=mysqli_connect($host,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$password_matched=false;
$result = mysqli_query($con,"SELECT PASSWORD FROM USERS WHERE UNAME='$_POST[username]'");
while($row = mysqli_fetch_array($result))
  {
	if($_POST['password']== $row['PASSWORD'])
	{
		$password_matched=true;
		break;
	}
  }
if(!$password_matched)
{
	echo "Wrong username and password combination.";
	//header('Location: http://localhost/xampp/Twitter/Registration.php');
}
else
{
	session_start();
	/*******************************/
	/* Store username in session.*/
	/*******************************/
	$_SESSION['username']=$_POST['username'];
	header('Location: profile_page.php');
	exit();
}
mysqli_close($con);
?>
