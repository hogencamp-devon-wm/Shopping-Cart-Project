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
                        	    <img src = "Images/cart.png" width = "30px">
                        	    <div class="IconBubble" style="margin-top: 8px;"><center><p>3</p></center></div>
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
                    <div class="TextFull">
                        <h1>FAQ</h1>
                        <h4>Have any questions about Tech Master and how to get what you want out of the site well then your in the right spot for answers to all of your questions.</h4> 
                    </div>
                    
                    <center>
                        <ul class="demo-list-item">
                          <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">What OS do your products run?</span>
                            <span class="mdl-list__item-primary-content">-For Phones we run Android Marshmallow, Tablets Android Marshmallow, Laptops Chrome OS, and Windows 10, and Desktops are Windows 10.</span>
                          </li>
                          
                          <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">How do I buy Products?</span>
                            <span class="mdl-list__item-primary-content">-First Register for Account</span>
                          </li>
                          
                          <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content"></span>
                            <span class="mdl-list__item-primary-content">-</span>
                          </li>
                        </ul>
                    </center>
                </div>
            </main>
        </div>
    </body>
</html>