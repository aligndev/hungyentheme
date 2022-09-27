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
        <?php $terms = get_the_terms($post->ID, 'collection');
        if (count($terms) > 1) {
          foreach ($terms as $term) {
            if ($term->parent == 0) { ?>
              <img src="<?php $logo = get_field('collection_logo', $term);
                        if ($logo) {
                          echo $logo;
                        } ?>" class="collectionPage-logo" />
          <?php
            }
          }
        } else {
          $term = $terms[0]; ?>
          <img src="<?php $logo = get_field('collection_logo', $term);
                    if ($logo) {
                      echo $logo;
                    } ?>" class="collectionPage-logo" />
        <?php
        }
        ?>

        <h1 class="h1 collectionPage-title"><?php echo the_title(); ?></h1>

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
                      <p class="h5 collectionDetail-info__bold"><?php echo $composition_number; ?></p>
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
        <div class="collectionDetail-image">
          <div class="rto-box">
            <?php //echo the_post_thumbnail_url(); 
            ?>
            <img src="<?php $productimg = get_the_post_thumbnail_url();
                      if ($productimg) {
                        echo $productimg;
                      } else {
                        echo ASSETS . '/images/demo-collection-img.png';
                      }  //the_field("collection_image")
                      ?>" alt="">
          </div>
        </div>
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
        <a href="<?php echo the_field("collection_technical_sheet"); ?>" download class="btn btn-green col-3">
          Download Technical Sheet
        </a>
        <a href="<?php echo the_field("collection_technical_sheet"); ?>" download class="btn btn-green col-3">
          Download Article page
        </a>
      </div>

    </div>
  </section>
  <section class="collectionRelated">
    <div class="container">
      <div class="collectionRelated-row collectionDetail-row">
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
        </div>
      </div>
    </div>
  </section>
</main>


<?php get_footer(); ?>