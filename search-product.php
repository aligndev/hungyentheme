<?php get_header(); ?>

<div class="blog-ser  blog-mobile">
    <div class="blog-ser-wrap">
        <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
            <input style="display:none;" type="checkbox" name="type" value="post" checked />
            <!-- <input style="display:none;" type="checkbox" name="type" value="product" checked /> -->
            <div class="catalog-search-wrap">
                <input type="search" name="s" class="rs-form catalog-search-inp" placeholder="Search our blogs" />
                <img class="catalog-search-icon" src="<?php echo get_template_directory_uri() . '/images/search-ic.svg'; ?>" alt="" />
            </div>
        </form>
    </div>
</div>


<div class="blog-banner ">
    <div class="blog-banner-title">
        <div class="container">
            <h1 class="title-h1">
                Result for: "<?php global $wp_query;
                                echo $wp_query->query['s']; ?>"
            </h1>
        </div>
    </div>
</div>

<div class="catalog-list ">
    <div class="container">
        <div class="catalog-list-wrap">
            <?php
            // $total_results = $wp_query->found_posts;
            // var_dump($total_results);
            ?>
            <?php
            while (have_posts()) :
                the_post();
            ?>
                <?php
                $image = get_the_post_thumbnail_url();
                $posttype = get_post_type();
                if ($posttype == 'post') {
                    echo 'this is post type'; ?>

                    <div class="col-4">
                        <div class="explore-item">
                            <a href="<?php echo get_permalink(); ?>" class="explore-item-img ratio-box">
                                <img src="<?php echo $image; ?>" alt="" />
                            </a>
                            <a href="<?php echo get_permalink(); ?>" class="explore-item-title title-h4">
                                <?php the_title(); ?>
                            </a>
                            <div class="explore-item-txt swiper-no-swiping">
                                <?php the_excerpt(); ?>
                                <?php //the_terms($post->ID, 'category');
                                echo get_post_type(); ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            <?php
            endwhile;
            ?>

            <?php
            while (have_posts()) :
                the_post();
            ?>
                <?php
                $image = get_the_post_thumbnail_url();
                $posttype = get_post_type();
                if ($posttype == 'product') {
                    echo 'this is product type'; ?>

                    <div class="col-4">
                        <div class="explore-item">
                            <a href="<?php echo get_permalink(); ?>" class="explore-item-img ratio-box">
                                <img src="<?php echo $image; ?>" alt="" />
                            </a>
                            <a href="<?php echo get_permalink(); ?>" class="explore-item-title title-h4">
                                <?php the_title(); ?>
                            </a>
                            <div class="explore-item-txt swiper-no-swiping">
                                <?php the_excerpt(); ?>
                                <?php //the_terms($post->ID, 'category');
                                echo get_post_type(); ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            <?php
            endwhile;
            ?>
        </div>
    </div>
</div>






<?php get_footer(); ?>