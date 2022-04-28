<?php include 'header.php';
if(!isset($_SESSION['id'])){ echo "<script>alert('You need to login')</script>"; header('Refresh: 0; URL = regform.php'); };

if(isset($_GET)){
	$id = $_GET["id"];

	$sql = $conn->query("SELECT * FROM requests WHERE id = '". $id ."'; ");
	$row = $sql->fetch_assoc();

	if($row['user'] == $_SESSION["id"]){
?>

    </section>

    <section class="profile">
      <div class="row">
        <div class="profile-heading">
          <h1>User Profile</h1>
        </div>
      </div>
      <div class="row">


          <form id="updateProfileEvent">

            <div class="row">
              <div class="col">
                <label>Name</label><br>
                <input type="text" name="name" value="<?php echo $row['name']; ?>">
              </div>
            </div>

            <div class="row">
              <div class="col">
                <label>Category</label><br>
				<select name="category">
				<?php
				$sql = $conn->query("SELECT * FROM `categories` ORDER BY id ASC");
				while($row2 = $sql->fetch_assoc()){
					if($row['category'] == $row2['title']){
						echo "<option value='". $row2['title'] ."' selected>". $row2['title'] ."</option>";
					}else{
						echo "<option value='". $row2['title'] ."'>". $row2['title'] ."</option>";
					}
				}
				?>
				</select>
              </div>
            </div>

            <div class="row">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <button type="submit" style="color: #069A8E;border: 1px solid #069A8E;">Update</button>
            </div>
          </form>


      </div>
    </section>


<?php include 'footer.php'; ?>

<?php
	}
}