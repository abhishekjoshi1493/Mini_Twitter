<?php
	session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login_signup_css.css">
<script src="get_data.js">
</script>
<link rel="stylesheet" href="a.css" type="text/css">

<link rel="stylesheet" href="t1_core.bundle.css" type="text/css">
    <link rel="stylesheet" href="t1_more.bundle.css" type="text/css">
    <style id="user-style-abhishanksahu" class="js-user-style">
      a,
      .btn-link,
      .btn-link:focus,
      
      .pretty-link b,
      .pretty-link:hover s,
      .pretty-link:hover b,
      .pretty-link:focus s,
      .pretty-link:focus b,
      /* Account Group */
      .metadata a:hover,
      .metadata a:focus,
      
      .account-group:hover .fullname,
      .account-group:focus .fullname,
      .account-summary:focus .fullname,
      
      .stats a:hover,
      .stats a:hover strong,
      .stats a:focus,
      .stats a:focus strong,
      
      .profile-modal-header .fullname a:hover,
      .profile-modal-header .username a:hover,
      .profile-modal-header .fullname a:focus,
      .profile-modal-header .username a:focus,
      
      .story-article:hover .metadata,
      .story-article .metadata a:focus,
      
      .find-friends-sources li:hover .source,
        
      .stream-item a:hover .fullname,
      .stream-item a:focus .fullname,
      
      .stream-item .view-all-supplements:hover,
      .stream-item .view-all-supplements:focus,
      
      .tweet .time a:hover,
      .tweet .time a:focus,
      .tweet-actions a,
      .tweet .details.with-icn b,
      
      .stream-item:hover .original-tweet .expand-action-wrapper,
      .stream-item .original-tweet.focus .expand-action-wrapper,
      .opened-tweet.original-tweet  .expand-action-wrapper,
      
      .stream-item:hover .original-tweet .details b,
      .stream-item .original-tweet.focus .details b,
      .stream-item.open .original-tweet .details b,
      
      .simple-tweet:hover .details b,
      .simple-tweet.focus .details b,
      .simple-tweet.open .details b,
      .simple-tweet:hover .details .expand-action-wrapper,
      .simple-tweet.focus .details .expand-action-wrapper,
      .simple-tweet.open .details .collapse-action-wrapper,
      .simple-tweet:hover .details .simple-details-link,
      .simple-tweet.focus .details .simple-details-link,
      
      .client-and-actions a:hover,
      .client-and-actions a:focus,
      
      .dismiss-promoted:hover b,
      
      .tweet .context .pretty-link:hover s,
      .tweet .context .pretty-link:hover b,
      .tweet .context .pretty-link:focus s,
      .tweet .context .pretty-link:focus b,
      
      .list .username a:hover,
      .list .username a:focus,
      .list-membership-container .create-a-list,
      .list-membership-container .create-a-list:hover,
       
      .story-header:hover .view-tweets,
      .card .list-details a:hover,
      .card .list-details a:focus,
      .card .card-body:hover .attribution,
      .card .card-body .attribution:focus,
      .events-card .card-body:hover .attribution,
      .events-card .card-body .attribution:focus,
      .new-tweets-bar,
      .onebox .soccer ul.ticker a:hover,
      .onebox .soccer ul.ticker a:focus,
      
      .discover-item-actions a,
      
      .remove-background-btn,
      
      .stream-item-activity-me .latest-tweet .tweet-row a:hover,
      .stream-item-activity-me .latest-tweet .tweet-row a:focus,
      .stream-item-activity-me .latest-tweet .tweet-row a:hover b,
      .stream-item-activity-me .latest-tweet .tweet-row a:focus b {
          color: #0084B4;
      }
      
      
      
      
      
      
      s,
      .pretty-link:hover s,
      .pretty-link:focus s,
      .stream-item-activity-me .latest-tweet .tweet-row a:hover s,
      .stream-item-activity-me .latest-tweet .tweet-row a:focus s {
          color: #66B5D2;
      }
      
      
      
      
      
      .tweet .sm-reply,
      .tweet .sm-rt,
      .tweet .sm-fav,
      .tweet .sm-image,
      .tweet .sm-video,
      .tweet .sm-audio,
      .tweet .sm-geo,
      .tweet .sm-in,
      .tweet .sm-trash,
      .tweet .sm-more,
      .tweet .sm-page,
      .tweet .sm-embed,
      .tweet .sm-summary,
      .tweet .sm-chat,
      
      .timelines-navigation .active .profile-nav-icon,
      .timelines-navigation .profile-nav-icon:hover,
      .timelines-navigation .profile-nav-link:focus .profile-nav-icon,
      
      .sm-top-tweet,
      
      .metadata a.tweet-geo-text:hover .sm-geo,
      
      
      .discover-item .js-action-card-search:hover .sm-search,
      .discover-item .js-action-card-search:focus .sm-search {
          background-color: #0084B4;
      }
      
      .wrapper.black {
        background: url(https://abs.twimg.com/a/1363856703/t1/img/wash-black-30.png);
      }
      
      .wrapper.white {
        background: url(https://abs.twimg.com/a/1363856703/t1/img/wash-white-30.png);
      }
      
      
      body {
          background-position: left 40px;
          background-attachment: fixed;
          background-repeat: repeat;
            background-repeat: no-repeat;
          background-color: #C0DEED;
      }
      </style>
      
      <style id="user-style-abhishanksahu-bg-img" class="js-user-style-bg-img">
        body.user-style-abhishanksahu {
              background-image: url(https://si0.twimg.com/images/themes/theme1/bg.png);
        }
      </style>
    
      
        <!--<script id="swift_action_queue">
          (function(){function f(a){a=a||window.event;if(!a)return;!a.target&&a.srcElement&&(a.target=a.srcElement);if(!j(a))return;if(!document.addEventListener){var b={};for(var c in a)b[c]=a[c];a=b}a.preventDefault=a.stopPropagation=a.stopImmediatePropagation=function(
){};d.push(a);return!1}function g($){i();for(var b=0,c;c=d[b];b++){var e=$(c.target);if(c.type=="click"&&c.target.tagName.toLowerCase()=="a"){var f=$.data(e.get(0),"events"),g=f&&f.click,j=!c.target.hostname.match(a)||!c.target.href.match(/#$/);if(!g&&j){window
.location=c.target.href;continue}}e.trigger(c)}window.swiftActionQueue.wasFlushed=!0}function i(){e&&clearTimeout(e);for(var a=0;a<c.length;a++)document["on"+c[a]]=null}function j(c){var d=c.target.tagName.toLowerCase();if(d=="label")if(c.target.getAttribute
("for")){var e=document.getElementById(c.target.getAttribute("for"));if(e.getAttribute("type")=="checkbox")return!1}else for(var f=0;f<c.target.childNodes.length;f++)if((c.target.childNodes[f].tagName||"").toLowerCase()=="input"&&c.target.childNodes[f].getAttribute
("type")=="checkbox")return!1;if(d=="textarea"||d=="input"&&c.target.getAttribute("type")=="text"||c.target.getAttribute("contenteditable")=="true")if(c.type.match(b))return!1;return c.metaKey?!1:c.clientX&&c.shiftKey&&d=="a"?!1:c.target&&c.target.hostname&&!
c.target.hostname.match(a)?!1:!0}var a=/^([^\.]+\.)*twitter.com$/,b=/^key/,c=["click","keydown","keypress","keyup"],d=[],e=null;for(var k=0;k<c.length;k++)document["on"+c[k]]=f;setTimeout(i,1e4);window.swiftActionQueue={flush:g,wasFlushed:!1}})();
        </script>-->
        <!--<script id="composition_state">
          (function(){function a(a){a.target.setAttribute("data-in-composition","true")}function b(a){a.target.removeAttribute("data-in-composition")}if(document.addEventListener){document.addEventListener("compositionstart",a,!1);document.addEventListener("compositionend"
,b,!1)}})();
        </script>-->


</head>
<title>
Twitter-Your Profile
</title>
<body class="t1 logged-in user-style-abhishanksahu ms-windows tweet-display-linebreaks" dir="ltr" onload ="load_profile_name_followers_shortbio()">
<div id="profile_div">
<!--<div id="name_div" class="username-div">-->
<div id="doc" class="">
<div id="page-outer">
<div id="page-container" class="wrapper wrapper-home white">
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


    <div class="js-mini-profile-stats-container">
                <ul class="stats js-mini-profile-stats" data-user-id="107085561">
              <li>
		<?php
			$userid=$_SESSION['username'];
			$href_link="get_my_tweets.php?username="."$userid";
			$class_link="js-nav";
			$data_element_term="tweet_stats";
			$data_nav="profile";
			$anchor="<a class=".$class_link." data-element-term=".$data_element_term." data-nav=".$data_nav." href=".$href_link.">";
			echo $anchor;
		?>
		<!--<a class="js-nav" href="get_my_tweets.php" data-element-term="tweet_stats" data-nav='profile'>-->
  
  <strong id="tweet_no_div"></strong> Tweets
</a></li>
              <li>
		<?php
			$userid=$_SESSION['username'];
			$href_link="get_following.php?username="."$userid";
			$class_link="js-nav";
			$data_element_term="following_stats";
			$data_nav="following";
			$anchor="<a class=".$class_link." data-element-term=".$data_element_term." data-nav=".$data_nav." href=".$href_link.">";
			echo $anchor;
		?>
<!--<a class="js-nav" href="get_following.php" data-element-term="following_stats" data-nav='following'>-->
  
  <strong><p id="following_div"></p></strong> Following
</a></li>
              <li>
		<?php
			$userid=$_SESSION['username'];
			$href_link="get_following.php?username="."$userid";
			$class_link="js-nav";
			$data_element_term="follower_stats";
			$data_nav="followers";
			$anchor="<a class=".$class_link." data-element-term=".$data_element_term." data-nav=".$data_nav." href=".$href_link.">";
			echo $anchor;
		?>	
		<!--<a class="js-nav" href="get_followers.php" data-element-term="follower_stats" data-nav='followers'>-->
  
  <strong><p id="follower_div"></p></strong> Followers
</a></li>
            </ul>
</div>
<div class="home-tweet-box tweet-box component tweet-user">
	 <form  action="post_tweet.php" method="post">
	<textarea id="minitweet" rows="4" cols="50" onkeyup="track_chars()" name="tweet_text" placeholder="Compose Your Tweet.... "></textarea>
	<div class="toolbar js-toolbar">
		<div class="tweet-button">
			<span class="tweet-counter" id="char_count">140</span>
			<input class="btn primary-btn tweet-action " type="submit" id="tweet_button" value = "Tweet" disabled></input>
		</div>
	</div>
</form>
</div>
</div>
</div>

<div class="content-main" id="timeline">
  <div class="content-header">
    <div class="header-inner">
      <h2 class="js-timeline-title">Tweets</h2>
    </div>
  </div>
 
<div class="stream-container " data-max-id="312789624424640511" data-since-id="316267312284065793">
	<div class="stream home-stream">
		<ol class="stream-items" id="stream-items-id">
			<li class="js-stream-item stream-item stream-item expanding-stream-item" data-item-id="316267312284065793" id="stream-item-tweet-316267312284065793" data-item-type="tweet">
				<div class="content">
					<div id="other-tweets-div"></div>
				</div>
			</li>
		</ol> 
	</div>
</div>


 
 </div>
 
 </div>
 
 </div>
 </div>
 </div>

</body>
</html>
