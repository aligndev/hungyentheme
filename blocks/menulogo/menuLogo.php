<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'menu-logo-block';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.

?>

<div class="collection-logo logoJs">
    <div class="collection-row swiper-container">
        <div class="swiper-wrapper">
            <?php
            if (have_rows('menu_logo')) :
                while (have_rows('menu_logo')) : the_row();
                    $link = get_sub_field('menu_logo_link');
                    $image = get_sub_field('menu_logo_image');
            ?>
                    <div class="collection-logo__item swiper-slide swiper-item">
                        <a href="<?php echo ($link) ?  $link :  "#";  ?>">
                            <img src="<?php echo $image ?>" alt="" class="collection-logo__image" />
                        </a>

                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>