<?php require 'config.php';

if(isset($_POST)){
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$pass = md5($pass);

	$sql = $conn->query("SELECT * FROM `users` WHERE `email` = '". $email ."' and password = '". $pass ."'");
	$row = $sql->fetch_assoc();

	if($sql->num_rows > 0){
		if($row['password'] == $pass){
			$_SESSION['username'] = $row['username'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['admin'] = $row['admin'];
			echo 'true';
		}else{
			echo 'false';
		}
	}else{
		echo 'false';
	}

	$conn->close();
}