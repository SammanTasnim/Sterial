<?php

/**
 * Template name: Services
 */

?>



<?php get_header(); ?>


<?php
while(have_posts(  )){
    the_post(  );
}
?>


	<div class="section">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 mb-4 mb-lg-0">
					<div class="heading-content" data-aos="fade-up">
                        <?php
                        $title = get_post_meta( get_the_ID(), '_sterial_subtitle', true );
                        $content = get_post_meta( get_the_ID(), '_sterial_content', true );
                        $link = get_post_meta( get_the_ID(), '_sterial_link', true );
                        ?>
						<h2><?php echo esc_html( $title ); ?></h2>
						<p><?php echo esc_html( $content ); ?></p>
						<p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="<?php echo esc_url( $link ); ?>" class="btn btn-primary">View All</a></p>
                    </div>
				</div>
				<div class="col-lg-9">
					<div class="row">
                        <?php
                        $boxes = get_post_meta( get_the_ID(), '_sterial_service_boxes', true );
                       
                        if(is_array($boxes)){
                            foreach($boxes as $box){
                                $image = $box['_sterial_box_image'];
                                $title = $box['_sterial_box_title'];
                                $content = $box['_sterial_box_content'];
                                ?>
                                <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center" data-aos="fade-up"  data-aos-delay="100">
                                    <div class="service-1 left-0 mb-5">
                                        <span class="icon">
                                            <img src="<?php echo esc_url( $image ); ?>" alt="Image" class="img-fluid">
                                        </span>
                                        <div>
                                            <h3><?php echo esc_html( $title ); ?></h3>
                                            <p><?php echo esc_html( $content ); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
						
						
					</div>

					

				</div>

			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6 mx-auto text-center">
					<div class="heading-content" data-aos="fade-up">
                        <?php
                        $title = get_post_meta( get_the_ID(), '_sterial_title1', true );
                        $content = get_post_meta( get_the_ID(), '_sterial_content1', true );
                        $link = get_post_meta( get_the_ID(), '_sterial_link1', true );
                        ?>
						<h2><?php echo esc_html( $title ); ?></h2>
						<p><?php echo esc_html( $content ); ?></p>
						<p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="<?php echo esc_url( $link ); ?>" class="btn btn-primary">View All</a></p>
					</div>
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
                    'order' => 'ASC',
        
                    'paged' => get_query_var('paged'),
                );
                $wp_query = new WP_Query($args);
                while ($wp_query->have_posts()){
                    $wp_query->the_post(  );
                    
                    ?>
                    <div class="col-lg-3">
                       <div class="service-2 left-0 mb-5">
                           <?php
                           $image = get_the_post_thumbnail_url( get_the_ID(), 'services' );
                           ?>
                            <img src="<?php echo esc_url($image); ?>" alt="Image" class="img-fluid mb-4 rounded">
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