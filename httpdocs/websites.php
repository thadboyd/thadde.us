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
require_once('includes/header.php');

function siteHeader($site) {
  if(isset($site['logo'])) {
    $linkText = '<img src="' . $site['logo'] . '" alt="' . $site['title'] . '" />';
  } else {
    $linkText = $site['title'];
  }

  generateLink($site['link'], $linkText) ;
}
?>

  <section>
    <div class="row">
      <div class="columns small-12">
        <p>I built my first website in 1994, and I haven't stopped.</p>
            
        <p>Sometimes I build sites for fun.  Sometimes I build them as a freelancer.  Sometimes I build them for companies like Intel or Go Daddy.</p>

        <p>I built the site you're looking at right now, in PHP, HTML5, CSS3, and JavaScript, with the ZURB Foundation and jQuery libraries.</p>

        <p>Below you'll a few more of the sites I've built over the years.  Like what you see?  <a href="contact.php">Contact me</a> for a quote.</p>
      </div><!-- columns -->
    </div><!-- row -->
  </section>

<?php foreach($websites as $key => $value) { ?>
  <section id="<?php echo($key); ?>">
    <div class="row">
<?php
  $hasThumbs = isset($value['thumb']);
  if($hasThumbs) { ?>
      <div class="columns small-12 large-6">
        <h2 class="hide-for-large-up">
          <?php siteHeader($value); ?>
        </h2>
        
<?php
  indent(4);
  echo('<div class="siteThumbs">' . PHP_EOL);
  foreach($value['thumb'] as $k => $v) {
    $imgTag = '<img src="' . $v['image'] . '" alt="';
    if(isset($v['alt'])) {
      $imgTag .= $v['alt'];
    } else {
      $imgTag .= $k;
    }
    $imgTag .= '"/>';
    
    indent(5);
    
    if(isset($v['link'])) {
      generateLink($v['link'], $imgTag);
    } else if(isset($value['link'])) {
      generateLink($value['link'], $imgTag);
    } else {
      echo($imgTag);
    }
    
    echo(PHP_EOL);
  }
  indent(4);
  echo('</div><!-- siteThumbs -->'  . PHP_EOL);
?>
      </div><!-- column -->
  
      <div class="columns small-12 large-6 siteDesc">
        <h2 class="show-for-large-up">
          <?php siteHeader($value); ?>
        </h2>
<?php
  } else { // if no thumbs
?>
      <div class="columns small-12 siteDesc">
        <h2>
          <?php siteHeader($value); ?>
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

<?php require_once('includes/footer.php'); ?>