<?php get_header(); ?>
<!----------__________ Single Page start ___________------------>


<div class="row">
	<div class="single_page">
		<div class="col-lg-1 col-md-1 col-sm-1"></div>
		<div class="col-lg-10 col-md-10 col-sm-10">


			<div class="page_dtails">
				<h4 class="page_hadding"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a> </h4>
				<p>
					<p>



						<?php the_post_thumbnail(); ?>
					</p>
					<p style="text-align: center;">

						<?php the_content(); ?>

					</p>
				</p>
			</div>

		</div>
		<div class="col-lg-1 col-md-1 col-sm-1"></div>
	</div>
</div>

</div>
</section>







<?php get_footer(); ?>