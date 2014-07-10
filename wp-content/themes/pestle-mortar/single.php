<?php get_header(); the_post(); ?>
<?php include (TEMPLATEPATH . '/_/parts/custom-page-styles.php' ); ?>

<main class="page-wrap main" role="main">

  <article class="single-post center">
    <h1 class="title"><?php the_title(); ?></h1>
    <p class="date"><time datetime="<?php the_time('Y-m-d'); ?>"><i aria-hidden="true" data-icon="🕔"></i> <?php the_time(); ?></time></p>
    <?php the_content(); ?>
    <p><?php the_tags(); ?></p>
    <?php comments_template(); ?>
  </article>

</main><?php # END page-wrap-single ?>

<?php get_footer(); ?>