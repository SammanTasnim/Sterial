
<!doctype html>
<html lang="<?php language_attributes(  ); ?>">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
    <!--<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    ---->

	<?php wp_head(  ); ?>
</head>
<body <?php body_class(); ?>>
    
	<?php wp_body_open(  ); ?>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav mt-3">
		<div class="container">

			<div class="site-navigation">
				<div class="row">
					<div class="col-6 col-lg-3">
						<a href="" class="logo m-0 float-start">
							<?php
							if(has_custom_logo(  )){
								the_custom_logo(  );
							}
							/*else{
								$site_title = get_blog_info('name');
								$site_url = get_home_url(  );
								?>
								<a href="<?php echo esc_url($site_url); ?>"><?php echo esc_html( $site_title ); ?></a>
								<?php
							}*/
							?>
						</a>
					</div>

					<div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
						<ul class="js-clone-nav  text-center site-menu p-0 m-0">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'primary-menu',
								
							) );
							?>
						</ul>
					</div>
					<!-- <div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
						<ul class="js-clone-nav  text-center site-menu p-0 m-0">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About us</a></li>
							<li class="has-children">
								<a href="#">Dropdown</a>
								<ul class="dropdown">
									<li><a href="#">Menu One</a></li>
									<li class="has-children">
										<a href="#">Menu Two</a>
										<ul class="dropdown">
											<li><a href="#">Sub Menu One</a></li>
											<li><a href="#">Sub Menu Two</a></li>
											<li><a href="#">Sub Menu Three</a></li>
										</ul>
									</li>
									<li><a href="#">Menu Three</a></li>
								</ul>
							</li>
							<li><a href="services.html">Services</a></li>
							<li class="active"><a href="blog.html">Blog</a></li>

						</ul>
					</div> -->
					<div class="col-6 col-lg-3 text-lg-end">
						<ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu ">
							<li class="cta-button"><a href="contact.html">Contact Us</a></li>
						</ul>

						<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
							<span></span>
						</a>
					</div>
				</div>
			</div>
			
		</div>
	</nav>

	

	<div class="hero overlay">

		<div class="img-bg rellax">
			<img src="<?php echo STERIAL_ASSETS_URL; ?>images/hero_2.jpg" alt="Image" class="img-fluid">
		</div>
		<div class="container">
			<div class="row align-items-center justify-content-start">
				<div class="col-lg-6 mx-auto text-center">
					<?php
					global $sterial_options;
					$head_title = $sterial_options['header_title'];
					$head_content = $sterial_options['header_description'];
					$head_link = $sterial_options['header_link'];
					
					?>

					<h1 class="heading" data-aos="fade-up"><?php echo esc_html( $head_title ); ?></h1>
					<p class="mb-4" data-aos="fade-up"><?php echo esc_html( $head_content ); ?></p>

					<div data-aos="fade-up">
						<a href="<?php echo esc_url( $head_link ); ?>" class="play-button glightbox3 w-100 text-center" >
							<div class="d-inline-flex align-items-center ">
								<span class="icon-button me-3">
									<span class="icon-play"></span>
								</span>
								<span class="caption"><?php echo esc_html( 'Watch video', 'sterial' ); ?></span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		

		
	</div>