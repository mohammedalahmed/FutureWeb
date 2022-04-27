<?php include 'admin_header.php'; ?>

	<div class="adminRightSide">
		<main>
			<h2> User Requests </h2>
			<hr style="margin-top: 2%; border-bottom: 1px dashed #DEB6AB;">
			<br><br>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>User</th>
						<th>Name</th>
						<th>Category</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody>
<?php
$sql = $conn->query("SELECT * FROM requests ORDER BY id ASC");
if($sql->num_rows > 0){
	$i = 1;
	while($row = mysqli_fetch_assoc($sql)){
		$sql2 = $conn->query("SELECT * FROM users WHERE id = '". $row['user'] ."'");
		$row2 = mysqli_fetch_assoc($sql2);
		echo "
						<tr>
							<td>". $i++ ."</td>
							<td>". $row2['username'] ."</td>
							<td>". $row['name'] ."</td>
							<td>". $row['category'] ."</td>
							<td><a href='admin_requests2.php?action=update&id=". $row['id'] ."&name=". $row['name'] ."&category=". $row['category'] ."'>EDIT</a> | <a href='addRequests.php?action=delete&id=". $row['id'] ."' onclick=\"return confirm('Are you sure?')\">DELETE</a></td>
						</tr>
		";
	}
}else{
		echo "
						<tr>
							<td colspan='5'>NOTHING FOUND!</td>
						</tr>
		";
}
?>

				</tbody>
			</table>
		</main>
	</div>

<?php include 'admin_footer.php'; ?>