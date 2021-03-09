<?php
  include '../includes/header.php';
  writeHeader("Steven Universe Fan Works")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/steven_universe-peridot-final.jpg"><img src="/projects/illustrations/steven_universe-peridot-final.jpg" alt="Peridot" /></a>
            <figcaption>Peridot</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/steven_universe-bismuth-final.png"><img src="/projects/illustrations/steven_universe-bismuth-final.png" alt="Bismuth" /></a>
            <figcaption>Bismuth</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/steven_universe-smokyquartz-final.png"><img src="/projects/illustrations/steven_universe-smokyquartz-final.png" alt="Smoky Quartz" /></a>
            <figcaption>Smoky Quartz, ready to use her unusual weapon.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Steven Universe Fan Works</h1>
          <h2>Characters from the Steven Universe TV Series</h2>
          <p>A selection of illustrations from one of my favourite modern cartoon series.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Photoshop</li>
            <li>Wacom Cintiq</li>
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
