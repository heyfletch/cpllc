<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/_/parts/custom-page-styles.php' ); ?>

<main class="page-wrap main" role="main">

  <section class="blog-roll center">
  
    <?php
        $wp_query = new WP_Query();
        $wp_query->query('category_name='.blog.'&paged='.$paged);
    ?>

    <?php 
        if ( $wp_query->have_posts() ) : 
        while ( $wp_query->have_posts() ) : 
        $wp_query->the_post(); 
    ?>

    <article class="single-entry group">
      <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <p class="date"><time datetime="<?php the_time('Y-m-d'); ?>"><i aria-hidden="true" data-icon="🕔"></i> <?php the_time(); ?></time></p>
      <?php the_excerpt(); ?>
      <p><?php the_tags(); ?></p>
    </article>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    <?php else: endif; ?>

    <div class="pagination group center">
      <p class="alignleft"><?php previous_posts_link('<i aria-hidden="true" data-icon="&larr;"></i><span class="screenreader">Newer</span>') ?></p><p class="alignright"><?php next_posts_link('<i aria-hidden="true" data-icon="&rarr;"></i><span class="screenreader">Older</span>') ?></p>
    </div>

  </section><?php # END blog-roll ?>

</main><?php # END page-wrap-page ?>

<?php get_footer(); ?>