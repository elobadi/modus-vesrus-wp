<?php
/*
  * This is the "services" Section.
  */
?>
<!-- SERVICES -->
<section id="services">
    <div class="container mt-5">

        <div class="row">
			<?php $loop = new WP_Query( array(
				'post_type' => 'services',
				'orderby'   => 'post_id',
				'order'     => 'ASC'
			) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="<?php the_field( 'service_icon' ); ?>"></i>
                            <h5 class="card-title"><?php the_field( 'service_name' ); ?></h5>
                            <p class="card-text"><?php the_field( 'service_description' ); ?></p>
							<?php $service_link = get_field( 'service_link' ); ?>
							<?php if ( $service_link ) { ?>
                                <a role="button" href="<?php echo $service_link['url']; ?>"
                                   class="btn btn-lg"><?php echo $service_link['title']; ?></a>
							<?php } ?>
                        </div>
                    </div>
                </div>
			<?php endwhile; ?>
			<?php wp_reset_query() ?>
        </div>
        <!-- .row -->

        <!-- </div> -->
    </div>
    <!-- .container -->
</section>
<!-- #services -->
<!-- END OF SERVICES
=========================================== -->