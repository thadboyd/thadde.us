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

?>
  
<?php foreach($books as $key => $value) { ?>
  <section id="<?php echo($key); ?>" class="tab-<?php echo($key); ?>">
    <div class="row">
      <div class="columns small-12 large-6">
	<h2 class="hide-for-large-up">
	  <?php echo($value['title']); ?><br/>
	  <span class="author">Written by <?php echo($value['author']); ?></span>
	</h2>
	
	<iframe class="video" src="<?php echo($value['video']); ?>"></iframe>
      </div><!-- column -->
      
      <div class="columns small-12 large-6">
	<h2 class="show-for-large-up">
	  <?php echo($value['title']); ?><br/>
	  <span class="author">Written by <?php echo($value['author']); ?></span>
	</h2>
	
	<blockquote class="blurb">
	  <?php echo($value['blurb']); ?>
	</blockquote>
	
	<h3>Buy <cite><?php echo($value['title']); ?></cite>:</h3>
	<ul>
      <?php
	foreach($value['links'] as $k => $v) {
      ?>
	  <li><a href="<?php echo($v); ?>"><?php echo($k); ?></a></li>
      <?php
	} // foreach link
      ?>
	</ul>
	
	<footer>
	  <?php writeCopyright($value['copyright'], 3); ?>
	</footer>
      </div><!-- column -->
    </div><!-- row -->
  </section><!-- <?php echo($key); ?> -->
<?php } // foreach book ?>

<?php require('includes/footer.php'); ?>