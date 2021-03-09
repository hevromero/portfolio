<?php
  include '../includes/header.php';
  writeHeader("Ruckus Wireless - Wifiagra Campaign")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/web-design/ruckus_wifiagra-highres.jpg"><img src="/projects/web-design/ruckus_wifiagra-highres.jpg" alt="The Wifiagra landing page is a fun Viagra spoof." /></a>
            <figcaption>The final page is mobile friendly and has an amusing "expanding" button mouse-over animation.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Ruckus Wireless - Wifiagra Campaign</h1>
          <h2>A Promotional Campaign Landing Page</h2>
          <p><a href="http://goo.gl/I0E7tb">Wifiagra</a> is a single-page, head-turning spoof that plays loosely on Viagra visuals.</p>
          <p>The creative and marketing teams came to me with an urgent request. Their new campaign was marked for release through email and social media, but the launch date was rapidly approaching and resources were slim. I had a scant 2 days to design and code this project before the campaign went live. Working closely with our creative lead, I quickly mocked up and finalized the design, touched up assets, and built a responsive prototype. The task also required splitting up the source code for the Act-On template system.</p> 
          <p>Following a few small, easy solved hiccups, the campaign successfully launched on time. This slightly unusual project received a largely positive response from customers and our teams were pleased (and amused!) with the launch.</p>
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Photoshop</li>
            <li>Adobe Illustrator</li>
            <li>Sketch</li>
            <li>Sublime Text</li>
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