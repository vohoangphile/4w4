<?php 

$titre = get_the_title();
$debutTexte = strlen($titre) - 4;
$sigle = substr($titre, 4, 3);
$duree = substr($titre, $debutTexte, 3);

?>
<div class="contenu__cours">
    
    <h4>Sigle<?= $sigle ?></h4>
    <h4>Durée<?= $duree ?></h4>
    <p><?php the_field('enseignant') ?></p> 
    <p><?php the_field('domaine') ?></p>
    <?= wp_trim_words(get_the_excerpt(), 50, " [...] "); ?>

   
</div>













