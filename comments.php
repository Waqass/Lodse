<?php function FoundationPress_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>">
			<header class="comment-author">
				<?php echo get_avatar($comment,$size='48'); ?>
				<div class="author-meta">
					<?php printf(__('<cite class="fn">%s</cite>', 'FoundationPress'), get_comment_author_link()) ?>
					<time datetime="<?php echo comment_date('c') ?>"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s', 'FoundationPress'), get_comment_date(),  get_comment_time()) ?></a></time>
					<?php edit_comment_link(__('(Edit)', 'FoundationPress'), '', '') ?>
				</div>
			</header>

			<?php if ($comment->comment_approved == '0') : ?>
				<div class="notice">
					<p class="bottom"><?php _e('Your comment is awaiting moderation.', 'FoundationPress') ?></p>
				</div>
			<?php endif; ?>

			<section class="comment">
				<?php comment_text() ?>
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</section>

		</article>
<?php } ?>

<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Please do not load this page directly. Thanks!', 'FoundationPress'));

	if ( post_password_required() ) { ?>
	<section id="comments">
		<div class="notice">
			<p class="bottom"><?php _e('This post is password protected. Enter the password to view comments.', 'FoundationPress'); ?></p>
		</div>
	</section>
	<?php
		return;
	}
?>
<?php // You can start editing here. Customize the respond form below ?>
<?php if ( have_comments() ) : ?>
	<section id="comments">
		<h3><?php comments_number(__('No Responses to', 'FoundationPress'), __('One Response to', 'FoundationPress'), __('% Responses to', 'FoundationPress') ); ?> &#8220;<?php the_title(); ?>&#8221;</h3>
		<ol class="commentlist">
		<?php wp_list_comments('type=comment&callback=FoundationPress_comments'); ?>

		</ol>
		<footer>
			<nav id="comments-nav">
				<div class="comments-previous"><?php previous_comments_link( __( '&larr; Older comments', 'FoundationPress' ) ); ?></div>
				<div class="comments-next"><?php next_comments_link( __( 'Newer comments &rarr;', 'FoundationPress' ) ); ?></div>
			</nav>
		</footer>
	</section>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
         <?php comment_form(); ?> 
	<?php endif; // If registration required and not logged in ?>

