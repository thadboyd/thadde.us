<?php
/* index.php
 * (c) 2015, 2016 Thad Boyd
 * for thadde.us
 *
 * Index page directing to websites and audiobooks
 */
 
$pageShortName = 'index';
$pageTitle = "Portfolio &mdash; Thad Boyd";
$pageDesc = "Projects by Thad Boyd, web developer, computer scientist, IT specialist, and audiobook producer";

function hero() {
?>
  <div class="row">
    <div class="columns small-12">
      <h1><?php echo($GLOBALS['pageTitle']); ?></h1>
    
      <p>Hi, I'm Thad.</p>

      <p>I make things.  Here are some of them.</p>
    </div><!-- column -->
  </div><!-- row -->
  
  <nav class="row">
    <div class="columns medium-4" id="nav-websites">
      <a href="#" onclick="$('html, body').animate({scrollTop: $('#websites').offset().top}, 300);">
	<span class="fa fa-globe"></span><br/>
	Websites
      </a>
    </div><!-- column -->
    
    <div class="columns medium-4" id="nav-audiobooks">
      <a href="#" onclick="$('html, body').animate({scrollTop: $('#audiobooks').offset().top}, 300);">
	<div class="fa fa-audiobook">
          <span class="fa-book"></span>
          <span class="fa-volume-up"></span>
        </div><br/>
	Audiobooks
      </a>
    </div><!-- column -->
    
    <div class="columns medium-4" id="nav-ebooks">
      <a href="#" onclick="$('html, body').animate({scrollTop: $('#audiobooks').offset().top}, 300);">
        <div class="fa fa-ebook">
          <span class="fa-tablet"></span>
          <span class="fa-book"></span>
        </div><br/>
        E-Books
      </a>
    </div><!-- column -->

  </nav><!-- row -->
<?php
} // hero

require_once('includes/header.php');
?>

  <section id="websites">
    <div class="row">
      <div class="columns small-12">
        <h2><a href="websites.php">Websites</a></h2>
        
        <nav id="sitelogos"><ul class="small-block-grid-2 large-block-grid-3">
<?php
foreach($websites as $key => $value) {
?>
          <li><a href="websites.php#<?php echo($key); ?>">
<?php
  if(isset($value['logo'])) {
    echo('<img src="' . $value['logo'] . '" alt="' . $value['title'] . '" />');
  } else {
    echo('<div class="company-name" id="banner-' . $key . '">' . $value['title'] . '</div>');
  }
?>
          </a></li>
<?php
} ?>
        </ul></nav>
      
        <p>I've been building websites for over 20 years.  I've built hundreds: from Wordpress blogs to ecommerce sites to social club calendars, from straightforward just-the-facts info sites to music, videos, slideshows, and animation, I can build a website to meet your needs.</p>
      </div><!-- column -->
    </div><!-- row -->
  </section><!-- websites -->
  
  <section id="audiobooks">
    <div class="row">
      <div class="columns small-12">
        <h2><a href="audiobooks.php">Audiobooks</a></h2>
      
        <nav><ul class="small-block-grid-3">
<?php foreach($audiobooks as $key => $value) {
  indent(3);
  echo('<li><a href="audiobooks.php#' . $key . '"><img src="' . $value['image'] . '" alt="' . $value['title'] . '" /></a></li>' . PHP_EOL . PHP_EOL);
} ?>
        </ul></nav>
    
        <p>I've recorded several audiobooks.  You can find them for sale at <a href="http://www.amazon.com/s/?_encoding=UTF8&amp;camp=1789&amp;creative=390957&amp;field-author=Thaddeus%20R.%20R.%20Boyd&amp;linkCode=ur2&amp;search-alias=books&amp;tag=corporatesell-20&amp;linkId=UDYCPMDZVQK4RBIX">Amazon</a>, <a href="http://www.audible.com/search/ref=pd_narr_1?searchNarrator=Thaddeus+R.+R.+Boyd">Audible</a>, and <a href="https://itunes.apple.com/us/artist/thaddeus-r.-r.-boyd/id597740901">iTunes</a>.</p>
      </div><!-- column -->
    </div><!-- row -->
  </section><!-- audiobooks -->
  
    <section id="ebooks">
    <div class="row">
      <div class="columns small-12">
        <h2><a href="ebooks.php">E-Books</a></h2>
        
        <nav><ul class="small-block-grid-3">
<?php foreach($ebooks as $key => $value) {
  indent(3);
  echo('<li><a href="ebooks.php#' . $key . '"><img src="' . $value['cover'] . '" alt="' . $value['title'] . '" /></a></li>' . PHP_EOL . PHP_EOL);
} ?>
        </ul></nav>
        
        <p>I've just released my first e-book, a fantasy short story called <cite>Old Tom and the Old Tome</cite>.</p>
      </div><!-- column -->
    </div><!-- row -->
  </section><!-- ebooks -->

</div><!-- tabs -->

<?php require_once('includes/footer.php'); ?>