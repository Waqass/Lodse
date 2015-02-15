</section>
<footer>
	<?php do_action('foundationPress_before_footer'); ?>
        <?php get_template_part( 'parts/contents-footer', 'none' ); ?>
	<?php do_action('foundationPress_after_footer'); ?>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
