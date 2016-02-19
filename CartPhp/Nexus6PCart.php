<?php
	require_once('Connect.php');
	session_start();

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
		
		$Query = $dbh->prepare("SELECT CartID, CartCost FROM Cart WHERE UserID = :UserID;");

		$Query->execute(
			array(
				'UserID'=>$UserID 
			)
		);

		$UserCartInfo = $Query->fetch();
		
		$CartID = $UserCartInfo[0];
		$CartCost =UserCartInfo[1];
	}
?>