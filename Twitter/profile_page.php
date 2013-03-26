<?php
	session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login_signup_css.css">
<script src="get_data.js">
</script>
<link rel="stylesheet" href="a.css" type="text/css">
</head>
<title>
Twitter-Your Profile
</title>
<body onload ="load_profile_name_followers_shortbio()">
<div id="profile_div">
<!--<div id="name_div" class="username-div">-->
<div class="dashboard">
<div class="module mini-profile">
    
      <div class="flex-module profile-summary js-profile-summary">
<div id="content">
 <div class="account-group js-mini-current-user" data-user-id="107085561" data-screen-name="abhishanksahu">
<div class="account-group js-mini-current-user" data-user-id="107085561" data-screen-name="abhishanksahu">
            <img class="avatar size32" src="Images/default_profile_2_normal.png" alt="abhishank sahu" data-user-id="107085561">
<div style="padding: 0px 45px 0px 45px">
<b class="fullname">
            
<?php
	if(isset($_SESSION['username']))
	{
		echo " Welcome ".$_SESSION['username'];
	}
?>
</b>
<small class="metadata">
                
                View my profile page
            </small>
</div>
</div>
</div>
</div>
</div>


<!--
<br /><br /><br /><br /><br />
<div id="followers_div" class="username-div">
<label id="followers_div"></label>
<a href="get_followers.php" style="text-decoration:none">Followers</a>
</div>
<div id="following_div" class="username-div">
<label id="following_div"></label>
<a href="get_following.php" style="text-decoration:none">abc</a>
</div>
</div>
-->
<!--<div id="page-container" class="wrapper wrapper-home white">-->




<!--<div style="margin-top:80px; margin-left:50px;">-->

    <div class="js-mini-profile-stats-container">
                <ul class="stats js-mini-profile-stats" data-user-id="107085561">
              <li><a class="js-nav" href="/abhishanksahu" data-element-term="tweet_stats" data-nav='profile'>
  
  <strong>16</strong> Tweets
</a></li>
              <li><a class="js-nav" href="/following" data-element-term="following_stats" data-nav='following'>
  
  <strong><p id="following_div"></p></strong> Following
</a></li>
              <li><a class="js-nav" href="/followers" data-element-term="follower_stats" data-nav='followers'>
  
  <strong><p id="follower_div"></p></strong> Followers
</a></li>
            </ul>
              </div>
</div>
</div>
</div>
</div>
<!--</div>-->
<!--
<div>
<table id="my_table" style="margin-top:50px"; border="1" align="left">
<tr>
<td><p id="follower_div"></p></td>
<td><p id="following_div"></p></td>
</tr>
<tr>
<td><a href="get_followers.php" style="text-decoration:none">Followers</a></td>
<td><a href="get_following.php" style="text-decoration:none">Following</a></td>
</tr>
</table>
-->
</body>
</html>
