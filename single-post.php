/*
 Template Name: single-post
 */

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<div class="lateral">
		<div class="enano-custom">
			<?php query_posts( 'cat=featured' ); ?>	

		
			<?php get_sidebar(); ?>
		

                   <?php //Reset Query
					wp_reset_query(); ?>


		</div>
	</div>


	<div class="content-area-post">
		<div class="entrada">
			<h3><?php the_title(); ?></h3>
			<div class="imagen-post">
				<?php wp_get_attachment_image( $attachment_id, $size, $icon, $attr ); ?>	
			</div>
			<div class="el-contenido">
					<?php wp_get_attachment_image( $attachment_id, $size, $icon, $attr ); ?>	
					<?php the_content(); ?>
			</div>
			</div>

		</div>
	</div>


<?php endwhile; else: ?>
 
    Aquí va un mensaje en caso de que no haya posts para mostrar
 
<?php endif; ?>

<?php get_footer(); ?>