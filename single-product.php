<?php get_header(); ?>


<?php
// get value
$applications = get_field('application');
$properties = get_field('property');
$compositions = get_field('composizione');

?>
<main>
  <section class="collectionDetail collectionPage">
    <div class="container">
      <div class="collectionPage-heading collectionDetail-heading">
        <div class="collectionDetail-headingWrapper">
          <?php $terms = get_the_terms($post->ID, 'collection');
          // print_r($terms);
          if ($terms->count > 1) {
            foreach ($terms as $term) {
              if ($term->parent == 0) { ?>
                <?php $logo = get_field('collection_logo', $term);
                if ($logo) { ?>
                  <img src="<?php echo $logo; ?>" class="collectionPage-logo" />
              <?php
                }
              }
            }
          } else {
            $term = $terms[0];
            $logo = get_field('collection_logo', $term);
            if ($logo) { ?>
              <img src="<?php echo $logo; ?>" class="collectionPage-logo" />
          <?php
            }
          }
          ?>

          <h1 class="h1 collectionPage-title"><?php echo the_title(); ?></h1>
        </div>
        <div class="backBtn-wrapper">
          <a href="javascript:history.back()">Back</a>
        </div>


      </div>

      <div class="collectionDetail-row">
        <div class="collectionDetail-content">
          <div class="collectionDetail-desc content-config">
            <?php echo the_content(); ?>
          </div>
          <div class="collectionDetail-info">
            <div class="collectionDetail-info__content">
              <h4 class="h4">Application</h4>
              <?php
              foreach ($applications as $application) {

                echo '<p class="">' . $application . '</p>';
              }
              ?>
            </div>
            <div class="collectionDetail-info__content">
              <h4 class="h4">Composition</h4>
              <div class="collectionDetail-info__flex">
                <?php if (have_rows("composizione")) :
                  $x = 0;
                ?>
                  <?php while (have_rows("composizione")) : the_row();
                    $composition_number = get_sub_field("percentuale");
                    $composition_name = get_sub_field("materiale");
                    $x++;
                    if ($x == 3) {
                      break;
                    }
                  ?>
                    <div>
                      <p class=" collectionDetail-info__bold"><?php echo $composition_number; ?></p>
                      <p class="body"><?php echo $composition_name; ?></p>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>

            </div>
            <div class="collectionDetail-info__content">
              <h4 class="h4">Weight</h4>
              <?php $rows = get_field('composizione');
              if ($rows) {
                $last_row = $rows[2];
                $last_row_number = $last_row['percentuale'];
                $last_row_name = $last_row['materiale'];
              }
              ?>
              <p class="collectionDetail-info__bold"><?php echo $last_row_number; ?></p>
              <p class="body"><?php echo $last_row_name; ?></p>

            </div>
          </div>
        </div>
        <?php
        $productimg = get_the_post_thumbnail_url();
        if ($productimg) {
        ?>
          <div class="collectionDetail-image">
            <div class="rto-box">

              <img src="<?php echo $productimg; ?>" alt="">


            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <section class="collectionFeatures">
    <div class="container">
      <h2 class="collectionDetail-title h2">
        technical features
      </h2>
      <ul class="collectionFeatures-row">

        <?php
        $features = get_the_terms($post->ID, 'features');
        foreach ($features as $feature) { ?>
          <div class="col-4 col-md-2 col-xl text-center feature-box">
            <?php
            $logo = get_field('feature_logo', $feature);
            ?>
            <li class="collectionFeatures-item">
              <img src="<?php if ($logo) {
                          echo $logo;
                        } else {
                          echo '/wp-content/uploads/2022/07/features-image-4.svg';
                        }
                        ?>" alt="">
              <p class="collectionFeatures-title body">
                <?php echo $feature->name;
                ?>
              </p>
            </li>
          </div>
        <?php } ?>
      </ul>
    </div>
  </section>
  <section class="collectionTreatments">
    <div class="container">
      <h2 class="collectionDetail-title h2">
        Available treatment
      </h2>
      <div class="collectionTreatments-row">
        <div class="collectionTreatments-col">
          <ul class="collectionTreatments-list collectionFeatures-row">
            <?php
            $treatments = get_the_terms($post->ID, 'treatments');
            foreach ($treatments as $treatment) { ?>
              <?php
              $logo = get_field('treatment_logo', $treatment);
              //var_dump($treatmentlogo);
              ?>
              <li class="collectionTreatments-item collectionFeatures-item">
                <img src="<?php if ($logo) {
                            echo $logo;
                          } else {
                            echo '/wp-content/uploads/2022/07/treatments-image-3.png';
                          }
                          ?>" alt="">
                <p class="body"><?php echo $treatment->name ?></p>
              </li>
            <?php } ?>

          </ul>
        </div>
        <div class="collectionTreatments-col">
          <ul class="collectionTreatments-list collectionFeatures-row">
            <?php

            $certificates = get_the_terms($post->ID, 'certificates');
            foreach ($certificates as $certificate) { ?>
              <li class="collectionTreatments-item collectionFeatures-item">
                <img src="<?php $certificate_logo = get_field('certificate_logo', $certificate);
                          if ($certificate_logo) {
                            echo $certificate_logo;
                          } else {
                            echo '/wp-content/uploads/2022/07/partner-logo-9-1.svg';
                          }
                          ?>" alt="">

                <!-- <p class="body"><?php //echo $certificate->name;
                                      //var_dump($certificate_logo);
                                      ?></p> -->
              </li>
            <?php } ?>

          </ul>
        </div>
      </div>
      <div class="collectionDownload-wrapper">
        <a href="javascript:return false;" class="btn btn-green col-3">
          <div class="download-item">
            Download Technical Sheet
          </div>
        </a>
        <a href="javascript:return false;" class="btn btn-green col-3">
          <div class="download-item">
            Download Article page
          </div>
        </a>
      </div>
      <div class="flipbookContainer flip-book-container" id="technical-sheet" data-src="<?php echo the_field("technical_sheet"); ?>">
        <a class="download-close">
        </a>
      </div>
      <div class="flipbookContainer flip-book-container" id="article-page" data-src="<?php echo the_field("color_card"); ?>">
        <a class="download-close">
        </a>
      </div>
    </div>
  </section>


  <section class="collectionRelated">
    <div class="container">
      <div class="collectionRelated-row collectionDetail-row">
        <?php
        $terms = get_the_terms($post_id, 'collection');
        $term_ids = wp_list_pluck($terms, 'term_id');
        $products = new WP_Query(array(
          'post_type' => 'product',
          'tax_query' => array(
            array(
              'taxonomy' => 'collection',
              'field' => 'id',
              'terms' => $term_ids,
              'operator' => 'IN' //Or 'AND' or 'NOT IN'
            )
          ),
          'posts_per_page' => 2,
          'ignore_sticky_posts' => 1,
          'orderby' => 'date',
          'post__not_in' => array($post->ID)
        ));
        ?>

        <?php
        while ($products->have_posts()) :
          $products->the_post();
        ?>
          <a href="<?php echo get_permalink(); ?>" class="collectionPage-fabric <?php $terms = get_the_terms($post->ID, 'collection');
                                                                                foreach ($terms as $term) {
                                                                                  echo $term->slug . '-collection ';
                                                                                } ?>">
            <h5 class="collectionPage-fabric__title ">
              <?php the_title(); ?>
            </h5>
            <?php if (get_field('product_new_arrive')) { ?>
              <p class="collectionPage-newArticle"> New article</p>
            <?php } ?>
            <div class="collectionPage-fabric__image rto-box">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
            </div>
            <div class="collectionPage-fabric__bottom">
              <?php // Check rows existexists.
              if (have_rows('composizione')) :

                // Loop through rows.
                while (have_rows('composizione')) : the_row();

                  // Load sub field value.
                  $percent = get_sub_field('percentuale');
                  $material = get_sub_field('materiale');
                  // Do something...
              ?>
                  <div class="collectionPage-fabric__desc">
                    <div class="collectionPage-fabric__number"><?php echo $percent ?></div>
                    <div class="collectionPage-fabric__material"><?php echo $material ?></div>
                  </div>
              <?php
                // End loop.
                endwhile;
              endif;
              ?>
            </div>

          </a>
          <!-- <div class="collectionRelated-item">
            <div class="collectionRelated-title h4">
              <?php //the_title(); 
              ?>
            </div>
            <div class="collectionRelated-image">
              <div class="rto-box">
                <img src="<?php //echo get_the_post_thumbnail_url(); 
                          ?>" alt="">
              </div>
            </div>
          </div> -->
        <?php
        endwhile;
        wp_reset_query();
        ?>
        <!-- </div> -->
        <!-- 
        <div class="collectionRelated-item">
          <div class="collectionRelated-title h4">
            n212 sand rec
          </div>
          <div class="collectionRelated-image">
            <div class="rto-box">
              <img src="/src/assets/images/related-image-1.png" alt="">
            </div>
          </div>
        </div>
        <div class="collectionRelated-item">
          <div class="collectionRelated-title h4">
            n212 sand rec
          </div>
          <div class="collectionRelated-image">
            <div class="rto-box">
              <img src="/src/assets/images/related-image-1.png" alt="">
            </div>
          </div>
        </div> -->

      </div>
    </div>
  </section>

</main>


<?php get_footer(); ?>