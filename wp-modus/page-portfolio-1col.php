<?php
/**
 * Template Name: Portfolio-1col Page
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
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="row mb-4">
                    <div class="col-lg-6 pl-0 mb-4">
						<?php $portfolio_image = get_field( 'portfolio_image' ); ?>
						<?php if ( $portfolio_image ) { ?>
                            <img src="<?php echo $portfolio_image['url']; ?>" class="img-fluid"
                                 alt="<?php echo $portfolio_image['alt']; ?>">
						<?php } ?>
                    </div>
                    <div class="col-lg-6">
                        <h6><?php the_field( 'portfolio_title' ); ?></h6>
                        <p><?php the_field( 'portfolio_text' ); ?></p>
                        <div class="row mt-4">
                            <div class="col my-auto">
								<?php $portfolio_link = get_field( 'portfolio_link' ); ?>
								<?php if ( $portfolio_link ) { ?>

                                    <a href="<?php echo $portfolio_link['url']; ?>"><i
                                                class="<?php the_field( 'portfolio_link_icon' ); ?> mr-3"></i><?php echo $portfolio_link['title']; ?>
                                    </a>
								<?php } ?>
                            </div>
                            <div class="col my-auto">
								<?php $portfolio_see_more = get_field( 'portfolio_see_more' ); ?>
								<?php if ( $portfolio_see_more ) { ?>
                                    <a role="button" href="<?php echo $portfolio_see_more['url']; ?>"
                                       class="btn btn-lg float-md-right"><?php echo $portfolio_see_more['title']; ?></a>
								<?php } ?>
                            </div>
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