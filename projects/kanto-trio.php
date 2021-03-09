<?php
  include '../includes/header.php';
  writeHeader("Kanto Trio")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/kanto_trio-articuno-final.png"><img src="/projects/illustrations/kanto_trio-articuno-final.png" alt="Articuno" /></a>
            <figcaption>Articuno</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/kanto_trio-zapdos-final.png"><img src="/projects/illustrations/kanto_trio-zapdos-final.png" alt="Zapdos" /></a>
            <figcaption>Zapdos</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/kanto_trio-moltres-final.png"><img src="/projects/illustrations/kanto_trio-moltres-final.png" alt="Lovebird" /></a>
            <figcaption>Moltres</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Pokemon: Kanto Trio</h1>
          <h2>The Legendary Birds of Pokemon Red &amp; Blue</h2>
          <p>This fun mini-project ended up adding to my understanding of Procreate for iPad Pro. Moltres and Articuno were created in Photoshop, but Zapdos was created using the iPad illustration app. I was able to translate some Photoshop tricks, such as clipping masks, to the app (which even allows easy recording of video).</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Illustrator</li>
            <li>Wacom Cintiq</li>
            <li>Procreate</li>
            <li>iPad Pro</li>
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