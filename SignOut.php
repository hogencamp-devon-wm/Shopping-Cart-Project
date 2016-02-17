<?php
	session_start();
	require_once('Connect.php');
	$_SESSION['SignIn'] = false;
	header('location: Index.php');
?>