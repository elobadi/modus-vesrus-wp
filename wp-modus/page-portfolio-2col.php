<?php
/**
 * Template Name: Portfolio-2col Page
 */

get_header();
?>

<?php get_template_part( 'template-parts/content', 'sub-header' ); ?>

<?php get_template_part( 'template-parts/content', 'portfolio-top-nav' ); ?>

    <!-- ITEMS -->
    <div id="items">
        <div class="container">
			<?php $loop = new WP_Query( array(
				'post_type' => 'portfolio',
				'orderby'   => 'post_id',
				'order'     => 'ASC'
			) ); ?>
			<?php while ( $loop->have_posts() ) :
				$loop->the_post(); ?>
                <div class="card-deck mb-md-5">
                    <div class="card border-0 ml-0">
                        <div class="card-body p-2">
							<?php $portfolio_image = get_field( 'portfolio_image' ); ?>
							<?php if ( $portfolio_image ) { ?>
                                <img src="<?php echo $portfolio_image['url']; ?>" class="img-fluid"
                                     alt="<?php echo $portfolio_image['alt']; ?>">
                                <div class="overlay">
                                    <div class="container">
                                        <ul class="overlay-links list-inline">

											<?php $portfolio_link = get_field( 'portfolio_link' ); ?>
											<?php if ( $portfolio_link ) { ?>
                                                <a href="<?php echo $portfolio_link['url']; ?>">
                                                    <li class="list-inline-item"><i
                                                                class="<?php the_field( 'portfolio_see_more_icon' ); ?>"></i>
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-inline-item"><i
                                                                class="<?php the_field( 'portfolio_link_icon' ); ?>"></i>
                                                    </li>
                                                </a>
											<?php } ?>
                                        </ul>
                                        <p class="overlay-info">
                                        <h6><?php the_field( 'portfolio_title' ); ?></h6></p>
                                    </div>
                                </div>
							<?php } ?>
                        </div>
                    </div>

                    <div class="card border-0 ml-0">
                        <div class="card-body p-2">
							<?php $portfolio_image = get_field( 'portfolio_image' ); ?>
							<?php if ( $portfolio_image ) { ?>
                                <img src="<?php echo $portfolio_image['url']; ?>" class="img-fluid"
                                     alt="<?php echo $portfolio_image['alt']; ?>">
                                <div class="overlay">
                                    <div class="container">
                                        <ul class="overlay-links list-inline">

											<?php $portfolio_link = get_field( 'portfolio_link' ); ?>
											<?php if ( $portfolio_link ) { ?>
                                                <a href="<?php echo $portfolio_link['url']; ?>">
                                                    <li class="list-inline-item"><i
                                                                class="<?php the_field( 'portfolio_see_more_icon' ); ?>"></i>
                                                    </li>
                                                </a>
                                                <a href="#">
                                                    <li class="list-inline-item"><i
                                                                class="<?php the_field( 'portfolio_link_icon' ); ?>"></i>
                                                    </li>
                                                </a>
											<?php } ?>
                                        </ul>
                                        <p class="overlay-info">
                                        <h6><?php the_field( 'portfolio_title' ); ?></h6></p>
                                    </div>
                                </div>
							<?php } ?>
                        </div>
                    </div>
                </div>
			<?php endwhile; ?>
			<?php wp_reset_query() ?>
        </div>
    </div>
    <!-- END OF ITEMS
  =========================================== -->

    <!-- PAGINATION -->
    <div id="pagination">
        <div class="container">
            <div class="row d-none d-md-flex">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link active" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">10</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">11</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">12</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row d-flex d-md-none">
                <div class="col">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link active" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">12</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF PAGINATION -->

<?php
get_footer();