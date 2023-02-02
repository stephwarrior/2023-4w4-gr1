<?php 
/**
* front-page.php ets le modèle par défaut du thème 4w4
 */
?>
<?php get_header();/*** va aller chercher le fichier header.php */?>
    <main>
        <pre>front-page.php</pre>
        <h1>Bienvenue sur 4W4</h1>
    <? if(have_posts()):
    while(have_posts()): the_post(); ?>
        <article>
            <a href="<?php the_permalink(); ?> "><h3><?php the_title(); ?></h3></a>
            <?php the_excerpt(); ?>
            <?php the_permalink(); ?> 
        </article>
        <hr>
    <?php endwhile;?>
    <?php endif; ?>
    </main>
    <?php get_footer()/*** va aller chercher le fichier footer.php */?>

</body>
</html>