<?php include 'admin_header.php'; ?>

	<div class="adminRightSide">
		<main>
			<h2> admin caregories </h2>
			<hr style="margin-top: 2%; border-bottom: 1px dashed #DEB6AB;">
			<br><br>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>title</th>
						<th>description</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan='4'><a href="./admin_caregories2.php">ADD NEW CATEGORY</a></td>
					</tr>
<?php
$sql = $conn->query("SELECT * FROM categories ORDER BY id ASC");
if($sql->num_rows > 0){
	$i = 1;
	while($row = mysqli_fetch_assoc($sql)){
		echo "
						<tr>
							<td>". $i++ ."</td>
							<td>". $row['title'] ."</td>
							<td>". $row['description'] ."</td>
							<td><a href='admin_caregories2.php?action=update&id=". $row['id'] ."&title=". $row['title'] ."&description=". $row['description'] ."'>EDIT</a> | <a href='addCategory.php?action=delete&id=". $row['id'] ."' onclick=\"return confirm('Are you sure?')\">DELETE</a></td>
						</tr>
		";
	}
}else{
		echo "
						<tr>
							<td colspan='4'>NOTHING FOUND!</td>
						</tr>
		";
}
?>

				</tbody>
			</table>
		</main>
	</div>

<?php include 'admin_footer.php'; ?>