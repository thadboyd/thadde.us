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
?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php
$publickey = "6Lf55r8SAAAAAIkXVaKTejpno0uYImSYzrmOdHir";
$privatekey = "";

# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$recaptcha_error = null;

if($_POST) {
  // Get name or set $name_error
  if($_POST['name']) {
    $name_field = ($_POST['name']);
  } else {
    $name_error = TRUE;
  }
  
  // Get valid email or set $email_error
  if($_POST['email']) {
    $email_field = ($_POST['email']);
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_field)) {
      $email_error = TRUE;
    }
  } else {
    $email_error = TRUE;
  }
  
  // Get message body or set $message_error
  if($_POST['message']) {
    $message = stripslashes($_POST['message']);
  } else {
    $message_error = TRUE;
  }
  
  # was there a reCAPTCHA response?
  if ($_POST["recaptcha_response_field"]) {
    $resp = recaptcha_check_answer ($privatekey,
				    $_SERVER["REMOTE_ADDR"],
				    $_POST["recaptcha_challenge_field"],
				    $_POST["recaptcha_response_field"]);
    if (!$resp->is_valid) {
      # set the error code so that we can display it
      $recaptcha_error = $resp->error;
    }
  } else {
      $recaptcha_error = TRUE;
  }
}

if(!$_POST || $name_error || $email_error || $message_error || $recaptcha_error) {
?>

<form action="?" method="POST">
  <label for="name">Name:</label> <input type="text" name="name" required />
  <label for="email">E-Mail:</label> <input type="email" name="email" required />
  <label for="message">Message:</label>
  <textarea name="message" required></textarea>
  <div class="g-recaptcha" data-sitekey="<?php echo($publickey); ?>"></div>
  <input type="submit" value="Submit">
</form>

<?php
} else { // Post succeeded without errors

  $captcha;
  if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
  }
  if(!$captcha){
    echo '<h2>Please check the the captcha form.</h2>';
  }

  $resp=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=myprivatekey&amp;response=".$captcha."&amp;remoteip=".$_SERVER['REMOTE_ADDR']);

  if($resp.success==false){
    echo '<h2>You are spammer</h2>';
  }


  $to = '';
  $subject = 'thadde.us contact form';

  $name_field = ($_POST['name']);
  $email_field = ($_POST['email']);
  $message = stripslashes($_POST['message']);

  $body = "From: $name_field\n"
	. "E-Mail: $email_field\n"
	. "\n$message";
  mail($to, $subject, $body, "From: $name_field <$email_field>");
  echo '<p>Thank you, your message has been sent.</p>';
}

require('includes/footer.php'); ?>