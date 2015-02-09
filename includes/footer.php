<?php
/* footer.php
 * (c) 2015 Thad Boyd
 * for thadde.us
 *
 * Common footer for all pages
 */
?>

</div><!-- mainContent -->

<footer>
<p>Original Content Copyright &copy; 2008-2015 Thaddeus Boyd</p>

<p>Additional copyright and trademark information</p>

<p><a id="aaf-link" href="#amazon-associates-notification">Amazon Associates notification</a></p>

<div id="copyrights-trademarks">
</div><!-- copyrights-trademarks -->

<div id="amazon-associates-notification" title="Amazon Associates notification">
<p>Thaddeus Boyd is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising and linking to amazon.com.</p>
</div><!-- amazon-associates-notification -->

<script>
$(function() {
  $("#amazon-associates-notification").dialog({
    modal: true,
    autoOpen: false
  });
  
  $("#aaf-link").on("click", function() {
    $("#amazon-associates-notification").dialog("open");
  });
});
</script>

</footer>

</body>
</html>