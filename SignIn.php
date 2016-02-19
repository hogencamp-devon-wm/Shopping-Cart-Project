<?php
     session_start();
     require_once('Connect.php');
	$error = false;

     /**Checks to see if user has already logged in and if so they will be redirected to Profile Page*/

     if(@$_SESSION['SignIn'] == true){
          header('location: Profile.php');
     }

     /**Starts Sign In Proccess*/

     if(@$_POST['SignIn']){

          /**Start Checks to make sure that the forms have stuff in them*/

          if(!$_POST['Email']){
               $error = true;
          }

          if(!$_POST['Password']){
               $error = true;
          }

          /**Checks to see if that user exists*/
          $Query2 = $dbh->prepare("SELECT UserID, FirstName, LastName, Email FROM Users WHERE Email = :Email AND Password = :Password;");

		//This Replaces the :Email and :Password above with the real values that need to be used in the query.
		$Query2->execute(
			array(
				'Email'=>$_POST['Email'], 
				'Password'=>$_POST['Password']
			)
		);

		$UserInfo = $Query2->fetch();
		
        	//If there is an account linked to entered info then we can save data and take them to profile
		if($UserInfo) {
			/*Queried Data is then saved in PHP SESSION*/
			$_SESSION['UserID'] = $UserInfo[0];
			$_SESSION['FirstName'] = $UserInfo[1];
			$_SESSION['LastName'] = $UserInfo[2];
			$_SESSION['Email'] = $UserInfo[3];
			$_SESSION['SignIn'] = true;
		
			header('location: Profile.php');
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
         <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="Profile.php">Profile</a>
            <a class="mdl-navigation__link" href="FAQ.php">FAQ</a>
            <a class="mdl-navigation__link" href="About.php">About</a>
         </nav>
      </div>
      
      <main class="mdl-layout__content">
         <div class="page-content">
            <center>
               <h1>Sign In</h1>
               <form method="post" class="Form" name="SignIn">
                  <div class="mdl-textfield mdl-js-textfield">
                     <input class="mdl-textfield__input" type="text" name="Email">
                     <label class="mdl-textfield__label" for="sample1">Email</label>
                  </div>
                  <div class="mdl-textfield mdl-js-textfield">
                     <input class="mdl-textfield__input" type="password" name="Password">
                     <label class="mdl-textfield__label" for="sample1">Password</label>
                  </div>
                  <center>
                     <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" name="SignIn" value="1">Sign In</button>
                  </center>
				<?php
					if($error){
						echo "<h6 style='color: red;'>Fill each input out</h6>";
					}
				?>
               </form>
               <center>
                  <h6>Dont Have an account, Register Here.</h6>
                  <a href="Register.php">
                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="Register">Register</button>
                  </a>
               </center>
            </center>
		    
            <footer class="mdl-mini-footer" style="position: fixed; bottom: 0; width: 100%;">
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