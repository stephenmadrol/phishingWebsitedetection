


<html>
<body>

<div class="login-page">
  <div class="form">
  <h3>Pocket Doctor!</h3>
  <form class="register-form" action="signup_backend.php" method="post">
      <input type="text" placeholder="username" name="username" id="username" required />
      <input type="password" placeholder="password" name="password" id="pass"required />
      <input type="text" placeholder="email address" name="email" id="email" required />
      
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
  <form class="login-form" action="login_backend.php" method="post" id="loginform">
      <input type="text" placeholder="username" id="username" name="username"required />
      <input type="password" placeholder="password" name="password" required/>
      <button >login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>

</body>
</html>
