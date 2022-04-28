<?php require 'config.php';

if($_POST){
	$ident = $_POST['id'];

	$sql = $conn->query("SELECT * FROM requests WHERE id = '". $ident ."';");
	$row = $sql->fetch_assoc();

	if($row['user'] == $_SESSION["id"]){
		$sql = $conn->query("DELETE FROM requests WHERE id = '". $ident ."';");
		echo 'Successfully Deleted';
		exit;
	}else{
		echo 'Something wrong!';
		exit;
	}
}