<section>
    <div class="row">
        <div class="small-12 columns">
            <h2>section 1</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos voluptatum necessitatibus vel dolore nostrum rerum exercitationem accusantium impedit saepe eveniet rem, placeat quod doloribus quis eius minima ad sequi aliquam!</p>
        </div>
    </div>    
</section>
<section>
    <div class="row">
        <div class="small-12 columns">
            <h2>section 1</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos voluptatum necessitatibus vel dolore nostrum rerum exercitationem accusantium impedit saepe eveniet rem, placeat quod doloribus quis eius minima ad sequi aliquam!</p>
        </div>
    </div>    
</section>
<section>
    <div class="row">
        <div class="small-12 columns">
            <h2>section 1</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos voluptatum necessitatibus vel dolore nostrum rerum exercitationem accusantium impedit saepe eveniet rem, placeat quod doloribus quis eius minima ad sequi aliquam!</p>
        </div>
    </div>    
</section>
<section style="position:relative;">
    <div class="row">
        <div class="small-6 medium-6 columns">
            <img src="https://via.placeholder.com/980x650" alt="">
        </div>    
        <div class="small-6 medium-6 columns">
            <img src="https://via.placeholder.com/980x650" alt="">
        </div>
    </div>

    <button id="btGallery">
        <div>
        galerie photos
        <img src="<?php echo get_template_directory_uri(); ?>/img/cameraGallery.svg" alt="">
        </div>
    </button>
    <div id="photos">

        <div class="owl-carousel galleryMariage">

        <?php 
            // vars
            $images = get_field('galerie_photos');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)

        ?>

            <?php foreach( $images as $image ): ?>
                <div style="background-image: url('<?php echo $image['url']; ?>');"></div>
            <?php endforeach; ?>            

        </div>

        <div id="close">Fermer la galerie</div>
        
    </div>
</section>
<section>
    <div class="row">
        <div class="small-12 columns">
            <h2>section 1</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos voluptatum necessitatibus vel dolore nostrum rerum exercitationem accusantium impedit saepe eveniet rem, placeat quod doloribus quis eius minima ad sequi aliquam!</p>
        </div>
    </div>    
</section>
<section>
    <div class="row">
        <div class="small-12 columns">
            <h2>section 1</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos voluptatum necessitatibus vel dolore nostrum rerum exercitationem accusantium impedit saepe eveniet rem, placeat quod doloribus quis eius minima ad sequi aliquam!</p>
        </div>
    </div>    
</section>
<section>
    <div class="row">
        <div class="small-12 columns">
            <h2>section 1</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos voluptatum necessitatibus vel dolore nostrum rerum exercitationem accusantium impedit saepe eveniet rem, placeat quod doloribus quis eius minima ad sequi aliquam!</p>
        </div>
    </div>    
</section>
<section>
    <div class="row">
        <div class="small-12 columns">
            <h2>section 1</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos voluptatum necessitatibus vel dolore nostrum rerum exercitationem accusantium impedit saepe eveniet rem, placeat quod doloribus quis eius minima ad sequi aliquam!</p>
        </div>
    </div>    
</section>
<section>
    <div class="row">
        <div class="small-12 columns">
            <h2>section 1</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos voluptatum necessitatibus vel dolore nostrum rerum exercitationem accusantium impedit saepe eveniet rem, placeat quod doloribus quis eius minima ad sequi aliquam!</p>
        </div>
    </div>    
</section>
<section>
    <div class="row">
        <div class="small-12 columns">
            <h2>section 1</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos voluptatum necessitatibus vel dolore nostrum rerum exercitationem accusantium impedit saepe eveniet rem, placeat quod doloribus quis eius minima ad sequi aliquam!</p>
        </div>
    </div>    
</section>
<section>
    <div class="row">
        <div class="small-12 columns">
            <h2>section 1</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos voluptatum necessitatibus vel dolore nostrum rerum exercitationem accusantium impedit saepe eveniet rem, placeat quod doloribus quis eius minima ad sequi aliquam!</p>
        </div>
    </div>    
</section>