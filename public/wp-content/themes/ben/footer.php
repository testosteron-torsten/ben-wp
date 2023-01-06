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


    const nav = document.querySelector("#mainnav");
    const button = nav.querySelector("#hamburger");

    button.addEventListener("click", e => {
        console.log(button.classList)
        if(button.classList.contains('closed')) {
            button.classList.add('open');
            button.classList.remove('closed');
        } else {
            button.classList.add('closed');
            button.classList.remove('open');
        }
    });

    const menuContainer = document.querySelector('.menu-header-container');
    button.addEventListener('click', function() {
    if (button.classList.contains('closed')) {
        menuContainer.style.display = 'none';
    } else {
        menuContainer.style.display = 'block';
    }
    });

    const link = nav.querySelectorAll("a");
    
    for(var i = 0; i < link.length; i++) {
        link[i].addEventListener("click" , e => {
            console.log(button.classList)
            button.classList.add('closed');
            button.classList.remove('open');
        })
    }

    
    // const navMenu = document.querySelector('#main-menu');



</script>
<!-- <script src='/main.js'></script> -->
<?php wp_footer(); ?>
</body>
</html>