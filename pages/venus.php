<!DOCTYPE php>
<html>

<head>
  <title>Venus</title>
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
      <img src="../media/planets/venus.png" width="45%" onclick="display_image('pln_fullimg')" />
    </div>

    <div class="grid">
      <div class="planet_title">
        <h1>Venus</h1>
      </div>
      <div class="planet_separator"></div>
      <div class="planet_infobox">
        <table>
        <?php
          $planetData = file_get_contents("../data/planet_data.json");
          $array = json_decode($planetData)->venus;
        ?>
          <tbody>
            <caption>
              Venus
            </caption>
            <tr>
              <td>
                <img src="../media/planets/venus.png" width="200%" onclick="display_image('pln_fullimg')" />
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
          Venus is the second planet from the Sun. It is named after the Roman
          goddess of love and beauty. As the brightest natural object in
          Earth's night sky after the Moon, Venus can cast shadows and can be
          visible to the naked eye in broad daylight. Venus's orbit is smaller
          than that of Earth, but its maximal elongation is 47??; thus, it can
          be seen not only near the Sun in the morning or evening, but also a
          couple of hours before or after sunrise or sunset, depending on the
          observer's latitude and on the positions of Venus and the Sun. Most
          of the time, it can be seen either in the morning or in the evening.
          At some times, it may even be seen a while in a completely dark sky.
          Venus orbits the Sun every 224.7 Earth days.[20] It has a synodic
          day length of 117 Earth days and a sidereal rotation period of 243
          Earth days. Consequently, it takes longer to rotate about its axis
          than any other planet in the Solar System, and does so in the
          opposite direction to all but Uranus. This means that the Sun rises
          from its western horizon and sets in its east. Venus does not have
          any moons, a distinction it shares only with Mercury among the
          planets in the Solar System.
        </p>
        <p>
          Venus is a terrestrial planet and is sometimes called Earth's
          "sister planet" because of their similar size, mass, proximity to
          the Sun, and bulk composition. It is radically different from Earth
          in other respects. It has the densest atmosphere of the four
          terrestrial planets, consisting of more than 96% carbon dioxide. The
          atmospheric pressure at the planet's surface is about 92 times the
          sea level pressure of Earth, or roughly the pressure at 900 m (3,000
          ft) underwater on Earth. Even though Mercury is closer to the Sun,
          Venus has the hottest surface of any planet in the Solar System,
          with a mean temperature of 737 K (464 ??C; 867 ??F). Venus is shrouded
          by an opaque layer of highly reflective clouds of sulfuric acid,
          preventing its surface from being seen from space in light. It may
          have had water oceans in the past, but these would have vaporized as
          the temperature rose under a runaway greenhouse effect. The water
          has probably photodissociated, and the free hydrogen has been swept
          into interplanetary space by the solar wind because of the lack of a
          planetary magnetic field.
        </p>
        <p>
          As one of the brightest objects in the sky, Venus has been a major
          fixture in human culture for as long as records have existed. It has
          been made sacred to gods of many cultures and has been a prime
          inspiration for writers and poets as the "morning star" and "evening
          star". Venus was the first planet to have its motions plotted across
          the sky, as early as the second millennium BC.
        </p>
        <p>
          Its proximity to Earth has made Venus a prime target for early
          interplanetary exploration. It was the first planet beyond Earth
          visited by a spacecraft (Venera 1 in 1961) and the first to be
          successfully landed on (by Venera 7 in 1970). The planet's thick
          clouds render observation of its surface impossible in the visible
          spectrum, and the first detailed maps did not emerge until the
          arrival of the Magellan orbiter in 1991. Plans have been proposed
          for rovers or more complex missions, but they are hindered by
          Venus's hostile surface conditions. The possibility of life on Venus
          has long been a topic of speculation; in recent years, the topic has
          received active research.
        </p>
        <br />
        <h3>Internal structure</h3>
        <p>
          Without seismic data or knowledge of its moment of inertia, little
          direct information is available about the internal structure and
          geochemistry of Venus. The similarity in size and density between
          Venus and Earth suggests they share a similar internal structure: a
          core, mantle, and crust. Like that of Earth, the Venusian core is
          most likely at least partially liquid because the two planets have
          been cooling at about the same rate, although a completely solid
          core cannot be ruled out. The slightly smaller size of Venus means
          pressures are 24% lower in its deep interior than Earth's.[109] The
          predicted values for the moment of inertia based on planetary models
          suggest a core radius of 2,900-3,450 km.[108] This is in line with
          the first observation-based estimate of 3,500 km.
        </p>
        <p>
          The principal difference between the two planets is the lack of
          evidence for plate tectonics on Venus, possibly because its crust is
          too strong to subduct without water to make it less viscous. This
          results in reduced heat loss from the planet, preventing it from
          cooling and providing a likely explanation for its lack of an
          internally generated magnetic field. Instead, Venus may lose its
          internal heat in periodic major resurfacing events.
        </p>
      </div>
      <div class="planet_div_separator">
        <img src="../media/planets/map_venus.jpg" alt="venus map" />
      </div>
      <div class="planet_info planet_bottom">
        <br />
        <h3>Orbit, rotation, and longitude</h3>
        <p>
          Venus orbits the Sun at an average distance of about 0.72 AU (108
          million km; 67 million mi), and completes an orbit every 224.7 days.
          Although all planetary orbits are elliptical, Venus's orbit is
          currently the closest to circular, with an eccentricity of less than
          0.01. Simulations of the early solar system orbital dynamics have
          shown that the eccentricity of the Venus orbit may have been
          substantially larger in the past, reaching values as high as 0.31
          and possibly impacting the early climate evolution. The current
          near-circular orbit of Venus means that when Venus lies between
          Earth and the Sun in inferior conjunction, it makes the closest
          approach to Earth of any planet at an average distance of 41 million
          km (25 million mi). The planet reaches inferior conjunction every
          584 days, on average. Because of the decreasing eccentricity of
          Earth's orbit, the minimum distances will become greater over tens
          of thousands of years. From the year 1 to 5383, there are 526
          approaches less than 40 million km (25 million mi); then, there are
          none for about 60,158 years.
        </p>
        <p>
          All the planets in the Solar System orbit the Sun in an
          anticlockwise direction as viewed from above Earth's north pole.
          Most planets also rotate on their axes in an anti-clockwise
          direction, but Venus rotates clockwise in retrograde rotation once
          every 243 Earth days???the slowest rotation of any planet. Because its
          rotation is so slow, Venus is very close to spherical. A Venusian
          sidereal day thus lasts longer than a Venusian year (243 versus
          224.7 Earth days). Venus's equator rotates at 6.52 km/h (4.05 mph),
          whereas Earth's rotates at 1,674.4 km/h (1,040.4 mph). Venus's
          rotation period measured with Magellan spacecraft data over a
          500-day period is smaller than the rotation period measured during
          the 16-year period between the Magellan spacecraft and Venus Express
          visits, with a difference of about 6.5 minutes. Because of the
          retrograde rotation, the length of a solar day on Venus is
          significantly shorter than the sidereal day, at 116.75 Earth days
          (making the Venusian solar day shorter than Mercury's 176 Earth days
          ??? the 116-day figure is extremely close to the average number of
          days it takes Mercury to slip underneath the Earth in its orbit).
          One Venusian year is about 1.92 Venusian solar days. To an observer
          on the surface of Venus, the Sun would rise in the west and set in
          the east, although Venus's opaque clouds prevent observing the Sun
          from the planet's surface.
        </p>
        <p>
          Venus may have formed from the solar nebula with a different
          rotation period and obliquity, reaching its current state because of
          chaotic spin changes caused by planetary perturbations and tidal
          effects on its dense atmosphere, a change that would have occurred
          over the course of billions of years. The rotation period of Venus
          may represent an equilibrium state between tidal locking to the
          Sun's gravitation, which tends to slow rotation, and an atmospheric
          tide created by solar heating of the thick Venusian atmosphere. The
          584-day average interval between successive close approaches to
          Earth is almost exactly equal to 5 Venusian solar days (5.001444 to
          be precise), but the hypothesis of a spin-orbit resonance with Earth
          has been discounted.
        </p>
        <p>
          Venus has no natural satellites. It has several trojan asteroids:
          the quasi-satellite 2002 VE68 and two other temporary trojans, 2001
          CK32 and 2012 XE133. In the 17th century, Giovanni Cassini reported
          a moon orbiting Venus, which was named Neith and numerous sightings
          were reported over the following 200 years, but most were determined
          to be stars in the vicinity. Alex Alemi's and David Stevenson's 2006
          study of models of the early Solar System at the California
          Institute of Technology shows Venus likely had at least one moon
          created by a huge impact event billions of years ago. About 10
          million years later, according to the study, another impact reversed
          the planet's spin direction and caused the Venusian moon gradually
          to spiral inward until it collided with Venus. If later impacts
          created moons, these were removed in the same way. An alternative
          explanation for the lack of satellites is the effect of strong solar
          tides, which can destabilize large satellites orbiting the inner
          terrestrial planets.
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