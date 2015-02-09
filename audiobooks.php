<?php
/* audiobooks.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Listing of audiobooks using jQuery UI accordion structure
 */

$pageShortName = 'audiobooks';
$pageTitle = 'Audiobooks by Thaddeus R R Boyd';
$pageDesc = "Audiobooks narrated by Thaddeus R R Boyd. Available on Amazon, Audible, and iTunes.";
require('includes/header.php');

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
);

?>

<div id="tabs">
  <nav><ul>
<?php foreach($books as $key => $value) {
  indent(2);
  echo('<li class="tab-' . $key . '">' . PHP_EOL);

  indent(3);
  echo('<a href="#' . $key . '"><img src="' . $value['image'] . '" alt="' . $value['title'] . '" /></a>' . PHP_EOL);

  indent(3);
  echo('<iframe src="' . $value['video'] . '"></iframe>' . PHP_EOL);

  indent(2);
  echo('</li>');
} ?>
  </ul></nav>
  
<?php foreach($books as $key => $value) {
  indent(1);
  echo('<section id="' . $key . '" class="tab-' . $key . '">' . PHP_EOL);
  
  indent(2);
  echo('<h2>' . $value['title'] . '<br/>' . PHP_EOL);
  indent(3);
  echo('<span class="author">Written by ' . $value['author'] . '</span></h2>' . PHP_EOL . PHP_EOL);
  
  indent(2);
  echo('<blockquote class="blurb">' . $value['blurb'] . '</blockquote>' . PHP_EOL . PHP_EOL);
  
  indent(2);
  echo('<h3>Buy ' . $value['title'] . ':</h3>' . PHP_EOL);
  indent(2);
  echo('<ul>' . PHP_EOL);
  foreach($value['links'] as $k => $v) {
    indent(3);
    echo('<li><a href="' . $v . '">' . $k . '</a></li>' . PHP_EOL);
  }
  
  indent(2);
  echo('<footer>Copyright &copy; ' . $value['copyright'] . '</footer>' . PHP_EOL);
  
  indent(1);
  echo('</section><!-- ' . $key . ' -->' . PHP_EOL . PHP_EOL);
} ?>
</div><!-- tabs -->

<script>
$(function() {
  $("#tabs").tabs({
    collapsible: true,
    hide: {
      effect: "blind",
      duration: 200
    },
    show: {
      effect: "blind",
      duration: 200
    },
    load: location.hash
  });  

});
</script>

<?php require('includes/footer.php'); ?>