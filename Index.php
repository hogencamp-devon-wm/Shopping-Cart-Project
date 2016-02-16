<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="CSS/material.min.css">
	<script src="CSS/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="CSS/Stylesheet.css">
</head>

<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">
                        <a class="mdl-layout-title-logo" href="Index.php">Tech Master</a>
                    </span>

				<div class="mdl-layout-spacer"></div>
				<nav class="mdl-navigation mdl-layout--large-screen-only">
					<a class="mdl-navigation__link" href="Product.php">Products</a>
					<a class="mdl-navigation__link" href="Contact.php">Contact</a>
					<a class="mdl-navigation__link" href="About.php">About</a>
					<a class="mdl-navigation__link" href="SignIn.php">Sign In</a>
					<a class="mdl-navigation__link" href="Cart.php">
						<img src="Images/cart.png" width="30px">
						<div class="IconBubble" style="margin-top: 8px;">
							<center>
								<p>3</p>
							</center>
						</div>
					</a>
				</nav>
			</div>
		</header>

		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">Welcome</span>
			<!--PHP out the persons name HERE!-->
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="Profile.php">Profile</a>
				<a class="mdl-navigation__link" href="FAQ.php">FAQ</a>
				<a class="mdl-navigation__link" href="About.php">About</a>
			</nav>
		</div>

		<main class="mdl-layout__content">
			<div class="page-content">
				<h1 class="main_header">This is your one stop </h1>
				<h1 class="main_header">shop for all of the Tech you need.</h1>

				<div class="ImageHeader">
					<img src="Images/devices.jpg" width="100%">
				</div>
				<!--Add Description of Company-->
				<div class="TextFull">
					<h2>OUR COMPANY & GOALS</h2>
					<h4>Here at Tech Master we want to provide you with the Technology to Master your life in the most productive way possible. We have products in every catagory to keep you connected to what matters.</h4>
				</div>

				<div class="ImageOver">
					<img class="Image1" src="Images/Nexus.png" width="100%">

					<h1 class="TextOver">Nexus 5X & 6P</h1>
					<br>
					<h3 class="TextOverDescription">These are our newest Android Marshmallow Phones</h3>

					<a href="Product.php">
						<h4 class="TextOverDescription2">SHOP NOW</h4>
						<!--INSERT LINK TO PRODUCTS/PRODUCT PAGE FOR 2 PRODUCTS-->
						<img src="Images/Arrow.png" class="Arrow" width="30px">
					</a>
				</div>

				<br>

				<div class="ImageOver">
					<img class="Image2" src="Images/tablet.png" width="100%">
					<h1 class="TextOver">Tablets</h1>
					<br>
					<h3 class="TextOverDescription">Premium design with the best of Google built in, so 
				 		you can work and play any way you want to</h3>

					<a href="Product.php">
						<h4 class="TextOverDescription3">SHOP NOW</h4>
						<!--INSERT LINK TO PRODUCTS/PRODUCT PAGE FOR 2 PRODUCTS-->
						<img src="Images/Arrow.png" class="Arrow2" width="30px">
					</a>
				</div>

				<br>

				<div class="ImageOver">
					<img class="Image1" src="Images/watch.png" width="100%">
					<h1 class="TextOver">Android Wear</h1>
					<br>
					<h3 class="TextOverDescription">Watches that bring you information at a glance</h3>

					<a href="Product.php">
						<h4 class="TextOverDescription2">SHOP NOW</h4>
						<!--INSERT LINK TO PRODUCTS/PRODUCT PAGE FOR 2 PRODUCTS-->
						<img src="Images/Arrow.png" class="Arrow" width="30px">
					</a>
				</div>

				<br>

				<div class="ImageOver">
					<img class="Image2" src="Images/chromebook.png" width="100%">
					<h1 class="TextOver">Laptops</h1>
					<br>
					<h3 class="TextOverDescription">Easy-to-use labptops for everyday work and play</h3>

					<a href="Product.php">
						<h4 class="TextOverDescription2">SHOP NOW</h4>
						<!--INSERT LINK TO PRODUCTS/PRODUCT PAGE FOR 2 PRODUCTS-->
						<img src="Images/Arrow.png" class="Arrow" width="30px">
					</a>
				</div>

				<br>

				<div class="ImageOver3">
					<h1 class="TextOverDesktop">Desktops</h1>
					<br>
					<h3 class="TextOverDescriptionDesktop">Powerfull Desktops to keep you working hard all day</h3>
					<br>
					<a href="Product.php">
						<h4 class="TextOverLinkDesktop">SHOP NOW</h4>
					</a>
					<img class="Image1" src="Images/BigRed.jpg" width="100%">
				</div>
			</div>

			<footer class="mdl-mini-footer">
				<div class="mdl-mini-footer__left-section">
					<div class="mdl-logo">Tech Master</div>
					<ul class="mdl-mini-footer__link-list">
						<li>
							<a href="About.php">About</a>
						</li>
						<li>
							<a href="Contact.php">Contatact</a>
						</li>
						<li>
							<a href="FAQ.php">FAQ</a>
						</li>
						<li>Tech Master&copy;</li>
					</ul>
				</div>
			</footer>
		</main>
	</div>
</body>

</html>