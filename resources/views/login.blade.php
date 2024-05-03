<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="../assets/css/admin.css">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="{{ route('user.login.post') }}" method="POST" class="sign-in-form">
            @csrf
          <h2 class="title">User Login</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="Email" autocomplete="username" placeholder="Email" required="yes">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="Password" autocomplete="current-password" placeholder="Password" id="id_password" required="yes">
            <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
          </div>
          <a class="pass" href="#">Forgot your password?</a>
          <a class="pass" href="authentication-register.html">Create user account</a>
          <input type="submit" value="Sign in" class="btn solid">
        </form>
        <form action="" method="POST" class="sign-up-form">
            @csrf
          <h2 class="title">Admin Login</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="Email" autocomplete="username" placeholder="Email" required="yes">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="Password" autocomplete="current-password" placeholder="Password" id="id_reg" required="yes">
            <i class="far fa-eye" id="toggleReg" style="cursor: pointer;"></i>
          </div>
          <a class="pass" href="#">Forgot your password?</a>
          <a class="pass" href="authentication-register.html">Create admin account</a>
          <input type="submit" value="Sign in" class="btn solid">
        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Are you admin?</h3>
          <p>Login and take advantage of the unique features of the name.</p>
          <button class="btn transparent" id="sign-up-btn">Sign in</button>
        </div>
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>Are you user?</h3>
          <p>Login to see your notifications and post your messages.</p>
          <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/js/admin.js"></script>
  <script src="keyboard/Keyboard.js"></script>

</body>