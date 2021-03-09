<?php
  include '../includes/header.php';
  writeHeader("Interactive Games")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <video poster="/projects/graphic-design/ether_express-video.jpg" autoplay controls>
              <source src="/projects/graphic-design/ether_express-video.mp4">
            </video>
            <figcaption>Ether Express, a simple game that mainly utilizes drag and drop functionality.</figcaption>
          </figure>
          <figure>
            <video poster="/projects/graphic-design/monster_maker-video.jpg" autoplay controls>
              <source src="/projects/graphic-design/monster_maker-video.mp4">
            </video>
            <figcaption>Monster Maker, a character customizer. This game tests tweens.</figcaption>
          </figure>
          <figure>
            <video poster="/projects/graphic-design/car_color_selector-video.jpg" autoplay controls>
              <source src="/projects/graphic-design/car_color_selector-video.mp4">
            </video>
            <figcaption>A car color (and decal) selector.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Interactive Games</h1>
          <h2>Graphic and Flash Design for Simple Games</h2>
          <p>These colourful games were created while testing functionality within Adobe Flash.</p>
          <p>The source concepts were created on paper and digitally in Adobe Photoshop. The final graphics for each game are vector based to allow for clean scaling.</p> 
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