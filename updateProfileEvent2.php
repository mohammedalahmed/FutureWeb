<?php require 'config.php';

if(isset($_POST)){
  $id = $_POST["id"];
  $name = $_POST['name'];
  $category = $_POST['category'];

  $sql = $conn->query("UPDATE requests SET name = '". $name ."', category = '". $category ."' WHERE id = '". $id ."'; ");
  echo 'Successfully Updated';
  exit;

  echo 'Somthing wrong, try again';
}
