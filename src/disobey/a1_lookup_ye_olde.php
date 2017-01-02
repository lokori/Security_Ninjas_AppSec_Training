<!DOCTYPE HTML>

<html>
  <head>
    <title>A1 : INJECTION</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
      <link rel="stylesheet" href="css/skel.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/style-desktop.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
  </head>
  <body>
    
    <!-- Nav -->
    <nav id="nav">
      <ul class="container">
	<img src="images/flamingo_pieni.png" width="8.5%" height="8.5%" align="left"/>
	<img src="images/ninja.png" alt="" width="12.5%" height="12.5%" align="right" />
	<li><a href="a1.html">A1</a></li>
					<!-- <li><img src="images/opendns_logo.png" alt="" width="65.5%" height="65.5%" align="right" /> -->
				</ul>
			</nav>

		
			<div class="wrapper style2">
				<article id="work">
					<header>
						<h5>A1 : Injection</h5>
					</header>
					<div class="container">
							<?php

							$domain = $_GET['site'];

							echo "<b>Whois Lookup results for <font color='green'>$domain</font> <br><br><br></b>";
							$cmd = "whois ".$domain;

							echo $result = system($cmd);


							//echo $result = system('whois $domain');

							?>
							</div>
		
						
					</div>
					
				</article>
			</div>

		
		
			<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
				
						<p>Injektio - uhka vai mahdollisuus?</p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
						</ul>
					</footer>
				</article>
			</div>

	</body>
</html>

