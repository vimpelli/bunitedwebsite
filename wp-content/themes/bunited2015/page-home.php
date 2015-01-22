<?php while (have_posts()) : the_post(); ?>

	<script type="text/javascript">
	Response.create({
    	prop: "width"  // "width" "device-width" "height" "device-height" or "device-pixel-ratio"
  		, prefix: "min-width- r src"  // the prefix(es) for your data attributes (aliases are optional)
 		, breakpoints: [1281,1025,961,641,481,320,0] // min breakpoints (defaults for width/device-width)
	});
	</script>

<div class="cta_block">
	<div class="sidebar_wrapper">
		<div class="cta-sidebar">
			<?php dynamic_sidebar('sidebar-ctabar' ); ?>
		</div>
		<div class="cta-sidebar facebook">
			<a class="btn btn-facebook btn-block" href="https://www.facebook.com/bannerunited" target="_blank"><h3>FACEBOOK</h3></a>
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
			 	<img class="img img-responsive size-medium wp-image-32" src="./wp-content/uploads/everyone.jpg" alt="triplesolo">
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
			 	<img class="img img-responsive" src="./wp-content/uploads/triplesolo.jpg">
			</div>
			<div class="col-sm-6 section_body">
			 	<?php the_field('section_2_body');?>
			 	<a href="#third" class="btn btn-primary btn-lg btn-block" role="button">I NEED THIS IN MY LIFE</a>
			</div>
		</div>
	</div>
	<div class="section_2_body_2">
		<div class="container"><a class="anchor thisweek" name="thisweek"></a>
			<div class="row">
				<div class="col-sm-12">
				 	<h2 class="headline">THIS WEEK AT BUNITED</h2>
				 </div>
			 	<div class="col-sm-12">
				 	<?php the_field('section_2_body_2');?>
				</div>
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
		<div class="map" data-min-width-641='<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2925.4661086861497!2d-85.69183029999999!3d42.841890299999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8819b6a27b1adcd5%3A0xaa8064b8146f27bd!2s1111+68th+St+SW%2C+Byron+Center%2C+MI+49315!5e0!3m2!1sen!2sus!4v1421373346429" width="100%" height="450" frameborder="0" style="border:0"></iframe>' data-min-width-0='<a href="https://goo.gl/maps/2tCFI" target=_blank class="btn btn-primary btn-lg btn-block" role="button">GET DIRECTIONS</a>'></div>

	</div>
</div>
<?php endif ?>
<?php endwhile; ?>
