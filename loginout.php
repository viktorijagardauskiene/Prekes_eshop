<?php 
session_start();


		$_SESSION['is_admin'] = false;
		// uset($_SESSION['is_admin']) antras variantas
		header('Location: index.php'); // peradresuoja
	
