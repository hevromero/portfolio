<?php
  include '../includes/header.php';
  writeHeader("SAIT Polytechnic - Presentation Templates")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/graphic-design/sait_templates-smartbook-mockup-1.png"><img src="/projects/graphic-design/sait_templates-smartbook-mockup-1.png" alt="Mockups of Smartbook templates." /></a>
            <figcaption>A red and blue version of a possible Smartbook theme.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/sait_templates-smartbook-mockup-2.png"><img src="/projects/graphic-design/sait_templates-smartbook-mockup-2.png" alt="Mockups of additional Smartbook templates." /></a>
            <figcaption>Two additional mock-ups for Smartbook themes.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>SAIT Polytechnic - Presentation Templates</h1>
          <h2>Templates made for Educational and Internal Use</h2>
          <p><a href="http://www.sait.ca">SAIT Polytechnic's</a> presentation softwares of choice were PowerPoint and Smartbook. I was tasked with creating unique templates for each.</p>
          <p>The final themes were presented in sample PPT and Notebook presentations with sample styling for image based and tabled slides.</p>
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