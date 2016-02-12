<?php
session_start();
/*require_once('Connect.php');*/
$error = false;
$success = false;

if(@$_POST['Users']){
    	/**
    	 * Here we start checks to make sure that all forms are filled out correctly
    	 */
    	if(!$_POST['FirstName']){
    	    $error .= '<p>First Name is a required field!</p>';
    	}
		
    	if(!$_POST['LastName']){
    	    $error .= '<p>Last Name is a required field!</p>';
    	}
    	
    	if(!$_POST['Email']){
    	    $error .= '<p>Email is a required field!</p>';
    	}
	
	/**This part validates that the Email is in correct format*/
	
	$Email = test_input($_POST["Email"]);
	
	if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
		$error .= "Invalid email format"; 
	}
	
	/**This part makes sure that there is not another email in the system*/
	
	if($_POST['Email'] == mysql_query("SELECT * FROM Users WHERE Email = '$_POST[Email]'")){
        $error .= '<p>Email Already in Use.</p>';
    	}
    	
    	if(!$_POST['PhoneNumber']){
    	    $error .= '<p>PhoneNumber is a required field!</p>';
    	}
		
	if(!$_POST['CardNumber']){
        $error .= '<p>Card Number is a required field!</p>';
    	}
	
	if(!$_POST['Address']){
        $error .= '<p>Address is a required field!</p>';
    	}
	
	if(!$_POST['Password']){
        $error .= '<p>Password is a required field!</p>';
    	}
	
	if(!$_POST['ConfirmPassword']){
        $error .= '<p>Password is a required field!</p>';
    	}
	
	/**Checks to see if Passwords Match*/
	
	if($_POST['Password'] !== $_POST['ConfirmPassword']){
        $error .= '<p>Passwords do not Match.</p>';
    	}

	/**After validation checks are complete and everthing is ok then we insert data into database here*/
     
	$stmt = $dbh->prepare('INSERT INTO Users (UserID, FirstName, LastName, Email, PhonNumber, CardNumber, Address, Password) VALUES (:UserID, :FirstName, :LastName, :Email, :PhoneNumber, :CardNumber, :Address, :Password)');
	$result = $stmt->execute(
   		array(
		  	'UserID' => Null,
		  	'FirstName' => $_POST['FirstName'],
			'LastName' => $_POST['LastName'],
			'Email' => $_POST['Email'],
			'PhoneNumber' => $_POST['PhoneNumber'],
			'CardNumber' => $_POST['CardNumber'],
			'Address' => $_POST['Address'],
			'Password' => $_POST['Password']
   		)
	);
	
	/**If the data from the form is inserted into data base then it displays a success message*/ 
	
	if($result){
   		$success = "User " . $_POST['Email'] . " was successfully saved.";
		
		/**Now I use PHP SESSIONS to save user data so that it is accesable outside of this page*/
		
		$_SESSION['Registered'] = 1;
		$_SESSION['FirstName'] = $_POST['FirstName'];
		$_SESSION['LastName'] = $_POST['LastName'];
		$_SESSION['Email'] = $_POST['Email'];
		
		/**Takes User to spot to sign in*/
		
        	header("Location: SignIn.php");
	}
	
	else{
   		$success = "There was an error saving " . $_POST['Email'];
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
				<center>
					<h1>Register Here</h1>
					<h4>Please fill out every form area, and then you can be off to a great start able to buy any product on our website you want.</h4>

					<form action="post" class="Form">
						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="text" name="FirstName">
							<label class="mdl-textfield__label" for="sample1">First Name</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="text" name="LastName">
							<label class="mdl-textfield__label" for="sample1">Last Name</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="email" name="Email">
							<label class="mdl-textfield__label" for="sample1">Email</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="tel" name="PhoneNumber">
							<label class="mdl-textfield__label" for="sample1">Phone Number</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type=text name="CardNumber">
							<label class="mdl-textfield__label" for="sample1">Card Number</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="text" name="Address">
							<label class="mdl-textfield__label" for="sample1">Address</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="password" name="Password">
							<label class="mdl-textfield__label" for="sample1">Password</label>
						</div>

						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="password" name="ConfirmPassword">
							<label class="mdl-textfield__label" for="sample1">Confirm Password</label>
						</div>

						<center>
							<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" name="Submit">Submit</button>
						</center>
					</form>
				</center>

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