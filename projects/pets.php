<?php
  include '../includes/header.php';
  writeHeader("Pets")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/pets-final.jpg"><img src="/projects/illustrations/pets-final.jpg" alt="Four miniature dachshunds and a large gift box." /></a>
            <figcaption>The miniature dachshunds Moki, Taffi, Rosie, and Porsche.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/pets-sketch.png"><img src="/projects/illustrations/pets-sketch.png" alt="Source sketch for pets drawing." /></a>
            <figcaption>The original sketch. Rather than hiding the sketch work entirely under new line art, I built around and on top of the original work.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Pets</h1>
          <h2>A Mini Troupe of Mini Dachshunds</h2>
          <p>A birthday illustration of my beloved dogs. They each had very unique characteristics that I attempted to capture.</p> 
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