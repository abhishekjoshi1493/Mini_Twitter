<?php
$host = "localhost";
$username = "root";
$password = "abhi";
$dbname = "twitter";
// Create connection to the database.
$con=mysqli_connect($host,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$username_matched=false;
$result = mysqli_query($con,"SELECT UNAME FROM USERS");
while($row = mysqli_fetch_array($result))
  {
	if($_POST['user_name']== $row['UNAME'])
	{
		$username_matched=true;
		break;
	}
  }
if(!$username_matched)
{
	//echo "new user.";
	mysqli_query($con,"INSERT INTO USERS VALUES('$_POST[user_name]','$_POST[password]')");
	echo "Successfully Registrated.";
}
else
{
	echo "Username is already present in the database.";
}
mysqli_close($con);
?>
