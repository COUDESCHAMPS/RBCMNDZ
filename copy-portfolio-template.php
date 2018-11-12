<?php
/**
 * Template Name: Portfolio Template
 *
 * @package WordPress
 * @subpackage RBCMNDZ
 * @since Twenty Fourteen 1.0
 */

?>

<?php get_header(); ?>


       

	<div class="content-area">
		<div class="entrada animated fadeInUp">

		<?php query_posts( 'cat=featured&posts_per_page=1' ); ?>	


				<?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
				<?php the_excerpt(); ?>	

			<div class="entrada-titulo"><h2 class="margin-bottom-xxl  margin-top-xl"><?php the_title(); ?></h2></div>
			<div class="entrada-contenido">
				<div class="">
				<?php the_post_thumbnail(); ?>
					
				</div>
				   <?php endwhile; // end of the loop. ?>
                   <?php endif; ?> 

			</div>
			<div class="entrada-pie"><?php the_date(); ?></div>


		</div>
		<ul class="content-feature">

			<?php query_posts( 'category_name="test"&posts_per_page=3' ); ?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
			<li class="post-box">

				<div class="entrada">
				<h3 class="entrada-header "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>			

				<p class="parrafo"><div class="padding-p"><?php the_excerpt(); ?></div></p>

				<p class="link-entrada-portfolio"><a class="portfolio-btn" href="<?php the_permalink(); ?>">Ver trabajo</a></p>
				</div>
			</li>
                   <?php endwhile; // end of the loop. ?>
                   <?php //Reset Query
					wp_reset_query(); ?>
                   <?php endif; ?> 
		</ul>
	</div>


<?php get_footer(); ?>



<ul>
 

