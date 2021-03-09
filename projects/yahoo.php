<?php
  include '../includes/header.php';
  writeHeader("Yahoo!")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/graphic-design/yahoo-logos-preview.png"><img src="/projects/graphic-design/yahoo-logos-preview.png" alt="A preview of scale for the Yahoo logos project." /></a>
            <figcaption>A preview of the many logos that needed to be scaled and packaged.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/yahoo-logos-2-preview.png"><img src="/projects/graphic-design/yahoo-logos-2-preview.png" alt="A preview of scale, showing the magnitude of the project." /></a>
            <figcaption>A small taste of the magnitude of this project. Yahoo serves many different countries and languages.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/yahoo-tour-preview.png"><img src="/projects/graphic-design/yahoo-tour-preview.png" alt="Sample of the product tour, with screen shots of four required languages." /></a>
            <figcaption>This multi-side product tour was translated into six different languages.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Yahoo!</h1>
          <h2>Logo and Product Tour Project</h2>
          <p>I assisted one of <a href="https://www.yahoo.com">Yahoo's</a> designers in packaging newly created logos for internal use and deployment. Each logo needed to be output at different sizes, formats, and colours. This was no small task!</p>
          <p>I also produced a graphical tour in six languages. Each language needed a small custom popup box that pointed out relevant information.</p>
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Illustrator</li>
            <li>Adobe Photoshop</li>
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