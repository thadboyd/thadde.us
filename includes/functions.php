<?php
/* functions.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Shared functions for all pages
 */

function indent($level) {
  for($i = 0; $i<$level; $i++) {
    echo('  ');
  }
} // indent

function populateUL($navArr, $indentLevel = 0) {
  indent($indentLevel);
  echo('<ul>' . PHP_EOL);
  foreach($navArr as $key => $value) {
    indent($indentLevel+1);
    echo('<li');
    if(isset($value['class'])) {
      echo(' class="' . $value['class'] . '"');
    }
    echo('><a ');
    if($key === $GLOBALS['pageShortName']) {
      echo('class="current" ');
    }
    echo('href="' . $value['link'] . '">' . $value['title'] . '</a>');
    if(isset($value['subnav'])) {
      echo(PHP_EOL);
      populateUL($value['subnav'], $indentLevel+2);
      indent($indentLevel+1);
    }
    echo('</li>' . PHP_EOL);
  }
  indent($indentLevel);
  echo('</ul>' . PHP_EOL);
} // populateUL

function writeCopyright($name, $copyright, $indentLevel = 0) {
  $openBR = 1;
  indent($indentLevel);
  echo('<p>');
  if($name == '') {
    $openBR = 0;
  } else {
    echo($name . ' ');
  }
  if(is_array($copyright)) {
    foreach($copyright as $key => $value) {
      if($openBR == 0) {
	$openBR = 1;
      } else {
	echo('<br/>');
      }
      indent($indentLevel);
      echo($key . ' &copy; ' . $value);
    }
  } else {
    echo('&copy; ' . $copyright);
  }
  echo('</p>' . PHP_EOL . PHP_EOL);
} // writeCopyright

?>