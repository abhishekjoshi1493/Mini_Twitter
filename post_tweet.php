<?php require_once("include/connection.php"); ?>
<?php require_once("include/session.php"); ?>
<?php
$date_of_post=date("Y/m/d", time());
$time_of_post=date(" H:i:s", time());
$text = $_POST['tweet_text'];
$len = strlen($text);
$cur_word = "";
$tags = array();
for($i = $len-1; $i >=0; $i-- )
{
    if($text[$i]=='#' && ($text[$i-1]==' ' || $i==0))
    {
        $cur_word = $text[$i].$cur_word;
        array_push($tags,$cur_word);
    }
    else if($text[$i]==' ')
        $cur_word ="";
    else
        $cur_word = $text[$i].$cur_word;
}
echo count($tags);
$res1 = mysql_query("INSERT INTO POSTS(UNAME,CONTENT,POST_DATE,POST_TIME) VALUES('$_SESSION[username]','$_POST[tweet_text]','$date_of_post','$time_of_post')");

$res2 = mysql_query("SELECT MAX(POST_ID) AS post_id FROM POSTS WHERE UNAME ='$_SESSION[username]'");
$result = mysql_fetch_array($res2);
echo $result['post_id'];
echo "<br/>";
for($i=0;$i<count($tags);$i++)
{
    echo $tags[$i];
    $tag = strtolower($tags[$i]);
    $res3 = mysql_query("INSERT INTO HASH_TAGS VALUES($result[post_id],'$tags[$i]','$date_of_post','$time_of_post')");
    if(!$res3)
        echo "Error!!!";
}
header('Location: profile_page.php');
exit();
?>