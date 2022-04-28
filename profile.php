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

        <div id="loggedMsg"></div>

        <form id="updateProfile">
          <div class="col">
            <label>Username</label><br>
            <input type="text" name="username" value="<?php echo $row['username']; ?>">
          </div>

          <div class="col">
            <label>Email</label><br>
            <input type="email" name="email" value="<?php echo $row['email']; ?>">
          </div>

          <div class="col">
            <label>Password</label><br>
            <input type="password" name="password" value=""><br>

            <label>Confirm Password</label><br>
            <input type="password" name="cpassword" value="">
          </div>

          <input type="hidden" name="id" value="<?php echo $ident; ?>">
          <button type="submit">Update</button>
        </form>

      </div>
    </section>


<?php include 'footer.php'; ?>
