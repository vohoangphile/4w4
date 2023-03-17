<footer class="site__footer">
    <section>Colonne1
    <?php the_custom_logo() ?>
    </section>
    <section><?php wp_nav_menu(array(
                    "menu" => "4w4", // on a définit le nom, fait control et clokc sur wp_nav_menu pour comprendre
                    "container" => "nav"
                )) ?>
     </section>
    <section>Colonne3</section>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>