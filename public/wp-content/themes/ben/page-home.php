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
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#bäckerei">Bäckerei</a></li>
                        <li><a href="#standorte">Standorte</a></li>
                        <li><a href="#workshops">Workshops</a></li>
                        <li><a href="#karriere">Karriere</a></li>
                    </ul>
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
                        $post = get_post(1);
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
                        $post = get_post(28);
                        if ( $post ) : ?>
                    <div class="location1">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content();?>
                    </div>
                    <?php
                        endif; 
                    ?>
                    <?php
                        $post = get_post(30);
                        if ( $post ) : ?>
                    <div class="location2">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content();?>
                    </div>
                    <?php
                        endif; 
                    ?>
                    <?php
                        $post = get_post(34);
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
            $post = get_post(36);
            if ( $post ) : ?>
                <div class="text">
                    <div>
                        <div class="headline">
                            <h2><?php echo get_post_custom_values('subtitel')[1];?></h2>
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
                        <h3>Level 1</h3>
                        <p>Perfekt für Anfänger!
                            Jeden Dienstag um 17:00
                            bei Ben Müller Downtown!
                        </p>
                    </div>
                </div>
                <div class="service2">
                    <div class="services-text">
                        <h3>Level 2</h3>
                        <p>Backen wie die Oma!
                            Jeden Freitag um 12:00
                            bei Ben Müller Metro am Bahnhof!

                        </p>
                    </div>
                </div>
                <div class="service3">
                    <div class="services-text">
                        <h3>Level 3</h3>
                        <p>Backen wie ein Gott!
                            Jeden Montag um 20:00
                            bei Ben Müller Downtown!

                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="karriere" id="karriere">
            <div class="section4">
                <div class="text">
                    <div>
                        <div class="headline">
                            <h2>Deine Karriere.</h2>
                            <div class="divider">
                                <img src="<?php echo get_template_directory_uri() ?>/images/divider2.svg" alt="Text Divider">
                            </div>
                        </div>
                        <h3>Werde Teil von Ben Müller.</h3>
                        <div class="button">
                            <div>
                                <a href="#" class="button">Anmelden</a>
                            </div>
                        </div>
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
                    <div class="headline">
                        <h2>Wir sind Grün!</h2>
                        <div class="divider">
                            <img src="<?php echo get_template_directory_uri() ?>/images/divider.svg" alt="Text Divider">
                        </div>
                    </div>
                    <h3>Für unsere Kinder!</h3>
                    <p>Ben Müller setzt nicht nur in Sachen Lebensmittel neue Maßstäbe. Auch in
                        Sachen erneuerbare Energie sind wir Vorreiter! Wir beziehen unseren Strom
                        ausschließlich aus erneuerbaren Quellen und haben somit keine Emissionen
                        auf unserem Buckel liegen. Für eine Zukunft, in der auch unsere Kinder noch
                        frische Luft schnuppern dürfen.</p>
                </div>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri() ?>/images/green.jpg" alt="Person schiebt Teig in den Ofen">
            </div>
        </div>


    </main>
    <?php get_footer(); ?>

