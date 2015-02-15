<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
$titan = TitanFramework::getInstance('lodse');
global $author;
$author = $titan->getOption ('authorinfo');

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
            <div class="featured-thumbnail">
                <?php if ( ! post_password_required() && ! is_attachment() ) :
				the_post_thumbnail();
			endif; ?>
            </div>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php FoundationPress_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_excerpt(__('Continue reading...', 'FoundationPress')); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</article>
