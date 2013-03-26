function load_count()
{
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("count").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","functions.php",true);
xmlhttp.send();
}
function load()
{
	setInterval(function(){load_count();},50);
}
function load_profile_name_followers_shortbio()
{
	setInterval(function(){load_user_data();},200);
}
function load_user_data()
{
	load_count_followers();
	load_count_following();
	load_count_tweets();
	get_others_tweets();
	load_shortbio();
}
function load_count_followers()
{
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("follower_div").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","follower_count.php",true);
xmlhttp.send();
}
function load_count_following()
{
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("following_div").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","following_count.php",true);
xmlhttp.send();
}
function load_count_tweets()
{
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("tweet_no_div").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","tweet_count.php",true);
xmlhttp.send();
}
function track_chars()
{
	var tweet;
	tweet=document.getElementById("minitweet").value;
	var length=tweet.length;
	if(length<=0 || length>140)
	{
		document.getElementById("tweet_button").disabled=true;
	}
	else
	{
		document.getElementById("tweet_button").disabled=false;
	}
	document.getElementById("char_count").innerHTML=140-length;
}
function get_others_tweets()
{
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("other-tweets-div").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","get_others_tweets.php",true);
xmlhttp.send();
}
