<?php
  include '../includes/header.php';
  writeHeader("OT Mobility")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/web-design/otmobility-mockup-a-highres.jpg"><img src="/projects/web-design/otmobility-mockup-a-highres.jpg" alt="First OT Mobility Page Design" /></a>
            <figcaption>Original concept for the OT Mobility landing page. Based on preexisting concepts, this version is the most compact and uses a combination of carousels and tabs.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/otmobility-mockup-b-highres.jpg"><img src="/projects/web-design/otmobility-mockup-b-highres.jpg" alt="Second OT Mobility Page Design" /></a>
            <figcaption>This variation of the first design uses more distinct sections and a large hero image.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/otmobility-mockup-c-highres.jpg"><img src="/projects/web-design/otmobility-mockup-c-highres.jpg" alt="Third OT Mobility Page Design" /></a>
            <figcaption>This more colorful mock-up was inspired by websites that the client liked. The content is more easily accessible via scrolling instead of tabs.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/otmobility-mockup-d-highres.jpg"><img src="/projects/web-design/otmobility-mockup-d-highres.jpg" alt="Fourth OT Mobility Page Design" /></a>
            <figcaption>I included a softer version with imagery that the client was interested in using for each section.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/otmobility-storyboard-b-highres.jpg"><img src="/projects/web-design/otmobility-storyboard-b-highres.jpg" alt="Storyboard for basic page design." /></a>
            <figcaption>Concept for the original interface, when translated to mobile. </figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/otmobility-storyboard-a-highres.jpg"><img src="/projects/web-design/otmobility-storyboard-a-highres.jpg" alt="Storyboard for an animation of a car moving down the screen as the user scrolls." /></a>
            <figcaption>Storyboard for an animation idea while scrolling down the landing page. The car would "drive" down the page and reveal annotations.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>OT Mobility</h1>
          <h2>Homepage Design and Concepts</h2>
          <p>I worked with OT Mobility to create a landing page that showcased their upcoming iPhone app. "Spot On Time" was a service that helped drivers arrive on time.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Illustrator</li>
            <li>Adobe Photoshop</li>
            <li>Wacom Cintiq</li>
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