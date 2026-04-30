<?php 
/* 
*Template Name : Home page 
*/
get_header(); 

$hero_bg = get_field('hero_section_image');
?>


<section class="hero-section side-space d-flex align-items-center" style="background-image:url('<?php echo $hero_bg;?>')">
      <div class="background-overlay"></div>
      <div class="hero-content">
        <h1><?php echo get_field("hero_section_title");?></h1>
        <a href="#" class="btn"
          >Learn More <img src="<?php echo get_template_directory_uri()?>/assets/images/arrow-whitey.svg" alt=""
        /></a>
      </div>
      <div class="hero-boxes mobile-carousel">
        <div class="box active">
            <?php echo get_field("hero_section_subtitle1");?>
          
        </div>
        <div class="box d-flex align-items-center">
            <?php echo get_field("hero_section_subtitle2");?>
        </div>
        <div class="box d-flex align-items-center">
            <?php echo get_field("hero_section_subtitle3");?>
        </div>
      </div>
    </section>
    <section class="about-us side-space">
      <div class="section-label d-flex"><?php echo get_field("about_label");?></div>
      <div class="about-us-content d-flex justify-content-between">
        <div class="aboutLeftContent">
          <h2><?php echo get_field("about_title");?></h2>
        </div>
        <div class="aboutRightContent">
            <?php echo get_field("about_description");?>
          
          <a href="<?php echo get_field("about_button_link");?>" class="btn"
            ><?php echo get_field("about_button_text");?> <img src="<?php echo get_template_directory_uri()?>/assets/images/arrow-down-right.svg" alt=""
          /></a>
        </div>
      </div>
      <div class="aboutUs-boxes d-flex">
        <div class="aboutUs-box box-image">
          <img
            src="<?php echo get_field("about_us_box1_image");?>"
            alt=""
          />
        </div>
        <div
          class="aboutUs-box box-blue d-flex flex-column align-items-start align-items-md-center justify-content-center"
        >
        <?php
            $box2 = get_field('about_us_box2');
            ?>
          <div class="count"><?php echo esc_html($box2['about_us_box2_count']);?></div>
          <h3 class="aboutUs-boxCaption"><?php echo esc_html($box2['about_us_box2_title']);?></h3>
          <p class="aboutUs-boxDesc">
            <?php echo esc_html($box2['about_us_box2_description']);?>
          </p>
        </div>
        <div class="aboutUs-box box-lightBlue">
            <?php
            $box3 = get_field('about_us_box3');
            ?>
          <h3 class="aboutUs-boxTitle d-flex justify-content-between">
            <?php echo esc_html($box3['about_us_box3_title']);?>
            <img src="<?php echo get_template_directory_uri()?>/assets/images/arrow-down-right-black.svg" alt="" />
          </h3>
          <div class="count"><?php echo esc_html($box3['about_us_box3_count']);?></div>
          <p class="aboutUs-boxDesc">
            <?php echo esc_html($box3['about_us_box3_description']);?>
          </p>
        </div>
        <div
          class="aboutUs-box box-blue d-flex flex-column align-items-start align-items-md-center justify-content-center"
        >
        <?php
            $box4 = get_field('about_us_box4');
            ?>
          <div class="count"><?php echo esc_html($box4['about_us_box4_count']);?></div>
          <h3 class="aboutUs-boxCaption"><?php echo esc_html($box4['about_us_box4_title']);?></h3>
          <p class="aboutUs-boxDesc">
            <?php echo esc_html($box4['about_us_box4_description']);?>
          </p>
        </div>
        <div class="aboutUs-box box-gradient">
            <?php
            $box5 = get_field('about_us_box5');
            ?>
          <img src="<?php echo esc_url($box5['about_us_box5_image']);?>" alt="" />
          <!-- <h3 class="aboutUs-boxCaption">Get Start<br /> with Us</h3> -->
          <h3 class="aboutUs-boxCaption"><?php echo wp_kses_post($box5['about_us_box5_title']);?></h3>
          <p class="aboutUs-boxDesc">
             <?php echo esc_html($box5['about_us_box5_description']);?>
          </p>
        </div>
      </div>
    </section>
    <section class="our-services side-space">
      <div class="section-label d-flex"><?php echo get_field("our_service_label");?></div>
      <div class="about-us-content d-flex justify-content-between">
        <div class="aboutLeftContent">
          <h2><?php echo get_field("our_service_title");?></h2>
        </div>
        <div class="aboutRightContent">
            <?php echo get_field("our_service_description");?>
        </div>
      </div>
      <div class="ourServices-boxes d-flex">
        <?php $service_box1 = get_field("our_service_box1");?>
        <div class="ourServices-box">
          <h3 class="ourServices-boxTitle d-flex justify-content-between">
            <?php echo esc_html($service_box1['our_service_box1_title']);?>
            <img src="<?php echo get_template_directory_uri()?>/assets/images/arrow-down-right-white.svg" alt="" />
          </h3>
          <p class="ourServices-boxDesc">
            <?php echo esc_html($service_box1['our_service_box1_description']);?>
          </p>
          <img src="<?php echo esc_url($service_box1['our_service_box1_image']);?>" alt="" class="w-100"/>
        </div>
        <?php $service_box2 = get_field("our_service_box2");?>
        <div class="ourServices-box">
          <h3 class="ourServices-boxTitle d-flex justify-content-between">
            <?php echo esc_html($service_box2['our_service_box2_title']);?>
            <img src="<?php echo get_template_directory_uri()?>/assets/images/arrow-down-right-white.svg" alt="" />
          </h3>
          <p class="ourServices-boxDesc">
            <?php echo esc_html($service_box2['our_service_box2_description']);?>

          </p>
            <img src="<?php echo esc_url($service_box2['our_service_box2_image']);?>" alt=""  class="w-100"/>

        </div>
      </div>
    </section>

    <!-- our feature -->

    <section class="our-feature side-space text-center">
      <div class="section-label d-flex mx-auto"><?php echo get_field("our_feature_label");?></div>
      <h2>
        <?php echo get_field("our_feature_title");?>
      </h2>
      <p>
        <?php echo get_field("our_feature_description");?>
      </p>
      <div class="ourfeature-boxes d-flex justify-content-between">
          <?php $feature_box1 = get_field("our_feature_box1");?>
        <div class="ourfeature-box">
          <img src="<?php echo esc_url($feature_box1['our_feature_box1_image']);?>" alt="" />
           

          <h3 class="ourfeature-boxTitle"><?php echo esc_html($feature_box1['our_feature_box1_title']);?></h3>
            <?php echo wp_kses_post($feature_box1['our_feature_box1_description']);?>
        </div>
        <?php $feature_box2 = get_field("our_feature_box2");?>
        <div class="ourfeature-box">
          <img src="<?php echo esc_url($feature_box2['our_feature_box2_image']);?>" alt="" />
          <h3 class="ourfeature-boxTitle"><?php echo esc_html($feature_box2['our_feature_box2_title']);?></h3>
           <?php echo wp_kses_post($feature_box2['our_feature_box2_description']);?>
        </div>
        <?php $feature_box3 = get_field("our_feature_box3");?>
        <div class="ourfeature-box">
          <img src="<?php echo esc_url($feature_box3['our_feature_box3_image']);?>" alt="" />
          <h3 class="ourfeature-boxTitle"><?php echo esc_html($feature_box3['our_feature_box3_title']);?></h3>
            <?php echo wp_kses_post($feature_box3['our_feature_box3_description']);?>

        </div>
        <?php $feature_box4 = get_field("our_feature_box4");?>
        <div class="ourfeature-box">
          <img src="<?php echo esc_url($feature_box4['our_feature_box4_image']);?>" alt="" />
          <h3 class="ourfeature-boxTitle"><?php echo esc_html($feature_box4['our_feature_box4_title']);?></h3>
            <?php echo wp_kses_post($feature_box4['our_feature_box4_description']);?>         
        </div>
      </div>
    </section>

    <!-- our partners -->

    <section class="our-partners side-space">
      <div class="section-label d-flex mx-auto"><?php echo get_field("our_feature_label");?></div>
      <h4 class="text-center">
        <?php echo get_field("our_partner_title");?>
      </h4>
      <div class="icons">
        <div class="icon-row1 d-grid d-md-flex justify-content-between">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/intercom-vector-logo.png" alt="" />
          <img src="<?php echo get_template_directory_uri()?>/assets/images/Dropbox_(service)-Logo.wine.png" alt="" />
          <img src="<?php echo get_template_directory_uri()?>/assets/images/shopify.png" alt="" />
          <img src="<?php echo get_template_directory_uri()?>/assets/images/kalima.png" alt="" />
          <img src="<?php echo get_template_directory_uri()?>/assets/images/airtable.png" alt="" />
          <img src="<?php echo get_template_directory_uri()?>/assets/images/nilgiris.png" alt="" />
        </div>
        <div class="icon-row2  d-grid d-md-flex justify-content-between">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/nilgiris.png" alt="" />
          <img src="<?php echo get_template_directory_uri()?>/assets/images/airtable.png" alt="" />
          <img src="<?php echo get_template_directory_uri()?>/assets/images/kalima.png" alt="" />
          <img src="<?php echo get_template_directory_uri()?>/assets/images/shopify.png" alt="" />
          <img src="<?php echo get_template_directory_uri()?>/assets/images/Dropbox_gray.png" alt="" />
          <img src="<?php echo get_template_directory_uri()?>/assets/images/intercom-vector-logo.png" alt="" />
        </div>
      </div>
    </section>

    <!-- our feature -->

    <section class="testimonial">
      <div class="side-space">
        <div class="section-label d-flex"><?php echo get_field("testimonial_label");?></div>
        <div class="testimonial-content d-flex justify-content-between">
          <div class="testimonialLeftContent">
            <h2><?php echo get_field("testimonial_title");?></h2>
            <h3><?php echo get_field("testimonial_subtitle");?></h3>
          </div>
          <div class="testimonialRightContent">
            <?php echo get_field("testimonial_description");?>
          </div>
        </div>
      </div>

      <div class="owl-carousel owl-theme" id="testimonial">
        <div class="item">
        <?php $user1 = get_field("testimonial_review1");?>
          <div class="testimonial-box">
            <?php echo wp_kses_post($user1['user_review1']);?>         
            <div class="user d-flex gap-2">
              <img src="<?php echo esc_url($user1['user_image']);?>" alt="" />
              <div>
                <strong class="d-block"> <?php echo esc_html($user1['user_name1']);?></strong>
                <span> <?php echo esc_html($user1['user_address1']);?></span>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="item">
          <div class="testimonial-box">
            <p>
              "Transforming my house into a home was no easy task, but this team
              made it effortless! Their attention to detail, creative designs,
              and ability to bring my vision to life were beyond impressive.
              Every corner of my space now feels personalized, warm, and
              inviting. I couldn’t be happier with the results!"
            </p>
            <div class="user d-flex gap-2">
              <img src="./asset/images/testimonial.png" alt="" />
              <div>
                <strong class="d-block">James Bond</strong>
                <span>Tambaram, Chennai</span>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial-box">
            <p>
              "Transforming my house into a home was no easy task, but this team
              made it effortless! Their attention to detail, creative designs,
              and ability to bring my vision to life were beyond impressive.
              Every corner of my space now feels personalized, warm, and
              inviting. I couldn’t be happier with the results!"
            </p>
            <div class="user d-flex gap-2">
              <img src="./asset/images/testimonial.png" alt="" />
              <div>
                <strong class="d-block">James Bond</strong>
                <span>Tambaram, Chennai</span>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial-box">
            <p>
              "Transforming my house into a home was no easy task, but this team
              made it effortless! Their attention to detail, creative designs,
              and ability to bring my vision to life were beyond impressive.
              Every corner of my space now feels personalized, warm, and
              inviting. I couldn’t be happier with the results!"
            </p>
            <div class="user d-flex gap-2">
              <img src="./asset/images/testimonial.png" alt="" />
              <div>
                <strong class="d-block">James Bond</strong>
                <span>Tambaram, Chennai</span>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial-box">
            <p>
              "Transforming my house into a home was no easy task, but this team
              made it effortless! Their attention to detail, creative designs,
              and ability to bring my vision to life were beyond impressive.
              Every corner of my space now feels personalized, warm, and
              inviting. I couldn’t be happier with the results!"
            </p>
            <div class="user d-flex gap-2">
              <img src="./asset/images/testimonial.png" alt="" />
              <div>
                <strong class="d-block">James Bond</strong>
                <span>Tambaram, Chennai</span>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial-box">
            <p>
              "Transforming my house into a home was no easy task, but this team
              made it effortless! Their attention to detail, creative designs,
              and ability to bring my vision to life were beyond impressive.
              Every corner of my space now feels personalized, warm, and
              inviting. I couldn’t be happier with the results!"
            </p>
            <div class="user d-flex gap-2">
              <img src="./asset/images/testimonial.png" alt="" />
              <div>
                <strong class="d-block">James Bond</strong>
                <span>Tambaram, Chennai</span>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </section>

    <!-- our blog -->

    <section class="our-blog side-space text-center">
      <div class="section-label d-flex mx-auto"><?php echo get_field("blog_label");?></div>
      <h2>
        <?php echo get_field("blog_title");?>
    </h2>
          <?php echo get_field("blog_description");?>
        
      <div class="ourblog-boxes d-flex">
        <?php $blog1 = get_field("blog1");?>
        <div class="ourblog-box">
          <img src="<?php echo esc_url($blog1['blog1_image']);?>" alt="" class="blog-img"/>

          <div class="blogTitle">
            <h5 class="ourblog-boxTitle d-inline-flex align-items-center">
              <?php echo esc_html($blog1['blog1_subtitle']);?>
            </h5>
            <p class="ourblog-boxDesc">
              <?php echo esc_html($blog1['blog1_title']);?>
            </p>
          </div>
        </div>

        <div class="ourblog-box">
            <?php $blog2 = get_field("blog2");?>

          <img src="<?php echo esc_url($blog2['blog2_image']);?>" alt="" class="blog-img"/>

          <div class="blogTitle">
            <h5 class="ourblog-boxTitle d-inline-flex align-items-center">
                    <?php echo esc_html($blog2['blog2_subtitle']);?>
            </h5>
            <p class="ourblog-boxDesc"> <?php echo esc_html($blog2['blog2_title']);?></p>
            <a href="#"
              >LEARN MORE
              <img src="<?php echo get_template_directory_uri()?>/assets/images/arrow-down-left-blog.png" alt="arrow"
            /></a>
          </div>
        </div>

        <div class="ourblog-box">
            <?php $blog3 = get_field("blog3");?>

          <img src="<?php echo esc_url($blog3['blog3_image']);?>" alt="" class="blog-img"/>

          <div class="blogTitle">
            <h5 class="ourblog-boxTitle d-inline-flex align-items-center">
             <?php echo esc_html($blog3['blog3_subtitle']);?>
            </h5>
            <p class="ourblog-boxDesc">
              <?php echo esc_html($blog3['blog3_title']);?>
            </p>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>
