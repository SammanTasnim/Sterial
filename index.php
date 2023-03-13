<?php get_header(); ?>



	<div class="section">
		<div class="container">

			
			<div class="row align-items-stretch">

            <?php
            while(have_posts(  )){
                the_post(  );

                ?>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
					<div class="media-entry">
                        <?php
                        $image = get_the_post_thumbnail_url( );
                        ?>
						<a href="index.html">
							<img src="<?php echo esc_url( $image ); ?>" alt="Image" class="img-fluid">
						</a>
						<div class="bg-white m-body">
							<span class="date"><?php echo get_the_date( ); ?></span>
							<h3><a href="index.html"><?php the_title(  ); ?></a></h3>
							<p><?php echo the_excerpt(  ); ?></p>

							<a href="single.html" class="more d-flex align-items-center float-start">
								<span class="label"><a href="<?php the_permalink(); ?>"><?php echo esc_html( 'Read more', 'sterial' ); ?></a></span>
								<span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
							</a>
						</div>
					</div>
				</div>
                <?php
            }
            ?>
				
				



				<nav class="mt-5" aria-label="Page navigation example" data-aos="fade-up" data-aos-delay="100">
					<ul class="custom-pagination pagination">
                    <?php 
                        the_posts_pagination(array(
                            'prev_text' => '<li class="page-item prev"><a class="page-link" >Previous</a></li>',
                            'next_text' => '<li class="page-item next"><a class="page-link" >Next</a></li>'
                        ));
                    ?>
					</ul>
				</nav>
			</div>	
		</div>		
	</div>


<?php get_footer(  ); ?>