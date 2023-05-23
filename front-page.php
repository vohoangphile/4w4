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
<h2>Evénement</h2>
    <section class="blocflex">
        <?php 
        wp_nav_menu(array(
        "menu" => "evenement",
        "container" => "nav"
        ));
        wp_nav_menu(array(
            "menu" => "bloc-archive",
            "container" => "nav"
        ));
        ?>
    </section>
    <section class="blocflex"></section>
    
    <section class="blocflex">
    <?php
        if (have_posts()): // Vérifie s'il y a des articles à afficher
            while (have_posts()) : the_post(); // Itère à travers chaque article disponible
                $ma_categorie = "4w4"; 
                if (in_category('galerie')){ // vérifie si l'article actuel appartient à la catégorie "galerie".
                    $ma_categorie = "galerie"; // on met a jour la catégorie si elle est là
                }
                 get_template_part("template-parts/categorie", $ma_categorie);
             endwhile;
        endif;    
        /*La boucle while continue jusqu'à ce qu'il n'y ait plus d'articles disponibles 
        dans la boucle principale. Une fois que la boucle est terminée, la balise 
        PHP se termine avec endwhile;
        endif; est utilisée pour marquer la fin de la condition if (have_posts()) */
    ?>
    </section>
    
</main>

<?php get_footer(); ?>


