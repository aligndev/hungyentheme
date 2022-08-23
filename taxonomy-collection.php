<?php get_header(); ?>
<main class="wrapper" data-barba="container" data-barba-namespace="recycle">
    <section class="collectionPage">
      <div class="container">
        <div class="collectionPage-heading">
          <img src="<?php echo the_field('collection_logo'); ?>" class="collectionPage-logo" />
          <h1 class="h1 collectionPage-title">
            <?php $term = get_queried_object(); echo $term->name;?>
          </h1>
        </div>
        <div class="collectionPage-hero">
            <div class="collectionPage-hero__item">
              <div class="rto-box">
                <img src="/assets/images/save-energy-banner.png" alt="">
              </div>
            </div>
            </div>
            <div class="collectionPage-hero__item">
              <div class="rto-box">
                <img src="/assets/images/carbon-footprint-banner.png" alt="">
              </div>
            </div>
            <div class="collectionPage-hero__item">
              <div class="rto-box">
                <img src="/assets/images/collection-detail-image-1.png" alt="">
              </div>
            </div>
        </div>
        <div class="collectionPage-category">
          <div class="collectionPage-filter col-4">
            <div class="collectionPage-filter__button btn btn-black">
              <img src="<?php echo ASSETS . "/images/polyamide-icon.svg" ?>" />
              <p>Polyamide Recycled</p>
            </div>
            <div class="collectionPage-filter__button btn btn-black">
              <img src="<?php echo ASSETS . "/images/polyester-icon.svg" ?>" />
              <p>Polyester Recycled</p>
            </div>
            <div class="collectionPage-download">
              <a href="#" download class="collectionPage-download__button">
                <img src="<?php echo ASSETS . "/images/arrow-down-circle.svg" ?>" />
                <p>Download Polyamide Color Card 2023</p>
              </a>
              <a href="#" download class="collectionPage-download__button">
                <img src="<?php echo ASSETS . "/images/arrow-down-circle.svg" ?>" />
                <p>Download Polyester Color Card 2023</p>
              </a>
            </div>
            <div class="collectionPage-property">
              <div class="collectionPage-property__group">
                <h4 class="collectionPage-property__title h4">
                  Filter by Properties
                </h4>
                <a href="" class="body" id="clear-all" onclick="return false;"> Clear all filter</a>
              </div>
              <div class="collectionPage-property__group">
                <div class="collectionPage-property__item">
                  Soft touch
                  <input type="checkbox" name="soft touch" id="soft touch" />
                  <label for="soft touch" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  Thick touch
                  <input type="checkbox" name="thick touch" id="thick touch" />
                  <label for="thick touch" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  Flat fabric
                  <input type="checkbox" name="flat fabric" id="flat fabric" />
                  <label for="flat fabric" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  Shape retention
                  <input type="checkbox" name="shape retention" id="shape retention" />
                  <label for="shape retention" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  Draping
                  <input type="checkbox" name="draping" id="draping" />
                  <label for="draping" class="checkmark"> </label>
                </div>
              </div>
              <div class="collectionPage-property__group">
                <div class="collectionPage-property__item">
                  Texturized yarn
                  <input type="checkbox" name="texturized yarn" id="texturized yarn" />
                  <label for="texturized yarn" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  No see through
                  <input type="checkbox" name="no see through" id="no see through" />
                  <label for="no see through" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  Extra comfort
                  <input type="checkbox" name="extra comfortc" id="extra comfort" />
                  <label for="extra comfort" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  Perfect fit
                  <input type="checkbox" name="perfect fit" id="perfect fit" />
                  <label for="shape retention" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  Two way stretch
                  <input type="checkbox" name="two way stretch" id="two way stretch" />
                  <label for="two way stretch" class="checkmark"> </label>
                </div>
              </div>
              <div class="collectionPage-property__group">
                <div class="collectionPage-property__item">
                  Fabric for swimwear
                  <input type="checkbox" name="fabric for swimwear" id="fabric for swimwear" />
                  <label for="fabric for swimwear" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  Fabric for beachwear
                  <input type="checkbox" name="fabric for beachwear" id="fabric for beachwear" />
                  <label for="fabric for beachwear" class="checkmark">
                  </label>
                </div>
                <div class="collectionPage-property__item">
                  Fabric for performance swimwear

                  <input type="checkbox" name="fabric for performance swimwear" id="fabric for performance swimwear" />
                  <label for="fabric for performance swimwear" class="checkmark">
                  </label>
                </div>
                <div class="collectionPage-property__item">
                  Fabric for yoga/activewear

                  <input type="checkbox" name="fabric for yoga/activewear" id="fabric for yoga/activewear" />
                  <label for="fabric for yoga/activewear" class="checkmark">
                  </label>
                </div>
                <div class="collectionPage-property__item">
                  Fabric for underwear
                  <input type="checkbox" name="fabric for underwear" id="fabric for underwear" />
                  <label for="fabric for underwear" class="checkmark">
                  </label>
                </div>
              </div>
              <div class="collectionPage-property__group">
                <div class="collectionPage-property__item">
                  High-cloride resistance
                  <input type="checkbox" name="high-cloride resistance" id="high-cloride resistance" />
                  <label for="high-cloride resistance" class="checkmark">
                  </label>
                </div>
                <div class="collectionPage-property__item">
                  Chloride proof
                  <input type="checkbox" name="chloride proof" id="chloride proof" />
                  <label for="chloride proof" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  Moisture management

                  <input type="checkbox" name="moisture management" id="Moisture management" />
                  <label for="moisture management" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  UV Protection

                  <input type="checkbox" name="uv protection" id="uv protection" />
                  <label for="uv protection" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  UV resistant
                  <input type="checkbox" name="uv resistant" id="uv resistant" />
                  <label for="uv resistant" class="checkmark"> </label>
                </div>
                <div class="collectionPage-property__item">
                  Oil and suncreen cream resistant
                  <input type="checkbox" name="oil and suncreen cream resistant"
                    id="oil and suncreen cream resistant" />
                  <label for="oil and suncreen cream resistant" class="checkmark">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="collectionPage-list col-8">
            <?php

              $the_query = new WP_Query( array(
                'post_type' => 'collections', //Post Type Slug
                'tax_query' => array(
                    array (
                        'taxonomy' => 'collection',
                        'field' => 'slug',
                        'terms' => $term->slug,
                    )
                ),
            ) );

            while ( $the_query->have_posts() ) :
                $the_query->the_post();

                ?>
              <a href="<?php the_permalink(); ?> " class="collectionPage-fabric">
                <div class="collectionPage-fabric__title h4">
                  <?php echo the_title(); ?>
                </div>
                <div class="collectionPage-fabric__image rto-box">
                  <img src="<?php the_field("collection_image") ?>" alt="">
                </div>
                <div class="collectionPage-fabric__bottom">
                  <?php if(have_rows("collection_composition")) :
                    ?>
                      <?php while(have_rows("collection_composition")) : the_row();
                        $composition_number = get_sub_field("collection_composition_number");
                        $composition_name = get_sub_field("collection_composition_name");
                      ?>
                      <div class="collectionPage-fabric__desc">
                        <div class="collectionPage-fabric__number"><?php echo $composition_number; ?></div>
                        <div class="collectionPage-fabric__material"><?php echo $composition_name; ?></div>
                      </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  <div class="collectionPage-fabric__desc">
                  <?php if(have_rows("collection_weight")) :
                  ?>
                    <?php while(have_rows("collection_weight")) : the_row();
                      $weight_number = get_sub_field("collection_weight_number");
                      $weight_text = get_sub_field("collection_weight_text");
                    ?>
                        <div class="collectionPage-fabric__number"><?php echo $weight_number; ?></div>
                        <div class="collectionPage-fabric__material"><?php echo $weight_text; ?></div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                  </div>
                </div>
              </a>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>