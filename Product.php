<?php
	session_start();
	require_once('Connect.php');
	$error = false;
	$success = false;
?>

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
					<?php
						if($_SESSION['SignIn'] == true) {
							echo ("<a class='mdl-navigation__link' href='SignOut.php'>Sign Out</a>");
						}

						else {
							echo ("<a class='mdl-navigation__link' href='SignIn.php'>Sign In</a>");
						}
					?>
					<a class="mdl-navigation__link" href="Cart.php">
						<img src="Images/cart.png" width="30px">
						<div class="IconBubble" style="margin-top: 8px;">
							<center>

							</center>
						</div>
					</a>
				</nav>
			</div>
		</header>

		<div class="mdl-layout__drawer">
			<span class="mdl-layout-title">Welcome
				<?php
					if($_SESSION['SignIn'] == true){
						echo $_SESSION['FirstName'];
					}
				?>
			</span>
			<!--PHP out the persons name HERE!-->
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="Profile.php">Profile</a>
				<a class="mdl-navigation__link" href="FAQ.php">FAQ</a>
				<a class="mdl-navigation__link" href="About.php">About</a>
			</nav>
		</div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <h1 class="main_header">Welcome to Products</h1>
                <h3 class="main_header">We have all the products you need to power your Tech Master Life</h3>

                <div class="Products">
				<table>
			    	<tr>
				   	<td class="Product">
						<img class="Image1" src="Images/Nexus6P.png" width="100%">
						<a class="Link" href=""><!--Insert Link for Product HERE!-->
							<h3 class="main_header">Nexus 6P</h3>
						</a>
						<h3 class="Price">$500.00</h3>
						<center>
							<form method="post" action="Nexus6PCart.php" name="Nexus6P" class="ProductForm">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="number" name="Quantity">
								<label class="mdl-textfield__label" for="sample1">Qty</label>
							</div>
					  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">Add To Cart</button>
					  		</form>
						</center>
				   	</td>

				   	<td class="Product">
					  	<img class="Image1" src="Images/Nexus5X.png" width="100%">
					  	<a class="Link" href=""><!--Insert Link for Product HERE!-->
						 	<h3 class="main_header">Nexus 5X</h3>
					  	</a>
					  	<h3 class="Price">$300.00</h3>
					  	<center>
							<form method="post" name="Nexus5X" class="ProductForm" action="Nexus5XCart.php">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="number" name="Quantity">
								<label class="mdl-textfield__label" for="sample1">Qty</label>
							</div>
					  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">Add To Cart</button>
					  		</form>
						</center>
				   	</td>

				   	<td class="Product">
					  	<img class="Image1" src="Images/nexus10.png" width="100%">
					  	<a class="Link" href=""><!--Insert Link for Product HERE!-->
						 	<h3 class="main_header">Nexus 10</h3>
					  	</a>
					  	<h3 class="Price">$500.00</h3>
					  	<center>
							<form method="post" name="Nexus10" class="ProductForm" action="Nexus10Cart.php">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="number" name="Quantity">
								<label class="mdl-textfield__label" for="sample1">Qty</label>
							</div>
					  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">Add To Cart</button>
					  		</form>
						</center>
				   	</td>
			    	</tr>

			    	<tr>
				   	<td class="Product">
					  	<img class="Image1" src="Images/Nexus9.png" width="100%">
					  	<a class="Link" href=""><!--Insert Link for Product HERE!-->
						 	<h3 class="main_header">Nexus 9</h3>
					  	</a>
					  	<h3 class="Price">$400.00</h3>
					  	<center>
							<form method="post" name="Nexus9" class="ProductForm" action="Nexus9Cart.php">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="number" name="Quantity">
								<label class="mdl-textfield__label" for="sample1">Qty</label>
							</div>
					  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">Add To Cart</button>
					  		</form>
						</center>
				   	</td>

				   	<td class="Product">
					  	<img class="Image1" src="Images/Moto.png" width="100%">
					  	<a class="Link" href=""><!--Insert Link for Product HERE!-->
						 	<h3 class="main_header">Moto 360</h3>
					  	</a>
					  	<h3 class="Price">$300.00</h3>
					  	<center>
							<form method="post" name="Moto360" class="ProductForm" action="Moto360Cart.php">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="number" name="Quantity">
								<label class="mdl-textfield__label" for="sample1">Qty</label>
							</div>
					  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">Add To Cart</button>
					  		</form>
						</center>
				   	</td>

				   	<td class="Product">
					  	<img class="Image1" src="Images/Fossil.png" width="100%">
					  	<a class="Link" href=""><!--Insert Link for Product HERE!-->
						 	<h3 class="main_header">Fossil</h3>
					  	</a>
					  	<h3 class="Price">$275.00</h3>
					  	<center>
							<form method="post" name="Fossil" class="ProductForm" action="FossilCart.php">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="number" name="Quantity">
								<label class="mdl-textfield__label" for="sample1">Qty</label>
							</div>
					  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">Add To Cart</button>
					  		</form>
						</center>
				   	</td>
			    	</tr>

			    	<tr>
				   	<td class="Product">
					  	<img class="Image1" src="Images/pixel.png" width="100%">
					  	<a class="Link" href=""><!--Insert Link for Product HERE!-->
						 	<h3 class="main_header">Pixel</h3>
					  	</a>
					  	<h3 class="Price">$1000.00</h3>
					  	<center>
							<form method="post" name="Pixel" class="ProductForm">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="number" name="Quantity" action="PixelCart.php">
								<label class="mdl-textfield__label" for="sample1">Qty</label>
							</div>
					  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">Add To Cart</button>
					  		</form>
						</center>
				   	</td>

				   	<td class="Product">
					  	<img class="Image1" src="Images/Razer.png" width="100%">
					  	<a class="Link" href=""><!--Insert Link for Product HERE!-->
						 	<h3 class="main_header">Razer Blade Stealth</h3>
					  	</a>
					  	<h3 class="Price">$1000.00</h3>
					  	<center>
							<form method="post" name="Razer" class="ProductForm">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="number" name="Quantity" action="RazerCart.php">
								<label class="mdl-textfield__label" for="sample1">Qty</label>
							</div>
					  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">Add To Cart</button>
					  		</form>
						</center>
				   	</td>

				   	<td class="Product">
					  	<img class="Image1" src="Images/BigRedPC.jpg" width="100%">
					  	<a class="Link" href=""><!--Insert Link for Product HERE!-->
						 	<h3 class="main_header">Big Red</h3>
					  	</a>
					  	<h3 class="Price">$2000.00</h3>
					  	<center>
							<form method="post" name="BigRed" class="ProductForm">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="number" name="Quantity" action="BigRedCart.php">
								<label class="mdl-textfield__label" for="sample1">Qty</label>
							</div>
					  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">Add To Cart</button>
					  		</form>
						</center>
				   	</td>
			    	</tr>

			    	<tr>
				   	<td class="Product">
					  	<img class="Image1" src="Images/Yeti.jpg" width="100%">
					  	<a class="Link" href=""><!--Insert Link for Product HERE!-->
						 	<h3 class="main_header">Arctic Yeti</h3>
					  	</a>
					  	<h3 class="Price">$2000.00</h3>
					  	<center>
							<form method="post" name="Yeti" class="ProductForm" action="YetiCart.php">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="number" name="Quantity" action="YetiCart.php">
								<label class="mdl-textfield__label" for="sample1">Qty</label>
							</div>
					  		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">Add To Cart</button>
					  		</form>
						</center>
				   	</td>
			    	</tr>
				</table>
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
