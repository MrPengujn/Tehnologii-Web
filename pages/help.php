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

      <form action="../scripts/email.php" method="post" class="contact_us">
        <h1>Contact us</h1>  

        <p style='color: red'>
          <?php session_start();
            if(isset($_SESSION['errors']) && $_SESSION['errors']){
              echo "Wrong username or password!";
              $_SESSION['errors'] = false;
            }
          ?>
        </p>

        <div class="elem">
          <label>Email</label>
          <input type="email" name="email" placeholder="Email">
        </div>

        <div class="elem">
          <label>Subject</label>
          <input type="text" name="subject" placeholder="Subject">
        </div>

        <div class="large elem">
          <label>Message</label>
          <textarea name="message" placeholder="Message"></textarea>
        </div>

        <div class="elem">
          <button type="submit">Send</button>
        </div>

      </form>
      </div>
    </div>
  </main>

  <script src="../scripts/index.js"></script>
</body>

</html>