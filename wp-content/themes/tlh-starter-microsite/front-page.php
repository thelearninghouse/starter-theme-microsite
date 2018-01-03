<?php get_header(); ?>

			<div class="content">

				<div class="wrap cf">

						<main class="main-content cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<header class="page-title">
								<h1><?php the_field('school_name', 'options'); ?></h1>
								<hr>
								<span class="h3">Take the next step into your future</span>
							</header>

							<section class="cta">
								<div class="cards wrap-md">
									<div class="card">
										<img class="illustration" src="<?php echo get_template_directory_uri(); ?>/library/images/online-degrees.svg" width="142" height="75">
										<h2 class="title h3">Online Degrees</h2>
										<p>Take advantage of a convenient way to reach your professional goals, learning from experienced professors to help you get ahead.</p>
										<a class="button" href="/online-degrees">View Online Degrees</a>
									</div>
									<div class="card">
										<img class="illustration" src="<?php echo get_template_directory_uri(); ?>/library/images/campus-degrees.svg" width="142" height="75">
										<h2 class="title h3">Campus Degrees</h2>
										<p>Learn at Alvernia’s beautiful 121-acre campus, in small classes designed to help you become a lifelong learner.</p>
										<a class="button" href="/campus-degrees">View Campus Degrees</a>
									</div>
								</div>
							</section>

							<section class="welcome bg-seal">
								<div class="wrap-sm">
									<h2>Welcome to Alvernia University</h2>
									<p>With an education rooted in the liberal arts, we strive to provide programs that engage both students on campus and online to experience a personal and social transformation.</p>
									<p>Alvernia University is guided by Franciscan values, promoting lifelong learning, engaged citizens and ethical leaders with moral courage. Graduates of our rigorous and inclusive courses are inspired to continue the growth started at our university and make the world a better place.</p>
								</div>
							</section>

							<section class="about">
								<div class="wrap-lg row">
									<div class="column">
										<h2 class="h3">About Us</h2>
										<p>Founded in 1958, Alvernia University traces its roots back to 1926, when the Bernardine Sisters of the Third Order of Saint Francis established an orphanage in what’s now known as Francis Hall. The institution became a four-year liberal arts school in 1958 and two years later, received its charter from the Commonwealth of Pennsylvania.</p>
										<p>With top-notch faculty, competitive tuition, a student-first approach and challenging coursework, Alvernia University prepares students to succeed in an ever-changing world.</p>
									</div>
									<div class="column">
										<div class="core-values">
											<h3 class="h4">Alvernia's Core Fraciscan Values</h3>
											<p>As one of only 24 Franciscan institutions in the United States, Alvernia is proud to stand for its liberal arts education grounded in Catholic faith. Alvernia’s core Franciscan values include:</p>
											<ul>
												<li>Service</li>
												<li>Peacemaking</li>
												<li>Collegiality</li>
												<li>Humility</li>
												<li>Contemplation</li>
											</ul>
										</div>
									</div>
								</div>
							</section>
						</main>

				</div>

			</div>

<?php get_footer(); ?>
