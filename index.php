<!-- Theme Name: wordpress_test
Author: Karlissa Ablay
Description: Testing out wordpress
Version: 0.0.1
Tags: bootstrap -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wordpress Test</title>

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/src/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/src/js/scripts.js"></script>

    <!-- BOOTSTAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

  </head>
  <body>

    <div class="wrapper clrfix">

      <?php get_header(); ?>

      <div class="content">
        <?php if(is_home() && function_exists(masterslider) ){ ?>
        <div class="row">
          <div class="col-md-8">
            <?php masterslider(1); ?>
          </div>
        </div>
      <?php } else { ?>
        <div class="container">
          <div class="row">
              <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                  get_template_part( 'content', get_post_format() );
                endwhile; endif;
              ?>
          </div>
        </div>
      <?php } ?>



      </div>

    </div>

  </body>
</html>
