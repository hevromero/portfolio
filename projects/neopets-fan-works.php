<?php
  include '../includes/header.php';
  writeHeader("Neopets Fan Works")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/neopets-apple_chase-final.png"><img src="/projects/illustrations/neopets-apple_chase-final.png" alt="A Draik and Airax chase after a Faerie Apple in a mountainous landscape." /></a>
            <figcaption>Capturing some of the weirdness of Neopia. A Draik and Airax chase after a Faerie Apple in a mountainous landscape.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/neopets-apple_chase-sketch.png"><img src="/projects/illustrations/neopets-apple_chase-sketch.png" alt="The original Draik and Airax sketches." /></a>
            <figcaption>The original Draik and Airax sketches.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/neopets-vandygres-final.png"><img src="/projects/illustrations/neopets-vandygres-final.png" alt="The four default Vandygre pet colours stand together." /></a>
            <figcaption>The four default Vandygre pet colours stand together. Neopets generally have the same body types, and I wanted to try giving them some variation.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/neopets-vandygres-sketch.png"><img src="/projects/illustrations/neopets-vandygres-sketch.png" alt="The source sketches of each Vandygre." /></a>
            <figcaption>The source sketches of each Vandygre.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Neopets Fan Works</h1>
          <h2>Fan Works of Various Neopets Properties</h2>
          <p>A selection of works based on the colourful and varied creatures found in Neopia.</p> 
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