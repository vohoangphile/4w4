<?php 
/* enqeue style permet d'ajouter le CSS*/
function ajouter_styles() {

wp_enqueue_style(
                'style-principale', // identificateur de link css
                get_template_directory_uri() . '/style.css', // endroit ou se trouve le ficher style.css
                array(), // les fichiers css qui dépendent de style.css
                filemtime(get_template_directory() . '/style.css'), false // version de notre style.css
                );
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );
                

 /* ----------------------------------- Enregistrement des menus */
 function enregistrement_nav_menu(){
    register_nav_menus( array(
        'principal' => 'Menu principal',
        'footer'  => 'Menu pied de page'
    ) );
}
add_action( 'after_setup_theme', 'enregistrement_nav_menu', 0 );  


 
