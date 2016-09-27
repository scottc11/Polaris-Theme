<?php
/*
Template Name: Product Page
*/
?>

<?php get_header(); ?>

	<!-- START OF LOOP -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<article class="container">

			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!--          WEB TRAIL       		  -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

			<div class="row">

				<?php
					$category_info = PSI_get_cat_link( $wp_query->get_queried_object() );
				?>

				<div class="col-xs-12">
					<h3 class="color-accent-baby-blue">
						<a href="<?php echo get_page_by_path( 'products' )->guid; ?>">Products</a>
						 /
						<a href="<?php echo get_term_link($category_info['productTypeID']); ?>"><?php echo $category_info['productType']; ?></a>
						 /
						<?php echo $wp_query->get_queried_object()->post_title; ?>
					</h3>
					<hr>
				</div>

			</div>




			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!--          PRODUCT HEADER        -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

			<header class="row">
				<div class="col-xs-12">

					<!-- PRODUCT TITLE AND SUB-TITLE -->
					<div class="float-left">
						<h2><?php the_title(); ?></h2>
						<h3 class="font-weight-reg"><?php echo get_post_meta( $post->ID, 'description_heading', true); ?></h3 class="no-bold">
					</div>

					<!-- PRODUCT BRAND/SUPPLIER IMG -->
					<div class="supplier-logo-container float-right">
						<?php
							$logoPath = get_post_meta( $post->ID, 'supplier_logo_path', true);
							// check if products logo path != " "
							if (has_supplier_logo_path($logoPath) == true ) : ?>
								<img class="vertical-center" src="<?php echo get_template_directory_uri(); ?>/assets/supplier-logos/<?php echo get_post_meta( $post->ID, 'supplier_logo_path', true); ?>.png"/>
						<?php endif; ?>
					</div>

				</div>

				<!-- PRODUCT DESCRIPTION i.e the_excerpt() -->
				<div class="col-xs-12">
					<p class="bigger-text">
						<?php the_excerpt(); ?>
					</p>
				</div>
			</header>




			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!--          PRODUCT IMAGES              -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- see main.js for user changing images -->

			<section class="row">

				<div id="product-page-images" class="margin-top-bottom-20 col-xs-12 col-md-6">
					<?php
						$images = get_attached_media('image', $post->ID);
						$counter = 0;
						foreach($images as $image) { ?>
							<!-- If first element -->
							<?php if ($counter == 0) { ?>
								<div class="main-product-img-container horizontal-center col-xs-12">
									<img src="<?php echo wp_get_attachment_url($image->ID); ?>" />
								</div>

							<?php } else { ?>
								<div class="alt-product-img-container col-xs-3 col-md-4 col-lg-3">
										<img src="<?php echo wp_get_attachment_url($image->ID); ?>" />
								</div>
							<?php } ?>
							<?php $counter++; ?>
					<?php } ?>
				</div>


				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<!--   DESCRIPTION AND SPECS        -->
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

				<div class="margin-top-bottom-20 col-xs-12 col-md-6">
					<ul class="tab-box">
						<li id="features-tab" class="tab">Features</li>
						<li id="specs-tab" class="tab">Specifications</li>
					</ul>

					<div id="features-content" class="tab-content active">

						<ul>
							<?php $features = get_post_meta( $post->ID, 'Feature', false); ?>
							<?php foreach ($features as $feature) { ?>
								<li><?php echo $feature ?></li>
							<?php } ?>
						</ul>

					</div>

					<div id="specs-content" class="tab-content">
						<ul>
							<?php $specs = get_post_custom($post->ID); ?>
							<?php foreach ($specs as $key => $value) {
								if ( PSI_filter_custom_fields($key) == false ) { ?>
									<li><span class="bold-text color-accent-black"><?php echo $key ?>:</span> <?php echo $value[0] ?></li>
									<hr class="specs-hr">
								<?php }
							} ?>
						</ul>
					</div>

					<!-- VIDEO AND BUY NOW BUTTONS -->
					<div class="">
						<div class="col-xs-6">
							<a href="#">
								<div id="buy-now" class="product-page-button">
									<a href="<?php echo get_page_by_path( 'contact' )->guid; ?>">
										<h3 class="color-accent-white" >Email Us!</h3>
									</a>
								</div>
							</a>
						</div>

						<div class="col-xs-6">
							<a href="#">
								<div id="watch-video" class="product-page-button">
									<a class="video-link" href="<?php echo get_post_meta( $post->ID, 'video_url', true); ?>">
										<h3 class="color-accent-white">Watch Video</h3>
									</a>
								</div>
							</a>
						</div>
					</div>

				</div>
				<!-- /TAB BOX -->

			</section>


	</article>

	<!-- END OF LOOP -->
	<?php endwhile; else: ?>
		<p><?php _e( 'The product you are looking for could not be found.' ); ?></p>
	<?php endif; ?>

<?php get_footer(); ?>
