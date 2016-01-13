<?php
/* ebooks.php
 * (c) 2016 Thad Boyd
 * for thadde.us
 *
 * Listing of ebooks
 */

$pageShortName = 'ebooks';
$pageTitle = 'Ebooks by Thaddeus R R Boyd';
$pageDesc = "Ebooks by Thaddeus R R Boyd.";
require_once('includes/header.php');

?>


<?php foreach($ebooks as $key => $value) { ?>
  <section id="<?php echo($key); ?>">
    <div class="row">
      <div class="columns small-12 large-6">
        <h2 class="hide-for-large-up">
          <?php echo($value['title']); ?>
        </h2>
        
        <img src="<?php echo($value['cover']); ?>" alt="Cover" />
      </div><!-- column -->
      
      <div class="columns small-12 large-6">
        <h2 class="show-for-large-up">
          <?php echo($value['title']); ?>
        </h2>
        
        <blockquote class="blurb">
          <?php echo($value['blurb'] . PHP_EOL); ?>
        </blockquote>
        
        <h3>Available Formats:</h3>
        <ul>
<?php
  foreach($value['formats'] as $k => $v) {
?>
          <li><a href="<?php echo($v); ?>"><?php echo($k); ?></a></li>
<?php
  } // foreach format
?>
        </ul>
        
<?php
  if(isset($value['paypal'])) {
?>
        <p>This book is published under a Creative Commons license and is free to download and redistribute.  If you enjoy it, please feel free to make a donation in an amount of your choosing.</p>
        <form class="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="encrypted" value="<?php echo($value['paypal']); ?>">
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form><!-- paypal-donate -->
<?php
  } // if Paypal
  
  if(isset($value['purchase'])) {
?>

        <h3>Other Sellers</h3>
        
        <ul>
  <?php
    foreach($value['purchase'] as $k => $v) {
  ?>
            <li><a href="<?php echo($v); ?>"><?php echo($k); ?></a></li>
  <?php
    } // foreach purchase
  ?>
        </ul>
        
<?php
  } // if purchase
?>


        <footer>
          <?php writeCopyright($value['copyright'], 0); ?>
        </footer>
      </div><!-- column -->
    </div><!-- row -->
  </section><!-- <?php echo($key); ?> -->
<?php } // foreach book ?>

<?php require_once('includes/footer.php'); ?>