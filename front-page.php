<?php
/**
 * Modèle par défaut
 * have_posts, c'est une fonction qui extrait un enregistrement et vérifier
 * s'il existe les articles
 * the_post permet de créer un objet pour chercher des function comme
 * comme the_title ou the_content (Montre le contenu des articles)
 * get_the_title tu dois faire echo si tu l'utilise et ça donne plus de 
 * souplesse
 */
?>
<?php get_header(); ?>
<main>

    <section class="blocflex">
        <?php 
            wp_nav_menu(array(
            "menu" => "evenement",
            "container" => "nav"
        ))
        ?>
    </section>
    <section class="blocflex"></section>
    
    <section class="blocflex">
    <?php
        if (have_posts()): 
            while (have_posts()) : the_post(); 
                $ma_categorie = "4w4";
                if (in_category('galerie')){
                    $ma_categorie = "galerie";
                }
                 get_template_part("template-parts/categorie", $ma_categorie);
             endwhile;
        endif;    
    ?>
    </section>
</main>

<?php get_footer(); ?>


