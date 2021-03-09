<?php
  include '../includes/header.php';
  writeHeader("Ruckus Wireless - Print Design")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/graphic-design/ruckus_print-banner-final.jpg"><img src="/projects/graphic-design/ruckus_print-banner-final.jpg" alt="Ruckus and Brocade Banner" /></a>
            <figcaption>A promotional banner for the HITEC Ruckus booth.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/ruckus_print-beads-final.jpg"><img src="/projects/graphic-design/ruckus_print-beads-final.jpg" alt="Bling Decoration for Mardi Gras Beads" /></a>
            <figcaption>The three final designs for a "bling" style decoration worn with Mardi Gras beads, created with a custom diamond pattern. The actual piece also had a blinking light. Fun!</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/ruckus_print-tattoos-final.png"><img src="/projects/graphic-design/ruckus_print-tattoos-final.png" alt="A sheet of dog-themed tattoos. It includes a fire hydrant, Ruckus logo, bark speech bubble, doghouse, bone, paw print, crossbones, and the Ruckus dog." /></a>
            <figcaption>Packing as many dog-themed tattoos as I can onto a 4" x 3" sheet.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Ruckus Wireless - Print Design</h1>
          <h2>Print Materials Designed for Ruckus Promotions</h2>
          <p>I worked with the <a href="https://www.ruckuswireless.com">Ruckus Wireless</a> Creative Team to create a variety of promotional print materials. These included banners, tattoos, and wearables.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Illustrator</li>
            <li>Adobe Photoshop</li>
            <li>Wacom Intuos Pro</li>
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