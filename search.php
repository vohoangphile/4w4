<?php
/**
 
 * 
 */
?>


<?php get_header(); ?>
<main>
<!-- <h3>search.php</h3> -->
<h3>Résultats de la recherche</h3>
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
            the_title('<h4>', '</h4>');?>
            <?= wp_trim_words(get_the_excerpt(), 50, " [...] "); ?>
            <hr>
        <?php endwhile;
    endif;
?>
</main>

<?php get_footer(); ?>

