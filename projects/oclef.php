<?php
  include '../includes/header.php';
  writeHeader("OClef")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/graphic-design/oclef-icons-final.png"><img src="/projects/graphic-design/oclef-icons-final.png" alt="Four large colourful icons and 4 small menu icons with active and inactive states." /></a>
            <figcaption>The source and scaled icons that were delivered to OClef.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/oclef-ui-mockups.png"><img src="/projects/graphic-design/oclef-ui-mockups.png" alt="Icons overlayed on an iPhone with different user interface suggestions." /></a>
            <figcaption>User Interface mock-ups with the final icons.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/oclef-metronome-sketch.png"><img src="/projects/graphic-design/oclef-metronome-sketch.png" alt="Sketches of Metronome icon suggestions." /></a>
            <figcaption>Sketches of icons for OClef's metronome. We chose the classic metronome shape for its recognizability.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/oclef-record-sketch.png"><img src="/projects/graphic-design/oclef-record-sketch.png" alt="Sketches of Record icon suggestions." /></a>
            <figcaption>Sketches for the Record function. Record discs and mics are two clear options, but I made sure to go outside the box a bit. In the end, the mic won.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/oclef-tune-sketch.png"><img src="/projects/graphic-design/oclef-tune-sketch.png" alt="Sketches of Tune icons suggestions." /></a>
            <figcaption>Sketches for the Oclef's tuning function. Tuning forks were an obvious option; instead we choose birds as a fun option that was symbolic of clear songs and mimicry.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/oclef-clock-sketch.png"><img src="/projects/graphic-design/oclef-clock-sketch.png" alt="Sketches of Clock icon suggestions." /></a>
            <figcaption>Sketches for the Oclef clock. We chose a modified hourglass that incorporated the rounded shape of the OClef logo.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/oclef-toolbar-iterations.png"><img src="/projects/graphic-design/oclef-toolbar-iterations.png" alt="More refined options for Tools, Chat, Students, and Library icons." /></a>
            <figcaption>More refined vector suggestions for the Tools, Chat, Student, and Library menu options. The small scale meant that I kept the icons simple; however I continued to offer many options.</figcaption>
          </figure>
        </div>
        <div class="works-info">
        <a href="/" class="close">x</a>
          <h1>OClef</h1>
          <h2>An Iconography Project</h2>
          <p>I worked with the creators of <a href="http://oclef.com/">OClef</a> to develop a user interface and an icon set for their music learning app. This app is for young students learning to play musical instruments.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Illustrator</li>
            <li>Adobe Photoshop</li>
            <li>Wacom Cintiq</li>
          </ul>

          <div class="more-works">
            <h3>See More</h3>
            <ul>
              <?php
                include '../includes/random-work.php';
                writeRandomWork('graphic-design')
              ?>
            </ul>
          </div>
        </div>
      </div>
    </article>
    <?php include '../includes/footer.php'; ?>
  </body>
</html>