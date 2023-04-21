<footer class="site__footer">
    <section>
        <?php the_custom_logo() ?>
    </section>
    <section>
        <?php wp_nav_menu(array(
                    "menu" => "tim", // on a définit le nom, fait control et clokc sur wp_nav_menu pour comprendre
                    "container" => "nav"
                )) ?>
     </section>
    <section class="site__footer__icons">
        <h3>Réseaux sociaux</h3>
        <div class="icones-sociaux">
            <a href="https://github.com/vohoangphile">
                <img src="https://s2.svgbox.net/social.svg?ic=github&color=fff" width="50" height="50">
            </a>
            <a href="https://www.linkedin.com/in/vo-hoang-phi-le-b7267a252/">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=fff" width="50" height="50">
            </a>
            
        </div>
    </section>
    <section>
    <div class="sidebar">
    <?php dynamic_sidebar( 'footer_1' ); ?> <!-- Correspond au id dans la function sidebar-->
    </div>
    </section>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>