<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <nav class="collapse navbar-collapse" role="navigation">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
      endif;
    ?>
  </nav>
</header>
<div class="title_area" style="background-image:url(<?php the_field('header_image') ?>)";>
  <?php $title = get_bloginfo('name'); ?>
    <div class="title">
      <h1><?php echo $title; ?></h1>
      <?php if (get_field('tagline')): ?>
        <h2><?php the_field('tagline');?></h2>
      <?php endif ?>
    </div>
</div>
