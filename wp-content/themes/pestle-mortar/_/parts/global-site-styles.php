<?php global $tt_options;
  $tt_settings = get_option( 'tt_options', $tt_options ); 
?>

<style>
<?php # Theme Option Settings ?>

<?php if( $tt_settings['site_color'] != '' ) : ?>
  #nav ul, .btn, .home-tile span, #submit, .btn, .wpcf7-submit  {
    background: <?php echo $tt_settings['site_color']; ?>;
  }
  a, #nav-toggle:hover, #nav-toggle:focus, .footer a:hover, .footer a:focus, .pagination a:hover, .pagination a:focus {
    color: <?php echo $tt_settings['site_color']; ?>;
  }
  blockquote {
    border-left: 10px solid <?php echo $tt_settings['site_color']; ?>;
  }
<?php endif; ?>

<?php if( $tt_settings['background_image'] != '' ) : ?>
  .background {
    background: url('<?php echo $tt_settings['background_image']; ?>') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
<?php endif; ?>
<?php if( $tt_settings['background_pattern'] != '' ) : ?>
  .background { 
    background: url('<?php echo $tt_settings['background_pattern']; ?>') repeat fixed;
    -webkit-background-size: auto;
    -moz-background-size: auto;
    -o-background-size: auto;
    background-size: auto;  
  }
<?php endif; ?>
<?php if( $tt_settings['background_color'] != '' ) : ?>
  .background { 
    background-color: <?php echo $tt_settings['background_color']; ?>;
  }
<?php endif; ?>
</style>
