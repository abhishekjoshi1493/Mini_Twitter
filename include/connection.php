<?php
    require("constant.php");
    global  $con;
    $con = mysql_connect(DB_SERVER,DB_USER,"");
    if(!$con){
        die("database connection failed ". mysql_error());
    }
    $db_select = mysql_select_db(DB_NAME,$con);
    if(!$db_select){
    	die("Database selection failed" . mysql_error);
    }
?>
