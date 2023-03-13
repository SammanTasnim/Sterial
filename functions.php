<?php



include_once get_template_directory() . '/lib/tgm.php';


function sterial_load_css_and_js(){

    define('STERIAL_ASSETS_URL', get_template_directory_uri(  ) . '/assets/');
    define('STERIAL_ASSETS_VERSION',time());

    //CSS load
    wp_enqueue_style( 'flaticon', STERIAL_ASSETS_URL.'fonts/flaticon/font/flaticon.css', array(), STERIAL_ASSETS_VERSION );
    wp_enqueue_style( 'tiny-slider', STERIAL_ASSETS_URL.'css/tiny-slider.css', array(), STERIAL_ASSETS_VERSION );
    wp_enqueue_style( 'aos', STERIAL_ASSETS_URL.'css/aos.css', array(), STERIAL_ASSETS_VERSION );
    wp_enqueue_style( 'flatpickr', STERIAL_ASSETS_URL.'css/flatpickr.min.css', array(), STERIAL_ASSETS_VERSION );
    wp_enqueue_style( 'glighbox', STERIAL_ASSETS_URL.'css/glightbox.min.css', array(), STERIAL_ASSETS_VERSION );
    wp_enqueue_style( 'icomoon', STERIAL_ASSETS_URL.'fonts/icomoon/style.css', array(), STERIAL_ASSETS_VERSION );
    
    wp_enqueue_style( 'main', get_stylesheet_uri(  ) );

    //JS load
    wp_enqueue_script( 'bootstrap', STERIAL_ASSETS_URL.'js/bootstrap.bundle.min.js', array('jquery'), STERIAL_ASSETS_VERSION, true);
    wp_enqueue_script( 'tiny-slider', STERIAL_ASSETS_URL.'js/tiny-slider.js', array('jquery'), STERIAL_ASSETS_VERSION, true);
    wp_enqueue_script( 'aos', STERIAL_ASSETS_URL.'js/aos.js', array('jquery'), STERIAL_ASSETS_VERSION, true);
    wp_enqueue_script( 'navbar', STERIAL_ASSETS_URL.'js/navbar.js', array('jquery'), STERIAL_ASSETS_VERSION, true);
    wp_enqueue_script( 'counter', STERIAL_ASSETS_URL.'js/counter.js', array('jquery'), STERIAL_ASSETS_VERSION, true);
    wp_enqueue_script( 'rellax', STERIAL_ASSETS_URL.'js/rellax.js', array('jquery'), STERIAL_ASSETS_VERSION, true);
    wp_enqueue_script( 'flatpickr', STERIAL_ASSETS_URL.'js/flatpickr.js', array('jquery'), STERIAL_ASSETS_VERSION, true);
    wp_enqueue_script( 'gightbox', STERIAL_ASSETS_URL.'js/glightbox.min.js', array('jquery'), STERIAL_ASSETS_VERSION, true);
    wp_enqueue_script( 'custom', STERIAL_ASSETS_URL.'js/custom.js', array('jquery'), STERIAL_ASSETS_VERSION, true);
}

add_action( 'wp_enqueue_scripts', 'sterial_load_css_and_js' );




//Basic
function sterial_setup() {
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'custom-background' );
    register_nav_menus( array(
        'primary-menu' => __('Primary menu', 'sterial'),
        'footer-menu' => __('Footer menu', 'sterial'),
    ) );
}
add_action('after_setup_theme', 'sterial_setup');




function sterial_single_comment_markup( $comment, $args, $depth ) {
	if ( 'div' === $args[ 'style' ] ) {
		$tag		 = 'div';
		$add_below	 = 'comment';
	} else {
		$tag		 = 'li ';
		$add_below	 = 'div-comment';
	}
	?>
	<ul class="comment-list">
        <li class="comment">
            <div class="vcard bio">
                <img src="
                <?php
                if ( $args[ 'avatar_size' ] != 0 ) {
                    echo get_avatar( $comment, $args[ 'avatar_size' ], '', '', array( 'class' => 'comment-avatar pull-left' ) );
                }
                ?>" alt="Free Website Template by Free-Template.co">
            </div>
            <div class="comment-body">
                <h3><?php echo get_comment_author_link(); ?></h3>
                <div class="meta"><?php echo esc_html( get_comment_date() ) . ' ' . esc_html__( 'AT', 'sterial' ) . ' ' . esc_html( get_comment_time() ); ?></div>
                <p><?php comment_text(); ?></p>
                 <div href="" class="reply">
                <p>     
                <?php
				comment_reply_link(
				array_merge(
				$args, array(
					'add_below'	 => $add_below,
					'depth'		 => $depth,
					'max_depth'	 => $args[ 'max_depth' ]
				) ) );
				?>
                 </p></div>
            </div>
        </li>

        

        
    </ul>

	<?php

}


function sterial_single_comment_form_field($fields){
    
    
    $comment_field_html = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field_html;

    unset($fields['cookies']);

    //Field names
      
    //Name
    
    $fields['author']  = '<h3 class="mb-5">Leave a comment</h3>
                            <form action="#" class="">
                                <div class="mb-3">
                                    <label for="name">Name </label>
                                    <input type="text" class="form-control" id="name" name="author">
                                </div>';
    $fields['email']   = ' <div class="mb-3">
                                <label for="email">Email </label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>';
    $fields['url']      = '<div class="mb-3">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website" name="url">
                            </div>';
    $fields['comment']  = '<div class="mb-3">
                                <label for="message">Message</label>
                                <textarea name="" id="message"  name="comment "class="form-control"></textarea>
                            </div>
                            </form>';
   return $fields;
}

add_filter('comment_form_fields', 'sterial_single_comment_form_field');








?>