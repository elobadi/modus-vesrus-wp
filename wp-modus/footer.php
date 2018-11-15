<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-modus
 */

?>
<!-- FOOTER -->
<footer>
    <div class="info-footer">
        <div class="container">
            <div class="row">
                <div class="col contact-info mb-4 mb-sm-0">
                    <h2>
                        <strong>MODUS</strong><small>versus</small>
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec .</p>
                    <div class="phone">
                        <small class="mr-3">Phone: </small><span>182 2569 5896</span></div>
                    <div class="email">
                        <small class="mr-3">e-mail: </small><span>info@modu.versus</span></div>
                </div>
                <div class="col footer-nav mb-4 mb-sm-0">
                    <div class="row">
                        <div class="col">
                            <h6>Company</h6>
                            <ul class="list-unstyled">
                                <a href="#">
                                    <li><i class="fa fa-angle-right"></i> About</li>
                                </a>
                                <a href="#">
                                    <li><i class="fa fa-angle-right"></i> FAQ</li>
                                </a>
                                <a href="#">
                                    <li><i class="fa fa-angle-right"></i> Contact</li>
                                </a>
                                <a href="#">
                                    <li><i class="fa fa-angle-right"></i> Terms</li>
                                </a>
                                <a href="#">
                                    <li><i class="fa fa-angle-right"></i> Privacy</li>
                                </a>
                                <a href="#">
                                    <li><i class="fa fa-angle-right"></i> Testimonials</li>
                                </a>
                            </ul>
                        </div>
                        <div class="col">
                            <h6>Community</h6>
                            <ul class="list-unstyled">
                                <a href="#">
                                    <li><i class="fa fa-angle-right"></i> Blog</li>
                                </a>
                                <a href="#">
                                    <li><i class="fa fa-angle-right"></i> Forum</li>
                                </a>
                                <a href="#">
                                    <li><i class="fa fa-angle-right"></i> Support</li>
                                </a>
                                <a href="#">
                                    <li><i class="fa fa-angle-right"></i> Newsletter</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col from-blog">
                    <h5>from the <strong>BLOG</strong></h5>
                    <div class="media mb-4">
                        <img class="rounded mr-3" src="<?php bloginfo('stylesheet_directory'); ?>/img/post-img.png">
                        <div class="media-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="post-date">26 May, 2013</p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="rounded mr-3" src="<?php bloginfo('stylesheet_directory'); ?>/img/post-img.png">
                        <div class="media-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p class="post-date">26 May, 2013</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-footer">
        <div class="container">
            <div class="row">
                <div class="col align-self-start my-auto">
                    <p>Designer: Dimitar Tsankov</p>
                </div>
                <div class="col align-self-center my-auto text-center">
                    <p>Developer: Mohammed El-obadi</p>
                </div>
                <div class="col align-self-end my-auto text-right">
                    <a href="http://www.facebook.com"><i class="fa fa-facebook-f"></i></a>
                    <a href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.rss.com/"><i class="fa fa-rss"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- /FOOTER -->
<!-- END OF FOOTER
=========================================== -->

<script src="<?php bloginfo('template_directory'); ?>\js\jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>\js\popper.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>\js\bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>\js\scripts.js"></script>
<script src="<?php bloginfo('template_directory'); ?>\js\bw.js"></script>
</body>

</html>
