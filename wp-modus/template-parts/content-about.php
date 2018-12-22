<?php
/*
  * This is the "about" Section.
  */
?>

<style>
    /* Changing the "browser-windows" images Dynamically */
    .content-1 {
    <?php $window_image_1 = get_field( 'window_image_1' ); ?><?php if ( $window_image_1 ) { ?> background: url("<?php echo $window_image_1['url']; ?>") no-repeat center;
    <?php } ?>
    }

    .content-2 {
    <?php $window_image_2 = get_field( 'window_image_2' ); ?><?php if ( $window_image_2 ) { ?> background: url("<?php echo $window_image_2['url']; ?>") no-repeat center;
    <?php } ?>
    }

    .content-3 {
    <?php $window_image_3 = get_field( 'window_image_3' ); ?><?php if ( $window_image_3 ) { ?> background: url("<?php echo $window_image_3['url']; ?>") no-repeat center;
    <?php } ?>
    }
</style>
<!-- ABOUT -->
<section id="about" class="clearfix">
    <div class="container">
        <div class="browser-slider">
            <div class="about-heading text-center">
                <h1><?php the_field( 'about_heading' ); ?></h1>
                <p><?php the_field( 'about_description' ); ?></p>
            </div>
            <div class="row d-none d-md-flex">
                <div id="wrapper_bu">

                    <div id="bu1">
                        <div class="browser-windows">
                            <div class="top">
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <div class="float-right">
                                    <span class="dot-right"></span>
                                </div>
                            </div>
                            <div class="content-1"></div>
                        </div>
                    </div>
                    <!-- .bu1 -->

                    <div id="bu2">
                        <div class="browser-windows">
                            <div class="top">
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <div class="float-right">
                                    <span class="dot-right"></span>
                                </div>
                            </div>
                            <div class="content-2"></div>
                        </div>
                    </div>
                    <!-- .bu2 -->

                    <div id="bu3">
                        <div class="browser-windows">
                            <div class="top">
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <div class="float-right">
                                    <span class="dot-right"></span>
                                </div>
                            </div>
                            <div class="content-3"></div>
                        </div>
                    </div>
                    <!-- .bu3 -->

                </div>
                <!-- .wrapper_bu -->
            </div>
            <!-- .row -->
        </div>
        <!-- .browser-slider -->


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

                            <div class="col-md col-6 px-md-0 mt-3 mt-sm-0 text-center">
								<?php if ( have_rows( 'skill_1' ) ) : ?>
									<?php while ( have_rows( 'skill_1' ) ) : the_row(); ?>
                                        <div class="contents">
                                            <div class="pie-wrapper">
                                                <div class="arc"
                                                     data-value="<?php the_sub_field( 'skill_value' ); ?>"></div>
                                                <span class="score"><?php the_sub_field( 'skill_value' ); ?></span>
                                            </div>
                                            <span class="label-text"><?php the_sub_field( 'skill_name' ); ?></span>
                                        </div>
									<?php endwhile; ?>
								<?php endif; ?>
                            </div>
                            <div class="col-md col-6 px-md-0 mt-3 mt-sm-0 text-center">
								<?php if ( have_rows( 'skill_2' ) ) : ?>
									<?php while ( have_rows( 'skill_2' ) ) : the_row(); ?>
                                        <div class="contents">
                                            <div class="pie-wrapper">
                                                <div class="arc"
                                                     data-value="<?php the_sub_field( 'skill_value' ); ?>"></div>
                                                <span class="score"><?php the_sub_field( 'skill_value' ); ?></span>
                                            </div>
                                            <span class="label-text"><?php the_sub_field( 'skill_name' ); ?></span>
                                        </div>
									<?php endwhile; ?>
								<?php endif; ?>
                            </div>
                            <div class="col-md col-6 px-md-0 mt-3 mt-sm-0 text-center">
								<?php if ( have_rows( 'skill_3' ) ) : ?>
									<?php while ( have_rows( 'skill_3' ) ) : the_row(); ?>
                                        <div class="contents">
                                            <div class="pie-wrapper">
                                                <div class="arc"
                                                     data-value="<?php the_sub_field( 'skill_value' ); ?>"></div>
                                                <span class="score"><?php the_sub_field( 'skill_value' ); ?></span>
                                            </div>
                                            <span class="label-text"><?php the_sub_field( 'skill_name' ); ?></span>
                                        </div>
									<?php endwhile; ?>
								<?php endif; ?>
                            </div>
                            <div class="col-md col-6 px-md-0 mt-3 mt-sm-0 text-center">
								<?php if ( have_rows( 'skill_4' ) ) : ?>
									<?php while ( have_rows( 'skill_4' ) ) : the_row(); ?>
                                        <div class="contents">
                                            <div class="pie-wrapper">
                                                <div class="arc"
                                                     data-value="<?php the_sub_field( 'skill_value' ); ?>"></div>
                                                <span class="score"><?php the_sub_field( 'skill_value' ); ?></span>
                                            </div>
                                            <span class="label-text"><?php the_sub_field( 'skill_name' ); ?></span>
                                        </div>
									<?php endwhile; ?>
								<?php endif; ?>
                            </div>
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
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #about -->
<!-- END OF ABOUT
=========================================== -->