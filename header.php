<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php wp_head(); ?>
<body class="site">
    <header class="site__header">
        <section class="site__header__logo">
            <?php the_custom_logo() ?>
            <div class="logomenu">
                <?php wp_nav_menu(array(
                    "menu" => "entete", // on a définit le nom, fait control et clokc sur wp_nav_menu pour comprendre
                    "container" => "nav"
                )) ?>
                <?php get_search_form() ?>
            </div>
        </section>
    <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
    <h1>Bienvenue dans le cours de 4W4</h1>
    <h2 style="text-align: center;"><?= bloginfo('description') ?></h2>
    </header>
    <aside class="site__aside">
        <h3>Menu secondaire</h3>
        <?php wp_nav_menu(array(
            "menu" => "aside",
            "container" => "nav"
        )); ?>
    </aside>
    
</body>
</html>