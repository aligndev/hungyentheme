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
                <?php if (is_active_sidebar('header-menu-logo-wrapper')) dynamic_sidebar('header-menu-logo-wrapper');  ?>
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
                    <?php echo wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_class' => 'nav-bar__inner', 'add_li_class'  => 'nav-bar__item'));
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