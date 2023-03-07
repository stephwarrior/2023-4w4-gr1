<?php
/**
* L'ensemble des fonctions du thèmes

*/
function enfiler_css(){
wp_enqueue_style('4w4-gr1-principal', //identificateur de la feuille de style (id)
    get_template_directory_uri() . '/style.css', // addresse url de style.css
    array(), //définir les dépendances
    filemtime(get_template_directory() . '/style.css'), // calcul de la version du fichier css
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
    
/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
    if ( $query->is_home() //si page d'accueil
         && $query->is_main_query() //si requête principale
         && ! is_admin() //si pas dans le  tableau de bord
         //$query->set permet de modifier la requête principale
        ) {
      $query->set( 'category_name', 'note-4w4' ); //filtre les articles de catégorie note4w4
      $query->set( 'orderby', 'title' ); //trier selon le champ title
      $query->set( 'order', 'ASC' ); //trier en odre ascendant
      }
     }
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );

     /**Permet de personnaliser chacun des titres du menu cours
      * @param $title: titre du menu à modifier
      $item: la structure "li" du menu
      $args: objet décrivant l'ensemble des menus de notre site
      $depth: Niveau de profondeur du menu (on a retier ici)
      */

     function perso_menu_item_title($title, $item, $args, $depth) {
        // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
        if($args->menu == 'cours') { // On filtre uniquement le menu "cours"
    // Modifier la longueur du titre en fonction de nos besoins
    $title = wp_trim_words($title, 3, ' ... '); //À modifier ou améliorer pour le TP1!!!!
    }
    return $title;
    }
    add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 4);