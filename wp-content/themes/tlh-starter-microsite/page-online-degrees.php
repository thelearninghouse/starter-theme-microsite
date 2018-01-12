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
					  <h2 class="wrap-lg">The Alvernia University Online Advantage</h2>
					  <p class="wrap-sm">If you’re looking to advance your career but you need to balance work and family commitments, online programs offer a solution. Here are some of the benefits of Alvernia University’s online degree programs:</p>
					  <ul class="wrap-lg features">
					    <li>
					      <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/schedule.svg" alt="">
					      <div class="feature-content">
					        <p>Flexible course schedules that allow you to balance your busy life with your coursework</p>
					      </div>
					    </li>
					    <li>
					      <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/book.svg" alt="">
					      <div class="feature-content">
					        <p>Knowledgeable professors who ensure you learn relevant material</p>
					      </div>
					    </li>
					    <li>
					      <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/group.svg" alt="">
					      <div class="feature-content">
					        <p>Small class sizes that encourage engagement and individual growth</p>
					      </div>
					    </li>
					    <li>
					      <img src="<?php echo get_template_directory_uri(); ?>/library/images/icons/scholarship.svg" alt="">
					      <div class="feature-content">
					        <p>Affordable tuition rates and financial aid availability</p>
					      </div>
					    </li>
					  </ul>
					</section>

				</main>
			</div>

<?php get_footer(); ?>
