<?php
  include '../includes/header.php';
  writeHeader("Morning Coffee")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/morning_coffee-final.png"><img src="/projects/illustrations/morning_coffee-final.png" alt="Two alien species enjoying a drink during sunrise while another species begs for a taste." /></a>
            <figcaption>The final piece.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/morning_coffee-sketch.png"><img src="/projects/illustrations/morning_coffee-sketch.png" alt="Original Sketch" /></a>
            <figcaption>The original sketch. The background was worked out at the same time as the colour scheme.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/morning_coffee-concept-1.png"><img src="/projects/illustrations/morning_coffee-concept-1.png" alt="Concept sketches of the first alien species." /></a>
            <figcaption>Concept sketches of the taller alien. Inspiration was taken from multiple existing insects, including mantids, leaf hoppers, wasps, and woolly aphids.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/morning_coffee-concept-2.png"><img src="/projects/illustrations/morning_coffee-concept-2.png" alt="Concept sketches of the second alien species." /></a>
            <figcaption>Concept sketches of the shorter alien. They were mainly inspired by bees - notably cuckoo bees - ants, and hummingbirds.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Morning Coffee</h1>
          <h2>A Colourful Alien Scene</h2>
          <p>A few years ago, I developed some neutral and friendly looking intelligent species, a few of which are pictured in this colourful and futuristic illustration. The main intent of this piece was to depict their final designs, and work with an unusual canvas ratio.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Photoshop</li>
            <li>Wacom Intuos</li>
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