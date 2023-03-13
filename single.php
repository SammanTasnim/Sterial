<?php get_header() ?>


<div class="section">
		<div class="container">
			<div class="row">
                <?php
                while(have_posts(  )){
                    the_post(  );
                }  
                ?>
				<div class="col-md-8 blog-content pe-5">
					<p class="lead"><?php the_title( ); ?></p>
					<p>
                        <?php echo the_content( ); ?>
                    </p>


					<div class="pt-5">
						<p>Categories:  
							<?php
							$cats = get_the_category();
							if(is_array($cats)){
								foreach($cats as $cat){
									$cat_name = $cat->name;
									$cat_link = get_term_link($cat);
									?>
									<a href="<?php echo esc_url($cat_link); ?>"><?php echo esc_html( $cat_name ); ?></a>,
									<?php
	
								}
							

							}
							?>
							
						<p>Tags:
							<?php
							$tags = get_the_tags();
							if(is_array($tags)){
								foreach($tags as $tag){
									$tag_name = $tag->name;
									$tag_link = get_term_link($tag);
									?>
									<a href="<?php echo esc_url($tag_link); ?>"><?php echo esc_html( $tag_name ); ?></a>
									<?php
								}
							}
							?>
						</p>
					</div>


					
						<!-- <h3 class="mb-5">6 Comments</h3> -->
						<?php 
						// post password required => locked 
						// post password not required => unlocked
						if ( !post_password_required() && (comments_open() || get_comments_number()) ) {
							comments_template();
						}
						
						?>
						
						<!-- END comment-list -->

						
					

				</div>
				<div class="col-md-4 sidebar">
					<div class="sidebar-box">
						<form action="#" class="search-form">
							<div class="form-group">
								<span class="icon fa fa-search"></span>
								<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
							</div>
						</form>
					</div>
					<div class="sidebar-box">
						<div class="categories">
							
							<?php
							$caytegories = wp_list_categories(  );
							
							if(is_array($caytegories)){
								foreach($caytegories as $category){
									echo '<li><a href="'.get_category_link($category).'">'.get_cat_name($category) .' <span>(22)</span></a></li>';
								}
							}
							?>
							
							
							
						</div>
					</div>
					<div class="sidebar-box">
						<img src="images/person_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid mb-4 w-50 rounded-circle">
						<h3 class="text-black">About The Author</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<p><a href="#" class="btn btn-primary btn-md text-white">Read More</a></p>
					</div>

					<div class="sidebar-box">
						<h3 class="text-black">Paragraph</h3>
						<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>