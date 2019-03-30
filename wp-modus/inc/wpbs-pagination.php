<?php
/**
 * Bootstrap Custom Pagination function
 */

function wpbs_pagination($custom_query, $pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged)) $paged = 1;
    if ($pages == '') {
//        global $wp_query;
        $pages = $custom_query->max_num_pages;

        if (!$pages)
            $pages = 1;
    }

    if (1 != $pages) {

        echo '<div id="pagination">';
        echo '<div class="container">';
        echo '<div class="row d-none d-md-flex">';
        echo '<div class="col">';
        echo '<nav aria-label="Page navigation example">';
        echo '<ul class="pagination justify-content-center">';


        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)
            echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link(1) . '"
                                                 aria-label="First Page"><span class="hidden-sm-down d-none d-md-block"> First</span></a></li>';

        if ($paged > 1 && $showitems < $pages)
            echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($paged - 1) . '"
                                                 aria-label="Previous Page"><i class="fa fa-angle-left"></i></a></li>';


        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <=
                    $showitems))
                echo ($paged == $i) ? '<li class="page-item"><span class="page-link active"><span class="sr-only">Current Page </span>' . $i . '</span></li>' : '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($i) . '"><span class="sr-only">Page </span>' . $i . '</a></li>';
        }

        if ($paged < $pages && $showitems < $pages)
            echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($paged + 1) . '"
                                                 aria-label="Next Page"><i class="fa fa-angle-right"></i></a></li>';


        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages)
            echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($pages) . '" aria-label="Last Page"><span class="hidden-sm-down d-none d-md-block">Last </span></a></li>';

        echo '</ul>';
        echo '</nav>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

    }
}
