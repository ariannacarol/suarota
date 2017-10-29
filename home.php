<?php get_header(); ?>

<p> Este es el archivo home.php </p>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
	<h3> <?php the_title() ?> </h3>
	<?php the_content() ?>
	<hr>
<?php endwhile; else: ?>
	<p> No hay posts que mostrar </p>
<?php endif; ?>


<?php get_footer(); ?>