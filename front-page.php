<?php 
/**
* index.php ets le modèle par défaut du thème 4w4
 */
?>
<?php get_header();/*** va aller chercher le fichier header.php */?>
    <main>
        <pre>front-page.php</pre>
    <h1>Bienvenue sur 4W4</h1>
    <?php 
    if(have_posts()):
        while(have_posts()):
            the_post(); //extrait un objet "post"?>
            <article>
                <h3><?php the_title(); //affiche le titre du post?></h3>
                <h6>Extrait:</h6><?php the_excerpt(); //pour afficher les extrait de notre article. Efficace si on veut afficher seulement un extrait de nos articles et pas l'Aricle au complet. il affiche seulement du text ?>
                <h6>Le contenue:</h6><?php the_content(); // affiche le contenue de l'article.peu aussi afficher medie et galerie d'image ?>
            </article>
       <?php endwhile; ?>
       <?php endif;?>
    </main>
    <?php get_footer()/*** va aller chercher le fichier footer.php */?>

</body>
</html>