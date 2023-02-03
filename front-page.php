<?php
/**
 * 
 * 
 */
?>
<?php get_header(); ?>
<h1>Bienvenue au cours de 4w4</h1>

<?php get_header(); ?>
<main>
    <h3>front-page.php</h3>
<?php 
/**
 * have_posts, c'est une fonction qui extrait un enregistrement et vérifier
 * s'il existe les articles
 * the_post permet de créer un objet pour chercher des function comme
 * comme the_title ou the_content (Montre le contenu des articles)
 * get_the_title tu dois faire echo si tu l'utilise et ça donne plus de 
 * souplesse
 * 
 */
    if (have_posts()): 
        while (have_posts()) : the_post();?>
            <h1>
                <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
            </h1>
            <hr>
        <?php endwhile;
    endif;
?>
</main>

<?php get_footer(); ?>


