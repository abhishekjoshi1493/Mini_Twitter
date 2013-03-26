<html>
<!-- Basic Login Form-->
<head>
<link rel="stylesheet" type="text/css" href="login_signup_css.css">
<script src="get_data.js">
</script>
</head>
<title>
Twitter
</title>
<body onload="load()">
<div>
<p>Twitter for IIT Guwahati!</p>
<ol>
<li> Stay connected with whom you admire.</li>
<li> Feel like a celebrity.</li>
<li id="count">

</li>
</ol>
</div>
<form action="process_info.php" method="post" name="user_credentials">
<div id="login_id">
<div class="login">
<input type="text" style="height:30px;" name="username" id="login-username" placeholder="Username"><br/>
<input type="password" style="height:30px;" name="password" id="login-password" placeholder="Password"><br/>
<input type="submit" value="Login" class="button">
</div>
</div>
</form>
<form action="new_user_info.php" method="post" name="new_user_credentials">
<div id="signup_id">
<div class="signup">
<input type="text" style="height:30px;" name="fname" id="signup-fname" placeholder="First Name"><br/>
<input type="text" style="height:30px" name="username" id="signup-username" placeholder="Username"><br/>
<input type="password" style="height:30px;" name="password" id="signup-password" placeholder="Password"><br/>
<input type="submit" value="Signup" class="button">
</div>
</div>
</form>
</body>
</html>

