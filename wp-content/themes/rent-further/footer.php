<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			<!-- footer-form -->
    <section class="footer-form" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-form-text">
                        <h2><?php echo get_field('footer_form_main_heading',59); ?></h2>
                    </div>
                </div>
            </div>
            <!-- form -->
            <div class="row">
                <div class="col-md-7">
                	<?php echo do_shortcode('[contact-form-7 id="5d5c3f3" title="Contact Section Form"]'); ?>
                    <!-- <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Enter First Name">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Last Name">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Home Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Enter Address">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Business Title</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="Enter Business Title">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Ownership Percent</label>
                            <input type="text" class="form-control" id="inputCity"
                                placeholder="Enter Ownership Percent">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Date of Birth </label>
                            <input type="text" class="form-control" id="inputCity" placeholder="Enter Date of Birth">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="Enter City">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip" placeholder="Enter Zip">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <div class="sign-button">
                            <a href="#">Sign In</a>
                        </div>
                    </form> -->
                </div>
                <div class="col-md-5">
                    <div class="footer-form-text">
                        <h1><?php echo get_field('footer_section_right_side_heading',59); ?></h1>
                        <p><?php echo get_field('footer_section_right_side_content',59); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer-part -->
    <footer class="footer-part py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="top-footer">
                        <div class="logos">
                            <a href="#">Rent Further</a>
                        </div>
                        <div class="footer-text">
                            <p><?php echo get_field('footer_short_content',59); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="middel-footer">
                        <article>Menu Bar</article>
                        <?php wp_nav_menu( array('menu' => 'Footer Menu', 'container' => '', 'items_wrap' => '<ul class="">%3$s</ul>' )); ?>
                        <!-- <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="#">SERVICE</a></li>
                            <li><a href="#">BLOG</a></li>
                            <li><a href="#">CONTACT</a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact">
                        <article>Contact</article>
                        <ul>
                            <li> <span><i class="fa fa-map-marker" aria-hidden="true"></i></span><?php echo get_field('address',59); ?></li>
                            <li><span><i class="fa fa-phone" aria-hidden="true"></i></span><?php echo get_field('phone_number',59); ?></li>
                            <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span><?php echo get_field('email',59); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bootom-footer">
                        <article>Links</article>
                        <nav>
                        	<?php	
            
            $socialmedia = CFS()->get( 'social_media_loop',59 );
            if (is_array($socialmedia) || is_object($socialmedia)) {
            	
            
foreach ( $socialmedia as $socialmediaitem ) {
	
 ?>
                            <a href="<?php echo $socialmediaitem['social_media_link'] ?>"><?php echo $socialmediaitem['social_media_icon'] ?></a>
                        <?php } } ?>
                            <!-- <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> -->
                        </nav>
                    </div>
                </div>
            </div>
            <div class="bottom-fotter-content text-center">
                <P>Copyright <?php echo date('Y'); ?> Rent Relief. All Rights Reserved.</P>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>


    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/stellarnav.js"></script>
    <script type="text/javascript">

        jQuery(document).ready(function ($) {
            jQuery('.stellarnav').stellarNav({
                breakpoint: 960,
                position: 'right',
            });
        });
    </script>



<?php wp_footer(); ?>

</body>
</html>
