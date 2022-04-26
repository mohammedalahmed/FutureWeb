<?php require 'config.php';

if(isset($_POST)){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$pass = md5($pass);

	$sql = $conn->query("SELECT 1 FROM `users` WHERE `username` = '". $name ."' or `email` = '". $email ."'");
	
	if($sql->num_rows > 0){
		echo "Duplicated Account";
	}else{
		$conn->query("INSERT INTO `users` (`username`, `email`, `password`) VALUES ('". $name ."', '". $email ."', '". $pass ."')");
		echo "Success Register";
	}

	$conn->close();
}