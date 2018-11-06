			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="row blockSocial align-middle">
					<div class="small-12 medium-6 columns">
						<h3>Suivez-nous sur les réseaux sociaux</h3>
						<p>Il y a des rêves qu’on n’oublie pas… C’est souvent le cas quand on rêve du plus beau jour de sa vie, <strong>son mariage</strong>. Partagez avec nous ces moments magiques ou découvrez ceux de nos marié.es. par le biais de témoignages.</p>

						<?php $linkFB = get_field('facebook', 'option'); ?>

						<a href="<?php echo $linkFB; ?>" onclick="window.open(this.href); return false;"><img class="imgSocial" src="<?php echo get_template_directory_uri(); ?>/img/facebook-app-logo.svg" alt="Facebook Le Manoir des Lys"></a>

					</div>
					<div class="small-12 medium-6 columns">
						<!-- <?php echo do_shortcode('[custom-facebook-feed]') ?> -->
						<div id="FBResult"></div>
					</div>
				</div>

				<div class="row">
					<div class="small-12 medium-6 columns">
							<?php wp_nav_menu(array( 'theme_location' => 'footer-menu')); ?>					
					</div>

					<div class="small-12 medium-6 columns">
						<!-- copyright -->
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>							
							<a href="https://www.createur-design.fr/" onclick="window.open(this.href); return false;" title="createur-design"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_createur_design_mail.png" alt=""></a>
						</p>
						<!-- /copyright -->
					</div>
				</div>				

			</footer>
			<!-- /footer -->

		<?php wp_footer(); ?>

	</body>
</html>
