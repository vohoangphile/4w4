<?php
/**
 * Modèle catégory par défaut
 * 
 */
?>



<?php get_header(); ?>
<main>
    <h3>category.php</h3>
    <section class="blocflex">
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
            <article>
                <h2>
                    <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
                </h2>
                <?php //the_content(); // affiche le contenu complet de l'article ?>
                <?php //the_excerpt(); // affiche un résumé de l'article ?> 
                <p><?= wp_trim_words( get_the_excerpt(), 10, "&#10148;" )?></p>
            </article>
        <?php endwhile;
    endif;
    ?>
    </section>
</main>
    
<?php get_footer(); ?>


