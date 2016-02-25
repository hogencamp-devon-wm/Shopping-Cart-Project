<?php
	require_once('Connect.php');
	session_start();

	$Item = "Nexus6P";
	$Cost = 500;
	$Quantity = $_POST['Quantity'];
	$QuantityCost = $Cost * $Quantity;

	if ($Quantity) {
		$UserID = $_SESSION['UserID'];
		
		$Query = $dbh->prepare("SELECT Users_UserID FROM Cart WHERE UserID = :UserID;");

		$Query->execute(
			array(
				'UserID' => $UserID
			)
		);

		$UserID = $Query->fetch();
		
		if($UserID){
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
		
		$Query = $dbh->prepare("INSERT INTO CartI tems (Cart_CartID, Quantity, Item, Cost) 
		VALUES (:CartID, :Quantity, :Item, :Cost);");
		
		$result = $Query->execute(
			array(
				'CartID' => $CartID,
				'Quantity' => $Quantity,
				'Item' => $Item,
				'Cost' => $QuantityCost
			)
		);
         
     //header("Location: Product.php");
	}
?>


<?php echo $Quantity; ?>