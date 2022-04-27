<?php include 'admin_header.php'; ?>

	<div class="adminRightSide">
		<main>
			<h2> admin caregories </h2>
			<hr style="margin-top: 2%; border-bottom: 1px dashed #DEB6AB;">
			<br><br>
			<div id="loggedMsg"></div>
			
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>username</th>
						<th>email</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan='4'><a href="./admin_caregories2.php">ADD NEW USER</a></td>
					</tr>
<?php
$sql = $conn->query("SELECT * FROM users ORDER BY id ASC");
if($sql->num_rows > 0){
	$i = 1;
	while($row = mysqli_fetch_assoc($sql)){
		echo "
						<tr>
							<td>". $i++ ."</td>
							<td>". $row['username'] ."</td>
							<td>". $row['email'] ."</td>
							<td><a href='admin_users_action.php?action=update&id=". $row['id'] ."'>EDIT</a> | <a onclick='deleteUser(". $row['id'] .")'>DELETE</a></td>
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