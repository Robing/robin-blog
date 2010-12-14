<div id="primary" class="widget-area" role="complementary">
	<ul class="xoxo">
		<li id="search" class="widget-container widget_search">
			<?php get_search_form(); ?>
		</li>
		<li id="sRSS" class="widget-container widget_search"> <a class="allrss" href="<?php bloginfo( 'rss2_url' ); ?>">订阅本站</a> </li>
		
	<?php if ( !function_exists('dynamic_sidebar')
					|| !dynamic_sidebar('First_sidebar') ) : ?>
		<li id="search" class="widget-container widget_search">
			<?php get_search_form(); ?>
		</li>
		<li id="archives" class="widget-container">
			<h3 class="widget-title">
				<?php _e( 'Archives', 'M18PUD' ); ?>
			</h3>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</li>
		<li id="meta" class="widget-container">
			<h3 class="widget-title">
				<?php _e( 'Meta', 'M18PUD' ); ?>
			</h3>
			<ul>
				<?php wp_register(); ?>
				<li>
					<?php wp_loginout(); ?>
				</li>
				<?php wp_meta(); ?>
			</ul>
		</li>
		<?php endif; // end primary widget area ?>
		<li class="widget-container widget_links">
			<h3 class="widget-title"><?php _e( '文章标签', 'M18PUD' ); ?></h3>
			<div><?php wp_tag_cloud('smallest=10&largest=10&number=30&orderby=count') ?></div>
		</li>
		<li class="widget-container widget_links">
			<h3 class="widget-title"><?php _e( '左邻右里', 'M18PUD' ); ?></h3>
			<ul class="xoxo blogroll">
				<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
			</ul>
		</li>
		
	</ul>
</div>
<!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
	<ul class="xoxo">
		<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
	</ul>
</div>
<!-- #secondary .widget-area -->

<?php endif; ?>
