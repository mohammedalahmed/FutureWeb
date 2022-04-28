<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <title>Future Web</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">
  </head>
  <body>

  <section class="header">
    <nav>
      <a href="index.php"><img src="images/logo.png"></a>
      <div class="nav-links">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="partners.php">Partners</a></li>
          <li><a href="reg.php">Register</a></li>
          <?php if(empty($_SESSION['username'])){ ?>
          <li><a href="regform.php">Login</a></li>
          <?php }else{ ?>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="admin.php">Panel</a></li>
          <li><a href="?logout=true" onclick="return confirm('Are you sure to logout?')">Logout</a></li>
          <?php } ?>
        </ul>
      </div>
    </nav>
    <div class="text-box">
      <h1>Future Web Event</h1>
      <p>Where creativity meets modern technology</p>
      <a href="#event" class="btn">Know More</a>
    </div>
