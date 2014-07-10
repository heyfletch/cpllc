<?php get_header(); ?>

  <main class="page-wrap main" role="main">

    <section class="blog-roll center">
    
    <?php if (have_posts()) : ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

    <?php while (have_posts()) : the_post(); ?>

      <article class="single-entry group">
        <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="date"><time datetime="<?php the_time('Y-m-d'); ?>"><i aria-hidden="true" data-icon="🕔"></i> <?php the_time(); ?></time></p>
        <?php the_excerpt(); ?>
      </article>

    <?php endwhile;?>
    
    <?php else : ?>

      <h2>Nothing found</h2>

    <?php endif; ?>

    <div class="pagination group center">
      <p class="alignleft"><?php previous_posts_link('<i aria-hidden="true" data-icon="&larr;"></i><span class="screenreader">Newer</span>') ?></p><p class="alignright"><?php next_posts_link('<i aria-hidden="true" data-icon="&rarr;"></i><span class="screenreader">Older</span>') ?></p>
    </div>

    </section><?php # END blog-roll ?>

  </main><?php # END page-wrap-page ?>

<?php get_footer(); ?>