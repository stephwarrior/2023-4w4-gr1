<?php
/**
 * Modèle de recherche
 */
?>
<!----------------------------------HEADER----------------------------------->
<?php
get_header();
?>
<!------------------------------------MAIN----------------------------------->
<main class="site__main">

<section class="recherche__section">
   <?php
   if (have_posts()):
      while(have_posts()): the_post(); ?>
      <article>
         <h6><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h6>
         <?php echo wp_trim_words(get_the_excerpt(), 60) ?>
         <hr>
      </article>
      <?php endwhile; ?>
   <?php endif; ?>
</section>
</main>

<!----------------------------------FOOTER----------------------------------->
<?php get_footer(); ?>