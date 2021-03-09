<?php
  include '../includes/header.php';
  writeHeader("Ruckus Wireless - 2016 Redesign")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/web-design/ruckus_www_new-events-a-highres.jpg"><img src="/projects/web-design/ruckus_www_new-events-a-highres.jpg" alt="The Events page. Each event is separated into lines of alternate color." /></a>
            <figcaption>The events page needed some clear structure as well as better separation for each event. I chose to keep the design simple through lines of alternate color.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www_new-events-b-highres.jpg"><img src="/projects/web-design/ruckus_www_new-events-b-highres.jpg" alt="The Events page. There is further separation using region headings." /></a>
            <figcaption>Working with the previous mock-up, I separated the events by region.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www_new-mobile_apps-highres.jpg"><img src="/projects/web-design/ruckus_www_new-mobile_apps-highres.jpg" alt="Three suggestions for organizing and displaying mobile app details." /></a>
            <figcaption>Three mock-ups for the organization and display of mobile app details. In the end, screenshots were not used do to code restrictions and readability concerns.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www_new-press_date-a-highres.jpg"><img src="/projects/web-design/ruckus_www_new-press_date-a-highres.jpg" alt="Press Release Landing" /></a>
            <figcaption>Initial mock-up for the Press Release landing page. This design retains many aspects of the previous landing page.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www_new-press_date-b-highres.jpg"><img src="/projects/web-design/ruckus_www_new-press_date-b-highres.jpg" alt="Press Release Landing - Compact, No Excerpt" /></a>
            <figcaption>This Press Release mock-up removes excerpts in favor of being compact. Elements were pulled from the Events page design.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www_new-press_home-a-highres.jpg"><img src="/projects/web-design/ruckus_www_new-press_home-a-highres.jpg" alt="Press Release Landing - No Columns" /></a>
            <figcaption>We've almost arrived at the final Press Release design. The date loses its separation, and is in fact removed entirely as a separate item; The blurb always contains the date.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www_new-webinars-a-highres.jpg"><img src="/projects/web-design/ruckus_www_new-webinars-a-highres.jpg" alt="Webinars Page" /></a>
            <figcaption>Design for the Webinars page. The Webinars were originally full-width, but are often light on details. I felt that it would be more appropriate to use a side-by-side display.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/ruckus_www_new-webinars-b-highres.jpg"><img src="/projects/web-design/ruckus_www_new-webinars-b-highres.jpg" alt="Webinars Page" /></a>
            <figcaption>A fall back to the original Webinars design. One small improvement was to stack the buttons to the right of the description.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Ruckus Wireless - 2016 Redesign</h1>
          <h2>Adding the Final Polish to the New Interface</h2>
          <p>The new look of <a href="https://www.ruckuswireless.com">Ruckus Wireless</a> was almost ready to go, but some subsections needed additional treatment.</p>
          <p>I worked with my team to get these sections in line with the rest of the design. We took the opportunity to better implement rotated content in Drupal. Following launch, the new site was both attractive and more content management friendly!</p>
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