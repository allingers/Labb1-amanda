<?php get_header(); ?>
	<main>
		<section>
			<div class="container">
				<div class="row">
					<div id="primary" class="col-xs-12 col-md-9">
						<h1>Sökresultat:</h1>
                        <?php 
                        if( have_posts()){
                            while(have_posts()){
                                the_post();
                                get_template_part('template-parts/content', 'archive');
                            };
                        };
                        ?>
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
					</div>


					<aside id="secondary" class="col-xs-12 col-md-3">
						<div id="sidebar">

								<ul role="navigation">
									<li class="pagenav">
										<?php if( is_active_sidebar('sidebar') ): ?>
											<?php dynamic_sidebar('sidebar'); ?>
										<?php endif;?>

									</li>
								</ul>
																	
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>