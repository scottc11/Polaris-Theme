<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/products.css">




  <main id="" class="container">

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!--          SIDEBAR               -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="row">

      <?php get_template_part('products-sidebar'); ?>


      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <!--          PRODUCTS               -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

      <section class="container col-xs-12 col-sm-8 col-md-9">

        <div class="row">
          <div class="col-xs-12">
            <div class="underlined-header-container">
              <h1><?php echo $wp_query->get_queried_object()->name ?></h1>
              <hr class="underline-hr">
            </div>
          </div>
        </div>

        <div class="masonry-container row">

          <?php

          require 'global-vars.php';

          $queryArray = array(
            'post_type' => 'psi_product',
            'cat' => $wp_query->get_queried_object()->term_id
          );
          $productsQuery = new WP_Query( $queryArray );

          // var_dump($wp_query->get_queried_object());
          ?>

          <?php get_template_part('loop-products'); ?>


        </div>

      </section>



    </div>

  </main>

<?php get_footer(); ?>
