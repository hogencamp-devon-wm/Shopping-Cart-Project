<?php
    session_start();
    require_once('Connect.php');

    $UserID = $_SESSION['UserID'];

    $Query = $dbh->prepare("SELECT CartID FROM Cart WHERE Users_UserID = :UserID;");

    $Query->execute(
        array(
            'UserID' => $UserID
        )
    );

    $CartID = $Query->fetch();

    $Query3 = $dbh->prepare("SELECT SUM(Cost) FROM CartItems WHERE CartID = :Cart_CartID");
    $Query3->execute(
        array(
            'CartID' => $CartID['CartID']
        )
    );

    $results2 = $Query3->fetchAll();

    echo $;
?>
