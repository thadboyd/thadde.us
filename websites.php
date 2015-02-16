<?php
/* websites.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Listing of websites using jQuery UI accordion structure
 */
 
$pageShortName = 'websites';
$pageTitle = 'Websites by Thad Boyd';
$pageDesc = "Thad Boyd has been designing and building websites since 1994. Clients include GoDaddy and Snowball Media Group.";
require('includes/header.php');
?>

<p>I built my first website in 1994, and I haven't stopped.</p>
    
<p>Sometimes I build sites for fun.  Sometimes I build them as a freelancer.  Sometimes I build them for companies like GoDaddy or Titan Media Group.</p>

<p>I built the site you're looking at right now, in PHP, HTML5, CSS3, and JavaScript, with the jQuery and jQueryUI libraries.</p>

<p>Below you'll a few more of the sites I've built over the years.  Like what you see?  <a href="contact.php">Contact me</a> for a quote.</p>

<div id="tabs">
  <nav><ul>
<?php foreach($websites as $key => $value) {
  indent(2);
  echo('<li class="tab-' . $key . '">' . PHP_EOL);

  indent(3);
  echo('<a href="#' . $key . '"><img src="' . $value['logo'] . '" alt="' . $value['title'] . '" /></a>' . PHP_EOL);

  indent(2);
  echo('</li>');
} ?>
  </ul></nav>

<?php foreach($websites as $key => $value) {
  indent(1);
  echo('<section id="' . $key . '" class="tab-' . $key . '">' . PHP_EOL);
  
  indent(2);
  echo('<h2>' . $value['title'] . '</h2>' . PHP_EOL);
  
  indent(2);
  echo($value['desc'] . PHP_EOL . PHP_EOL);
  
  indent(2);
  echo('<p>View ' . $value['title'] . ' live at <a href="' . $value['link'] . '">' . $value['domain'] . '</a>.</p>' . PHP_EOL . PHP_EOL);
  
  indent(2);
  echo('<footer>');
  writeCopyright($value['copyright'], 3);
  echo('</footer>' . PHP_EOL);
  
  indent(1);
  echo('</section><!-- ' . $key . ' -->' . PHP_EOL . PHP_EOL);
} ?>
</div><!-- tabs -->

<script>
$(function() {
  $("#tabs").tabs({
    collapsible: true,
    heightStyle: "auto",
    hide: {
      effect: "blind",
      duration: 200
    },
    show: {
      effect: "blind",
      duration: 200
    },
    load: location.hash
  });  
});
</script>

<?php require('includes/footer.php'); ?>