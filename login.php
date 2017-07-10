<?php 
session_start();

if (isset($_POST['pass']) && $_POST['pass'] != null) {
	if ($_POST['pass'] == "12345") {
		$_SESSION['is_admin'] = true;
		header('Location: index.php');
	} else {
		echo "Error";
	}
}



include '/templates/login_tm.php';