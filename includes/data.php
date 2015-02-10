<?php
/* data.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Shared data for all pages
 */

$websites = array(
  'md' => array(
    'title' => 'MD Motivational Drink',
    'domain' => 'mdmotivationaldrink.com',
    'link' => 'http://mdmotivationaldrink.com/',
    'logo' => 'img/md-logo.png',
    'desc' =>
      "<p>Responsive site featuring CSS3 animations and jQuery styling.</p>
      
      <p>Graphic design by <a href=\"http://www.linkedin.com/in/yalikeitmike\">Mike Patten</a>.</p>",
    'copyright' => array(
      'Content' => '2014 MD Motivational Drink',
      'Code' => '2014 Go Daddy'
    ) // copyright
  ), // md
  'swimit' => array(
    'title' => "Swim'It",
    'domain' => "myswimit.com",
    'link' => 'http://myswimit.com/',
    'logo' => 'img/swimit-logo.png',
    'desc' => "<p>Responsive site featuring jQuery and a Nivo slideshow.</p>",
    'copyright' => array(
      'Content' => '2014 Lo Drag Inc.',
      'Code' => '2014 Go Daddy'
    ) // copyright
  ), // swimit
  'garciniaplus' => array(
    'title' => 'Garcinia Plus',
    'domain' => 'garcinplus.com',
    'link' => 'https://garcinplus.com/index.php',
    'logo' => 'img/garciniaplus-logo.png',
    'desc' => "<p>PHP-based ecommerce site featuring CSS3 rotations, jQuery, and Bootstrap.</p>",
    'copyright' => array(
      'Content' => '2012-2014 Bridge Road Marketing SLM21 LTD',
      'Code' => '2012-2014 Snowball Media Group'
    ) // copyright
  ), // garciniaplus
  'puregreencoffee' => array(
    'title' => 'Pure Green Coffee',
    'domain' => 'new-you-diet.com',
    'link' => 'https://www.new-you-diet.com/index.php',
    'logo' => 'img/puregreencoffeeextract-logo.png',
    'desc' => "<p>PHP-based ecommerce site featuring CSS3 gradients and rotations, jQuery, and Bootstrap.</p>",
    'copyright' => array(
      'Content' => '2012-2014 A1-Diet',
      'Code' => '2012-2014 Snowball Media Group'
    ) // copyright
  ) // puregreencoffee
); // websites
 
$books = array(
  'dinner' => array(
    'title' => 'Dinner on a Flying Saucer',
    'author' => 'Dean Wesley Smith',
    'image' => 'img/cover-dinner.jpg',
    'video' => 'http://www.youtube.com/embed/IZ_tSXRJb_g',
    'blurb' =>
      "Sometimes, when a fella gets to help out with fightin' a war between two alien races, it's just not such a good idea to tell your wife. Sometimes the truth just isn't good enough.",
    'links' => array(
      'Audible' => 'http://www.audible.com/pd/ref=sr_1_3?asin=B00B9HH01A',
      'Amazon' =>
	'http://www.amazon.com/gp/product/B00BB1RUYQ/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=390957&amp;creativeASIN=B00BB1RUYQ&amp;linkCode=as2&amp;tag=corporatesell-20&amp;linkId=2CSUQLQFD3Y3S445',
      'iTunes' =>
	'https://itunes.apple.com/us/audiobook/dinner-on-flying-saucer-unabridged/id599832717'
    ),
    'copyright' => '2012, 2013 Dean Wesley Smith'
  ), // dinner
  'dinosaurs' => array(
    'title' => 'Dinosaurs in the Home Depot',
    'author' => 'Bret Wellman',
    'image' => 'img/cover-dinosaurs.jpg',
    'video' => 'http://www.youtube.com/embed/Ry8Sbq8LJn4',
    'blurb' =>
      "A man is locked inside the Home Depot as it is over run by dinosaurs. Now he must escape or become dinner.",
    'links' => array(
      'Audible' => 'http://www.audible.com/pd/ref=sr_1_1?asin=B00B5W6R3G',
      'Amazon' =>
	'http://www.amazon.com/gp/product/B00B77HDR8/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=390957&amp;creativeASIN=B00B77HDR8&amp;linkCode=as2&amp;tag=corporatesell-20&amp;linkId=I63RZ6FP77JIBNAS',
      'iTunes' =>
	'https://itunes.apple.com/us/audiobook/dinosaurs-in-home-depot-unabridged/id597740897'
    ),
    'copyright' => '2012, 2013 Bret Wellman'
  ), // dinosaurs
  'alien' => array(
    'title' => 'Your Average Ordinary Alien',
    'author' => 'Adam Graham',
    'image' => 'img/cover-alien.jpg',
    'video' => 'http://www.youtube.com/embed/y_C2ZIux6lQ',
    'blurb' =>
      "Kirk Picard Skywalker is an unemployed sci-fi fanatic who dreams of being abducted by aliens from outer space. One day his dreams come through and he's horrified to learn that the aliens are all too ordinary.",
    'links' => array(
      'Audible' => 'http://www.audible.com/pd/ref=sr_1_1?asin=B00B8VULPE',
      'Amazon' =>
	'http://www.amazon.com/gp/product/B00B9DC08W/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=390957&amp;creativeASIN=B00B9DC08W&amp;linkCode=as2&amp;tag=corporatesell-20&amp;linkId=VSANRRELI2NGTTQE',
      'iTunes' => 'https://itunes.apple.com/us/audiobook/your-average-ordinary-alien/id599192781'
    ),
    'copyright' => '2007, 2009, 2013 Adam Graham'
  ) // alien
); // books

$trademarks = array(
  'Amazon, Amazon.com, Audible, and all related names and logos &reg; and &trade; Amazon.com, Inc.',
  
  'iTunes and all related names and logos &reg; and &trade; Apple Inc.',
  
  'Go Daddy, GoDaddy.com, and all related names and logos &reg; and &trade; Go Daddy.'
); // trademarks

$libraries = array(
  '<a href="http://jquery.com/">jQuery</a> &copy; 2005, 2014 jQuery Foundation<br/>
  <a href="http://jqueryui.com/">jQuery UI</a> &copy; 2014 jQuery Foundation and other contributors',

  '<a href="http://fontawesome.io">Font Awesome</a> &copy; Dave Gandy.'
); // libraries
?>