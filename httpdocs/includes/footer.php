<?php
/* footer.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Common footer for all pages
 */
?>

</section><!-- main-content -->

<footer class="zurb-footer-bottom">
<p>Original content and site code &copy; 2008-2015 Thaddeus Boyd</p>

<p><a class="modal-link" href="#copyrights-trademarks">Additional copyright and trademark information</a></p>

<p><a class="modal-link" href="#amazon-associates-notification">Amazon Associates notification</a></p>

<div class="modal" id="copyrights-trademarks" title="Copyrights and Trademarks">
<?php
foreach($websites as $key => $value) {
  writeCopyright($value['copyright'], 1, $value['title']);
} // websites

foreach($books as $key => $value) {
  indent(1);
  writeCopyright($value['copyright'], 1, $value['title']);
} // books

foreach($trademarks as $value) {
  indent(1);
  echo('<p>' . $value . '</p>' . PHP_EOL . PHP_EOL);
} // trademarks

foreach($libraries as $value) {
  indent(1);
  echo('<p>' . $value . '</p>' . PHP_EOL . PHP_EOL);
} // libraries

?>
</div><!-- copyrights-trademarks -->

<div class="modal" id="amazon-associates-notification" title="Amazon Associates notification">
<p>Thaddeus Boyd is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising and linking to <a href="http://www.amazon.com/?_encoding=UTF8&amp;camp=1789&amp;creative=390957&amp;linkCode=ur2&amp;tag=corporatesell-20&amp;linkId=OZ6E4E3ZPQ56ZYJD">amazon.com</a>.</p>
</div><!-- amazon-associates-notification -->

<script>
$(function() {
  $(".modal").dialog({
    modal: true,
    autoOpen: false,
    width: 800,
    show: {
      effect: "scale",
      duration: 300
    },
    hide: {
      effect: "scale",
      duration: 300
    }
  });
  
  $(".modal-link").on("click", function() {
    $($(this).attr("href")).dialog("open");
  });
});
</script>

</footer>

</body>
</html>