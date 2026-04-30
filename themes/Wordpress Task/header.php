<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head();?>
    <title>Dropbox</title>
  </head>
  <body>
    <header>
      <div
        class="top-header d-flex justify-content-md-between justify-content-center align-items-center side-space"
      >
        <div class="left-container d-flex">
          <a href="http://" target="_blank"
            >Location: 80 Robinson Road, Chennai 068898</a
          >
          <a href="mailto:contact@companyname.sg"
            >Mail: contact@companyname.sg</a
          >
        </div>
        <div class="right-container d-flex">
          Follow us:
          <div class="icon-cont">
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/images/fb.svg" /></a>
            <a href="#" target="_blank">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/insta.svg" alt="instagram" />
            </a>
            <a href="#" target="_blank">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/linkedin.svg" alt="linkedin"
            /></a>
            <a href="#" target="_blank"
              ><img src="<?php echo get_template_directory_uri()?>/assets/images/twitter.svg" alt="twitter"
            /></a>
            <a href="#" target="_blank"
              ><img src="<?php echo get_template_directory_uri()?>/assets/images/youtube.svg" alt="youtube"
            /></a>
          </div>
        </div>
      </div>
      <div
        class="main-header side-space d-flex justify-content-between align-items-center"
      >
        <div class="header-logo">
          <img
            src="<?php echo get_template_directory_uri()?>/assets/images/Dropbox_(service)-Logo.wine.svg"
            alt="Logo"
          />
        </div>
         <div class="menu-toggle d-block d-lg-none" id="menuToggle">
          ☰
      </div>
        <div class="menu" id="mobilemenu">
          <nav>
            <ul class="d-flex">
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">About Us</a>
              </li>
              <li>
                <a href="#">Services</a>
              </li>
              <li>
                <a href="#">International</a>
              </li>
              <li>
                <a href="#">Contact Us</a>
              </li>
            </ul>
          </nav>
        </div>
        <div
          class="header_contact_container d-none d-lg-flex justify-content-between align-items-center"
        >
          <div class="header_contact d-flex">
            <div
              class="headerTele d-flex justify-content-center align-items-center"
            >
              <img src="<?php echo get_template_directory_uri()?>/assets/images/telephone.svg" alt="Telephone" />
            </div>
            <div class="d-flex flex-column headerTeleText">
              Call Us
              <span><a href="#"> +00 0000 0000 </a></span>
            </div>
          </div>
          <div class="headerBtn">
            <a href="#" class="btn"
              >Enquire Now <img src="<?php echo get_template_directory_uri()?>/assets/images/arrow.svg" alt=""
            /></a>
          </div>
        </div>
      </div>
    </header>
