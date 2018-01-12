<?php get_header(); ?>

			<div class="content">
				<main class="main-content cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

					<?php get_template_part( 'template-parts/page_title' ); ?>

					<section class="degrees bg-seal">
						<div class="wrap-lg">
							<?php get_template_part( 'template-parts/page_content' ); ?>
							<div class="sidebar">
								<?php get_template_part( 'template-parts/get_started_form' ); ?>
							</div>
						</div>
					</section>

					<section class="advantage">
						<h2 class="wrap-lg">The Alvernia University Advantage</h2>
						<p  class="wrap-sm">Located in scenic Berks County, Pennsylvania, Alvernia University’s 121-acre main campus provides a welcoming community to students who are looking to begin their educational journey or finish what they’ve already started.</p>
						<ul class="wrap-lg features">
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/integrated-learning.svg" alt="">
								<div class="feature-content">
									<h3 class="title">Integrated Learning</h3>
									<p>We believe in combining liberal arts and professional education with rigorous courses designed for students to experience personal growth both in and out of the classroom.</p>
								</div>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/world.svg" alt="">
								<div class="feature-content">
									<h3 class="title">Real-World Learning</h3>
									<p>With a hands-on approach, Alvernia University enables students to gain the skills they need to be competitive in the job market.</p>
								</div>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/scholarship.svg" alt="">
								<div class="feature-content">
									<h3 class="title">Financial Aid</h3>
									<p>Alvernia University offers competitive tuition, and 98 percent of students receive some form of financial aid to achieve their degrees.</p>
								</div>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/book.svg" alt="">
								<div class="feature-content">
									<h3 class="title">Experienced Faculty</h3>
									<p>Our faculty take their real-world experience and pass it along to students through engaging, meaningful curricula designed for learning outcomes.</p>
								</div>
							</li>
						</ul>
					</section>

				</main>
			</div>

<?php get_footer(); ?>
