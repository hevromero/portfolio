<?php
  include '../includes/header.php';
  writeHeader("Without a Window")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <video poster="/projects/graphic-design/without_a_window-video.jpg" autoplay controls>
              <source src="/projects/graphic-design/without_a_window-video.mp4">
            </video>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Without a Window</h1>
          <h2>An Interactive Story</h2>
          <p>This short story was an original collaboration between Kaitlin Bentkowski and myself, as a subject of two different projects. The first was to create the story as printable media. The second was to make a more interactive version. In the later version, I imported the pages to flash, placed buttons for navigation, and included a audio reading; complete with music and some sound effects. The interactive version also includes simple animations of silhouetted characters. The story concept and illustrations were a joint effort.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Illustrator</li>
            <li>Adobe After Effects</li>
            <li>Adobe Flash</li>
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
    