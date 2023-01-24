<?php
/**
* L'ensemble des fonctions du thèmes

*/
wp_enqueue_style('4w4-gr1-principal', //identificateur de la feuille de style
    get_template_directory_uri() . '/style.css', // addresse url de style.css
    array(), //définir les dépendances
    filemtime(get_template_directory() . '/style.css'), // ;e calcul de la version du fichier css
    'all'); // média (all= tous sorte d'écran..etc)