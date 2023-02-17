<?php
/**
 * 
 * 
 */
?>



<?php get_header(); ?>
<main>
    <h3>front-page.php</h3>
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

                <h3>
                    <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
                </h3>
                <?php //the_content(); // affiche le contenu complet de l'article ?>
                <?php //the_excerpt(); // affiche un résumé de l'article ?> 
                <p><?php if(is_category('cours')) ?></p>
                <p><?= wp_trim_words( get_the_excerpt(), 10, "<span>&#10148;</span>" )?></p>
            </article>
        <?php endwhile;
    endif;
    ?>
    </section>
</main>
    
<?php get_footer(); ?>


