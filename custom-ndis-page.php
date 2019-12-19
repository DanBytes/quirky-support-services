<?php /* Template Name: Custom NDIS Page */ ?>

<?php get_header(); ?>
<div class="jumbotron banner" style="background-image: url('<?php echo get_theme_file_uri('assets/images/banners/NDIS.jpg');?>);">
        
        <img class="ndis-slogan" src="<?php echo get_theme_file_uri('assets/images/cards/NDIS PNG-transparant.png');?>" alt="ndis logo">
        
    </div>
     <!-- End Banner -->

    <!--Start Content-->
        <div class="content-divider"></div>

        <div class="content">

            <div class="row">
                <div class="col-lg-6">
                    <h2 class="purple-text">What is the NDIS?</h2>
                    <h3>National Disability Insurance Scheme </h3>
                    <p>
                        The NDIS is Australia’s first national Scheme for people with 
                        disability. It provides funding directly to individuals. 
                        (Snippet from NDIS Website) 
                    </p>
                    

                </div>
                <div class="col-lg-6">
                    <h2  class="purple-text">Am I eligible? </h2>
                    <ul>
                        <li>Are you aged between 7 and 65?</li>
                        <li>Do you live in Australia and have Australian residency?</li>
                        <li>Do you usually need support from a person because of a permanent and significant disability?</li>
                        <li>Do you use special equipment because of a permanent and significant disability?</li>
                        <li>Do you need some supports now to reduce your future needs?</li>
                    </ul>

                    <p>If you have answered <strong>YES</strong> to above questions you may be eligible 
                        to access the NDIS Would you like to find out more about the <strong class="purple-text">NDIS?</strong>
                    </p>
                </div>

            </div>

            <div class="content-divider"></div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="purple-text centre-title">What is the NDIS Quality and Safeguards Commission?</h2>
                        <p style="max-width: 700px; margin-left: auto; margin-right: auto;">
                            The <span class="purple-text">NDIS Quality and Safeguards Commission</span> is an independent agency established to improve the quality and safety of NDIS supports and services.
                            We are working with NDIS participants, service providers, workers and the community to introduce a new nationally consistent approach so participants can access services and supports that promote choice, control and dignity.
                            <br/>    
                            Would you like to find out more? <a class="purple-text" href="https://www.ndis.gov.au/applying-access-ndis/am-i-eligible" target="_blank">click here</a>

                        </p>
                    </div>
                </div>

        </div>

    <!--End Content-->

    <?php 
    
    while(have_posts()){
        the_post();
        the_content();
    }
    
    ?>

<?php get_footer(); ?>