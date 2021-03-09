<?php
function writeHeader($pageTitle) {
?>
<!doctype html>
<?php 
  if(strpos($_SERVER['REQUEST_URI'], 'projects') !== false){ 
    echo '<html lang="en" class="works-page">' . "\n";
  } else {
    echo '<html lang="en">' . "\n";
  }
?>
  <head>
    <title><?php echo $pageTitle ?> - Heather Romero</title>
   <meta name="google-site-verification" content="3AR0KKmuIIUGbXlca-fx-uGJ-n6WvaSem7oGFWJ5ASg" />
    <meta charset="utf-8">
    <meta name="description" content="The portfolio of Heather Romero, a designer, frontend developer, and illustrator creating graphics and websites using Adobe Photoshop, Illustrator, HTML, and CSS.">
    <meta name="author" content="Heather Romero">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/slick.css"/>
    <link rel="stylesheet" href="https://use.typekit.net/omx5zfa.css">
    <!-- <script src="https://use.typekit.net/jvp8ckc.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script> -->

<?php 
  if(strpos($_SERVER['REQUEST_URI'], 'projects') === false){ 
?>
    <script defer async src="/js/lightbox.js"></script>
    <script defer async src="/js/thumb-slides.js"></script>
    <script defer async src="/js/tumblr.js"></script>
<?php 
  }
?>
    <script defer async src="/js/reveal-contact-info.js"></script>

    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

   <!-- Matomo -->
  <script type="text/javascript">
    var _paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//heatherromero.com/local-stats/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '1']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!-- End Matomo Code -->
   
  </head>
  <body>
  <?php if(strpos($_SERVER['REQUEST_URI'], 'projects') !== false){ ?>
  <script src="/js/history-restore.js"></script>
    <div class="return">
      <a href="/">Return to Portfolio</a></div>
<?php
  }
}
?>
