<?php /* Template Name: Custom Contact Page */ ?>

<?php get_header(); ?>


<div class="content-divider"></div>
     <div class="content-divider"></div>

     <h2 class="centre-title">Contact Us</h2>

     <div class="content">
         <div class="row">
             <div class="col-lg-6">
             <?php 
                while(have_posts()){
                    the_post();
                    the_content();
                } ?>
             </div>

             <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD09zQ9PNDNNy9TadMuzRV_UsPUoWKntt8&amp;q=1+bridecroft+court+deception+bay" style="pointer-events: auto; width: 100%; min-height:500px;height: 100%;"></iframe>
             </div>
         </div>
     </div>



<?php get_footer(); ?>