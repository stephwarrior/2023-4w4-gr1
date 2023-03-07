<?php
/**permettant the remove bar aside */
?>
    <aside class="site__aside">
    <h3>Menu secondaire</h3>
    <?php 

    $menu="note-4w4";
    if(in_category('cours')){
        $menu="cours";

    }
    // $menu peut prendre les valeurs : "note-4w4" ou "cours"
    echo $menu;
    wp_nav_menu(array(
        "menu"=> $menu,
        "container"=>"nav",
    )) ?> 
</aside>
