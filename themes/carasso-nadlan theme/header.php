<?php
/**
 * @package WordPress
 * @subpackage  Carasso-nadlan
 */
?>

<!DOCTYPE html>
<html lang="he" dir="rtl">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!-- Favicon -->
  <!-- <link rel="icon" href="assets/images/favicon.png" type="image/ico" /> -->

  <!-- Font Awesome -->
  <!-- Stylesheet -->
  <?php wp_head();?>
  <title><?php the_title(); ?></title>
</head>

<body>
  <!-- Header -->
  <header>
    <!-- Desktop Nav -->
    <nav class="navbar navbar-expand navbar-light">
      <div class="container d-block">
        <div class="row">
          <div class="col-12 col-sm-8 col-md-9 col-lg-12">

            <div class=" nav-inner d-flex w-100 justify-content-between align-items-center">
              <a href="javascript:void(0)" onclick="" id="openNav">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/hamburger.svg" />
              </a>
              <a class="navbar-brand" href="index.html">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header_logo.svg" alt="logo" />
              </a>
              <a class="search-icon" href="index.html">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/search.svg" />
              </a>
            </div>
          </div>
          <div class="col-12 mt-2 mt-sm-0 col-sm-4 col-md-3 d-lg-none header-select-col">
            <div class="nav-inner d-flex w-100 justify-content-between align-items-center">
              <select class="form-select custom-select bg-transparent border-0" id="mobileMenuDropdown"
                onchange="location = this.value;">
                <option value="#" disabled selected>הודעות</option>
                <option value="#">הודעות</option>
                <option value="#">משוב</option>
                <option value="#">הסרת קישור</option>
                <option value="#">יציאה קונטקט</option>
              </select>
            </div>
          </div>



        </div>

      </div>
    </nav>
    <!-- Breadcrumb Navigation -->
    <nav class="pt-lg-0" aria-label="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><img style="max-width: 20px;"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/house.svg" alt="Home"> - </a></li>
          <li class="breadcrumb-item"><a href="#">פרויקטים למגורים</a></li>
          <li class="breadcrumb-item active" aria-current="page">אומאמי</li>
        </ol>
      </div>
    </nav>



  </header>

    <!-- Sidebar -->
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" id="closeNav"><i class="fa fa-angle-double-right"></i></a>
    <div class="sidenav-inner">

      <ul>
        <li><a class="sidenav-icon" href="#">הודעות</a></li>
        <li><a class="sidenav-icon" href="#">הודעות</a></li>
        <li><a class="sidenav-icon" href="#">משוב</a></li>
        <li><a class="sidenav-icon" href="#">הסרת קישור</a></li>
        <li><a class="sidenav-icon" href="#">יציאה קונטקט</a></li>
      </ul>

      <a href="javascript:void(0)" class="btn btn-success mt-5">Log out</a>
    </div>
  </div>