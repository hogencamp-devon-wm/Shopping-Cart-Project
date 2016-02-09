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
                        <div class="ImageHeader">
                            <img src="Images/devices.jpg" width="100%">
                        </div>
                           
                        <h2>About Us</h2>
                        
                        <h4>Here at Tech Master we want to provide you with the Technology to Master your
					    life in the most productive way possible. We have products in every catagory to 
					    keep you connected to what matters. We have Phones, Tablets, Watches, Laptops, and Desktops. 
                        We have a passion for quality and want to make sure you have the best experience possible with our 
                        products.</h4> 
                    </div>
                    
                    <footer class="mdl-mini-footer">
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
        </div>
    </body>
</html>