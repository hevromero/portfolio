<?php
  include '../includes/header.php';
  writeHeader("The Magic of Networking")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/graphic-design/the_magic_of_networking-final.jpg"><img src="/projects/graphic-design/the_magic_of_networking-final.jpg" alt="TITLE" /></a>
            <figcaption>The final poster stands out against a multitude of "Spring" themed posters with rich magentas. I had to test several different ideas with the rays. In the end, a simple fill would not do. Instead I opted to use a combination of symbol tool and hand placement.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/the_magic_of_networking-palette.jpg"><img src="/projects/graphic-design/the_magic_of_networking-palette.jpg" alt="Palette and Typefaces Used in the Poster." /></a>
            <figcaption>This document was provided to our event coordinator, who wanted to theme the event based on the final poster.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/the_magic_of_networking-sketch.png"><img src="/projects/graphic-design/the_magic_of_networking-sketch.png" alt="Original Poster Sketch" /></a>
            <figcaption>The source sketch kept much of the basic idea, with a few tweaks.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>The Magic of Networking</h1>
          <h2>An Alumni Mixer Poster</h2>
          <p>I was given a simple theme for this promotional poster: "The Magic of Networking". Both "Magic" and "Networking" bring up a lot of fun ideas, including cauldrons, sparkles, pins, and the many social networks currently in use. I wound up borrowing the idea of pulling something out of a hat, but with the theme of "possibilities".</p> 
          <h3>Created With:</h3>
          <ul>
            <li>MediBang Paint</li>
            <li>Adobe Illustrator</li>
            <li>Wacom Cintiq</li>
            <li>iPad Pro</li>
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