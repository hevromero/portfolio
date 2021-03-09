<?php
  include '../includes/header.php';
  writeHeader("Wedding")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/wedding-hero-final.png"><img src="/projects/illustrations/wedding-hero-final.png" alt="The Groom chases the Bride" /></a>
            <figcaption>The final hero illustration uses a transparent background and two separate images to allow a "chase" animation.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/wedding-hero-sketch.png"><img src="/projects/illustrations/wedding-hero-sketch.png" alt="Original sketch of Heather and Ricky running in their wedding attire." /></a>
            <figcaption>The original hero illustration sketch.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/wedding-twittercard-final.png"><img src="/projects/illustrations/wedding-twittercard-final.png" alt="Cute, Doll-like versions of Heather and Ricky in wedding attire." /></a>
            <figcaption>Twitter card illustration in a simple, doll-like style.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Wedding</h1>
          <h2>Illustrations for Heather and Ricky's Wedding Announcement</h2>
          <p>Our wedding had some unusual restrictions that required quick planning and the ability for family to be able to receive updates from a distance. A <a href="http://www.heatherandricky.com">website</a> was perfect for this and it needed graphics!</p> 
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