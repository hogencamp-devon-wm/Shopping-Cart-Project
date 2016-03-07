<?php
    session_start();
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
                    <div class="TextFull">
                        <h2>Contact Us</h2>

                        <h4>If you have any questions about our product line or something is going wrong with one of our products feel free to contact us at...</h4>

                        <center>
                            <table class="mdl-data-table mdl-js-data-table">
                              <thead>
                                <tr>
                                  <th class="mdl-data-table__cell--non-numeric">Address</th>
                                  <th class="mdl-data-table__cell--non-numeric">Phone</th>
                                  <th class="mdl-data-table__cell--non-numeric">Email</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="mdl-data-table__cell--non-numeric">1600 Amphitheatre Parkway Mountain View, CA 94043 USA</td>
                                  <td class="mdl-data-table__cell--non-numeric">650 253 0000</td>
                                  <td class="mdl-data-table__cell--non-numeric">TechMasterSupport@TechMaster.com</td>
                                </tr>
                              </tbody>
                            </table>
                        </center>
                    </div>

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
        </div>
    </body>
</html>
