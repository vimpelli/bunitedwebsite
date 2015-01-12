<?php while (have_posts()) : the_post(); ?>

<!-- First Section -->
<?php if (get_field('headline')): ?>
<div class="section section1">
  	<div class="headline_wrapper">
    	<h1 class="headline"><?php the_field('section_1');?></h1>		
  	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 section_body">
			 	<h2><?php the_field('section_1_body');?></h2>
			</div>
			<div class="col-md-6 section_image">
			 	<img class="img img-responsive" src="http://www.bunited.dev/wp-content/uploads/triplesolo.jpg">
			</div>
		</div>
	</div>
</div>
<?php endif ?>

<!-- Second Section -->
<?php if (get_field('headline')): ?>
<div class="section section2">
 	<div class="headline_wrapper">
    	<h2 class="headline"><?php the_field('section_2');?></h2>	
 	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 section_body">
			 	<?php the_field('section_2_body');?>
			</div>
		</div>
	</div>
</div>
<?php endif ?>

<!-- Third Section -->
<?php if (get_field('headline')): ?>
<div class="section section3">
	<div class="headline_wrapper">
		<h2 class="headline"><?php the_field('section_3');?></h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 section_body">
				<?php the_field('section_3_body');?>
			</div>
		</div>
	</div>
</div>
<?php endif ?>
<?php endwhile; ?>
