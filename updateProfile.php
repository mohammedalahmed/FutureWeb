<?php require 'config.php';

if(isset($_POST)){
	$id = $_SESSION["id"];
  $username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

  if($password != ''){
    $password = md5($password);

    $sql = $conn->query("UPDATE users SET username = '". $username ."', email = '". $email ."', password = '". $password ."' WHERE id = '". $id ."'; ");
    echo 'Successfully Updated1';
    exit;

  }else{

    $sql = $conn->query("UPDATE users SET username = '". $username ."', email = '". $email ."' WHERE id = '". $id ."'; ");
    echo 'Successfully Updated2';
    exit;

  }

  echo 'Somthing wrong, try again';
}
