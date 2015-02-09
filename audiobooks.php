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

<div id="tabs">
  <nav><ul>
<?php foreach($books as $key => $value) {
  indent(2);
  echo('<li class="tab-' . $key . '">' . PHP_EOL);

  indent(3);
  echo('<a href="#' . $key . '"><img src="' . $value['image'] . '" alt="' . $value['title'] . '" /></a>' . PHP_EOL);

  indent(3);
  echo('<iframe src="' . $value['video'] . '"></iframe>' . PHP_EOL);

  indent(2);
  echo('</li>');
} ?>
  </ul></nav>
  
<?php foreach($books as $key => $value) {
  indent(1);
  echo('<section id="' . $key . '" class="tab-' . $key . '">' . PHP_EOL);
  
  indent(2);
  echo('<h2>' . $value['title'] . '<br/>' . PHP_EOL);
  indent(3);
  echo('<span class="author">Written by ' . $value['author'] . '</span></h2>' . PHP_EOL . PHP_EOL);
  
  indent(2);
  echo('<blockquote class="blurb">' . $value['blurb'] . '</blockquote>' . PHP_EOL . PHP_EOL);
  
  indent(2);
  echo('<h3>Buy <cite>' . $value['title'] . '</cite>:</h3>' . PHP_EOL);
  indent(2);
  echo('<ul>' . PHP_EOL);
  foreach($value['links'] as $k => $v) {
    indent(3);
    echo('<li><a href="' . $v . '">' . $k . '</a></li>' . PHP_EOL);
  }
  indent(2);
  echo('</ul>' . PHP_EOL);
  
  indent(2);
  echo('<footer>Copyright &copy; ' . $value['copyright'] . '</footer>' . PHP_EOL);
  
  indent(1);
  echo('</section><!-- ' . $key . ' -->' . PHP_EOL . PHP_EOL);
} ?>
</div><!-- tabs -->	

<script>
$(function() {
  $("#tabs").tabs({
    collapsible: true,
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