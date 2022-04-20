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
    require('components/search_menu.php');
    ?>
  </header>

  <main>
    <div class="auth">

      <form action="../scripts/register.php" method="post" class="sign_up">
        <h1>Sign up</h1>  

        <p style='color: red'>
          <?php session_start();
            if(isset($_SESSION['query_result']) && $_SESSION['errors'] == true){
              echo $_SESSION['query_result'];
              unset($_SESSION['query_result']);
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
          <label>Confirm password</label>
          <input type="password" name="confPassword" placeholder="Password">
        </div>

        <div class="elem">
          <button type="submit">Sign in</button>
        </div>

      </form>

      <a id="switch_btn_R" href="../pages/auth.php">Log in</a>
      </div>
    </div>

  </main>

  <script src="../scripts/index.js"></script>
</body>

</html>