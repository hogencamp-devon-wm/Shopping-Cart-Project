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
                    <h1 class="main_header">This is your one stop </h1>
                    <h1 class="main_header">shop for all of the Tech you need.</h1>
                    
                    <div class="ImageHeader">
                        <img src="Images/devices.jpg" width="100%">
                    </div>
                    <!--Add Description of Company-->
                    <div class="TextFull">
                        <h4>Insert Company description here</h4>
                        <h6>Company Description paragraph</h6>  
                    </div>
                    
                    <div class="ImageOver">
                        <img class="Image1" src="Images/Nexus.png" width="100%">
                        <h1 class="TextOver">Nexus 5X & 6P</h1>
                        <br>
                        <h3 class="TextOverDescription">These are our newest Android Marshmallow Phones</h3>
                    </div>
                    
                    <img class="Image2" src="Images/tablet.png" width="70%">
                    <img class="Image1" src="Images/watch.png" width="70%">
                    <img class="Image2" src="Images/chromebook.png" width="70%">
                    <img class="Image1" src="Images/BigRed.jpg" width="70%">
                </div>
            </main>
        </div>
    </body>
</html>