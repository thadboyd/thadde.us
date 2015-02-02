<?php
$pages = array(
  'index' => array(
    'title' => 'Home',
    'link' => 'index.php'
  ),
  'websites' => array(
    'title' => 'Websites',
    'link' => 'websites.php',
    'subnav' => array(
      'md' => array(
	'title' => 'MD Motivational Drink',
	'link' => 'websites.php#mdmotivationaldrink'
      ),
      'swimit' => array(
	'title' => 'MySwimIt',
	'link' => 'websites.php#myswimit'
      )
    )
  ),
  'audiobooks' => array(
    'title' => 'Audiobooks',
    'link' => 'audiobooks.php',
    'subnav' => array(
      'dinner' => array(
	'title' => 'Dinner on a Flying Saucer',
	'link' => 'audiobooks.php#dinner'
      ),
      'dinosaurs' => array(
	'title' => 'Dinosaurs in the Home Depot',
	'link' => 'audiobooks.php#dinosaurs'
      ),
      'alien' => array(
	'title' => 'Your Average Ordinary Alien',
	'link' => 'audiobooks.php#alien'
      )
    )
  ),
  'contact' => array(
    'title' => 'Contact',
    'link' => 'contact.php'
  ),
  'social' => array(
    'class' => 'social',
    'title' => '<span class="fa fa-linkedin"><!-- LinkedIn --></span>',
    'link' => 'https://www.linkedin.com/in/thadboyd/'
  )
);

function indent($level) {
  for($i = 0; $i<$level; $i++) {
    echo('  ');
  }
}

function populateUL($navArr, $indentLevel = 0) {
  indent($indentLevel);
  echo('<ul>' . PHP_EOL);
  foreach($navArr as $key => $value) {
    indent($indentLevel+1);
    echo('<li');
    if(isset($value['class'])) {
      echo(' class="' . $value['class'] . '"');
    }
    echo('><a ');
    if($key === $GLOBALS['shortName']) {
      echo('class="current" ');
    }
    echo('href="' . $value['link'] . '">' . $value['title'] . '</a>');
    if(isset($value['subnav'])) {
      echo(PHP_EOL);
      populateUL($value['subnav'], $indentLevel+2);
      indent($indentLevel+1);
    }
    echo('</li>' . PHP_EOL);
  }
  indent($indentLevel);
  echo('</ul>' . PHP_EOL);
}

?>

<nav>
<?php
  populateUL($pages, 1);
?>
</nav>
