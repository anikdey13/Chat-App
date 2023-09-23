
<?php include 'header.php'?>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>Real Time Chat App</header>
        <form action="#">
          <div class="error-text"></div>
          <div class="name-details">
            <div class="field fname">
              <label>First Name</label>
              <input type="text" placeholder="First name" />
            </div>
            <div class="field lname">
              <label>Last Name</label>
              <input type="text" placeholder="Last name" />
            </div>
          </div>
          <div class="field input">
            <label>Email</label>
            <input type="text" placeholder="Enter your email" />
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" placeholder="Enter your password" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <label>Select Image</label>
            <input type="file" />
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat" />
          </div>
          <div class="link">
            <p>Already Signed Up? <a href="login.php">Login</a></p>
          </div>
        </form>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
  </body>
</html>
