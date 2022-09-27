<?php get_header(); ?>


<main>
    <div class="career-content__wrapper">
        <div class="container">
            <?php

            echo '<h4>' . get_the_title() . '</h4>';
            echo '<p class="career-date"> AD | ' . get_the_date('d M Y') . '</p>';
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>


</main>



<?php get_footer(); ?>