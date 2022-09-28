<?php get_header(); ?>


<div class="search-header-wrapper">
    <div class="container">
        <h1 class="title-h1">
            Result for: "<?php global $wp_query;
                            echo $wp_query->query['s']; ?>"
        </h1>
        <div class="search-wrapper">
            <form class="search" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="search" name="s" placeholder="Find your fabric">
                <input type="hidden" name="post_type[]" value="product" />
                <!-- <input type="hidden" name="post_type[]" value="post" /> -->
            </form>
            <i class="fa fa-search"></i>
        </div>

    </div>
</div>


<div class="catalog-list ">
    <div class="container">
        <div class="catalog-list-wrap">
            <?php
            $results = $wp_query->found_posts;
            // var_dump($wp_query);
            if ($results >= 1) {
                while (have_posts()) :
                    the_post();
            ?>
                    <?php
                    $image = get_the_post_thumbnail_url();
                    $posttype = get_post_type();

                    if ($posttype == 'product') {
                    ?>
                        <a href="<?php echo get_permalink(); ?>" class="collectionPage-fabric">
                            <div class="collectionPage-fabric__title h4">
                                <?php the_title(); ?>
                            </div>
                            <div class="collectionPage-fabric__image rto-box">
                                <img src="<?php echo $image; ?>" alt="" />
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
                    <?php
                    }

                    ?>

            <?php
                endwhile;
            } else {
                echo '<h1> Not Found </h1>';
            }
            ?>
        </div>
    </div>
</div>






<?php get_footer(); ?>