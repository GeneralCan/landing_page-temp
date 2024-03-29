<?php

session_start();
if(isset($_SESSION['ON-OFF'])){
	$ON_OFF = $_SESSION['ON-OFF'];
} else {
	$ON_OFF = 0;
}
?>
<!doctype html>
<html>
<head>
	
<title>Raffleize</title>
	
<link rel="stylesheet" type="text/css" href="css/global.css" />	
<link rel="stylesheet" type="text/css" href="css/landing.css" />
<script type="text/javascript" src="source/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="source/functions.js"></script>

<script type="text/javascript">
	var ON_OFF = "<?php echo $ON_OFF; ?>";
</script>
</head>
<body>

<nav><!-- Navigation -->
	<div id="wrap">
		<a href="index.php"><div id="logo"></div></a><!-- logo in nav, also "home button" -->
		<ul>
			<li><a href="about.html">About</a></li>
		</ul>
	</div>
</nav><!-- End Navigation -->

<div id="wrap">
	<div id="more"></div><!-- arrow pointing to "about" link -->
</div><!-- end wrap -->

<div id="box">
	<div id="wrap">
		<div id="content">
			<h1>Hey there!</h1>
			<p>It seems you're a bit early, but not to worry we're soon going to be <span id="bold">hosting Raffles</span> with many, <span id="bold">many prizes</span>.</p>
			<p class="action" id="action"> <span id="bold">SIGNUP</span> below for <span id="bold">early access</span>.</p>
            <p class="action" id="action2"> <span id="bold">All done!</span></p>
			<!-- start form -->
			<div class="container" id="container"><!-- basically the wrapper for the form -->
			    <form id="signup" method="POST" action="source/submitForm.php">
			        <div class="inputs">
					<input type="email" id="email" name="email" placeholder="e-mail" autofocus /><!-- email form field-->
			        </div><!--end inputs -->
                    <input type="submit" class="button large green" value="submit"/><!-- submit button for email address form -->
			    </form>
			    
			</div><!-- end container, end form-->
		</div><!-- end content -->
		<div id="socail">
			<div id="facebook"></div>
			<div id="twitter"></div>
		</div><!-- end social -->
	</div><!-- end wrap -->
</div><!-- end box -->

<!-- image under main "box div" that has a screenshot of the raffle, not sure if to use on site, like it better without -->
<div id="wrap">
	<div id="raffle"></div>
</div>

</body>
<!-- end comment-->
	
</html>