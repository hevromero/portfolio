<?php
  include '../includes/header.php';
  writeHeader("Poly Mantis")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/poly_mantis-final.png"><img src="/projects/illustrations/poly_mantis-final.png" alt="A mantis with clearly visible polygonal faces." /></a>
            <figcaption></figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Poly Mantis</h1>
          <h2>A Pseudo Low-Poly Mantis</h2>
          <p>I wanted to try mimicking the now-common low-poly style of illustration. Not having access to 3DS Max, I made my best attempt with Adobe Photoshop and Illustrator.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Photoshop</li>
            <li>Adobe Illustrator</li>
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