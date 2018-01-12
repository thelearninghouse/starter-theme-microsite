<?php get_header('lp'); ?>

			<div class="content">
				<main class="main-content cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

					<?php get_template_part( 'template-parts/page_title' ); ?>

					<section class="degrees">
						<div class="wrap-lg">
							<?php get_template_part( 'template-parts/page_content' ); ?>
							<div class="sidebar">
								<?php get_template_part('template-parts/get_started_form'); ?>
							</div>
						</div>
					</section>

				</main>
			</div>

<?php get_footer(); ?>
