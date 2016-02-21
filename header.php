<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Office Signage Creator</title>
		<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
		<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/icons.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/my.css" />
		<link rel="stylesheet" type="text/css" href="css/icemoon.css" />
		<link rel="stylesheet" href="style.css" />

		<script src="js/jquery.js"></script>
		<script src="js/myjs.js"></script>

		<script src="js/modernizr.custom.js"></script>
		   <script>
		// handles the click event, sends the query
		function getSuccessOutput() {




			    $.ajax({
			        url:'api.php',
			        complete: function (response) {
			            $('#output').html(response.responseText);
			        },
			        error: function () {
			            $('#output').html('Bummer: there was an error!');
			        },
			    });
			    return false;

		}
		  </script>

	</head>
	<body>

	<? error_reporting(0); ?>
	<?php $IE6 = (preg_match('MSIE 6',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $IE7 = (preg_match('MSIE 7',$_SERVER['HTTP_USER_AGENT'])) ? true : false;
    $IE8 = (preg_match('MSIE 8',$_SERVER['HTTP_USER_AGENT'])) ? true : false;

if (($IE6 == 1) || ($IE7 == 1) || ($IE8 == 1)) {
 // Do fallback stuff that old browsers can do here
?>
<h1 style="color:red;text-align:center;">You are using Internet Explorer <br><span>Please, use Google Chrome or Mozilla Firefox.</span></h1>
echo "<img src='chrome.png'>";
echo "<img src='firefox.png'>";
<?

} else {

	session_start();
$count_my_page = ("counter.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);

?>


		<div id="st-container" class="st-container">
			<!--
				example menus
				these menus will be on top of the push wrapper
			-->
			</nav>

			<nav class="st-menu st-effect-12" id="menu-12">
				<h2 class="icon icon-stack">Sidebar</h2>
				<ul>
					<li><a class="icon " id="closeMenu1" href="page1.php">Small Size (5.1cm x 21cm)</a></li>
					<li><a class="icon " id="closeMenu2" href="page2.php">Medium Size (8cm x 21cm)</a></li>
					<li><a class="icon " id="closeMenu1" href="page3.php">Large Size (12cm x 21cm)</a></li>
				</ul>
			</nav>

			<!-- content push wrapper -->
			<div class="st-pusher">
				<!--
					example menus
					these menus will be under the push wrapper
				-->

				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
						<!-- Top Navigation -->
						<header class="codrops-header">
							<a href="index.php"><img class="logo" src="images/logo.png"></a>
							<h1>Office Signage Creator <span>Fill, create and print.</span></h1>
							<div id="st-trigger-effects">
							<button data-effect="st-effect-12">Choose Size</button>
							</div>

						</header>
<?php } ?>
