<?php
  include 'includes/header.php';
  writeHeader("Graphic and Web Designer");


  function isMessageBlocked()
  {
    $lockPath = "./support/lockfile";

    $delta = time() - filemtime($lockPath);

    if ($delta > 60 * 3) // 3 minutes
    {
      touch($lockPath);
      return false;
    }
    else
    {
      return true;
    }
  }

  $errorflag = false;
  $softerrorflag = false;

  if ($_POST['send'])
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $emailBody = $message;
    $emailBody .= "\n\nPhone: " . $_POST['phone'];
    $emailBody .= "\n\nJS Enabled: " . $_POST['javascript-enabled'];
    $emailBody .= "\n\nLoaded Timestamp: " . $_POST['loaded-timestamp'];
    $emailBody .= "\n\nSubmitted Timestamp: " . $_POST['submitted-timestamp'];

    $emailpattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]{2,63}(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/";

    if (!$name) {
      $errorflag = true;  
    }

    if (!$email || !preg_match($emailpattern, $email) || $email == "yourname@email.com") {
      $errorflag = true;  
    }
      
    if (!$message) {
      $errorflag = true;  
    }

    if ($_POST['javascript-enabled'] == "false") {
      $softerrorflag = true;
    }

    // Wrapping the function this way prevents a scenario where the user might submit invalid input,
    // try again, and not be able to submit even though their input is valid.
    if (!$errorflag)
    {
      $errorflag |= isMessageBlocked();
    }
  }
?>
  <a href="#top" class="topper">Back to Top</a>

  <header id="top" role="banner">
    <h1>Hi, I'm Heather Romero.</h1>
    <p>I’m a designer and illustrator in the Bay Area.</p>
    <p>I like to make people smile with my creations.</p>
  </header>

  <main role="main">

    <nav>
      <a href="#top" class="logo">Heather<span>Romero</span></a>
      <ul class="hero-nav">
        <li class="hero-works">
          <a class="section-link" href="#works">Works</a>
          <ul class="inline">
            <li>
              <a title="Tumblr" href="https://fingerwhirls.tumblr.com">
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#tumblr"></use>
                </svg>
              </a>
            </li>
            <li>
              <a title="DeviantART" href="https://hevromero.deviantart.com">
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#deviantart"></use>
                </svg>
              </a>
            </li>
            <li>
              <a title="Instagram" href="https://www.instagram.com/hevromero/">
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#instagram"></use>
                </svg>
              </a>
            </li>
          </ul>
        </li>
        <li class="hero-heather">
          <a class="section-link" href="#heather">About</a>
          <ul class="nav-social-heather inline">
            <li>
              <a title="Resume" href="/documents/heather-romero-resume.pdf">
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#resume"></use>
                </svg>
              </a>
            </li>
            <li>
              <a title="LinkedIn" href="https://www.linkedin.com/in/heather-romero">
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#linkedin"></use>
                </svg>
              </a>
            </li>
            <li>
              <a title="Twitter" href="https://twitter.com/hevromero">
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#twitter"></use>
                </svg>
              </a>
            </li>
          </ul>
        </li>
        <li class="hero-contact">
          <a class="section-link" href="#contact">Contact</a>
          <ul class="nav-social-contact inline">
            <li>
              <a title="Contact" class="email-link href-only" href="/">
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#email"></use>
                </svg>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

    <section id="works" class="works">
      <h2>Works</h2>
      <ul class="works-filter">
        <li data-filter=".showcase" title="Featured" class="active">Featured Works</li>
        <li data-filter=".illustration" title="Illustrations">Illustrations</li>
        <li data-filter=".graphic-design" title="Graphic Design">Graphic Design</li>
        <li data-filter=".web-design" title="Web Design">Web Design</li>
      </ul>
      <div class="gallery">
        <div class="gallery-work graphic-design showcase">
          <a href="projects/rambus-product-collateral.php"><img src="/projects/graphic-design/rambus-ebooks.jpg" alt="Product Collateral" data-slides="/projects/graphic-design/rambus-solution-overviews.jpg,/projects/graphic-design/rambus-product-briefs.jpg,/projects/graphic-design/rambus-white-papers.jpg,/projects/graphic-design/rambus-ebooks.jpg" />
          <div class="description">
            <h3>Product Collateral</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design showcase">
          <a href="projects/rambus-ads-social-media.php"><img src="/projects/graphic-design/rambus-advertising.jpg" alt="Ads &amp; Social Media" data-slides="/projects/graphic-design/rambus-advertising.jpg,/projects/graphic-design/rambus-social-media.jpg" />
          <div class="description">
            <h3>Ads &amp; Social Media</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design showcase">
          <a href="projects/rambus-banners-events.php"><img src="/projects/graphic-design/rambus-mwc-2019.jpg" alt="Banners &amp; Events" data-slides="/projects/graphic-design/rambus-mwc-2019.jpg,/projects/graphic-design/rambus-corp-banners.jpg,/projects/graphic-design/rambus-money2020-2018.jpg,/projects/graphic-design/rambus-vaultify-banner.jpg" />
          <div class="description">
            <h3>Events &amp; Banners</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design showcase">
          <a href="projects/rambus-icons-diagrams.php"><img src="/projects/graphic-design/rambus-icon-library.jpg" alt="Icons &amp; Diagrams" data-slides="/projects/graphic-design/rambus-icon-library.jpg,/projects/graphic-design/rambus-diagram-custom-board.jpg,/projects/graphic-design/rambus-diagram-secure-smart-parking.jpg,/projects/graphic-design/rambus-diagram-smart-parking.jpg" />
          <div class="description">
            <h3>Icons &amp; Diagrams</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design showcase">
          <a href="projects/rambus-presentations.php"><img src="/projects/graphic-design/rambus-slide-preview.jpg" alt="Presentations" data-slides="/projects/graphic-design/rambus-slide-preview.jpg,/projects/graphic-design/rambus-slide-cryptography.jpg,/projects/graphic-design/rambus-slide-soc-cost.jpg,/projects/graphic-design/rambus-slide-blockchain.jpg" />
          <div class="description">
            <h3>Presentations</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design showcase">
          <a href="projects/the-magic-of-networking.php"><img src="/projects/graphic-design/the_magic_of_networking.jpg" alt="The Magic of Networking" />
          <div class="description">
            <h3>The Magic of Networking</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design showcase">
          <a href="projects/oclef.php"><img src="/projects/graphic-design/oclef-project.png" alt="OClef" />
          <div class="description">
            <h3>OClef</h3>
          </div></a>
        </div>
        <div class="gallery-work web-design showcase">
          <a href="projects/otmobility.php"><img src="/projects/web-design/otmobility-mockup-c.jpg" alt="OT Mobility" data-slides="/projects/web-design/otmobility-mockup-c.jpg,/projects/web-design/otmobility-mockup-a.jpg,/projects/web-design/otmobility-mockup-b.jpg,/projects/web-design/otmobility-storyboard-a.jpg" />
          <div class="description">
            <h3>OT Mobility</h3>
          </div></a>
        </div>
        <div class="gallery-work web-design showcase">
          <a href="projects/portfolio-archive.php"><img src="/projects/web-design/portfolio_archive-home.jpg" alt="Portfolio Archive" data-slides="/projects/web-design/portfolio_archive-home.jpg,/projects/web-design/portfolio_archive-works.jpg,/projects/web-design/portfolio_archive-about.jpg,/projects/web-design/portfolio_archive-social.jpg" />
          <div class="description">
            <h3>Portfolio Archive</h3>
          </div></a>
        </div>
        <div class="gallery-work web-design showcase">
          <a href="projects/ruckus-wireless-support-redesign.php"><img src="/projects/web-design/ruckus_support_mockups-homepage.jpg" alt="Ruckus Wireless - Support Redesign" data-slides="/projects/web-design/ruckus_support_mockups-homepage.jpg,/projects/web-design/ruckus_support_mockups-management-b.jpg,/projects/web-design/ruckus_support_mockups-search-a.jpg,/projects/web-design/ruckus_support_mockups-tools.jpg" />
          <div class="description">
            <h3>Ruckus Wireless - Support Redesign</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design showcase">
          <a href="projects/yahoo.php"><img src="/projects/graphic-design/yahoo-logos.png" alt="Yahoo!" data-slides="/projects/graphic-design/yahoo-logos.png,/projects/graphic-design/yahoo-logos-2.png,/projects/graphic-design/yahoo-tour.png" />
          <div class="description">
            <h3>Yahoo!</h3>
          </div></a>
        </div>
        <div class="gallery-work illustration showcase">
          <a href="projects/subeta-official-and-custom-works.php"><img src="/projects/illustrations/subeta-endeavor.jpg" alt="Subeta: Official and Custom Works" />
          <div class="description">
            <h3>Subeta: Official &amp; Custom</h3>
          </div></a>
        </div>        <div class="gallery-work illustration showcase">
          <a href="projects/happy-stroll.php"><img src="/projects/illustrations/happy_stroll.jpg" alt="Happy Stroll" />
          <div class="description">
            <h3>Happy Stroll</h3>
          </div></a>
        </div>
        <div class="gallery-work illustration">
          <a href="projects/steven-universe-fan-works.php"><img src="/projects/illustrations/steven_universe-peridot.jpg" alt="Steven Universe Fan Works" data-slides="/projects/illustrations/steven_universe-peridot.jpg,/projects/illustrations/steven_universe-bismuth.jpg,/projects/illustrations/steven_universe-smokyquartz.jpg" />
            <div class="description">
              <h3>Steven Universe Fan Works</h3>
            </div>
          </a>
        </div>
        <div class="gallery-work illustration showcase">
          <a href="projects/morning-coffee.php"><img src="/projects/illustrations/morning_coffee.jpg" alt="Morning Coffee" />
            <div class="description">
              <h3>Morning Coffee</h3>
            </div>
          </a>
        </div>
        <div class="gallery-work illustration">
          <a href="projects/kanto-trio.php"><img src="/projects/illustrations/kanto_trio-zapdos.jpg" alt="Pokemon: Kanto Trio" data-slides="/projects/illustrations/kanto_trio-zapdos.jpg,/projects/illustrations/kanto_trio-articuno.jpg,/projects/illustrations/kanto_trio-moltres.jpg" />
          <div class="description">
            <h3>Pokemon: Kanto Trio</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design showcase">
          <a href="projects/sait-polytechnic-interactive.php"><img src="/projects/graphic-design/sait_interactive-antibiotics_animation.png" alt="SAIT Polytechnic - Interactive Activities" data-slides="/projects/graphic-design/sait_interactive-antibiotics_animation.png,/projects/graphic-design/sait_interactive-business_game.png,/projects/graphic-design/sait_interactive-fan_limit.png,/projects/graphic-design/sait_interactive-adjustments_activity.png" />
          <div class="description">
            <h3>SAIT Polytechnic - Interactive Activities</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design">
          <a href="projects/interactive-games.php"><img src="/projects/graphic-design/monster_maker.jpg" alt="Interactive Games" data-slides="/projects/graphic-design/monster_maker.jpg,/projects/graphic-design/ether_express.jpg" />
          <div class="description">
            <h3>Interactive Games</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design showcase">
          <a href="projects/ruckus-wireless-print.php"><img src="/projects/graphic-design/ruckus_print-banner.jpg" alt="Print Design" data-slides="/projects/graphic-design/ruckus_print-banner.jpg,/projects/graphic-design/ruckus_print-beads.jpg" />
          <div class="description">
            <h3>Print Design</h3>
          </div></a>
        </div>
        <div class="gallery-work web-design showcase">
          <a href="projects/ruckus-wireless-email-templates.php"><img src="/projects/web-design/ruckus_email-mockup-c.jpg" alt="Email Templates" data-slides="/projects/web-design/ruckus_email-mockup-c.jpg,/projects/web-design/ruckus_email-mockup-a.jpg,/projects/web-design/ruckus_email-mockup-d.jpg" />
          <div class="description">
            <h3>Email Templates</h3>
          </div></a>
        </div>
        <div class="gallery-work illustration">
          <a href="projects/birds.php"><img src="/projects/illustrations/birds-timneh.jpg" alt="Birds" data-slides="/projects/illustrations/birds-timneh.jpg,/projects/illustrations/birds-budgie.jpg,/projects/illustrations/birds-lovebird.jpg,/projects/illustrations/birds-hummingbird.jpg" />
          <div class="description">
            <h3>Birds</h3>
          </div></a>
        </div>
        <div class="gallery-work illustration">
          <a href="projects/nintendo-fan-works.php"><img src="/projects/illustrations/nintendo-christmas.jpg" alt="Nintendo Fan Works" data-slides="/projects/illustrations/nintendo-christmas.jpg,/projects/illustrations/nintendo-marios_coin.jpg,/projects/illustrations/nintendo-koopa.jpg,/projects/illustrations/nintendo-ridley.jpg" />
          <div class="description">
            <h3>Nintendo Fan Works</h3>
          </div></a>
        </div>
        <div class="gallery-work illustration">
          <a href="projects/in-the-forest.php"><img src="/projects/illustrations/in_the_forest.jpg" alt="In the Forest" />
          <div class="description">
            <h3>In the Forest</h3>
          </div></a>
        </div>
        <div class="gallery-work illustration">
          <a href="projects/neopets-fan-works.php"><img src="/projects/illustrations/neopets-apple_chase.jpg" alt="Neopets Fan Works" data-slides="/projects/illustrations/neopets-apple_chase.jpg,/projects/illustrations/neopets-vandygres.jpg" />
          <div class="description">
            <h3>Neopets Fan Works</h3>
          </div></a>
        </div>
        <div class="gallery-work illustration">
          <a href="projects/pets.php"><img src="/projects/illustrations/pets.jpg" alt="Pets" />
          <div class="description">
            <h3>Pets</h3>
          </div></a>
        </div>
        <div class="gallery-work illustration">
          <a href="projects/pokemon-fan-works.php"><img src="/projects/illustrations/pokemon-cosmog.jpg" alt="Pokemon Fan Works" data-slides="/projects/illustrations/pokemon-cosmog.jpg,/projects/illustrations/pokemon-cave.jpg,/projects/illustrations/pokemon-fish.jpg,/projects/illustrations/pokemon-rowlet.jpg" />
          <div class="description">
            <h3>Pokemon Fan Works</h3>
          </div></a>
        </div>
        <div class="gallery-work illustration">
          <a href="projects/wedding.php"><img src="/projects/illustrations/wedding-hero.jpg" alt="Wedding" data-slides="/projects/illustrations/wedding-hero.jpg,/projects/illustrations/wedding-twittercard.jpg" />
          <div class="description">
            <h3>Wedding</h3>
          </div></a>
        </div>
        <div class="gallery-work illustration">
          <a href="projects/poly-mantis.php"><img src="/projects/illustrations/poly_mantis.jpg" alt="Poly Mantis" />
          <div class="description">
            <h3>Poly Mantis</h3>
          </div></a>
        </div>
        <div class="gallery-work illustration">
          <a href="projects/morithias.php"><img src="/projects/illustrations/morithias.jpg" alt="Morithias" />
          <div class="description">
            <h3>Morithias</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design">
          <a href="projects/nitor-logo.php"><img src="/projects/graphic-design/nitor-logo.png" alt="Nitor" />
          <div class="description">
            <h3>Nitor</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design">
          <a href="projects/nmpd-showcase.php"><img src="/projects/graphic-design/nmpd_showcase.jpg" alt="NMPD Showcase" />
          <div class="description">
            <h3>NMPD Showcase</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design">
          <a href="projects/pixel-sun.php"><img src="/projects/graphic-design/pixel_sun.jpg" alt="Pixel Sun" />
          <div class="description">
            <h3>Pixel Sun</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design">
          <a href="projects/sait-polytechnic-templates.php"><img src="/projects/graphic-design/sait_templates-smartbook.png" alt="SAIT Polytechnic - Presentation Templates" />
          <div class="description">
            <h3>SAIT Polytechnic - Presentation Templates</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design">
          <a href="projects/st-patricks-day.php"><img src="/projects/graphic-design/ruckus_web-st_patricks_day.jpg" alt="St. Patrick's Day" />
          <div class="description">
            <h3>St. Patrick's Day</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design">
          <a href="projects/trick-or-treat.php"><img src="/projects/graphic-design/trick_or_treat.jpg" alt="Trick or Treat" />
          <div class="description">
            <h3>Trick or Treat</h3>
          </div></a>
        </div>
        <div class="gallery-work graphic-design">
          <a href="projects/without-a-window.php"><img src="/projects/graphic-design/without_a_window.jpg" alt="Without a Window" />
          <div class="description">
            <h3>Without a Window</h3>
          </div></a>
        </div>
        <div class="gallery-work web-design">
          <a href="projects/portfolio-concepts.php"><img src="/projects/web-design/portfolio_concepts-mockup-g.jpg" alt="Portfolio Concepts" data-slides="/projects/web-design/portfolio_concepts-mockup-g.jpg,/projects/web-design/portfolio_concepts-mockup-c.jpg,/projects/web-design/portfolio_concepts-mockup-f.jpg" />
          <div class="description">
            <h3>Portfolio Concepts</h3>
          </div></a>
        </div>
        <div class="gallery-work web-design">
          <a href="projects/ruckus-wireless-2016-redesign.php"><img src="/projects/web-design/ruckus_www_new-events-b.jpg" alt="Ruckus Wireless - 2016 Redesign" data-slides="/projects/web-design/ruckus_www_new-events-b.jpg,/projects/web-design/ruckus_www_new-mobile_apps.jpg,/projects/web-design/ruckus_www_new-press_home-a.jpg" />
          <div class="description">
            <h3>Ruckus Wireless - 2016 Redesign</h3>
          </div></a>
        </div>
        <div class="gallery-work web-design">
          <a href="projects/ruckus-wireless-acton.php"><img src="/projects/web-design/ruckus_acton-mockup-a.jpg" alt="Ruckus Wireless - Landing Templates" data-slides="/projects/web-design/ruckus_acton-mockup-a.jpg,/projects/web-design/ruckus_acton-wireframe-c.png" />
          <div class="description">
            <h3>Ruckus Wireless - Landing Templates</h3>
          </div></a>
        </div>
        <div class="gallery-work web-design">
          <a href="projects/ruckus-wireless-ap-migration.php"><img src="/projects/web-design/ruckus_ap_migration-prototype-1.jpg" alt="Ruckus Wireless - AP Migration" />
          <div class="description">
            <h3>Ruckus Wireless - AP Migration</h3>
          </div></a>
        </div>
        <div class="gallery-work web-design">
          <a href="projects/ruckus-wireless-other-projects.php"><img src="/projects/web-design/ruckus_other-product_master.jpg" alt="Ruckus Wireless - Other Projects" data-slides="/projects/web-design/ruckus_other-product_master.jpg,/projects/web-design/ruckus_other-maintenance.jpg,/projects/web-design/ruckus_other-xclaim.png" />
          <div class="description">
            <h3>Ruckus Wireless - Other Projects</h3>
          </div></a>
        </div>
        <div class="gallery-work web-design">
          <a href="projects/ruckus-wireless-ui-updates.php"><img src="/projects/web-design/ruckus_www-video_load-b.png" alt="Ruckus Wireless - UI Updates" data-slides="/projects/web-design/ruckus_www-video_load-b.png,/projects/web-design/ruckus_www-contact-c.jpg,/projects/web-design/ruckus_www-forms-b.jpg,/projects/web-design/ruckus_www-video_load-b.png" />
          <div class="description">
            <h3>Ruckus Wireless - UI Updates</h3>
          </div></a>
        </div>
        <div class="gallery-work web-design showcase">
          <a href="projects/ruckus-wireless-wifiagra-campaign.php"><img src="/projects/web-design/ruckus_wifiagra.jpg" alt="Ruckus Wireless - Wifiagra Campaign" />
          <div class="description">
            <h3>Ruckus Wireless - Wifiagra Campaign</h3>
          </div></a>
        </div>
        <div class="gallery-work web-design">
          <a href="projects/sait-polytechnic-course.php"><img src="/projects/web-design/sait-course_landing.png" alt="SAIT Polytechnic - Course Template" data-slides="/projects/web-design/sait-course_landing.png,/projects/web-design/sait-course_page.jpg" />
          <div class="description">
            <h3>SAIT Polytechnic - Course Template</h3>
          </div></a>
        </div>
      </div>

 <!-- <a class="button" href="#">
        <span>Show me more!</span>
        <svg>
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#chevron-down"></use>
        </svg>
      </a> -->
    </section>

    <section class="heather">
      <article>
        <img class="section-img" src="/images/workstation.svg" alt="Heather's Work Station" />
        <h2 id="heather">About</h2>
        <div class="about-heather">
          <div class="about">
            <p>I'm a graphic designer and illustrator with experience in front-end development. Coming up with inventive designs and finding ways to improve my workflow is how I like to roll! I have experience maintaining document libraries of varying types and needs, and have successfully delivered trade show graphics in a matter of hours. My diverse background in marketing, education and web design helps lend a different perspective to problem-solving.</p>

<p>My strongest talents are in the Adobe Creative Suite and Microsoft Office. I'm most adept with Adobe Photoshop and Illustrator but will happily pick up new software; I swiftly learned InDesign to maintain libraries of product briefs, white papers, ebooks and more. I've also figured out how to do basic video editing, taking a crash course on captioning videos in Premiere Pro in order to deliver for events.</p>

<p>In my free time, I like to make fun illustrations of my favourite things. I also enjoy playing video games and taking mini road-trips. Recently, I began volunteering at the <a href="https://www.hssv.org/">Silicon Valley Humane Society</a> to get my dog fix.</p>

<p>I'm eager to be part of a close-knit team and learn from fellow designers to push my talents even further. And, to boost morale, I'll even bake fresh chocolate chip cookies! Located in Sunnyvale, I'm looking for in-house opportunities in and around Silicon Valley.</p>
          </div>
          <div class="photo">
            <figure>
              <img src="/images/heather.jpg" alt="Heather Romero at the Portland Japanese Garden" title="Heather Romero" />
            </figure>
          </div>
        </div>
      </article>

      <div class="cta">
          <ul class="inline">
            <li>
              <p><span>Let's get to know each other</span></p>
              <p class="subtext">Check out my <a href="/documents/heather-romero-resume.pdf">Resume</a>, <a href="https://www.linkedin.com/in/heather-romero">LinkedIn</a> or <a href="https://twitter.com/hevromero">Twitter</a> for more info!</p>
            </li>
            <li>
              <a title="Resume" href="/documents/heather-romero-resume.pdf">
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#resume"></use>
                </svg>
              </a>
            </li>
            <li>
              <a title="LinkedIn" href="https://www.linkedin.com/in/heather-romero">
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#linkedin"></use>
                </svg>
              </a>
            </li>
            <li>
              <a title="Twitter" href="https://twitter.com/hevromero">
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#twitter"></use>
                </svg>
              </a>
            </li>
          </ul>
      </div>

      <div class="feeds">
        <div class="feed-twitter">
            <h3>
              <a href="https://www.twitter.com/hevromero">
                <svg>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#twitter-plain"></use>
                </svg>
                hevromero
              </a>
            </h3>
            <div class="twitter-scroll-wrap">
              <a class="twitter-timeline"
                data-lang="en"
                data-dnt="true"
                data-theme="dark"
                data-tweet-limit="6"
                data-link-color="#ffb89b"
                data-chrome="noheader nofooter noborders transparent"
                data-height="500"
                href="https://twitter.com/hevromero">Tweets by hevromero
              </a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div class="feed-tumblr">
          <h3>
            <a href="https://hevromero.tumblr.com">
              <svg>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#tumblr-plain"></use>
              </svg>
              hevromero
            </a>
          </h3>
          <div class="tumblr-feed"></div>
        </div>
      </div>
    </section>

    <div class="contact-wrap">
      <div class="contact-bg"></div>
      <div class="contact-bottom">
        <section id="contact" class="contact">
          <div class="card">
            <div class="card-body">
              <div class="contact-info">
                <h2>Contact</h2>
                <p><strong>Thanks for your interest!</strong><br />I'd love to hear from you.</p>
                <p><a class="email-link" href="/"></a><br /><a class="phone-link" href="/"></a></p>
                <!--<p>..or message and follow me through these services:</p>
                <ul class="inline">
                  <li>
                    <a title="Tumblr" href="https://fingerwhirls.tumblr.com">
                      <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#tumblr"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a title="DeviantART" href="https://hevromero.deviantart.com">
                      <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#deviantart"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a title="Instagram" href="https://www.instagram.com/hevromero/">
                      <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#instagram"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a title="Dribbble" href="https://dribbble.com/heather">
                      <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#dribbble"></use>
                      </svg>
                    </a>
                  </li>
                  </li>
                  <li>
                    <a title="LinkedIn" href="https://www.linkedin.com/in/heather-romero">
                      <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#linkedin"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a title="Twitter" href="https://twitter.com/hevromero">
                      <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/icons.svg#twitter"></use>
                      </svg>
                    </a>
                  </li>
                </ul>-->
                <?php if ($_POST['send'] && $errorflag) { ?>
                  <p style="color:#992020;">There seems to be an error with your message! Please check that you've filled everything in correctly and try again.</p>
                <?php } else if ($_POST['send']) { 

                  if (!$softerrorflag) {
                    $subject = "New Portfolio Message from " . $name;
                    $toaddress = "heather@heatherromero.com";
                    $header = "From: heatherromero.com Contact Form <noreply@heatherromero.com>\r\n";
                    $header .= "Reply-To: " . $name . " <" . $email . ">\r\n";

                    mail($toaddress, $subject, $emailBody, $header);
                  }

                  echo '<p>Your message has been sent, thank you for getting in touch with me!</p>';
              
                } ?>
              </div>
              <div class="contact-form">
                <form method="post" action="/#contact">
                  <fieldset>
                    <legend>Contact Heather</legend>
                    <div role="group"><!-- Work around fieldset flexbox bug -->
                      <label for="message" accesskey="m">Message</label>
                      <textarea name="message" id="message" rows="5" cols="40" placeholder="Message"><?php if ($message) { echo $message; } ?></textarea>
                      <label for="name" accesskey="n">Name</label>
                      <input type="text" name="name" id="name" autocapitalize="off" autocorrect="off" size="32" maxlength="30" placeholder="Your Name" value="<?php if ($name) { echo $name; } ?>">
                      <label for="email" accesskey="e">Email Address</label>
                      <input type="text" name="email" id="email" autocapitalize="off" autocorrect="off" size="52" maxlength="50" placeholder="Your Email Address" value="<?php if ($email) { echo $email; } ?>">
                      <label for="phone" class="phone-input" accesskey="p">Phone Number</label>
                      <input type="text" name="phone" id="phone" autocapitalize="off" autocorrect="off" size="52" maxlength="50" placeholder="Your Phone Number" value="">
                      <input type="hidden" name="javascript-enabled" id="javascript-enabled" value="false">
                      <input type="hidden" name="loaded-timestamp" id="loaded-timestamp" value="">
                      <input type="hidden" name="submitted-timestamp" id="submitted-timestamp" value="">
                      <button type="submit" name="send" value="Send" class="submit">
                        <svg>
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/images/send.svg#send"></use>
                        </svg>
                      </button>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
          <img class="envelope" src="/images/contact-envelope.svg" alt="Contact Card Envelope" />
          <img class="mailbox" src="/images/mailbox.svg#mailbox" alt="USPS Mailbox" />
        </section>
      </div>
    </div>

  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/slick.min.js"></script>
  <script src="/js/isotope.pkgd.min.js"></script>
  <script>
    var $grid
    var regionAllowance

    $(document).on('ready', function () {
      // Set up Isotope
      $grid = $('.gallery').isotope({
        itemSelector: '.gallery-work',
        layoutMode: 'fitRows',
        filter: '.showcase',
        percentPosition: true,
        resize: false // This is handled manually
      })

      $('li[data-filter]').on('click', function () {
        if ($(this).hasClass('active') && $(this).attr('title') !== 'Featured') {
          $('li[title="Featured"]').trigger('click')
          return
        }

        $('li[data-filter]').removeClass('active')
        $(this).addClass('active')

        var filterValue = $(this).attr('data-filter')
        $grid.isotope({
          filter: filterValue,
          stagger: 1000 / 60 * 2
        })
        resizeGrid()
      })

      let images = document.querySelectorAll('.gallery-work img')
      for (let img = 0; img < images.length; img++) {
        images[img].addEventListener('load', resizeGrid, false)
      }

      resizeGrid()
      setStickyNav()
    })
    $(window).on('load', resizeGrid)
    $(window).on('resize', resizeGrid)
    $(window).on('resize', setStickyNav)
    $(window).on('scroll', setStickyNav)

    function resizeGrid () {
      // I hate this, but it's the only way we can guarantee everything lines up
      // when Isotope is applied.
      let maxHeight = {
        highlight: 0,
        standard: 0
      }
      $('.gallery-work .description').each(function () {
        let $el = $(this)
        let track = $el.parent().parent().hasClass('highlight') ? 'highlight' : 'standard'

        $el.css({ width: '', height: '' })
        maxHeight[track] = Math.max($el.height(), maxHeight[track])
      }).each(function () {
        let $el = $(this)
        let track = $el.parent().parent().hasClass('highlight') ? 'highlight' : 'standard'

        $el.height(maxHeight[track])
      })

      $grid.isotope({
        stagger: 0
      })
    }

    function setStickyNav () {
      let scrollPos = $(window).scrollTop()
      let worksPos = $('#works').offset().top
      let heatherPos = $('section.heather').offset().top

      regionAllowance = $(window).width() > 767 ? 70 : 106

      // Account for large screens
      let contactPos = Math.min($('body').height() - $(window).height(), $('#contact').offset().top)

      if (scrollPos >= worksPos - regionAllowance) {
        $('main').addClass('sticky-nav')
      } else {
        $('main').removeClass('sticky-nav')
      }

      if (scrollPos >= contactPos - regionAllowance) {
        $('nav').removeClass('works')
        $('nav').removeClass('heather')
        $('nav').addClass('contact')
      } else if (scrollPos >= heatherPos - regionAllowance) {
        $('nav').removeClass('works')
        $('nav').addClass('heather')
        $('nav').removeClass('contact')
      } else if (scrollPos >= worksPos - regionAllowance) {
        $('nav').addClass('works')
        $('nav').removeClass('heather')
        $('nav').removeClass('contact')
      }
    }
  </script>

   <script type="text/javascript">
    $(document).on('ready', function() {

      // remove outlines on click but not keyboard.

      $("body").on("mousedown", "*", function(e) {
        if (($(this).is(":focus") || $(this).is(e.target)) && $(this).css("outline-style") == "none") {
          $(this).css("outline", "none").on("blur", function() {
              $(this).off("blur").css("outline", "");
          });
        }
      });

      // Animate scroll to prevent the impression that users have gone to a new page.

      $('a[href^="#"]').click(function (event) {
        event.preventDefault()

        $('html, body').animate({
          scrollTop: $(this.hash).offset().top - (regionAllowance - 1)
        }, 400)
      })
    });
  </script>


  <script type="text/javascript">
    document.querySelector("input#javascript-enabled").value = "true"
    document.querySelector("input#loaded-timestamp").value = String(Date.now())

    document.querySelector(".contact-form form").addEventListener("submit", function () {
      document.querySelector("input#submitted-timestamp").value = String(Date.now())
    })
  </script>
</body>

</html>
