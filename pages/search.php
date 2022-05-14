<!DOCTYPE php>
<html>

<head>
  <title>Search</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../styles/header_footer_style.css" />
  <link rel="stylesheet" href="../styles/planet_page_style.css" />
  <link rel="stylesheet" href="../styles/search.css" >
  <link href="https://fonts.googleapis.com/css2?family=Aldrich&amp;family=Montserrat:wght@300&amp" rel="stylesheet" />
</head>

<body class="index_background">
  <header class="header_bg">
    <?php
      require('components/navbar.php');
    ?>
  </header>

  <main>
    <div class="search">
      <div class="search_results">
        <div id="test">
        </div>
      </div>
      <div class="search_menu">
        <form method="post" id="s_frm">
          <input type="text" name="uname" placeholder="Search param" class="text_inpt" id="s_frm">
          <div>
            <input type="radio" name="search_option" id="diameter">
            <label for="diameter">Diameter</label>
          </div>
          <div>
            <input type="radio" name="search_option" id="radius">
            <label for="radius">Radius</label>
          </div>
          <div>
            <input type="radio" name="search_option" id="mass">
            <label for="mass">Mass</label>
          </div>
          <div>
            <input type="radio" name="search_option" id="volume">
            <label for="volume">Volume</label>
          </div>
          <div>
            <input type="radio" name="search_option" id="surf_gravity">
            <label for="volume">Surface Gravity</label>
          </div>
          <div>
            <input type="radio" name="search_option" id="orb_period">
            <label for="orb_period">Orbital period</label>
          </div>
          <div>
            <input type="radio" name="search_option" id="orb_speed">
            <label for="orb_speed">Orbital speed</label>
          </div>

          <button type="submit">Search</button>
        </form>
      </div>
    </div>
  </main>

  <script src="../data/planet_data.js"></script>
  <script src="../scripts/index.js"></script>
  <script src="../scripts/search.js"></script>
</body>

</html>