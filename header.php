<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!--Start Navigation Bar -->
    
    <nav class="navbar navbar-expand-xl navbar-light bg-light fixed-top bigger-nav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link home" href="./home-ct">Home</a>
                <a class="nav-item nav-link" href="./about-ct">About <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="./ndis-ct"><span class="purple-text">NDIS</span></a>
                <a class="nav-item nav-link" href="./services-ct">Services</a>
                <a class="nav-item nav-link" href="./meet-the-team-ct">Meet The Team</a>
                <a class="nav-item nav-link" href="./contact-ct">Contact Us</a>
              </div>
            </div>

            <a class="nav-item nav-link phone" href="tel:0789989098"><i class="fas fa-phone-volume"></i> 07 8998 9098</a>
            <a class="navbar-brand" href="./home-ct">
                    <img src="<?php echo get_theme_file_uri('assets/images/logos/Logo.Slogan.jpg'); ?>" alt="" height="90px">
            </a>
    </nav>
    