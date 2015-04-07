<?php
$categories = array(
  'keynote' => 'fa-microphone',
  'ideas' => 'fa-lightbulb-o',
  'lesson' => 'fa-graduation-cap',
  'chart' => 'fa-line-chart',
  'lifecycle' => 'fa-heart',
  'development' => 'fa-code',
  'talk' => 'fa-comments',
  'bonus' => 'fa-diamond'
); // categories

$events = array(
  'breakfast' => array(
    'icon' => 'fa-coffee'
  ), // breakfast
  'registration' => array(
    'icon' => 'fa-pencil'
  ), // registration
  'newman' => array(
    'name' => 'George Newman',
    'image' => 'img/stock-portrait4.jpg'
  ), // newman
  'campbell' => array(
    'name' => 'Teri Campbell',
    'image' => 'img/stock-spontaneous.jpg'
  ), // campbell
  'fletcher' => array(
    'name' => 'RJ Fletcher',
    'image' => 'img/stock-kenny-london.jpg'
  ),
  'finklestein' => array(
    'name' => 'Pamela Finklestein',
    'image' => ''
  ) // finklestein
); // events

$days = array(
  '03-31' => array(
    'header' => 'Tuesday, March 31, 2015',
    'schedule' => array(
      array(
	'event' => 'breakfast',
	'time' => '7:00 AM - 8:00 AM',
	'location' => 'Dining Hall',
	'desc' => 'Breakfast'
      ), // breakfast array
      array(
	'event' => 'registration',
	'time' => '7:00 AM - 6:00 PM',
	'location' => 'Lobby',
	'desc' => 'Registration open'
      ), // registration array
      array(
	'event' => 'newman',
	'time' => '8:30 AM - 10:00 AM',
	'location' => 'Room 42',
	'desc' => 'Transitioning our company by awareness of functionality',
	'category' => 'keynote'
      ), // newman array
      array(
	'event' => 'campbell',
	'time' => '11:00 AM - 12:00 PM',
	'location' => 'Room 23',
	'desc' => 'Promoting viability',
	'category' => 'ideas'
      ), // campbell array
      array(
	'event' => 'fletcher',
	'time' => '11:00 AM - 12:00 PM',
	'location' => 'Hangar 18',
	'desc' => 'Providing our supply chain with diversity',
	'category' => 'lifecycle'
      ) // array
    ) // schedule
  ), // 03-31
  '04-01' => array(
    'header' => 'Wednesday, April 1, 2015',
    'schedule' => array(
    ) // schedule
  ), // 04-01
  '04-02' => array(
    'header' => 'Thursday, April 2, 2015',
    'schedule' => array(
    ) // schedule
  ) // 04-02
); // days

$credits = array(
  'stock_images' => array(
    '<a href="http://www.freeimages.com/photo/1152047">Glossy Ball 1</a> by <a href="http://www.freeimages.com/profile/barunpatro">Barun Patro</a>',
    
    '<a href="http://www.freeimages.com/photo/1326374">Simple Swirls 1</a> by <a href="http://www.freeimages.com/profile/k_vohsen">Kimberly Vohsen</a>',
    
    '<a href="http://www.freeimages.com/photo/746718">Stock Portrait 4</a> by <a href="http://www.freeimages.com/profile/makram">Malik Bhai</a>',
    
    '<a href="http://www.freeimages.com/photo/1141475">Spontaneous</a> by <a href="http://www.freeimages.com/profile/bjearwicke">Benjamin Earwicker</a>',
    
    '<a href="http://www.freeimages.com/photo/442249">Kenny in London 30</a> by <a href="http://www.freeimages.com/profile/matchstick">Martin Walls</a>',
    
    'Striped background created with <a href="http://www.stripegenerator.com/">Stripe Generator</a>'
  ), // stock images
  'fonts' => array(
    '<a href="http://www.google.com/fonts/specimen/Open+Sans">Open Sans</a> designed by <a href="https://profiles.google.com/107777320916704234605/about">Steve Matteson</a>, &copy; 2010-2011 Google Corporation',
    
    '<a href="http://www.google.com/fonts/specimen/Montserrat">Montserrat</a> &copy; 2012 Julieta Ulanovsky',
    
    'Dosis &copy; <a href="https://plus.google.com/114391601624281927771/about">Pablo Impallari</a>',
    
    'Nunito &copy; <a href="https://plus.google.com/+vernonadams/about">Vernon Adams</a>',
    
    '<a href="http://fontawesome.io">Font Awesome</a> &copy; 2012-2015 Dave Gandy',
  ), // fonts
  'libraries' => array(
    '<a href="http://foundation.zurb.com/">Foundation</a> &copy; 2014 Zurb',
    
    '<a href="http://jquery.com/">jQuery</a> &copy; 2005, 2014 jQuery Foundation<br/>
    <a href="http://jqueryui.com/">jQuery UI</a> &copy; 2014 jQuery Foundation and other contributors',
    
    '<a href="https://ftlabs.github.io/fastclick/">FastClick</a> &copy; 2014 The Financial Times Limited'
  ), // libraries
  'song_lyrics' => array(
    '<p><a href="https://www.youtube.com/watch?v=GyV_UG60dD4"><cite>Mission Statement</cite></a> lyrics &copy; 2014 "Weird Al" Yankovic</p>'
  ) // song_lyrics
); // credits
?>