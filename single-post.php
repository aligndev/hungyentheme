<?php get_header(); ?>
<main class="wrapper" data-barba="container" data-barba-namespace="home">
    <section class="newsDetail pt">
        <div class="container">
            <h2 class="h2 newsDetail-h1">
                <?php the_title(); ?>
            </h2>
            <?php if (the_excerpt()) { ?>
                <p class="newsDetail-excerpt"><?php the_excerpt(); ?></p>
            <?php } ?>
            <ul class="newsDetail-category">
                <li class="newsDetail-item newsDetail-time">
                    AD | <?php echo get_the_date('d M Y'); ?>
                </li>
                <?php $post_tags = get_the_tags();
                if ($post_tags) {
                    foreach ($post_tags as $tag) {
                ?>
                        <li class="newsDetail-item newsDetail-hashtag">
                            <?php echo '#' . $tag->name; ?>
                        </li>
                <?php

                    }
                } ?>
            </ul>
            <!-- <div class="newsDetail-hero">
                <div class="rto-box">
                    <img src="<?php //echo get_the_post_thumbnail_url(); 
                                ?>" alt="">
                </div>
            </div> -->
            <div class="newsDetail-body">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <section class="news mt">
        <div class="container">
            <h2 class="h2 text-uppercase news-title">More recent news</h2>
            <div class="row">
                <?php echo do_shortcode('[piotnetgrid id=4454 type=grid]');
                echo do_shortcode('[piotnetgrid id=4457 type=facet grid=4454]'); ?>
            </div>
        </div>
    </section>


    <!-- <div class="sharebutton-wrapper">
        <a href="#" class=""><img src="/wp-content/uploads/2022/11/share-button-img_3.png"></a>
        <a href="#" class=""><img src="/wp-content/uploads/2022/11/share-button-img_2.png"></a>
        <a href="#" class=""><img src="/wp-content/uploads/2022/11/share-button-img_1.png"></a>
    </div> -->
</main>

<?php get_footer(); ?>