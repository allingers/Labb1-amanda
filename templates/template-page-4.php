
<?php 
/*
Template Name: undersida4
*/
?>

<?php get_header(); ?>
<main>
	<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-6">
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
	
					</div>
					<div class="col-xs-12 col-sm-4 col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo.jpg">
					</div>
				</div>
			</div>
	</section>
</main>
<?php get_footer(); ?>