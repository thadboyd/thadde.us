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
    <li><a href="#websites">Websites</a></li>
    <li><a href="#audiobooks">Audiobooks</a></li>
  </ul></nav>
  
  <section id="websites">
    <h2>Websites</h2>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem.</p>
  </section><!-- websites -->
  
  <section id="audiobooks">
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