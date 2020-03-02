<!--==========================
Header
============================-->
<header id="header">
<div class="container-fluid">

  <div id="logo" class="pull-left">
	<!-- <h1><a href="#intro" class="scrollto">BizPage</a></h1> -->
	<!-- Uncomment below if you prefer to use an image logo -->
	<!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
  </div>

  <nav id="nav-menu-container">
	<ul class="nav-menu">
	  <li class="<?php if($page == 'home') {echo 'menu-active';}?>"><a href="index.php">Home</a></li>
	  <li class="<?php if($page == 'about') {echo 'menu-active';}?>"><a href="about.php">About Us</a></li>
	  <li class="menu-has-children <?php if($page == 'tofi') {echo 'menu-active';} ?>">
		<a>Things of Internet</a>
		<ul>
		  <li><a href="tofi-bridge.php">ToFi Bridge</a></li>
		  <li><a href="cygnus.php">Cygnus</a></li>
		  <li><a href="monnit.php">Monnit</a></li>
		</ul>
	  </li>
	  <li class="menu-has-children <?php if($page == 'solution') {echo 'menu-active';} ?>">
		<!-- <a href="solution.php">I4.0 Solutions</a> -->
		<a href="solution.php">I4.0 Connected Assets Suite</a>
		<ul>
		  <li><a href="#">Tofl Connectivity</a></li>
		  <!-- <li><a href="CAMs.php">Connected Asset Management solutions (CAMs)</a></li> -->
		  <li><a href="movilert.php">Mobile Workers</a></li>
		  <!--
			<li><a href="http://sophicauto.ddns.net/">IoT Solution</a></li>
			<li><a href="http://sophicauto.ddns.net/">Connect & Communicate</a></li>
		  -->
		  <li><a href="inXcite.php">inXcite Dashboard</a></li>		  
		  <li><a href="http://sophicauto.ddns.net/">Analytics</a></li>
		  <!--<li><a href="machine-design.php">I4.0 for Machines</a></li> -->
		  <li><a href="#">Start Trial now</a></li>
		</ul>			
	  </li>
	  <li class="menu-has-children <?php if($page == 'resource') {echo 'menu-active';} ?>">
		<a>Resources</a>
		<ul>
		  <li><a href="news.php">News</a></li>
		  <li><a href="video.php">Video</a></li>
		  <li><a href="newsletter.php">Newsletter</a></li>
		</ul>
	  </li>
	  <li class="menu-has-children <?php if($page == 'career') {echo 'menu-active';} ?>">
		<a>Careers</a>	  
		<ul>
		  <li><a href="career.php">We Are Hiring</a></li>
		</ul>
	  </li>	  
	  <li class="<?php if($page == 'contact') {echo 'menu-active';} ?>"><a href="contact.php">Contact Us</a></li>
	</ul>
  </nav><!-- #nav-menu-container -->
</div>
</header><!-- #header -->