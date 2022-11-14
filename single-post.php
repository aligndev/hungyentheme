<?php get_header(); ?>
<main class="wrapper" data-barba="container" data-barba-namespace="home">
    <section class="newsDetail pt">
        <div class="container">
            <h2 class="h2 newsDetail-h1">
                <?php the_title(); ?>
            </h2>
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
            <div class="newsDetail-hero">
                <div class="rto-box">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>
            </div>
            <div class="newsDetail-body content-config">
                <?php echo get_the_content(); ?>
            </div>
        </div>
    </section>
    <section class="news mt">
        <div class="container">
            <h2 class="h2 text-uppercase news-title">More recent news</h2>
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,

                );

                $loop = new WP_Query($args);

                while ($loop->have_posts()) : $loop->the_post();

                ?>
                    <a href="<?php echo get_permalink(); ?>" class="news-item col-4">
                        <div class="">
                            <div class="rto-box news-item__image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                            </div>
                            <div class="news-item__content">
                                <h5 class="news-item__title">
                                    <?php print the_title(); ?>
                                </h5>
                                <p class="news-item__desc">
                                    <?php echo wp_trim_words(get_the_content(), 50); ?>
                                </p>
                            </div>
                        </div>
                    </a>
                <?php
                endwhile;

                wp_reset_postdata();  ?>
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