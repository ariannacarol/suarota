<?php get_header(); 
/*

	Template Name: Plantilla paquete

*/

	$args = array(

		'post_type' => 'paquete'

	);

	$query = new WP_Query( $args );


?>

<p> Este es el archivo paquete.php </p>

<?php if( have_posts() ): while( $query->have_posts() ): $query->the_post(); ?>
	<a href="<?php the_permalink() ?>"> <h3> <?php the_title() ?> </h3> </a>
	<?php the_field('descripcion') ?>
	<hr>
<?php endwhile; else: ?>
	<p> No hay posts que mostrar </p>
<?php endif; ?>


<?php get_footer(); ?>