<? get_header(); ?>
<? the_post(); ?>


<?/***************************************************/?>
<?/* content */?>
<?/***************************************************/?>
<article id="standard-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><? the_title(); ?></h1>
				<? the_content(); ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</article>


<? get_footer(); ?>