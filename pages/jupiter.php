<!DOCTYPE php>
<html>

<head>
  <title>Jupiter</title>
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
      <img src="../media/planets/jupiter.png" width="45%" onclick="display_image('pln_fullimg')" />
    </div>

    <div class="grid">
      <div class="planet_title">
        <h1>Jupiter</h1>
      </div>
      <div class="planet_separator"></div>
      <div class="planet_infobox">
        <table>
          <?php
            $planetData = file_get_contents("../data/planet_data.json");
            $array = json_decode($planetData)->jupiter;
          ?>
          <tbody>
            <caption>
              Jupiter
            </caption>
            <tr>
              <td>
                <img src="../media/planets/jupiter.png" width="200%" onclick="display_image('pln_fullimg')" />
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
          Jupiter is the fifth planet from the Sun and the largest in the
          Solar System. It is a gas giant with a mass more than two and a half
          times that of all the other planets in the Solar System combined,
          but slightly less than one-thousandth the mass of the Sun. Jupiter
          is the third brightest natural object in the Earth's night sky after
          the Moon and Venus. People have been observing it since prehistoric
          times; it was named after the Roman god Jupiter, the king of the
          gods.
        </p>
        <p>
          Jupiter is primarily composed of hydrogen, but helium constitutes
          one-quarter of its mass and one-tenth of its volume. It likely has a
          rocky core of heavier elements, but, like the other giant planets,
          Jupiter lacks a well-defined solid surface. The ongoing contraction
          of its interior generates heat greater than the amount received from
          the Sun. Because of its rapid rotation, the planet's shape is an
          oblate spheroid; it has a slight but noticeable bulge around the
          equator. The outer atmosphere is visibly segregated into several
          bands at different latitudes, with turbulence and storms along their
          interacting boundaries. A prominent result of this is the Great Red
          Spot, a giant storm known to have existed since at least the 17th
          century when telescopes first saw it.
        </p>
        <p>
          Surrounding Jupiter is a faint planetary ring system and a powerful
          magnetosphere. Jupiter's magnetic tail is nearly 800 million km (5.3
          AU; 500 million mi) long, covering nearly the entire distance to
          Saturn's orbit. Jupiter has 80 known moons and possibly many more,
          including the four large Galilean moons discovered by Galileo
          Galilei in 1610: Io, Europa, Ganymede, and Callisto. Io and Europa
          are about the size of Earth's Moon; Callisto is almost the size of
          the planet Mercury, and Ganymede is larger.
        </p>
        <p>
          Pioneer 10 was the first spacecraft to visit Jupiter, making its
          closest approach to the planet in December 1973. Jupiter has since
          been explored on several occasions by robotic spacecraft, beginning
          with the Pioneer and Voyager flyby missions from 1973 to 1979, and
          later by the Galileo orbiter, which arrived at Jupiter in 1995. In
          2007, the New Horizons visited Jupiter using its gravity to increase
          its speed, bending its trajectory en route to Pluto. The latest
          probe to visit the planet, Juno, entered orbit around Jupiter in
          July 2016. Future targets for exploration in the Jupiter system
          include the probable ice-covered liquid ocean of Europa.
        </p>
        <br>
        <h3>Name and symbol</h3>
        <p>
          In Classical mythology it was named for the king of the gods: Zeus
          to the Greeks and Jupiter to the Romans. The name Jupiter for the
          planet was formally adopted by the International Astronomical Union
          resolution No. 10 in 1976. The satellites of Jupiter are named by
          the IAU working group for Planetary System Nomenclature (WGPSN) for
          the mythological lovers, favorites, and descendants of Jove/Jupiter.
          The planetary symbol for Jupiter, ♃, descends from a Greek zeta with
          a horizontal stroke, ⟨Ƶ⟩, as an abbreviation for Zeus. Jove came
          into use as a poetic name for the planet around the fourteenth
          century.
        </p>
        <p>
          The Romans named the fifth day of the week diēs Iovis ("Jove's Day")
          for the planet Jupiter. The English equivalent is Thursday ("Thor's
          day").
        </p>
      </div>
      <div class="planet_div_separator">
        <img src="../media/planets/map_jupiter.jpg" alt="mercury map" />
      </div>
      <div class="planet_info planet_bottom">
        <br />
        <h3>Orbit, rotation, and longitude</h3>
        <p>
          Jupiter is the only planet whose barycentre with the Sun lies
          outside the volume of the Sun, though by only 7% of the Sun's
          radius. The average distance between Jupiter and the Sun is 778
          million km (about 5.2 times the average distance between Earth and
          the Sun, or 5.2 AU) and it completes an orbit every 11.86 years.
          This is approximately two-fifths the orbital period of Saturn,
          forming a near orbital resonance. The orbital plane of Jupiter is
          inclined 1.31° compared to Earth. Because the eccentricity of its
          orbit is 0.048, Jupiter is slightly over 75 million km nearer the
          Sun at perihelion than aphelion.
        </p>
        <p>
          The axial tilt of Jupiter is relatively small, only 3.13°, so its
          seasons are insignificant compared to those of Earth and Mars.
        </p>
        <p>
          Jupiter's rotation is the fastest of all the Solar System's planets,
          completing a rotation on its axis in slightly less than ten hours;
          this creates an equatorial bulge easily seen through an amateur
          telescope. The planet is an oblate spheroid, meaning that the
          diameter across its equator is longer than the diameter measured
          between its poles. On Jupiter, the equatorial diameter is 9,275 km
          (5,763 mi) longer than the polar diameter.
        </p>
        <p>
          Because Jupiter is not a solid body, its upper atmosphere undergoes
          differential rotation. The rotation of Jupiter's polar atmosphere is
          about 5 minutes longer than that of the equatorial atmosphere; three
          systems are used as frames of reference, particularly when graphing
          the motion of atmospheric features. System I applies to latitudes
          from 10° N to 10° S; its period is the planet's shortest, at 9h 50m
          30.0s. System II applies at all latitudes north and south of these;
          its period is 9h 55m 40.6s. System III was defined by radio
          astronomers and corresponds to the rotation of the planet's
          magnetosphere; its period is Jupiter's official rotation.
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