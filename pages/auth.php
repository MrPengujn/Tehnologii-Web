<!DOCTYPE php>
<html>

<head>
  <title>Auth</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../styles/auth_style.css" />
  <link rel="stylesheet" href="../styles/header_footer_style.css" />
  <link rel="stylesheet" href="../styles/planet_page_style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Aldrich&amp;family=Montserrat:wght@300&amp" rel="stylesheet" />
</head>

<body class="index_background">
  <header class="header_bg">
    <?php
    require('components/navbar.php');
    ?>
  </header>

  <main>
    <div class="auth">

      <form action="../scripts/login.php" method="post" class="log_in" id="lgin_form">
        <h1>Log in</h1>  

        <p style='color: red'>
          <?php session_start();
            if(isset($_SESSION['errors']) && $_SESSION['errors']){
              echo "Wrong username or password!";
              $_SESSION['errors'] = false;
            }
          ?>
        </p>

        <div class="elem">
          <label>Username</label>
          <input type="text" name="uname" placeholder="User Name">
        </div>

        <div class="elem">
          <label>Password</label>
          <input type="password" name="password" placeholder="Password">
        </div>

        <div class="elem">
          <button type="submit">Log in</button>
        </div>

      </form>

      <a id="switch_btn" href="../pages/authR.php">Sign up</a>
      </div>
    </div>
  </main>

  <script src="../scripts/index.js"></script>
  <script src="../scripts/validation.js"></script>
</body>

</html>