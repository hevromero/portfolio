<?php
  include '../includes/header.php';
  writeHeader("Trick or Treat")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/graphic-design/trick_or_treat-final.png"><img src="/projects/graphic-design/trick_or_treat-final.png" alt="The final Trick-or-Treat poster." /></a>
            <figcaption>The version of the poster that was printed and placed by the door. I used a simple 3D extrude to create the candy corn on the ground.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/trick_or_treat-iteration.png"><img src="/projects/graphic-design/trick_or_treat-iteration.png" alt="Updated Trick-or-Treat poster, with added contrast, tweaked expressions, and updated ghost transparency" /></a>
            <figcaption>A updated version of the poster, created after receiving feedback. We realized that the cat needed a contrast bump, with the addition of a spookier expression. The ghost became smokier with a soft gradient.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/trick_or_treat-sketch.png"><img src="/projects/graphic-design/trick_or_treat-sketch.png" alt="The original Trick-or-Treat poster sketch." /></a>
            <figcaption>A quick Photoshop sketch of the creatures in the poster. The original ghost's design was changed as I felt its creepier mood didn't jive with the rest of the poster. </figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Trick or Treat</h1>
          <h2>A Halloween Poster</h2>
          <p>Living in an apartment complex during Halloween, I needed a way to advertise the fact that our apartment had candy for the taking. This poster was designed for standard letter paper, allowing for easy printing at home.</p> 
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