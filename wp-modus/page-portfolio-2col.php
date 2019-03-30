<?php
/**
 * Template Name: Portfolio-2col Page
 */

get_header();
?>

<?php get_template_part( 'template-parts/content', 'sub-header' ); ?>

<?php get_template_part( 'template-parts/content', 'portfolio-top-nav' ); ?>

    <!-- ITEMS -->
    <div id="items" class="tow-col">
        <div class="container">
			<?php $loop = new WP_Query( array(
				'post_type' => 'portfolio',
				'orderby'   => 'post_id',
				'order'     => 'ASC',
                'posts_per_page' => '6'
            ) ); ?>
			<?php while ( $loop->have_posts() ) :
				$loop->the_post(); ?>
				<?php if ( ( $loop->current_post + 1 ) % 2 === 1 ) { ?>
                <div class="card-deck mb-md-5">
			<?php } ?>
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
				<?php if ( ( ( $loop->current_post + 1 ) % 2 === 0 ) || ( ( $loop->current_post + 1 ) == ( $loop->post_count ) ) ) { ?>
                </div>
			<?php } ?>
			<?php endwhile; ?>
	        <?php wp_reset_query() ?>
        </div>
    </div>
    <!-- END OF ITEMS
  =========================================== -->


<?php wpbs_pagination($loop); ?>

<?php
get_footer();