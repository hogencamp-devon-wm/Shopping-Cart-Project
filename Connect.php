<?php
try {
    $dbh = new PDO('mysql:host=localhost; dbname=TechMaster', 'root', 'root');
} 

catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>