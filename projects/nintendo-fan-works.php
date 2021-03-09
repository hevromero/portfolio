<?php
  include '../includes/header.php';
  writeHeader("Nintendo Fan Works")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/illustrations/nintendo-christmas-final.jpg"><img src="/projects/illustrations/nintendo-christmas-final.jpg" alt="Mario dressed as Santa, riding a sleigh pulled by Yoshis. There is a Lakitu and a flying Koopa Troopa in the snowy background." /></a>
            <figcaption>Utilizing letter-sized card stock, this illustration was used as a Christmas card and sent to family and friends.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/nintendo-christmas-sketch.png"><img src="/projects/illustrations/nintendo-christmas-sketch.png" alt="Source sketch for the Mario Christmas card." /></a>
            <figcaption>The original sketch for the Christmas card.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/nintendo-koopa-final.png"><img src="/projects/illustrations/nintendo-koopa-final.png" alt="Nintendo's Bowser with his underlings, Koopa Troopa, Lakitu, Goomba and Bob-omb." /></a>
            <figcaption>Bowser, King of the Koopas. An experiment with a simple colour palette and character stylization.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/nintendo-marios_coin-final.jpg"><img src="/projects/illustrations/nintendo-marios_coin-final.jpg" alt="Mario chases after a coin in an underground setting." /></a>
            <figcaption>Mario chases after a coin in an underground setting.</figcaption>
          </figure>
          <figure>
            <a href="/projects/illustrations/nintendo-ridley-final.jpg"><img src="/projects/illustrations/nintendo-ridley-final.jpg" alt="Ridley, a Metroid villain, watches over Samus' ship from a distance." /></a>
            <figcaption>Something different: A Metroid themed sketch. Ridley watches over Crateria in this test of the Procreate app for iPad.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Nintendo Fan Works</h1>
          <h2>Drawings of Various Nintendo Properties</h2>
          <p>Illustrations for various Nintendo icons. Mainly focused on the Mario series.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Photoshop</li>
            <li>Wacom Cintiq</li>
            <li>Procreate</li>
            <li>iPad Pro</li>
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