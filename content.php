<div class="blog-post clrfix">

  <div class="blog-image">
    <?php extracted_shortcode(); ?>
  </div>

  <div id="hide-icon">
    <span></span>
    <span></span>
  </div>

  <div class="blog-text open">
    <div class="blog-text-content">
      <h2><?php the_title(); ?></h2>
      <p>
        <?php the_date(); ?> by <?php the_author(); ?>
      </p>
      <?php the_content(); ?>
    </div>
  </div>
</div>
