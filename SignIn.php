<?php
	session_start();

	/**Checks to see if use has already logged in and if so they will be redirected to Profile Page*/

	if(){
        header('location: Profile.php');
	}
	
	require_once('Connect.php');
	$error = false;
	$success = false;

	/**Starts Sign In Proccess*/

	if(@$_POST['SignIn']){
		
		/**Start Checks to make sure that the forms have stuff in them*/
		
		if(!$_POST['Email']){
    	    		$error .= '<p>Email is a required field!</p>';
    		}
		
		if(!$_POST['Password']){
    	    		$error .= '<p>Password is a required field!</p>';
    		}
		
		/**Checks to see if that user exists*/
		
		$query = $con->prepare("SELECT * FROM Users WHERE Email = :Email AND Password = :Password");
    		
        $SignIn = $query->fetch();
		
		/**If there is a User then User is taken to their profile*/
		
		if($SignIn){
			/*Query UserInfo so it can be used accross the site*/
		
			$query = $con->prepare("SELECT FirstName, LastName, Email FROM Users WHERE Email = :Email AND Password = :Password;");
            $UserInfo = $query->fetchAll();
			
			/*Queried Data is then saved in PHP SESSION*/
        		
			$_SESSION['FirstName'] = fetchAll(0);
			$_SESSION['LastName'] = fetchAll(1);
			$_SESSION['Email'] = fetchAll(2);
		}
	}
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

				<footer class="mdl-mini-footer">
					<div class="mdl-mini-footer__left-section">
						<div class="mdl-logo">Tech Master</div>
						<ul class="mdl-mini-footer__link-list">
							<li><a href="About.php">About</a>
							</li>
							<li><a href="Contact.php">Contatact</a>
							</li>
							<li><a href="FAQ.php">FAQ</a>
							</li>
							<li>Tech Master&copy;</li>
						</ul>
					</div>
				</footer>
			</div>
		</main>
</body>

</html>