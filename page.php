<?php get_header(); ?>

	<main role="main">
		<div class="row">
			<div class="small-12 columns">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>		

		<?php
		
			// Page Mariage
			if(is_page( 23 )){
				get_template_part('/templates/pages/mariage');
			}

			// Page Devis
			if(is_page( 35 )){
				get_template_part('/templates/pages/devis');
			}

			// Page Contact
			else if(is_page( 33 )){
				get_template_part('/templates/pages/contact');
			}
			else{

				if (have_posts()): while (have_posts()) : the_post();
			?>

				<div class="row">
					<div class="small-12 columns">
						<?php the_content(); ?>
					</div>
				</div>
			<?php				

				endwhile;

				endif;

			}

		?>	
	</main>

<?php get_footer(); ?>
