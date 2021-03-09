<?php
  include '../includes/header.php';
  writeHeader("Ads &amp; Social Media")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
           <figure>
            <a href="/projects/graphic-design/rambus-advertising.png"><img src="/projects/graphic-design/rambus-advertising.png" alt="Advertisements for Rambus Inc. shown in multiple browser windows." style="outline: none;"></a>
            <figcaption>Advertisements for Rambus Inc. displayed on various services, including Paypers and RetailWire. A subset are designed as calls to action within the Rambus blog.</figcaption>
            </figure>
            <figure>
            <a href="/projects/graphic-design/rambus-social-media.png"><img src="/projects/graphic-design/rambus-social-media.png" alt="A sample of Social Media ads for Rambus Inc. as seen on Facebook, Instagram and Twitter." style="outline: none;"></a>
            <figcaption>Examples of various promotions Rambus ran on their social media accounts. These campaigns were coordinated across accounts, and many of them were for upcoming events.</figcaption>
            </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Ads &amp; Social Media</h1>
          <h2>Capturing Attention on the Web</h2>
          <p>During my time as a Graphic Design Specialist at Rambus, I was accountable for the majority of day-to-day design tasks for the Marketing team. This involved creating and updating product collateral, designing graphic assets for the corporate website and social media accounts, maintaining libraries of diagrams and icons, and designing for trade show events.</p>
          <p>I designed ads in all shapes and sizes to show off our print collateral and catch readers' eyes on social media. These could appear as simple calls to action within the Rambus Blog, or displayed on various websites or social media platforms.</p>
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