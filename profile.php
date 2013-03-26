<!DOCTYPE html>
<!--[if IE 8]><html class="lt-ie10 ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="lt-ie10 ie9" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en" ><!--<![endif]-->
<?php require_once("include/connection.php"); ?>
<?php require_once("include/session.php"); ?>

  <head>
   <meta charset="utf-8">
      <title>Twitter / Settings</title>
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <meta name="msapplication-TileImage" content="//abs.twimg.com/favicons/win8-tile-144.png"/>
    <meta name="msapplication-TileColor" content="#00aced"/>
    <link href="//abs.twimg.com/favicons/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <meta name="swift-page-name" id="swift-page-name" content="settings">
    <link rel="canonical" href="https://twitter.com/settings/account">
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Twitter">
	<!--<script id="swift_loading_indicator">
          document.documentElement.className=document.documentElement.className+" swift-loading";
    </script>-->
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
  <body class="t1 logged-in user-style-abhishanksahu ms-windows tweet-display-linebreaks" dir="ltr">

    <div id="doc" class="">
        <div class="topbar js-topbar">
          <div id="banners" class="js-banners">
          </div>
          <div class="global-nav" data-section-term="top_nav">
            <div class="global-nav-inner">
              <div class="container">
        
                <h1 class="icon bird-topbar-etched">
                  <span class="visuallyhidden">Twitter</span>
                </h1>
        
                <ul class="nav js-global-actions" id="global-actions">
                  <li id="global-nav-home" class="home" data-global-action="home">
                    <a class="js-nav" href="/" data-component-term="home_nav" data-nav="home" title="Home">
                      <span class="new-wrapper"><i class="nav-home"></i><i class="nav-new"></i></span> <span class="text">Home</span>
                    </a>
                  </li>
                  <li class="people" data-global-action="connect">
                    <a class="js-nav" href="/i/connect" data-component-term="connect_nav" data-nav="connect" title="Connect">
                      <span class="new-wrapper"><i class="nav-people"></i><i class="nav-new"></i></span> <span class="text">Connect</span>
                    </a>
                  </li>
                  <li class="topics" data-global-action="discover">
                    <a class="js-nav" href="/i/discover" data-component-term="discover_nav" data-nav="discover" title="Discover">
                      <span class="new-wrapper"><i class="nav-topics"></i><i class="nav-new"></i></span> <span class="text">Discover</span>
                    </a>
                  </li>
                    <li class="profile" data-global-action="profile">
                      <a class="js-nav" href="/abhishanksahu" data-component-term="profile_nav" data-nav="profile" title="Me">
                        <span class="new-wrapper"><i class="nav-me"></i><i class="nav-new"></i></span> <span class="text">Me</span>
                      </a>
                    </li>
                </ul>
        
                <div class="pull-right">
                  <form class="form-search js-search-form" action="/search" id="global-nav-search">
            <label class="visuallyhidden" for="search-query">Search query</label>
            <input class="search-input" type="text" id="search-query" placeholder="Search" name="q" autocomplete="off" spellcheck="false">
            <span class="search-icon js-search-action">
              <button type="submit" class="icon nav-search">
                <span class="visuallyhidden">
                  
                  Search
                </span>
              </button>
            </span>
            <input disabled="disabled" class="search-input search-hinting-input" type="text" id="search-query-hint" autocomplete="off" spellcheck="false">
              <div class="dropdown-menu typeahead">
      <div class="dropdown-caret">
        <div class="caret-outer"></div>
        <div class="caret-inner"></div>
      </div>
      <div class="dropdown-inner js-typeahead-results">
        <ul class="typeahead-items saved-searches-list">
      
      <li class="saved-search-item search-item"><a class="js-nav" href="" data-search-query="" data-query-source="" data-ds="saved_search" tabindex="-1"><i class="generic-search"></i></a></li>
    </ul>    <ul class="typeahead-items topics-list">
      
      <li class="topics-item search-item"><a class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-ds="topics" tabindex="-1"><i class="generic-search"></i></a></li>
    </ul>    <div class="typeahead-accounts js-typeahead-accounts">
      <ul class="typeahead-items">
        
        <li data-user-id="" data-user-screenname="" data-remote="true" data-score="" class="typeahead-item typeahead-account-item js-selectable">
          
          <a class="js-nav" data-query-source="typeahead_click" data-search-query="" data-ds="account">
            <img width="24" height="24" class="avatar size24">
            <span class="fullname"></span>
            <span class="js-verified hidden"><span class="icon verified"><span class="visuallyhidden">Verified account</span></span></span>
            <span class="username"><s>@</s><b></b></span>
          </a>
        </li>
        <li class="js-selectable typeahead-accounts-shortcut js-shortcut"><a class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-shortcut="true" data-ds="account_search"></a></li>
      </ul>
    </div>  </div>
    </div></form>
          <i class="topbar-divider"></i>
                  <ul class="nav">
                    <li class="me dropdown session js-session" data-global-action="t1me" id="user-dropdown">
                    <a class="dropdown-toggle js-dropdown-toggle" href="#" id="user-dropdown-toggle">
                        <span class="new-wrapper"><i class="nav-session"><span class="visuallyhidden">Settings and help</span></i><i class="nav-new"></i></span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
              <li class="dropdown-caret">
                <span class="caret-outer"></span>
                <span class="caret-inner"></span>
              </li>
              
              <li class="current-user" data-name="profile">
                
    
    <a href="/settings/profile"
       class="account-summary account-summary-small"
       data-nav="edit_profile">
      <div class="content">
        <div class="account-group js-mini-current-user" data-user-id="107085561" data-screen-name="abhishanksahu">
          <img class="avatar size32" src="https://si0.twimg.com/sticky/default_profile_images/default_profile_2_normal.png" alt="abhishank sahu" data-user-id="107085561">
          <?php echo "<b class='fullname'> $_SESSION[username]</b>"?>
          <small class="metadata">
              Edit profile
              
          </small>
        </div>
      </div>
    </a>  </li>
            
              <li class="dropdown-divider"></li>
              
                <li class="messages" data-name="messages">
                  <a class="js-dm-dialog" href="/#!/" data-nav="messages">
                    <span class="js-direct-message-count count"></span>
                    Direct messages
                  </a>
                </li>
                <li data-name="lists"><a href="/abhishanksahu/lists" data-nav="all_lists">Lists</a></li>
                <li class="dropdown-divider"></li>
            
              
            
              
              <li><a href="//support.twitter.com" data-nav="help_center">Help</a></li>
            
                
                <li>
                  <a href="#" class="js-keyboard-shortcut-trigger" data-nav="shortcuts">
                    Keyboard shortcuts
                  </a>
                </li>
            
              
            
              
            
              
            
            
              
              <li class="dropdown-divider"></li>
            
              
                  <li><a href="/settings/account" data-nav="settings" class="js-nav">Settings</a></li>
            
            
              
              <li>
                <a class="js-signout-button" id="signout-button" href="#" data-nav="logout">Sign out</a>
                <form class="dropdown-link-form signout-form" id="signout-form" action="/logout" method="POST">
                  <input type="hidden" value="60e872a9d16ea5ccb116104f667dbc8cabcf5046" name="authenticity_token" class="authenticity_token">
                  <input type="hidden" name="reliability_event" class="js-reliability-event">
                  <input type="hidden" name="scribe_log">
                </form>
              </li>
            
            </ul>
            </li>
                  </ul>
                  <i class="topbar-divider"></i>
                  <div class="well topbar-tweet-btn">
                    <button id="global-new-tweet-button" type="button" class="btn btn-tweet js-global-new-tweet js-tooltip" data-placement="bottom" data-component-term="new_tweet_button" title="Compose new Tweet">
                      <i class="nav-tweet"><span class="visuallyhidden">Compose new Tweet</span></i>
                    </button>
                  </div>
                </div>
        
        
                
                <a id="close-all-button" class="close-all-tweets js-close-all-tweets" href="#" title="Close all open Tweets">
                  <i class="nav-breaker"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="page-outer">
          <div id="page-container" class="wrapper wrapper-settings white">
                          <div class="dashboard">
						  <div class="component">
    <div class="module profile-nav">
      <ul class="js-nav-links">
        <li class="">
        <?php
			$userid=$_GET['username'];
			$href_link="get_my_tweets.php?username="."$userid";
			$class_link="list-link js-nav";
			$data_nav="profile";
			$anchor="<a class=".$class_link." data-nav=".$data_nav." href=".$href_link.">";
			echo $anchor;
		?>
          <!--<a class="list-link js-nav" href="get_my_tweets.php" data-nav="profile">-->Tweets<i class="chev-right"></i></a>
        </li>
        <li class="">
        <?php
			$userid=$_GET['username'];
			$href_link="get_following.php?username="."$userid";
			$class_link="list-link js-nav";
			$data_nav="following";
			$anchor="<a class=".$class_link." data-nav=".$data_nav." href=".$href_link.">";
			echo $anchor;
		?>
          <!--<a class="list-link js-nav" href="/followin" data-nav="following">-->Following<i class="chev-right"></i></a>
        </li>
        <li class="active">
        <?php
			$userid=$_GET['username'];
			$href_link="get_followers.php?username="."$userid";
			$class_link="list-link js-nav";
			$data_nav="followers";
			$anchor="<a class=".$class_link." data-nav=".$data_nav." href=".$href_link.">";
			echo $anchor;
		?>
          <!--<a class="list-link js-nav" href="/followers" data-nav="followers">-->Followers<i class="chev-right"></i></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="module mini-profile">
  
    <div class="flex-module profile-summary js-profile-summary">
        
      
      <a href="/abhishanksahu"
         class="account-summary account-summary-small js-nav"
         data-nav="profile">
        <div class="content">
          <div class="account-group js-mini-current-user" data-user-id="107085561" data-screen-name="abhishank">
            <img class="avatar size32" src="https://si0.twimg.com/sticky/default_profile_images/default_profile_2_normal.png" alt="abhishank sahu" data-user-id="107085561">
            <?php echo $_SESSION['username']; ?>
            <small class="metadata">
                
                View my profile page
            </small>
          </div>
        </div>
      </a>  </div>
  
  </div>

  <div class="module">
    <ul class="js-nav-links">
      <li class="active"><a class="list-link js-nav" href="/settings/account" data-nav="account">Profile <i class="chev-right"></i></a></li>
      <li class=""><a class="list-link js-nav" href="/settings/password" data-nav="password">Password<i class="chev-right"></i></a></li>
	</ul>
  </div>

  <div class="module site-footer ">
    <div class="flex-module">
      <div class="flex-module-inner js-items-container">
        <ul class="clearfix">
          <li class="copyright">&copy; 2013 IIT-Tweets</li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="content-main">
  <div class="content-header">
    <div class="header-inner">
      <h2>Profile Details</h2>
    </div>
  </div>
  <div class="content-inner no-stream-end">
    <form id="account-form" class="form-horizontal requires-password" method="POST" action="post_profile_update.php">
      <div id="settings-alert-box" class="alert hidden">
        <i id="settings-alert-close" class="close"></i>
      </div>
      <input type="hidden" value="PUT" name="_method">
      <input type="hidden" name="authenticity_token" value="60e872a9d16ea5ccb116104f667dbc8cabcf5046">
	  <?php
		echo $_SESSION['username'];
		$result = mysql_query("SELECT * FROM PROFILE WHERE UNAME='$_GET[username]'");
		$row = mysql_fetch_array($result);
		echo "<fieldset id='username_fieldset' class='control-group'>".
        "<label for='user_screen_name' class='control-label'>First Name</label>".
        "<div class='controls'>".
          "<p id='username_notification' class='notification'></p>".
          "<p id='username_notification' class='notification'> $row[FNAME]</p>".
		
        "</div>".
      "</fieldset>";
	  $lname = $row['LNAME'];
	  echo "<fieldset id='username_fieldset' class='control-group'>".
        '<label for="user_screen_name" class="control-label">Last Name</label>'.
        '<div class="controls">'.
          '<p id="username_notification" class="notification"></p>'.
          "<p id='username_notification' class='notification'> $row[LNAME]</p>".

        '</div>'.
      "</fieldset>".
	  '<fieldset id="username_fieldset" class="control-group">'.
        '<label for="user_screen_name" class="control-label">Date of Birth</label>'.
        '<div class="controls">'.
          '<p id="username_notification" class="notification"></p>'.
          "<p id='username_notification' class='notification'> $row[DOB]</p>".

        '</div>'.
      '</fieldset>'.
	  


      '<fieldset id="email_fieldset" class="control-group">'.
        '<label for="user_email" class="control-label">Email</label>'.
        '<div class="controls">'.
          '<p id="email_notification" class="notification"></p>'.
          "<a href='mailto:"."$row[EMAIL]"."'>$row[EMAIL]</a>".
          '</div>'.
      '</fieldset>'.

      '<hr/>'.
       '<fieldset class="control-group">'.
        '<label for="user_lang" class="control-label">Department</label>'.
        '<div class="controls">';
				$result1 = mysql_query("SELECT * FROM DEPARTMENT WHERE DEPT_ID = '$row[DEPT_ID]'");
				$DEPT = 'DEPT_NAME';
				$dept_id = 'DEPT_ID';
                while ($row1 = mysql_fetch_array($result1)) {
					echo "<p id='username_notification' class='notification'> $row1[$DEPT]</p>";
				}
		 echo  
        '</div>'.
      '</fieldset>'.
	  
	  '<fieldset id="username_fieldset" class="control-group">'.
        '<label for="user_screen_name" class="control-label">Programme</label>'.
        '<div class="controls">'.
	    "<p id='username_notification' class='notification'> $row[PROGRAMME]</p>".
        '</div>'.
      '</fieldset>'.
	  
	  
	'<fieldset id="username_fieldset" class="control-group">'.
        '<label for="user_screen_name" class="control-label">Year</label>'.
        '<div class="controls">'.
	    "<p id='username_notification' class='notification'> $row[YEAR]rd</p>".	
        '</div>'.
	'</fieldset>'.
'<hr/>'.
'<fieldset id="username_fieldset" class="control-group">'.
        '<label for="user_screen_name" class="control-label">Mobile No</label>'.
        '<div class="controls">'.
          '<p id="username_notification" class="notification"></p>'.
          "<p id='username_notification' class='notification'> $row[MOBILE_NO]</p>".

        '</div>'.
'</fieldset>'.
'<fieldset id="username_fieldset" class="control-group">'.
        '<label for="user_screen_name" class="control-label">Sex</label>'.
        '<div class="controls">'.
	   "<p id='username_notification' class='notification'>".($row['SEX']=='M'?"MALE":"FEMALE")."</p>". 
        '</div>'.
'</fieldset>'.
'<fieldset class="control-group">'.
        '<label for="user_lang" class="control-label">Relationship Status: </label>'.
        '<div class="controls">'.
	    "<p id='username_notification' class='notification'> $row[RELATIONSHIP_STATUS]</p>".
      '</fieldset>'.
      '<hr />'.
      
      '<h3>Address</h3>'.
      '<fieldset id="username_fieldset" class="control-group">'.
        '<label for="user_screen_name" class="control-label">Room No:</label>'.
        '<div class="controls">'.
          '<p id="username_notification" class="notification"></p>';
	  $add = $row['ADD_ID'];
	  $result2 = mysql_query("SELECT ROOM_NO,HOSTEL FROM ADDRESS WHERE ADD_ID='$add'");
	  $row2 = mysql_fetch_array($result2);
	  echo "<p id='username_notification' class='notification'> $row2[ROOM_NO]</p>";
  echo '</div>'.
'</fieldset>'.
'<fieldset id="username_fieldset" class="control-group">'.
        '<label for="user_screen_name" class="control-label">Hostel</label>'.
        '<div class="controls">'.
          '<p id="username_notification" class="notification"></p>'.
          "<p id='username_notification' class='notification'> $row2[HOSTEL]</p>".

        '</div>'.
'</fieldset>'.
'<hr />'.
'<h3>About you</h3>'.
      '<fieldset id="username_fieldset" class="control-group">'.
        '<label for="user_screen_name" class="control-label">Bio:</label>'.
        '<div class="controls">'.
          "<p id='username_notification' class='notification'> $row[BIO]</p>".
        '</div>'.
'</fieldset>'.
'<fieldset id="username_fieldset" class="control-group">'.
        '<label for="user_screen_name" class="control-label">Website</label>'.
        '<div class="controls">'.
          '<p id="username_notification" class="notification"></p>'.
          "<a id='username_notification' class='notification' href=http://"."$row[WEBSITE]"."> $row[WEBSITE]</p>".
        '</div>'.
'</fieldset>'.
   '<hr />';
   ?>
    </form>
  </div>
</div>

          </div>
        </div>
          </div>
      
	  
	  
	  
	  
	  
	  
	  <!-- Till here our code --->
<!--	  
	  <div class="alert-messages hidden" id="message-drawer">
          <div class="message ">
      <div class="message-inside">
        <span class="message-text"></span><a class="dismiss" href="#">&times;</a>
      </div>
    </div></div>
    <div class="grid">
  <div class="grid-overlay"></div>
  <div class="grid-container">
    <div class="swift-media-grid">
      <div class="grid-header-content">
        <div class="header-pic"><img class="avatar"/></div>
        <h2><a class="header-title js-nav"></a></h2>
        <h3><a class="header-subtitle js-nav"></a></h3>
      </div>
      <div class="grid-media ratio">
        <div class="grid-footer">
          <i class="bird-etched"></i>
        </div>
        <div class="grid-loading">
          <span class="spinner" title="Loading..."></span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="gallery-overlay"></div>
<div class="gallery-container">
  <div class="gallery-close-target"></div>
  <div class="swift-media-gallery">
    <div class="modal-header">
      <a class="dismiss close-action" href="#"><i class="close-medium"></i></a>
      <a class="gridview grid-action" href="#"><i class="grid-icon"></i></a>
      <h2 class="modal-title"></h2>
    </div>
    <div class="gallery-media"></div>
    <div class="gallery-nav nav-prev">
      <span class="nav-prev-handle"></span>
    </div>
    <div class="gallery-nav nav-next">
      <span class="nav-next-handle"></span>
    </div>
    <div class="tweet-inverted gallery-tweet"></div>
  </div>
</div>

    
    
    <div class="modal-overlay"></div>
    
    
      <div id="dm_dialog" class="modal-container dm-conversation-list">
    <div class="close-modal-background-target"></div>
    <div class="modal draggable twttr-dialog dm-dialog">
      <div id="dm_dialog_conversation_list" class="modal-content">
      
      <div class="twttr-dialog-header modal-header">
        <h3>Direct messages</h3>
        <a class="btn dm-new-button dm-header-new" href="#">New message</a>
        <div class="twttr-dialog-close"><b>&times;</b></div>
      </div>
    
      
      <div class="twttr-dialog-inside">
        <div class="twttr-dialog-body clearfix">
          <div class="dm-error js-dm-error">
        <a href="#" class="js-dismiss">
          <i class="close"></i>
        </a>
        <span class="dm-error-text"></span>
      </div>      <div class="twttr-dialog-content">
            <div class="dm-threads js-dm-threads js-modal-scrollable js-twttr-dialog-not-draggable">
              <ul class="dm-thread-list js-dm-thread-list">
                <div class="dm-placeholder-empty dm-no-messages">
              <p><strong>You don't have any messages yet.</strong></p>
              <p>Direct messages are 140 characters, private, and can be sent to any user who follows you on Twitter.</p>
            </div>          </ul>
            </div>
          </div>
    
          <div class="twttr-dialog-footer">
        Tip: you can send a message to anyone who follows you. <a href="http://support.twitter.com/groups/31-twitter-basics/topics/109-tweets-messages/articles/14606-what-is-a-direct-message-dm" target="_blank" class="learn-more">Learn more</a>
      </div>
        </div>
      </div>
    </div>    <div id="dm_dialog_conversation" class="modal-content">
      
      <div class="twttr-dialog-header modal-header">
        <h3><a class="js-dm-header-title" href="#">Direct messages</a> › with <span class="dm_dialog_real_name"></span></h3>
        <div class="twttr-dialog-close"><b>&times;</b></div>
      </div>
    
      
      <div class="twttr-dialog-inside">
        <div class="twttr-dialog-body clearfix">
            <div class="dm-error js-dm-error">
          <a href="#" class="js-dismiss">
            <i class="close"></i>
          </a>
          <span class="dm-error-text"></span>
        </div>      <div class="twttr-dialog-content">
          </div>
            <form class="dm-tweetbox tweet-form">
          <div class="tweet-content">
            <label class="visuallyhidden" for="tweet-box-dm-conversation">Tweet text</label>
              <div id="tweet-box-dm-conversation" class="tweet-box rich-editor" contenteditable="true" spellcheck="true" role="textbox" aria-multiline="true"></div>
              <div class="rich-normalizer"></div>
          </div>
          <div class="tweet-button">
            <span class="spinner"></span>
            <span class="tweet-counter">140</span>
            <button class="btn tweet-action primary-btn disabled" type="submit">Send message</button>
          </div>
          <div class="dm-delete-confirm js-dm-delete-confirm">
            <p>Are you sure you want to delete this message?</p>
    <button type="button" class="btn js-prompt-cancel">Cancel</button>
    <button type="button" class="btn caution-btn js-prompt-ok" data-message-id="">Delete message</button>
  </div>
        </form>    </div>
    
        <div class="twttr-dialog-footer">
      Tip: you can send a message to anyone who follows you. <a href="http://support.twitter.com/groups/31-twitter-basics/topics/109-tweets-messages/articles/14606-what-is-a-direct-message-dm" target="_blank" class="learn-more">Learn more</a>
    </div>
      </div>
    </div>    <div id="dm_dialog_new" class="modal-content">
      
      <div class="twttr-dialog-header modal-header">
        <h3><a href="#">Direct messages</a> › New</h3>
        <div class="twttr-dialog-close"><b>&rsaquo;</b></div>
      </div>
    
      
      <div class="twttr-dialog-inside">
        <div class="twttr-dialog-body clearfix">
          <div class="dm-dialog-content">
    
            <div class="dm-to">
              <input class="dm-to-input twttr-directmessage-input" type="text">
              <img class="avatar size24 selected-profile" src="https://si0.twimg.com/sticky/default_profile_images/default_profile_6_mini.png" data-default-img="https://si0.twimg.com/sticky/default_profile_images/default_profile_6_mini.png">
                <div class="dropdown-menu typeahead">
              <div class="dropdown-caret">
                <div class="caret-outer"></div>
                <div class="caret-inner"></div>
              </div>
              <div class="dropdown-inner js-typeahead-results">
                <ul class="typeahead-items saved-searches-list">
      
      <li class="saved-search-item search-item"><a class="js-nav" href="" data-search-query="" data-query-source="" data-ds="saved_search" tabindex="-1"><i class="generic-search"></i></a></li>
    </ul>    <ul class="typeahead-items topics-list">
      
      <li class="topics-item search-item"><a class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-ds="topics" tabindex="-1"><i class="generic-search"></i></a></li>
    </ul>    <div class="typeahead-accounts js-typeahead-accounts">
      <ul class="typeahead-items">
        
        <li data-user-id="" data-user-screenname="" data-remote="true" data-score="" class="typeahead-item typeahead-account-item js-selectable">
          
          <a class="js-nav" data-query-source="typeahead_click" data-search-query="" data-ds="account">
            <img width="24" height="24" class="avatar size24">
            <span class="fullname"></span>
            <span class="js-verified hidden"><span class="icon verified"><span class="visuallyhidden">Verified account</span></span></span>
            <span class="username"><s>@</s><b></b></span>
          </a>
        </li>
        <li class="js-selectable typeahead-accounts-shortcut js-shortcut"><a class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-shortcut="true" data-ds="account_search"></a></li>
      </ul>
    </div>  </div>
            </div>        </div>
    
            <div class="dm-convo-placeholder">
              <div class="dm-error js-dm-error">
            <a href="#" class="js-dismiss">
              <i class="close"></i>
            </a>
            <span class="dm-error-text"></span>
          </div>        </div>
    
          </div>
    
            <form class="dm-tweetbox tweet-form">
          <div class="tweet-content">
            <label class="visuallyhidden" for="tweet-box-dm-new-conversation">Tweet text</label>
              <div id="tweet-box-dm-new-conversation" class="tweet-box rich-editor" contenteditable="true" spellcheck="true" role="textbox" aria-multiline="true"></div>
              <div class="rich-normalizer"></div>
          </div>
          <div class="tweet-button">
            <span class="spinner"></span>
            <span class="tweet-counter">140</span>
            <button class="btn tweet-action primary-btn disabled" type="submit">Send message</button>
          </div>
          <div class="dm-delete-confirm js-dm-delete-confirm">
            <p>Are you sure you want to delete this message?</p>
    <button type="button" class="btn js-prompt-cancel">Cancel</button>
    <button type="button" class="btn caution-btn js-prompt-ok" data-message-id="">Delete message</button>
  </div>
        </form>
          <div class="twttr-dialog-footer">
        Tip: you can send a message to anyone who follows you. <a href="http://support.twitter.com/groups/31-twitter-basics/topics/109-tweets-messages/articles/14606-what-is-a-direct-message-dm" target="_blank" class="learn-more">Learn more</a>
      </div>
        </div>
      </div>
    </div>  </div>
  </div>
      <div id="global-tweet-dialog" class="modal-container">
    <div class="close-modal-background-target"></div>
    <div class="modal draggable">
      <div class="modal-content">
        <button type="button" class="modal-btn modal-close js-close"><i class="close-medium"><span class="visuallyhidden">Close</span></i></button>
        <div class="modal-header">
          <h3 class="modal-title"></h3>
        </div>
  
        <div class="modal-body">
            <form class="tweet-form "
                method="post"
                target="tweet-post-iframe"
                action="//upload.twitter.com/i/tweet/create_with_media.iframe"
                enctype="multipart/form-data">
            <input type="hidden" name="post_authenticity_token" class="auth-token">
            <input type="hidden" name="iframe_callback" class="iframe-callback">
            <input type="hidden" name="in_reply_to_status_id" class="in-reply-to-status-id">
            <input type="hidden" name="impression_id" class="impression-id">
            <input type="hidden" name="earned" class="earned">
          
            <div class="tweet-content">
          
              <label class="visuallyhidden" for="tweet-box-global">Tweet text</label>
          
                
                <div id="tweet-box-global" class="tweet-box rich-editor" contenteditable="true" spellcheck="true" role="textbox"
                  aria-multiline="true"></div>
                <div class="rich-normalizer"></div>
          
                <div class="dropdown-menu typeahead">
        <div class="dropdown-caret">
          <div class="caret-outer"></div>
          <div class="caret-inner"></div>
        </div>
        <div class="dropdown-inner js-typeahead-results">
          <ul class="typeahead-items saved-searches-list">
      
      <li class="saved-search-item search-item"><a class="js-nav" href="" data-search-query="" data-query-source="" data-ds="saved_search" tabindex="-1"><i class="generic-search"></i></a></li>
    </ul>    <ul class="typeahead-items topics-list">
      
      <li class="topics-item search-item"><a class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-ds="topics" tabindex="-1"><i class="generic-search"></i></a></li>
    </ul>    <div class="typeahead-accounts js-typeahead-accounts">
      <ul class="typeahead-items">
        
        <li data-user-id="" data-user-screenname="" data-remote="true" data-score="" class="typeahead-item typeahead-account-item js-selectable">
          
          <a class="js-nav" data-query-source="typeahead_click" data-search-query="" data-ds="account">
            <img width="24" height="24" class="avatar size24">
            <span class="fullname"></span>
            <span class="js-verified hidden"><span class="icon verified"><span class="visuallyhidden">Verified account</span></span></span>
            <span class="username"><s>@</s><b></b></span>
          </a>
        </li>
        <li class="js-selectable typeahead-accounts-shortcut js-shortcut"><a class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-shortcut="true" data-ds="account_search"></a></li>
      </ul>
    </div>  </div>
      </div>
              
              <textarea class="tweet-box-shadow" name="status"></textarea>
          
              
              <div class="thumbnail-container">
                <div class="preview">
                  <a class="dismiss js-dismiss" href="#" tabindex="-1"><i class="dismiss-white"></i></a>
        <span class="filename"></span>
                </div>
                <div class="preview-message">Image will appear as a link</div>
              </div>
          
            </div>
          
            <div class="toolbar js-toolbar">
              <div class="tweet-box-extras">
          
                <div class="photo-selector">
                  <button aria-hidden="true" class="btn" type="button" tabindex="-1">
                    <i class="tweet-camera"></i>
                  </button>
                  <div class="image-selector">
                    <input type="hidden" name="media_data_empty" class="file-data">
                    <label>
                      <span class="visuallyhidden">Add Photo</span>
                      <input type="file" name="media_empty" class="file-input" tabindex="-1">
                    </label>
                    <div class="swf-container"></div>
                  </div>
                </div>
          
                  <div class="geo-picker">
          <button class="btn geo-picker-btn" type="button" tabindex="-1">
            <i class="tweet-geo"><span class="visuallyhidden">Add location</span></i> <span class="caret"></span>
          </button>
          <span class="dropdown-container"></span>
          <span class="geo-status"></span>
          <input type="hidden" name="place_id">
        </div>

              </div>
              <div class="tweet-button">
                <span class="spinner"></span>
                <span class="tweet-counter">140</span>
                <button class="btn primary-btn tweet-action disabled" type="button">Tweet</button>
              </div>
            </div>
          </form>
      </div>
  
        <div class="modal-footer modal-tweet"></div>
      </div>
    </div>
  </div>

    
    <div id="goto-user-dialog" class="modal-container">
  <div class="modal modal-small draggable">
    <div class="modal-content">
      <button type="button" class="modal-btn modal-close js-close"><i class="close-medium"><span class="visuallyhidden">Close</span></i></button>
      <div class="modal-header">
        <h3 class="modal-title">Go to a person's profile</h3>
      </div>

      <div class="modal-body">
        <div class="modal-inner">
          <form class="goto-user-form">
            <input class="input-block username-input" type="text" placeholder="Start typing a name to jump to a profile">
              <div class="dropdown-menu typeahead">
                <div class="dropdown-caret">
                  <div class="caret-outer"></div>
                  <div class="caret-inner"></div>
                </div>
                <div class="dropdown-inner js-typeahead-results">
                  <ul class="typeahead-items saved-searches-list">
      
      <li class="saved-search-item search-item"><a class="js-nav" href="" data-search-query="" data-query-source="" data-ds="saved_search" tabindex="-1"><i class="generic-search"></i></a></li>
    </ul>    <ul class="typeahead-items topics-list">
      
      <li class="topics-item search-item"><a class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-ds="topics" tabindex="-1"><i class="generic-search"></i></a></li>
    </ul>    <div class="typeahead-accounts js-typeahead-accounts">
      <ul class="typeahead-items">
        
        <li data-user-id="" data-user-screenname="" data-remote="true" data-score="" class="typeahead-item typeahead-account-item js-selectable">
          
          <a class="js-nav" data-query-source="typeahead_click" data-search-query="" data-ds="account">
            <img width="24" height="24" class="avatar size24">
            <span class="fullname"></span>
            <span class="js-verified hidden"><span class="icon verified"><span class="visuallyhidden">Verified account</span></span></span>
            <span class="username"><s>@</s><b></b></span>
          </a>
        </li>
        <li class="js-selectable typeahead-accounts-shortcut js-shortcut"><a class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-shortcut="true" data-ds="account_search"></a></li>
      </ul>
    </div>  </div>
              </div>          </form>
        </div>
      </div>

    </div>
  </div>
</div>

      <div id="retweet-tweet-dialog" class="modal-container">
    <div class="close-modal-background-target"></div>
    <div class="modal draggable">
      <div class="modal-content">
        <button type="button" class="modal-btn modal-close js-close"><i class="close-medium"><span class="visuallyhidden">Close</span></i></button>
        <div class="modal-header">
          <h3 class="modal-title">Retweet this to your followers?</h3>
        </div>
  
        <div class="modal-body modal-tweet"></div>
  
        <div class="modal-footer">
          <button class="btn cancel-action">Cancel</button>
          <button class="btn primary-btn retweet-action">Retweet</button>
        </div>
      </div>
    </div>
  </div>
  <div id="delete-tweet-dialog" class="modal-container">
    <div class="close-modal-background-target"></div>
    <div class="modal draggable">
      <div class="modal-content">
        <button type="button" class="modal-btn modal-close js-close"><i class="close-medium"><span class="visuallyhidden">Close</span></i></button>
        <div class="modal-header">
          <h3 class="modal-title">Are you sure you want to delete this Tweet?</h3>
        </div>
  
        <div class="modal-body modal-tweet"></div>
  
        <div class="modal-footer">
          <button class="btn cancel-action">Cancel</button>
          <button class="btn primary-btn delete-action">Delete</button>
        </div>
      </div>
    </div>
  </div>

    
<div id="keyboard-shortcut-dialog" class="modal-container">
  <div class="close-modal-background-target"></div>
  <div class="modal modal-large draggable">
    <div class="modal-content">
      <button type="button" class="modal-btn modal-close js-close"><i class="close-medium"><span class="visuallyhidden">Close</span></i></button>
      
      <div class="modal-header">
        <h3 class="modal-title">Keyboard shortcuts</h3>
      </div>

      
      <div class="modal-body">

        <div class="keyboard-shortcuts clearfix" id="keyboard-shortcut-menu">

          <table class="modal-table">
            <thead>
              <tr>
                <th colspan="2">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">N</b>
                </td>
                <td class="shortcut-label">New Tweet</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">F</b>
                </td>
                <td class="shortcut-label">Favorite</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">R</b>
                </td>
                <td class="shortcut-label">Reply</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">T</b>
                </td>
                <td class="shortcut-label">Retweet</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">M</b>
                </td>
                <td class="shortcut-label">Direct message</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">B</b>
                </td>
                <td class="shortcut-label">Block User</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">U</b>
                </td>
                <td class="shortcut-label">Unblock User</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">Enter</b>
                </td>
                <td class="shortcut-label">Open Tweet details</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">L</b>
                </td>
                <td class="shortcut-label">Close all open Tweets</td>
              </tr>
            </tbody>
          </table>
          <table class="modal-table">
            <thead>
              <tr>
                <th colspan="2">Navigation</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">?</b>
                </td>
                <td class="shortcut-label">This menu</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">J</b>
                </td>
                <td class="shortcut-label">Next Tweet</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">K</b>
                </td>
                <td class="shortcut-label">Previous Tweet</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">Space</b>
                </td>
                <td class="shortcut-label">Page down</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">/</b>
                </td>
                <td class="shortcut-label">Search</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">.</b>
                </td>
                <td class="shortcut-label">Load new Tweets</td>
              </tr>
            </tbody>
          </table>
          <table class="modal-table">
            <thead>
              <tr>
                <th colspan="2">Timelines</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">G</b> <b class="sc-key">H</b>
                </td>
                <td class="shortcut-label">Home</td>
              </tr>

                <tr>
                  <td class="shortcut">
                    <b class="sc-key">G</b> <b class="sc-key">C</b>
                  </td>
                  <td class="shortcut-label">Connect</td>
                </tr>
                <tr>
                  <td class="shortcut">
                    <b class="sc-key">G</b> <b class="sc-key">A</b>
                  </td>
                  <td class="shortcut-label">Activity</td>
                </tr>
                <tr>
                  <td class="shortcut">
                    <b class="sc-key">G</b> <b class="sc-key">R</b>
                  </td>
                  <td class="shortcut-label">Mentions</td>
                </tr>

              <tr>
                <td class="shortcut">
                  <b class="sc-key">G</b> <b class="sc-key">D</b>
                </td>
                <td class="shortcut-label">Discover</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">G</b> <b class="sc-key">P</b>
                </td>
                <td class="shortcut-label">Profile</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">G</b> <b class="sc-key">F</b>
                </td>
                <td class="shortcut-label">Favorites</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">G</b> <b class="sc-key">L</b>
                </td>
                <td class="shortcut-label">Lists</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">G</b> <b class="sc-key">M</b>
                </td>
                <td class="shortcut-label">Messages</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">G</b> <b class="sc-key">S</b>
                </td>
                <td class="shortcut-label">Settings</td>
              </tr>
              <tr>
                <td class="shortcut">
                  <b class="sc-key">G</b> <b class="sc-key">U</b>
                </td>
                <td class="shortcut-label">Go to user...</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



    <div id="block-user-dialog" class="modal-container">
  <div class="close-modal-background-target"></div>
  <div class="modal draggable">
    <div class="modal-content">
      <button type="button" class="modal-btn modal-close js-close"><i class="close-medium"><span class="visuallyhidden">Close</span></i></button>
      <div class="modal-header">
        <h3 class="modal-title">Are you sure you want to block this user?</h3>
      </div>

      <div class="modal-body modal-tweet"></div>

      <div class="modal-footer">
        <button class="btn cancel-action">Cancel</button>
        <button class="btn primary-btn block-action">Block</button>
      </div>
    </div>
  </div>
</div>

    
      
      
    
        <div id="geo-disabled-dropdown">
          <ul class="dropdown-menu" tabindex="-1">
        <li class="dropdown-caret">
          <span class="caret-outer"></span>
          <span class="caret-inner"></span>
        </li>
        <li class="geo-not-enabled-yet">
          <h2>Add a location to your Tweets</h2>
          <p>
            When you tweet with a location, Twitter stores that location.&#32;
            You can switch location on/off before each Tweet and always have the option to delete your location history.
            <a href="http://support.twitter.com/forums/26810/entries/78525" target="_blank">Learn more</a>
          </p>
          <div>
            <button type="button" class="geo-turn-on btn primary-btn">Turn location on</button>
            <button type="button" class="geo-not-now btn-link">Not now</button>
          </div>
        </li>
      </ul>
    </div>
    
      <div id="geo-enabled-dropdown">
        <ul class="dropdown-menu" tabindex="-1">
      <li class="dropdown-caret">
        <span class="caret-outer"></span>
        <span class="caret-inner"></span>
      </li>
      <li class="geo-query-location">
        <input type="text" autocomplete="off" placeholder="Search for a neighborhood or city">
        <i class="generic-search"></i>
      </li>
      <li class="geo-dropdown-status"></li>
      <li class="dropdown-link geo-turn-off-item geo-focusable">
        <i class="close"></i>Turn off location
      </li>
    </ul>
  </div>
    
    
      <div id="profile_popup" class="modal-container">
    <div class="close-modal-background-target"></div>
    <div class="modal modal-small draggable">
      <div class="modal-content clearfix">
        <button type="button" class="modal-btn modal-close js-close"><i class="close-medium"><span class="visuallyhidden">Close</span></i></button>      <div class="modal-header">
          <h3 class="modal-title">Profile summary</h3>
        </div>
  
        <div class="modal-body profile-modal">
  
        </div>
  
        <div class="loading">
          <span class="spinner-bigger"></span>
        </div>
      </div>
    </div>
  </div>  <div id="list-membership-dialog" class="modal-container">
    <div class="close-modal-background-target"></div>
    <div class="modal modal-small draggable">
      <div class="modal-content">
        <button type="button" class="modal-btn modal-close js-close"><i class="close-medium"><span class="visuallyhidden">Close</span></i></button>      <div class="modal-header">
          <h3 class="modal-title">Your lists</h3>
        </div>
        <div class="modal-body">
          <div class="list-membership-content"></div>
          <span class="spinner lists-spinner" title="Loading&hellip;"></span>
        </div>
      </div>
    </div>
  </div>  <div id="list-operations-dialog" class="modal-container">
    <div class="close-modal-background-target"></div>
    <div class="modal modal-medium draggable">
      <div class="modal-content">
        <button type="button" class="modal-btn modal-close js-close"><i class="close-medium"><span class="visuallyhidden">Close</span></i></button>      <div class="modal-header">
          <h3 class="modal-title">Create a new list</h3>
        </div>
        <div class="modal-body">
          
        <div class="list-editor">
          <div class="field">
            <label for="list-name">List name</label>
            <input type="text" class="text" name="name" value="" />
          </div>
          <div class="field" style="display:none">
            <label for="list-link">List link</label>
            <span></span>
          </div>
          <hr/>
        
          <div class="field">
            <label for="description">Description</label>
            <textarea name="description"></textarea>
            <span class="help-text">Under 100 characters, optional</span>
          </div>
          <hr/>
        
          <div class="field">
            <label for="mode">Privacy</label>
            <div class="options">
              <label for="list-public-radio">
                <input class="radio" type="radio" name="mode" id="list-public-radio" value="public" checked="checked"  />
                <b>Public</b> &middot; Anyone can follow this list
              </label>
              <label for="list-private-radio">
                <input class="radio" type="radio" name="mode" id="list-private-radio" value="private"  />
                <b>Private</b> &middot; Only you can access this list
              </label>
            </div>
          </div>
          <hr/>
        
          <div class="list-editor-save">
            <button type="button" class="btn btn-primary update-list-button" data-list-id="">Save list</button>
          </div>
        
        </div>      </div>
      </div>
    </div>
  </div>
      <div id="activity-popup-dialog" class="modal-container">
    <div class="close-modal-background-target"></div>
    <div class="modal draggable">
      <div class="modal-content clearfix">
        <button type="button" class="modal-btn modal-close js-close"><i class="close-medium"><span class="visuallyhidden">Close</span></i></button>
        <div class="modal-header">
          <h3 class="modal-title"></h3>
        </div>
  
        <div class="modal-body">
          <div class="activity-tweet clearfix"></div>
          <div class="loading">
            <span class="spinner-bigger"></span>
          </div>
          <div class="activity-content clearfix"></div>
        </div>
      </div>
    </div>
  </div>

    <div id="confirm_dialog" class="modal-container">
  <div class="close-modal-background-target"></div>
  <div class="modal draggable">
    <div class="modal-content">
      <button type="button" class="modal-btn modal-close js-close"><i class="close-medium"><span class="visuallyhidden">Close</span></i></button>      <div class="modal-header">
        <h3 class="modal-title"></h3>
      </div>
      <div class="modal-body">
        <p class="modal-body-text"></p>
      </div>
      <div class="modal-footer">
        <button class="btn" id="confirm_dialog_cancel_button"></button>
        <button id="confirm_dialog_submit_button" class="btn primary-btn modal-submit"></button>
      </div>
    </div>
  </div>
</div>

    
    
      <div id="embed-tweet-dialog-v2" class="modal-container">
    <div class="close-modal-background-target"></div>
    <div class="modal modal-medium draggable">
      <div class="modal-content">
        <button type="button" class="modal-btn modal-close js-close"><i class="close-medium"><span class="visuallyhidden">Close</span></i></button>      <div class="modal-header">
          <h3 class="modal-title">Embed this Tweet</h3>
        </div>
        <div class="modal-body">
            <div class="embed-code-container">
            <p>Add this Tweet to your website by copying the code below. <a href="//dev.twitter.com/docs/embedded-tweets">Learn more</a></p>
            <form>
          
              <div class="embed-destination-wrapper">
                <div class="embed-overlay embed-overlay-spinner"><div class="embed-overlay-content"></div></div>
                <div class="embed-overlay embed-overlay-error">
                  <p class="embed-overlay-content">Hmm, there was a problem reaching the server. <a href="javascript:;">Try again?</a></p>
                </div>
                <textarea class="embed-destination"></textarea>
                <div class="embed-options">
                  <div class="embed-include-parent-tweet">
                    <label for="include-parent-tweet">
                      <input type="checkbox" id="include-parent-tweet" class="include-parent-tweet" checked>
                      Include parent Tweet
                    </label>
                  </div>
                  <div class="embed-include-card">
                    <label for="include-card">
                      <input type="checkbox" id="include-card" class="include-card" checked>
                      Include media
                    </label>
                  </div>
                </div>
              </div>
            </form>
            <div class="embed-preview">
              <h3>Preview</h3>
            </div>
          </div>
      </div>
      </div>
    </div>
  </div>

        <div class="hidden">
      <iframe class="tweet-post-iframe" name="tweet-post-iframe"></iframe>
    
      
      <div id="inline-reply-tweetbox">
          <form class="tweet-form "
            method="post"
            target="tweet-post-iframe"
            action="//upload.twitter.com/i/tweet/create_with_media.iframe"
            enctype="multipart/form-data">
        <input type="hidden" name="post_authenticity_token" class="auth-token">
        <input type="hidden" name="iframe_callback" class="iframe-callback">
        <input type="hidden" name="in_reply_to_status_id" class="in-reply-to-status-id">
        <input type="hidden" name="impression_id" class="impression-id">
        <input type="hidden" name="earned" class="earned">
      
        <div class="tweet-content">
      
          <label class="visuallyhidden" for="tweet-box-template">Tweet text</label>
      
            
            <div id="tweet-box-template" class="tweet-box rich-editor" contenteditable="true" spellcheck="true" role="textbox"
              aria-multiline="true"></div>
            <div class="rich-normalizer"></div>
      
            <div class="dropdown-menu typeahead">
        <div class="dropdown-caret">
          <div class="caret-outer"></div>
          <div class="caret-inner"></div>
        </div>
        <div class="dropdown-inner js-typeahead-results">
          <ul class="typeahead-items saved-searches-list">
      
      <li class="saved-search-item search-item"><a class="js-nav" href="" data-search-query="" data-query-source="" data-ds="saved_search" tabindex="-1"><i class="generic-search"></i></a></li>
    </ul>    <ul class="typeahead-items topics-list">
      
      <li class="topics-item search-item"><a class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-ds="topics" tabindex="-1"><i class="generic-search"></i></a></li>
    </ul>    <div class="typeahead-accounts js-typeahead-accounts">
      <ul class="typeahead-items">
        
        <li data-user-id="" data-user-screenname="" data-remote="true" data-score="" class="typeahead-item typeahead-account-item js-selectable">
          
          <a class="js-nav" data-query-source="typeahead_click" data-search-query="" data-ds="account">
            <img width="24" height="24" class="avatar size24">
            <span class="fullname"></span>
            <span class="js-verified hidden"><span class="icon verified"><span class="visuallyhidden">Verified account</span></span></span>
            <span class="username"><s>@</s><b></b></span>
          </a>
        </li>
        <li class="js-selectable typeahead-accounts-shortcut js-shortcut"><a class="js-nav" href="" data-search-query="" data-query-source="typeahead_click" data-shortcut="true" data-ds="account_search"></a></li>
      </ul>
    </div>  </div>
      </div>
          
          <textarea class="tweet-box-shadow" name="status"></textarea>
      
          
          <div class="thumbnail-container">
            <div class="preview">
              <a class="dismiss js-dismiss" href="#" tabindex="-1"><i class="dismiss-white"></i></a>
        <span class="filename"></span>
            </div>
            <div class="preview-message">Image will appear as a link</div>
          </div>
      
        </div>
      
        <div class="toolbar js-toolbar">
          <div class="tweet-box-extras">
      
            <div class="photo-selector">
              <button aria-hidden="true" class="btn" type="button" tabindex="-1">
                <i class="tweet-camera"></i>
              </button>
              <div class="image-selector">
                <input type="hidden" name="media_data_empty" class="file-data">
                <label>
                  <span class="visuallyhidden">Add Photo</span>
                  <input type="file" name="media_empty" class="file-input" tabindex="-1">
                </label>
                <div class="swf-container"></div>
              </div>
            </div>
      
              <div class="geo-picker">
          <button class="btn geo-picker-btn" type="button" tabindex="-1">
            <i class="tweet-geo"><span class="visuallyhidden">Add location</span></i> <span class="caret"></span>
          </button>
          <span class="dropdown-container"></span>
          <span class="geo-status"></span>
          <input type="hidden" name="place_id">
        </div>

          </div>
          <div class="tweet-button">
            <span class="spinner"></span>
            <span class="tweet-counter">140</span>
            <button class="btn primary-btn tweet-action disabled" type="button">Tweet</button>
          </div>
        </div>
      </form>
  </div>-->
    </div>  </body>
</html>
  <input type="hidden" id="init-data" class="json-data" value="{&quot;pushState&quot;:true,&quot;scribeBufferSize&quot;:3,&quot;internalReferer&quot;:null,&quot;searchPathWithQuery&quot;:&quot;\/search?q=query&amp;src=typd&quot;,&quot;pushStatePageLimit&quot;:500000,&quot;latest_incoming_direct_message_id&quot;:null,&quot;typeaheadData&quot;:{&quot;remoteDebounceInterval&quot;:300,&quot;dmAccounts&quot;:{&quot;localQueriesEnabled&quot;:true,&quot;remoteQueriesEnabled&quot;:true,&quot;enabled&quot;:true,&quot;onlyDMable&quot;:true},&quot;remoteThrottleInterval&quot;:300,&quot;savedSearches&quot;:{&quot;items&quot;:[],&quot;enabled&quot;:true},&quot;showDebugInfo&quot;:false,&quot;accounts&quot;:{&quot;localQueriesEnabled&quot;:true,&quot;remoteQueriesEnabled&quot;:true,&quot;enabled&quot;:true},&quot;useThrottle&quot;:true,&quot;topics&quot;:{&quot;localQueriesEnabled&quot;:true,&quot;prefetchLimit&quot;:500,&quot;remoteQueriesEnabled&quot;:true,&quot;enabled&quot;:true}},&quot;sandboxes&quot;:{&quot;detailsPane&quot;:&quot;https:\/\/abs.twimg.com\/a\/1363856703\/details_pane_content_sandbox.html&quot;,&quot;jsonp&quot;:&quot;https:\/\/abs.twimg.com\/a\/1363856703\/jsonp_sandbox.html&quot;},&quot;scribeMetrics&quot;:0,&quot;hasPushDevice&quot;:false,&quot;assetsBasePath&quot;:&quot;https:\/\/abs.twimg.com\/a\/1363856703\/&quot;,&quot;dragAndDropPhotoUpload&quot;:false,&quot;loggedIn&quot;:true,&quot;autocompleteUseTypeahead&quot;:true,&quot;mediaGrid&quot;:true,&quot;geoEnabled&quot;:false,&quot;deviceEnabled&quot;:false,&quot;userId&quot;:&quot;107085561&quot;,&quot;href&quot;:&quot;\/settings\/account&quot;,&quot;sectionName&quot;:&quot;account&quot;,&quot;screenName&quot;:&quot;abhishanksahu&quot;,&quot;asyncSocialProof&quot;:true,&quot;autocompleteUseLocalTypeahead&quot;:true,&quot;timelineCardsGallery&quot;:true,&quot;experiments&quot;:{},&quot;routes&quot;:{&quot;profile&quot;:&quot;\/abhishanksahu&quot;},&quot;smsDeviceVerified&quot;:false,&quot;pageName&quot;:&quot;settings&quot;,&quot;enable_instagram&quot;:false,&quot;viewContainer&quot;:&quot;#page-container&quot;,&quot;userVerified&quot;:false,&quot;environment&quot;:&quot;production&quot;,&quot;useTypeaheadEverywhere&quot;:true,&quot;permalinkCardsGallery&quot;:false,&quot;scribeParameters&quot;:{&quot;lang&quot;:&quot;en&quot;},&quot;initialState&quot;:{&quot;ttft_navigation&quot;:false,&quot;page_container_class_names&quot;:&quot;wrapper wrapper-settings white&quot;,&quot;module&quot;:&quot;app\/pages\/settings\/account&quot;,&quot;body_class_names&quot;:&quot;t1 logged-in user-style-abhishanksahu ms-windows tweet-display-linebreaks&quot;,&quot;section&quot;:null,&quot;cache_ttl&quot;:0,&quot;doc_class_names&quot;:null,&quot;title&quot;:&quot;Twitter \/ Settings&quot;},&quot;researchExperiments&quot;:{},&quot;deciders&quot;:{&quot;compose_9_reply_logic&quot;:false},&quot;formAuthenticityToken&quot;:&quot;60e872a9d16ea5ccb116104f667dbc8cabcf5046&quot;}">
    <input type="hidden" class="loadrunner-alias json-data" value="{&quot;$bundle\/html2canvas.82a64ea2711e964e829140881de78438319774a0.js&quot;:[&quot;$lib\/html2canvas.js&quot;],&quot;$bundle\/mobile_gallery.db430b6898f0144b313838368d3e6edcee89eb6f.js&quot;:[&quot;app\/ui\/dialogs\/mobile_gallery_download_dialog&quot;,&quot;app\/ui\/mobile_gallery\/gallery_buttons&quot;,&quot;app\/ui\/forms\/mobile_gallery_email_form&quot;,&quot;app\/data\/mobile_gallery\/send_download_link&quot;,&quot;app\/pages\/mobile_gallery\/gallery&quot;,&quot;app\/pages\/mobile_gallery\/apps&quot;,&quot;app\/ui\/mobile_gallery\/firefox_tweet_button&quot;,&quot;app\/pages\/mobile_gallery\/firefox&quot;,&quot;app\/data\/mobile_gallery\/download_links_scribe&quot;,&quot;app\/pages\/mobile_gallery\/splash&quot;],&quot;$bundle\/boomerang.20c3ddac1d60a7cd6aae2d0f2583d8248a45ca6e.js&quot;:[&quot;$lib\/boomerang.js&quot;,&quot;app\/utils\/boomerang_lib&quot;],&quot;$bundle\/sandbox.1a1d8d9e5b807e92548fba6d79824ebe5104b03a.js&quot;:[&quot;$components\/jquery\/jquery.js&quot;,&quot;$lib\/easyXDM.js&quot;,&quot;app\/boot\/sandbox&quot;],&quot;$bundle\/settings.237c74ed14211ebd8d79f28914c887a1d1e355b7.js&quot;:[&quot;app\/ui\/alert_banner&quot;,&quot;app\/ui\/forms\/with_submit_disable&quot;,&quot;app\/ui\/forms\/form_value_modification&quot;,&quot;app\/boot\/settings&quot;,&quot;app\/data\/settings\/account_scribe&quot;,&quot;app\/data\/form_scribe&quot;,&quot;app\/ui\/with_forgot_password&quot;,&quot;app\/ui\/password_dialog&quot;,&quot;app\/ui\/protected_verified_dialog&quot;,&quot;app\/ui\/email_field_highlight&quot;,&quot;app\/ui\/validating_fieldset&quot;,&quot;app\/ui\/email_confirmation&quot;,&quot;app\/ui\/settings\/tweet_export&quot;,&quot;app\/ui\/dialogs\/tweet_export_dialog&quot;,&quot;app\/ui\/timezone_detector&quot;,&quot;app\/ui\/deactivated&quot;,&quot;app\/ui\/geo_deletion&quot;,&quot;app\/ui\/settings_controls&quot;,&quot;app\/pages\/settings\/account&quot;,&quot;app\/data\/settings\/applications_scribe&quot;,&quot;app\/ui\/oauth_revoker&quot;,&quot;app\/pages\/settings\/applications&quot;,&quot;app\/data\/settings\/confirm_deactivation_scribe&quot;,&quot;app\/pages\/settings\/confirm_deactivation&quot;,&quot;app\/data\/settings\/design_scribe&quot;,&quot;$lib\/jquery_color_picker.js&quot;,&quot;app\/ui\/color_picker&quot;,&quot;app\/ui\/design&quot;,&quot;app\/ui\/theme_preview&quot;,&quot;app\/ui\/theme_picker&quot;,&quot;app\/pages\/settings\/design&quot;,&quot;app\/data\/settings\/enhanced_profile_scribe&quot;,&quot;app\/ui\/capped_file_upload&quot;,&quot;app\/ui\/settings\/enhanced_profile_form&quot;,&quot;app\/pages\/settings\/enhanced_profile&quot;,&quot;app\/ui\/settings\/tweet_export_download&quot;,&quot;app\/pages\/settings\/tweet_export_download&quot;,&quot;app\/ui\/settings\/notifications&quot;,&quot;app\/pages\/settings\/notifications&quot;,&quot;app\/ui\/password&quot;,&quot;app\/ui\/password_match_pair&quot;,&quot;app\/ui\/with_password_strength&quot;,&quot;app\/ui\/password_strength&quot;,&quot;app\/pages\/settings\/password&quot;,&quot;app\/boot\/avatar_uploading&quot;,&quot;app\/data\/settings\/profile_scribe&quot;,&quot;app\/ui\/settings\/facebook_iframe_height_adjuster&quot;,&quot;app\/ui\/field_edit_warning&quot;,&quot;app\/ui\/dialogs\/in_product_help_dialog&quot;,&quot;app\/boot\/header_upload&quot;,&quot;app\/ui\/bio_box&quot;,&quot;app\/pages\/settings\/profile&quot;,&quot;app\/data\/settings\/facebook_proxy&quot;,&quot;app\/ui\/settings\/with_facebook_container&quot;,&quot;app\/ui\/settings\/facebook_spinner&quot;,&quot;app\/ui\/settings\/with_facebook_banner&quot;,&quot;app\/ui\/settings\/facebook_login&quot;,&quot;app\/ui\/settings\/facebook_connect&quot;,&quot;app\/ui\/settings\/facebook_missing_permissions&quot;,&quot;app\/ui\/settings\/facebook_mismatched_connection&quot;,&quot;app\/ui\/settings\/facebook_connection_conflict&quot;,&quot;app\/ui\/settings\/facebook_connected&quot;,&quot;app\/data\/settings\/facebook_scribe&quot;,&quot;app\/pages\/settings\/facebook&quot;,&quot;app\/data\/settings\/sms_scribe&quot;,&quot;app\/ui\/forms\/select_box&quot;,&quot;app\/ui\/settings\/sms_phone_create_form&quot;,&quot;app\/ui\/forms\/element_group_toggler&quot;,&quot;app\/ui\/settings\/device_verified_form&quot;,&quot;app\/ui\/settings\/sms_phone_verify_form&quot;,&quot;app\/pages\/settings\/sms&quot;,&quot;app\/ui\/settings\/widgets&quot;,&quot;app\/pages\/settings\/widgets&quot;,&quot;app\/ui\/settings\/widgets_configurator&quot;,&quot;app\/pages\/settings\/widgets_configurator&quot;],&quot;$bundle\/permalink.5f012d532f54d036c8a676c5c9288b7a4d2c591f.js&quot;:[&quot;app\/ui\/permalink_keyboard_support&quot;,&quot;app\/ui\/hidden_ancestors&quot;,&quot;app\/ui\/hidden_descendants&quot;,&quot;app\/ui\/dialogs\/sms_codes&quot;,&quot;app\/ui\/timelines\/conversations\/descendant_timeline&quot;,&quot;app\/ui\/timelines\/conversations\/ancestor_timeline&quot;,&quot;app\/data\/permalink_scribe&quot;,&quot;app\/pages\/permalink&quot;,&quot;app\/pages\/permalink_photo&quot;],&quot;$bundle\/lists_permalink.87cb532673e1f481cfa9abacf2a62b64ccc9204d.js&quot;:[&quot;app\/ui\/list_members_dashboard&quot;,&quot;app\/data\/list_members_dashboard&quot;,&quot;app\/ui\/list_follow_card&quot;,&quot;app\/data\/list_follow_card&quot;,&quot;app\/boot\/list_permalink&quot;,&quot;app\/pages\/list\/permalink_tweets&quot;,&quot;app\/pages\/list\/permalink_users&quot;],&quot;$bundle\/frontpage.fa98fcacc5c48ee33442477fd7dae5f9b39c4b5a.js&quot;:[&quot;app\/data\/frontpage_scribe&quot;,&quot;app\/ui\/cookie_warning&quot;,&quot;app\/ui\/dialogs\/uz_survey&quot;,&quot;app\/pages\/frontpage&quot;,&quot;app\/data\/login_scribe&quot;,&quot;app\/pages\/login&quot;],&quot;$bundle\/core.65d7de77235f4ecded4a78a08dd3b00d1216ec2f.js&quot;:[&quot;components\/flight\/lib\/utils&quot;,&quot;components\/flight\/lib\/registry&quot;,&quot;components\/flight\/tools\/debug\/debug&quot;,&quot;components\/flight\/lib\/compose&quot;,&quot;components\/flight\/lib\/advice&quot;,&quot;components\/flight\/lib\/component&quot;,&quot;core\/component&quot;,&quot;core\/registry&quot;,&quot;core\/clock&quot;,&quot;core\/compose&quot;,&quot;core\/advice&quot;,&quot;core\/parameterize&quot;,&quot;core\/i18n&quot;,&quot;components\/flight\/lib\/logger&quot;,&quot;core\/logger&quot;,&quot;core\/utils&quot;,&quot;debug\/debug&quot;,&quot;app\/utils\/auth_token&quot;,&quot;app\/data\/scribe_transport&quot;,&quot;app\/data\/client_event&quot;,&quot;app\/data\/with_scribe&quot;,&quot;app\/utils\/querystring&quot;,&quot;app\/utils\/params&quot;,&quot;app\/data\/with_auth_token&quot;,&quot;app\/utils\/storage\/core&quot;,&quot;$lib\/gibberish-aes.js&quot;,&quot;app\/utils\/crypto\/aes&quot;,&quot;app\/utils\/storage\/with_crypto&quot;,&quot;app\/utils\/storage\/with_expiry&quot;,&quot;app\/utils\/storage\/array\/with_array&quot;,&quot;app\/utils\/storage\/array\/with_max_elements&quot;,&quot;app\/utils\/storage\/array\/with_unique_elements&quot;,&quot;app\/utils\/storage\/custom&quot;,&quot;app\/data\/with_data&quot;,&quot;app\/data\/scribe_monitor&quot;,&quot;app\/data\/ddg&quot;,&quot;app\/ui\/with_interaction_data&quot;,&quot;app\/utils\/scribe_item_types&quot;,&quot;app\/utils\/scribe_association_types&quot;,&quot;app\/data\/with_interaction_data_scribe&quot;,&quot;app\/data\/tweet_actions_scribe&quot;,&quot;app\/data\/user_actions_scribe&quot;,&quot;app\/data\/with_card_metadata&quot;,&quot;app\/data\/item_actions_scribe&quot;,&quot;app\/data\/navigation_scribe&quot;,&quot;app\/boot\/scribing&quot;,&quot;app\/utils\/full_path&quot;,&quot;app\/ui\/navigation&quot;,&quot;app\/utils\/time&quot;,&quot;app\/data\/navigation&quot;,&quot;app\/ui\/with_dropdown&quot;,&quot;app\/ui\/language_dropdown&quot;,&quot;app\/ui\/google&quot;,&quot;app\/utils\/cookie&quot;,&quot;app\/ui\/impression_cookies&quot;,&quot;app\/data\/promoted_logger&quot;,&quot;app\/ui\/message_drawer&quot;,&quot;$lib\/bootstrap_tooltip.js&quot;,&quot;app\/ui\/tooltips&quot;,&quot;app\/data\/ttft_navigation&quot;,&quot;app\/data\/user_info&quot;,&quot;app\/boot\/common&quot;,&quot;app\/ui\/with_position&quot;,&quot;app\/ui\/with_scrollbar_width&quot;,&quot;$lib\/jquery.event.drag.js&quot;,&quot;app\/ui\/with_dialog&quot;,&quot;app\/ui\/dialogs\/signin_or_signup&quot;,&quot;app\/ui\/forms\/input_with_placeholder&quot;,&quot;app\/ui\/signup_call_out&quot;,&quot;app\/data\/signup_click_scribe&quot;,&quot;app\/boot\/logged_out&quot;,&quot;app\/utils\/ttft&quot;],&quot;$bundle\/timeline.327ea94a4da6f9f0b09c049d6bdf5544fc9fc4f6.js&quot;:[&quot;app\/data\/trends&quot;,&quot;app\/utils\/scribe_event_initiators&quot;,&quot;app\/data\/trends_scribe&quot;,&quot;app\/ui\/trends\/trends&quot;,&quot;app\/ui\/trends\/trends_dialog&quot;,&quot;app\/boot\/trends&quot;,&quot;app\/ui\/infinite_scroll_watcher&quot;,&quot;app\/data\/timeline&quot;,&quot;app\/boot\/timeline&quot;,&quot;app\/data\/activity_popup&quot;,&quot;app\/ui\/dialogs\/activity_popup&quot;,&quot;app\/data\/activity_popup_scribe&quot;,&quot;app\/boot\/activity_popup&quot;,&quot;app\/data\/tweet_translation&quot;,&quot;app\/data\/conversations&quot;,&quot;app\/data\/media_settings&quot;,&quot;app\/ui\/dialogs\/sensitive_flag_confirmation&quot;,&quot;app\/ui\/user_actions&quot;,&quot;app\/boot\/tweets&quot;,&quot;app\/boot\/help_pips_enable&quot;,&quot;app\/data\/help_pips&quot;,&quot;app\/data\/help_pips_scribe&quot;,&quot;app\/ui\/help_pip&quot;,&quot;app\/ui\/help_pips_injector&quot;,&quot;app\/boot\/help_pips&quot;,&quot;app\/ui\/expando\/close_all_button&quot;,&quot;app\/ui\/timelines\/with_keyboard_navigation&quot;,&quot;app\/ui\/with_focus_highlight&quot;,&quot;app\/ui\/timelines\/with_base_timeline&quot;,&quot;app\/ui\/timelines\/with_old_items&quot;,&quot;app\/utils\/chrome&quot;,&quot;app\/ui\/timelines\/with_traveling_ptw&quot;,&quot;app\/ui\/timelines\/with_autoplaying_timeline&quot;,&quot;app\/ui\/timelines\/with_polling&quot;,&quot;app\/ui\/timelines\/with_new_items&quot;,&quot;app\/ui\/timelines\/with_tweet_pagination&quot;,&quot;app\/ui\/timelines\/with_activity_supplements&quot;,&quot;app\/ui\/timelines\/tweet_timeline&quot;,&quot;app\/boot\/tweet_timeline&quot;,&quot;app\/ui\/who_to_follow\/with_user_recommendations&quot;,&quot;app\/ui\/who_to_follow\/who_to_follow_dashboard&quot;,&quot;app\/ui\/who_to_follow\/who_to_follow_timeline&quot;,&quot;app\/data\/who_to_follow&quot;,&quot;app\/data\/who_to_follow_scribe&quot;,&quot;app\/ui\/promptbird\/with_invite_contacts&quot;,&quot;app\/ui\/promptbird&quot;,&quot;app\/utils\/oauth_popup&quot;,&quot;app\/data\/promptbird&quot;,&quot;app\/data\/promptbird_scribe&quot;,&quot;app\/ui\/with_select_all&quot;,&quot;app\/ui\/who_to_follow\/with_invite_messages&quot;,&quot;app\/ui\/who_to_follow\/with_invite_preview&quot;,&quot;app\/ui\/who_to_follow\/with_unmatched_contacts&quot;,&quot;app\/ui\/dialogs\/promptbird_invite_contacts_dialog&quot;,&quot;app\/data\/contact_import&quot;,&quot;app\/data\/contact_import_scribe&quot;,&quot;app\/ui\/with_import_services&quot;,&quot;app\/ui\/who_to_follow\/import_services&quot;,&quot;app\/ui\/who_to_follow\/import_loading_dialog&quot;,&quot;app\/ui\/dashboard_tweetbox&quot;,&quot;app\/utils\/boomerang&quot;,&quot;app\/ui\/profile_stats&quot;,&quot;app\/pages\/home&quot;,&quot;app\/boot\/wtf_module&quot;,&quot;app\/boot\/connect&quot;,&quot;app\/data\/who_to_tweet&quot;,&quot;app\/ui\/who_to_follow\/with_list_resizing&quot;,&quot;app\/ui\/who_to_follow\/matched_contacts_list&quot;,&quot;app\/ui\/who_to_follow\/unmatched_contacts_list&quot;,&quot;app\/ui\/who_to_tweet&quot;,&quot;app\/ui\/with_loading_indicator&quot;,&quot;app\/ui\/who_to_follow\/find_friends&quot;,&quot;app\/pages\/connect\/interactions&quot;,&quot;app\/pages\/connect\/mentions&quot;,&quot;app\/pages\/connect\/network_activity&quot;,&quot;app\/ui\/inline_edit&quot;,&quot;app\/data\/async_profile&quot;,&quot;$lib\/jquery_ui.profile.js&quot;,&quot;$lib\/jquery_webcam.js&quot;,&quot;app\/ui\/settings\/with_cropper&quot;,&quot;app\/ui\/settings\/with_webcam&quot;,&quot;app\/ui\/dialogs\/profile_image_upload_dialog&quot;,&quot;app\/ui\/droppable_image&quot;,&quot;app\/ui\/profile_image_monitor&quot;,&quot;app\/data\/profile_header_scribe&quot;,&quot;app\/data\/settings\/profile_image_upload_scribe&quot;,&quot;app\/ui\/settings\/change_photo&quot;,&quot;app\/ui\/image_uploader&quot;,&quot;app\/data\/settings&quot;,&quot;app\/boot\/inline_edit&quot;,&quot;app\/utils\/hide_or_show_divider&quot;,&quot;app\/ui\/with_inline_image_editing&quot;,&quot;app\/ui\/with_inline_profile_editing&quot;,&quot;app\/ui\/profile\/head&quot;,&quot;app\/ui\/media\/card_thumbnails&quot;,&quot;app\/data\/media_timeline&quot;,&quot;app\/data\/media_thumbnails_scribe&quot;,&quot;app\/ui\/suggested_users&quot;,&quot;app\/data\/suggested_users&quot;,&quot;app\/ui\/gallery\/grid&quot;,&quot;app\/boot\/profile&quot;,&quot;app\/pages\/profile\/tweets&quot;,&quot;app\/ui\/timelines\/with_cursor_pagination&quot;,&quot;app\/ui\/timelines\/user_timeline&quot;,&quot;app\/boot\/user_timeline&quot;,&quot;app\/ui\/timelines\/follower_request_timeline&quot;,&quot;app\/data\/follower_request&quot;,&quot;app\/pages\/profile\/follower_requests&quot;,&quot;app\/pages\/profile\/followers&quot;,&quot;app\/pages\/profile\/following&quot;,&quot;app\/pages\/profile\/favorites&quot;,&quot;app\/ui\/timelines\/list_timeline&quot;,&quot;app\/boot\/list_timeline&quot;,&quot;app\/pages\/profile\/lists&quot;,&quot;app\/ui\/with_stream_users&quot;,&quot;app\/ui\/with_removable_stream_items&quot;,&quot;app\/ui\/similar_to&quot;,&quot;app\/pages\/profile\/similar_to&quot;,&quot;app\/data\/facets&quot;,&quot;app\/ui\/facets&quot;,&quot;app\/data\/facets_timeline&quot;,&quot;app\/ui\/dialogs\/iph_search_result_dialog&quot;,&quot;app\/boot\/search&quot;,&quot;app\/data\/user_search&quot;,&quot;app\/data\/user_search_scribe&quot;,&quot;app\/ui\/user_search&quot;,&quot;app\/data\/saved_searches&quot;,&quot;app\/ui\/search_dropdown&quot;,&quot;app\/data\/story_scribe&quot;,&quot;app\/data\/onebox_scribe&quot;,&quot;app\/ui\/with_story_clicks&quot;,&quot;$lib\/jquery_autoellipsis.js&quot;,&quot;app\/utils\/ellipsis&quot;,&quot;app\/ui\/with_story_ellipsis&quot;,&quot;app\/ui\/search\/news_onebox&quot;,&quot;app\/ui\/search\/user_onebox&quot;,&quot;app\/ui\/search\/event_onebox&quot;,&quot;app\/ui\/search\/media_onebox&quot;,&quot;app\/ui\/search\/spelling_corrections&quot;,&quot;app\/ui\/search\/related_queries&quot;,&quot;app\/data\/search_assistance_scribe&quot;,&quot;app\/pages\/search\/search&quot;,&quot;app\/pages\/simple_t1&quot;],&quot;$bundle\/accounts.f31cd13a1d5f642126121c9b08b51fb7fa48e594.js&quot;:[&quot;app\/ui\/account\/password_reset_controls&quot;,&quot;app\/ui\/password_match_pair&quot;,&quot;app\/ui\/with_password_strength&quot;,&quot;app\/ui\/password_strength&quot;,&quot;app\/pages\/account\/password_reset&quot;,&quot;app\/ui\/captcha_dialog&quot;,&quot;app\/ui\/account\/resend_password_controls&quot;,&quot;app\/ui\/validating_fieldset&quot;,&quot;app\/data\/resend_password&quot;,&quot;app\/pages\/account\/resend_password&quot;,&quot;app\/ui\/account\/verify_personal_information_controls&quot;,&quot;app\/pages\/account\/verify_personal_information&quot;,&quot;app\/ui\/account\/verify_device_token_controls&quot;,&quot;app\/pages\/account\/verify_device_token&quot;,&quot;app\/ui\/account\/resend_password_help_controls&quot;,&quot;app\/data\/resend_password_help&quot;,&quot;app\/data\/resend_password_help_scribe&quot;,&quot;app\/pages\/account\/resend_password_help&quot;,&quot;app\/pages\/account\/errors&quot;],&quot;$bundle\/vitonboarding.6f668ddeced0f9e631bad4fd5a9a0d076c416e25.js&quot;:[&quot;$lib\/jquery.hashchange.js&quot;,&quot;app\/ui\/vit\/verification_step&quot;,&quot;app\/ui\/vit\/mobile_topbar&quot;,&quot;app\/pages\/vit\/onboarding&quot;],&quot;$bundle\/discover.78bc01f99bc581e2c43cc56c57114b977dfcf9f6.js&quot;:[&quot;app\/ui\/discover_nav&quot;,&quot;app\/boot\/discover&quot;,&quot;app\/ui\/timelines\/with_story_pagination&quot;,&quot;app\/ui\/timelines\/discover_timeline&quot;,&quot;app\/boot\/discover_timeline&quot;,&quot;app\/data\/discover&quot;,&quot;app\/ui\/with_discover_expando&quot;,&quot;app\/ui\/discover&quot;,&quot;app\/pages\/discover\/discover&quot;,&quot;app\/ui\/people_search_input&quot;,&quot;app\/boot\/who_to_follow&quot;,&quot;app\/utils\/common_regexp&quot;,&quot;app\/ui\/who_to_follow\/invite_form&quot;,&quot;app\/ui\/who_to_follow\/pymk_kicker&quot;,&quot;app\/ui\/who_to_follow\/wipe_addressbook_dialog&quot;,&quot;app\/pages\/who_to_follow\/import&quot;,&quot;app\/pages\/who_to_follow\/interests&quot;,&quot;app\/pages\/who_to_follow\/invite&quot;,&quot;app\/pages\/who_to_follow\/lifeline&quot;,&quot;app\/pages\/who_to_follow\/matches&quot;,&quot;app\/pages\/who_to_follow\/suggestions&quot;,&quot;app\/data\/who_to_follow\/web_personalized_scribe&quot;,&quot;app\/data\/who_to_follow\/web_personalized_proxy&quot;,&quot;app\/ui\/who_to_follow\/web_personalized_settings&quot;,&quot;app\/ui\/who_to_follow\/web_personalized_signup&quot;,&quot;app\/pages\/who_to_follow\/web_personalized&quot;],&quot;$bundle\/boot.6a5bebccfac2cbec9b942982033ef706dfa31ea1.js&quot;:[&quot;app\/data\/geo&quot;,&quot;app\/data\/tweet&quot;,&quot;app\/ui\/tweet_dialog&quot;,&quot;app\/ui\/new_tweet_button&quot;,&quot;app\/data\/tweet_box_scribe&quot;,&quot;lib\/twitter-text&quot;,&quot;app\/ui\/with_character_counter&quot;,&quot;app\/utils\/with_event_params&quot;,&quot;app\/utils\/caret&quot;,&quot;app\/ui\/with_draft_tweets&quot;,&quot;app\/ui\/with_text_polling&quot;,&quot;app\/ui\/with_rtl_tweet_box&quot;,&quot;app\/ui\/toolbar&quot;,&quot;app\/utils\/tweet_helper&quot;,&quot;app\/utils\/html_text&quot;,&quot;app\/ui\/with_rich_editor&quot;,&quot;$lib\/jquery.swfobject.js&quot;,&quot;app\/utils\/image&quot;,&quot;app\/ui\/with_drop_events&quot;,&quot;app\/ui\/with_droppable_image&quot;,&quot;app\/ui\/tweet_box&quot;,&quot;app\/utils\/image_thumbnail&quot;,&quot;app\/ui\/tweet_box_thumbnails&quot;,&quot;app\/utils\/image_resize&quot;,&quot;app\/ui\/with_image_selection&quot;,&quot;app\/ui\/image_selector&quot;,&quot;app\/ui\/with_autocomplete_helpers&quot;,&quot;app\/utils\/string&quot;,&quot;app\/ui\/autocomplete_dropdown&quot;,&quot;app\/utils\/levenshtein&quot;,&quot;app\/data\/autocomplete&quot;,&quot;app\/ui\/typeahead\/with_accounts&quot;,&quot;app\/ui\/typeahead\/with_saved_searches&quot;,&quot;app\/ui\/typeahead\/with_topics&quot;,&quot;app\/utils\/RTLText.module&quot;,&quot;app\/ui\/typeahead\/typeahead_dropdown&quot;,&quot;app\/ui\/typeahead\/typeahead_input&quot;,&quot;app\/ui\/with_click_outside&quot;,&quot;app\/ui\/geo_picker&quot;,&quot;app\/ui\/tweet_box_manager&quot;,&quot;app\/boot\/tweet_boxes&quot;,&quot;app\/ui\/user_dropdown&quot;,&quot;app\/ui\/signin_dropdown&quot;,&quot;app\/ui\/search_input&quot;,&quot;app\/utils\/animate_window_scrolltop&quot;,&quot;app\/ui\/global_nav&quot;,&quot;app\/ui\/navigation_links&quot;,&quot;app\/boot\/top_bar&quot;,&quot;app\/ui\/keyboard_shortcuts&quot;,&quot;app\/ui\/dialogs\/keyboard_shortcuts_dialog&quot;,&quot;app\/ui\/dialogs\/with_modal_tweet&quot;,&quot;app\/ui\/dialogs\/retweet_dialog&quot;,&quot;app\/ui\/dialogs\/delete_tweet_dialog&quot;,&quot;app\/ui\/dialogs\/block_user_dialog&quot;,&quot;app\/ui\/dialogs\/confirm_dialog&quot;,&quot;app\/ui\/dialogs\/list_membership_dialog&quot;,&quot;app\/ui\/dialogs\/list_operations_dialog&quot;,&quot;app\/data\/direct_messages&quot;,&quot;app\/data\/direct_messages_scribe&quot;,&quot;app\/ui\/with_timestamp_updating&quot;,&quot;app\/ui\/direct_message_dialog&quot;,&quot;app\/boot\/direct_messages&quot;,&quot;app\/data\/profile_popup&quot;,&quot;app\/data\/profile_popup_scribe&quot;,&quot;app\/ui\/with_user_actions&quot;,&quot;app\/ui\/with_item_actions&quot;,&quot;app\/ui\/with_profile_stats&quot;,&quot;app\/ui\/with_handle_overflow&quot;,&quot;app\/ui\/profile_popup&quot;,&quot;app\/data\/user&quot;,&quot;app\/data\/lists&quot;,&quot;app\/boot\/profile_popup&quot;,&quot;app\/data\/autocomplete_scribe&quot;,&quot;app\/data\/typeahead\/with_cache&quot;,&quot;app\/utils\/typeahead_helpers&quot;,&quot;app\/data\/with_datasource_helpers&quot;,&quot;app\/data\/typeahead\/accounts_datasource&quot;,&quot;app\/data\/typeahead\/saved_searches_datasource&quot;,&quot;app\/data\/typeahead\/with_external_event_listeners&quot;,&quot;app\/data\/typeahead\/topics_datasource&quot;,&quot;app\/data\/typeahead\/typeahead&quot;,&quot;app\/data\/typeahead_scribe&quot;,&quot;app\/ui\/dialogs\/goto_user_dialog&quot;,&quot;app\/utils\/setup_polling_with_backoff&quot;,&quot;app\/ui\/page_title&quot;,&quot;app\/ui\/feedback\/with_feedback_tweet&quot;,&quot;app\/ui\/feedback\/feedback_stories&quot;,&quot;app\/ui\/feedback\/with_feedback_discover&quot;,&quot;app\/ui\/feedback\/feedback_dialog&quot;,&quot;app\/ui\/feedback\/feedback_report_link_handler&quot;,&quot;app\/data\/feedback\/feedback&quot;,&quot;app\/ui\/search_query_source&quot;,&quot;app\/ui\/banners\/email_banner&quot;,&quot;app\/data\/email_banner&quot;,&quot;app\/ui\/media\/phoenix_shim&quot;,&quot;app\/utils\/twt&quot;,&quot;app\/ui\/media\/types&quot;,&quot;$lib\/easyXDM.js&quot;,&quot;app\/utils\/easy_xdm&quot;,&quot;app\/utils\/sandboxed_ajax&quot;,&quot;app\/ui\/media\/with_legacy_icons&quot;,&quot;app\/utils\/third_party_application&quot;,&quot;app\/ui\/media\/legacy_embed&quot;,&quot;app\/ui\/media\/with_legacy_embeds&quot;,&quot;app\/ui\/media\/with_flag_action&quot;,&quot;app\/ui\/media\/with_hidden_display&quot;,&quot;app\/ui\/media\/with_legacy_media&quot;,&quot;app\/utils\/image\/image_loader&quot;,&quot;app\/ui\/with_tweet_actions&quot;,&quot;app\/ui\/gallery\/gallery&quot;,&quot;app\/data\/gallery_scribe&quot;,&quot;app\/ui\/dialogs\/share_via_email_dialog&quot;,&quot;app\/data\/with_widgets&quot;,&quot;app\/ui\/dialogs\/embed_tweet2&quot;,&quot;app\/ui\/dialogs\/uz_survey&quot;,&quot;app\/ui\/with_drag_events&quot;,&quot;app\/ui\/drag_state&quot;,&quot;app\/boot\/app&quot;],&quot;$bundle\/events.d9845cf638173afdb25220e5ab241f0f6c09021a.js&quot;:[&quot;app\/ui\/media\/media_thumbnails&quot;,&quot;app\/ui\/timelines\/event_timeline&quot;,&quot;app\/ui\/page_visibility&quot;,&quot;app\/data\/page_visibility_scribe&quot;,&quot;app\/pages\/events\/hashtag&quot;],&quot;$bundle\/directory.5bb8717366f875004b902864cc429411910c67f8.js&quot;:[&quot;app\/ui\/history_back&quot;,&quot;app\/pages\/directory\/directory&quot;],&quot;$bundle\/search.de8979f08bd90811818c7258d26ce4b1c183e49d.js&quot;:[&quot;app\/ui\/dialogs\/search_operators_dialog&quot;,&quot;app\/pages\/search\/home&quot;,&quot;app\/ui\/advanced_search&quot;,&quot;app\/pages\/search\/advanced&quot;,&quot;app\/ui\/search\/user&quot;,&quot;app\/pages\/search\/users&quot;],&quot;$bundle\/tweets.c1ff38ceb585f60d713cdae26a7019dd11db8694.js&quot;:[&quot;app\/utils\/twt&quot;,&quot;app\/ui\/dialogs\/embed_tweet&quot;,&quot;app\/data\/tweet_actions&quot;,&quot;app\/ui\/expando\/with_expanding_containers&quot;,&quot;app\/ui\/expando\/expando_helpers&quot;,&quot;lib\/twitter-text&quot;,&quot;app\/utils\/tweet_helper&quot;,&quot;app\/ui\/with_tweet_actions&quot;,&quot;app\/ui\/with_user_actions&quot;,&quot;app\/ui\/gallery\/with_gallery&quot;,&quot;app\/ui\/with_item_actions&quot;,&quot;app\/ui\/with_tweet_translation&quot;,&quot;app\/ui\/tweets&quot;,&quot;app\/ui\/tweet_injector&quot;,&quot;app\/ui\/expando\/with_expanding_social_activity&quot;,&quot;app\/utils\/caret&quot;,&quot;app\/ui\/expando\/expanding_tweets&quot;,&quot;app\/data\/url_resolver&quot;,&quot;app\/ui\/media\/phoenix_shim&quot;,&quot;app\/ui\/media\/types&quot;,&quot;$lib\/easyXDM.js&quot;,&quot;app\/utils\/easy_xdm&quot;,&quot;app\/utils\/sandboxed_ajax&quot;,&quot;app\/ui\/media\/with_legacy_icons&quot;,&quot;app\/utils\/third_party_application&quot;,&quot;app\/ui\/media\/legacy_embed&quot;,&quot;app\/ui\/media\/with_legacy_embeds&quot;,&quot;app\/ui\/media\/with_flag_action&quot;,&quot;app\/ui\/media\/with_hidden_display&quot;,&quot;app\/ui\/media\/with_legacy_media&quot;,&quot;app\/ui\/media\/with_native_media&quot;,&quot;app\/ui\/media\/media_tweets&quot;],&quot;$bundle\/signup.f274a54c778d1b2a5f9ce72334a11eb9a91c86f7.js&quot;:[&quot;app\/ui\/signup\/with_captcha&quot;,&quot;app\/utils\/common_regexp&quot;,&quot;app\/ui\/signup\/with_signup_validation&quot;,&quot;app\/ui\/signup\/signup_form&quot;,&quot;app\/ui\/with_password_strength&quot;,&quot;app\/data\/signup_data&quot;,&quot;app\/data\/settings&quot;,&quot;app\/data\/signup_scribe&quot;,&quot;app\/ui\/signup\/suggestions&quot;,&quot;app\/utils\/animate_window_scrolltop&quot;,&quot;app\/ui\/signup\/small_print_expander&quot;,&quot;app\/ui\/signin_dropdown&quot;,&quot;app\/ui\/signup_download\/us_phone_number_checker&quot;,&quot;app\/pages\/signup\/signup&quot;],&quot;$bundle\/signup_download.8c964a5fd99e25aca3f0844968e0379e4a42ed59.js&quot;:[&quot;app\/ui\/signup_download\/next_and_skip_buttons&quot;,&quot;app\/ui\/signup_download\/us_phone_number_checker&quot;,&quot;app\/pages\/signup_download\/download&quot;,&quot;app\/ui\/signup_download\/signup_phone_verify_form&quot;,&quot;app\/pages\/signup_download\/verify&quot;],&quot;$bundle\/welcome.97422b5d27aaf315136fdf5e3541fdc1dc64dbd4.js&quot;:[&quot;app\/data\/welcome\/invitations_scribe&quot;,&quot;app\/data\/welcome\/welcome_cards_scribe&quot;,&quot;app\/data\/welcome\/flow_nav_scribe&quot;,&quot;app\/data\/welcome\/preview_stream&quot;,&quot;app\/ui\/welcome\/invite_dialog&quot;,&quot;app\/ui\/welcome\/with_nav_buttons&quot;,&quot;app\/ui\/welcome\/header_progress&quot;,&quot;app\/ui\/welcome\/internal_link_disabler&quot;,&quot;app\/ui\/welcome\/learn_dashboard&quot;,&quot;app\/ui\/welcome\/learn_preview_timeline&quot;,&quot;app\/boot\/welcome&quot;,&quot;app\/pages\/welcome\/import&quot;,&quot;app\/data\/welcome\/intro_scribe&quot;,&quot;app\/ui\/welcome\/flow_nav&quot;,&quot;app\/ui\/welcome\/intro_video&quot;,&quot;app\/ui\/welcome\/lifeline_device_follow_dialog&quot;,&quot;app\/pages\/welcome\/intro&quot;,&quot;app\/data\/welcome\/interests_picker_scribe&quot;,&quot;app\/ui\/welcome\/with_interests&quot;,&quot;app\/ui\/welcome\/custom_interest&quot;,&quot;app\/ui\/welcome\/interests_header_search&quot;,&quot;app\/ui\/welcome\/interests_picker&quot;,&quot;app\/pages\/welcome\/interests&quot;,&quot;app\/data\/welcome\/users_cards&quot;,&quot;app\/ui\/welcome\/import_services_cards&quot;,&quot;app\/ui\/welcome\/with_card_scribe_context&quot;,&quot;app\/ui\/welcome\/with_more_results&quot;,&quot;app\/ui\/welcome\/with_welcome_search&quot;,&quot;app\/ui\/welcome\/users_cards&quot;,&quot;app\/pages\/welcome\/interests_category&quot;,&quot;app\/data\/welcome\/lifeline_scribe&quot;,&quot;app\/pages\/welcome\/lifeline&quot;,&quot;app\/boot\/avatar_uploading&quot;,&quot;app\/ui\/alert_banner&quot;,&quot;app\/ui\/welcome\/profile_flow_nav&quot;,&quot;app\/ui\/welcome\/profile_form&quot;,&quot;app\/pages\/welcome\/profile&quot;,&quot;app\/pages\/welcome\/recommendations&quot;]}">
    <input type="hidden" class="swift-boot-module" value="app/pages/settings/account">
  <input type="hidden" id="swift-module-path" value="https://abs.twimg.com/c/swift/en">

  
    <!--script src="https://abs.twimg.com/c/swift/init.36e357e50b6bb44f7925de49eb9a73b88032e0ab.js"></script>-->-->
