<?php get_header(); ?>

<?php 

/*
	Template name: Homepage
*/	
?>
	


<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
					<?php $sliders = new WP_Query(array(
						'post_type' => 'zboomslider',
						'posts_per_page'=> 3

						));
					?>
					<?php while($sliders->have_posts()): $sliders->the_post(); ?>
					<li><?php the_post_thumbnail() ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--Content-->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">

			<?php $blocks = new WP_Query(array(
						'post_type' => 'zblock',
						'posts_per_page'=> 3

						));
			?>


			<?php while($blocks->have_posts()): $blocks->the_post() ?>
			<div class="col-1-3">
				<div class="wrap-col box">
					
					<h2><?php the_title(); ?></h2>
					<p><?php read_more(20) ?></p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<?php endwhile; ?>
			
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					<?php $allposts = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page'=> 5

						));
					?>

				<?php while($allposts->have_posts()): $allposts->the_post() ?>

					
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail() ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
								
								<p><?php read_more(20) ?> <a href="<?php the_permalink() ?>">[...]</a> </p>							
                                <div class="info">[By <?php the_author() ?> on <?php the_date('m F, Y') ?> with <a href="#"><?php comments_number(); ?>  </a>]</div>
							</div>
						</div>
					</article>
					<?php endwhile; ?>


				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar() ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer() ?>