<footer>
        <div>
        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-menu',
                            'menu_id'        => 'footer-menu',
                            'menu' => 'Footer Menu',
                        ) );
                    ?>
            <p>2004 – 2023<br>© Ben Müller</p>
        </div>
</footer>
<script>
    window.addEventListener("scroll", function () {
        let offset = window.pageYOffset;
        let h = document.getElementById("header");
        if (offset > 150) {
            h.classList.add("shrunk");
        } else if (offset < 150) {
            h.classList.remove("shrunk");
        }
    });
</script>
<script src='./main.js'></script>
<?php wp_footer(); ?>
</body>
</html>