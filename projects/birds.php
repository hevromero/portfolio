<?php
  include '../includes/header.php';
  writeHeader("Birds")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/birds-budgie-final.png"><img src="/projects/illustrations/birds-budgie-final.png" alt="Budgie" /></a>
            <figcaption>The blue Budgie, aka Parakeet. Male budgies are excellent talkers. Many circles were used in the creation of the wing pattern</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/birds-timneh-final.png"><img src="/projects/illustrations/birds-timneh-final.png" alt="African Grey Parrot (Timneh)" /></a>
            <figcaption>A fluffy African Grey, Timneh subtype. Timnehs are slightly smaller and duller in colouration than Congos, but pack just as much personality. A simple 3D extrude was snuck in for the post.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/birds-lovebird-final.png"><img src="/projects/illustrations/birds-lovebird-final.png" alt="Lovebird" /></a>
            <figcaption>A sleepy lovebird. These sneaky African birds can be found wild in Arizona. I enjoyed interpreting the facial patches into set bands of colours.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/birds-hummingbird-final.png"><img src="/projects/illustrations/birds-hummingbird-final.png" alt="Anna's Hummingbird" /></a>
            <figcaption>The Anna's Hummingbird, found in California. These tiny birds are incredibly territorial and apparently confused by bright t-shirts. </figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/birds-sketches.png"><img src="/projects/illustrations/birds-sketches.png" alt="Original Sketches" /></a>
            <figcaption>A few of the many sketches that went into making these illustrations.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Birds</h1>
          <h2>Vector Illustrations of Several Bird Species</h2>
          <p>I wanted an excuse to tinker with animals in Illustrator, and decided that some former pets and the local visitor would do.</p>
          <p>When you live in California, all you need to do is provide a feeder and you're sure to get some (protective) hummingbird friends.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Illustrator</li>
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