<?php
/**
 * Template name: About Us
 */
?>


<?php get_header(); ?>

	<div class="section section-2">
		<div class="container">
            <?php
            $image_one = get_post_meta( get_the_ID(), '_sterial_box_image_one', true );
            $image_two = get_post_meta( get_the_ID(), '_sterial_box_image_two', true );
            $title = get_post_meta( get_the_ID(), '_sterial_subtitle', true );
            $content = get_post_meta( get_the_ID(), '_sterial_content', true );
            $link = get_post_meta( get_the_ID(), '_sterial_link', true );
            ?>
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
					<div class="image-stack mb-5 mb-lg-0">
						<div class="image-stack__item image-stack__item--bottom" data-aos="fade-up"  >
							<img src="<?php echo esc_url($image_one); ?>" alt="Image" class="img-fluid rellax ">
						</div>
						<div class="image-stack__item image-stack__item--top" data-aos="fade-up" data-aos-delay="100"  data-rellax-percentage="0.5">
							<img src="<?php echo esc_url($image_two); ?>" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
				<div class="col-lg-4 order-lg-1">

					<div>
						<h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100"><?php echo esc_html($title); ?></h2>

						<p data-aos="fade-up" data-aos-delay="200"><?php echo esc_html($content); ?></p>

						

						<p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="<?php echo esc_url($link); ?>" class="btn btn-primary">Read more</a></p>
					</div>
				</div>
				
			</div>

		</div>		
	</div>

	<div class="section service-section-1">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 mb-4 mb-lg-0">
					<div class="heading-content" data-aos="fade-up">
						<h2>Our <span class="d-block">Philosphy</span></h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">View All</a></p>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="100">
							<div class="service-1">
								<span class="icon">
									<img src="images/svg/01.svg" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Tourism</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="200">
							<div class="service-1">
								<span class="icon">
									<img src="images/svg/02.svg" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Package Tours</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="300">
							<div class="service-1">
								<span class="icon">
									<img src="images/svg/03.svg" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Travel Insurance</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="400">
							<div class="service-1">
								<span class="icon">
									<img src="images/svg/04.svg" alt="Image" class="img-fluid">
								</span>
								<div>
									<h3>Airport Lounge Access</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6 mx-auto text-center">
                    <?php
                    $title = get_post_meta( get_the_ID(), '_sterial_subtitle', true );
                    $content = get_post_meta( get_the_ID(), '_sterial_content', true );
                    ?>
					<div class="heading-content" data-aos="fade-up">
						<h2 class="heading"><?php echo esc_html( $title ); ?></h2>
						<p><?php echo esc_html( $content );  ?></p>
					</div>
				</div>
			</div>

			<div class="row">
                <?php
                $boxes = get_post_meta( get_the_ID(), '_sterial_experts_boxes', true );
                if(is_array($boxes)){
                    foreach($boxes as $box){
                        $image = $box['_sterial_box_image'];
                        $profession = $box['_sterial_profession_title'];
                        $name = $box['_sterial_name'];
                        $content = $box['_sterial_content'];
                        ?>
                        <div class="col-lg-3">
                            <a href="#" class="person">
                                <img src="<?php echo esc_url( $image ); ?>" alt="Image" class="img-fluid mb-4">
                                <span class="subheading d-inline-block"><?php echo esc_html( $profession ); ?></span>
                                <h3 class="mb-3"><?php echo esc_html( $name ); ?></h3>
                                <p class="text-muted"><?php echo esc_html( $content ); ?></p>
                            </a>
                        </div>
                        <?php
                    }
                }
                ?>
				
			</div>
		</div>
	</div>

	<div class="section service-section-1">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6 mx-auto text-center">
					<div class="heading-content" data-aos="fade-up">
						<h2 class="heading">Open Positions</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="bg-white p-4 rounded job-position">
						<div class="row">
							<div class="col-lg-7">
								<span class="block subtitle">Design</span>
								<h2>Product Designer</h2>
								<div class="d-flex align-items-center">
									<div class="d-flex align-items-center me-4">
										<span class="icon-room me-2"></span> <span>Remote</span>
									</div>
									<div class="d-flex align-items-center">
										<span class="icon-clock-o me-2"></span> <span>Fulltime</span>
									</div>
								</div>
							</div>
							<div class="col-lg-5 text-lg-end">
								<a href="#" class="d-inline-flex align-items-center"><span class="me-2">View Position</span> <span class="icon-link2"></span></a>
							</div>

						</div> 	

					</div>
				</div>

				<div class="col-lg-12">
					<div class="bg-white p-4 rounded job-position">
						<div class="row">
							<div class="col-lg-7">
								<span class="block subtitle">Design</span>
								<h2>Account Executive</h2>
								<div class="d-flex align-items-center">
									<div class="d-flex align-items-center me-4">
										<span class="icon-room me-2"></span> <span>Remote</span>
									</div>
									<div class="d-flex align-items-center">
										<span class="icon-clock-o me-2"></span> <span>Fulltime</span>
									</div>
								</div>
							</div>
							<div class="col-lg-5 text-lg-end">
								<a href="#" class="d-inline-flex align-items-center"><span class="me-2">View Position</span> <span class="icon-link2"></span></a>
							</div>

						</div> 	

					</div>
				</div>

				<div class="col-lg-12">
					<div class="bg-white p-4 rounded job-position">
						<div class="row">
							<div class="col-lg-7">
								<span class="block subtitle">Design</span>
								<h2>Customer Success Manager</h2>
								<div class="d-flex align-items-center">
									<div class="d-flex align-items-center me-4">
										<span class="icon-room me-2"></span> <span>Remote</span>
									</div>
									<div class="d-flex align-items-center">
										<span class="icon-clock-o me-2"></span> <span>Fulltime</span>
									</div>
								</div>
							</div>
							<div class="col-lg-5 text-lg-end">
								<a href="#" class="d-inline-flex align-items-center"><span class="me-2">View Position</span> <span class="icon-link2"></span></a>
							</div>

						</div> 	

					</div>
				</div>

				<div class="col-lg-12">
					<div class="bg-white p-4 rounded job-position">
						<div class="row">
							<div class="col-lg-7">
								<span class="block subtitle">Design</span>
								<h2>Engineering Manager</h2>
								<div class="d-flex align-items-center">
									<div class="d-flex align-items-center me-4">
										<span class="icon-room me-2"></span> <span>Remote</span>
									</div>
									<div class="d-flex align-items-center">
										<span class="icon-clock-o me-2"></span> <span>Fulltime</span>
									</div>
								</div>
							</div>
							<div class="col-lg-5 text-lg-end">
								<a href="#" class="d-inline-flex align-items-center"><span class="me-2">View Position</span> <span class="icon-link2"></span></a>
							</div>

						</div> 	

					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>