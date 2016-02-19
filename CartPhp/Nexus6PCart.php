<?php
	require_once('Connect.php');
	session_start();

	$Item = "Nexus6P";
	$Cost = 500;
	$Quantity = $_POST['Quantity'];
	$QuantityCost = $Cost * $Quantity;

	if($_POST['Quantity'] != 0){
		$_SESSION['UserID'] = $UserID;
		
		$Query = $dbh->prepare("SELECT Users_UserID FROM Cart WHERE UserID = :UserID;");

		$Query->execute(
			array(
				'UserID'=>$UserID 
			)
		);

		$CartUser = $Query->fetch();
		
		if($CartUser){
			//Insert Into Car Table the UserID
			$stmt = $dbh->prepare("INSERT INTO Cart (User_UserID) VALUES (:UserID);");
			$result = $stmt->execute(   
	  			array(  
		  			'UserID' => $UserID
		  		)
			);
		}
		
		$Query = $dbh->prepare("SELECT CartID FROM Cart WHERE UserID = :UserID;");

		$Query->execute(
			array(
				'UserID'=>$UserID 
			)
		);

		$UserCartInfo = $Query->fetch();
		
		$CartID = $UserCartInfo;
		
		$Query = $dbh->prepare("INSERT INTO CartItems (Cart_CartID, Quantity, Item, Cost) 
		VALUES (:CartID, :Quantity, :Item, :Cost);");
		
		$result = $stmt->execute(
			array(
				'CartID' => $CartID,
				'Quantity' => $Quantity,
				'Item' => $Item,
				'Cost' => $QuantityCost
			)
		);
	}
?>