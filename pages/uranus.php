<!DOCTYPE php>
<html>

<head>
  <title>Uranus</title>
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
      <img src="../media/planets/uranus.png" width="60%" onclick="display_image('pln_fullimg')" />
    </div>

    <div class="grid">
      <div class="planet_title">
        <h1>Uranus</h1>
      </div>
      <div class="planet_separator"></div>
      <div class="planet_infobox">
        <table>
          <?php
            $planetData = file_get_contents("../data/planet_data.json");
            $array = json_decode($planetData)->uranus;
          ?>
          <tbody>
            <caption>
              Uranus
            </caption>
            <tr>
              <td>
                <img src="../media/planets/uranus.png" width="200%" onclick="display_image('pln_fullimg')" />
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
          Uranus is the seventh planet from the Sun. Its name is a reference
          to the Greek god of the sky, Uranus, who, according to Greek
          mythology, was the great-grandfather of Ares (Mars), grandfather of
          Zeus (Jupiter) and father of Cronus (Saturn). It has the
          third-largest planetary radius and fourth-largest planetary mass in
          the Solar System. Uranus is similar in composition to Neptune, and
          both have bulk chemical compositions which differ from that of the
          larger gas giants Jupiter and Saturn. For this reason, scientists
          often classify Uranus and Neptune as "ice giants" to distinguish
          them from the other giant planets.
        </p>
        <p>
          As with gas giants, ice giants also lack a well defined "solid
          surface." Uranus's atmosphere is similar to Jupiter's and Saturn's
          in its primary composition of hydrogen and helium, but it contains
          more "ices" such as water, ammonia, and methane, along with traces
          of other hydrocarbons. It has the coldest planetary atmosphere in
          the Solar System, with a minimum temperature of 49 K (-224 °C; -371
          °F), and has a complex, layered cloud structure with water thought
          to make up the lowest clouds and methane the uppermost layer of
          clouds. The interior of Uranus is mainly composed of ices and rock.
        </p>
        <p>
          Like the other giant planets, Uranus has a ring system, a
          magnetosphere, and numerous moons. The Uranian system has a unique
          configuration because its axis of rotation is tilted sideways,
          nearly into the plane of its solar orbit. Its north and south poles,
          therefore, lie where most other planets have their equators. In
          1986, images from Voyager 2 showed Uranus as an almost featureless
          planet in visible light, without the cloud bands or storms
          associated with the other giant planets. Voyager 2 remains the only
          spacecraft to visit the planet. Observations from Earth have shown
          seasonal change and increased weather activity as Uranus approached
          its equinox in 2007. Wind speeds can reach 250 metres per second
          (900 km/h; 560 mph).
        </p>
        <br />
        <h3>Discovery</h3>
        <p>
          Uranus had been observed on many occasions before its recognition as
          a planet, but it was generally mistaken for a star. Possibly the
          earliest known observation was by Hipparchos, who in 128 BC might
          have recorded it as a star for his star catalogue that was later
          incorporated into Ptolemy's Almagest. The earliest definite sighting
          was in 1690, when John Flamsteed observed it at least six times,
          cataloguing it as 34 Tauri. The French astronomer Pierre Charles Le
          Monnier observed Uranus at least twelve times between 1750 and 1769,
          including on four consecutive nights.
        </p>
        <p>
          Sir William Herschel observed Uranus on 13 March 1781 from the
          garden of his house at 19 New King Street in Bath, Somerset, England
          (now the Herschel Museum of Astronomy), and initially reported it
          (on 26 April 1781) as a comet. With a homemade 6.2-inch reflecting
          telescope, Herschel "engaged in a series of observations on the
          parallax of the fixed stars."
        </p>
        <p>
          Herschel recorded in his journal: "In the quartile near ζ Tauri ...
          either Nebulous star or perhaps a comet." On 17 March he noted: "I
          looked for the Comet or Nebulous Star and found that it is a Comet,
          for it has changed its place." When he presented his discovery to
          the Royal Society, he continued to assert that he had found a comet,
          but also implicitly compared it to a planet.
        </p>
        <p>
          The object was soon universally accepted as a new planet. By 1783,
          Herschel acknowledged this to Royal Society president Joseph Banks:
          "By the observation of the most eminent Astronomers in Europe it
          appears that the new star, which I had the honour of pointing out to
          them in March 1781, is a Primary Planet of our Solar System." In
          recognition of his achievement, King George III gave Herschel an
          annual stipend of £200 on condition that he move to Windsor so that
          the Royal Family could look through his telescopes (equivalent to
          £25,000 in 2020).
        </p>
      </div>
      <div class="planet_div_separator">
        <img src="../media/planets/map_uranus.jpg" alt="uranus map" />
      </div>
      <div class="planet_info planet_bottom">
        <br />
        <h3>Orbit, rotation, and longitude</h3>
        <p>
          Uranus orbits the Sun once every 84 years, taking an average of
          seven years to pass through each of the dozen constellations of the
          zodiac. In 2033, the planet will have made its third complete orbit
          around the Sun since being discovered in 1781. The planet has
          returned to the point of its discovery northeast of Zeta Tauri twice
          since then, in 1862 and 1943, one day later each time as the
          precession of the equinoxes has shifted it 1° west every 72 years.
          Uranus will return to this location again in 2030-31. Its average
          distance from the Sun is roughly 20 AU (3 billion km; 2 billion mi).
          The difference between its minimum and maximum distance from the Sun
          is 1.8 AU, larger than that of any other planet, though not as large
          as that of dwarf planet Pluto. The intensity of sunlight varies
          inversely with the square of distance, and so on Uranus (at about 20
          times the distance from the Sun compared to Earth) it is about 1/400
          the intensity of light on Earth.
        </p>
        <p>
          The orbital elements of Uranus were first calculated in 1783 by
          Pierre-Simon Laplace. With time, discrepancies began to appear
          between the predicted and observed orbits, and in 1841, John Couch
          Adams first proposed that the differences might be due to the
          gravitational tug of an unseen planet. In 1845, Urbain Le Verrier
          began his own independent research into Uranus's orbit. On 23
          September 1846, Johann Gottfried Galle located a new planet, later
          named Neptune, at nearly the position predicted by Le Verrier.
        </p>
        <p>
          The rotational period of the interior of Uranus is 17 hours, 14
          minutes. As on all the giant planets, its upper atmosphere
          experiences strong winds in the direction of rotation. At some
          latitudes, such as about 60 degrees south, visible features of the
          atmosphere move much faster, making a full rotation in as little as
          14 hours.
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