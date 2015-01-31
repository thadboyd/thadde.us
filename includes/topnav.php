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
      array(
	'title' => 'MD Motivational Drink',
	'link' => 'websites.php#mdmotivationaldrink'
      ),
      array(
	'title' => 'MySwimIt',
	'link' => 'websites.php#myswimit'
      )
    )
  ),
  'audiobooks' => array(
    'title' => 'Audiobooks',
    'link' => 'audiobooks.php',
    'subnav' => array(
      array(
	'title' => 'Dinner on a Flying Saucer',
	'link' => 'audiobooks.php#dinner'
      ),
      array(
	'title' => 'Dinosaurs in the Home Depot',
	'link' => 'audiobooks.php#dinosaurs'
      ),
      array(
	'title' => 'Your Average Ordinary Alien',
	'link' => 'audiobooks.php#alien'
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

function populateUL($navArr) {
  ?><ul><?php
  foreach($navArr as $key => $value) {
    echo('<li');
    if($key == $shortName) {
      echo(' class="current"');
    }
    echo('><a ');
    if(isset($value['class']) {
      echo('class="' + $value['class'] + '" ');
    }
    echo('href="' + $value['link'] + '">' + $value['title'] + '</a>');
    if(isset($value['subnav']) {
      populateUL($value['subnav']);
    }
    echo('</li>');
  }
}

?>

<nav>

<?php
  populateUL($pages);
?>

</nav>