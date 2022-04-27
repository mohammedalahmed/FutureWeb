<?php require 'config.php';

if(isset($_GET) && isset($_GET['id']) && $_SESSION['admin']){
	if($_GET['action'] == 'delete'){
		$ident = $_GET['id'];

		$conn->query("DELETE FROM `requests` WHERE `id` = ". $ident ."");
		header('Location: admin_requests.php');
	}elseif($_GET['action'] == 'update'){
		$ident = $_GET['id'];
		$name = $_GET['name'];
		$category = $_GET['category'];
		
		$conn->query("UPDATE `requests` SET `name` = '". $name ."', `category` = '". $category ."' WHERE `id` = ". $ident ."");
		header('Location: admin_requests.php');
	}
}