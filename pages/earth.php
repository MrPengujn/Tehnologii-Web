<!DOCTYPE php>
<html>

<head>
  <title>Earth</title>
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
      <img src="../media/planets/earth.png" width="50%" onclick="display_image('pln_fullimg')" />
    </div>

    <div class="grid">
      <div class="planet_title">
        <h1>Earth</h1>
      </div>
      <div class="planet_separator"></div>
      <div class="planet_infobox">
        <table>
          <?php
            $planetData = file_get_contents("../data/planet_data.json");
            $array = json_decode($planetData)->earth;
          ?>
          <tbody>
            <caption>
              Earth
            </caption>
            <tr>
              <td>
                <img src="../media/planets/earth.png" width="200%" onclick="display_image('pln_fullimg')" />
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
          Earth is the third planet from the Sun and the only astronomical
          object known to harbor life. While large amounts of water can be
          found throughout the Solar System, only Earth sustains liquid
          surface water. About 71% of Earth's surface is made up of the ocean,
          dwarfing Earth's polar ice, lakes, and rivers. The remaining 29% of
          Earth's surface is land, consisting of continents and islands.
          Earth's surface layer is formed of several slowly moving tectonic
          plates, interacting to produce mountain ranges, volcanoes, and
          earthquakes. Earth's liquid outer core generates the magnetic field
          that shapes Earth's magnetosphere, deflecting destructive solar
          winds.
        </p>
        <p>
          Earth's atmosphere consists mostly of nitrogen and oxygen. More
          solar energy is received by tropical regions than polar regions and
          is redistributed by atmospheric and ocean circulation. Water vapor
          is widely present in the atmosphere and forms clouds that cover most
          of the planet. Greenhouse gases in the atmosphere like carbon
          dioxide (CO2) trap a part of the energy from the Sun close to the
          surface. A region's climate is governed by latitude, but also by
          elevation and proximity to moderating oceans. Severe weather, such
          as tropical cyclones, thunderstorms, and heatwaves, occurs in most
          areas and greatly impacts life.
        </p>
        <p>
          Earth is an ellipsoid with a circumference of about 40,000 km. It is
          the densest planet in the Solar System. Of the four rocky planets,
          it is the largest and most massive. Earth is about eight light
          minutes away from the Sun and orbits it, taking a year (about 365.25
          days) to complete one revolution. Earth rotates around its own axis
          in a day. Earth's axis of rotation is tilted with respect to its
          orbital plane with the Sun, producing seasons. Earth is orbited by
          one permanent natural satellite, the Moon, which orbits Earth at
          380,000 km (1.3 light seconds) and is roughly a quarter as wide as
          Earth. The Moon always faces the Earth with the same side through
          tidal locking and causes tides, stabilizes Earth's axis, and
          gradually slows its rotation.
        </p>
        <p>
          Earth formed over 4.5 billion years ago. During the first billion
          years of Earth's history, the ocean formed and then life developed
          within it. Life spread globally and began to affect Earth's
          atmosphere and surface, leading to Earth's Great Oxidation Event two
          billion years ago. Humans emerged 300,000 years ago, and have
          reached a population of almost 8 billion today. Humans depend on
          Earth's biosphere and natural resources for their survival, but have
          increasingly impacted Earth's environment. Today, humanity's impact
          on Earth's climate, soils, waters, and ecosystems is unsustainable,
          threatening people's lives and causing widespread extinction of
          other life.
        </p>
        <p>
          The modern English word Earth developed, via Middle English, from an
          Old English noun most often spelled eor??e. It has cognates in every
          Germanic language, and their ancestral root has been reconstructed
          as *er????. In its earliest attestation, the word eor??e was already
          being used to translate the many senses of Latin terra and Greek ?????
          g??: the ground, its soil, dry land, the human world, the surface of
          the world (including the sea), and the globe itself. As with Roman
          Terra/Tell??s and Greek Gaia, Earth may have been a personified
          goddess in Germanic paganism: late Norse mythology included J??r??
          ('Earth'), a giantess often given as the mother of Thor.
        </p>
        <p>
          Historically, earth has been written in lowercase. From early Middle
          English, its definite sense as "the globe" was expressed as the
          earth. By Early Modern English, many nouns were capitalized, and the
          earth was also written the Earth, particularly when referenced along
          with other heavenly bodies. More recently, the name is sometimes
          simply given as Earth, by analogy with the names of the other
          planets, though earth and forms with the remain common. House styles
          now vary: Oxford spelling recognizes the lowercase form as the most
          common, with the capitalized form an acceptable variant. Another
          convention capitalizes "Earth" when appearing as a name (for
          example, "Earth's atmosphere") but writes it in lowercase when
          preceded by the (for example, "the atmosphere of the earth"). It
          almost always appears in lowercase in colloquial expressions such as
          "what on earth are you doing?"
        </p>
        <p>
          Occasionally, the name Terra /'t??r??/ is used in scientific writing
          and especially in science fiction to distinguish humanity's
          inhabited planet from others, while in poetry Tellus /'t??l??s/ has
          been used to denote personification of the Earth.[30] Terra is also
          the name of the planet in some Romance languages (languages that
          evolved from Latin) like Italian and Portuguese, while in other
          Romance languages the word gave rise to names with slightly altered
          spellings (like the Spanish Tierra and the French Terre). The
          Latinate form G??a or Gaea (English: /'d??i:??/) of the Greek poetic
          name Gaia (?????????; Ancient Greek: [g??i??.a] or [g??j.ja]) is rare, though
          the alternative spelling Gaia has become common due to the Gaia
          hypothesis, in which case its pronunciation is /'gai??/ rather than
          the more classical English /'gei??/.
        </p>
      </div>
      <div class="planet_div_separator">
        <img src="../media/planets/map_earth.jpg" alt="mercury map" />
      </div>
      <div class="planet_info planet_bottom">
        <br />
        <h3>Orbit, rotation, and longitude</h3>
        <p>
          Earth's rotation period relative to the Sun???its mean solar day???is
          86,400 seconds of mean solar time (86,400.0025 SI seconds). Because
          Earth's solar day is now slightly longer than it was during the 19th
          century due to tidal deceleration, each day varies between 0 and 2
          ms longer than the mean solar day.
        </p>
        <p>
          Earth's rotation period relative to the fixed stars, called its
          stellar day by the International Earth Rotation and Reference
          Systems Service (IERS), is 86,164.0989 seconds of mean solar time
          (UT1), or 23h 56m 4.0989s. Earth's rotation period relative to the
          precessing or moving mean March equinox (when the Sun is at 90?? on
          the equator), is 86,164.0905 seconds of mean solar time (UT1) (23h
          56m 4.0905s). Thus the sidereal day is shorter than the stellar day
          by about 8.4 ms.
        </p>
        <p>
          Apart from meteors within the atmosphere and low-orbiting
          satellites, the main apparent motion of celestial bodies in Earth's
          sky is to the west at a rate of 15??/h = 15'/min. For bodies near the
          celestial equator, this is equivalent to an apparent diameter of the
          Sun or the Moon every two minutes; from Earth's surface, the
          apparent sizes of the Sun and the Moon are approximately the same.
        </p>
        <p>
          Earth orbits the Sun at an average distance of about 150 million km
          (93 million mi) every 365.2564 mean solar days, or one sidereal
          year. This gives an apparent movement of the Sun eastward with
          respect to the stars at a rate of about 1??/day, which is one
          apparent Sun or Moon diameter every 12 hours. Due to this motion, on
          average it takes 24 hours???a solar day???for Earth to complete a full
          rotation about its axis so that the Sun returns to the meridian. The
          orbital speed of Earth averages about 29.78 km/s (107,200 km/h;
          66,600 mph), which is fast enough to travel a distance equal to
          Earth's diameter, about 12,742 km (7,918 mi), in seven minutes, and
          the distance to the Moon, 384,000 km (239,000 mi), in about 3.5
          hours.
        </p>
        <p>
          The Moon and Earth orbit a common barycenter every 27.32 days
          relative to the background stars. When combined with the Earth-Moon
          system's common orbit around the Sun, the period of the synodic
          month, from new moon to new moon, is 29.53 days. Viewed from the
          celestial north pole, the motion of Earth, the Moon, and their axial
          rotations are all counterclockwise. Viewed from a vantage point
          above the Sun and Earth's north poles, Earth orbits in a
          counterclockwise direction about the Sun. The orbital and axial
          planes are not precisely aligned: Earth's axis is tilted some 23.44
          degrees from the perpendicular to the Earth-Sun plane (the
          ecliptic), and the Earth-Moon plane is tilted up to ??5.1 degrees
          against the Earth-Sun plane. Without this tilt, there would be an
          eclipse every two weeks, alternating between lunar eclipses and
          solar eclipses.
        </p>
        <p>
          The Hill sphere, or the sphere of gravitational influence, of Earth
          is about 1.5 million km (930,000 mi) in radius.[148][n 9] This is
          the maximum distance at which Earth's gravitational influence is
          stronger than the more distant Sun and planets. Objects must orbit
          Earth within this radius, or they can become unbound by the
          gravitational perturbation of the Sun. Earth, along with the Solar
          System, is situated in the Milky Way and orbits about 28,000
          light-years from its center. It is about 20 light-years above the
          galactic plane in the Orion Arm.
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