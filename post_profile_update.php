<?php require_once("include/connection.php"); ?>
<?php require_once("include/session.php"); ?>
<?php require_once("include/functions.php"); ?>
<?php
    if(!isset($_SESSION['username'])){
        redirect("login.php");
    }
?>
<?php
    $user = $_SESSION['username'];
    $fname = mysql_prep($_POST['fname']);
    $lname = mysql_prep($_POST['lname']);
    $sex = mysql_prep($_POST['sex']);
    $dept = mysql_prep($_POST['dept']);
    $room = mysql_prep($_POST['room']);
    $hostel = mysql_prep($_POST['hostel']);
    $mobile = mysql_prep($_POST['mobile']);
    $email = mysql_prep($_POST['email']);
    $dob = mysql_prep($_POST['dob']);
    $prog = mysql_prep($_POST['programme']);
    $year = mysql_prep($_POST['year']);
    $rel_stat = mysql_prep($_POST['rel_stat']);
    $website = mysql_prep($_POST['website']);
    $bio = mysql_prep($_POST['bio']);
    
    $result = mysql_query("UPDATE PROFILE SET
                            FNAME = '{$fname}',
                            LNAME = '{$lname}',
                            DOB = '{$dob}',
                            DEPT_ID = '{$dept}',
                            PROGRAMME = '{$prog}',
                            YEAR = {$year},
                            SEX = '{$sex}',
                            EMAIL = '{$email}',
                            MOBILE_NO = '{$mobile}',
                            RELATIONSHIP_STATUS = '{$rel_stat}',
                            BIO = '{$bio}',
                            WEBSITE = '{$website}'
                            WHERE UNAME = '{$user}'");
    if($result){
        header("Location: profile.php");
        exit;
    }
    else{
        echo "<p>".mysql_error()."  </p>";
    }
?>
