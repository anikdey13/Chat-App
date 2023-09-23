<?php include 'header.php'?>

  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Real Time Chat App</header>
        <form action="#">
          <div class="error-text"></div>
          <div class="field input">
            <label>Email</label>
            <input type="text" placeholder="Enter your email" />
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" placeholder="Enter your password" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat" />
          </div>
          <div class="link">
            <p>Don't have an account? <a href="index.php">Sign Up</a></p>
          </div>
        </form>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
  </body>
</html>
