<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage M18PUD
 */
get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- author image -->
					<div id="author-image"> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) )?>">
						<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '48' ); }?>
						</a> </div>
					<!-- Post Title -->
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark">
						<?php the_title(); ?>
						</a></h2>
					<!-- Post Data -->
					<p class="sub"><span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
						<?php the_author(); ?>
						</a></span>
						<?php the_category(', ', ''); ?>
						<?php the_time('Y-n-j') ?>
					</p>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->
<?php endif; ?>

					<div class="entry-utility">
						<div class="clearfix">
							<div class="fr"><?php the_category(', ', ''); ?>&nbsp;|&nbsp;<?php the_tags( '', ', ' ); ?>&nbsp;|&nbsp;<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>&nbsp;|&nbsp;<?php edit_post_link('编辑', '', ''); ?></div>
						</div>
					</div><!-- .entry-utility -->
				</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
				</div><!-- #nav-below -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
