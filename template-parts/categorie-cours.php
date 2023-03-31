<?php 
//Template part pour afficher un blocflex note de cours 4w4
    $titre = get_the_title();
    $sigle = substr($titre, 0,7); // 582-1w1 - Mise en page web va extraire les caractère de 0 à 7 
    $titre_long = substr($titre,7,-5); // 582-1w1 Mise en ... (60h)
    // $duree = substr($titre, -6)
    $duree = substr($titre, strpos($titre,'('));
    // strpost($titre, '(')) permet de trouver la position du caractère ,'('

    
?>

<article class="blocflex__article">
    <h3><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h3>
    <h5><?= $titre_long ?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h5><?= $duree ?></h5>
    <p><?php the_field('enseignant') ?></p> 
    <p><?php the_field('domaine') ?></p>
</article>

