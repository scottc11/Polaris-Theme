<?php get_header(); ?>

	<main role="main">

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- 					MAIN BANNER					    -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<section id="main">
			<div class="main-background">
				<div class="container">

					<div class="main-heading-container row">

						<div class="heading-logo col-xs-12">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/logo_blue.png" alt="" />
						</div>

						<div class="col-xs-12">
							<h2>The brightest star. We are Polaris.</h2>
							<h3>Over 25 years experience in the industrial packaging industry.</h3>
						</div>


						<div class="heading-image col-xs-12">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/illustration_1.png" alt="" />
						</div>

						<div class="col-xs-12">
							<p class="font-size-20em">Based upon five cornerstones (principles) Polaris Systems Inc. will strive to provide our customers with <span class="color-accent-baby-blue">quality products</span class="color-accent-baby-blue">, <span class="color-accent-baby-blue">on time service</span class="color-accent-baby-blue"> and <span class="color-accent-baby-blue">innovative packaging solutions</span class="color-accent-baby-blue">.</p>
						</div>



					</div>
				</div>
			</div>
		</section>

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- 					PRODUCTS						    -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<section id="products">
			<div class="products-background">
				<div class="products-container container">

					<div class="row">

						<div class="products-heading col-xs-12">
							<div class="underlined-header-container">
								<h1>Products</h1>
								<hr class="underline-hr">
							</div>
						</div>

					</div>

					<?php
						$categories = get_categories();
						// var_dump(wp_list_pages());
					?>

					<div class="row">

						<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-3">

							<a href="<?php echo get_category_link( 18 ); ?>">
								<div class="product-box">

									<div class="product-image-container">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/wrapping.png" alt="" />
									</div>
									<div class="product-box-heading">
										<h3 class="vertical-center">Stretch Wrappers</h3>
									</div>

								</div>
							</a>

						</div>

						<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-3">

							<a href="<?php echo get_category_link( 12 ); ?>">
								<div class="product-box">
									<div class="product-image-container">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/DYN_N3400-0.png" alt="" />
									</div>

									<div class="product-box-heading">
										<h3 class="vertical-center">Strapping Machines</h3>
									</div>
								</div>
							</a>

						</div>

						<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-3">

							<a href="http://www.polaris-systems.net/products/">
								<div class="product-box">
									<div class="product-image-container">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/stretch-film.jpg" alt="" />
									</div>
									<div class="product-box-heading">
										<h3 class="vertical-center">Stretch Film and Strapping/Banding</h3>
									</div>
								</div>
							</a>

						</div>

						<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-3">

							<a href="http://www.polaris-systems.net/products/">
								<div class="product-box">
									<div class="product-image-container">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/banding.png" alt="" />
									</div>
									<div class="product-box-heading">
										<h3 class="vertical-center">Tools and Accessories</h3>
									</div>
								</div>
							</a>

						</div>

					</div>

						<p class="col-xs-12"><a href="http://www.polaris-systems.net/products/">VIEW ALL PRODUCTS</a></p>

						<hr class="col-xs-12">

				</div>
			</div>

		</section>

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- 					SERVICES						    -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<section id="services">
			<div class="services-background">
				<div class="services-container container">

					<div class="row">


						<div class="services-heading col-xs-12">
							<div class="underlined-header-container">
								<h1>Services</h1>
								<hr class="underline-hr">
							</div>
						</div>



						<div class="service-box col-xs-12 col-sm-4">

							<div class="service-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/illustration_2.png" alt="" />
							</div>
							<div class="service-heading-container">
								<h3>Tool Service</h3>
							</div>
							<p>
								Polaris Systems offers strapping tool repairs for most makes and models of both steel and plastic strapping tools. Either manual, battery operated or pneumatic strapping tools are repaired in our Missisauga location and then returned to you after being repaired and tested.
							</p>

						</div>



						<div class="service-box col-xs-12 col-sm-4">

							<div class="service-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/illustration_3.png" alt="" />
							</div>
							<div class="service-heading-container">
								<h3>Machine Service</h3>
							</div>
							<p>
								Our service technicians are fully trained on both semi automatic and fully automatic wrapping and strapping machines. Not only can we service Dynaric, Polychem, and Wulftec Systems our techs have extensive knowledge of many other strapping and wrapping equipment. From emergency service, operator and maintenance training, PLC programming and debugging, PM programs, installation, safety fencing and light curtains, we can supply you with quality solutions to your service requirements.
							</p>

						</div>



						<div class="service-box col-xs-12 col-sm-4">

							<div class="service-image-container">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/illustration_4.png" alt="" />
							</div>
							<div class="service-heading-container">
								<h3>Parts</h3>
							</div>
							<p>
								Polaris Systems offers a full range of parts for most strapping and wrapping systems and tooling. Just contact us and we will provide you with a competitive quotation for your parts requirements.
							</p>
						</div>

					</div>
				</div>
			</div>
		</section>

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- 					SUPPLIERS						    -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<section id="suppliers">
			<div class="suppliers-background">
				<div class="suppliers-container container">

					<div class="suppliers-heading col-xs-12">
						<div class="underlined-header-container">
							<h2>We Proudly represent:</h2>
							<hr class="underline-hr">
						</div>
					</div>

					<div class="suppliers-image-container col-xs-12">
						<div class="supplier ">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dynaric.png" alt="" />
						</div>

						<div class="supplier ">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/polychem.png" alt="" />
						</div>

						<div class="supplier ">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/mjmallis.png" alt="" />
						</div>

						<div class="supplier">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/supplier-logos/pacstrapping.png" alt="" />
						</div>

						<div class="supplier">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/supplier-logos/cyklop.png" alt="" />
						</div>

					</div>

				</div>
			</div>
		</section>




	</main>

<?php get_footer(); ?>
