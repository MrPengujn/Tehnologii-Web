<!DOCTYPE html>
<html>

<head>
  <title>The solar system</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./styles/index_style.css">
  <link rel="stylesheet" href="./styles/header_footer_style.css">
  <link href="https://fonts.googleapis.com/css2?family=Aldrich&amp;family=Montserrat:wght@300&amp" rel="stylesheet">
</head>

<body class="index_background">
  <header class="header_bg">

    <?php
    require('pages/components/navbar.php');
    require('pages/components/search_menu.php');
    ?>

  </header>

  <main>
    <a id="PAGE_TOP"></a>

    <div class="index_top_container">
      <div class="index_top_container_info">
        <h1>The solar system</h1>
        <h2>Realizat de Gheorghița Valentin, IA-213</h2>
        <img src="./media/index/scroll_down.gif" alt="scroll down gif">
      </div>

    </div>

    <div id="back_to_top" onclick="scroll_to_top()">
      <img src="./media/general/up.png" alt="mercury png" width="50px">
    </div>

    <div class="index_sun">

      <img src="./media/index/sun.png" alt="Sun png" width="50%">

      <p>
        The Solar System is the gravitationally bound system of the Sun and the objects that orbit it.
        Of the bodies that orbit the Sun directly, the largest are the four gas and ice giants and the four terrestrial planets,
        followed by an unknown number of dwarf planets and innumerable small Solar System bodies.
        Of the bodies that orbit the Sun indirectly—the natural satellites—two are larger than Mercury,
        the smallest terrestrial planet, and one is nearly as large
      </p>
    </div>

    <div class="index_mercury">

      <img src="./media/planets/mercury.png" alt="Sun png" width="50%" class="index_align_center">

      <div class="index_inner_div">
        <p class="index_align_center">
          <b>Mercury</b> is the smallest planet in the Solar System and the closest to the Sun.
          Its orbit around the Sun takes 87.97 Earth days, the shortest of all the Sun's planets.
          It is named after the Roman god Mercurius (Mercury), god of commerce, messenger of the gods,
          and mediator between gods and mortals, corresponding to the Greek god Hermes.
        </p>

        <a href="./pages/mercury.html" class="read_more_b">
          Read more
        </a>
      </div>

    </div>

    <div class="index_venus">

      <img src="./media/planets/venus.png" alt="Sun png" width="50%" class="index_align_center">

      <div class="index_inner_div">
        <p class="index_align_center">
          <b>Venus</b> is the second planet from the Sun. It is named after the Roman goddess of love and beauty.
          As the brightest natural object in Earth's night sky after the Moon,
          Venus can cast shadows and can be visible to the naked eye in broad daylight.
        </p>

        <a href="./pages/venus.html" class="read_more_b">
          Read more
        </a>
      </div>
    </div>

    <div class="index_earth">

      <img src="./media/planets/earth.png" alt="Sun png" width="40%" class="index_align_center">

      <div class="index_inner_div">
        <p class="index_align_center">
          <b>Earth</b> is the third planet from the Sun and the only astronomical object known to harbor life.
          While large amounts of water can be found throughout the Solar System, only Earth sustains liquid surface water.
          About 71% of Earth's surface is made up of the ocean, dwarfing Earth's polar ice, lakes and rivers.
        </p>

        <a href="./pages/earth.html" class="read_more_b">
          Read more
        </a>
      </div>
    </div>

    <div class="index_mars">

      <img src="./media/planets/mars.png" alt="Sun png" width="30%" class="index_align_center">

      <div class="index_inner_div">
        <p class="index_align_center">
          <b>Mars</b> is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.
          In English, Mars carries the name of the Roman god of war and is often referred to as the "Red Planet".
          The latter refers to the effect of the iron oxide prevalent on Mars's surface, which gives it a striking reddish appearance in the sky.
          Mars is a terrestrial planet with a thin atmosphere, with surface features such as impact craters, valleys, dunes, and polar ice caps.
        </p>

        <a href="./pages/mars.html" class="read_more_b">
          Read more
        </a>
      </div>
    </div>

    <div class="index_jupiter">

      <img src="./media/planets/jupiter.png" alt="Sun png" width="60%" class="index_align_center">

      <div class="index_inner_div">
        <p class="index_align_center">
          <b>Jupiter</b> is the fifth planet from the Sun and the largest in the Solar System.
          It is a gas giant with a mass more than two and a half times that of all the other planets in the Solar System combined,
          but slightly less than one-thousandth the mass of the Sun. Jupiter is the third brightest natural object in the Earth's night sky after the Moon and Venus.
          People have been observing it since prehistoric times; it was named after the Roman god Jupiter, the king of the gods, because of its observed size.
        </p>

        <a href="./pages/jupiter.html" class="read_more_b">
          Read more
        </a>
      </div>
    </div>

    <div class="index_saturn">

      <img src="./media/planets/saturn.png" alt="Sun png" width="60%" class="index_align_center">

      <div class="index_inner_div">
        <p class="index_align_center">
          <b>Saturn</b> is the sixth planet from the Sun and the second-largest in the Solar System, after Jupiter.
          It is a gas giant with an average radius of about nine and a half times that of Earth.
          It only has one-eighth the average density of Earth; however, with its larger volume, Saturn is over 95 times more massive.
        </p>

        <a href="./pages/saturn.html" class="read_more_b">
          Read more
        </a>
      </div>
    </div>

    <div class="index_uranus">

      <img src="./media/planets/uranus.png" alt="Sun png" width="50%" class="index_align_center">

      <div class="index_inner_div">
        <p class="index_align_center">
          <b>Uranus</b> is the seventh planet from the Sun. Its name is a reference to the Greek god of the sky,
          Uranus, who, according to Greek mythology, was the great-grandfather of Ares (Mars), grandfather of Zeus (Jupiter) and father of Cronus (Saturn).
          It has the third-largest planetary radius and fourth-largest planetary mass in the Solar System. Uranus is similar in composition to Neptune,
          and both have bulk chemical compositions which differ from that of the larger gas giants Jupiter and Saturn.
          For this reason, scientists often classify Uranus and Neptune as "ice giants" to distinguish them from the other giant planets.
        </p>

        <a href="./pages/uranus.html" class="read_more_b">
          Read more
        </a>
      </div>
    </div>

    <div class="index_neptune">

      <img src="./media/planets/neptune.png" alt="Sun png" width="40%" class="index_align_center">

      <div class="index_inner_div">
        <p class="index_align_center">
          <b>Neptune</b> is the eighth and farthest-known Solar planet from the Sun. In the Solar System,
          it is the fourth-largest planet by diameter, the third-most-massive planet, and the densest giant planet.
          It is 17 times the mass of Earth, and slightly more massive than its near-twin Uranus.
          Neptune is denser and physically smaller than Uranus because its greater mass causes more gravitational compression of its atmosphere.
          It is referred to as one of the solar system's two ice giant planets (the other one being its near-twin Uranus).
        </p>

        <a href="./pages/neptune.html" class="read_more_b">
          Read more
        </a>
      </div>
    </div>

    <div class="index_pluto">

      <img src="./media/planets/pluto.webp" alt="Sun png" width="40%" class="index_align_center">

      <div class="index_inner_div">
        <p class="index_align_center">
          <b>Pluto</b> is a dwarf planet in the Kuiper belt, a ring of bodies beyond the orbit of Neptune.
          It was the first and the largest Kuiper belt object to be discovered. After Pluto was discovered in 1930,
          it was declared to be the ninth planet from the Sun. Beginning in the 1990s, its status as a planet was questioned
          following the discovery of several objects of similar size in the Kuiper belt and the scattered disc, including the dwarf planet Eris.
          This led the International Astronomical Union (IAU) in 2006 to formally define the term planet—excluding Pluto and reclassifying it as a dwarf planet.
        </p>

        <a href="./pages/pluto.html" class="read_more_b">
          Read more
        </a>
      </div>
    </div>

  </main>

  <footer class="footer">
    <p>Realizat de Gheorghița Valentin, IA-213</p>
    <p class="temp">compare</p>
  </footer>

  <script src="./scripts/index.js"></script>
</body>

</html>