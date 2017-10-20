<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</main><!-- #main -->

<footer id="footer" class="footer-wrapper">	

	<?php do_action('flatsome_footer'); ?>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(".faq-q").click( function () {
        var container = $(this).parents(".faq-c");
        var answer = container.find(".faq-a");
        var trigger = container.find(".faq-t");

        answer.slideToggle(200);

        if (trigger.hasClass("faq-o")) {
            trigger.removeClass("faq-o");
        }
        else {
            trigger.addClass("faq-o");
        }
    });
</script>
</body>
</html>