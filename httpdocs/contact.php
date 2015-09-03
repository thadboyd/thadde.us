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

if($_SERVER["REQUEST_METHOD"] === "POST") {
  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $_POST['g-recaptcha-response']);
  
  $response = json_decode($response, true);
  
  if($response["success"] === true) {
    echo "Logged In Successfully";
    $sent = true;
  } else {
    echo "You are a robot";
    $recaptcha_error = true;
  }
}
echo('$recatpcha_error = ' . $recatpcha_error);
if(!$_POST || $recatpcha_error == true) {
?>

<form action="contact.php" method="POST">
  <label for="name">Name:</label> <input type="text" name="name" required />
  <label for="email">E-Mail:</label> <input type="email" name="email" required />
  <label for="message">Message:</label>
  <textarea name="message" required></textarea>
  <div class="g-recaptcha" data-sitekey="<?php echo($siteKey); ?>"></div>
  <input type="submit" value="Submit">
</form>

<?php } ?>

<script src='https://www.google.com/recaptcha/api.js'></script>

<?php require('includes/footer.php'); ?>