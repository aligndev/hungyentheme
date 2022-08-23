<?php get_header(); ?>


<main>
    <section class="collectionDetail collectionPage">
      <div class="container">
        <div class="collectionPage-heading collectionDetail-heading">
          <img src="<?php echo the_field('collection_logo'); ?>" class="collectionPage-logo" />
          <h1 class="h1 collectionPage-title"><?php echo the_title();?></h1>
        </div>
        <div class="collectionDetail-row">
          <div class="collectionDetail-content">
            <div class="collectionDetail-desc content-config">
              <?php echo the_field('collection_description'); ?>
            </div>
            <div class="collectionDetail-info">
              <div class="collectionDetail-info__content">
                <h4 class="h4">Application</h4>
                <p class="body">Swimwear</p>
                <p class="body">Beachwear</p>
              </div>
              <div class="collectionDetail-info__content">
                <h4 class="h4">Composition</h4>
                <div class="collectionDetail-info__flex">
                  <?php if(have_rows("collection_composition")) :
                  ?>
                    <?php while(have_rows("collection_composition")) : the_row();
                      $composition_number = get_sub_field("collection_composition_number");
                      $composition_name = get_sub_field("collection_composition_name");
                    ?>
                      <div>
                        <p class="body collectionDetail-info__bold"><?php echo $composition_number; ?></p>
                        <p class="body"><?php echo $composition_name; ?></p>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>

              </div>
              <div class="collectionDetail-info__content">
                <h4 class="h4">Weight</h4>
                <?php if(have_rows("collection_weight")) :
                  ?>
                    <?php while(have_rows("collection_weight")) : the_row();
                      $weight_number = get_sub_field("collection_weight_number");
                      $weight_text = get_sub_field("collection_weight_text");
                    ?>
                        <p class="body collectionDetail-info__bold"><?php echo $weight_number; ?></p>
                        <p class="body"><?php echo $weight_text; ?></p>
                    <?php endwhile; ?>
                  <?php endif; ?>

              </div>
            </div>
          </div>
          <div class="collectionDetail-image">
            <div class="rto-box">
              <img src="<?php the_field("collection_image") ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="collectionFeatures">
      <div class="container">
        <div class="collectionDetail-title h1">
          technical features
        </div>
        <ul class="collectionFeatures-row">
          <?php if(have_rows("collection_technical_features")) : ?>
            <?php while(have_rows("collection_technical_features")) : the_row();
              $technical_image = get_sub_field("technical_features_image");
              $technical_name = get_sub_field("technical_features_name");
            ?>
              <li class="collectionFeatures-item">
                <img src="<?php echo $technical_image ?>" alt="">
                <p class="collectionFeatures-title body">
                  <?php echo $technical_name ?>
                </p>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>
    </section>
    <section class="collectionTreatments">
      <div class="container">
        <div class="collectionDetail-title h1">
          technical features
        </div>
        <div class="collectionTreatments-row">
          <div class="collectionTreatments-col">
            <ul class="collectionTreatments-list collectionFeatures-row">
              <?php if(have_rows("collection_available_treatments_column_left")) : ?>
              <?php while(have_rows("collection_available_treatments_column_left")) : the_row();
                $avaiable_treatments_image = get_sub_field("avaiable_treatments_image");
                $avaiable_treatments_name = get_sub_field("avaiable_treatsments_name");
              ?>
                <li class="collectionTreatments-item collectionFeatures-item">
                  <img src="<?php echo $avaiable_treatments_image ?>" alt="">
                  <p class="body"><?php echo $avaiable_treatments_name ?></p>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
            </ul>
          </div>
          <div class="collectionTreatments-col">
            <ul class="collectionTreatments-list collectionFeatures-row">
              <?php if(have_rows("collection_available_treatments_column_right")) : ?>
                <?php while(have_rows("collection_available_treatments_column_right")) : the_row();
                  $avaiable_treatments_logo = get_sub_field("avaiable_treatment_logo");
                ?>
                  <li class="collectionTreatments-item collectionFeatures-item">
                    <img src="<?php echo $avaiable_treatments_logo ?>" alt="">
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <a href="<?php echo the_field("collection_technical_sheet"); ?>" download class="btn btn-green col-3">
          Download Technical Sheet
        </a>
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