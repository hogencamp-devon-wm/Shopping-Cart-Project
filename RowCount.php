<?php
    session_start();
    require_once('Connect.php');

    $CartID = 10;

    $Query = $dbh->prepare("SELECT SUM(Cost) FROM CartItems WHERE Cart_CartID = :CartID;");
    $Query->execute(
        array(
            'CartID' => $CartID['CartID']
        )
    );

    $results = $Query->fetch();

    echo $results;
?>
