<?php require 'config.php';

if($_POST && $_SESSION['admin']){
	$ident = $_POST['id'];

	if($ident != $_SESSION['id']){
		$conn->query("DELETE FROM `users` WHERE id = '". $ident ."'");
		echo 'true';
	}else{
		echo 'false';
	}
}