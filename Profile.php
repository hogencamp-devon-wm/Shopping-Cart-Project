<?php
    session_start();
    require_once('Connect.php');


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
					<a class="mdl-navigation__link" href="SignOut.php">Sign Out</a>
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
                    <a class="mdl-navigation__link" href="About.php">Account</a>
                    <a class="mdl-navigation__link" href="Profile.php">Profile</a>
                    <a class="mdl-navigation__link" href="FAQ.php">FAQ</a>
                    <a class="mdl-navigation__link" href="About.php">About</a>
                </nav>
            </div>

            <main class="mdl-layout__content">
                <div class="page-content">
                    <h1>Welcome
                         <?php
					          echo $_SESSION['FirstName'];
                         ?>
                    </h1>
                    <h3>This is where all of your information is displayed</h3>

                    <?php
                        $UserID = $_SESSION['UserID'];
                        $Query = $dbh->prepare("SELECT CartID FROM Cart WHERE Users_UserID = :UserID;");

                        $Query->execute(
                            array(
                                'UserID' => $UserID
                            )
                        );

                        $CartID = $Query->fetch();

                        $Query2 = $dbh->prepare("SELECT * FROM CartItems WHERE Cart_CartID = :Cart_CartID");
                        $Query2->execute(
                            array(
                                'Cart_CartID' => $CartID['CartID']
                            )
                        );

                        $results = $Query2->fetchAll();

                    ?>

                    <center>
                        <table class="mdl-data-table mdl-js-data-table">
                            <thead>
                              <tr>
                                <th class="mdl-data-table__cell--non-numeric">Quantity</th>
                                <th class="mdl-data-table__cell--non-numeric">Item</th>
                                <th class="mdl-data-table__cell--non-numeric">Cost</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($results as $row) {
                                        echo "<tr><td class="."mdl-data-table__cell--non-numeric".">".$row['Quantity']."</td><td class="."mdl-data-table__cell--non-numeric".">".$row['Item']."</td><td class="."mdl-data-table__cell--non-numeric".">".$row['Cost']."</td></tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </center>
                </div>
            </main>
        </div>
    </body>
</html>
