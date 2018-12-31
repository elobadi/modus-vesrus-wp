<?php
/*
  * This is the "sub-header" Section.
  */
?>
<!-- SUB HEADER -->
<div id="sub-header">
    <div class="container">
        <div class="row">
            <div class="col text-left my-auto">
                <h6 class="text-uppercase"><?php the_field( 'page_name' ); ?></h6>
            </div>
            <div class="col text-right my-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-right">
						<?php $home_page = get_field( 'home_page' ); ?>
						<?php if ( $home_page ) { ?>
                            <li class="breadcrumb-item"><a
                                        href="<?php echo $home_page['url']; ?>"><?php echo $home_page['title']; ?></a>
                            </li>
						<?php } ?>
                        <li class="breadcrumb-item active"
                            aria-current="page"><?php the_field( 'page_name' ); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- END OF SUB HEADER
=========================================== -->