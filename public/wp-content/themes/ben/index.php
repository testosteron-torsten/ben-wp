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
            <div class="hero2">
                <span class="hero-text">
                        <?php
                        $post = get_post(83);
                        if ( $post ) :
                        ?>
                   <h1><br><br><br><?php the_title(); ?></h1>
                        <?php
                        endif; 
                        ?>
                </span>
            </div>
        </section>
    </header>
    <main>

        <section class="content" id="content">
            <div class="section123">
                <div>
                <div class="text">
                        <?php
                        $post = get_post(85);
                        if ( $post ) :
                        ?>
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content();?><br><br><br><br><br><br>
                    </div>
                        <?php
                        endif; 
                        ?>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() ?>/images/bäckerei.jpg" alt="Bäckerei Theke mit vielen Nachspeisen">
                </div>
                </div>
            </div>
        </section>

        
    </main>
    <?php get_footer(); ?>

