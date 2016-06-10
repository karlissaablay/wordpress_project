<header>
  <div class="navigation-view">
    <div id="nav-icon">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <nav>
      <h2>Menu</h2>

      <ul class="nav nav-pills nav-stacked">
        <li><a href="#">Home</a></li>
        <?php wp_list_pages( '&title_li=' ) ?>
      </ul>
      <?php get_footer(); ?>
  </nav>

</header>

<?php wp_footer(); ?>
