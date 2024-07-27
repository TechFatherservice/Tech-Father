<?php include 'header.php'; ?>
<?php
$get_msg = isset($_GET['msg']) ? $_GET['msg'] : '';

if ($get_msg == 'success') {
    echo '<script>alert("Thank You!!! Our Team Will Contact You")</script>';
}
?>
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: home -->
    <section class="page-title divider layer-overlay overlay-dark-8 section-typo-light bg-img-center" data-tm-bg-img="images/bg/as02.jpg">
        <div class="container pt-90 pb-90">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Contact Now</h2>
                        <p>If you have questions, comments, or suggestions, please don't hesitate to contact us! We'd love to hear from you.</p>
                        <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                            <div class="breadcrumbs">
                                <span class="trail-item trail-begin">
                                    <a href="index.php"><span>Home</span></a>
                                </span>
                                <span><i class="fa fa-angle-right"></i></span>
                                <span class="trail-item trail-end active">Contact Now</span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Contact Form -->
    <section id="contact" class="bg-white-f4">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tm-sc tm-sc-custom-columns-holder tm-cc-two-columns tm-cc-responsive-mode-1280">
                            <div class="tm-sc tm-sc-custom-columns-holder-item" data-item-class="senior-mascot-custom-columns-283434" data-tm-bg-img="images/new/m1.jpg">
                                <div class="item-inner">
                                    <div class="item-content senior-mascot-custom-columns-283434"></div>
                                </div>
                            </div>
                            <div class="tm-sc tm-sc-custom-columns-holder-item section-typo-light bg-theme-colored2" data-item-class="econsul-mascot-custom-columns-924797" data-tm-bg-img="images/bg/worldmap.png" data-1200-up="80px 15% 100px 10%" data-1199-down="80px 10% 100px 10%">
                                <div class="item-inner">
                                    <div class="item-content econsul-mascot-custom-columns-924797">
                                        <h2>Contact Now</h2>
                                        <div class="wpb_text_column wpb_content_element mb-60">
                                            <div class="wpb_wrapper">
                                                <p style="text-align: center;">
                                                    If you have a query you can contact us. Please
                                                    fill in your details. We will get in touch with
                                                    you at the earliest.
                                                </p>
                                            </div>
                                        </div>
                                        <div role="form" class="wpcf7" id="wpcf7-f452-p311-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="form-submit.php" method="post" enctype="multipart/form-data" class="wpcf7-form" novalidate="novalidate" name="myForm5" onsubmit="return validateForm5()">
                                                <div>
                                                    <input type="hidden" name="_wpcf7" value="452" />
                                                    <input type="hidden" name="_wpcf7_version" value="5.1.1" />
                                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f452-p311-o1" />
                                                    <input type="hidden" name="_wpcf7_container_post" value="311" />
                                                    <input type="hidden" name="g-recaptcha-response" value="" />
                                                </div>
                                                <div class="tm-contact-form-transparent pr-0">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name*" />
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email*" />
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="wpcf7-form-control-wrap your-phone">
                                                                <input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone*" />
                                                            </span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="wpcf7-form-control-wrap your-subject">
                                                                <input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Issue*" />
                                                            </span>
                                                        </div>
                                                        <div class="col-md-12" id="fox">
                                                            <span class="wpcf7-form-control-wrap textarea">
                                                                <textarea id="fox" name="textarea" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message*"></textarea>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <input name="submit" type="submit" value="Submit Now" class="wpcf7-form-control wpcf7-submit btn btn-theme-colored1 btn-round" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Divider -->

    <!-- Section: Contact -->
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1300&amp;height=600&amp;hl=en&amp;q=hsr layout&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <a href="https://piratebay-proxys.com/">Pirate bay</a>
        </div>
        <style>
            .mapouter {
                position: relative;
                text-align: right;
                width: 1500px;
                height: 600px;
            }
            .gmap_canvas {
                overflow: hidden;
                background: none!important;
                width: 1500px;
                height: 600px;
            }
            .gmap_iframe {
                width: 1500px!important;
                height: 600px!important;
            }
        </style>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
