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
      'globaljet' => array(
	'title' => 'Global Jet Partners',
	'link' => 'websites.php#globaljet'
      ), // globaljet
      'conference' => array(
	'title' => 'New Media Con',
	'link' => 'websites.php#conference'
      ), // conference
      'md' => array(
	'title' => 'MD Motivational Drink',
	'link' => 'websites.php#md'
      ), // md
      'swimit' => array(
	'title' => "Swim'It",
	'link' => 'websites.php#swimit'
      ) // swimit
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
  'github' => array(
    'class' => 'social',
    'title' => '<span class="fa fa-github"><!-- Github --></span>',
    'link' => 'https://github.com/thadboyd/'
  ),
  'linkedin' => array(
    'class' => 'social',
    'title' => '<span class="fa fa-linkedin"><!-- LinkedIn --></span>',
    'link' => 'https://www.linkedin.com/in/thadboyd/'
  ) // social
);
?>

<nav class="tab-bar show-for-small">
  <a class="left-off-canvas-toggle menu-icon"></a>
</nav>
<nav class="top-bar hide-for-small">
  <section class="top-bar-section">
<?php
  populateUL($pages, 2);
?>
  </section>
</nav>

<script>
$("#mainHeader .toggleNav").click(function() {
  $("#mainHeader nav > ul").toggle("blind", 500);
});
</script>