<?php get_header(); ?>
<body>
<?php wp_body_open(); ?>
<?php
global $post;
$postid = $post->ID;
?>
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

                   <h1><br><br><br><?php the_title(); ?></h1>

                </span>
            </div>
        </section>
    </header>
    <main>

        <section class="content" id="content">
            <div class="section123">
                <div>
                <div class="text">
                        <?php the_content();?>
                </div>
                </div>
            </div>
        </section>
        <br><br><br><br><br><br><br><br>

        
    </main>
    <?php get_footer(); ?>

