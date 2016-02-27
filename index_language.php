<!DOCTYPE HTML>
<html>

<head>
  <title><?php print($lang["html_title"]); ?></title>
  <meta name="description" content="<?php print($lang["meta_description"]); ?>" />
  <meta name="keywords" content="<?php print($lang["meta_keywords"]); ?>" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="../style/style.css" />
  <script type="text/javascript"> 
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-18026034-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
  </script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <h1><?php print($lang["pagetitle_1"]); ?><a href="#"><?php print($lang["pagetitle_2"]); ?></a></h1>
        <div class="slogan"><?php print($lang["victory"]); ?></div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="current" in the li tag for the selected page - to highlight which page you're on 
          <li ><a href="index.html"></a></li>-->
          <li<?php print($lang["cs_current"]); ?>><a href="../cs/"><?php print($lang["menu_cs"]); ?></a></li>
          <li<?php print($lang["en_current"]); ?>><a href="../en/"><?php print($lang["menu_en"]); ?></a></li>
          <li<?php print($lang["sk_current"]); ?>><a href="../sk/"><?php print($lang["menu_sk"]); ?></a></li>
          <!--<li><a href="contact.html">Contact Us</a></li>-->
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="sidebar_container">
        <img class="paperclip" src="../style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
		<p></p>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Tabulka2 -->
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-7860058313368973"
				 data-ad-slot="2873548587"
				 data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
        <!-- insert your sidebar items here -->
        <!--<h3>Latest News</h3>
        <h4>What's the News?</h4>
        <h5>1st July 2011</h5>
        <p>Put your latest news item here, or anything else you would like in the sidebar!<br /><a href="#">Read more</a></p>-->
        </div>
        <!-- <img class="paperclip" src="style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Newsletter</h3>
          <p>If you would like to receive our newletter, please enter your email address and click 'Subscribe'.</p>
          <form method="post" action="#" id="subscribe">
            <p style="padding: 0 0 9px 0;"><input class="search" type="text" name="email_address" value="your email address" onclick="javascript: document.forms['subscribe'].email_address.value=''" /></p>
            <p><input class="subscribe" name="subscribe" type="submit" value="Subscribe" /></p>
          </form>
        </div>
        <img class="paperclip" src="style/paperclip.png" alt="paperclip" />
        <div class="sidebar">
          <h3>Latest Blog</h3>
          <h4>Website Goes Live</h4>
          <h5>1st July 2011</h5>
          <p>We have just launched our new website. Take a look around, we'd love to know what you think.....<br /><a href="#">read more</a></p>
        </div>-->
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1><?php print($lang["home_headline"]); ?></h1>
        <p><?php print($lang["home_desc"]); ?></p>
		<h2><?php print($lang["home_table_web_heading"]); ?></h2>
        <p><a href="<?php print($lang["home_table_web_link"]); ?>"><?php print($lang["home_table_web"]); ?></a> <?php print($lang["home_table_web_help"]); ?></p>
		
		<h2><?php print($lang["home_table_dl_heading"]); ?></h2>
		<p><a href="<?php print($lang["home_table_dl_link"]); ?>"><?php print($lang["home_table_dl"]); ?></a> <?php print($lang["home_table_dl_help"]); ?></p>
		
        <h2><?php print($lang["home_element_heading"]); ?></h2>

        <div style="width:100%;">
			<div style="width:250px;float:left;">
				<ul>
				  <?php print($lang["home_element_list"]); ?>
				</ul>
			</div>
			<div style="width:370px;float:left;">
				<img src="<?php print($lang["home_element_preview"]); ?>" style="width:370px;" />
			</div>
		</div>
		<div style="float:left;width:100%;">
			<h2><?php print($lang["home_blind_heading"]); ?></h2>
			<p><em><?php print($lang["home_blind_description"]); ?></em></p>
			<p><a href="<?php print($lang["home_blind_link"]); ?>"><?php print($lang["home_blind"]); ?></a> <?php print($lang["home_blind_help"]); ?></p>
		</div>
      </div>
    </div>
    <div id="footer">
	<p>
	    <?php print($lang["footer_message"]); ?>
	</p>
    <p>simplestyle_7 | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">Free website templates</a></p>
    </div>
  </div>
</body>
</html>
