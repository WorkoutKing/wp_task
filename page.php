<?php get_header(); ?>
<div class="section">
	<div class="content page-content page-price-content">
		<div class="container">
			<div class="row">


				<div class="col-md-12 main-content">
					<h1 class="page-title">
						<?php echo the_title(); ?>
					</h1>



					<?php if (have_posts()):
						while (have_posts()):
							the_post();
							the_content();
						endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();