<?php
/**
 * Template Name: Home Page
 */

get_header();
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
    <!-- SHOWCASE SLIDER -->
    <section id="showcase">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <!-- First image "Slide 1". -->
				<?php $slide_1 = get_field( 'slide_1' ); ?>
				<?php if ( $slide_1 ) {
					?>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo $slide_1['url']; ?>"
                             alt="<?php echo $slide_1['alt']; ?>">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="display-4"><?php the_field( 'slider_1_heading' ); ?></h1>
                            <p><?php the_field( 'slider_1_description' ); ?></p>
                        </div>
                    </div>
					<?php
				} ?>

                <!-- Second image "Slide 2". -->
				<?php $slide_2 = get_field( 'slide_2' ); ?>
				<?php if ( $slide_2 ) {
					?>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $slide_2['url']; ?>"
                             alt="<?php echo $slide_2['alt']; ?>">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="display-4"><?php the_field( 'slider_2_heading' ); ?></h1>
                            <p class="lead"><?php the_field( 'slider_2_description' ); ?></p>
                        </div>
                    </div>
					<?php
				} ?>

                <!-- Third image "Slide 3". -->
				<?php $slide_3 = get_field( 'slide_3' ); ?>
				<?php if ( $slide_3 ) {
					?>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $slide_3['url']; ?>"
                             alt="<?php echo $slide_3['alt']; ?>">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="display-4"><?php the_field( 'slider_3_heading' ); ?></h1>
                            <p><?php the_field( 'slider_3_description' ); ?></p>
                        </div>
                    </div>
					<?php
				} ?>

            </div>
            <!-- .carousel-inner -->

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- #myCarousel -->
    </section>
    <!-- #showcase -->
    <!-- END OF SHOWCASE SLIDER
	=========================================== -->

    <!-- INTRO -->
<?php $intro_button = get_field( 'intro_button' ); ?>
<?php if ( $intro_button ) { ?>
    <section id="intro">
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-10 col-lg-9 text-center text-lg-left p-lg-0">
                    <h3><?php the_field( 'intro_title' ); ?></h3>
                    <p><?php the_field( 'intro_description' ); ?></p>
                </div>
                <div class="col-xl-2 col-lg-3 text-center text-lg-right p-lg-0">
                    <a role="button" href="<?php echo $intro_button['url']; ?>"
                       class="btn btn-lg mt-3"><?php echo $intro_button['title']; ?></a>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
    <!-- #intro -->
    <!-- END OF INTRO
	=========================================== -->

    <!-- SERVICES -->
    <section id="services">
        <div class="container mt-5">

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <div class="card active">
                        <div class="card-body text-center">
                            <i class="fa fa-thumbs-up"></i>
                            <h5 class="card-title"><?php the_field( 'service_name_1' ); ?></h5>
                            <p class="card-text"><?php the_field( 'service_description_1' ); ?></p>
							<?php $service_link_1 = get_field( 'service_link_1' ); ?>
							<?php if ( $service_link_1 ) { ?>
                                <a role="button" href="<?php echo $service_link_1['url']; ?>"
                                   class="btn btn-lg"><?php echo $service_link_1['title']; ?></a>
							<?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-key"></i>
                            <h5 class="card-title"><?php the_field( 'service_name_2' ); ?></h5>
                            <p class="card-text"><?php the_field( 'service_description_2' ); ?></p>
							<?php $service_link_2 = get_field( 'service_link_2' ); ?>
							<?php if ( $service_link_2 ) { ?>
                                <a role="button" href="<?php echo $service_link_2['url']; ?>"
                                   class="btn btn-lg"><?php echo $service_link_2['title']; ?></a>
							<?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-flag"></i>
                            <h5 class="card-title"><?php the_field( 'service_name_3' ); ?></h5>
                            <p class="card-text"><?php the_field( 'service_description_3' ); ?></p>
							<?php $service_link_3 = get_field( 'service_link_3' ); ?>
							<?php if ( $service_link_3 ) { ?>
                                <a role="button" href="<?php echo $service_link_3['url']; ?>"
                                   class="btn btn-lg"><?php echo $service_link_3['title']; ?></a>
							<?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-flask"></i>
                            <h5 class="card-title"><?php the_field( 'service_name_4' ); ?></h5>
                            <p class="card-text"><?php the_field( 'service_description_4' ); ?></p>
							<?php $service_link_4 = get_field( 'service_link_4' ); ?>
							<?php if ( $service_link_4 ) { ?>
                                <a role="button" href="<?php echo $service_link_4['url']; ?>"
                                   class="btn btn-lg"><?php echo $service_link_4['title']; ?></a>
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .row -->

            <!-- </div> -->
        </div>
        <!-- .container -->
    </section>
    <!-- #services -->
    <!-- END OF SERVICES
	=========================================== -->

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

    <!-- CLIENTS -->
    <section id="clients">
        <div class="container">
            <div id="clients-slider" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="row mb-5">
                    <div class="col-lg-2 col-md-3 px-lg-0 my-auto">
                        <div class="slider-title">
                            <h6><?php the_field( 'clients_slider_title' ); ?></h6>
                        </div>
                        <!-- .slider-title -->
                    </div>
                    <div class="col-lg col-md-7 pl-0 pr-4">
                        <hr>
                        <ol class="carousel-indicators carousel-indicators--round d-flex justify-content-center">
                            <li data-target="#clients-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#clients-slider" data-slide-to="1"></li>
                        </ol>
                        <!-- .carousel-indicators -->
                    </div>
                    <div class="col-lg-1 col-md-2">
                        <div class="navigation">
                            <a class="carousel-control-prev" href="#clients-slider" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#clients-slider" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- .navigation -->
                    </div>
                </div>

                <div class="carousel-inner">
					<?php if ( have_rows( 'first_group' ) ) : ?>
						<?php while ( have_rows( 'first_group' ) ) : the_row(); ?>
                            <div class="carousel-item active">
                                <div class="card-deck text-center">
									<?php if ( have_rows( 'client_1' ) ) : ?>
										<?php while ( have_rows( 'client_1' ) ) : the_row(); ?>
											<?php $first_group_image_1 = get_sub_field( 'first_group_image_1' ); ?>
											<?php if ( $first_group_image_1 ) { ?>
                                                <div class="card big-img">
                                                    <a href="<?php the_sub_field( 'first_group_url_1' ); ?>">
                                                        <img class="card-img-top"
                                                             src="<?php echo $first_group_image_1['url']; ?>"
                                                             alt="<?php echo $first_group_image_1['alt']; ?>">
                                                    </a>
                                                </div>
                                                <!-- .card -->
											<?php } ?>

										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'client_2' ) ) : ?>
										<?php while ( have_rows( 'client_2' ) ) : the_row(); ?>
											<?php $first_group_image_2 = get_sub_field( 'first_group_image_2' ); ?>
											<?php if ( $first_group_image_2 ) { ?>
                                                <div class="card big-img">
                                                    <a href="<?php the_sub_field( 'first_group_url_2' ); ?>">
                                                        <img class="card-img-top"
                                                             src="<?php echo $first_group_image_2['url']; ?>"
                                                             alt="<?php echo $first_group_image_2['alt']; ?>">
                                                    </a>
                                                </div>
                                                <!-- .card -->
											<?php } ?>

										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'client_3' ) ) : ?>
										<?php while ( have_rows( 'client_3' ) ) : the_row(); ?>

											<?php $first_group_image_3 = get_sub_field( 'first_group_image_3' ); ?>
											<?php if ( $first_group_image_3 ) { ?>
                                                <div class="card big-img">
                                                    <a href="<?php the_sub_field( 'first_group_url_3' ); ?>">
                                                        <img class="card-img-top"
                                                             src="<?php echo $first_group_image_3['url']; ?>"
                                                             alt="<?php echo $first_group_image_3['alt']; ?>">
                                                    </a>
                                                </div>
                                                <!-- .card -->
											<?php } ?>

										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'client_4' ) ) : ?>
										<?php while ( have_rows( 'client_4' ) ) : the_row(); ?>

											<?php $first_group_image_4 = get_sub_field( 'first_group_image_4' ); ?>
											<?php if ( $first_group_image_4 ) { ?>
                                                <div class="card big-img">
                                                    <a href="<?php the_sub_field( 'first_group_url_4' ); ?>">
                                                        <img class="card-img-top"
                                                             src="<?php echo $first_group_image_4['url']; ?>"
                                                             alt="<?php echo $first_group_image_4['alt']; ?>">
                                                    </a>
                                                </div>
                                                <!-- .card -->
											<?php } ?>

										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'client_5' ) ) : ?>
										<?php while ( have_rows( 'client_5' ) ) : the_row(); ?>

											<?php $first_group_image_5 = get_sub_field( 'first_group_image_5' ); ?>
											<?php if ( $first_group_image_5 ) { ?>
                                                <div class="card big-img">
                                                    <a href="<?php the_sub_field( 'first_group_url_5' ); ?>">
                                                        <img class="card-img-top"
                                                             src="<?php echo $first_group_image_5['url']; ?>"
                                                             alt="<?php echo $first_group_image_5['alt']; ?>">
                                                    </a>
                                                </div>
                                                <!-- .card -->
											<?php } ?>

										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'client_6' ) ) : ?>
										<?php while ( have_rows( 'client_6' ) ) : the_row(); ?>

											<?php $first_group_image_6 = get_sub_field( 'first_group_image_6' ); ?>
											<?php if ( $first_group_image_6 ) { ?>
                                                <div class="card big-img">
                                                    <a href="<?php the_sub_field( 'first_group_url_6' ); ?>">
                                                        <img class="card-img-top"
                                                             src="<?php echo $first_group_image_6['url']; ?>"
                                                             alt="<?php echo $first_group_image_6['alt']; ?>">
                                                    </a>
                                                </div>
                                                <!-- .card -->
											<?php } ?>

										<?php endwhile; ?>
									<?php endif; ?>

                                </div>
                                <!-- .card-deck -->
                            </div>
                            <!-- .carousel-item -->
						<?php endwhile; ?>
					<?php endif; ?>

					<?php if ( have_rows( 'second_group' ) ) : ?>
						<?php while ( have_rows( 'second_group' ) ) : the_row(); ?>
                            <div class="carousel-item">
                                <div class="card-deck text-center">
									<?php if ( have_rows( 'client_1' ) ) : ?>
										<?php while ( have_rows( 'client_1' ) ) : the_row(); ?>
											<?php $second_group_image_1 = get_sub_field( 'second_group_image_1' ); ?>
											<?php if ( $second_group_image_1 ) { ?>
                                                <div class="card big-img">
                                                    <a href="<?php the_sub_field( 'second_group_url_1' ); ?>">
                                                        <img class="card-img-top"
                                                             src="<?php echo $second_group_image_1['url']; ?>"
                                                             alt="<?php echo $second_group_image_1['alt']; ?>">
                                                    </a>
                                                </div>
                                                <!-- .card -->
											<?php } ?>

										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'client_2' ) ) : ?>
										<?php while ( have_rows( 'client_2' ) ) : the_row(); ?>

											<?php $second_group_image_2 = get_sub_field( 'second_group_image_2' ); ?>
											<?php if ( $second_group_image_2 ) { ?>
                                                <div class="card big-img">
                                                    <a href="<?php the_sub_field( 'second_group_url_2' ); ?>">
                                                        <img class="card-img-top"
                                                             src="<?php echo $second_group_image_2['url']; ?>"
                                                             alt="<?php echo $second_group_image_2['alt']; ?>">
                                                    </a>
                                                </div>
                                                <!-- .card -->
											<?php } ?>

										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'client_3' ) ) : ?>
										<?php while ( have_rows( 'client_3' ) ) : the_row(); ?>

											<?php $second_group_image_3 = get_sub_field( 'second_group_image_3' ); ?>
											<?php if ( $second_group_image_3 ) { ?>
                                                <div class="card big-img">
                                                    <a href="<?php the_sub_field( 'second_group_url_3' ); ?>">
                                                        <img class="card-img-top"
                                                             src="<?php echo $second_group_image_3['url']; ?>"
                                                             alt="<?php echo $second_group_image_3['alt']; ?>">
                                                    </a>
                                                </div>
                                                <!-- .card -->
											<?php } ?>

										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'client_4' ) ) : ?>
										<?php while ( have_rows( 'client_4' ) ) : the_row(); ?>

											<?php $second_group_image_4 = get_sub_field( 'second_group_image_4' ); ?>
											<?php if ( $second_group_image_4 ) { ?>
                                                <div class="card big-img">
                                                    <a href="<?php the_sub_field( 'second_group_url_4' ); ?>">
                                                        <img class="card-img-top"
                                                             src="<?php echo $second_group_image_4['url']; ?>"
                                                             alt="<?php echo $second_group_image_4['alt']; ?>">
                                                    </a>
                                                </div>
                                                <!-- .card -->
											<?php } ?>

										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'client_5' ) ) : ?>
										<?php while ( have_rows( 'client_5' ) ) : the_row(); ?>

											<?php $second_group_image_5 = get_sub_field( 'second_group_image_5' ); ?>
											<?php if ( $second_group_image_5 ) { ?>
                                                <div class="card big-img">
                                                    <a href="<?php the_sub_field( 'second_group_url_5' ); ?>">
                                                        <img class="card-img-top"
                                                             src="<?php echo $second_group_image_5['url']; ?>"
                                                             alt="<?php echo $second_group_image_5['alt']; ?>">
                                                    </a>
                                                </div>
                                                <!-- .card -->
											<?php } ?>

										<?php endwhile; ?>
									<?php endif; ?>

									<?php if ( have_rows( 'client_6' ) ) : ?>
										<?php while ( have_rows( 'client_6' ) ) : the_row(); ?>

											<?php $second_group_image_6 = get_sub_field( 'second_group_image_6' ); ?>
											<?php if ( $second_group_image_6 ) { ?>
                                                <div class="card big-img">
                                                    <a href="<?php the_sub_field( 'second_group_url_6' ); ?>">
                                                        <img class="card-img-top"
                                                             src="<?php echo $second_group_image_6['url']; ?>"
                                                             alt="<?php echo $second_group_image_6['alt']; ?>">
                                                    </a>
                                                </div>
                                                <!-- .card -->
											<?php } ?>

										<?php endwhile; ?>
									<?php endif; ?>

                                </div>
                                <!-- .card-deck -->
                            </div>
                            <!-- .carousel-item -->
						<?php endwhile; ?>
					<?php endif; ?>

                </div>
                <!-- .carousel-inner -->

            </div>
            <!-- .carousel slide -->
        </div>
        <!-- .container -->
    </section>
    <!-- #clients -->
    <!-- END OF CLIENTS
	=========================================== -->

<?php
get_footer();
