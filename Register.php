<?php
require_once('Connect.php');
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
        $error .= '<p>Last Name is a required field!</p>';
    }
    
    if(!$_POST['LastName']){
        $error .= '<p>Last Name is a required field!</p>';
    }

    /**After validation checks are complete and everthing is ok then we insert data into database here*/
     
    $stmt = $dbh->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');
    $result = $stmt->execute(
        array(
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
        )
    );

    if($result){
        $success = "User " . $_POST['email'] . " was successfully saved.";
    }
    
    else{
        $success = "There was an error saving " . $_POST['email'];
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
                    <a class="mdl-navigation__link" href="Profile.php">Profile</a>
                    <a class="mdl-navigation__link" href="Contact.php">Contact</a>
                    <a class="mdl-navigation__link" href="About.php">About</a>
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
                    <form action="#" class="Form">
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text">
                            <label class="mdl-textfield__label" for="sample1">First Name</label>
                        </div>
                        
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" name="">
                            <label class="mdl-textfield__label" for="sample1">Last Name</label>
                        </div>
                        
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="email" name="">
                            <label class="mdl-textfield__label" for="sample1">Email</label>
                        </div>
                        
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="tel" name="">
                            <label class="mdl-textfield__label" for="sample1">Phone Number</label>
                        </div>
                        
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type=text name="">
                            <label class="mdl-textfield__label" for="sample1">Card Number</label>
                        </div>
                        
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="text" name="">
                            <label class="mdl-textfield__label" for="sample1">Address</label>
                        </div>
                        
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="password" name="">
                            <label class="mdl-textfield__label" for="sample1">Password</label>
                        </div>
                        
                        <div class="mdl-textfield mdl-js-textfield">
                            <input class="mdl-textfield__input" type="password" name="">
                            <label class="mdl-textfield__label" for="sample1">Confirm Password</label>
                        </div>
                        
                        <center>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" name="Submit">Submit</button>
                        </center>
                    </form>
                </center>    

               <footer class="mdl-mini-footer" style="position: fixed; bottom: 0; width: 100%;">
			       <div class="mdl-mini-footer__left-section">
				       <div class="mdl-logo">Tech Master</div>
				       <ul class="mdl-mini-footer__link-list">
					       <li><a href="About.php">About</a></li>
					       <li><a href="Contact.php">Contatact</a></li>
					       <li><a href="FAQ.php">FAQ</a></li>
					       <li>Tech Master&copy;</li>
				       </ul>
			       </div>
               </footer>
            </div>
        </main>
</body>

</html>