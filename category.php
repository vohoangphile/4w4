<?php
/**
 * Modèle catégory par défaut
 * 
 */
?>



<?php get_header(); ?>
<main class="site__main">

<code>category.php</code>

   <section class="blocflex">
   
      <?php
      // permet de afficher en bloc les notes de cours
      $category = get_queried_object(); //permet extraire la requette http
      $args = array(
         'category_name' => $category->slug, // slug permet de chercher le nom de la categorie
         'orderby' => 'title', // permet de créer une requête sql
         'order' => 'ASC'
      );
// permet de faire une boucle pour toute afficher les blocs
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
         <?php /* get_template_part permet d'inclure un fichier avec du code
          category -> slug peut avoir une de ces deux valeurs : "cours" ou "4w4" */ ?>
          <?php get_template_part('template-parts/categorie',$category->slug); ?> 
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>
    
<?php get_footer(); ?>


