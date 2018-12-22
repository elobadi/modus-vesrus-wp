<?php
/*
  * This is the "clients" Section.
  */
?>

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