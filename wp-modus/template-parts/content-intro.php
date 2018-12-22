<?php
/*
  * This is the "intro" Section.
  */
?>
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