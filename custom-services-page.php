<?php /* Template Name: Custom Services Page */ ?>

<?php get_header(); ?>
<div class="jumbotron banner" style="background-image: url('<?php echo get_theme_file_uri('assets/images/banners/Services.png');?>);">
        
    <div class="slogan"><h1>Authentic, flexible NDIS Support your way</h1></div>
        
</div>

<!-- End Banner -->
    
<div class="content">
    
    <div class="content-divider"></div>
    <a name="community"></a>
    <h2 class="centre-title" data-aos="fade-up" data-aos-duration="150"  data-aos-offset="200"> Our Services </h2>
    <div class="content-divider"></div>
    <div class="row" data-aos="fade-left">
                <div class="col-md-6"><img src="<?php echo get_theme_file_uri('assets/images/services/Community.png');?>" class="img-centre" alt=""></div>
                <div class="col-md-6">
                    
                    <h2 class="text-align-left"> Community, Social & recreational Services available to you!</h2>
                    
                    <ul class="service-ul">
                        <li>Individual social, community and recreational support </li>
                        <li>Assistance with transportation</li>
                        <li>Weekend group based social support </li>
                    </ul><br/>
                    <p class="text-align-left"> 
                        Our supports ensure that people are able to access community, social and recreational 
                        life which is important to them. We are driven to provide innovative opportunities which 
                        allow people to see beyond their disability and to achieve their goals.
                    </p>
                </div>
            </div>
            <a name="daily_living"></a>
            <div class="content-divider"></div>
            <div class="content-divider"></div>
            

            <div class="row" data-aos="fade-right">
                    <div class="col-md-6">
                        
                        <h2 class="text-align-left">Daily Living, in-home support options available</h2>
                        
                        <ul class="service-ul">
                                <li>Meal Preparation and assistance</li>
                                <li>Assistance to gain employment</li>
                                <li>Personal Hygiene and grooming care</li>
                                <li>Light house keeping </li>
                                <li>Yard Care & Maintenance </li>
                                <li>Supported independent living Support (Around the clock support available) </li>
                        </ul><br/>
                        <p class="text-align-left"> 
                                Are you wanting to learn new skills and  become more independent!? Our programs and 
                                services are uniquely tailored to do just that! Whether it's assisting you with gaining 
                                a job or further building your social and independent living skills, we can help!
                        </p>
                    </div>
                    <div class="col-md-6"><img src="<?php echo get_theme_file_uri('assets/images/services/Daily-Living.png');?>" class="img-centre" alt=""></div>
            </div>
    
            <a name="independent_living"></a>
            <div class="content-divider"></div>
            <div class="content-divider"></div>
    
    
            <div class="row" data-aos="fade-left">
                    <div class="col-lg-6"><img src="<?php echo get_theme_file_uri('assets/images/services/Recreational.png');?>" class="img-centre" alt=""></div>
                    <div class="col-lg-6">
                    
                        <h2 class="text-align-left"> Independent Living Skills & Recreational HUB</h2>
                        
                        <ul class="service-ul">
                            <li>Individual social, community and recreational support</li>
                            <li>Assistance with transportation</li>
                            <li>Weekend group based social support</li>
                        </ul><br/>
                        <p class="text-align-left">
                                We have recreational and social weekend programs for small groups that are very cost effective. 
                                Our adventures can include kayaking, stand up paddle boarding and so much more. Join our program today.
                        </p>
                    </div>
                </div>

                <a name="health"></a>
                <div class="content-divider"></div>
                <div class="content-divider"></div>
        
                <div class="row" data-aos="fade-right">
                        <div class="col-lg-6">
                            
                            <h2 class="text-align-left"> Health & Wellbeing </h2>
                            <ul class="service-ul">
                                    <li>Personal Traing</li>
                            </ul><br/>
                            <p class="text-align-left">
                                We thrive on making your mind and body as fit and health as possible. 
                                We have a variety of Fitness Packages available, including one on one sessions, group training 
                                programs and boot camps.
                            </p>
                        </div>
                        <div class="col-lg-6"><img src="<?php echo get_theme_file_uri('assets/images/services/Health.png');?>" class="img-centre" alt=""></div>
                </div>
    
                <a name="support"></a>
                <div class="content-divider"></div>
                <div class="content-divider"></div>
        
        
                <div class="row" data-aos="fade-left">
                        <div class="col-lg-6"><img src="<?php echo get_theme_file_uri('assets/images/services/Coordination.png');?>" class="img-centre" alt=""></div>
                        <div class="col-lg-6">
                            
                            <h2 class="text-align-left"> Support Coordination </h2>
                            <ul class="service-ul">
                                <li>Supported Coordination</li>
                            </ul><br/>
                            <p class="text-align-left">
                                    <!--Future Text here-->
                            </p>
                        </div>
                    </div>
    
    
        
        
        
        </div>
    <?php 
    while(have_posts()){
        the_post();
        the_content();
    } ?>

    <!--End Content-->

<?php get_footer(); ?>