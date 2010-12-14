<?php get_header(); ?>
<!-- Blog Post -->
<div id="container">
	<div id="content" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
			<!-- Post Image <img class="thumb" alt="" src="<?php bloginfo('template_url'); ?>/images/610x150.gif" />--> 
			<!-- Post Content -->
			<?php the_excerpt();?>
			<!-- Read More Button -->
			<div class="clearfix">
				<a href="<?php the_permalink(); ?>" class="button fl right">阅读全文</a>
				<div class="fr"><?php the_tags() ?>&nbsp;|&nbsp;<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>&nbsp;|&nbsp;<?php edit_post_link('编辑', '', ''); ?></div>
			</div>
		</div>
		<?php endwhile; ?>
		
		<!-- Blog Navigation -->
		<p class="clearfix">
			<?php previous_posts_link('&lt;&lt; 查看新文章', 0); ?>
			<span class="float right">
			<?php next_posts_link(' 查看旧文章 &gt;&gt;', 0); ?>
			</span></p>
		<?php else : ?>
		<h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
		<p>没有找到任何文章！</p>
		<?php endif; ?>
	</div>
</div>
<?php get_sidebar(); ?>
</div>
<!--通用底部-->
<?php get_footer(); ?>
