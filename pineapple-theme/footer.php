<div class="footer">
	<div class="footer-cont">
		<ul class="footer-inf">

				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
				<?php endif; ?>


				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
				<?php endif; ?>

				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>
				<?php endif; ?>

				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(4) ) : else : ?>
				<?php endif; ?>

		</ul>
		<span>Copyright &copy; <?php echo date("Y"); ?> <a href="#">Pineapple company</a></span>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>