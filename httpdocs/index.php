<?php
/* index.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Index page directing to websites and audiobooks
 */
 
$pageShortName = 'index';
$pageTitle = "Thad Boyd's project page";
$pageDesc = "Projects by Thad Boyd, web developer, computer scientist, IT specialist, and audiobook producer";

function hero() {
?>
  <div class="row">
    <div class="columns small-12">
      <p>Hi, I'm Thad.</p>

      <p>I make things.  Here are some of them.</p>
    </div><!-- column -->
  </div><!-- row -->
  
  <nav class="row">
    <div class="columns medium-6 tab-websites">
      <a href="#websites">
	<span class="fa fa-globe"></span><br/>
	Websites
      </a>
    </div><!-- column -->
    
    <div class="columns medium-6 tab-audiobooks">
      <a href="#audiobooks">
	<span class="fa fa-book"></span><br/>
	Audiobooks
      </a>
    </div><!-- column -->
  </nav><!-- row -->
<?php
} // hero

require('includes/header.php');
?>

  <section id="websites" class="tab-websites">
    <div class="row">
      <h2>Websites</h2>
      
      <nav><ul>
  <?php foreach($websites as $key => $value) {
    indent(3);
    echo('<li><a href="websites.php#' . $key . '"><img src="' . $value['logo'] . '" alt="' . $value['title'] . '" /></a></li>' . PHP_EOL . PHP_EOL);
  } ?>
      </ul></nav>
      
      <p>I've been building websites for over 20 years.  I've built hundreds: from Wordpress blogs to ecommerce sites to social club calendars, from straightforward just-the-facts info sites to music, videos, slideshows, and animation, I can build a website to meet your needs.</p>
    </div><!-- row -->
  </section><!-- websites -->
  
  <section id="audiobooks" class="tab-audiobooks">
    <div class="row">
      <h2>Audiobooks</h2>
    
      <nav><ul>
  <?php foreach($books as $key => $value) {
    indent(3);
    echo('<li><a href="audiobooks.php#' . $key . '"><img src="' . $value['image'] . '" alt="' . $value['title'] . '" /></a></li>' . PHP_EOL . PHP_EOL);
  } ?>
      </ul></nav>
    
      <p>I've recorded several audiobooks.  You can find them for sale at <a href="http://www.amazon.com/s/?_encoding=UTF8&amp;camp=1789&amp;creative=390957&amp;field-author=Thaddeus%20R.%20R.%20Boyd&amp;linkCode=ur2&amp;search-alias=books&amp;tag=corporatesell-20&amp;linkId=UDYCPMDZVQK4RBIX">Amazon</a>, <a href="http://www.audible.com/search/ref=pd_narr_1?searchNarrator=Thaddeus+R.+R.+Boyd">Audible</a>, and <a href="https://itunes.apple.com/us/artist/thaddeus-r.-r.-boyd/id597740901">iTunes</a>.</p>
    </div><!-- row -->
  </section><!-- audiobooks -->
</div><!-- tabs -->

<script>
$(function() {
  $("#tabs").tabs({
    // collapsible: true,
    // active: false,
    hide: {
      effect: "blind",
      duration: 200
    },
    show: {
      effect: "blind",
      duration: 200
    }
  });
});
</script>

<?php require('includes/footer.php'); ?>