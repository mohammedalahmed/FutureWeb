<?php include 'admin_header.php';

if(isset($_POST)){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if($password != ''){
		$password = md5($password);
		$sql = $conn->query("UPDATE `users` SET username = '". $username ."', email = '". $email ."', password = '". $password ."'");

		echo "<script>alert('Successfully updated');</script>";
		header('Location: admin_users.php');
	}else{
		$sql = $conn->query("UPDATE `users` SET username = '". $username ."', email = '". $email ."'");

		echo "<script>alert('Successfully updated');</script>";
		header('Location: admin_users.php');
	}
}


include 'admin_footer.php'; ?>