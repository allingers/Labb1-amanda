<footer id="footer" >

	<div class="container">
		<div class="row top" >
			<?php if(is_active_sidebar('footer')):?>
			<?php dynamic_sidebar('footer'); ?>
			<?php endif; ?>

			<div class="row bottom">
				<div class="col-xs-12">
					<p>Copyright &copy; Grupp X, 2023</p>
				</div>
			</div>
		</div>
		</footer>
	</div>
<?php wp_footer(); ?>
</body>
</html>