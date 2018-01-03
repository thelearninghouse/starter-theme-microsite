<?php get_header(); ?>

			<div class="content">
				<main class="main-content cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

					<header class="page-title">
						<div class="wrap-lg">
							<span class="h3"><?php the_field('school_name', 'options'); ?></span>
							<hr>
							<h1><?php _e( '404 - Page Not Found', 'bonestheme' ); ?></h1>
						</div>
					</header>

					<section>
						<div class="wrap-lg">
							<div class="editor-content">
								<p>The page you were looking for was not found.</p>
							</div>
						</div>
					</section>

				</main>
			</div>

<?php get_footer(); ?>
