<?php
/* footer.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Common footer for all pages
 */
?>

</section><!-- main-content -->

<footer id="site-footer">
  <div class="row">
    <p>Original content and site code &copy; 2008-2015 Thaddeus Boyd</p>

    <p><a class="modal-link" href="#" data-reveal-id="copyrights-trademarks">Additional copyright and trademark information</a></p>

    <p><a class="modal-link" href="#" data-reveal-id="amazon-associates-notification">Amazon Associates notification</a></p>

  </div><!-- row -->

  <div class="reveal-modal" id="copyrights-trademarks" data-reveal aria-labelledby="Copyrights and Trademarks" aria-hidden="true" role="dialog">
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    <h2 class="modalTitle">Copyrights and Trademarks</h2>
<?php
foreach($websites as $key => $value) {
  indent(1);
  writeCopyright($value['copyright'], 1, $value['title']);
} // websites

foreach($books as $key => $value) {
  indent(1);
  writeCopyright($value['copyright'], 1, $value['title']);
} // books

foreach($trademarks as $value) {
  indent(2);
  echo('<p>' . $value . '</p>' . PHP_EOL . PHP_EOL);
} // trademarks

foreach($libraries as $value) {
  indent(2);
  echo('<p>' . $value . '</p>' . PHP_EOL . PHP_EOL);
} // libraries

?>
  </div><!-- #copyrights-trademarks -->

  <div class="reveal-modal" id="amazon-associates-notification" data-reveal aria-labelledby="Amazon Associates notification" aria-hidden="true" role="dialog">
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    <h2 class="modalTitle">Amazon Associates notification</h2>
    <p>Thaddeus Boyd is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising and linking to <a href="http://www.amazon.com/?_encoding=UTF8&amp;camp=1789&amp;creative=390957&amp;linkCode=ur2&amp;tag=corporatesell-20&amp;linkId=OZ6E4E3ZPQ56ZYJD">amazon.com</a>.</p>
  </div><!-- #amazon-associates-notification -->

</footer>

<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/foundation.min.js"></script>
<script src="js/app.js"></script>

<?php require_once('includes/google-analytics.php'); ?>

</body>
</html>