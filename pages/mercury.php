<!DOCTYPE php>
<html>

<head>
  <title>Mercury</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../styles/header_footer_style.css">
  <link rel="stylesheet" href="../styles/planet_page_style.css">
  <link href="https://fonts.googleapis.com/css2?family=Aldrich&amp;family=Montserrat:wght@300&amp" rel="stylesheet">
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
      <img src="../media/planets/mercury.png" width="50%" onclick="display_image('pln_fullimg')">
    </div>

    <div class="grid">
      <div class="planet_title">
        <h1>Mercury</h1>
      </div>
      <div class="planet_separator"></div>
      <div class="planet_infobox">
        <table>
          <?php
          $planetData = file_get_contents("../data/planet_data.json");
          $array = json_decode($planetData)->mercury;
          ?>
          <tbody>
            <caption>Mercury</caption>
            <tr>
              <td>
                <img src="../media/planets/mercury.png" width="200%" onclick="display_image('pln_fullimg')">
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
          Mercury is the smallest planet in the Solar System and the closest to the Sun.
          Its orbit around the Sun takes 87.97 Earth days, the shortest of all the Sun's planets.
          It is named after the Roman god Mercurius (Mercury), god of commerce, messenger of the gods,
          and mediator between gods and mortals, corresponding to the Greek god Hermes (Ἑρμῆς).
          Like Venus, Mercury orbits the Sun within Earth's orbit as an inferior planet, and its
          apparent distance from the Sun as viewed from Earth never exceeds 28°. This proximity to the
          Sun means the planet can only be seen near the western horizon after sunset or the eastern
          horizon before sunrise, usually in twilight. At this time, it may appear as a bright star-like object,
          but is more difficult to observe than Venus. From Earth, the planet telescopically displays
          the complete range of phases, similar to Venus and the Moon, which recurs over its synodic period of
          approximately 116 days.
        </p>
        <p>
          Mercury rotates in a way that is unique in the Solar System.
          It is tidally locked with the Sun in a 3:2 spin-orbit resonance,
          meaning that relative to the fixed stars, it rotates on its axis exactly
          three times for every two revolutions it makes around the Sun.
          As seen from the Sun, in a frame of reference that rotates with the orbital motion,
          it appears to rotate only once every two Mercurian years.
          An observer on Mercury would therefore see only one day every two Mercurian years.
        </p>
        <p>
          Mercury's axis has the smallest tilt of any of the Solar System's planets (about 1/30 degree).
          Its orbital eccentricity is the largest of all known planets in the Solar System;
          at perihelion, Mercury's distance from the Sun is only about two-thirds (or 66%)
          of its distance at aphelion. Mercury's surface appears heavily cratered and is similar in appearance to the
          Moon's,
          indicating that it has been geologically inactive for billions of years. Having almost no atmosphere to retain
          heat,
          it has surface temperatures that vary diurnally more than on any other planet in the Solar System,
          ranging from 100 K (-173 °C; -280 °F) at night to 700 K (427 °C; 800 °F) during the day across the equatorial
          regions.
          The polar regions are constantly below 180 K (-93 °C; -136 °F). The planet has no known natural satellites.
        </p>
        <p>
          Two spacecraft have visited Mercury: Mariner 10 flew by in 1974 and 1975; and MESSENGER,
          launched in 2004, orbited Mercury over 4,000 times in four years before exhausting its fuel
          and crashing into the planet's surface on April 30, 2015. The BepiColombo spacecraft is planned to arrive at
          Mercury in 2025.
        </p>
        <br>
        <h3>Internal structure</h3>
        <p>Mercury appears to have a solid silicate crust and mantle overlying a solid,
          iron sulfide outer core layer, a deeper liquid core layer, and a solid inner core.
          The planet's density is the second highest in the Solar System at 5.427 g/cm3,
          only slightly less than Earth's density of 5.515 g/cm3. If the effect of gravitational
          compression were to be factored out from both planets, the materials of which Mercury is made
          would be denser than those of Earth, with an uncompressed density of 5.3 g/cm3 versus Earth's 4.4 g/cm3.
          Mercury's density can be used to infer details of its inner structure. Although Earth's high density results
          appreciably from gravitational compression, particularly at the core, Mercury is much smaller and its inner
          regions are not as compressed. Therefore, for it to have such a high density, its core must be large and rich
          in iron.
        </p>
        <p>The radius of Mercury's core is estimated to be 2,020 ± 30 km (1,255 ± 19 mi),
          based on interior models constrained to be consistent with the value of the moment
          of inertia factor given in the infobox.[9][34] Hence, Mercury's core occupies about
          57% of its volume; for Earth this proportion is 17%. Research published in 2007 suggests
          that Mercury has a molten core. Surrounding the core is a 500-700 km (310-430 mi) mantle consisting of
          silicates.
          Based on data from the Mariner 10 mission and Earth-based observation, Mercury's crust is
          estimated to be 35 km (22 mi) thick. However, this model may be an overestimate and the
          crust could be 26 ± 11 km (16.2 ± 6.8 mi) thick based on an Airy isostacy model.
          One distinctive feature of Mercury's surface is the presence of numerous narrow ridges,
          extending up to several hundred kilometers in length. It is thought that these were formed
          as Mercury's core and mantle cooled and contracted at a time when the crust had already solidified.
        </p>
        <p>
          Mercury's core has a higher iron content than that of any other major planet in the Solar System,
          and several theories have been proposed to explain this. The most widely accepted theory is that
          Mercury originally had a metal-silicate ratio similar to common chondrite meteorites, thought to
          be typical of the Solar System's rocky matter, and a mass approximately 2.25 times its current mass.
          Early in the Solar System's history, Mercury may have been struck by a planetesimal of
          approximately 1/6 that mass and several thousand kilometers across. The impact would have
          stripped away much of the original crust and mantle, leaving the core behind as a relatively major component.
          A similar process, known as the giant impact hypothesis, has been proposed to explain the formation of the
          Moon.
          Alternatively, Mercury may have formed from the solar nebula before the Sun's
          energy output had stabilized. It would initially have had twice its present mass,
          but as the protosun contracted, temperatures near Mercury could have been between 2,500 and
          3,500 K and possibly even as high as 10,000 K. Much of Mercury's surface rock could have
          been vaporized at such temperatures, forming an atmosphere of "rock vapor" that could have been carried away
          by the solar wind.
        </p>
        <p>
          A third hypothesis proposes that the solar nebula caused drag on the particles from which
          Mercury was accreting, which meant that lighter particles were lost from the
          accreting material and not gathered by Mercury. Each hypothesis predicts a different surface composition,
          and there are two space missions set to make observations. MESSENGER, which ended in 2015, found
          higher-than-expected potassium and sulfur levels on the surface, suggesting that the giant
          impact hypothesis and vaporization of the crust and mantle did not occur because potassium and
          sulfur would have been driven off by the extreme heat of these events. BepiColombo,
          which will arrive at Mercury in 2025, will make observations to test these hypotheses.
          The findings so far would seem to favor the third hypothesis; however, further analysis of the data is needed.
        </p>
      </div>
      <div class="planet_div_separator">
        <img src="../media/planets/map_mercury.jpg" alt="mercury map">
      </div>
      <div class="planet_info planet_bottom">
        <br>
        <h3>Orbit, rotation, and longitude</h3>
        <p>
          Mercury has the most eccentric orbit of all the planets in the Solar System;
          its eccentricity is 0.21 with its distance from the Sun ranging from 46,000,000 to 70,000,000 km
          (29,000,000 to 43,000,000 mi). It takes 87.969 Earth days to complete an orbit. The diagram illustrates the
          effects
          of the eccentricity, showing Mercury's orbit overlaid with a circular orbit
          having the same semi-major axis. Mercury's higher velocity when it is near perihelion is
          clear from the greater distance it covers in each 5-day interval. In the diagram, the varying
          distance of Mercury to the Sun is represented by the size of the planet, which is inversely
          proportional to Mercury's distance from the Sun. This varying distance to the Sun leads to
          Mercury's surface being flexed by tidal bulges raised by the Sun that are about 17 times stronger
          than the Moon's on Earth. Combined with a 3:2 spin-orbit resonance of the planet's rotation
          around its axis, it also results in complex variations of the surface temperature.
          The resonance makes a single solar day (the length between two meridian transits of the Sun)
          on Mercury last exactly two Mercury years, or about 176 Earth days.
        </p>
        <p>
          Mercury's orbit is inclined by 7 degrees to the plane of Earth's orbit (the ecliptic),
          the largest of all eight known solar planets.[107] As a result, transits of Mercury across
          the face of the Sun can only occur when the planet is crossing the plane of the ecliptic at
          the time it lies between Earth and the Sun, which is in May or November.
          This occurs about every seven years on average.
        </p>
        <p>
          Mercury's axial tilt is almost zero, with the best measured value as low as 0.027 degrees.
          This is significantly smaller than that of Jupiter, which has the second smallest axial tilt
          of all planets at 3.1 degrees. This means that to an observer at Mercury's poles, the center
          of the Sun never rises more than 2.1 arcminutes above the horizon
        </p>
        <p>
          At certain points on Mercury's surface, an observer would be able to see the Sun peek up
          a little more than two-thirds of the way over the horizon, then reverse and set before
          rising again, all within the same Mercurian day. This is because approximately four Earth days
          before perihelion, Mercury's angular orbital velocity equals its angular rotational
          velocity so that the Sun's apparent motion ceases; closer to perihelion, Mercury's angular
          orbital velocity then exceeds the angular rotational velocity. Thus, to a hypothetical observer
          on Mercury, the Sun appears to move in a retrograde direction. Four Earth days after perihelion,
          the Sun's normal apparent motion resumes. A similar effect would have occurred if Mercury
          had been in synchronous rotation: the alternating gain and loss of rotation over
          revolution would have caused a libration of 23.65° in longitude.
        </p>
        <p>
          For the same reason, there are two points on Mercury's equator, 180 degrees apart in longitude,
          at either of which, around perihelion in alternate Mercurian years (once a Mercurian day),
          the Sun passes overhead, then reverses its apparent motion and passes overhead again, then
          reverses a second time and passes overhead a third time, taking a total of about 16
          Earth-days for this entire process. In the other alternate Mercurian years, the same thing
          happens at the other of these two points. The amplitude of the retrograde motion is small,
          so the overall effect is that, for two or three weeks, the Sun is almost stationary overhead,
          and is at its most brilliant because Mercury is at perihelion, its closest to the Sun. This prolonged
          exposure to the Sun at its brightest makes these two points the hottest places on Mercury. Maximum
          temperature occurs when the Sun is at an angle of about 25 degrees past noon due to diurnal temperature lag,
          at 0.4 Mercury days and 0.8 Mercury years past sunrise.[112] Conversely, there are two other points on the
          equator,
          90 degrees of longitude apart from the first ones, where the Sun passes overhead only when the planet is
          at aphelion in alternate years, when the apparent motion of the Sun in Mercury's sky is relatively rapid.
          These points, which are the ones on the equator where the apparent retrograde motion of the Sun happens when
          it is crossing the horizon as described in the preceding paragraph, receive much less solar heat than the
          first ones described above.
        </p>
        <p>
          Mercury attains inferior conjunction (nearest approach to Earth) every 116 Earth days on average,
          but this interval can range from 105 days to 129 days due to the planet's eccentric orbit.
          Mercury can come as near as 82,200,000 kilometres (0.549 astronomical units; 51.1 million miles) to Earth,
          and that is slowly declining: The next approach to within 82,100,000 km (51.0 million miles) is in 2679,
          and to within 82,000,000 km (51 million miles) in 4487, but it will not be closer to Earth
          than 80,000,000 km (50 million miles) until 28,622.[114] Its period of retrograde motion as
          seen from Earth can vary from 8 to 15 days on either side of inferior conjunction. This large
          range arises from the planet's high orbital eccentricity.[29] Essentially because Mercury is closest
          to the Sun, when taking an average over time, Mercury is the closest planet to the Earth,
          and—in that measure—it is the closest planet to each of the other planets in the Solar System.
        </p>
      </div>
    </div>

    <div id="back_to_top" onclick="scroll_to_top()">
      <img src="../media/general/up.png" alt="Back to top image" width="50px">
    </div>

  </main>

  <footer class="footer">
    <p>Realizat de Gheorghița Valentin, IA-213</p>
  </footer>

  <script src="../scripts/index.js"></script>
</body>

</html>