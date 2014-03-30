<?php get_header(); ?>
<div class="content">
		<?php $args = array(
		title_li => '',
		style    => none
		); ?>
		<h2><?php the_category($args); ?></h2>
		
		<ul>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li>
						<span></span>
						<?php if ( has_post_thumbnail() ) : the_post_thumbnail(); ?>
						<?php endif; ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></h3>
						<?php the_content(); ?>
					</li>
			<?php endwhile; endif; ?>
		</ul>
		
		<a class="more-link" href="#">View More</a>
	</div>
</div>
<?php get_footer(); ?>