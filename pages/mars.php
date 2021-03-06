<!DOCTYPE php>
<html>

<head>
  <title>Mars</title>
  <meta charset="UTF-8" />
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
    <a id="PAGE_TOP"></a>

    <div id="pln_fullimg">
      <h1 onclick="display_image('pln_fullimg')">x</h1>
      <img src="../media/planets/mars.png" width="45%" onclick="display_image('pln_fullimg')" />
    </div>

    <div class="grid">
      <div class="planet_title">
        <h1>Mars</h1>
      </div>
      <div class="planet_separator"></div>
      <div class="planet_infobox">
        <table>
          <?php
            $planetData = file_get_contents("../data/planet_data.json");
            $array = json_decode($planetData)->mars;
          ?>
          <tbody>
            <caption>
              Mars
            </caption>
            <tr>
              <td>
                <img src="../media/planets/mars.png" width="200%" onclick="display_image('pln_fullimg')" />
              </td>
            </tr>
            <tr>
              <th>Diameter:</th>
              <td>
                <?php
                echo $array->info->diameter;
                ?>
                km
              </td>
            </tr>
            <tr>
              <th>Radius:</th>
              <td>
                <?php
                echo $array->info->radius;
                ?>
                km
              </td>
            </tr>
            <tr>
              <th>Mass:</th>
              <td>
                <?php
                echo $array->info->mass;
                ?>
                kg
              </td>
            </tr>
            <tr>
              <th>Volume:</th>
              <td>
                <?php
                echo $array->info->volume;
                ?>
                km<sup>3</sup>
              </td>
            </tr>
            <tr>
              <th>Surface gravity:</th>
              <td>
                <?php
                  echo $array->info->surface_gravity;
                ?>
                m/s<sup>2</sup>
              </td>
            </tr>
            <tr>
              <th>Orbital period:</th>
              <td>
                <?php
                  echo $array->info->orbital_period;
                ?>
                d
              </td>
            </tr>
            <tr>
              <th>Orbital speed:</th>
              <td>
                <?php
                  echo $array->info->orbital_speed;
                ?>
                km/s
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="planet_info planet_top">
        <h3>General info</h3>
        <p>
          Mars is the fourth planet from the Sun and the second-smallest
          planet in the Solar System, being larger than only Mercury. In
          English, Mars carries the name of the Roman god of war and is often
          called the "Red Planet". The latter refers to the effect of the iron
          oxide prevalent on Mars's surface, which gives it a striking reddish
          appearance in the sky. Mars is a terrestrial planet with a thin
          atmosphere, with surface features such as impact craters, valleys,
          dunes, and polar ice caps.
        </p>
        <p>
          Olympus Mons, the largest volcano and highest known mountain on any
          Solar System planet, and Valles Marineris, one of the largest
          canyons in the Solar System, are on Mars. The smooth Borealis basin
          in the Northern Hemisphere covers 40% of the planet and may be a
          giant impact feature. Mars has two small and irregularly shaped
          moons, Phobos and Deimos. The days and seasons on Mars are
          comparable to those of Earth as the planets have a similar rotation
          period and tilt of the rotational axis relative to the ecliptic
          plane.
        </p>
        <p>
          Mars has been explored by several uncrewed spacecraft. Mariner 4 was
          the first spacecraft to visit Mars; launched by NASA on 28 November
          1964, it made its closest approach to the planet on 15 July 1965.
          Mariner 4 detected the weak Martian radiation belt, measured at
          about 0.1% that of Earth, and captured the first images of another
          planet from deep space. NASA's Viking 1 lander transmitted the first
          images from the Martian surface in 1976. Two countries have
          successfully deployed rovers on Mars, the United States first doing
          so with Sojourner in 1997 and China with Zhurong in 2021.
        </p>
        <p>
          There are investigations assessing the past habitability of Mars, as
          well as the possibility of extant life. Astrobiology missions are
          planned, such as the European Space Agency's Rosalind Franklin
          rover. Liquid water on the surface of Mars cannot exist due to low
          atmospheric pressure, which is less than 1% of the atmospheric
          pressure on Earth. Both of Mars's polar ice caps appear to be made
          largely of water.
        </p>
        <p>
          Mars can easily be seen from Earth with the naked eye, as can its
          reddish coloring. Its apparent magnitude reaches -2.94, which is
          surpassed only by Venus, the Moon and the Sun. Optical ground-based
          telescopes are typically limited to resolving features about 300
          kilometres (190 mi) across when Earth and Mars are closest because
          of Earth's atmosphere.
        </p>
        <br />
        <h3>Internal structure</h3>
        <p>
          Like Earth, Mars has differentiated into a dense metallic core
          overlaid by less dense materials. Current models of its interior
          imply a core consisting primarily of iron and nickel with about
          16-17% sulfur. This iron(II) sulfide core is thought to be twice as
          rich in lighter elements as Earth's. The core is surrounded by a
          silicate mantle that formed many of the tectonic and volcanic
          features on the planet, but it appears to be dormant. Besides
          silicon and oxygen, the most abundant elements in the Martian crust
          are iron, magnesium, aluminium, calcium, and potassium. The average
          thickness of the planet's crust is about 50 kilometres (31 mi), with
          a maximum thickness of 125 kilometres (78 mi). By comparison,
          Earth's crust averages 40 kilometres (25 mi) in thickness.
        </p>
        <p>
          Mars is seismically active, with InSight detecting and recording
          over 450 marsquakes and related events in 2019.[38][39] In 2021 it
          was reported that based on eleven low-frequency Marsquakes detected
          by the InSight lander the core of Mars is indeed liquid and has a
          radius of about 1830??40 km and a temperature around 1900-2000 K. The
          Martian core radius is more than half the radius of Mars and about
          half the size of the Earth's core. This is somewhat larger than
          models predicted, suggesting that the core contains some amount of
          lighter elements like oxygen and hydrogen in addition to the
          iron-nickel alloy and about 15% of sulfur.
        </p>
        <p>
          The core of Mars is overlain by the rocky mantle, which, however,
          does not seem to have a layer analogous to the Earth's lower mantle.
          The martial mantle appears to be solid down to the depth of about
          500 km, where the low-velocity zone (partially melted asthenosphere)
          begins. Below the asthenosphere the velocity of seismic waves starts
          to grow again and at the depth of about 1050 km there lies the
          boundary of the transition zone. At the surface of Mars there lies a
          crust with the average thickness of about 24-72 km.
        </p>
      </div>
      <div class="planet_div_separator">
        <img src="../media/planets/map_mars.jpg" alt="mars map" />
      </div>
      <div class="planet_info planet_bottom">
        <br />
        <h3>Orbit, rotation, and longitude</h3>
        <p>
          Mars's average distance from the Sun is roughly 230 million km (143
          million mi), and its orbital period is 687 (Earth) days. The solar
          day (or sol) on Mars is only slightly longer than an Earth day: 24
          hours, 39 minutes, and 35.244 seconds. A Martian year is equal
          to 1.8809 Earth years, or 1 year, 320 days, and 18.2 hours.
        </p>
        <p>
          The axial tilt of Mars is 25.19?? relative to its orbital plane,
          which is similar to the axial tilt of Earth. As a result, Mars
          has seasons like Earth, though on Mars they are nearly twice as long
          because its orbital period is that much longer. In the present day
          epoch, the orientation of the north pole of Mars is close to the
          star Deneb.
        </p>
        <p>
          Mars has a relatively pronounced orbital eccentricity of about 0.09;
          of the seven other planets in the Solar System, only Mercury has a
          larger orbital eccentricity. It is known that in the past, Mars has
          had a much more circular orbit. At one point, 1.35 million Earth
          years ago, Mars had an eccentricity of roughly 0.002, much less than
          that of Earth today. Mars's cycle of eccentricity is 96,000
          Earth years compared to Earth's cycle of 100,000 years.
        </p>
      </div>
    </div>

    <div id="back_to_top" onclick="scroll_to_top()">
      <img src="../media/general/up.png" alt="Back to top image" width="50px" />
    </div>
  </main>

  <footer class="footer">
    <p>Realizat de Gheorghi??a Valentin, IA-213</p>
  </footer>

  <script src="../scripts/index.js"></script>
</body>

</html>