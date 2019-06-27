<?php 
session_start() ;

	require_once 'includes/classes/DateTable.php';
	require_once 'includes/classes/User.php';
	require_once 'includes/classes/TableGenerator.php';
	require_once 'includes/connection/connection.php';
	$_SESSION['username'] = 'test';

		$usernameLoggedIn = isset($_SESSION['username']) ? $_SESSION['username'] : "" ;
 		$userLoggedIn = new User($con, $usernameLoggedIn);
 ?>