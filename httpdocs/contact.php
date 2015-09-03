<?php
/* contact.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Contact page
 */
 
$pageShortName = 'contact';
$pageTitle = 'Contact Thad Boyd';
require('includes/header.php');
require_once('includes/maildata.php');
?>

  <section>
    <div class="row">
      <div class="columns small-12 medium-8 push-2">
<?php
$recaptcha_error = false;

if($_SERVER["REQUEST_METHOD"] === "POST") {
  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $_POST['g-recaptcha-response']);
  
  $response = json_decode($response, true);
  
  if($response["success"] === true) {
    $sent = true;
  } else {
    $recaptcha_error = true;
  }
}

$name_field = ($_POST['name']);
$email_field = ($_POST['email']);
$message = stripslashes($_POST['message']);

if(!$_POST || $recaptcha_error) {
?>

        <form action="contact.php" method="POST">
          <div class="row">
            <div class="columns small-12 medium-6">
              <label for="name">Name:</label> <input type="text" name="name" required />
            </div>
            
            <div class="columns small-12 medium-6">
              <label for="email">E-Mail:</label> <input type="email" name="email" required />
            </div>
          </div><!-- row -->
          
          <label for="message">Message:</label>
          <textarea name="message" required></textarea>
          <div class="g-recaptcha" data-sitekey="<?php echo($siteKey); ?>"></div>
          <?php if($recaptcha_error) { ?>
          recaptcha error
          <?php } ?>
          <input type="submit" value="Submit">
        </form>

<?php } else {
$body = "From: $name_field\n"
        . "E-Mail: $email_field\n"
        . "\n$message";

echo("to = $to<br/>subject = $subject<br/>body = $body<br/>name_field = $name_field<br/>email_field = $email_field");
mail($to, $subject, $body, "From: $name_field <$email_field>");
?>
        <p>Thank you.  Your message has been sent.</p>

<?php } ?>
      </div><!-- column -->
    </div><!-- row -->
  </section>
  
  <script src='https://www.google.com/recaptcha/api.js'></script>

<?php require('includes/footer.php'); ?>