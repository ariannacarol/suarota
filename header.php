<!DOCTYPE html>

<html>
<head>
	<title>
		<?php wp_title('-', true, 'right' ); 
				bloginfo(' name ');
		?>

	</title>
	<?php wp_head(); ?>
</head>
		
<body>
		<div class="header">
			<div class="navbar">
				<div class="navbar-inner">
					<?php

						$args = array(
							'menu'=>'menu-principal',
							'container_class'=>'nav-collapse collapse',
							'menu_class'=>'nav pull-right'
						);


						wp_nav_menu( $args );

					?>
				</div>
			</div>	
		</div>
