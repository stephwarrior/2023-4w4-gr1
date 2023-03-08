<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>
<!----------------------------------HEADER----------------------------------->
<?php get_header(); ?>
<!------------------------------------MAIN----------------------------------->
    <main class="site__main">
        <pre>front-page.php</pre>
       <!-- <h1>Bienvenue sur 4W4</h1>-->
        <section class="blocflex">
            <?php if(have_posts()):
                while (have_posts()): the_post(); 
                    $la_categorie = 'note-4w4';
                    if (in_category('galerie')){
                        $la_categorie = 'galerie';}
                    get_template_part("template-parts/categorie",$la_categorie);
               endwhile; 
             endif; ?>
        </section>
    </main>
<!----------------------------------FOOTER----------------------------------->
<?php get_footer(); ?>