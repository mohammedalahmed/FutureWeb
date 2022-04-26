<?php include 'admin_header.php'; 

if(isset($_GET) && $_GET['action'] == 'update'){
	$ident = $_GET['id'];
	$title = $_GET['title'];
	$description = $_GET['description'];
?>

	<div class="adminRightSide">
		<main>
			<h2> Add Caregory </h2>
			<hr style="margin-top: 2%; border-bottom: 1px dashed #DEB6AB;">
			<br><br>
			<div id="loggedMsg"></div>

			<form method="get" action="addCategory.php">
				<div>
					<label>Category Title</label>
					<input type="text" name="title" value="<?php echo $title; ?>">
				</div>
				<div>
					<label>Category Description</label>
					<input type="text" name="description" value="<?php echo $description; ?>">
				</div>

				<input type="hidden" name="id" value="<?php echo $ident; ?>">
				<input type="hidden" name="action" value="update">
				<button type="submit">Update</button>
			</form>
		</main>
	</div>

<?php
}else{
?>

	<div class="adminRightSide">
		<main>
			<h2> Add Caregory </h2>
			<hr style="margin-top: 2%; border-bottom: 1px dashed #DEB6AB;">
			<br><br>
			<div id="loggedMsg"></div>

			<form id="addingCategory">
				<div>
					<label>Category Title</label>
					<input type="text" name="title" placeholder="category title" required>
				</div>
				<div>
					<label>Category Description</label>
					<input type="text" name="description" placeholder="category description" required>
				</div>

				<button type="submit">Add</button>
			</form>
		</main>
	</div>

<?php } include 'admin_footer.php'; ?>