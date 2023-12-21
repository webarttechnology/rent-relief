<?php /* Template Name: Home */

get_header();

 ?>


<!-- banner -->

    <section class="rent-home-banner" style="background-image: url(<?php echo get_field('banner_background_image'); ?>);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 50px 0;
    position: relative;" id="home">
        <div class="container">
            <div class="home-banner-text-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="rent-home-banner-text">
                        	<?php echo get_field('banner_heading'); ?>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-center"><?php echo get_field('banner_form_heading'); ?></h6>
                        <div class="rent-home-banner-form">


                        	<?php echo do_shortcode('[contact-form-7 id="c93f22c" title="Banner Contact form"]'); ?>


                            <!-- <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Name of Business</label>
                                    <input type="text" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Approx monthly rent</label>
                                    <input type="number" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Years in Business</label>
                                    <input type="number" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Use of Funds</label>
                                    <input type="email" class="form-control" id="inputPassword4">
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
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Date Of Birth</label>
                                    <input type="text" class="form-control" id="inputPassword4">
                                </div>

                                <div class="submit">
                                    <a href="#">Submit</a>
                                </div>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- aboutus -->
    <section class="about-page-rent py-5" id="about">
        <div class="container">
            <div class="row about-section">
                <div class="col-md-6">
                    <div class="about-image">
                        <img src="<?php echo get_field('about_image'); ?>">

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-image-text">

                        <h2><?php echo get_field('about_main_heading'); ?></h2>
                        <h5><?php echo get_field('about_main_subheading'); ?></h5>
                        <?php echo get_field('about_main_content'); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- why -->
    <section class="why-choose py-5" >
        <div class="container">
            <h1><?php echo CFS()->get('why_choose_main_heading'); ?></h1>
            <div class="row text-center icon-home-rent">
            
            <?php	
            $i=1;
            $whychoose = CFS()->get( 'why_choose_loop' );
            if (is_array($whychoose) || is_object($whychoose)) {
            	
            
foreach ( $whychoose as $whychooseitem ) {
	if($i==5){
		break;
	}
 ?>
               
                <div class="col-md-3">
                    <div class="icon-image-home">
                        <img src="<?php echo $whychooseitem['why_choose_image']; ?>">
                        <div class="home-content-text">
                            <h3><?php echo $whychooseitem['why_choose_heading']; ?></h3>
                            <p><?php echo $whychooseitem['why_choose_content']; ?></p>
                        </div>
                    </div>
                </div>
            <?php $i++; } } ?>
               
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <!-- video -->
    <section class="video py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="rent-video-text">
                        <h2><?php echo get_field('why_choose_bottom_main_heading'); ?></h2>
                        <?php echo get_field('why_choose_bottom_content'); ?>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="video-rent">
                        <img src="<?php echo get_field('why_choose_bottom_image'); ?>">
                        <!-- <span class="play-button"><i class="fa fa-play-circle-o" aria-hidden="true"></i></span> -->
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- service -->

    <!-- qualify -->
    <section class="quality py-5" >
        <div class="container">
            <h2><?php echo CFS()->get('qualify_sec_main_heading'); ?></h2>
            <div class="row quality-image">
            	<?php	
           
            $qualify = CFS()->get( 'qualify_sec_loop' );
            if (is_array($qualify) || is_object($qualify)) {
            	
            
foreach ( $qualify as $qualifyitem ) {
	
 ?>

                <div class="col-md-4">
                    <div class="quality-text">
                        <h1><?php echo $qualifyitem['qualify_sec_icon']; ?></h1>
                        <p><?php echo $qualifyitem['qualify_sec_title']; ?></p>
                    </div>
                </div>
            <?php } } ?>
               <!--  <div class="col-md-4">
                    <div class="quality-text">
                        <h1><i class="fa fa-check-circle-o"></i></h1>
                        <p>Valid Lease expiring in 12-60 Months</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="quality-texts">
                        <h1><i class="fa fa-check-circle-o"></i></h1>
                        <p>Proof of rent payment for at least 6 months</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- brands -->
    <section class="brands py-5">
        <div class="container">
            <h2><?php echo get_field('brands_main_heading'); ?></h2>
            <!-- slide -->
            <div class="ticker-container">
                <div class="ticker-tape">
                    <div class="slide-track">
                    	<?php	
           
            $brandloop = CFS()->get( 'brands_loop' );
            if (is_array($brandloop) || is_object($brandloop)) {
            	
            
foreach ( $brandloop as $brandloopitem ) {
	
 ?>
                        <div class="slide"><img class="alignnone size-full wp-image-13024"
                                src="<?php echo $brandloopitem['brand_image']; ?>"
                                alt="" height="60" /></div>
                            <?php } } ?>
                        <!-- <div class="slide"><img class="alignnone size-medium wp-image-13023"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-w.l.-gore-logo.jpg"
                                alt="" width="110" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13022"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-visa.jpg"
                                alt="" width="188" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13021"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-vf_circle_logo-290.jpg"
                                alt="" width="60" height="60" /></div>
                        <div class="slide"><img class="alignnone size-full wp-image-13020"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-unitedhealthcareprocycling_logo2017-trans.jpg"
                                alt="" width="285" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13019"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-tyco-electronics-logo.jpg"
                                alt="" width="184" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13018"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-toyota-logo.jpg"
                                alt="" width="73" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13017"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-thyssenkrupp.jpg"
                                alt="" width="79" height="60" /></div>
                        <div class="slide"><img class="alignnone size-full wp-image-13016"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-tech_mahindra_new_logo.jpg"
                                alt="" width="212" height="60" /></div>
                        <div class="slide"><img class="alignnone size-full wp-image-13015"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-standard-chartered-bank-777x437.jpg"
                                alt="" width="155" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13014"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-solix-logo.jpg"
                                alt="" width="237" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13013"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-smuckers_logo.jpg"
                                alt="" width="194" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13012"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-siemens-logo-300x49.jpg"
                                alt="" width="300" height="49" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13011"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-sap-logo.jpg"
                                alt="" width="118" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13010"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-paypal.jpg"
                                alt="" width="230" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13009"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-otterbox.jpg"
                                alt="" width="92" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13008"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-ntt_communications_.jpg"
                                alt="" width="243" height="60" /></div>
                        <div class="slide"><img class="alignnone size-full wp-image-13007"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-nike-logo-free-png-image.jpg"
                                alt="" width="115" height="60" /></div>
                        <div class="slide"><img class="alignnone size-full wp-image-13006"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-nestle.jpg"
                                alt="" width="202" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13005"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-mtuity-logo.jpg"
                                alt="" width="173" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13004"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-lancaster.jpg"
                                alt="" width="187" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13003"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-kaneka.jpg"
                                alt="" width="233" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13002"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-intel-logo.jpg"
                                alt="" width="90" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13001"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-ibm_logo.jpg"
                                alt="" width="150" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-12999"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-hitachi_logo-300x52.jpg"
                                alt="" width="300" height="52" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-13000"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-huawei-logo-web.jpg"
                                alt="" width="241" height="60" /></div>
                        <div class="slide"><img class="alignnone size-full wp-image-12998"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-hero-cycles-logo.jpg"
                                alt="" width="242" height="60" /></div>
                        <div class="slide"><img class="alignnone size-full wp-image-12997"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-heatcraft.jpg"
                                alt="" width="195" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-12995"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-fujitsu.jpg"
                                alt="" width="119" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-12996"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-goodyear-tires-in-ohio-300x60.jpg"
                                alt="" width="300" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-12994"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-fedexlogo.jpg"
                                alt="" width="204" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-12993"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-ezdi-logo.jpg"
                                alt="" width="279" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-12992"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-ericsson.jpg"
                                alt="" width="295" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-12991"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-dpt_dupont_logo_thumbnail_690x345.jpg"
                                alt="" width="150" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-12990"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-collabera-logo.jpg"
                                alt="" width="217" height="60" /></div>
                        <div class="slide"><img class="alignnone size-medium wp-image-12989"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-coca-cola.jpg"
                                alt="" width="175" height="60" /></div>
                        <div class="slide"><img class="alignnone size-full wp-image-12988"
                                src="https://garwoodcenter.wpengine.com/wp-content/uploads/2018/02/mini-logo-applied_materials_logo.jpg"
                                alt="" width="237" height="60" /></div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <!-- online-account -->
     <section class="account py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-sm-10">
                    <h2 class="heading_style mb-4" style="padding: 0;"><?php echo get_field('funding_works_main_heading'); ?>
                    </h2>
                    <!-- <p>Steve the barber pays $3,000/month for rent. He would like to receive $1,000 back from his rent each month and pay it over months. Over the next 6-18 months Steve slowly pays back the $1,000 and is able to use the capital frees up from the rent rebate to scale his business faster. Leveraging rent further gives business owners a competitive advantage to keep customers and employees happy.</p> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="acount-one m-v-100 d-flex ">
                        <div class="create-text">
                            <h4><?php echo get_field('funding_works_1st_heading'); ?></h4>
                            <p><?php echo get_field('funding_works_1st_content'); ?></p>
                        </div>
                        <div class="create-image">
                            <div class="create-icon">
                               <h1>1</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-7">
                    <div class="acount-one two-row m-v-100 d-flex flex-row-reverse" >
                        <div class="create-text">
                            <h4><?php echo get_field('funding_works_2nd_heading'); ?></h4>
                            <p><?php echo get_field('funding_works_2nd_content'); ?></p>
                        </div>
                        <div class="create-image">
                            <div class="create-icon">
                                <h1>2</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="acount-one m-v-100 d-flex " >
                        <div class="create-text">
                            <h4><?php echo get_field('funding_works_3rd_heading'); ?></h4>
                            <p><?php echo get_field('funding_works_3rd_content'); ?></p>
                        </div>
                        <div class="create-image">
                            <div class="create-icon">
                                <h1>3</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row justify-content-end">
                <div class="col-md-7">
                    <div class="acount-one m-v-100 d-flex align-items-center flex-row-reverse" >
                        <div class="create-text">
                            <h4>Complete and repeat!</h4>
                            <p>Complete your payment schedule and you’re done!<br>
                                 Often once the community knows you, you’re likely<br>
                                  to get lower rates on your next raise.
                            </p>
                        </div>
                        <div class="create-image">
                            <div class="create-icon">
                                <h1>4</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section> 

    <!-- faq -->
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading_style">FAQs
                    </h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Question 1
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Question #2
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Question #3
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Industries -->
    <section class="featuredIndustries">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <h2 class="heading_style">Featured Industries
                    </h2>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <div class="featuredBox">
                        <a href="#">
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/image/icon/004-return.png" alt="" class="img-fluid"></span>
                            <div class="clearfix"></div>
                            Purchase Order Financing
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <div class="featuredBox">
                        <a href="#">
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/image/icon/003-online-shopping.png" alt="" class="img-fluid"></span>
                            <div class="clearfix"></div>
                            E-Commerce Financing
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <div class="featuredBox">
                        <a href="#">
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/image/icon/005-coffee.png" alt="" class="img-fluid"></span>
                            <div class="clearfix"></div>
                            Food & Beverage Inventory Financing
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <div class="featuredBox">
                        <a href="#">
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/image/icon/003-online-shopping.png" alt="" class="img-fluid"></span>
                            <div class="clearfix"></div>
                            Amazon Seller Financing
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <div class="featuredBox">
                        <a href="#">
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/image/icon/001-brand-image.png" alt="" class="img-fluid"></span>
                            <div class="clearfix"></div>
                            Apparel Brand Inventory Financing
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <div class="featuredBox">
                        <a href="#">
                            <span><img src="<?php echo get_template_directory_uri(); ?>/assets/image/icon/006-capital-venture.png" alt="" class="img-fluid"></span>
                            <div class="clearfix"></div>
                            Shopify Capital for Financing
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



 <?php get_footer(); ?>