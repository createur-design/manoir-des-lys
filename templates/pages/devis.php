<section class="introDevis">

    <?php
    $image = get_field('image'); 
    ?>
    <div class="bg_devis" style="height:300px; overflow:hidden; background:url('<?php echo $image['url']; ?>'); background-size: cover; background-position: center center;"></div> 

    <div class="row">
        <div class="small-12 columns">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
        </div>
    </div>    

    <!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->

</section>

<!-- section -->
<section class="devis_form">

    <div class="row">
    
        <div class="small-12 columns">                       
        
            <?php echo do_shortcode('[caldera_form id="CF5b8c45c7866e7"]'); ?>

        </div>

    </div>        

</section>
<!-- /section -->