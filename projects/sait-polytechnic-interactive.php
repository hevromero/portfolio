<?php
  include '../includes/header.php';
  writeHeader("SAIT Polytechnic - Interactive Activities")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
            <video poster="/projects/graphic-design/antibiotics_animation-video.jpg" autoplay controls>
              <source src="/projects/graphic-design/antibiotics_animation-video.mp4">
            </video>
            <figcaption>This animation depicts the the actions of five different antibiotics against bacteria.</figcaption>
          </figure>
          <figure>
            <video poster="/projects/graphic-design/hopper_development-video.jpg" autoplay controls>
              <source src="/projects/graphic-design/hopper_development-video.mp4">
            </video>
            <figcaption>This interactive walkthrough was requested to make hopper development easier for students to grasp.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/sait_interactive-business_game-tactics.png"><img src="/projects/graphic-design/sait_interactive-business_game-tactics.png" alt="Business Game" /></a>
            <figcaption>I assisted with the interface design of this interactive business game. Sadly, I made my big move to the US before seeing this project in its completed form.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/sait_interactive-adjustments_activity-screen.png"><img src="/projects/graphic-design/sait_interactive-adjustments_activity-screen.png" alt="Statement of Adjustments" /></a>
            <figcaption>A simple mock PDF served as an interactive testing tool for students to learn how to complete Statements of Adjustments.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/sait_interactive-fan_limit-screen.png"><img src="/projects/graphic-design/sait_interactive-fan_limit-screen.png" alt="Fan Limit Wiring" /></a>
            <figcaption>This interactive activity tasked electrician-to-be with learning how to properly wire a fan. A wire would be drawn when the student clicks and holds on one of the red dots. If wired correctly, they would get an all-green. If not, they would be "shocked" with a shaking yellow screen.</figcaption>
          </figure>
          <figure>
            <a href="/projects/graphic-design/sait_interactive-ipi_sequence-screen.png"><img src="/projects/graphic-design/sait_interactive-ipi_sequence-screen.png" alt="IPI Sequence of Operation" /></a>
            <figcaption>This drag-and-drop activity tests students understanding of Intermittent Pilot Ignition.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1>SAIT Polytechnic - Interactive Activities</h1>
          <h2>Learning Activities for Various Educational Programs</h2>
          <p>One of my favourite tasks during my time with <a href="http://www.sait.ca">SAIT Polytechnic</a> involved designing interactive activities. While some subject matter experts already had designs in mind, there were others that allowed me to get a little more creative. Class activities need not be plain and boring!</p> 
          <h3>Created With:</h3>
          <ul>
            <li>Adobe Illustrator</li>
            <li>Adobe Flash</li>
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