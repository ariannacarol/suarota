<?php get_header(); ?>

<!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-user page-title-icon"></i>
                        <h2><?php echo $pagename ?> /</h2>
                        <p><?php 
                        	if(is_page('contacto'))
                        		echo "Ponte en contacto con nosotros";
                        	else if (is_page('sobre-nosotros'))
                        		echo "Conoce más sobre Suarota";
                        ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="page container">
            <div class="row">
                <div class="page-text span12">

					<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
						<h3> <?php the_title() ?> </h3>
						<?php the_content() ?>
						<hr>
					<?php endwhile; else: ?>
						<p> No hay posts que mostrar </p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php get_template_part('content','opiniones'); ?>
<?php get_footer(); ?>