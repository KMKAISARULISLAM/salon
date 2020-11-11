<?php get_header(); ?>



		<div class="article">
		<?php the_custom_logo(); ?>
			<h1><?php bloginfo(); ?></h1>
		</div>
	</div>
	<div id="body">












		<ul>

		<?php $mahidk = new WP_Query(
	array(
		'post_type' => 'hairpost'
	)
)
 ?>

	<?php while( $mahidk->have_posts() ) : $mahidk->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?> ">
					
			<?php the_post_thumbnail(); ?>
			
			
			</a>
				<b> <?php the_title(); ?></b>
				<p>
					<?php readmore(5); ?> <span style="text-align:right"><a href="<?php the_permalink(); ?>"> Read More...</a>
			
				</p>

			</li>
			<?php endwhile; ?>

		
		</ul>


		
		<div>
			<div class="featured">
				<h2>




					
				featured header text
			
			
			
			
			
			
			
			
			
			</h2>
				<img src="<?php echo $mahid['fimage']['url']; ?>">
				<h3>title</h3>
				<p>
		content
			</p>
			</div>
			<div class="section">
				<div class="article">
					<h2>hairstyle</h2>
					<p>
						This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the <a href="http://www.freewebsitetemplates.com/forums/">Forums</a>.
					</p>
					<a href="#">Mike M.</a>
				</div>
				<div class="newsletter">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?> /images/skinhead.png" alt="">
					<p>
						Are you losing your hair? Let us help you in bringing back your confidence. <span>Call Us at 1800-0000-0000</span>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>