<?php get_header(); ?>

			<div class="content">
				<main class="main-content cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

					<?php get_template_part( 'template-parts/page_title' ); ?>

					<section>
						<div class="wrap-lg">
							<div class="editor-content">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</section>

				</main>
			</div>

<?php get_footer(); ?>
