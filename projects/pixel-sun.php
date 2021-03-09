<?php
  include '../includes/header.php';
  writeHeader("Pixel Sun")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/graphic-design/pixel_sun-photo.jpg"><img src="/projects/graphic-design/pixel_sun-photo.jpg" alt="Pixel Sun album as printed onto a Album cover, CD cover, record disc, and CD." /></a>
            <figcaption>Photo of the final cover and sticker prints.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/pixel_sun-final.png"><img src="/projects/graphic-design/pixel_sun-final.png" alt="The final digital album. It was created as a scalable vector image." /></a>
            <figcaption>The flat front and back template.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Pixel Sun</h1>
          <h2>Print Test with an Album and CD Cover</h2>
          <p>"Pixel Sun" was one of my later works in SAIT Polytechnic's New Media Production and Design program. We had to work with either a utopic or dystopic theme; I decided to work with the disconnect between current events and movie fiction for a dystopia that hits closer to home.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Illustrator</li>
            <li>Adobe Photoshop</li>
            <li>Wacom Intuos</li>
          </ul>

          <div class="more-works">
            <h3>See More</h3>
            <ul>
              <?php
                include '../includes/random-work.php';
                writeRandomWork('graphic-design')
              ?>
            </ul>
          </div>
        </div>
      </div>
    </article>
    <?php include '../includes/footer.php'; ?>
  </body>
</html>