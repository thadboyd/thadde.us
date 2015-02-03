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
?>

<nav>
<div class="toggleNav mobileOnly fa fa-bars"></div>
<?php
  populateUL($pages, 1);
?>
</nav>
