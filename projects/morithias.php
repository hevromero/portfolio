<?php
  include '../includes/header.php';
  writeHeader("Morithias")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/morithias-final.jpg"><img src="/projects/illustrations/morithias-final.jpg" alt="Morithias" /></a>
            <figcaption>Morithias</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Morithias</h1>
          <h2>A Time-Themed Dragon Character</h2>
          <p>Morithias is a fairly old character of mine. In this piece, I was experimenting with a new dragon drawing style. I used a number of textures and a color-burned gradient for the warm, bold appearance.</p> 
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