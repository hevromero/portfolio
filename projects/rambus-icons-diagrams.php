<?php
  include '../includes/header.php';
  writeHeader("Icons &amp; Diagrams")
?>
    <article class="works-display">
      <div class="works-container">
        <div class="works-images">
          <figure>
          <a href="/projects/graphic-design/rambus-icon-library.png"><img src="/projects/graphic-design/rambus-icon-library.png" alt="Sample pages from the Rambus Icon Library." style="outline: none;"></a>
            <figcaption>Sample pages from the Rambus Icon Library.</figcaption>
          </figure>
          <figure>
          <a href="/projects/graphic-design/rambus-diagram-transceiver-architecture.png"><img src="/projects/graphic-design/rambus-diagram-transceiver-architecture.png" alt="Diagram: Conventional ADC+DSP LR Transceiver Architecture
" style="outline: none;"></a>
            <figcaption>Diagram for Conventional ADC+DSP LR Transceiver Architecture. While the standard Rambus typeface is Calibri, we chose to keep diagrams in Arial for Mac/Windows compatibility and futureproofing against company typeface changes.</figcaption>
          </figure>
          <figure>
          <a href="/projects/graphic-design/rambus-diagram-112gbps-xsr.png"><img src="/projects/graphic-design/rambus-diagram-112gbps-xsr.png" alt="" style="outline: none;"></a>
            <figcaption>Diagram for 112Gbps XSR. Recreated in PowerPoint from a Visio diagram, this primarily consists of native PowerPoint shapes, mixed with limited use of Adobe Illustrator vector graphics.</figcaption>
          </figure>
          <figure>
          <a href="/projects/graphic-design/rambus-diagram-custom-board.png"><img src="/projects/graphic-design/rambus-diagram-custom-board.png" alt="Diagram: Custom Board Design" style="outline: none;"></a>
            <figcaption>Diagram for a custom board design.</figcaption>
          </figure>
          <figure>
          <a href="/projects/graphic-design/rambus-diagram-mps-configuration.png"><img src="/projects/graphic-design/rambus-diagram-mps-configuration.png" alt="Diagram: MPS Configuration (1.25-11.2)" style="outline: none;"></a>
            <figcaption>Diagram for MPS Configuration (1.25-11.2). I received the original diagram masters and updated every diagram to a more consistant, clean style. This was one such pre-existing diagram.</figcaption>
          </figure>
          <figure>
          <a href="/projects/graphic-design/rambus-diagram-56gbps-serdes.png"><img src="/projects/graphic-design/rambus-diagram-56gbps-serdes.png" alt="Diagram: 56Gbps Multi-Protocol SerDes Subsystem Example" style="outline: none;"></a>
            <figcaption> Diagram for 56Gbps Multi-Protocol SerDes Subsystem Example. This is another example of a pre-existing diagram, cleaned up and unified with other diagram masters in our library. Clean-up work included verifying what was labled as Rambus technology (blue), updating diagrams that had become outdated, and adjusting block heights so that they were more consistant for better legibility.</figcaption>
          </figure>
          <figure>
          <a href="/projects/graphic-design/rambus-diagram-ddr4.png"><img src="/projects/graphic-design/rambus-diagram-ddr4.png" alt="Diagram: DDR4 Multi-Modal PHY Subsystem Example" style="outline: none;"></a>
            <figcaption>Diagram showing an example of a DDR4 Multi-Modal PHY Subsystem.</figcaption>
          </figure>
          <figure>
          <a href="/projects/graphic-design/rambus-diagram-smart-parking.png"><img src="/projects/graphic-design/rambus-diagram-smart-parking.png" alt="Diagram: Smart Parking Systems: Potential Security Threats" style="outline: none;"></a>
            <figcaption>Diagram for Smart Parking Systems and Potential Security Threats. This diagram offers an example of using heavier graphical features to provoke a more infographic-like look.</figcaption>
          </figure>
          <figure>
          <a href="/projects/graphic-design/rambus-diagram-secure-smart-parking.png"><img src="/projects/graphic-design/rambus-diagram-secure-smart-parking.png" alt="Diagram: Securing Smart Parking with the Rambus CryptoManager IoT Security Service
" style="outline: none;"></a>
            <figcaption>Diagram for Securing Smart Parking with the Rambus CryptoManager IoT Security Service. Rambus makes much heavier use of the Icon Library in the Security diagram master. One of my first challenges when redesigning the Security diagram master was setting design rules across many diagrams; this master alone contains over 100 of them. The standards were later tweaked for Memory and Interfaces, as filled shapes were more legibile within its more frequent use of block diagrams.</figcaption>
          </figure>
          <figure>
          <a href="/projects/graphic-design/rambus-diagram-cryptomanager-infrastructure.png"><img src="/projects/graphic-design/rambus-diagram-cryptomanager-infrastructure.png" alt="Diagram: The CryptoManager Infrastructure Solution" style="outline: none;"></a>
            <figcaption>Diagram for the CryptoManager Infrastructure Solution.</figcaption>
          </figure>
          <figure>
          <a href="/projects/graphic-design/rambus-diagram-smart-cities.png"><img src="/projects/graphic-design/rambus-diagram-smart-cities.png" alt="Diagram: Smart Cities: Threats and Countermeasures" style="outline: none;"></a>
            <figcaption>Diagram for Smart Cities: Threats and Countermeasures. This infographic-style diagram was one of a set of three, used in a series of white papers for smart security in the home, city, and industrial IoT.</figcaption>
          </figure>
        </div>
        <div class="works-info">
          <a href="/" class="close">x</a>
          <h1> Icons &amp; Diagrams</h1>
          <h2>Setting the Style and Feel of Rambus Imagery</h2>
          <p>During my time as a Graphic Design Specialist at Rambus, I was accountable for the majority of day-to-day design tasks for the Marketing team. This involved creating and updating product collateral, designing graphic assets for the corporate website and social media accounts, maintaining libraries of diagrams and icons, and designing for trade show events.</p>
          <p>Our team was frequently under time pressure, so we couldn't always create icons from scratch. This meant we had to hand-pick icons from Shutterstock to follow a consistent style. If we couldn't find a matching icon, I’d then take the time to create a new custom icon. This approach worked, but it wasn't ideal.</p>
          <p>During my tenure, I completely revamped the icon library to a cleaner and more modern look using outlines and more style rules. I maintained this library in Adobe Illustrator for creative use; a second version for company-wide use lived in Microsoft PowerPoint. My manager and I also maintained Diagram Masters in PowerPoint for ad-hoc editing by employees.</p>
          <h3>Created With:</h3>
          <ul>
            <li>Microsoft PowerPoint</li>
            <li>Adobe Illustrator</li>
            <li>Adobe Photoshop</li>
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