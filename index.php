<?php
$shortName = 'index';
$title = "Thad Boyd's project page";
$desc = "Projects by Thad Boyd, web developer, computer scientist, IT specialist, and audiobook producer";
require('includes/header.php');
?>

<p>Hi, I'm Thad.</p>

<p>I make things.  Here are some of them.</p>

<div id="tabs">
  <nav><ul>
    <li class="tab-websites"><a href="#websites">
      <span class="fa fa-globe"></span><br/>
      Websites
    </a></li>
    <li class="tab-audiobooks"><a href="#audiobooks">
      <span class="fa fa-book"></span><br/>
      Audiobooks
    </a></li>
  </ul></nav>
  
  <section id="websites" class="tab-websites">
    <h2>Websites</h2>
    
    <p>I've been building websites for over 20 years.  I've built hundreds: from Wordpress blogs to ecommerce sites to social club calendars, from straightforward just-the-facts info sites to music, videos, slideshows, and animation, I can build a website to meet your needs.</p>
  </section><!-- websites -->
  
  <section id="audiobooks" class="tab-audiobooks">
    <h2>Audiobooks</h2>
    
    <p>I've recorded several audiobooks.  You can find them for sale at <a href="www.amazon.com/s?_encoding=UTF8&amp;field-author=Thaddeus%20R.%20R.%20Boyd&amp;search-alias=books">Amazon</a>, <a href="http://www.audible.com/search/ref=pd_narr_1?searchNarrator=Thaddeus+R.+R.+Boyd">Audible</a>, and <a href="https://itunes.apple.com/us/artist/thaddeus-r.-r.-boyd/id597740901">iTunes</a>.</p>
  </section><!-- audiobooks -->
</div><!-- tabs -->

<script>
$(function() {
  $("#tabs").tabs({
    collapsible: true,
    active: false,
    hide: {
      effect: "blind",
      duration: 200
    },
    show: {
      effect: "blind",
      duration: 200
    }
  });
});
</script>

<?php require('includes/footer.php'); ?>