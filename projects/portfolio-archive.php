<?php
  include '../includes/header.php';
  writeHeader("Portfolio Archive")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/web-design/portfolio_archive-home-highres.jpg"><img src="/projects/web-design/portfolio_archive-home-highres.jpg" alt="Old Portfolio Homepage" /></a>
            <figcaption>My previous portfolio's homepage was a large illustration also served as a table banner. I wanted to think outside the box that a lot of my peers were in - black and white design, with tastes of color. The result is a site exploding with color, bearing a seasonal theme.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_archive-works-highres.jpg"><img src="/projects/web-design/portfolio_archive-works-highres.jpg" alt="Old Portfolio Works Page" /></a>
            <figcaption>I translated the homepage design into themes for each page. My works gallery used the summer theme and calm blues.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_archive-preview-highres.jpg"><img src="/projects/web-design/portfolio_archive-preview-highres.jpg" alt="Old Portfolio Work Preview" /></a>
            <figcaption>A sample of the preview pop up. The site was darkened to not pull the user away from the piece.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_archive-about-highres.jpg"><img src="/projects/web-design/portfolio_archive-about-highres.jpg" alt="Old Portfolio About Page" /></a>
            <figcaption>If you wanted to learn about or contact me, you would see this autumn-themed page. It uses more distinct sectioning to better accommodate a large amount of text.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_archive-social-highres.jpg"><img src="/projects/web-design/portfolio_archive-social-highres.jpg" alt="Old Portfolio Social Page" /></a>
            <figcaption>The social page originally served as a blog. I lacked dedication time, so I revised the page through Wordpress plug-ins to pull from my more active social media.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Portfolio Archive</h1>
          <h2>My Classic Portfolio Design</h2>
          <p>It was time for something new. However, I still had a lot of good memories with my previous portfolio design. It was designed during my time at SAIT Polytechnic, serving as a digital and printed display of my work.</p>
          <p>The print version was used for my final display before graduation, with a large poster based on the homepage and a themed table. The table included binder and interactive Flash-based portfolio choices.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Illustrator</li>
            <li>Adobe Photoshop</li>
            <li>Wacom Intuos</li>
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