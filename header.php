<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php wp_head(); ?>
<body class="site <?php echo (is_front_page()? 'no-aside': '');?>">
    <header class="site__header">
    <?php get_search_form() ?>
        <section class="site__header__logo">
            
            <?php the_custom_logo() ?>
            
            <div class="logomenu">
            
                <?php wp_nav_menu(array(
                    "menu" => "entete", // on a définit le nom, fait control et clokc sur wp_nav_menu pour comprendre
                    "container" => "nav"
                )) ?>
                
            </div>
        </section>
    <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
    <h1>Bienvenue dans le cours de 4W4</h1>
    <h2 style="text-align: center;"><?= bloginfo('description') ?></h2>
    </header>
    <?php get_template_part("template-parts/aside"); ?>         
    
</body>
</html>