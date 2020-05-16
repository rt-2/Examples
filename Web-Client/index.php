<!DOCTYPE html>
<?php
    	require_once('./includes/config.inc.php');
	// Init(s)
	//Constant(s)
	define('PAGE', [
		'TITLE' => 'Welcome',
	]);
	//Var(s)
?>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">

	<!-- SEO(s) -->
	<title><?=CONFIG['NAME']?> - <?=PAGE['TITLE']?></title>
	<meta name="description" content="<?=CONFIG['DESCRIPTION']?>" />
	<meta name="keywords" content="<?=CONFIG['KEYWORDS']?>" />

	<!-- Favicon(s) -->
	<!-- With the help of https://realfavicongenerator.net/ -->
	
	<!-- Style(s) -->
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/10up-sanitize.css/5.0.0/sanitize.min.css" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="resources/css/base.css" />
	<link rel="stylesheet" type="text/css" href="resources/css/fonts.css" />
	<link rel="stylesheet/less" type="text/css" href="resources/css/styles.less" />
	
	<!-- Dependencie(s) -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" crossorigin="anonymous"></script>
	
	<!-- Script(s) -->

	
</head>

<body class="smooth-font">
	<div id="content" class="container">
		<header>

		</header>
		<nav>

		</nav>
		<aside>

		</aside>
		<main>

		This website is not using any image;<br />

		</main>
		<footer>

			<div class="">
				<div class="">&copy;</div>
				<div class="">2010-<?php echo date("Y"); ?></div>
				<div class="">Yanick<br />Coulombe</div>
			</div>

			footer | Footer1 | <a href="#">href 1</a> | <a href="#">Old Website</a>

		</footer>
	</div>
</body>
</html>
