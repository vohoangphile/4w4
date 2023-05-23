<?php 
/** 
 * template name: Atelier
 */
get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"> Les ateliers du TIM</a></h2>
<?php the_post_thumbnail('thumbnail'); ?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p class="info">Date : <?php the_field('date_de_latelier'); ?></p>
<p class="info">Heure : <?php the_field('heure_de_la_formation'); ?></p>     
<p class="info">Durée : <?php the_field('duree'); ?></p>    
<p class="info">Local : <?php the_field('local'); ?></p>    
<p class="info">Formateur : <?php the_field('formateur'); ?></p>    
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();