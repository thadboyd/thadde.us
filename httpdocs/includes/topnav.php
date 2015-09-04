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
    'subnav' => array()
  ), // websites
  'audiobooks' => array(
    'title' => 'Audiobooks',
    'link' => 'audiobooks.php',
    'subnav' => array()
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

foreach($websites as $key => $value) {
  $site = array(
    'title' => $value['title'],
    'link' => 'websites.php#' . $key
  );
  $pages['websites']['subnav'][$key] = $site;
} // foreach website

foreach($audiobooks as $key => $value) {
  $book = array(
    'title' => $value['title'],
    'link' => 'audiobooks.php#' . $key
  );
  $pages['audiobooks']['subnav'][$key] = $book;
} // foreach audiobook
?>

    <section class="top-bar-section">
<?php
  populateUL($pages, 3, 'right');
?>
    </section>
