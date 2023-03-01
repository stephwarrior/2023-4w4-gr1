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
                <article class="fpArticle">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <hr>
                    <?= wp_trim_words(get_the_excerpt(),10,"...") ?> 
                </article>
                <?php endwhile; ?>
            <?php  endif; ?>
        </section>
    </main>
    
    <?php get_footer(); ?>
</body>
</html>