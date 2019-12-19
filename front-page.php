<?php get_header(); ?>

<?php get_header(); ?>

<div class="jumbotron banner" style="background-image: url('<?php echo get_theme_file_uri('assets/images/banners/FrontPagePhoto_edited.png')?>);">
        
        <div class="slogan"><h1>Flexible. Compassionate. Support.</h1></div>
        
    </div>
     <!-- End Banner -->

<div class="content">
        <div class="content-divider"></div>
        <h2 class="centre-title" data-aos="fade-up" data-aos-duration="150"  data-aos-offset="200"> Our Services </h2>
        <div class="content-divider"></div>
        <div class="row" data-aos="fade-up">
            <div class="col-md-4">
              <a class="nav-item nav-link" href="./services-ct#community">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/images/cards/Community.png');?>" alt="Community, social and recreational card">
                    <div class="card-body" style="background-color: #EF84B6;">
                      <h5 class="card-title">Community, Social & recreational Services available to you!</h5>
                      <p class="card-text"></p>
                    </div>
                  </div>
              </a>
            </div>

            <div class="col-md-4">
              <a class="nav-item nav-link" href="./services-ct#daily_living">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/images/cards/Daily_Living.png') ;?>" alt="Daily living card">
                    <div class="card-body" style="background-color: #52EE77;">
                      <h5 class="card-title">Daily Living, in-home support options available</h5>
                      <p class="card-text"></p>
                    </div>
                  </div>
                  </a>

            </div>

            <div class="col-md-4">
                <a class="nav-item nav-link" href="./services-ct#independent_living">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/images/cards/Independant_Living.png'); ?>" alt="Independent Living Skills & Recreational HUB">
                    <div class="card-body" style="background-color: #FBC226;">
                      <h5 class="card-title">Independent Living Skills & Recreational HUB</h5>
                      <p class="card-text"></p>
                    </div>
                  </div>
                  </a>
            </div>

            <div class="col-md-4">
              <a class="nav-item nav-link" href="./services-ct#health">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/images/cards/Health_Wellbeing.png'); ?>" alt="Health & Wellbeing">
                    <div class="card-body" style="background-color: #D5FC09;">
                      <h5 class="card-title">Health & Wellbeing</h5>
                      <p class="card-text"></p>
                    </div>
                  </div>
              </a>
            </div>

            <div class="col-md-4">
              <a class="nav-item nav-link" href="./services-ct#support">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/images/cards/Support_Coordination.png'); ?>" alt="Support Coordination">
                    <div class="card-body" style="background-color: #24DFF2;">
                      <h5 class="card-title">Support Coordination</h5>
                      <p class="card-text"></p>
                    </div>
                  </div>
                  </a>
            </div>

            <div class="col-md-4">
              <a href="./ndis-ct">
                <img src="<?php echo get_theme_file_uri('assets/images/cards/NDIS PNG-transparant.png'); ?>" alt="NDIS" class="ndis-card">
              </a>
              </div>


        </div>
        <div class="content-divider"></div>
        <div class="content-divider"></div>
            <div class="row" data-aos="fade-left">
                <div class="col-md-6"><img src="<?php echo get_theme_file_uri('assets/images/content/Support_Coordination.png'); ?>" class="img-centre" alt=""></div>
                <div class="col-md-6">
                  <h2 class="text-align-left"> Why Quirky </h2>
                  <p class="text-align-left"> With well over a decade of experience and knowledge backing us, we truly know how to deliver authentic, innovative support with a pinch of Quirk on the side. Our support services are tailored, as we recognise that each person’s journey is unique and special to them</p>
                </div>

            </div>

            <div class="content-divider"></div>
            <div class="content-divider"></div>

            <div class="row" data-aos="fade-right">
              <div class="col-md-6">
                <h2 class="text-align-left"> Our Mission </h2>
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
              <div class="col-md-6"><img src="<?php echo get_theme_file_uri('assets/images/content/Flexing.png') ?>" class="img-fluid" alt=""></div>

          </div>

            
    </div>

    <?php
    while(have_posts()){
        the_post();
        the_content();
    } ?>


<?php get_footer(); ?>