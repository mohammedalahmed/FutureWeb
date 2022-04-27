<?php include 'admin_header.php';

if(isset($_GET) && $_GET['action'] == 'update'){
	$ident = $_GET['id'];

	$sql = $conn->query("SELECT * FROM `users` WHERE id = '". $ident ."'");
	$row = $sql->fetch_assoc();
?>

	<div class="adminRightSide">
		<main>
			<h2> Add Caregory </h2>
			<hr style="margin-top: 2%; border-bottom: 1px dashed #DEB6AB;">
			<br><br>
			<div id="loggedMsg"></div>

			<form method="post" action="admin_users_action2.php">
				<div>
					<label>Username</label><br>
					<input type="text" name="username" value="<?php echo $row['username']; ?>">
				</div>
				<div>
					<label>Email</label><br>
					<input type="text" name="email" value="<?php echo $row['email']; ?>">
				</div>
				<div>
					<label>Password <small><sup>-keep blank to not changed</sup></small></label><br>
					<input type="text" name="password" value="">
				</div>

				<input type="hidden" name="id" value="<?php echo $ident; ?>">
				<button type="submit">Update</button>
			</form>
		</main>
	</div>

<?php
}
include 'admin_footer.php'; ?>