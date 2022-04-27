<?php require 'config.php';

if(isset($_POST)){
	$user = $_SESSION["id"];
	$name = $_POST['name'];
	$category = $_POST['category'];

	$sql = $conn->query("SELECT * FROM requests");
	if($sql->num_rows > 0){
		while($row = mysqli_fetch_assoc($sql)){
			if($row['name'] == $name){
				echo 'Already registered this event!';
			}else{
				$sql = $conn->query("INSERT INTO `requests` (`user`, `name`, `category`) VALUES ('". $user ."', '". $name ."', '". $category ."')");
				echo 'Successfully registered';
			}
		}
	}else{
		$sql = $conn->query("INSERT INTO `requests` (`user`, `name`, `category`) VALUES ('". $user ."', '". $name ."', '". $category ."')");
		echo 'Successfully registered';
	}
}