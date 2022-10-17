<?php get_header(); ?>
<?php $term = get_queried_object(); ?>
<main class="wrapper" data-barba="container" data-barba-namespace="recycle">
  <section class="collectionPage">

    <div class="collectionPage--top">
      <div class="container">
        <div class="collectionPage-heading-wrapper">
          <div class="collectionPage-heading">
            <img src="<?php echo get_field('collection_logo', $term); ?>" class="collectionPage-logo" />
            <h1 class="h1 collectionPage-title">
              <?php echo $term->name;  ?>
            </h1>
          </div>
          <?php $description = get_field("collection_description", $term);
          if ($description) { ?>
            <h2 class="h2 collectionPage-desc">
              <?php echo get_field("collection_description", $term); ?>
            </h2>
          <?php } ?>
          <p class="body collectionPage-sub">
            <?php echo get_field("collection_subtitle", $term); ?>
          </p>

        </div>

      </div>
      <?php
      $collection_imgs = get_field('collection_image', $term);
      $collection_mobile_imgs = get_field('collection_image_mobile', $term);

      if ($collection_mobile_imgs) {
        if ($collection_imgs) { ?>
          <div class="collectionPage-hero mobile-hidden fadeJs">
            <div class="swiper-container">
              <div class="swiper-wrapper">

                <?php foreach ($collection_imgs as $collection_img) :
                ?>

                  <div class="collectionPage-hero__item swiper-slide">
                    <div class="rto-box">
                      <img src="<?php echo $collection_img; ?>" />
                    </div>
                  </div>
                <?php endforeach; ?>

              </div>
              <div class="collectionPage-text">
                <?php $collection_text = get_field('collection_text', $term);
                if ($collection_text) {
                  echo $collection_text;
                }
                ?>
              </div>
              <div class="swiper-button-next swiper-button-lg"></div>
              <div class="swiper-button-prev swiper-button-lg"></div>
              <div class="swiper-pagination pagination-hide-on-desktop"></div>
            </div>
          </div>
        <?php }
        ?>
        <?php
        if ($collection_mobile_imgs) { ?>
          <div class="collectionPage-hero desktop-hidden fadeJs">
            <div class="swiper-container">
              <div class="swiper-wrapper">

                <?php foreach ($collection_mobile_imgs as $collection_mobile_img) :
                ?>

                  <div class="collectionPage-hero__item swiper-slide">
                    <div class="rto-box">
                      <img src="<?php echo $collection_mobile_img; ?>" />
                    </div>
                  </div>
                <?php endforeach; ?>

              </div>
              <div class="collectionPage-text">
                <?php $collection_text = get_field('collection_text', $term);
                if ($collection_text) {
                  echo $collection_text;
                }
                ?>
              </div>
              <div class="swiper-button-next swiper-button-lg"></div>
              <div class="swiper-button-prev swiper-button-lg"></div>
              <div class="swiper-pagination pagination-hide-on-desktop"></div>
            </div>
          </div>
        <?php }
      } else {
        if ($collection_imgs) { ?>
          <div class="collectionPage-hero fadeJs">
            <div class="swiper-container">
              <div class="swiper-wrapper">

                <?php foreach ($collection_imgs as $collection_img) :
                ?>

                  <div class="collectionPage-hero__item swiper-slide">
                    <div class="rto-box">
                      <img src="<?php echo $collection_img; ?>" />
                    </div>
                  </div>
                <?php endforeach; ?>

              </div>
              <div class="collectionPage-text">
                <?php $collection_text = get_field('collection_text', $term);
                if ($collection_text) {
                  echo $collection_text;
                }
                ?>
              </div>
              <div class="swiper-button-next swiper-button-lg"></div>
              <div class="swiper-button-prev swiper-button-lg"></div>
              <div class="swiper-pagination pagination-hide-on-desktop"></div>
            </div>
          </div>
      <?php }
      }
      ?>
    </div>

  </section>

  <?php
  $termid = $term->term_id;
  if ($termid == 17) {
    echo do_shortcode("[wp_reusable_render id='4038']");
  } elseif ($termid == 51) {
    echo do_shortcode("[wp_reusable_render id='4037']");
  } ?>

  <section class="collectionMain">
    <div class="container">
      <div class="collectionPage-category">
        <div class="collectionPage-filter col-3">
          <?php echo do_shortcode('[piotnetgrid id=3306 type=facet grid=3304]'); ?>
          <?php
          $postid = get_term_by('slug', 'polyamide-recycled', 'collection');
          ?>
          <div class="collectionPage-filter__main">
            <?php echo do_shortcode('[piotnetgrid id=3305 type=facet grid=3304]'); ?>
            <?php
            // $applications = get_field_object('application');
            // if ($applications) {
            //   foreach ($applications['choices'] as $key => $value) {
            //     echo $value;
            //   }
            // }
            // $properties = get_field_object('property');
            // if ($properties) {
            //   foreach ($properties['choices'] as $key => $value) {
            //     echo $value;
            //   }
            // }
            ?>

          </div>
          <div class="collectionPage-feature">
            <h4 class="featureTitle">GENERAL FEATURES</h4>
            <div class="featureList">
              <p class="feature">High Chlorine resistant*</p>
              <p class="feature">UV Protection</p>
              <p class="feature">Two Way stretch</p>
              <p class="feature">Comfort fit</p>
            </div>
          </div>
          <div class="collectionPage-download">
            <?php
            $x = 0;
            if (have_rows('collection_download_section', $term)) :
              while (have_rows('collection_download_section', $term)) : the_row();
                $text = get_sub_field('collection_download_name', $term);
                $file = get_sub_field('collection_download_file', $term);
                $x++;
            ?>
                <div class="download-item">
                  <a href="<?php echo $file; ?>" download class="collectionPage-download__button">
                    <img src="<?php echo ASSETS . "/images/arrow-down-circle.svg"; ?>" />
                    <p><?php echo $text; ?></p>
                  </a>
                </div>
                <div class="flipbookContainer flip-book-container" id="<?php echo "flipbook-" . $x ?>" data-src="<?php echo $file ?>">
                  <a class="download-close">
                  </a>
                </div>
            <?php

              endwhile;
            endif;
            ?>
          </div>


        </div>
        <div class="collectionPage-list col-9">
          <?php echo do_shortcode('[piotnetgrid id=3304 type=grid]'); ?>
        </div>
      </div>
    </div>
  </section>



</main>
<?php get_footer(); ?>