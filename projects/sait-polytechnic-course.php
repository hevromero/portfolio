<?php
  include '../includes/header.php';
  writeHeader("SAIT Polytechnic - Course Templates")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/web-design/sait-course_landing-highres.jpg"><img src="/projects/web-design/sait-course_landing-highres.jpg" alt="Landing Page" /></a>
            <figcaption>The course landing page mainly served as a hub to the many resources and modules within the course. D2L doesn't require such a page, but this allowed materials to be more easily grouped.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/sait-course_page-highres.jpg"><img src="/projects/web-design/sait-course_page-highres.jpg" alt="Sample Course Page" /></a>
            <figcaption>The course was still under development, resulting in the need for a wide range of modular options. Fortunately, most courses fall under the same formatting requirements.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>SAIT Polytechnic - Course Template</h1>
          <h2>Course Design</h2>
          <p>Most of <a href="http://www.sait.ca">SAIT Polytechnic's</a> online courses came with preset designs and standards. In this instance, I was given the opportunity to design a unique course template for one the instructors of our Business Admin degree.</p> 
          <p>It needed to be kept relatively simple for reuse with their learning management system, D2L.</p>
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Illustrator</li>
            <li>Notepad++</li>
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