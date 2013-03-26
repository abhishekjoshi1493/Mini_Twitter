<?php
    //this file is the place to store all the funtions
    function mysql_prep($value){
        $magic_quotes_active = get_magic_quotes_gpc();
        $new_enough_php = function_exists("mysql_real_escape_string");
        
        if($new_enough_php){
            if($magic_quotes_active){
                $value = stripcslashes($value);
            }
            $value = mysql_real_escape_string($value);
        }
        else{
            if(!$magic_quotes_active){
                $value = addcslashes($value);
            }
        }
        return $value;
    }
    function confirm_query($query){
        if(!$query){
	    die("Database query failed" . mysql_error());
        }
    }
    
    function article($attribute,$con){
        $result = mysql_query("SELECT *FROM article ORDER BY {$attribute} DESC LIMIT 0,2" , $con);
        return $result;
        confirm_query($result);
    }
    
    function getArticle($sel_id,$con){
        if(isset($_SESSION['uid']))
            $uid = $_SESSION['uid'];
        switch($sel_id){
            case "profile" :
                $result = mysql_query("SELECT *FROM users WHERE UID={$uid}");
                confirm_query($result);
                $row = mysql_fetch_array($result);
                echo "<img src=\"images/{$uid}.jpg\" alt = \"10010101\"> <br />";
                echo "<strong> First Name: </strong>".$row["first_name"]."<br />";
                echo "<strong>Last Name: </strong>".$row["last_name"]."<br />";
                echo "<strong>UID: </strong>".$row["UID"]."<br />"; 
                echo "<strong>Sex: </strong>".$row["Sex"]."<br />";
                echo "<strong>DOB: </strong>".$row["dob"]."<br />";
                echo "<strong>Department: </strong>".$row["Department"]."<br />";
                echo "<strong>College: </strong>".$row["College"]."<br />";
                echo "<strong>Address: </strong>".$row["Address"]."<br />";
                echo "<strong>Mobile No.: </strong>".$row["Mobile_No"]."<br />";
                 echo "<strong>Email: </strong>".$row["email"]."<br />"; 
                echo "<strong>Article Posted: </strong>";
                $article_row = mysql_query("SELECT * FROM article WHERE user_id={$uid}");
                confirm_query($article_row);
                echo "<ul class=\"page\">";
                while($row = mysql_fetch_array($article_row)){
                    echo "<li><a href=\"content.php?id=".urlencode($row["id"]).
                    "\"> {$row["title"]}</a></li>";
                    
                }
                echo "<td id=\"side\">
                        <a href=\"edit_profile.php\">Edit Profile</a>
                    </td>";
                break;
            case "all" :
                echo "<h2>All posted</h2>
                <ul class=\"pages\">";
                $result = mysql_query("SELECT *FROM article ORDER BY time DESC" , $con);
                confirm_query($result);
                while($row = mysql_fetch_array($result)){
                    echo "<li ";
                    if($sel_id==$row["id"]){
                        echo "class=\"selected\"";
                    }
                    echo "><a href=\"content.php?id=".urlencode($row["id"]).
                    "\"> {$row["title"]}</a></li>";
                }
                echo "</ul>";
                break;
            case "recent" :
                echo "<h2>Recently Posted Article</h2>
                <ul class=\"pages\">";
                $result = article("time",$con);
                confirm_query($result);
                while($row = mysql_fetch_array($result)){
                    echo "<li ";
                    if($sel_id==$row["id"]){
                        echo "class=\"selected\"";
                    }
                    echo "><a href=\"content.php?id=".urlencode($row["id"]).
                    "\"> {$row["title"]}</a></li>";
                }
                echo "</ul>";
                break;
            case "most_read" :
                 echo "<h2>Most Read Article</h2>
                <ul class=\"pages\">";
                $result = article("no_of_times_read",$con);
                confirm_query($result);
                while($row = mysql_fetch_array($result)){
                    echo "<li ";
                    if($sel_id==$row["id"]){
                        echo "class=\"selected\"";
                    }
                    echo "><a href=\"content.php?id=".urlencode($row["id"]).
                    "\"> {$row["title"]}</a></li>";
                }
                echo "</ul>";
                break;
            case "high_rated" :
                 echo "<h2>Highest Rated</h2>
                <ul class=\"pages\">";
                $result = article("rating",$con);
                confirm_query($result);
                $name="";
                while($row = mysql_fetch_array($result)){
                    echo "<li ";
                    if($sel_id==$row["id"]){
                        echo "class=\"selected\"";
                    }
                    echo "><a href=\"content.php?id=".urlencode($row["id"]).
                    "\"> {$row["title"]}</a>";
                    $user = mysql_query("SELECT * FROM users WHERE UID = {$row['user_id']}");
                    $user_det = mysql_fetch_array($user);
                    $name = $user_det["first_name"]."  ".$user_det["last_name"];
                    //echo "".$name."".
                      echo  "</li>";
                }
                echo "</ul>";   
                break;
            default :
                $article_row = mysql_query("SELECT *FROM article WHERE id={$sel_id}");
                confirm_query($article_row);
                $row = mysql_fetch_array($article_row);
                $user = mysql_query("SELECT * FROM users WHERE UID = {$row['user_id']}");
                confirm_query($user);
                $user_det = mysql_fetch_array($user);
                $read = $row['no_of_times_read']+1;
                mysql_query("UPDATE article SET  no_of_times_read =  {$read} WHERE  id={$sel_id}");
                echo "<div class=\"page-content\"><h2>" .$row["title"] . " </h2>";
                echo "<small>Posted By: ". $user_det["first_name"].$user_det["last_name"]."</small><br />";
                echo "<small>Rating: ". $row["rating"]."</small><br/>";
                echo "<small>tags: ".htmlentities($row["tag"])."</small></div>";
                echo "<p>" . strip_tags($row["content"],"<b><br><h>") ."</p>";
                echo "<p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>";
                $comment = mysql_query("SELECT * FROM comment WHERE article_id={$sel_id}");
                confirm_query($comment);
                if($comment){
                    echo "<h3>Comments</h3>
                    <table><tr><td width=\"700px\"><ul class=\"page\">";
                    while($c = mysql_fetch_array($comment)){
                        $ud = mysql_query("SELECT * FROM users WHERE UID={$c['user_id']}");
                        confirm_query($ud);
                        $u = mysql_fetch_array($ud);
                        echo "<li>" . strip_tags($c["content"],"<b><br><h>");
                        echo "<br/><br/><small>Posted By:".$u['first_name']."\n".$u['last_name']."</small><br/><br/><br/></li> ";
                        
                    }
                    echo "</ul></td></tr></table>";
                }
                //include("includes/comment.php");
                if(isset($_SESSION['uid'])){
                    echo "<form action=\"content.php?id=".urlencode($sel_id)."\" method=\"post\" \">
                        <h3>Comment</h3>
                        <textarea rows=\"10\" cols=\"50\" name=\"content\">Type your comment here here</textarea><br/><br/>
                        <input type=\"submit\" name=\"post\" value=\"Post\" />
                        </form>";
                }
                break;
        }
    }
    
    function redirect($location = NULL){
        if($location != NULL){
            header("Location: {$location}");
            exit;
        }
    }
    
    
    function display_errors($error_array) {
	echo "<p class=\"errors\">";
	echo "Please review the following fields:<br />";
	foreach($error_array as $error) {
		echo " - " . $error . "<br />";
	}
	echo "</p>";
    }
    
    
?>