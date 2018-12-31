<?php
/**
 * Template Name: Services Page
 */

get_header();
?>

<?php get_template_part( 'template-parts/content', 'sub-header' ); ?>

    <div id="services-heading">
        <div class="container">
            <div class="row">
                <div class="col px-md-0">
                    <h2 class="mb-3"><?php the_field( 'services_heading' ); ?></h2>
                    <p><?php the_field( 'services_description' ); ?></p>
                </div>
            </div>

            <div class="row second-about">
                <div class="col-lg-3 col-md-6 px-md-0">
                    <div id="planning">
                        <h6 class="pb-4"><?php the_field( 'planning_heading' ); ?></h6>
						<?php if ( have_rows( 'planning_list' ) ) : ?>
							<?php while ( have_rows( 'planning_list' ) ) : the_row(); ?>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'plan_1' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'plan_2' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'plan_3' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'plan_4' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'plan_5' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'plan_6' ); ?></li>
                                </ul>
							<?php endwhile; ?>
						<?php endif; ?>
                    </div>
                    <!-- #way-us -->
                </div>
                <!-- .col-lg-3 -->

                <div class="col-lg-3 col-md-6 px-md-0">
                    <div id="development">
                        <h6 class="pb-4"><?php the_field( 'development_heading' ); ?></h6>
						<?php if ( have_rows( 'development_list' ) ) : ?>
							<?php while ( have_rows( 'development_list' ) ) : the_row(); ?>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'dev_1' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'dev_2' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'dev_3' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'dev_4' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'dev_5' ); ?></li>
                                    <li><i class="fa fa-arrow-right"></i> <?php the_sub_field( 'dev_6' ); ?></li>
                                </ul>
							<?php endwhile; ?>
						<?php endif; ?>
                    </div>
                    <!-- #way-us -->
                </div>
                <!-- .col-lg-3 -->

                <!-- semi-circle Pie Chart Div -->
                <div class="col-lg-6 col-md pie-chart">
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

            </div>

        </div>
    </div>
    <!-- END OF ABOUT HEADING
  =========================================== -->

    <!-- OUR TEAM -->
    <section id="pricing-tables">
        <h1><?php the_field( 'pricing_tables_title' ); ?></h1>
        <div class="container mt-5">
            <div class="row">
				<?php $loop = new WP_Query( array(
					'post_type' => 'pricing_tables',
					'orderby'   => 'post_id',
					'order'     => 'ASC'
				) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-lg-3 col-md-6 mb-lg-0 mt-5 mt-lg-0">
                        <div class="card">
                            <div class="card-body text-center">
								<?php if ( have_rows( 'features_&_prices' ) ) : ?>
									<?php while ( have_rows( 'features_&_prices' ) ) : the_row(); ?>
                                        <ul class="list-group mt-5 pt-3 px-4 list-group-flush">
                                            <li class="list-group-item"><?php the_sub_field( 'feature_1' ); ?></li>
                                            <li class="list-group-item"><?php the_sub_field( 'feature_2' ); ?></li>
                                            <li class="list-group-item"><?php the_sub_field( 'feature_3' ); ?></li>
                                            <li class="list-group-item border-0"><?php the_sub_field( 'price' ); ?></li>
                                        </ul>
									<?php endwhile; ?>
								<?php endif; ?>

								<?php $start_button = get_field( 'start_button' ); ?>
								<?php if ( $start_button ) { ?>
                                    <a role="button" href="<?php echo $start_button['url']; ?>"
                                       class="btn-top btn btn-lg"><?php echo $start_button['title']; ?></a>
								<?php } ?>

								<?php $buy_now_button = get_field( 'buy_now_button' ); ?>
								<?php if ( $buy_now_button ) { ?>
                                    <a role="button" href="<?php echo $buy_now_button['url']; ?>"
                                       class="btn btn-lg"><?php echo $buy_now_button['title']; ?></a>
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
