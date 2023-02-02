<?php 
/**
* single.php ets le modèle par défaut qui affiche un article
 */
?>
<?php get_header();/*** va aller chercher le fichier header.php */?>
    <main>
        <pre>single.php</pre>
        <h1>Bienvenue sur 4W4</h1>
    <? if(have_posts()):
    while(have_posts()): the_post(); ?>
        <article>
            <h3><?php the_title();?></h3>
            <?php the_content();?> 
        </article>
        <hr>
    <?php endwhile;?>
    <?php endif; ?>
    </main>
    <?php get_footer()/*** va aller chercher le fichier footer.php */?>

</body>
</html>