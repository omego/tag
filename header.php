<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Sidebar Transitions</title>
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
		<script src="js/jquery.qrcode-0.7.0.min.js"></script>
		<script src="js/modernizr.custom.js"></script>

		
	</head>
	<body>
		<div id="st-container" class="st-container">
			<!-- 	
				example menus 
				these menus will be on top of the push wrapper
			-->
			</nav>

			<nav class="st-menu st-effect-12" id="menu-12">
				<h2 class="icon icon-stack">Sidebar</h2>
				<ul>
					<li><a class="icon " id="closeMenu1" href="page1.php">Small Size</a></li>
					<li><a class="icon " id="closeMenu2" href="page2.php">Medium Size</a></li>
					<li><a class="icon " id="closeMenu3" href="page3.php">Large Size</a></li>
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
							<img class="logo" src="images/logo.png">
							<h1>Office Signage Creator <span>Fill, create and print.</span></h1>
							<div id="st-trigger-effects">
							<button data-effect="st-effect-12">Change Size</button>
							</div>
						</header>

