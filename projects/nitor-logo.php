<?php
  include '../includes/header.php';
  writeHeader("Nitor")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/graphic-design/nitor-logo-final.png"><img src="/projects/graphic-design/nitor-logo-final.png" alt="Nitor logos in colour, black and white, and with logotype." /></a>
            <figcaption>The final Nitor logo in full colour, black and white, and with logotype below and beside.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/nitor-palette-final.png"><img src="/projects/graphic-design/nitor-palette-final.png" alt="Six Pantone colour swatches." /></a>
            <figcaption>The Pantone colours selected for the project.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/nitor-card-final.png"><img src="/projects/graphic-design/nitor-card-final.png" alt="The Nitor logo placed onto the front and back of a business card" /></a>
            <figcaption>Sample of the logo as it would appear on a business card.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/nitor-logo-photo.jpg"><img src="/projects/graphic-design/nitor-logo-photo.jpg" alt="Nitor logo edited into a storefront sign and a van." /></a>
            <figcaption>A fun test of the logo - I edited out the original logos on this storefront and van to show how it may fit in real life scenarios.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Nitor</h1>
          <h2>Logo Design Project</h2>
          <p>Nitor, an imaginary graphic design company, was created to be the subject of design for corporate identities. The word 'nitor' is Latin for 'brilliance', 'to strive' 'trust in' and 'elegance' amongst other things, which made for interesting ideas.</p>
          <p>The smooth, clean font is meant to show that Nitor is a modern company looking towards the future. The light bulb signifies ideas, while incorporating the 'brilliance' in the company name meaning. The rainbow, coloured in red, green, and blue, tells the viewer that this creative company is geared towards the digital medium.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Illustrator</li>
            <li>Adobe Photoshop</li>
            <li>Wacom Intuos</li>
            <li>Canon Powershot</li>
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