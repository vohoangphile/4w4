<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php wp_head(); ?>


<?php
// $nouvelle_classe = ""
// if (is_front_page()) {
//     $nouvelle_classe = 'no-aside';
// }

?>
<!-- <body class="site <?= $nouvelle_classe?>"> -->
<body>
<div class= "site <?php echo (is_front_page()? ' no-aside': '');?>" >


    <header class="site__header">
        <section class="site__header__logo">
            <?php the_custom_logo() ?>
            <div class="menu__recherche">
                <input type="checkbox" id="chkMenu">
                <?php wp_nav_menu(array(
                    "menu" => "entete", // on a définit le nom, fait control et clokc sur wp_nav_menu pour comprendre
                    "container" => "nav"
                )) ?>
            <?php get_search_form() ?>
            <label class="burger" for="chkMenu"><img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=fff" width="20" height="20"></label>
            </div>
        </section>
    <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
    <h1>Bienvenue dans le cours de 4W4</h1>
    <h2 style="text-align: center;"><?= bloginfo('description') ?></h2>
    </header>   
    <?php 
    if ( ! is_front_page()) {
        get_template_part("template-parts/aside");
    }
    
    
    ?>
    
</body>
</html>