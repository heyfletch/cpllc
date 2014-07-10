<?php get_header('home'); ?>

<main class="page-wrap" role="main">

  <section class="home-grid center group">
    <?php
        $wp_query = new WP_Query();
        $wp_query->query('category_name='.portfolio.'&paged='.$paged);
    ?>

    <?php 
        if ( $wp_query->have_posts() ) : 
        while ( $wp_query->have_posts() ) : 
        $wp_query->the_post(); 
    ?>

    <a href="<?php the_permalink(); ?>" class="home-tile">
      <?php the_post_thumbnail('homepage-tile'); ?>
      <span>
        <h1 class="title"><?php the_title(); ?></h1>
      </span>
    </a>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    <?php else: endif; ?>
  </section>

  <div class="pagination group center">
    <p class="alignleft"><?php previous_posts_link('<i aria-hidden="true" data-icon="&larr;"></i><span class="screenreader">Newer</span>') ?></p><p class="alignright"><?php next_posts_link('<i aria-hidden="true" data-icon="&rarr;"></i><span class="screenreader">Older</span>') ?></p>
  </div>

</main><?php # END page-wrap-home ?>

<?php get_footer(); ?>