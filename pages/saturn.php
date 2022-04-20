<!DOCTYPE php>
<html>

<head>
  <title>Saturn</title>
  <meta charset="UTF-8" />
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
    <a id="PAGE_TOP"></a>

    <div id="pln_fullimg">
      <h1 onclick="display_image('pln_fullimg')">x</h1>
      <img src="../media/planets/saturn.png" width="60%" onclick="display_image('pln_fullimg')" />
    </div>

    <div class="grid">
      <div class="planet_title">
        <h1>Saturn</h1>
      </div>
      <div class="planet_separator"></div>
      <div class="planet_infobox">
        <table>
          <?php
            $planetData = file_get_contents("../data/planet_data.json");
            $array = json_decode($planetData)->saturn;
          ?>
          <tbody>
            <caption>
              Saturn
            </caption>
            <tr>
              <td>
                <img src="../media/planets/saturn.png" width="200%" onclick="display_image('pln_fullimg')" />
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
          Saturn is the sixth planet from the Sun and the second-largest in
          the Solar System, after Jupiter. It is a gas giant with an average
          radius of about nine and a half times that of Earth. It only has
          one-eighth the average density of Earth; however, with its larger
          volume, Saturn is over 95 times more massive.
        </p>
        <p>
          Saturn's interior is most likely composed of a core of iron-nickel
          and rock (silicon and oxygen compounds). Its core is surrounded by a
          deep layer of metallic hydrogen, an intermediate layer of liquid
          hydrogen and liquid helium, and finally, a gaseous outer layer.
          Saturn has a pale yellow hue due to ammonia crystals in its upper
          atmosphere. An electrical current within the metallic hydrogen layer
          is thought to give rise to Saturn's planetary magnetic field, which
          is weaker than Earth's, but which has a magnetic moment 580 times
          that of Earth due to Saturn's larger size. Saturn's magnetic field
          strength is around one-twentieth of Jupiter's. The outer atmosphere
          is generally bland and lacking in contrast, although long-lived
          features can appear. Wind speeds on Saturn can reach 1,800 km/h
          (1,100 mph; 500 m/s), higher than on Jupiter but not as high as on
          Neptune.
        </p>
        <p>
          The planet's most notable feature is its prominent ring system,
          which is composed mainly of ice particles, with a smaller amount of
          rocky debris and dust. At least 83 moons are known to orbit Saturn,
          of which 53 are officially named; this does not include the hundreds
          of moonlets in its rings. Titan, Saturn's largest moon and the
          second largest in the Solar System, is larger than the planet
          Mercury, although less massive, and is the only moon in the Solar
          System to have a substantial atmosphere.
        </p>
        <br />
        <h3>Internal structure</h3>
        <p>
          Despite consisting mostly of hydrogen and helium, most of Saturn's
          mass is not in the gas phase, because hydrogen becomes a non-ideal
          liquid when the density is above 0.01 g/cm3, which is reached at a
          radius containing 99.9% of Saturn's mass. The temperature, pressure,
          and density inside Saturn all rise steadily toward the core, which
          causes hydrogen to be a metal in the deeper layers.
        </p>
        <p>
          Standard planetary models suggest that the interior of Saturn is
          similar to that of Jupiter, having a small rocky core surrounded by
          hydrogen and helium, with trace amounts of various volatiles. This
          core is similar in composition to Earth, but is more dense. The
          examination of Saturn's gravitational moment, in combination with
          physical models of the interior, has allowed constraints to be
          placed on the mass of Saturn's core. In 2004, scientists estimated
          that the core must be 9-22 times the mass of Earth, which
          corresponds to a diameter of about 25,000 km.[41] However,
          measurements of Saturn's rings suggest a much more diffuse core with
          a mass equal to about 17 Earths and a radius equal to around 60% of
          Saturn's entire radius. This is surrounded by a thicker liquid
          metallic hydrogen layer, followed by a liquid layer of
          helium-saturated molecular hydrogen that gradually transitions to a
          gas with increasing altitude. The outermost layer spans 1,000 km and
          consists of gas.
        </p>
        <p>
          Saturn has a hot interior, reaching 11,700 °C at its core, and
          radiates 2.5 times more energy into space than it receives from the
          Sun. Jupiter's thermal energy is generated by the Kelvin-Helmholtz
          mechanism of slow gravitational compression, but such a process
          alone may not be sufficient to explain heat production for Saturn,
          because it is less massive. An alternative or additional mechanism
          may be generation of heat through the "raining out" of droplets of
          helium deep in Saturn's interior. As the droplets descend through
          the lower-density hydrogen, the process releases heat by friction
          and leaves Saturn's outer layers depleted of helium. These
          descending droplets may have accumulated into a helium shell
          surrounding the core. Rainfalls of diamonds have been suggested to
          occur within Saturn, as well as in Jupiter and ice giants Uranus and
          Neptune.
        </p>
      </div>
      <div class="planet_div_separator">
        <img src="../media/planets/map_saturn.jpg" alt="mercury map" />
      </div>
      <div class="planet_info planet_bottom">
        <br />
        <h3>Orbit, rotation, and longitude</h3>
        <p>
          The average distance between Saturn and the Sun is over 1.4 billion
          kilometers (9 AU). With an average orbital speed of 9.68 km/s, it
          takes Saturn 10,759 Earth days (or about 29+1/2 years) to finish one
          revolution around the Sun. As a consequence, it forms a near 5:2
          mean-motion resonance with Jupiter. The elliptical orbit of Saturn
          is inclined 2.48° relative to the orbital plane of the Earth. The
          perihelion and aphelion distances are, respectively, 9.195 and 9.957
          AU, on average.The visible features on Saturn rotate at different
          rates depending on latitude, and multiple rotation periods have been
          assigned to various regions (as in Jupiter's case).
        </p>
        <p>
          Astronomers use three different systems for specifying the rotation
          rate of Saturn. System I has a period of 10h 14m 00s (844.3°/d) and
          encompasses the Equatorial Zone, the South Equatorial Belt, and the
          North Equatorial Belt. The polar regions are considered to have
          rotation rates similar to System I. All other Saturnian latitudes,
          excluding the north and south polar regions, are indicated as System
          II and have been assigned a rotation period of 10h 38m 25.4s
          (810.76°/d). System III refers to Saturn's internal rotation rate.
          Based on radio emissions from the planet detected by Voyager 1 and
          Voyager 2, System III has a rotation period of 10h 39m 22.4s
          (810.8°/d). System III has largely superseded System II.
        </p>
        <p>
          A precise value for the rotation period of the interior remains
          elusive. While approaching Saturn in 2004, Cassini found that the
          radio rotation period of Saturn had increased appreciably, to
          approximately 10h 45m 45s ± 36s.[ An estimate of Saturn's rotation
          (as an indicated rotation rate for Saturn as a whole) based on a
          compilation of various measurements from the Cassini, Voyager and
          Pioneer probes is 10h 32m 35s. Studies of the planet's C Ring yield
          a rotation period of 10h 33m 38s + 1m 52s - 1m 19s.
        </p>
        <p>
          In March 2007, it was found that the variation of radio emissions
          from the planet did not match Saturn's rotation rate. This variance
          may be caused by geyser activity on Saturn's moon Enceladus. The
          water vapor emitted into Saturn's orbit by this activity becomes
          charged and creates a drag upon Saturn's magnetic field, slowing its
          rotation slightly relative to the rotation of the planet.
        </p>
        <p>
          An apparent oddity for Saturn is that it does not have any known
          trojan asteroids. These are minor planets that orbit the Sun at the
          stable Lagrangian points, designated L4 and L5, located at 60°
          angles to the planet along its orbit. Trojan asteroids have been
          discovered for Mars, Jupiter, Uranus, and Neptune. Orbital resonance
          mechanisms, including secular resonance, are believed to be the
          cause of the missing Saturnian trojans.
        </p>
      </div>
    </div>

    <div id="back_to_top" onclick="scroll_to_top()">
      <img src="../media/general/up.png" alt="Back to top image" width="50px" />
    </div>
  </main>

  <footer class="footer">
    <p>Realizat de Gheorghița Valentin, IA-213</p>
  </footer>

  <script src="../scripts/index.js"></script>
</body>

</html>