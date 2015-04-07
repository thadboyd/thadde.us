<?php
/* index.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Conference demo site
 */
 
require('includes/data.php');
require('../../includes/functions.php');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Conference Site Demo - thadde.us</title>
  <link rel="author" href="humans.txt" />
  <link rel="stylesheet" href="css/foundation.min.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/app.css" />
  <script src="js/vendor/modernizr.js"></script>
</head>

<body>

<div class="sticky">
  <nav class="top-bar" data-topbar role="navigation" data-options="back_text: &#61706;">
  <!-- &#61706; is left arrow in Foundation Icons font -->
    <ul class="title-area">
      <li class="name">
	<a href="javascript:void(0)"><img src="img/con-logo.png" alt="New Media Con" /></a>
      </li>
      <li class="dates">March 31st - April 2nd 2015</li>
      <li class="toggle-topbar menu-icon"><a href="javascript:void(0)"><span></span></a></li>
    </ul>  
    
    <section class="top-bar-section">
      <ul class="right">
	<li><a href="javascript:void(0)">Home</a></li>
	<li class="active has-dropdown">
	  <a href="javascript:void(0)">Schedule</a>
	  <ul class="dropdown">
	    <li><a href="index.php#03-31">March 31</a></li>
	    <li><a href="index.php#04-01">April 1</a></li>
	    <li><a href="index.php#04-02">April 2</a></li>
	  </ul>
	</li>
	<li class="has-dropdown">
	  <a href="javascript:void(0)">About</a>
	  <ul class="dropdown">
	    <li><a href="javascript:void(0)">Who</a></li>
	    <li><a href="javascript:void(0)">What</a></li>
	    <li><a href="javascript:void(0)">Why</a></li>
	  </ul>
	</li>
	<li><a href="javascript:void(0)">Sponsors</a></li>
	<li><a class="highlight" href="javascript:void(0)">Register</a></li>
      </ul>
    </section>
  </nav>
</div><!-- sticky -->

<header>
  <h1>Conference Schedule</h1>

  <section class="intro row">
    <h2>3 days of new media leadership</h2>
    
    <p>We must all efficiently operationalize our strategies, invest in world-class technology, and leverage our core competencies in order to holistically administrate exceptional synergy. We'll set a brand trajectory using management's philosophy, advance our market share vis-à-vis our proven methodology with strong commitment to quality, effectively enhancing corporate synergy.</p>
  </section><!-- intro -->
</header>

<section class="row icons">
    <h2>Categories:</h2>
    <div class="icon-bar eight-up">
<?php
  foreach($categories as $key => $value) {
    indent(3);
    echo('<div class="item"><a class="inactive" data-category="' . $key . '"href="javascript:void(0)"><span class="category fa ' . $value . '"></span></a></div>' . PHP_EOL);
  }
?>
    </div><!-- icon-bar -->
</section><!-- icons -->

<?php
foreach($days as $key => $value) {
  echo('<section id="' . $key . '" class="row">' . PHP_EOL);
  indent(1);
  echo('<h2>' . $value['header'] . '</h2>' . PHP_EOL);
  indent(1);
  echo('<ul class="small-block-grid-2 large-block-grid-4">' . PHP_EOL);
  
  foreach($value['schedule'] as $k => $v) {
    indent(2);
    echo('<li class="agenda-item');
    if(isset($v['category'])) {
      echo(' ' . $v['category']);
    }
    echo('">' . PHP_EOL);
    
    indent(3);
    echo('<div>' . PHP_EOL);
    
    echo('<img src="');
    indent(4);
    if(isset($events[$v['event']]['image'])) {
      echo($events[$v['event']]['image'] . '" alt="');
      if(isset($events[$v['event']]['name'])) {
	echo($events[$v['event']]['name']);
      } else {
	echo($v);
      }
    } else {
      echo('img/stripes.png" alt="stripes');
    }
    echo('" />' . PHP_EOL);
    if(isset($events[$v['event']]['icon'])) {
      echo('<div class="event-icon fa ' . $events[$v['event']]['icon'] . '"></div>' . PHP_EOL);
    }
    
    if(isset($v['category'])) {
      indent(4);
      echo('<div class="category fa ' . $categories[$v['category']] . '"></div>' . PHP_EOL);
    }
    indent(4);
    echo('<p class="time">' . $v['time'] . '</p>' . PHP_EOL);
    
    indent(3);
    echo('</div>' . PHP_EOL);
    
    indent(3);
    echo('<div class="desc">' . PHP_EOL);
    
    indent(4);
    echo('<p class="location">' . $v['location'] . '</p>' . PHP_EOL);
    indent(4);
    echo('<h3>' . $v['desc'] . '</h3>' . PHP_EOL);
    indent(4);
    echo('<footer>');
    
    indent(5);
    echo('<a class="viewmore" href="javascript:void(0)" data-reveal-id="stock_images"><span class="fa fa-info-circle"></span>');
    if(isset($events[$v['event']]['name'])) {
      echo(PHP_EOL);
      indent(5);
      echo('<p>with <strong>' . $events[$v['event']]['name'] . '</strong></p>');
    }
    echo('</a>' . PHP_EOL);
    
    indent(4);
    echo('</footer>');
    
    indent(3);
    echo('</div><!-- desc -->' . PHP_EOL);
    
    indent(2);
    echo('</li><!-- agenda-item -->' . PHP_EOL);
  }
  
  indent(1);
  echo('</ul><!-- block-grid -->' . PHP_EOL);
  echo('</section><!-- ' . $key . ' -->' . PHP_EOL);
}
?>

<footer>
  <p>Original content and site code &copy; 2015 Thaddeus Boyd</p>
  
  <div>Additional credits and copyrights:
  <ul id="creditnav">
    <?php
      // credit/copyright modals
      foreach($credits as $key => $value) {
	indent(2);
	echo('<li><a href="javascript:void(0)" data-reveal-id="' . $key . '">' . str_replace('_', ' ', $key) . '</a></li>' . PHP_EOL);
      }
    ?>
  </ul><!-- creditnav -->
  </div>
</footer>

<?php
  // credit/copyright modals
  foreach($credits as $key => $value) {
    echo('<section id="' . $key . '" class="reveal-modal" data-reveal>' . PHP_EOL);
    indent(1);
    echo('<h2>' . str_replace('_', ' ', $key) . '</h2>' . PHP_EOL . PHP_EOL);
    foreach($value as $v) {
      indent(1);
      echo('<p>' . $v . '</p>' . PHP_EOL . PHP_EOL);
    }
    echo('<a class="close-reveal-modal">&#215;</a><!-- &#215; is "x" icon -->' . PHP_EOL);
    echo('</section><!-- ' . $key . '-->' . PHP_EOL . PHP_EOL);
  } // modals
?>

<script src="/js/jquery.min.js"></script>
<script src="js/vendor/fastclick.js"></script>
<script src="js/foundation/foundation.js"></script>
<script src="js/foundation/foundation.topbar.js"></script>
<script src="js/foundation/foundation.reveal.js"></script>

<script>
  $(document).foundation();
  
  $(".item a").click(function() {
    if($(this).hasClass('active')) {
      // Current category filter is already active; user is turning it off.
      // Make all agenda items visible.
      $('.agenda-item').show();
    } else {
      // Current category filter is not currently active; user is turning it on.
      // Disable any other category that is currently active.
      $('.item .active').toggleClass('active').toggleClass('inactive');
      
      // Show selected category; hide all others.
      var category = $(this).attr("data-category");
      $('.agenda-item.' + category).show();
      $('.agenda-item:not(.' + category + ')').hide();
    }
    
    $(this).toggleClass('active').toggleClass('inactive');
  }); // click
</script>

</body>
</html>