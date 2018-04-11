<?php get_header() ?>

<!--Content-->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<?php while(have_posts()): the_post(); ?>
					
						<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
						<div class="info">[By <?php the_author() ?> on <?php the_date('m F, Y') ?> with <a href="#"><?php comments_number(); ?>  </a>]</div>
						<p><?php the_excerpt() ?>...
						<a href="<?php the_permalink() ?>">Details</a>

						</p>
						
					
					</article>
					<?php endwhile; ?>
							
							

					
					<ul id="pagi">
						<?php the_posts_pagination(array(

								'prev_text' => 'PREV',
								'next_text' => 'NEXT',
								'screen_reader_text' => ' '


								)) ?>

					</ul>
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar() ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer() ?>