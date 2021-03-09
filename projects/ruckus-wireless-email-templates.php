<?php
  include '../includes/header.php';
  writeHeader("Email Templates")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/web-design/ruckus_email-mockup-a-highres.jpg"><img src="/projects/web-design/ruckus_email-mockup-a-highres.jpg" alt="Email Template Mockup" /></a>
            <figcaption>Early mock-ups of the email design. I was just learning their system so a lot of changes were made between these first designs and the final delivery.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_email-mockup-b-highres.jpg"><img src="/projects/web-design/ruckus_email-mockup-b-highres.jpg" alt="Email Template Mockup" /></a>
            <figcaption>A simpler version of the previous design, without the side column and a padded banner. </figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_email-mockup-c-highres.jpg"><img src="/projects/web-design/ruckus_email-mockup-c-highres.jpg" alt="Email Template Mockup" /></a>
            <figcaption>The nearly-finalized mock-up, in a dark theme that complimented the Ruckus Wireless website.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_email-mockup-d-highres.jpg"><img src="/projects/web-design/ruckus_email-mockup-d-highres.jpg" alt="Email Template Mockup" /></a>
            <figcaption>This mock-up is very close to the coded design. A light theme was preferred, and the design was made email client friendly.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Email Templates</h1>
          <h2>Template Design for the Act-On Email System</h2>
          <p>I assisted with the design of a new email template for use by the marketing team through Act-On. The task required working with limitations set by the Act-On platform and email clients, while being simple to edit.</p>
          <p>The final mock-up was my first time coding for email. I quickly caught on through testing with the help of Litmus.</p>
          <h3>Created With:</h3>
          <ul>
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