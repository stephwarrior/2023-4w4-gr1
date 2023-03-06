<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main">
            <pre>front-page.php</pre>
            
        <section class="blocflex">
            <?php if(have_posts()):
                while (have_posts()): the_post(); ?>
                           <?php  if (in_category('galerie')){
                get_template_part("template-parts/categorie","galerie");
               } else {
                get_template_part("template-parts/categorie","note-4w4");
               }?>
                <?php endwhile; ?>
            <?php  endif; ?>
        </section>
    </main>
    
    <?php get_footer(); ?>
</body>
</html>