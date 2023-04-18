<!-- Inläggssida när endast ett inlägg visas-->
<?php get_header(); ?>
    <main>
		<section>
			<div class="container">
				<div class="row">
					<div id="primary" class="col-xs-12 col-md-9">
                        <?php 
						// mall content-article.php
                        get_template_part('template-parts/content', 'article');
                        ?>  
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
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>
<?php get_footer(); ?>