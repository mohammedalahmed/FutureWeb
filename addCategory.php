<?php require 'config.php';

if($_POST && $_SESSION['admin']){
	$title = $_POST['title'];
	$description = $_POST['description'];

	$sql = $conn->query("SELECT 1 FROM `categories` WHERE `title` = '". $title ."'");
	$row = $sql->fetch_assoc();

	if($sql->num_rows > 0){
		echo 'false';
	}else{
		$conn->query("INSERT INTO `categories` (`title`, `description`) VALUES ('". $title ."', '". $description ."')");
		echo 'true';
	}

	$conn->close();
}

if(isset($_GET) && isset($_GET['id']) && $_SESSION['admin']){
	if($_GET['action'] == 'delete'){
		$ident = $_GET['id'];

		$conn->query("DELETE FROM `categories` WHERE `id` = ". $ident ."");
		header('Location: admin_caregories.php');
	}elseif($_GET['action'] == 'update'){
		$ident = $_GET['id'];
		$title = $_GET['title'];
		$description = $_GET['description'];
		
		$conn->query("UPDATE `categories` SET `title` = '". $title ."', `description` = '". $description ."' WHERE `id` = ". $ident ."");
		header('Location: admin_caregories.php');
	}
}