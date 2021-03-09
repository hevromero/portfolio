<?php
  include '../includes/header.php';
  writeHeader("NMPD Showcase")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/graphic-design/nmpd_showcase-final.jpg"><img src="/projects/graphic-design/nmpd_showcase-final.jpg" alt="Final NMPD Poster, depicting a person at the top of a mountain." /></a>
            <figcaption>The final NMPD Poster. I went for a whimsical and more symbolic feeling, using bright colours around the person to represent their creativity.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/nmpd_showcast-iteration.png"><img src="/projects/graphic-design/nmpd_showcast-iteration.png" alt="First pass with day colours and without a person." /></a>
            <figcaption>My first pass at the poster was created as a vector image, using standard day colours. I found this version to be a bit plain, and didn't think it would catch the attention it needed.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/nmpd_showcase-sketch.png"><img src="/projects/graphic-design/nmpd_showcase-sketch.png" alt="The original poster sketch." /></a>
            <figcaption>The original sketch is very similar to the final work. Text placement, colours, and style were important decisions that were yet to come.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>NMPD Showcase</h1>
          <h2>Poster for the New Media Production and Design Showcase</h2>
          <p>A poster submission for the <a href="http://www.sait.ca">Southern Alberta Institute of Technology's</a> New Media Production and Design Showcase. It's meant to show the journey that I and my fellow students had taken during our education, and our arrival to the peak.</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Photoshop</li>
            <li>Wacom Intuos</li>
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