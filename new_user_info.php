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
$username_matched=false;
$result = mysqli_query($con,"SELECT UNAME FROM USERS");
while($row = mysqli_fetch_array($result))
  {
	if($_POST['username']== $row['UNAME'])
	{
		$username_matched=true;
		break;
	}
  }
if(!$username_matched)
{
      
	//echo $_POST['username'];
	$res1 = mysqli_query($con,"INSERT INTO USERS VALUES('$_POST[username]','$_POST[password]')");
        $res2 = mysqli_query($con,"INSERT INTO PROFILE(UNAME,FNAME) VALUES('$_POST[username]','$_POST[fname]')");
	//if($res1 && $res2)
	//{
	    echo $_POST['username'];
	    $_SESSION['username'] = $_POST['username'];
		echo $_SESSION['username'];
	    header("Location: Registration.php");
//	//}
	//echo "Successfully Registrated.";
}
else
{
	echo "Username is already present in the database.";
}
mysqli_close($con);
?>
