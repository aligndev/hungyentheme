<?php get_header(); ?>

<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>



<?php
if (is_page('career')) {
    get_footer('secondary');
} else {
    get_footer();
}
?>