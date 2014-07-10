<?php get_header(); the_post(); ?>
<?php include (TEMPLATEPATH . '/_/parts/custom-page-styles.php' ); ?>

<main class="page-wrap main" role="main">

  <article class="single-page center">
    <h1 class="title"><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </article>

</main><?php # END page-wrap-page ?>

<?php get_footer(); ?>