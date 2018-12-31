<?php
/**
 * Template Name: About Page
 */

get_header();
?>

<?php get_template_part( 'template-parts/content', 'sub-header' ); ?>

    <!-- ABOUT HEADING -->
    <div id="about-heading">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="mb-3"><?php the_field( 'about_heading' ); ?></h2>
                    <p><?php the_field( 'about_description' ); ?></p>
                </div>
            </div>

            <div class="row second-about">
                <div class="col-lg-3 col-md-4 px-md-0">
                    <div id="way-us">
                        <h6 class="pb-4"><?php the_field( 'why_us_heading' ); ?></h6>
						<?php if ( have_rows( 'why_us_list' ) ) : ?>
							<?php while ( have_rows( 'why_us_list' ) ) : the_row(); ?>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'reason_1' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'reason_2' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'reason_3' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'reason_4' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'reason_5' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'reason_6' ); ?></li>
                                </ul>
							<?php endwhile; ?>
						<?php endif; ?>
                    </div>
                    <!-- #way-us -->
                </div>
                <!-- .col-lg-3 -->

                <!-- semi-circle Pie Chart Div -->
                <div class="col-lg-6 col-md-8 pie-chart">
                    <div id="skills">
                        <!-- <div class="row"> -->
                        <div class="chart-heading">
                            <p><?php the_field( 'skills_description' ); ?></p>
                        </div>
                        <div class="pie">
                            <div class="row">
								<?php if ( have_rows( 'skill_1' ) ) : ?>
									<?php while ( have_rows( 'skill_1' ) ) : the_row(); ?>
                                        <div class="col-md col-6 px-md-0 mt-3 mt-sm-0 text-center">
                                            <div class="contents">
                                                <div class="pie-wrapper">
                                                    <div class="arc"
                                                         data-value="<?php the_sub_field( 'skill_value' ); ?>"></div>
                                                    <span class="score"><?php the_sub_field( 'skill_value' ); ?></span>
                                                </div>
                                                <span class="label-text"><?php the_sub_field( 'skill_name' ); ?></span>
                                            </div>
                                        </div>
									<?php endwhile; ?>
								<?php endif; ?>

								<?php if ( have_rows( 'skill_2' ) ) : ?>
									<?php while ( have_rows( 'skill_2' ) ) : the_row(); ?>
                                        <div class="col-md col-6 px-md-0 mt-3 mt-sm-0 text-center">
                                            <div class="contents">
                                                <div class="pie-wrapper">
                                                    <div class="arc"
                                                         data-value="<?php the_sub_field( 'skill_value' ); ?>"></div>
                                                    <span class="score"><?php the_sub_field( 'skill_value' ); ?></span>
                                                </div>
                                                <span class="label-text"><?php the_sub_field( 'skill_name' ); ?></span>
                                            </div>
                                        </div>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php if ( have_rows( 'skill_3' ) ) : ?>
									<?php while ( have_rows( 'skill_3' ) ) : the_row(); ?>
                                        <div class="col-md col-6 px-md-0 mt-3 mt-sm-0 text-center">
                                            <div class="contents">
                                                <div class="pie-wrapper">
                                                    <div class="arc"
                                                         data-value="<?php the_sub_field( 'skill_value' ); ?>"></div>
                                                    <span class="score"><?php the_sub_field( 'skill_value' ); ?></span>
                                                </div>
                                                <span class="label-text"><?php the_sub_field( 'skill_name' ); ?></span>
                                            </div>
                                        </div>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php if ( have_rows( 'skill_4' ) ) : ?>
									<?php while ( have_rows( 'skill_4' ) ) : the_row(); ?>
                                        <div class="col-md col-6 px-md-0 mt-3 mt-sm-0 text-center">
                                            <div class="contents">
                                                <div class="pie-wrapper">
                                                    <div class="arc"
                                                         data-value="<?php the_sub_field( 'skill_value' ); ?>"></div>
                                                    <span class="score"><?php the_sub_field( 'skill_value' ); ?></span>
                                                </div>
                                                <span class="label-text"><?php the_sub_field( 'skill_name' ); ?></span>
                                            </div>
                                        </div>
									<?php endwhile; ?>
								<?php endif; ?>
                            </div>
                        </div>
                        <!-- col .pie -->

                        <!-- </div> -->
                        <!-- .row -->
                    </div>
                    <!-- #skills -->
                </div>
                <!-- .col-lg-6 pie-chart-->

                <div class="col-lg-3 mt-5 mt-lg-0">
                    <div id="testimonial">
                        <h6 class="pb-2"><?php the_field( 'testimonial_heading' ); ?></h6>
                        <div class="card border-light">
                            <div class="card-body">
								<?php the_field( 'testimonial_body' ); ?>
                            </div>
                        </div>
                        <div class="t-name">
                            <p><?php the_field( 'client_name' ); ?></p>
                        </div>
                    </div>
                </div>
                <!-- .col-lg-3 -->
            </div>

        </div>
    </div>
    <!-- END OF ABOUT HEADING
	=========================================== -->

    <!-- OUR TEAM -->
    <section id="our-team">
        <h1><?php the_field( 'our_team_title' ); ?></h1>
        <div class="container mt-5">
            <!-- <div class="card-deck"> -->
            <div class="row">

				<?php $loop = new WP_Query( array(
					'post_type' => 'our_team',
					'orderby'   => 'post_id',
					'order'     => 'ASC'
				) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 mt-5 mt-lg-0">
                        <div class="card">
                            <div class="card-body text-center">
								<?php $member_photo = get_field( 'member_photo' ); ?>
								<?php if ( $member_photo ) { ?>
                                    <img class="card-img-top" src="<?php echo $member_photo['url']; ?>"
                                         alt="<?php echo $member_photo['alt']; ?>">
								<?php } ?>
                                <div class="overlay">
                                    <div class="container">
                                        <p class="overlay-info"><?php the_field( 'about_member' ); ?></p>
										<?php if ( have_rows( 'social_media' ) ) : ?>
											<?php while ( have_rows( 'social_media' ) ) : the_row(); ?>
                                                <ul class="overlay-social list-inline">
													<?php if ( have_rows( 'member_facebook' ) ) : ?>
														<?php while ( have_rows( 'member_facebook' ) ) : the_row(); ?>
                                                            <a href="<?php the_sub_field( 'profile_link' ); ?>">
                                                                <li class="list-inline-item"><i
                                                                            class="<?php the_sub_field( 'facebook_icon' ); ?>"></i>
                                                                </li>
                                                            </a>

														<?php endwhile; ?>
													<?php endif; ?>
													<?php if ( have_rows( 'member_twitter' ) ) : ?>
														<?php while ( have_rows( 'member_twitter' ) ) : the_row(); ?>
                                                            <a href="<?php the_sub_field( 'profile_link' ); ?>">
                                                                <li class="list-inline-item"><i
                                                                            class="<?php the_sub_field( 'twitter_icon' ); ?>"></i>
                                                                </li>
                                                            </a>
														<?php endwhile; ?>
													<?php endif; ?>

													<?php if ( have_rows( 'member_google-plus' ) ) : ?>
														<?php while ( have_rows( 'member_google-plus' ) ) : the_row(); ?>
                                                            <a href="<?php the_sub_field( 'profile_link' ); ?>">
                                                                <li class="list-inline-item"><i
                                                                            class="<?php the_sub_field( 'google-plus_icon' ); ?>"></i>
                                                                </li>
                                                            </a>
														<?php endwhile; ?>
													<?php endif; ?>

													<?php if ( have_rows( 'member_linkedin' ) ) : ?>
														<?php while ( have_rows( 'member_linkedin' ) ) : the_row(); ?>
                                                            <a href="<?php the_sub_field( 'profile_link' ); ?>">
                                                                <li class="list-inline-item"><i
                                                                            class="<?php the_sub_field( 'linkedin_icon' ); ?>"></i>
                                                                </li>
                                                            </a>
														<?php endwhile; ?>
													<?php endif; ?>
                                                </ul>

											<?php endwhile; ?>
										<?php endif; ?>
                                    </div>
                                </div>
								<?php $member_link = get_field( 'member_link' ); ?>
								<?php if ( $member_link ) { ?>
                                    <a role="button" href="<?php echo $member_link['url']; ?>"
                                       class="btn btn-lg"><?php echo $member_link['title']; ?></a>
								<?php } ?>
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?>
				<?php wp_reset_query() ?>
            </div>
            <!-- .row -->
        </div>
    </section>
    <!-- END OF OUR TEAM
	=========================================== -->

<?php get_template_part( 'template-parts/content', 'second-heading' ); ?>

<?php get_template_part( 'template-parts/content', 'clients' ); ?>

<?php
get_footer();
