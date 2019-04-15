<?php

$totallyNotUserName = "nameOfUser";
$badPassword = "passwordOfGreatStren";

session_start();

$safeUser = filter_var($_POST['uname'], FILTER_SANITIZE_STRING);
$safePass = filter_var($_POST['pwd'], FILTER_SANITIZE_STRING);

if(strlen($safeUser) > 20 ||  strlen($safeUser) > 20){
	header('Location: index.php');
}else{
	if(isset($_SESSION['uname'])){
		header('Location: Home.php');
	}
	else{
		if(($safeUser == $totallyNotUserName) && ($safePass == $badPassword)){
			$_SESSION['uname'] = $totallyNotUserName;
			header('Location: Home.php');
		}
		else{
			header('Location: index.php');
		//echo $safeUser . $totallyNotUserName . $safePass . $badPassword;
		}
	}
}



?>
