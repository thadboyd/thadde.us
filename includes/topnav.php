<?php
  $pages = array(
    'Home' => 'index.php',
    'Websites' => array(
      'websites.php',
      'MD Motivational Drink' => 'mdmotivationaldrink',
      'MySwimIt' => 'myswimit'
    ),
    'Audiobooks' => array(
      'audiobooks.php',
      'Dinner on a Flying Saucer' => 'dinner',
      'Dinosaurs in the Home Depot' => 'dinosaurs',
      'Your Average Ordinary Alien' => 'alien'
    ),
    'Contact' => 'contact.php',
    '<span class="fa fa-linkedin"></span>' => 'https://www.linkedin.com/in/thadboyd/'
  );
?>

  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="websites.html">Websites</a>
	<ul>
	  <li><a href="websites.html#mdmotivationaldrink">MD Motivational Drink</a></li>
	  <li><a href="websites.html#myswimit">MySwimIt</a></li>
	</ul>
      </li>
      <li><a href="audiobooks.html">Audiobooks</a>
	<ul>
	  <li><a href="audiobooks.html#dinner">Dinner on a Flying Saucer</a></li>
	  <li><a href="audiobooks.html#dinosaurs">Dinosaurs in the Home Depot</a></li>
	  <li><a href="audiobooks.html#alien">Your Average Ordinary Alien</a></li>
	</ul>
      </li>
      <li><a href="contact.html">Contact</a></li>
      <li class="social"><a href="https://www.linkedin.com/in/thadboyd/" target="_blank"><span class="fa fa-linkedin"></span></a></li>
    </ul>
  </nav>