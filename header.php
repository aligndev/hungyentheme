<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head() ?>
</head>

<body data-barba="wrapper" <?php body_class(); ?>>
    <div class="collection">
        <div class="collection-wrapper">
            <img src="<?php echo ASSETS . '/images/close-icon.svg'; ?>" alt="" class="collection-button" />
            <div class="container collection-inner">
                <!-- <div class="logoJs"> -->
                <div class="menuCats">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <a href="/collection/recycle" class="swiper-slide swiper-item collection-fabric__item">
                                <div class="collection-fabric__image">
                                    <img src="<?php echo ASSETS . '/images/fabric-icon-3.svg'; ?>" alt="" />
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
                                    <img src="<?php echo ASSETS . '/images/fabric-icon-6.svg'; ?>" alt="" />
                                </div>
                                <div class="collection-fabric__title">Xlance</div>
                            </a>
                            <a href="/collection/digital-print" class="swiper-slide swiper-item collection-fabric__item">
                                <div class="collection-fabric__image">
                                    <img src="<?php echo ASSETS . '/images/fabric-icon-7.svg'; ?>" alt="" />
                                </div>
                                <div class="collection-fabric__title">Digital Print</div>
                            </a>

                            <a href="/collection/eco-and-circularity" class="swiper-slide swiper-item collection-fabric__item">
                                <div class="collection-fabric__image">
                                    <img src="<?php echo ASSETS . '/images/fabric-icon-5.svg'; ?>" alt="" />
                                </div>
                                <div class="collection-fabric__title">Eco & Circularity</div>
                            </a>
                        </div>
                    </div>
                    <!-- </div> -->

                </div>

                <div class="collection-cta">
                    <div class="collection-cta__col">
                        <a href="/download-color-card/" class="btn btn-green collection-cta__text">
                            Review Our Color Cards 2023
                        </a>
                    </div>
                    <div class="collection-cta__col">
                        <a href="/download-fabric-collections/" class="btn btn-green collection-cta__text">
                            Review Our Collection Books
                        </a>
                    </div>
                </div>
                <?php if (is_active_sidebar('header-menu-logo-wrapper')) dynamic_sidebar('header-menu-logo-wrapper');  ?>
                <!-- <div class="collection-logo logoJs">
                    <div class="collection-row swiper-container">
                        <div class="swiper-wrapper">
                            <div class="collection-logo__item swiper-slide swiper-item">
                                <img src="/wp-content/uploads/2022/10/partnership-logo-1-min.png" alt="" class="collection-logo__image" />
                            </div>
                            <div class="collection-logo__item swiper-slide swiper-item">
                                <img src="wp-content/uploads/2022/10/partnership-logo-2-min.png" alt="" class="collection-logo__image" />
                            </div>
                            <div class="collection-logo__item swiper-slide swiper-item">
                                <img src="/wp-content/uploads/2022/10/partnership-logo-3-min.png" alt="" class="collection-logo__image" />
                            </div>
                            <div class="collection-logo__item swiper-slide swiper-item">
                                <img src="/wp-content/uploads/2022/10/partnership-logo-4-min.png" alt="" class="collection-logo__image" />
                            </div>
                            <div class="collection-logo__item swiper-slide swiper-item">
                                <img src="/wp-content/uploads/2022/10/partnership-logo-5-min.png" alt="" class="collection-logo__image" />
                            </div>
                            <div class="collection-logo__item swiper-slide swiper-item">
                                <img src="/wp-content/uploads/2022/10/partnership-logo-6-min.png" alt="" class="collection-logo__image" />
                            </div>
                            <div class="collection-logo__item swiper-slide swiper-item">
                                <img src="/wp-content/uploads/2022/10/partnership-logo-7-min.png" alt="" class="collection-logo__image" />
                            </div>
                            <div class="collection-logo__item swiper-slide swiper-item">
                                <img src="/wp-content/uploads/2022/10/partnership-logo-8-min.png" alt="" class="collection-logo__image" />
                            </div>
                            <div class="collection-logo__item swiper-slide swiper-item">
                                <img src="/wp-content/uploads/2022/10/partnership-logo-9-min.png" alt="" class="collection-logo__image" />
                            </div>
                            <div class="collection-logo__item swiper-slide swiper-item">
                                <img src="/wp-content/uploads/2022/10/partnership-logo-10-min.png" alt="" class="collection-logo__image" />
                            </div>


                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <header class="nav">
        <div class="nav-inner">
            <div class="nav-nav">
                <a href="<?php echo get_home_url(); ?>" class="nav-logo">
                    <img src="<?php echo ASSETS . '/images/nav-logo.svg'; ?>" alt="" />
                </a>

                <div class="nav-bar">

                    <ul class="nav-bar__inner">
                        <?php
                        ?>
                        <li class="nav-bar__item">
                            <a href="<?php echo esc_url(get_home_url());
                                        ?>" class="nav-link nav-text">Home</a>
                        </li>
                        <li class="nav-bar__item">
                            <a href="<?php echo esc_url(get_page_link('9'));
                                        ?>" class="nav-link nav-text">Who we are</a>
                        </li>
                        <li class="nav-bar__item">
                            <a href="<?php echo esc_url(get_page_link('11'));
                                        ?>" class="nav-link nav-text">Sustainability</a>
                        </li>
                        <li class="nav-bar__item">
                            <a href='javascript:void(0)' id="fabric-collection" class="nav-link nav-text">Fabric Collection</a>
                        </li>
                        <li class="nav-bar__item">
                            <a href="<?php echo esc_url(get_page_link('13'));
                                        ?>" class="nav-link nav-text">HY News</a>
                        </li>
                        <li class="nav-bar__item">
                            <a href="<?php echo esc_url(get_page_link('20'));
                                        ?>" class="nav-link nav-text">Contact</a>
                        </li>
                    </ul>
                    <?php //wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_class' => 'nav-bar__inner', 'add_li_class'  => 'nav-bar__item'));
                    ?>
                    <div class="nav-search hide-on-desktop">
                        <div class="nav-search__inner">
                            <input type="text" placeholder="Find your fabric" />
                            <img class="nav-icon" src="<?php echo ASSETS . '/images/search-icon.svg'; ?>" alt="" />
                        </div>
                    </div>
                </div>

                <div class="nav-search hide-on-mobile">
                    <div class="nav-search__inner">
                        <form class="search" action="<?php echo esc_url(home_url('/')); ?>">
                            <input type="search" name="s" placeholder="Find your fabric">
                            <input type="hidden" name="post_type[]" value="product" />
                            <button type="submit"><img class="nav-icon" src="<?php echo ASSETS . '/images/search-icon.svg';
                                                                                ?>" alt="" /></button>
                            <!-- <input type="hidden" name="post_type[]" value="post" /> -->
                        </form>


                    </div>
                </div>

                <div class="nav-burger">
                    <button>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </header>