<?php
  include '../includes/header.php';
  writeHeader("St. Patrick's Day")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/graphic-design/ruckus_web-st_patricks_day-final.png"><img src="/projects/graphic-design/ruckus_web-st_patricks_day-final.png" alt="Leprachaun runs from a black labrador, while dropping gold coins." /></a>
            <figcaption>The final iteration of the graphic. We originally thought about making the dog look angry, but it dampened the spirit of the message.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/ruckus_web-st_patricks_day-sketch.png"><img src="/projects/graphic-design/ruckus_web-st_patricks_day-sketch.png" alt="TITLE" /></a>
            <figcaption>The original sketch. Drawn in Procreate on the iPad, I had a quick way to test ideas and personally show them to our Creative Lead. Amongst many ideas, this was the winning suggestion.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>St. Patrick's Day</h1>
          <h2>Celebrating St. Patrick's Day with Ruckus Wireless</h2>
          <p>This fun little project was given to me at Ruckus - they needed a social media graphic for <a href="https://twitter.com/ruckuswireless/status/710502307264380928">St. Patrick's day</a>. It was to be shared on the Twitter, Facebook, and Instagram platforms. This brought up a lot of fun ideas, and I was happy that our final choice had the iconic black lab!</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Procreate</li>
            <li>Adobe Illustrator</li>
            <li>Wacom Intuos Pro</li>
            <li>iPad Pro</li>
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