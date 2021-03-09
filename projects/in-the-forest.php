<?php
  include '../includes/header.php';
  writeHeader("In the Forest")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/in_the_forest-final.jpg"><img src="/projects/illustrations/in_the_forest-final.jpg" alt="Sitting in a Peaceful Forest" /></a>
            <figcaption></figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>In the Forest</h1>
          <h2>A Personal Character Sits in a Calm Forest</h2>
          <p>This piece served as a bit of background and soft painting practise. I used a hard but low-opacity brush and eraser to create this effect. The character - Aqua - is an older creation of mine.</p> 
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