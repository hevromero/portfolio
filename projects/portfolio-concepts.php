<?php
  include '../includes/header.php';
  writeHeader("Portfolio Concepts")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <a href="/projects/web-design/portfolio_concepts-mockup-a-highres.jpg"><img src="/projects/web-design/portfolio_concepts-mockup-a-highres.jpg" alt="Portfolio Concent" /></a>
            <figcaption>Early iterations are more compact.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_concepts-mockup-b-highres.jpg"><img src="/projects/web-design/portfolio_concepts-mockup-b-highres.jpg" alt="Portfolio Concept" /></a>
            <figcaption>Experimenting with round thumbnails and overlays.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_concepts-mockup-c-highres.jpg"><img src="/projects/web-design/portfolio_concepts-mockup-c-highres.jpg" alt="Portfolio Concept" /></a>
            <figcaption>The first test of a diagonal design. This early attempt didn't feel right.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_concepts-mockup-d-highres.jpg"><img src="/projects/web-design/portfolio_concepts-mockup-d-highres.jpg" alt="Portfolio Concept" /></a>
            <figcaption>Testing a completely different and rounded sectioning method. It might work for another website, but I chose to keep going.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_concepts-mockup-e-highres.jpg"><img src="/projects/web-design/portfolio_concepts-mockup-e-highres.jpg" alt="Portfolio Concept" /></a>
            <figcaption>Testing bright colors and rounded sectioning.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_concepts-mockup-f-highres.jpg"><img src="/projects/web-design/portfolio_concepts-mockup-f-highres.jpg" alt="Portfolio Concept" /></a>
            <figcaption>Combining a more standard design with a rounded introduction. I really liked the overlaid call-to-action.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_concepts-mockup-g-highres.jpg"><img src="/projects/web-design/portfolio_concepts-mockup-g-highres.jpg" alt="Portfolio Concept" /></a>
            <figcaption>Something more simple but in line with other ideas. Still strongly considering the teal and beige palette.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_concepts-mockup-h-highres.jpg"><img src="/projects/web-design/portfolio_concepts-mockup-h-highres.jpg" alt="Portfolio Concept" /></a>
            <figcaption>Starting to switch things up again. I was inspired by some more openly designed portfolios. There would be a few highlighted pieces at the top, followed by more standard thumbnails in cards.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_concepts-mockup-i-highres.jpg"><img src="/projects/web-design/portfolio_concepts-mockup-i-highres.jpg" alt="Portfolio Concept" /></a>
            <figcaption>A variation of the previous concept.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_concepts-mockup-j-highres.jpg"><img src="/projects/web-design/portfolio_concepts-mockup-j-highres.jpg" alt="Portfolio Concept" /></a>
            <figcaption>I worked with the sectioned highlights for a while before ultimately going in a different direction. I was getting closer to the final concept.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_concepts-mockup-k-highres.jpg"><img src="/projects/web-design/portfolio_concepts-mockup-k-highres.jpg" alt="Portfolio Concept" /></a>
            <figcaption>After I'd gone to bed for the night, this design floated into my mind. I translated the idea into a quick sketch using Procreate on the iPad.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_concepts-mockup-l-highres.png"><img src="/projects/web-design/portfolio_concepts-mockup-l-highres.png" alt="Portfolio Concept" /></a>
            <figcaption>After some additional tweaks and feedback, I arrived at this wireframe. The diagonal sections returned in a less content-affecting form.</figcaption>
          </figure>
          <figure>
            <a href="/projects/web-design/portfolio_concepts-wireframe-a-highres.png"><img src="/projects/web-design/portfolio_concepts-wireframe-a-highres.png" alt="Portfolio Concept" /></a>
            <figcaption>An early wireframe from what I was first coming up with ideas. A few of the core ideas made it all the way into the final version.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>Portfolio Concepts</h1>
          <h2>Sketch Iterations Leading to Now</h2>
          <p>At some point one looks at their website and realizes that it's time to make it a little more modern. I was set on a single page design, but I also wanted to "think different". This lead to a great many iterations in Sketch.</p>
          <p>Enjoy the many alternate designs that lead to the design you see today!</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Sketch</li>
            <li>Adobe Illustrator</li>
            <li>Adobe Photoshop</li>
            <li>Procreate</li>
            <li>Wacom Cintiq</li>
            <li>iPad Pro</li>
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