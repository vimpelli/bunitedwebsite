<?php while (have_posts()) : the_post(); ?>

<div class="cta_block">
	<div class="row">
		<div class="col-xs-12">
			<?php dynamic_sidebar('sidebar-ctabar' ); ?>
		</div>
	</div>
</div>

<!-- First Section -->
<?php if (get_field('headline')): ?>
<div class="section section1">
  	<div class="headline_wrapper">
    	<h2 class="headline"><?php the_field('section_1');?></h2>		
  	</div>
	<div class="container">
		<div class="row"><a class="anchor" name="first"></a>
			<div class="col-sm-6 section_image">
			 	<img class="img img-responsive size-medium wp-image-32" src="http://www.bunited.dev/wp-content/uploads/everyone.jpg" alt="triplesolo">
			</div>
			<div class="col-sm-6 section_body">
			 	<?php the_field('section_1_body');?>
			 	<a href="#third" class="btn btn-primary btn-lg btn-block" role="button">THAT SOUNDS FUN</a>
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
		<div class="row"><a class="anchor" name="second"></a>
			<div class="col-sm-6 section_image">
			 	<img class="img img-responsive" src="http://www.bunited.dev/wp-content/uploads/triplesolo.jpg">
			</div>
			<div class="col-sm-6 section_body">
			 	<?php the_field('section_2_body');?>
			 	<a href="#third" class="btn btn-primary btn-lg btn-block" role="button">I NEED THIS IN MY LIFE</a>
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
	<div class="container"><a class="anchor" name="third"></a>
		<div class="row">
			<div class="col-sm-6">
				<?php the_field('section_3_body');?>
			</div>
			<div class="col-sm-6">
				<?php dynamic_sidebar('sidebar-secondary' );?>
			</div>
		</div>
		<div class="map">
			<?php the_field('map_code');?>
		</div>
	</div>
</div>
<?php endif ?>
<?php endwhile; ?>
