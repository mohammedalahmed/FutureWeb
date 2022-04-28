<?php include 'header.php';
if(!isset($_SESSION['id'])){ echo "<script>alert('You need to login')</script>"; header('Refresh: 0; URL = regform.php'); };

$ident = $_SESSION['id'];
$sql = $conn->query("SELECT * FROM users WHERE id = '". $ident ."';");
$row = $sql->fetch_assoc();

?>

    </section>

    <section class="profile">
      <div class="row">
        <div class="profile-heading">
          <h1>User Profile</h1>
        </div>
      </div>
      <div class="row">

        <div class="Profile_leftSide">
          <div id="loggedMsg"></div>

          <form id="updateProfile">
            <div class="row">
              <div class="col">
                <label>Username</label><br>
                <input type="text" name="username" value="<?php echo $row['username']; ?>">
              </div>
            </div>

            <div class="row">
              <div class="col">
                <label>Email</label><br>
                <input type="email" name="email" value="<?php echo $row['email']; ?>">
              </div>
            </div>

            <div class="row">
              <div class="col" style="width:100%;">
                <p> <strong>password</strong>: Keep blank if you don't need to updated </p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Password</label><br>
                <input type="password" name="password" value=""><br>

                <label>Confirm Password</label><br>
                <input type="password" name="cpassword" value="">
              </div>
            </div>

            <div class="row">
              <input type="hidden" name="id" value="<?php echo $ident; ?>">
              <button type="submit" style="color: #069A8E;border: 1px solid #069A8E;">Update</button>
            </div>
          </form>

        </div>
        <div class="Profile_rightSide">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
<?php
$sql = $conn->query("SELECT * FROM requests WHERE user = '". $ident ."';");
$i = 1;
if($sql->num_rows > 0){
  while($row = $sql->fetch_assoc()){
    echo "
                <tr>
                  <td>". $i++ ."</td>
                  <td>". $row['name'] ."</td>
                  <td>". $row['category'] ."</td>
                  <td><a href='updateProfileEvent.php?id=". $row['id'] ."'>UPDATE</a> | <a href='#' onclick = 'deleteThisEvent(". $row['id'] .")'>DELETE</a></td>
                </tr>
    ";
  }
}else{
  echo "
                <tr>
                  <td colspan='4'>Nothing Found!</td>
                </tr>
  ";
}
?>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </section>


<?php include 'footer.php'; ?>
