<?php
function writeRandomWork ($section) {
  $json = json_decode(file_get_contents("../includes/work.json"), true);

  $options = $json[$section];

  $pathComponents = explode("/", $_SERVER["REQUEST_URI"]);
  $thisScript = array_pop($pathComponents);

  // Remove the current page so we don't end up linking back randomly.
  $remove = 0;
  for ($key = 0; $key < count($options); $key++) {
    if ($options[$key]["page"] === $thisScript) {
      $remove = $key;
    }
  }
  array_splice($options, $remove, 1);

  // Choose 4 links.
  $selected = array();
  while (count($selected) < 4) {
    array_push($selected, array_splice($options, rand(0, count($options) - 1), 1)[0]);
  }

  foreach ($selected as $val) {
    echo '<li><a href="/projects/';
    echo $val["page"];
    echo '"><img src="/projects/';
    echo $section;
    echo '/';
    echo $val["thumb"];
    echo '" alt="';
    echo $val["name"];
    echo '" /></a></li>';
  }
}
?>
