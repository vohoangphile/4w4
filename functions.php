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

/*-------------------------------------- add_theme_support()
title_tag crée un title et 
*/
add_theme_support( 'title-tag' ); 
add_theme_support('custom-logo',array(
    'height' => 150,
    'width'  => 150,
) );
add_theme_support( 'post-thumbnails' );
add_theme_support('custom-background');

/*-------------------------------------- Modification des choix du menu cours */
// la fonction permet couper des mots du menu 4w4
function personnalisation_menu_item_title($title, $item, $args, $depth) {
    // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
    if($args->menu == 'cours') {
// Modifier la longueur du titre en fonction de vos besoins
$sigle = substr($title, 4,4);
$title = substr($title,7);
$title = "<code class='cours__code'> " . $sigle . "</code>" . "<p class='cours__p'>" . wp_trim_words($title, 1, ' ... '). "</p>"; // on garde uniquement 3 mots pour le titre du choix
if($args->menu == '4w4'){
    if(substr($title,0,1) == "0"){$title = substr($title,1);}
}
}
return $title;
}
add_filter('nav_menu_item_title', 'personnalisation_menu_item_title', 10, 4);

/**
 * Modifie les items du menu d'événement 
 * pour inclure l'image en avant plan du post,
 * la description du choix et le titre du choix
 */

function add_menu_description_and_thumbnail( $item_output, $item, $depth, $args ) {
    if ( 'evenement' == $args->menu ||  'bloc-archive' == $args->menu ){
        $post_thumbnail_id = get_post_thumbnail_id( $item->object_id );
        if ( $post_thumbnail_id ) {
            $post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' );
            $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span><img src="' . esc_url( $post_thumbnail_url[0] ) . '" class="menu-thumbnail" />', $item_output );
        } else {
            $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span<span class="image">', $item_output );
        }
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'add_menu_description_and_thumbnail', 10, 4 );




add_theme_support( 'post-thumbnails' ); // récupère une image qu'on mit sur une article ou autre
add_theme_support('custom-background');
add_theme_support('widgets');
add_theme_support('widgets-block-editor');


/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query, contient la requête principal de WP
 */
// affiche les notes de cours en ascendants seulement dans la page accueil
function cidweb_modifie_requete_principal( $query ) {
    if (    $query->is_home()  // page accueil
            && $query->is_main_query() // requête principal
            && ! is_admin() ) { // Assure qu'on n'est pas dans une page admin
      $query->set( 'category_name', '4w4' ); // correspond au slug 
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );
     //add_action équivalent à un écouteur d'événement addevent...
     //pre_get_posts c'est un hook équivalent à un événement dans JS
     //cidweb_modifie_requete_principal function de rappel

// Enregistrer le sidebar
function enregistrer_sidebar() {
    register_sidebar( array(
        'name' => __( 'Footer 1', '4w4-phi-le' ),
        'id' => 'footer_1', // c'est comme le slug
        'description' => __( 'Une zone pour afficher des widgets dans le footer.', '4w4-phi-le' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer 2', '4w4-phi-le' ),
        'id' => 'footer_2', // c'est comme le slug
        'description' => __( 'Une zone pour afficher des widgets dans le footer.', '4w4-phi-le' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

}
add_action( 'widgets_init', 'enregistrer_sidebar' );
