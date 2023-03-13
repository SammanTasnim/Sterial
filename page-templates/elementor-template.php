<?php
/**
 * Template name: Elementor page
 */
?>


<?php
get_header();

while(have_posts(  )) {
    the_post();


    the_content();

    
}



?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12"data-aos="fade-up" data-aos-delay="0">
                
                <h2 class="heading mb-5"><?php echo esc_html( 'Recent Posts', 'sterial' ); ?></h2>
            </div>
        </div>
        <div class="row">
        <?php
            global $wp_query;
            $args = array(
                'post_type' => 'services',
                'post_status' => 'publish',
                'posts_per_page' => 4,
                'orderby' => 'date',
                'order' => 'DESC',
    
                'paged' => get_query_var('paged'),
            );
            $wp_query = new WP_Query($args);
            while ($wp_query->have_posts()){
                $wp_query->the_post(  );
                // wp_reset_query(  );

                ?>
                <div class="col-lg-3">
                   <div class="service-2 left-0 mb-5">
                       <?php
                       $img = get_the_post_thumbnail_url( get_the_ID(), 'services' );
                       ?>
                        <img src="<?php echo esc_url($img); ?>" alt="Image" class="img-fluid mb-4 rounded"> 
                        <div>
                            <h3><?php echo the_title(  ); ?></h3>
                            <p><?php echo the_excerpt(  ); ?></p>
                           <p><a href="<?php echo the_permalink(  ); ?>" class="more"><?php echo esc_html( 'Learn more', 'sterial' ); ?></a></p>
                       </div>
                   </div>
               </div>
           <?php 
             
            }
               
            
            ?>
        
            
        </div>
    </div>
</div>

<?php get_footer(); ?>