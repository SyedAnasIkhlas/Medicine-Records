<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<!-- NavIcon -->
		<link rel='shortcut icon' href='https://img.icons8.com/ios/50/000000/pill.png'>
		<title>Medicine Records</title>
	<!--ALL CSS STYLE SHEETS-->
		<?php
		 require_once 'requiredFiles/header_css_file.php';
		 require_once 'requiredFiles/header_required_files.php';
		 ?>
		<?php 
			if (!isset($_SESSION['username'])) 
			{
				$_SESSION['notSignIn'] = 'notSignIn';
			}

		 ?>
</head>

<div class="header">
	
</div>

<body>

