<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title><?php the_title();?></title>
    <?php wp_head(); ?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="http://localhost/labb1/">Labb1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<?php 
								get_search_form();
								?>
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					<?php 
						wp_nav_menu(
						array(
							'menu' => 'Desktop Primary Top Bar', 
							'container' => '',
							'theme_location' => 'primary',
						)
						);

					?>
					</div>
				</div>
			</div>
		</nav>