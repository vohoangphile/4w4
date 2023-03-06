<?php 
/**
 * Template part pour afficher un blocflex note de cours 4w4
 */
$titre = get_the_title();
    if(substr($titre,0,1) == '0'){
        $titre = substr($titre,1);
    }
    /*$titre = get_the_title();
    $sigle = substr($titre, 0,7); // 582-1w1 - Mise en page web va extraire les caractère de 0 à 7 
    $titre_long = substr($titre,7,-5); // 582-1w1 Mise en ... (60h)
    $duree = "60";
    // strpost($titre, '(')) permet de trouver la position du caractère ,'('*/
?>
<article class="blocflex__article">
    <h2><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h2>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>





