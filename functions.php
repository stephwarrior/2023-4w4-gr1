<?php
/**
* L'ensemble des fonctions du thèmes

*/
function enfiler_css(){
wp_enqueue_style('4w4-gr1-principal', //identificateur de la feuille de style (id)
    get_template_directory_uri() . '/style.css', // addresse url de style.css
    array(), //définir les dépendances
    filemtime(get_template_directory() . '/style.css'), // ;e calcul de la version du fichier css
    'all'); // média (all= tous sorte d'écran..etc)
}
//ajoute mon css dans ma page quand le hook se manifeste. Une fois ajouter tout contenu dans la page html, affiche mon scipt
    add_action( 'wp_enqueue_scripts', 'enfiler_css' );
    /*enregisrement des menus*/

        function enregistre_menus(){
            register_nav_menus( array(
                'menu_entete' => 'Menu entete',
                'menu_sidebar'  =>  'Menu sidebar' ,
            ) );
        }
        add_action( 'after_setup_theme', 'enregistre_menus', 0 );

        /*-----------------------------------add_theme_support*/
        add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 150,
    'width'  => 150,
) );
    