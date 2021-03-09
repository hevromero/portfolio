<?php
  include '../includes/header.php';
  writeHeader("Subeta: Official and Custom")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/subeta-endeavor-final.png"><img src="/projects/illustrations/subeta-endeavor-final.png" alt="Official Endeavor Pet Colours" /></a>
            <figcaption>Official Endeavor pet colours: Common (base for standard colours), Angelic, Bloodred, Darkmatter, Galactic, Graveyard, Nightmare, and Reborn.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/subeta-illumis-final.png"><img src="/projects/illustrations/subeta-illumis-final.png" alt="Official Illumis Pet Colours" /></a>
            <figcaption>Official Illumis pet colours: Common, Chibi, Galactic, and Spectrum.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/subeta-pets-final.png"><img src="/projects/illustrations/subeta-pets-final.png" alt="Official Pet Colours, Other" /></a>
            <figcaption>Other Subeta species: The Common Swampie (plus standard colours), Galactic Swampie, Cadogre (pictured: Nuclear), Experiment 336, Experiment 1337, Experiment 69012, Galactic Darkonite, and Galactic Warador.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/subeta-items-final.png"><img src="/projects/illustrations/subeta-items-final.png" alt="Official Subeta Items" /></a>
            <figcaption>A small portion of the many items that I created and updated.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/subeta-custom-final.png"><img src="/projects/illustrations/subeta-custom-final.png" alt="Custom Subeta Pets" /></a>
            <figcaption>These were not created for Agoge Inc and Subeta, but rather for users of Subeta for their own purposes. The one exception is the update to the Chibi Illumis (top, right), which was a personal update to improve on my original artwork.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Subeta: Official &amp; Custom</h1>
          <h2>Illustrations for Subeta and its Users</h2>
          <p>Samples of my work from when I was universal artist at Agoge Inc. I updated the Endeavor, Swampie, and Cadogre pet artwork, and created a new species - the Illumis. I was also tasked with designing and illustrating standard items, items for human avatars, and hero illustrations.</p>
          <p><a href="http://www.subeta.net">Subeta</a> also allows users to redesign their main and pet profiles. I was commissioned several times to create custom pet artwork for override purposes.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Photoshop</li>
            <li>Wacom Cintiq</li>
          </ul>

          <div class="more-works">
            <h3>See More</h3>
            <ul>
              <?php
                include '../includes/random-work.php';
                writeRandomWork('illustrations')
              ?>
            </ul>
          </div>
        </div>
      </div>
    </article>
    <?php include '../includes/footer.php'; ?>
  </body>
</html>