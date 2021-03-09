<?php
  include '../includes/header.php';
  writeHeader("Ruckus Wireless - UI Updates")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/web-design/ruckus_www-contact-a-highres.jpg"><img src="/projects/web-design/ruckus_www-contact-a-highres.jpg" alt="Initial mockup for the Contact Us refresh." /></a>
            <figcaption>Initial mock-up for the Contact Us page refresh. This page originally had an overwhelming amount of information on first glance. The first step in reducing clutter involved better separating sections.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www-contact-b-highres.jpg"><img src="/projects/web-design/ruckus_www-contact-b-highres.jpg" alt="Contact Us Mockup - Dynamic Contant by Region" /></a>
            <figcaption>This Contact Us mock-up limits contacts by region. Americas is the default, but other regions can be selected via buttons.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www-contact-c-highres.jpg"><img src="/projects/web-design/ruckus_www-contact-c-highres.jpg" alt="Contact Us Mockup - Dynamic Content by Country" /></a>
            <figcaption>The approved design uses a drop-down in place of buttons, allowing the user to select their country. The section below is dynamically updated with their selection.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www-forms-a-highres.jpg"><img src="/projects/web-design/ruckus_www-forms-a-highres.jpg" alt="Form Submission Mockup - Side-by-Side Fields" /></a>
            <figcaption>I also tinkered with a form redesign.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www-forms-b-highres.jpg"><img src="/projects/web-design/ruckus_www-forms-b-highres.jpg" alt="Form Submission Mockup - Single Fields" /></a>
            <figcaption>Alternate version of the Application form.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www-forms-c-highres.jpg"><img src="/projects/web-design/ruckus_www-forms-c-highres.jpg" alt="Form Submission Mockup - Single Fields" /></a>
            <figcaption>Design for another form.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www-forms-e-highres.jpg"><img src="/projects/web-design/ruckus_www-forms-e-highres.jpg" alt="Long Form Submission Mockup - Side-by-Side Fields" /></a>
            <figcaption>A more extensive form. Unfortunately, this design wasn't implementable due to restrictions related to the Act-On platform.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www-forms-f-highres.jpg"><img src="/projects/web-design/ruckus_www-forms-f-highres.jpg" alt="Long Form Submission Mockup" /></a>
            <figcaption>Variation to the previous design with more side-by-side fields.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www-video_load-a-highres.png"><img src="/projects/web-design/ruckus_www-video_load-a-highres.png" alt="Video Library storyboard - video behaviour when loading." /></a>
            <figcaption>Storyboard for a videos page redesign. Working out how a video could be revealed as it loads within the main library.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www-video_load-b-highres.png"><img src="/projects/web-design/ruckus_www-video_load-b-highres.png" alt="Video Library storyboard - thumbnail behaviour when loading." /></a>
            <figcaption>Storyboarding how thumbnails should act when a video is selected. Ultimately, we kept them in place with a "Now Playing" frame. The video opened below the row of thumbnails.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www-video_load-c-highres.png"><img src="/projects/web-design/ruckus_www-video_load-c-highres.png" alt="TechTalk Library storyboard - video behaviour when loading." /></a>
            <figcaption>Storyboard for loading videos within the TechTalk Library.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Ruckus Wireless - UI Updates</h1>
          <h2>Updates to the Ruckus Wireless Interface</h2>
          <p><a href="https://www.ruckuswireless.com">Ruckus Wireless</a> had many page designs that were in need of a refresh or additional functionality. Some only required basic HTML and CSS updates, while others required added functionality via JQuery and Drupal.</p>
          <p>I mocked up the following designs. Some were finalized and implemented with team assistance. These changes improved the user experience by removing clutter and enhancing ease of use.</p> 
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