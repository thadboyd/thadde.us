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
    
    <p>I built my first website in 1994, and I haven't stopped.</p>
    
    <p>Sometimes I build sites for fun.  Sometimes I build them as a freelancer.  Sometimes I build them for companies like GoDaddy or Titan Media Group.</p>
    
    <p>I built the site you're looking at right now, in PHP, HTML5, CSS3, and JavaScript, with the jQuery and jQueryUI libraries.</p>
    
    <p>And I've built hundreds of others.  From Wordpress blogs to ecommerce sites to social club calendars, from straightforward just-the-facts info sites to music, videos, slideshows, and animation, I can build a website to meet your needs.</p>
  </section><!-- websites -->
  
  <section id="audiobooks" class="tab-audiobooks">
    <h2>Audiobooks</h2>
    
    <p>Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
  </section><!-- audiobooks -->
</div><!-- tabs -->

<script>
$(function() {
  $("#tabs").tabs();
});
</script>

<?php require('includes/footer.php'); ?>