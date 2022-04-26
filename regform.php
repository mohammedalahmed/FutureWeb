<?php include 'header.php'; ?>

      <div class="container">
        <div class="card">
        <div id="loggedMsg"></div>
          <div class="inner-box" id="card">
            <div class="card-front">
              <h2>LOGIN</h2>
              <form id="loginForm">
                <input type="email" name="email" class="input-box" placeholder="Your Email" required>
                <input type="password" name="password" class="input-box" placeholder="Password" required>
                <button type="submit" name="login" class="submit-btn">Login</button>
                <input type="checkbox"><span>Remember Me</span>
              </form>
              <button type="submit" class="btn2" onclick="openRegister()">Register</button>
            </div>

            <div class="card-back">
              <h2>REGISTER</h2>
              <form id="registerForm">
                <input type="text" name="name" class="input-box" placeholder="Your Name" required>
                <input type="email" name="email" class="input-box" placeholder="Your Email" required>
                <input type="password" name="password" class="input-box" placeholder="Password" required>
                <input type="password" name="cpassword" class="input-box" placeholder="Password Again" required>
                <button type="submit" name="register" class="submit-btn">Register</button>
              </form>
              <button type="submit" class="btn2" onclick="openLogin()">Already Registered</button>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php include 'footer.php'; ?>