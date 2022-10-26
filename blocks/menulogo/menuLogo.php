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
<div class="menuCats">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php if (have_rows('menu_collection')) :
                while (have_rows('menu_collection')) : the_row();
                    $title_collection = get_sub_field('menu_collection_title');
                    $link_collection = get_sub_field('menu_collection_link');
                    $image_collection = get_sub_field('menu_collection_image');
                    $isShow_collection = get_sub_field('menu_collection_update_option');
            ?>
                    <a href="<?php echo $link_collection; ?>" class="swiper-slide swiper-item collection-fabric__item">
                        <div class="collection-fabric__image">
                            <img src="<?php echo $image_collection; ?>" alt="" />
                        </div>
                        <div class="collection-fabric__title"><?php echo $title_collection; ?></div>
                        <?php if ($isShow_collection) {
                        ?>
                            <p class="collection-notify">updated</p>
                        <?php
                        } ?>
                    </a>
            <?php
                endwhile;
            endif;
            ?>
            <!-- <a href="/collection/recycle" class="swiper-slide swiper-item collection-fabric__item">
                <div class="collection-fabric__image">
                    <img src="<?php // echo ASSETS . '/images/fabric-icon-3.svg'; 
                                ?>" alt="" />
                </div>
                <div class="collection-fabric__title">Recycled</div>
            </a>
            <a href="/collection/Virgin" class="swiper-slide swiper-item collection-fabric__item">
                <div class="collection-fabric__image">
                    <img src="<?php echo ASSETS . '/images/fabric-icon-1.svg'; ?>" alt="" />
                </div>
                <div class="collection-fabric__title">Virgin</div>
            </a>
            <a href="/collection/shiny" class="swiper-slide swiper-item collection-fabric__item">
                <div class="collection-fabric__image">
                    <img src="/wp-content/uploads/2022/09/Shiny-logo.svg" alt="" />
                </div>
                <div class="collection-fabric__title">
                    Shiny
                </div>
            </a>
            <a href="/collection/Xlance" class="swiper-slide swiper-item collection-fabric__item">
                <div class="collection-fabric__image">
                    <img src="<?php //echo ASSETS . '/images/fabric-icon-6.svg'; 
                                ?>" alt="" />
                </div>
                <div class="collection-fabric__title">Xlance</div>
            </a>
            <a href="/collection/digital-print" class="swiper-slide swiper-item collection-fabric__item">
                <div class="collection-fabric__image">
                    <img src="<?php //echo ASSETS . '/images/fabric-icon-7.svg'; 
                                ?>" alt="" />
                </div>
                <div class="collection-fabric__title">Digital Print</div>
            </a>
            <a href="/collection/eco-and-circularity" class="swiper-slide swiper-item collection-fabric__item">
                <div class="collection-fabric__image">
                    <img src="<?php //echo ASSETS . '/images/fabric-icon-5.svg'; 
                                ?>" alt="" />
                </div>
                <div class="collection-fabric__title">Eco & Circularity</div>
            </a> -->
        </div>
    </div>
</div>
<div class="collection-cta">
    <div class="collection-cta__col">
        <a href="/download-color-card/" class="btn btn-green collection-cta__text">
            Color Card Preview
        </a>
    </div>
    <div class="collection-cta__col">
        <a href="/download-fabric-collections/" class="btn btn-green collection-cta__text">
            Collection Book Preview
        </a>
    </div>
</div>
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