<?php
/* websites.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Listing of websites using jQuery UI accordion structure
 */
 
$pageShortName = 'websites';
$pageTitle = 'Websites by Thad Boyd';
$pageDesc = "Thad Boyd has been designing and building websites since 1994. Clients include Intel, Go Daddy, and Snowball Media Group.";
require('includes/header.php');
?>

  <section>
    <div class="row">
      <p>I built my first website in 1994, and I haven't stopped.</p>
          
      <p>Sometimes I build sites for fun.  Sometimes I build them as a freelancer.  Sometimes I build them for companies like Intel or Go Daddy.</p>

      <p>I built the site you're looking at right now, in PHP, HTML5, CSS3, and JavaScript, with the ZURB Foundation and jQuery libraries.</p>

      <p>Below you'll a few more of the sites I've built over the years.  Like what you see?  <a href="contact.php">Contact me</a> for a quote.</p>
    </div>
  </section>

<?php foreach($websites as $key => $value) { ?>
  <section id="<?php echo($key); ?>">
    <div class="row">
<?php
  $hasThumbs = isset($value['thumb']);
  if($hasThumbs) { ?>
      <div class="columns small-12 large-6">
        <h2 class="hide-for-large-up">
          <a href="<?php echo($value['link']); ?>"><?php echo($value['title']); ?></a>
        </h2>
        
<?php
  indent(4);
  echo('<div class="siteThumbs">' . PHP_EOL);
  foreach($value['thumb'] as $k => $v) {
    indent(5);
    echo('<a href="');
    if(isset($v['link'])) {
      echo($v['link']);
    } else {
      echo($value['link']);
    }
    echo('"><img src="' . $v['image'] . '" alt="');
    if(isset($v['alt'])) {
      echo($v['alt']);
    } else {
      echo($k);
    }
    echo('" /></a>' . PHP_EOL);
  }
  indent(4);
  echo('</div><!-- siteThumbs -->'  . PHP_EOL);
?>
      </div><!-- column -->
  
      <div class="columns small-12 large-6 siteDesc">
        <h2 class="show-for-large-up">
          <a href="<?php echo($value['link']); ?>"><?php echo($value['title']); ?></a>
        </h2>
<?php
  } else { // if no thumbs
?>
      <div class="columns small-12 siteDesc">
        <h2>
          <a href="<?php echo($value['link']); ?>"><?php echo($value['title']); ?></a>
        </h2>
<?php
  }
  echo($value['desc']);
?>        
        <footer>
          <?php writeCopyright($value['copyright']) ?>
        </footer>
      </div><!-- siteDesc -->
    </div><!-- row -->
  </section><!-- <?php echo($key); ?> -->
<?php
} // foreach
?>

<?php require('includes/footer.php'); ?>