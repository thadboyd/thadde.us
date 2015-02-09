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

<p><a class="modal-link" href="#copyrights-trademarks">Additional copyright and trademark information</a></p>

<p><a class="modal-link" href="#amazon-associates-notification">Amazon Associates notification</a></p>

<div class="modal" id="copyrights-trademarks" title="Copyrights and Trademarks">
<p>Copyright</p>
</div><!-- copyrights-trademarks -->

<div class="modal" id="amazon-associates-notification" title="Amazon Associates notification">
<p>Thaddeus Boyd is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising and linking to amazon.com.</p>
</div><!-- amazon-associates-notification -->

<script>
$(function() {
  $(".modal").dialog({
    modal: true,
    autoOpen: false
  });
  
  $(".modal-link").on("click", function() {
    $($(this).attr("href")).dialog("open");
  });
});
</script>

</footer>

</body>
</html>