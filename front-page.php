<?php get_header(); ?>

	<main role="main">

		<section class="intro">

			<?php
				$bg_intro = get_field('background-image');
			?>

			<div class="bgPresentation wow slideInLeft" data-wow-duration="2s" style="background-image: url(<?php echo $bg_intro['url'] ?>);"></div>
			<div class="txtPresentation"> 
				<img class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s" id="logo" src="<?php echo get_template_directory_uri(); ?>/img/Manoir-des-Lys-logo.jpg" alt="Manoir des Lys">
				<div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="1.5s">
					<h1>Salle de réception</h1>
					<small>pour tout vos events</small>
				</div>				
			</div>	
			<div class="scrollTo"></div>		
		</section>

		<section class="scrollme">
			<div class="row full">
				<div class="small-12 medium-6 columns">
					<div class="row">
						<div class="small-12 medium-8 columns">
							<p><b><?php echo the_field('titre'); ?></b></p>
							<hr>
							<?php echo the_field('contenu'); ?>
						</div>
					</div>
					<div class="row P50 wow zoomIn" data-wow-offset="300">
						<div class="small-12 medium-11 columns">
							<h2 class="sup"><?php echo the_field('titre_services'); ?></h2>
							<?php echo the_field('description_services'); ?>

							<?php
							
							$pictos_services = get_field('pictos_services');
							$size_services = 'custom-size'; 
							
							if($pictos_services):

							?>

							<div class="row small-up-4 max-size-90">

								<?php foreach ( $pictos_services as $picto_services): ?>
								
								<div class="column column-block">
									<?php echo wp_get_attachment_image( $picto_services['ID'], $size ); ?>
								</div>

								<?php endforeach; ?>

							</div>
							<?php endif; ?>
						</div>
					</div>					
				</div>
				<div class="small-12 medium-6 columns bgGrisClair animateme" data-when="span"
				data-from="0.1"
				data-to="1"
				data-easing="linear"
				data-translateY="-400">
					<div class="row align-middle">
						<div class="small-12 medium-5 columns">
							<h2 class="wow slideInRight"><?php echo the_field('titre_manoir'); ?></h2>
							<div class="wow slideInUp">
								<?php echo the_field('description_manoir'); ?>	
							</div>					
						</div>
						<div class="small-12 medium-7 columns">
							<?php $image1 = get_field('image_manoir_1'); ?>
							<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['altl']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="small-12 medium-8 columns">
							<?php $image2 = get_field('image_manoir_2'); ?>
							<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['altl']; ?>">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- section -->
		<section class="P50">
			<div class="row full">
				<div class="small-12 medium-7 medium-offset-1 column">
				<div class="owl-carousel" id="slideGalerie">

					<?php $imagesGalerie = get_field('galerie'); ?>
					<?php foreach ( $imagesGalerie as $imageGalerie ): ?>
					<div><img src="<?php echo $imageGalerie['url']; ?>" alt="<?php echo $imageGalerie['alt']; ?>"></div>
					<?php endforeach; ?>
				</div>
				</div>
			</div>
		</section>		
		<?php $bg_avis = get_field('background_avis'); ?>
		<section class="bgGrisClair temoignage" style="background-image: url('<?php echo $bg_avis['url']; ?>');">
			<div class="row">
				<div class="small-12 columns">
					<h2 class="text-center">nos mariés parlent de nous</h2>
					<div class="owl-carousel" id="slideTemoignage">

						<?php if( have_rows('avis') ): ?>

							<?php while( have_rows('avis') ): the_row(); 

								// vars
								$avatar = get_sub_field('avatar');
								$content = get_sub_field('contenu_avis');
								$nom = get_sub_field('nom');

							?>

							<!-- Slide 1 -->
							<div>
								<div class="row">
									<div class="small-12 medium-7 medium-offset-5 columns">

										<div class="row align-bottom">
											<div class="shrink">
												<div class="avatar">
													<img src="<?php echo $avatar['url']; ?>" alt="<?php echo $avatar['alt']; ?>">
												</div>											
											</div>
											<div class="column">
												<div class="bg_avis">										
													<p class="avis"><span class="dashicons dashicons-editor-quote"></span> <?php echo $content; ?></p>
													<p>
														<span class="dashicons dashicons-star-filled"></span>
														<span class="dashicons dashicons-star-filled"></span>
														<span class="dashicons dashicons-star-filled"></span>
														<span class="dashicons dashicons-star-filled"></span>
														<span class="dashicons dashicons-star-filled"></span>
														<span class="nom"><?php echo $nom; ?></span>
													</p>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Slide -->
								
							<?php endwhile; ?>

							<?php endif; ?>

					</div>
				</div>
			</div>
			
		</section>	
		<section class="P50 scrollme overflowHidden">

			<script>
				var imageMap = '<?php echo get_template_directory_uri(); ?>/img/Manoir-des-Lys-logo.jpg';
			</script>

			<h2 class="text-center">nous localiser</h2>
			<div id="maps" class="maps animateme"
				data-when="span"
				data-from=".5"
				data-to="0"
				data-easing="easein"
				data-opacity="0"
				data-scale="1.5"
			></div>
		</section>	
		<!-- /section -->
	</main>

<?php get_footer(); ?>