<?php
/*
  * This is the "navigation-top" Section.
  */
?>
<!-- NAVIGATION TOP -->
<div id="navigation-top">
    <div class="container">
        <div class="row">
			<?php if ( have_rows( 'portfolio_top_navigation' ) ) : ?>
				<?php while ( have_rows( 'portfolio_top_navigation' ) ) : the_row(); ?>
                    <div class="navigation-btns">
						<?php $first_button = get_sub_field( 'first_button' ); ?>
						<?php if ( $first_button ) { ?>
                            <a role="button" href="<?php echo $first_button['url']; ?>"
                               class="btn my-2 my-md-0 mr-3"><?php echo $first_button['title']; ?></a>
						<?php } ?>
						<?php $second_button = get_sub_field( 'second_button' ); ?>
						<?php if ( $second_button ) { ?>
                            <a role="button" href="<?php echo $second_button['url']; ?>"
                               class="btn my-2 my-md-0 mr-3"><?php echo $second_button['title']; ?></a>
						<?php } ?>
						<?php $third_button = get_sub_field( 'third_button' ); ?>
						<?php if ( $third_button ) { ?>
                            <a role="button" href="<?php echo $third_button['url']; ?>"
                               class="btn my-2 my-md-0 mr-3"><?php echo $third_button['title']; ?></a>
						<?php } ?>
						<?php $fourth_button = get_sub_field( 'fourth_button' ); ?>
						<?php if ( $fourth_button ) { ?>
                            <a role="button" href="<?php echo $fourth_button['url']; ?>"
                               class="btn my-2 my-md-0 mr-3"><?php echo $fourth_button['title']; ?></a>
						<?php } ?>
						<?php $fifth_button = get_sub_field( 'fifth_button' ); ?>
						<?php if ( $fifth_button ) { ?>
                            <a role="button" href="<?php echo $fifth_button['url']; ?>"
                               class="btn my-2 my-md-0 mr-3 active"><?php echo $fifth_button['title']; ?></a>
						<?php } ?>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
</div>
<!-- END OF NAVIGATION TOP
=========================================== -->
