<!DOCTYPE php>
<html>

<head>
  <title>Neptune</title>
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
      <img src="../media/planets/neptune.png" width="45%" onclick="display_image('pln_fullimg')" />
    </div>

    <div class="grid">
      <div class="planet_title">
        <h1>Neptune</h1>
      </div>
      <div class="planet_separator"></div>
      <div class="planet_infobox">
        <table>
          <?php
            $planetData = file_get_contents("../data/planet_data.json");
            $array = json_decode($planetData)->neptune;
          ?>
          <tbody>
            <caption>
              Neptune
            </caption>
            <tr>
              <td>
                <img src="../media/planets/neptune.png" width="200%" onclick="display_image('pln_fullimg')" />
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
          Neptune is the eighth and farthest-known Solar planet from the Sun.
          In the Solar System, it is the fourth-largest planet by diameter,
          the third-most-massive planet, and the densest giant planet. It is
          17 times the mass of Earth, and slightly more massive than its
          near-twin Uranus. Neptune is denser and physically smaller than
          Uranus because its greater mass causes more gravitational
          compression of its atmosphere. It is referred to as one of the solar
          system's two ice giant planets (the other one being its near-twin
          Uranus).
        </p>
        <p>
          Being composed primarily of gases and liquids, it has no
          well-defined "solid surface." The planet orbits the Sun once every
          164.8 years at an average distance of 30.1 AU (4.5 billion km; 2.8
          billion mi). It is named after the Roman god of the sea and has the
          astronomical symbol ???, representing Neptune's trident.
        </p>
        <p>
          Neptune is not visible to the unaided eye and is the only planet in
          the Solar System found by mathematical prediction rather than by
          empirical observation. Unexpected changes in the orbit of Uranus led
          Alexis Bouvard to deduce that its orbit was subject to gravitational
          perturbation by an unknown planet. After Bouvard's death, the
          position of Neptune was predicted from his observations,
          independently, by John Couch Adams and Urbain Le Verrier. Neptune
          was subsequently observed with a telescope on 23 September 1846 by
          Johann Galle within a degree of the position predicted by Le
          Verrier. Its largest moon, Triton, was discovered shortly
          thereafter, though none of the planet's remaining 13 known moons
          were located telescopically until the 20th century. The planet's
          distance from Earth gives it a very small apparent size, making it
          challenging to study with Earth-based telescopes. Neptune was
          visited by Voyager 2, when it flew by the planet on 25 August 1989;
          Voyager 2 remains the only spacecraft to have visited Neptune. The
          advent of the Hubble Space Telescope and large ground-based
          telescopes with adaptive optics has recently allowed for additional
          detailed observations from afar.
        </p>
        <p>
          Like Jupiter and Saturn, Neptune's atmosphere is composed primarily
          of hydrogen and helium, along with traces of hydrocarbons and
          possibly nitrogen, though it contains a higher proportion of "ices"
          such as water, ammonia and methane. However, similar to Uranus, its
          interior is primarily composed of ices and rock; Uranus and Neptune
          are normally considered "ice giants" to emphasise this
          distinction.[20] Traces of methane in the outermost regions in part
          account for the planet's blue appearance,[21] though an unknown
          component is believed to color Neptune a deeper blue compared to
          Uranus.
        </p>
        <p>
          In contrast to the hazy, relatively featureless atmosphere of
          Uranus, Neptune's atmosphere has active and visible weather
          patterns. For example, at the time of the Voyager 2 flyby in 1989,
          the planet's southern hemisphere had a Great Dark Spot comparable to
          the Great Red Spot on Jupiter. More recently, in 2018, a newer main
          dark spot and smaller dark spot were identified and studied. In
          addition, these weather patterns are driven by the strongest
          sustained winds of any planet in the Solar System, with recorded
          wind speeds as high as 2,100 km/h (580 m/s; 1,300 mph). Because of
          its great distance from the Sun, Neptune's outer atmosphere is one
          of the coldest places in the Solar System, with temperatures at its
          cloud tops approaching 55 K (-218 ??C; -361 ??F). Temperatures at the
          planet's centre are approximately 5,400 K (5,100 ??C; 9,300 ??F).
          Neptune has a faint and fragmented ring system (labelled "arcs"),
          which was discovered in 1984, then later confirmed by Voyager 2.
        </p>
        <br />
        <h3>Internal structure</h3>
        <p>
          Neptune's internal structure resembles that of Uranus. Its
          atmosphere forms about 5 to 10% of its mass and extends perhaps 10
          to 20% of the way towards the core, where it reaches pressures of
          about 10 GPa, or about 100,000 times that of Earth's atmosphere.
          Increasing concentrations of methane, ammonia and water are found in
          the lower regions of the atmosphere.
        </p>
        <p>
          The mantle is equivalent to 10 to 15 Earth masses and is rich in
          water, ammonia and methane. As is customary in planetary science,
          this mixture is referred to as icy even though it is a hot, dense
          fluid. This fluid, which has a high electrical conductivity, is
          sometimes called a water-ammonia ocean. The mantle may consist of a
          layer of ionic water in which the water molecules break down into a
          soup of hydrogen and oxygen ions, and deeper down superionic water
          in which the oxygen crystallises but the hydrogen ions float around
          freely within the oxygen lattice.[66] At a depth of 7,000 km, the
          conditions may be such that methane decomposes into diamond crystals
          that rain downwards like hailstones. Scientists also believe that
          this kind of diamond rain occurs on Jupiter, Saturn, and Uranus.
          Very-high-pressure experiments at the Lawrence Livermore National
          Laboratory suggest that the top of the mantle may be an ocean of
          liquid carbon with floating solid 'diamonds'.
        </p>
        <p>
          The core of Neptune is likely composed of iron, nickel and
          silicates, with an interior model giving a mass about 1.2 times that
          of Earth. The pressure at the centre is 7 Mbar (700 GPa), about
          twice as high as that at the centre of Earth, and the temperature
          may be 5,400 K.
        </p>
      </div>
      <div class="planet_div_separator">
        <img src="../media/planets/map_neptune.jpg" alt="neptune map" />
      </div>
      <div class="planet_info planet_bottom">
        <br />
        <h3>Orbit, rotation, and longitude</h3>
        <p>
          The average distance between Neptune and the Sun is 4.5 billion km
          (about 30.1 astronomical units (AU)), and it completes an orbit on
          average every 164.79 years, subject to a variability of around ??0.1
          years. The perihelion distance is 29.81 AU; the aphelion distance is
          30.33 AU.
        </p>
        <p>
          On 11 July 2011, Neptune completed its first full barycentric orbit
          since its discovery in 1846,[106][107] although it did not appear at
          its exact discovery position in the sky, because Earth was in a
          different location in its 365.26 day orbit. Because of the motion of
          the Sun in relation to the barycentre of the Solar System, on 11
          July Neptune was also not at its exact discovery position in
          relation to the Sun; if the more common heliocentric coordinate
          system is used, the discovery longitude was reached on 12 July 2011.
        </p>
        <p>
          The elliptical orbit of Neptune is inclined 1.77?? compared to that
          of Earth.
        </p>
        <p>
          The axial tilt of Neptune is 28.32??, which is similar to the tilts
          of Earth (23??) and Mars (25??). As a result, Neptune experiences
          similar seasonal changes to Earth. The long orbital period of
          Neptune means that the seasons last for forty Earth years. Its
          sidereal rotation period (day) is roughly 16.11 hours. Because its
          axial tilt is comparable to Earth's, the variation in the length of
          its day over the course of its long year is not any more extreme.
        </p>
        <p>
          Because Neptune is not a solid body, its atmosphere undergoes
          differential rotation. The wide equatorial zone rotates with a
          period of about 18 hours, which is slower than the 16.1-hour
          rotation of the planet's magnetic field. By contrast, the reverse is
          true for the polar regions where the rotation period is 12 hours.
          This differential rotation is the most pronounced of any planet in
          the Solar System, and it results in strong latitudinal wind shear.
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