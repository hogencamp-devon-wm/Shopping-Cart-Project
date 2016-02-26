<?php
     require_once('Connect.php');
     session_start();
     
     $Item = "Nexus6P";
     $Cost = 500;
     $Quantity = $_POST['Quantity'];
     $QuantityCost = $Cost * $Quantity;
     
     $UserID = $_SESSION['UserID'];
     
     //Insert Into Car Table the UserID
     $stmt = $dbh->prepare("INSERT INTO Cart (Users_UserID) VALUES (:UserID);");
     $result = $stmt->execute(   
          array(  
               'UserID' => $UserID
          )
     );
		
     $Query = $dbh->prepare("SELECT CartID FROM Cart WHERE Users_UserID = :UserID;");

     $Query->execute(
          array(
               'UserID' => $UserID 
          )
     );

     $CartID = $Query->fetch();
			
     $Query = $dbh->prepare("INSERT INTO CartItems (Cart_CartID, Quantity, Item, Cost) 
     VALUES (:CartID, :Quantity, :Item, :Cost);");
		

print_r($CartID);
     $result = $Query->execute(
          array(
               'CartID' => $CartID['CartID'],
               'Quantity' => $Quantity,
               'Item' => $Item,
               'Cost' => $QuantityCost
          )
     );
         
     //header("Location: Product.php");
?>



