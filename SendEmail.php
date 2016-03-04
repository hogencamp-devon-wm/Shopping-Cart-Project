<?php
    $dbh = new PDO('mysql:host=localhost; dbname=elvis_store', 'root', 'root');

    $from = 'elmer@makemeelvis.com';
    $subject = $_POST['subject'];
    $text = $_POST['elvismail'];

    $Query = $dbh->prepare("SELECT * FROM email_list;");

    $Query->execute();

    $Results = $Query->fetchAll();

    foreach ($Results as $row) {
        $to = $row['email'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $msg = "Dear $first_name $last_name,\n$text";
        mail($to, $subject, $msg, 'From:' . $from);
        echo 'Email sent to: ' . $to . '<br />';
    }
?>
