<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<body>
<?php wp_body_open(); ?>
    <header>
        <section class="home" id="home">
            <div id="header">
                <a href="/" class="logo">
                    <div class="logo-bg">
                        <div class="logo-final">
                            <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="Logo">
                        </div>
                    </div>
                </a>
                <nav id="mainnav">
                    <button id="hamburger" class="closed">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                    </button>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'main-menu',
                            'menu_id'        => 'main-menu',
                            'menu' => 'Main Menu',
                            // 'items_wrap'     => '<li id="%1$s" class="%2$s"><a href="%3$s">%3$s</li>',
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        ) );
                    ?>
            
                </nav>
            </div>
            <div class="hero">
                <span class="hero-text">
                    <h2>Die knusprigsten<br> Semmerl<br>in Salzburg.</h2><br>
                    <a href="#" class="button">Mehr Erfahren</a>
                </span>
            </div>
        </section>
    </header>
    <main>

        <section class="bäckerei" id="bäckerei">
            <div class="section1">
                <div class="text">
                        <?php
                        $post = get_post(27);
                        if ( $post ) :
                        ?>
                    <div>
                        <div class="headline">
                            <h2><?php echo get_post_custom_values('subtitel')[0];?></h2>
                            <div class="divider">
                                <img src="<?php echo get_template_directory_uri() ?>/images/divider.svg" alt="Text Divider">
                            </div>
                        </div> 
                        <h3><?php the_title(); ?></h3>
                        <?php the_content();?>
                    </div>
                        <?php
                        endif; 
                        ?>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bäckerei.jpg" alt="Bäckerei Theke mit vielen Nachspeisen">
                </div>

            </div>
        </section>

        <section class="standorte" id="standorte">
            <div class="locations">
                <div class="marginloc">
                <?php
                        $post = get_post(29);
                        if ( $post ) : ?>
                    <div class="location1">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content();?>
                    </div>
                    <?php
                        endif; 
                    ?>
                    <?php
                        $post = get_post(31);
                        if ( $post ) : ?>
                    <div class="location2">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content();?>
                    </div>
                    <?php
                        endif; 
                    ?>
                    <?php
                        $post = get_post(33);
                        if ( $post ) : ?>
                    <div class="location3">
                    
                            <h2><?php the_title(); ?></h2>
                            <?php the_content();?>
                    </div>
                    <?php
                        endif; 
                    ?> 
                </div>
            </div>
        </section>

        <section class="workshops" id="workshops">
            <div class="section2">
            <?php
            $post = get_post(35);
            if ( $post ) : ?>
                <div class="text">
                    <div>
                        <div class="headline">
                            <h2><?php echo get_post_custom_values('subtitel')[0];?></h2>
                            <div class="divider">
                                <img src="<?php echo get_template_directory_uri() ?>/images/divider.svg" alt="Text Divider">
                            </div>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <div class="button">
                            <div>
                                <a href="#" class="button">Anmelden</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() ?>/images/workshops.jpg" alt="Person die einen Teig knetet">
                </div>
            <?php
            endif; 
            ?>
            </div>
            <div class="section3">
                <div class="service1">
                    <div class="services-text">
                    <?php
                        $post = get_post(37);
                        if ( $post ) : 
                    ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content();?>
                    <?php
                        endif; 
                    ?> 
                    </div>
                </div>
                <div class="service2">
                    <div class="services-text">
                    <?php
                        $post = get_post(39);
                        if ( $post ) : 
                    ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content();?>
                    <?php
                        endif; 
                    ?> 
                    </div>
                </div>
                <div class="service3">
                    <div class="services-text">
                    <?php
                        $post = get_post(41);
                        if ( $post ) : 
                    ?>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content();?>
                    <?php
                        endif; 
                    ?> 
                    </div>
                </div>
            </div>
        </section>


        <section class="karriere" id="karriere">
            <div class="section4">
                <div class="text">
                    <div>
                    <?php
                        $post = get_post(43);
                        if ( $post ) : 
                    ?>
                        <div class="headline">
                        <h2><?php echo get_post_custom_values('subtitel')[0];?></h2>
                            <div class="divider">
                                <img src="<?php echo get_template_directory_uri() ?>/images/divider2.svg" alt="Text Divider">
                            </div>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <div class="button">
                            <div>
                                <a href="#" class="button">Anmelden</a>
                            </div>
                        </div>
                        <?php
                        endif; 
                    ?>
                    </div>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() ?>/images/karriere.jpg" alt="Person schiebt Teig in den Ofen">
                </div>
            </div>
        </section>

        <div class="section5">
            <div class="text">
                <div>
                <?php
                        $post = get_post(45);
                        if ( $post ) : 
                    ?>
                    <div class="headline">
                        <h2><?php echo get_post_custom_values('subtitel')[0];?></h2>
                        <div class="divider">
                            <img src="<?php echo get_template_directory_uri() ?>/images/divider.svg" alt="Text Divider">
                        </div>
                    </div>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content();?>
                        <?php
                        endif; 
                    ?>
                </div>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri() ?>/images/green.jpg" alt="Person schiebt Teig in den Ofen">
            </div>
        </div>


    </main>
    <?php get_footer(); ?>

