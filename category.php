<?php 
/**
 * category.php est le modèle par défaut pour 
 * afficher une archive d'articles de catégorie spécifique 
 */
?>
<!---------------------------------HEADER------------------------------>
<?php get_header(); ?>

<!---------------------------------MAIN------------------------------>
<main class="site__main">
   <section class="blocflex">
      <?php
      $category = get_queried_object();
      //Permet de définir la nouvelle requête
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      //Création d'une nouvelle requete
      $query = new WP_Query( $args );
      //tout le reste de l'extraction de donné est basé 
      // sur la nouvelle requête contenu dans $query
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
            <article>
               <h2><a href="<?php the_permalink(); ?>"> <?= get_the_title(); ?></a></h2>
               <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
            </article>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>

<!---------------------------------FOOTER------------------------------>
<?php get_footer(); ?>
</body>
</html>