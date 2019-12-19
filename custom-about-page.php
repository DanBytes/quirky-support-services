<?php /* Template Name: Custom About Page */ ?>

<?php get_header(); ?>


<div class="jumbotron banner" style="background-image: url('<?php echo get_theme_file_uri('assets/images/banners/AboutUs.png')?>);">
        
        <div class="about-slogan">
            <h2>About Us</h2>
        
            <p>
                At Quirky Support Services we have a team of dedicated, 
                trained staff who absolutely love making a positive 
                impact towards the people we support. Our team is 
                diverse in a sense of their extensive experience, skills 
                and unique Quirky personalities. They all have one thing 
                in common though, that is a passion and drive for 
                supporting and inspiring people to live the life they 
                choose.  
    
            </p>
        </div>
        
        
    </div>
     <!-- End Banner -->

     <!-- Start Content-->

     <div class="content-divider"></div>
     <div class="content">
         <div class="row">
             <div class="col-lg-4">
                <h3>The Quirky Way</h3>
                <p>
                    It’s our mission to provide purposeful and authentic 
                    support experiences which uniquely challenges and 
                    inspires people with a disability to lead the life 
                    they choose, and to further concur their personal 
                    goals, dreams and ambitions in life. We are committed 
                    to walking alongside the people we support, to promote 
                    and acknowledge their growth, choice, independence and 
                    social connection. 

                </p>
             </div>
             <div class="col-lg-4">
                <h3>Our Vision </h3>

                <p>
                        To be recognised within the community as leading-edge 
                        support organisation that is highly regarded for its 
                        commitment, innovative and standard of support towards 
                        people with a disability, their families and carers. 
                </p>

             </div>
             <div class="col-lg-4">
                    <h3>What we believe in!</h3>
                        <div class="row">
                            <div class="col-6">
                                <ul class="no-style-list">
                                    <li>Openness.</li>
                                    <li>Empowerment.</li>
                                    <li>Respect.</li>
                                </ul>
                            </div>

                            <div class="col-6">
                                <ul class="no-style-list"> 
                                    <li>Commitment.</li>
                                    <li>Integrity.</li>
                                    <li>Innovation.</li>
                                </ul>
                            </div>
                        </div>
             </div>
         </div>
     </div>

     <?php
    while(have_posts()){
        the_post();
        the_content();
    } ?>
     <!-- End Content-->

     <?php get_footer(); ?>