<?php include 'admin_header.php'; 

if(isset($_GET) && $_GET['action'] == 'update'){
	$ident = $_GET['id'];
	$name = $_GET['name'];
	$category = $_GET['category'];
?>

	<div class="adminRightSide">
		<main>
			<h2> Add Caregory </h2>
			<hr style="margin-top: 2%; border-bottom: 1px dashed #DEB6AB;">
			<br><br>
			<div id="loggedMsg"></div>

			<form method="get" action="addRequests.php">
				<div>
					<label>Category Title</label>
					<input type="text" name="name" value="<?php echo $name; ?>">
				</div>
				<div>
					<label>Category Description</label>
<select name="category">
<?php
$sql = $conn->query("SELECT * FROM `categories` ORDER BY id ASC");
while($row = $sql->fetch_assoc()){
	if($category == $row['title']){
		echo "<option value='". $row['title'] ."' selected>". $row['title'] ."</option>";
	}else{
		echo "<option value='". $row['title'] ."'>". $row['title'] ."</option>";
	}
}
?>
        <!-- <option value="Designers">Designers</option>
        <option value="Web Service Provider">Web Service Provider</option>
        <option value="Technicians">Technicians</option>
        <option value="Influencers">Influencers</option> -->
      </select>
				</div>

				<input type="hidden" name="id" value="<?php echo $ident; ?>">
				<input type="hidden" name="action" value="update">
				<button type="submit">Update</button>
			</form>
		</main>
	</div>

<?php
}
include 'admin_footer.php'; ?>