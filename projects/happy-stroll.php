<?php
  include '../includes/header.php';
  writeHeader("Happy Stroll")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/happy_stroll-final.png"><img src="/projects/illustrations/happy_stroll-final.png" alt="Happy Walking Dachshund with Butterfly" /></a>
            <figcaption></figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/happy_stroll-sketch.jpg"><img src="/projects/illustrations/happy_stroll-sketch.jpg" alt="Original Sketch" /></a>
            <figcaption></figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Happy Stroll</h1>
          <h2>A Dachshund Goes for a Walk</h2>
          <p>An appreciative illustration made for a fellow dog lover, and an excuse to work with a generated colour palette</p> 
          <h3>Created With:</h3>
          <ul>
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