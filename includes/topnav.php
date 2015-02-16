<?php
/* topnav.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Navigation for top of all pages
 */

$pages = array(
  'index' => array(
    'title' => 'Home',
    'link' => 'index.php'
  ), // index
  'websites' => array(
    'title' => 'Websites',
    'link' => 'websites.php',
    'subnav' => array(
      'md' => array(
	'title' => 'MD Motivational Drink',
	'link' => 'websites.php#md'
      ), // md
      'swimit' => array(
	'title' => "Swim'It",
	'link' => 'websites.php#swimit'
      ), // swimit
      'garciniaplus' => array(
	'title' => 'Garcinia Plus',
	'link' => 'websites.php#garciniaplus'
      ), // garciniaplus
      'puregreencoffee' => array(
	'title' => 'Pure Green Coffee',
	'link' => 'websites.php#puregreencoffee'
      ) // puregreencoffee
    ) // subnav
  ), // websites
  'audiobooks' => array(
    'title' => 'Audiobooks',
    'link' => 'audiobooks.php',
    'subnav' => array(
      'dinner' => array(
	'title' => 'Dinner on a Flying Saucer',
	'link' => 'audiobooks.php#dinner'
      ), // dinner
      'dinosaurs' => array(
	'title' => 'Dinosaurs in the Home Depot',
	'link' => 'audiobooks.php#dinosaurs'
      ), // dinosaurs
      'alien' => array(
	'title' => 'Your Average Ordinary Alien',
	'link' => 'audiobooks.php#alien'
      ) // alien
    ) // subnav
  ), // audiobooks
  'contact' => array(
    'title' => 'Contact',
    'link' => 'contact.php'
  ), // contact
  'social' => array(
    'class' => 'social',
    'title' => '<span class="fa fa-linkedin"><!-- LinkedIn --></span>',
    'link' => 'https://www.linkedin.com/in/thadboyd/'
  ) // social
);
?>

<nav>
<div class="toggleNav mobileOnly fa fa-bars"></div>
<?php
  populateUL($pages, 1);
?>
</nav>

<script>
$("#mainHeader .toggleNav").click(function() {
  $("#mainHeader nav > ul").toggle("blind", 500);
});
</script>