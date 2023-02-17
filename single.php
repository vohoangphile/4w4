<?php
/**
 * single.php est pour afficher une seule article
 * 
 */
?>
<?php get_header(); ?>
<h1>Bienvenue au cours de 4w4</h1>

<main>
<h3>single.php</h3>
<?php 
/**
 * have_posts, c'est une fonction qui extrait un enregistrement et vérifier
 * s'il existe les articles
 * the_post permet de créer un objet pour chercher des function comme
 * comme the_title ou the_content (Montre le contenu des articles)
 * 
 */
    if (have_posts()): 
        while (have_posts()) : the_post();
            the_title('<h1>', '</h1>');
            the_content(); ?>
            <hr>
        <?php endwhile;
    endif;
?>
</main>

<?php get_footer(); ?>


