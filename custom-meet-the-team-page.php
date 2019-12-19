<?php /* Template Name: Custom Meet The Team Page */ ?>

<?php get_header(); ?>

<div class="content-divider"></div>
    <div class="content-divider"></div>

    <div class="content">
        <h2 class="centre-title">Meet The Team</h2>
        <div class="row team">
          <div class="card profile-card ">
            <div class="profile-card-head">

                <img src="<?php echo get_theme_file_uri('assets/images/proiles/Website-brock--296x300.png');?>" alt="Brock" style="width:40%">
                <h1>Brock</h1>
                <p class="title">CEO & Founder</p>

            </div>
            <p>
              Brock has over 7 years’ experience within the Disability and Community 
              Services Sector, his diverse working background includes Direct Support, 
              Program Development and NDIS Local Area Coordination. Brock started Quirky 
              upport Services with a mission and passion to provide purposeful and 
              authentic support experiences which uniquely challenges and inspires people 
              with a disability to lead the life they choose. Brock looks forward to 
              leading and nurturing Quirky Support Services to be a prominent organisation 
              recognised for its commitment, innovation and standard of support towards 
              people with a disability, their families and carers. 
            </p>

          </div>



            <div class="card profile-card">
                <div class="profile-card-head">
    
                    <img src="<?php echo get_theme_file_uri('assets/images/proiles/Website-grant--300x292.png');?>" alt="Brock" style="width:40%">
                    <h1>Grant</h1>
                    <p class="title">Support Worker . Personal Trainer </p>
    
                </div>
                <p>
                    Grant absolutely loves assisting people to build their skills, independence 
                    and fitness levels! Grant has been working in the disability services space 
                    for many years. Grant has experience working in direct support, case 
                    management and personal training roles. Grant has a keen interest for supporting 
                    people with disabilities to build their fitness as well facilitating individual 
                    and group based social and recreational support sessions. He provides yard care, 
                    personal training and support worker services at Quirky Support Services. 
                </p>
    
              </div>

            



        </div>
    </div>

    <?php
    while(have_posts()){
        the_post();
        the_content();
    } ?>


<?php get_footer(); ?>