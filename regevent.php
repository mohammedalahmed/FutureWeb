<?php include 'header.php'; 
if(!isset($_SESSION['id'])){ header('Refresh: 0; URL = regform.php'); };?>

    </section>
    <div id="loggedMsg"></div>
    <form class="registration" id="regevent">
      Business Name: <input type="text" name="name" value="" class="input-box-reg"><br>
      Business Category: <select class="" name="category">
<?php
$sql = $conn->query("SELECT * FROM `categories` ORDER BY id ASC");
while($row = $sql->fetch_assoc()){
  echo "<option value='". $row['title'] ."'>". $row['title'] ."</option>";
}
?>
        <!-- <option value="Designers">Designers</option>
        <option value="Web Service Provider">Web Service Provider</option>
        <option value="Technicians">Technicians</option>
        <option value="Influencers">Influencers</option> -->
      </select> <br><br>
      <button type="submit" name="register" class="btn1-reg">Register</button>
    </form>


<?php include 'footer.php'; ?>