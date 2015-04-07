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
  'lunch' => array(
    'icon' => 'fa-cutlery'
  ), // lunch
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
  'ebilchik' => array(
    'name' => 'Esther Bilchik',
    'image' => 'img/stock-futuristic-glasses.jpg'
  ), // ebilchik
  'steckler' => array(
    'name' => 'Bob Steckler',
    'image' => 'img/stock-guy1.jpg'
  ), // steckler
  'finklestein' => array(
    'name' => 'Pamela Finklestein',
    'image' => 'img/stock-smiling-so-happy.jpg'
  ), // finklestein
  'macintosh' => array(
    'name' => 'Noodles MacIntosh',
    'image' => 'img/stock-tomasito-superstar.jpg'
  ),
  'earley' => array(
    'name' => 'Joe Earley',
    'image' => 'img/stock-rural-self-portrait.jpg'
  ), // earley
  'spadowski' => array(
    'name' => 'Stanley Spadowski',
    'image' => 'img/stock-coffee-smile.jpg'
  ) // spadowski
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
      ), // fletcher array
      array(
	'event' => 'ebilchik',
	'time' => '11:00 AM - 12:00 PM',
	'location' => 'Area 51',
	'desc' => 'We will distill our identity through client-centric solutions',
	'category' => 'chart'
      ), // ebilchik array
      array(
	'event' => 'steckler',
	'time' => '11:00 AM - 12:00 PM',
	'location' => 'Area 51-A',
	'desc' => 'At the end of the day we must monetize our assets',
	'category' => 'lesson'
      ), // steckler array
      array(
	'event' => 'lunch',
	'time' => '12:00 PM - 1:30 PM',
	'location' => 'Dining Hall',
	'desc' => 'Lunch'
      ) // lunch array
    ) // schedule
  ), // 03-31
  '04-01' => array(
    'header' => 'Wednesday, April 1, 2015',
    'schedule' => array(
      array(
	'event' => 'breakfast',
	'time' => '7:00 AM - 8:00 AM',
	'location' => 'Dining Hall',
	'desc' => 'Breakfast'
      ), // breakfast array
      array(
	'event' => 'finklestein',
	'time' => '8:30 AM - 10:00 AM',
	'location' => 'Hank Hall',
	'desc' => 'The fundamentals of change',
	'category' => 'development'
      ), // finklestein array
      array(
	'event' => 'macintosh',
	'time' => '8:30 AM - 10:00 AM',
	'location' => 'Don Hall',
	'desc' => 'Can you visualize a value-added experience?',
	'category' => 'talk'
      ), // macintosh array
      array(
	'event' => 'earley',
	'time' => '11:00 AM - 12:00 PM',
	'location' => 'Harren Hall',
	'desc' => 'Grow the business infrastructure and monetize our assets',
	'category' => 'ideas'
      ) // earley array
    ) // schedule
  ), // 04-01
  '04-02' => array(
    'header' => 'Thursday, April 2, 2015',
    'schedule' => array(
      array(
	'event' => 'breakfast',
	'time' => '7:00 AM - 8:00 AM',
	'location' => 'Dining Hall',
	'desc' => 'Breakfast'
      ), // breakfast array
      array(
	'event' => 'spadowski',
	'time' => '8:30 AM - 10:00 AM',
	'location' => 'In a van down by the river',
	'desc' => 'Bringing to the table our capitalized reputation',
	'category' => 'bonus'
      ), // spadowski array
      array(
	'event' => 'finklestein',
	'time' => '8:30 AM - 10:00 AM',
	'location' => 'Sector 7G',
	'desc' => 'Proactively overseeing day-to-day operations',
	'category' => 'lifecycle'
      ), // finklestein array
      array(
	'event' => 'newman',
	'time' => '11:00 AM - 12:00 PM',
	'location' => 'Room 101',
	'desc' => 'Services and deliverables with cross-platform innovation',
	'category' => 'keynote'
      ) // newman array
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
    
    '<a href="http://www.freeimages.com/photo/1418622">Futuristic Glasses</a> by <a href="http://www.freeimages.com/profile/l4red0">Leszek Soltys</a>',
    
    '<a href="http://www.freeimages.com/photo/1167030">Guy 1</a> by <a href="http://www.freeimages.com/profile/keenanm">Keenan Milligan</a>',
    
    '<a href="http://www.freeimages.com/photo/1168191">Smiling So Happy</a> by <a href="http://www.freeimages.com/profile/jvangalen">Jos van Galen</a>',
    
    '<a href="http://www.freeimages.com/photo/1166915">Tomasito Superstar</a> by <a href="http://www.freeimages.com/profile/coloniera2">Hector Landaeta</a>',
    
    '<a href="http://www.freeimages.com/photo/1363173">Rural Self Portrait</a> by <a href="http://www.freeimages.com/profile/colinbroug">Colin Brough</a>',
    
    '<a href="http://www.freeimages.com/photo/1287009">Coffee Smile</a> by <a href="http://www.freeimages.com/profile/michaelaw">Michaela Kobyakov</a>',
    
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