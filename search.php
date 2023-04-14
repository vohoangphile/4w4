<?php
/**
 
 * 
 */
?>


<?php get_header(); ?>
<main>
<!-- <h3>search.php</h3> -->
<h3 class="resultat">Résultats de la recherche</h3>
<?php 
/**
 * have_posts, c'est une fonction qui extrait un enregistrement et vérifier
 * s'il existe les articles
 * the_post permet de créer un objet pour chercher des function comme
 * comme the_title ou the_content (Montre le contenu des articles)
 * 
 */
// $categorie = '4w4';
// if( in_category('4w4')) {
//     $categorie = '4w4';
// }else if (in_category('cours')){
//     $categorie = 'cours';
// }
    if (have_posts()): 
        while (have_posts()) : the_post();
            the_title('<h4>', '</h4>');
            $ma_categorie = "4w4";
            if (in_category('cours')) {
            $ma_categorie = "cours";
            get_template_part('template-parts/search-cours', $ma_categorie);
            }
         endwhile;
    endif;
?>
</main>

<?php get_footer(); ?>

