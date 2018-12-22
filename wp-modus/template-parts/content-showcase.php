<?php
/*
  * This is the "showcase" Section.
  */
?>
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