<?php
  include '../includes/header.php';
  writeHeader("Ruckus Wireless - Other Projects")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/web-design/ruckus_other-maintenance-highres.jpg"><img src="/projects/web-design/ruckus_other-maintenance-highres.jpg" alt="Custom Maintenance Page" /></a>
            <figcaption>The original maintenance page was a very simple table with basic formatting and outdated information. The refreshed page includes the relevant information of the old, bringing the more fun feel of Ruckus. The clouds animate across the sky.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_other-product_master-highres.jpg"><img src="/projects/web-design/ruckus_other-product_master-highres.jpg" alt="Product Master Wireframe" /></a>
            <figcaption>One of our programmers was working on a new Product Master and needed an interface that better accommodated their menus. I organized the menus and forms into this interface.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_other-xclaim-highres.png"><img src="/projects/web-design/ruckus_other-xclaim-highres.png" alt="XClaim Distrubutors Mockup" /></a>
            <figcaption>I assisted our lead developer with the design of a new Xclaim Distributors page. Elements of this design served as the base for a later redesign of the Ruckus Wireless Contact page.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Ruckus Wireless - Other Projects</h1>
          <h2>Small Projects for Various Ruckus Sites</h2>
          <p>My main tasks involved the <a href="https://www.ruckuswireless.com">Ruckus Wireless</a> product site, support site, and partners site. Ruckus has many other small properties, and engineers would often come to the web team needing simple HTML interfaces.</p> 
          <p>This sampling includes both mock-ups and coded prototypes that were created to meet the needs of the project. They often allowed for the quick completion of such projects.</p>
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Photoshop</li>
            <li>Adobe Illustrator</li>
          </ul>

          <div class="more-works">
            <h3>See More</h3>
            <ul>
              <?php
                include '../includes/random-work.php';
                writeRandomWork('web-design')
              ?>
            </ul>
          </div>
        </div>
      </div>
    </article>
    <?php include '../includes/footer.php'; ?>
  </body>
</html>