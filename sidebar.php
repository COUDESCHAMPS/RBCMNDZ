
<div class="sidebar-contenedor">
	
	<div class="menu-sidebar-superior">


	<?php query_posts( 'cat=test&posts_per_page=10' ); ?>		

	<?php if(have_posts()) : while(have_posts()) : the_post( 'cat=test'); ?> 

		<h2 class="titulo-widget-superior">
			<?php the_widget( 'Widget de HDCmedia' ); ?> 
		</h2>

		<div class="contenedor-de-menu">
			<ul class="lista-widget" id="sidebar">


				<li class="black-li"><a class="negro" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			</ul>
		</div>


	<?php endwhile; // end of the loop. ?>
    <?php endif; ?> 



	</div>
	<div class="menu-sidebar-inferior">
		
	</div>
	<div class="menu-sidebar-social">
		
	</div>

</div>