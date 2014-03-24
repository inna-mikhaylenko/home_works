<?php get_header(); ?>
<div class="content">

	<?php $args = array(
		title_li => '',
		style    => none
	); ?>
	<h2><?php the_category($args); ?></h2>
	
	<ul>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php if ( has_post_format( 'aside' )) { ?>
				<li>
					<?php if ( has_post_thumbnail() ) : the_post_thumbnail(); ?>
					<?php endif; ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h3>
						<?php the_content(); ?>
				</li>
			<?php } ?>
		<?php endwhile; endif; ?>
	</ul>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if ( has_post_format( 'quote' )) { ?>
			<div class="banner">
				<h4><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h4>
				<?php the_content(); ?>
			</div>
			<?php } ?>
	<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>