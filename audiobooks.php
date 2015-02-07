<?php
/* audiobooks.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Listing of audiobooks using jQuery UI accordion structure
 */

$shortName = 'audiobooks';
$title = 'Audiobooks by Thaddeus R R Boyd';
$desc = "Audiobooks narrated by Thaddeus R R Boyd. Available on Amazon, Audible, and iTunes.";
require('includes/header.php');
?>

<div id="tabs">
  <nav><ul>
    <li class="tab-dinner">
      <a href="#dinner"><img src="img/cover-dinner.jpg" alt="Dinner on a Flying Saucer" /></a>
      <iframe src="http://www.youtube.com/embed/IZ_tSXRJb_g"></iframe>
    </li>
    
    <li class="tab-dinosaurs">
      <a href="#dinosaurs"><img src="img/cover-dinosaurs.jpg" alt="Dinosaurs at the Home Depot" /></a>
      <iframe src="http://www.youtube.com/embed/Ry8Sbq8LJn4"></iframe>
    </li>
    
    <li class="tab-alien">
      <a href="#alien"><img src="img/cover-alien.jpg" alt="Your Average Ordinary Alien" /></a>
      <iframe src="http://www.youtube.com/embed/y_C2ZIux6lQ"></iframe>
    </li>
  </ul></nav>

  <section id="dinner" class="tab-dinner">
    <h2>Dinner on a Flying Saucer<br/>
      by Dean Wesley Smith</h2>
    
    <blockquote class="bookdesc">Sometimes, when a fella gets to help out with fightin' a war between two alien races, it's just not such a good idea to tell your wife. Sometimes the truth just isn't good enough.</blockquote>

    <p>Available for purchase:
    <ul>
      <li><a href="http://www.audible.com/pd/ref=sr_1_3?asin=B00B9HH01A">Audible</a></li>
      <li><a href="http://www.amazon.com/gp/product/B00BB1RUYQ/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=390957&amp;creativeASIN=B00BB1RUYQ&amp;linkCode=as2&amp;tag=corporatesell-20&amp;linkId=2CSUQLQFD3Y3S445">Amazon</a></li>
      <li><a href="https://itunes.apple.com/us/audiobook/dinner-on-flying-saucer-unabridged/id599832717">iTunes</a></li>
    </ul></p>

    <footer>Copyright &copy; 2012, 2013 Dean Wesley Smith</footer>
  </section><!-- dinner -->
  
  <section id="dinosaurs" class="tab-dinosaurs">
    <h2>Dinosaurs in the Home Depot<br/>
      by Bret Wellman</h2>
      
    <blockquote class="bookdesc">A man is locked inside the Home Depot as it is over run by dinosaurs. Now he must escape or become dinner.</blockquote>

    <p>Available for purchase:
    <ul>
      <li><a href="http://www.audible.com/pd/ref=sr_1_1?asin=B00B5W6R3G">Audible</a></li>
      <li><a href="http://www.amazon.com/gp/product/B00B77HDR8/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=390957&amp;creativeASIN=B00B77HDR8&amp;linkCode=as2&amp;tag=corporatesell-20&amp;linkId=I63RZ6FP77JIBNAS">Amazon</a></li>
      <li><a href="https://itunes.apple.com/us/audiobook/dinosaurs-in-home-depot-unabridged/id597740897">iTunes</a></li>
    </ul></p>

    <footer>Copyright &copy; 2012, 2013 Bret Wellman</footer>
  </section><!-- dinosaurs -->
  
  <section id="alien" class="tab-alien">
    <h2>Your Average Ordinary Alien<br/>
      by Adam Graham</h2>
      
    <blockquote class="bookdesc">Kirk Picard Skywalker is an unemployed sci-fi fanatic who dreams of being abducted by aliens from outer space. One day his dreams come through and he's horrified to learn that the aliens are all too ordinary.</blockquote>

    <p>Available for purchase:
    <ul>
      <li><a href="http://www.audible.com/pd/ref=sr_1_1?asin=B00B8VULPE">Audible</a></li>
      <li><a href="http://www.amazon.com/gp/product/B00B9DC08W/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=390957&amp;creativeASIN=B00B9DC08W&amp;linkCode=as2&amp;tag=corporatesell-20&amp;linkId=VSANRRELI2NGTTQE">Amazon</a></li>
      <li><a href="https://itunes.apple.com/us/audiobook/your-average-ordinary-alien/id599192781">iTunes</a></li>
    </ul></p>

    <footer>Copyright &copy; 2007, 2009, 2013 Adam Graham</footer>
  </section><!-- alien -->
</div>

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