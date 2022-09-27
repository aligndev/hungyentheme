<?php get_header(); ?>


<main>
    <section class="collectionDetail collectionPage">
      <div class="container">
        <div class="collectionPage-heading collectionDetail-heading">
          <img src="/src/assets/images/fabric-icon-3.svg" alt="" class="collectionPage-logo" />
          <h1 class="h1 collectionPage-title"><?php echo the_title();?></h1>
        </div>
        <div class="collectionDetail-row">
          <div class="collectionDetail-content">
            <p class="body collectionDetail-desc">
              Made with recycled fiber from 100% recycled material
            </p>
            <p class="body collectionDetail-desc">
              The revival of an old classic. Our best seller comes to a new life in its recycled version, without
              neglecting the original versatility and performance. To write a new success and sustainability STORY
              together
            </p>

            <div class="collectionDetail-info">
              <div class="collectionDetail-info__content">
                <h4 class="h4">Application</h4>
                <p class="body">Swimwear</p>
                <p class="body">Beachwear</p>
              </div>
              <div class="collectionDetail-info__content">
                <h4 class="h4">Composition</h4>
                <div class="collectionDetail-info__flex">
                  <div>
                    <p class="body collectionDetail-info__bold">80%</p>
                    <p class="body">Rec Nylon</p>
                  </div>
                  <div>
                    <p class="body collectionDetail-info__bold">20%</p>
                    <p class="body">Elastane</p>
                  </div>
                </div>

              </div>
              <div class="collectionDetail-info__content">
                <h4 class="h4">Weight</h4>
                <p class="body collectionDetail-info__bold">190</p>
                <p class="body">g/m2</p>
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
          <li class="collectionFeatures-item">
            <img src="/src/assets/images/features-image-1.svg" alt="">
            <p class="collectionFeatures-title body">
              UV protection
            </p>
          </li>
          <li class="collectionFeatures-item">
            <img src="/src/assets/images/features-image-2.svg" alt="">
            <p class="collectionFeatures-title body">
              Two way stretch
            </p>
          </li>
          <li class="collectionFeatures-item">
            <img src="/src/assets/images/features-image-3.svg" alt="">
            <p class="collectionFeatures-title body">
              High Chlorine
              <br>
              resistance
            </p>
          </li>
          <li class="collectionFeatures-item">
            <img src="/src/assets/images/features-image-4.svg" alt="">
            <p class="collectionFeatures-title body">
              Perfect fit
            </p>
          </li>
          <li class="collectionFeatures-item">
            <img src="/src/assets/images/features-image-5.svg" alt="">
            <p class="collectionFeatures-title body">
              Recycled
            </p>
          </li>
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
              <li class="collectionTreatments-item collectionFeatures-item">
                <img src="/src/assets/images/treatments-image-1.png" alt="">
                <p class="body">Antibacterial</p>
              </li>
              <li class="collectionTreatments-item collectionFeatures-item">
                <img src="/src/assets/images/treatments-image-2.png" alt="">
                <p class="body">Moisture management</p>
              </li>
              <li class="collectionTreatments-item collectionFeatures-item">
                <img src="/src/assets/images/treatments-image-3.png" alt="">
                <p class="body">Water repellent</p>
              </li>
            </ul>
          </div>
          <div class="collectionTreatments-col">
            <ul class="collectionTreatments-list collectionFeatures-row">
              <li class="collectionTreatments-item collectionFeatures-item">
                <img src="/src/assets/images/partner-logo-7.svg" alt="">
              </li>
              <li class="collectionTreatments-item collectionFeatures-item">
                <img src="/src/assets/images/partner-logo-1.svg" alt="">
              </li>
              <li class="collectionTreatments-item collectionFeatures-item">
                <img src="/src/assets/images/partner-logo-16.svg" alt="">
              </li>
            </ul>
          </div>
        </div>
        <a class="btn btn-green col-3">
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