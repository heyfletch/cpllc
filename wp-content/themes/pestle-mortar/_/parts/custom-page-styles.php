<style>
<?php # Custom Page Styles ?>
<?php if ( get_post_meta(get_the_ID(), 'background_image', true) ) : ?>
  .background {
    background: url('<?php echo get_post_meta($post->ID, 'background_image', true); ?>') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; 
  }
<?php endif; ?>
<?php if ( get_post_meta(get_the_ID(), 'background_pattern', true) ) : ?>
  .background {
    background: url('<?php echo get_post_meta($post->ID, 'background_pattern', true); ?>') repeat fixed;
    -webkit-background-size: auto;
    -moz-background-size: auto;
    -o-background-size: auto;
    background-size: auto; 
  }
<?php endif; ?>
<?php if ( get_post_meta(get_the_ID(), 'background_color', true) ) : ?>
  .background {
    background-color: <?php echo get_post_meta($post->ID, 'background_color', true); ?>;
  }
<?php endif; ?>
</style>