<? get_header(); ?>
<? the_post(); ?>


<section id="standard-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><? the_title(); ?></h1>
				<div class="content des">
					<? the_content(); ?>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</section>


<? get_footer(); ?>