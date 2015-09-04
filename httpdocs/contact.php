<?php
/* contact.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Contact page
 */
 
$pageShortName = 'contact';
$pageTitle = 'Contact Thad Boyd';
require_once('includes/header.php');
require_once('includes/maildata.php');
?>

  <section>
    <div class="row">

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
      <div class="columns small-12 medium-8 push-2">
        <form action="contact.php" method="POST" data-abide>
          <div class="row">
            <div class="columns small-12 medium-6">
              <label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" required />
              <small class="error">Please enter your name.</small>
            </div>
            
            <div class="columns small-12 medium-6">
              <label for="email">E-Mail:</label> <input type="email" name="email" placeholder="someone@someplace.com" required />
              <small class="error">Please enter a valid email address.</small>
            </div>
          </div><!-- row -->
          
          <label for="message">Message:</label>
          <textarea name="message" placeholder="Message..." required></textarea>
          <small class="error">Please enter a message.</small>
          <div class="g-recaptcha" data-sitekey="<?php echo($siteKey); ?>"></div>
<?php if($recaptcha_error) { ?>
          <small class="error recaptcha_error">Please check the box.</small>
<?php } ?>
          <input type="submit" value="Submit">
        </form>
      </div><!-- column -->

<?php } else {
$subject = "thadde.us contact form";
$body = "From: $name_field\n"
        . "E-Mail: $email_field\n"
        . "\n$message";

mail($recipient, $subject, $body, "From: $name_field <$email_field>");
?>
        <p>Thank you.  Your message has been sent.</p>

<?php } ?>
    </div><!-- row -->
  </section>
  
  <script src='https://www.google.com/recaptcha/api.js'></script>

<?php require_once('includes/footer.php'); ?>