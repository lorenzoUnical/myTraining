<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Picturesque 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131223

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Training</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="style/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="style/fonts.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/menuActivity.js" ></script>

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">My Training</a></h1>
		</div>
	</div>
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li class="current_page_item"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li><a href="#" accesskey="2" title="">Home</a></li>
				<li><a href="#" accesskey="3" title="">Profile</a></li>
				<li><a href="#" accesskey="4" title="">Statistics</a></li>
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
</div>
    <div id="banner">
        
        <?php
        // put your code here
        include './InitSession.php';
        $initSession = new InitSession();
        $initSession->init();
        ?>
        <div id="center">

        <input type="text" id="username" required title="Username required" placeholder="Username" data-icon="U">
        <input type="password" id="password" required title="Password required" placeholder="Password" data-icon="x">

        <a id="button_id" class="enviar">Sign in</a>


            <script>
                $('[id=button_id]').click(function() {
                    doLogin($('[id=username]').val(), $('[id=password]').val());
                });

                $('[id=insertWorkout]').click(function() {
                    toInsertWorkout();
                });

                $('[id=home]').click(function() {
                    toHOME();
                });
                
                $('[id=runningTraining]').click(function (){
                    toInsertRunningTraining();
                });
                
                $('[id=spinningTRaining]').click(function (){
                    toInsertSpinningTraining();
                });
            </script>
        </div>
    </div>
    
    
<div id="wrapper2">
	<div id="portfolio" class="container">
		<div class="title">
			<h2>Integer gravida</h2>
			<span class="byline">Mattis libero eget urna</span>
		</div>
		<div class="column1">
			<div class="box"> <a href="#"><img src="images/scr01.jpg" alt="" class="image image-full" /></a>
				<h3>Vestibulum venenatis</h3>
				<p>Fermentum nibh augue praesent a lacus at urna congue rutrum.</p>
				<a href="#" class="button button-small">Etiam posuere</a> </div>
		</div>
		<div class="column2">
			<div class="box"> <a href="#"><img src="images/scr02.jpg" alt="" class="image image-full" /></a>
				<h3>Praesent scelerisque</h3>
				<p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
				<a href="#" class="button button-small">Etiam posuere</a> </div>
		</div>
		<div class="column3">
			<div class="box"> <a href="#"><img src="images/scr03.jpg" alt="" class="image image-full" /></a>
				<h3>Donec dictum metus</h3>
				<p>Vivamus fermentum nibh in augue praesent urna congue rutrum.</p>
				<a href="#" class="button button-small">Etiam posuere</a> </div>
		</div>
		<div class="column4">
			<div class="box"> <a href="#"><img src="images/scr04.jpg" alt="" class="image image-full" /></a>
				<h3>Mauris vulputate dolor</h3>
				<p>Rutrum fermentum nibh in augue praesent urna congue rutrum.</p>
				<a href="#" class="button button-small">Etiam posuere</a> </div>
		</div>
	</div>
</div>
<div class="wrapper">
	<div id="three-column" class="container">
		<div><span class="arrow-down"></span></div>
		<div id="tbox1">
			<div class="title">
				<h2>Maecenas luctus</h2>
				<span class="byline">Proin suscipit nulla suscipit </span>
			</div>
			<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac suscipit mauris. Proin eu wisi suscipit nulla suscipit interdum.</p>
			<a href="#" class="button">Learn More</a> </div>
		<div id="tbox2">
			<div class="title">
				<h2>Integer gravida</h2>
				<span class="byline">Mattis libero eget urna</span>
			</div>
			<p>Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem semper suscipit eleifend. Donec mattis libero eget urna. Duis  velit ac mauris.</p>
			<a href="#" class="button">Learn More</a> </div>
		<div id="tbox3">
			<div class="title">
				<h2>Praesent mauris</h2>
				<span class="byline">Donec mattis libero eget</span>
			</div>
			<p>Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Nullam non wisi a sem suscipit  eleifend.</p>
			<a href="#" class="button">Learn More</a> </div>
	</div>
</div>
<div id="page-wrapper">
	<div id="page" class="container">
		<div class="title">
			<h2>Welcome to our website</h2>
		</div>
		<p>This is <strong>Picturesque</strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :) </p>
	</div>
</div>
<div id="copyright" class="container">
	<p>Copyright (c) 2013 Sitename.com. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
		<ul class="contact">
			<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
			<li><a href="#" class="icon icon-facebook"><span></span></a></li>
			<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
			<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
			<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
		</ul>
</div>
</body>
</html>
