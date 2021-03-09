<?php
  include '../includes/header.php';
  writeHeader("Pokemon Fan Works")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/pokemon-cosmog-final.jpg"><img src="/projects/illustrations/pokemon-cosmog-final.jpg" alt="The Pokémon Cosmog with fireflies." /></a>
            <figcaption>Cosmog has one of my favourite colour schemes of any Pokemon. I wanted to accentuate the sunrise-like colours in this piece.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/pokemon-cave-final.jpg"><img src="/projects/illustrations/pokemon-cave-final.jpg" alt="A Druddigon and Joltik look around a cave." /></a>
            <figcaption>Digital painting of Druddigon and Joltik.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/pokemon-fish-final.jpg"><img src="/projects/illustrations/pokemon-fish-final.jpg" alt="The common fish pokemon swim in a circle." /></a>
            <figcaption>Illustration of the common fish in the series, using a limited colour palette.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/pokemon-rowlet-final.png"><img src="/projects/illustrations/pokemon-rowlet-final.png" alt="Vector illustration of Rowlet, an owl-based pokemon." /></a>
            <figcaption>Simple vector illustration of Rowlet.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Pokemon Fan Works</h1>
          <h2>Illustrations of Creatures from the Pokemon Franchise</h2>
          <p>Various drawings of creatures from the Pokémon game series.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Photoshop</li>
            <li>Adobe Illustration</li>
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