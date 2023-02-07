<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Acceuil</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/img/favicons/apple-touch-icon.png');?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/img/favicons/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/img/favicons/favicon-16x16.png') ;?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicons/favion.png') ;?>">
    <link rel="manifest" href="<?php echo base_url('assets/img/favicons/manifest.json') ;?>">
    <meta name="msapplication-TileImage" content="<?= base_url('assets/img/favicons/mstile-150x150.png') ?>">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?php echo base_url('assets/css/theme.css') ;?>" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


      <!-- ============================================-->
      <!-- <section> begin ============================-->
<!--       <section class="py-0 overflow-hidden">

        <div class="bg-holder  bottom-0" style="background-image:url(undefined);background-image:linear-gradient(90deg, #0d2974 -11.17%, #3498db 110.39%);">
        </div>
        /.bg-holder

        <div class="container-fluid ">
          <div class="bg-holder  bottom-0" style="background-image:url(assets/img/hero/background.png);">
          </div>
          <div class="container overflow-hidden text-center pt-9 pb-10 z-index-1"><img class="mb-4" src="assets/img/hero/final.png" alt="" width="250" />
            <p class="text-white fw-semi-bold fs-4">HTML5 Template Collection 2022<br />One Hundred Pre-build website</p><a class="text-black btn btn-info mt-2 mt-lg-5 mb-5"><i class="fas fa-download me-3"></i>Download Free</a>
          </div>
          /.bg-holder

          <div class="wave mx-n3 overflow-hidden mt-n9">
            <svg width="103%" height="100%" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_6_331)">
                <path d="M4.07891 25.6305C708.541 -92.0278 936.529 246.24 1923.98 25.6305C1951.03 19.5861 1923.98 134 1923.98 134H4.07891C4.07891 134 -23.0986 30.1697 4.07891 25.6305Z" fill="url(#paint0_linear_6_331)"></path>
                <path d="M-7.84653 76.3018C700.964 6.05803 930.359 208.009 1923.9 76.3018C1951.12 72.6932 1923.9 141 1923.9 141H-7.84653C-7.84653 141 -35.1918 79.0117 -7.84653 76.3018Z" fill="white"></path>
              </g>
              <defs>
                <linearGradient id="paint0_linear_6_331" x1="-8" y1="0" x2="1936" y2="0" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#2169FC"></stop>
                  <stop offset="1" stop-color="#62FFFF"></stop>
                </linearGradient>
                <clipPath>(id="clip0_6_331")
                  <rect width="100%" height="100%" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </div>
        </div> end of .container

      </section> -->
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

        <div class="container-fluid px-5">
          <nav class="navbar navbar-expand navbar-light rounded border mt-6 justify-content-center">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link active fw-medium" href="javascript: void(0)" data-filter="*" data-bs-nav="data-bs-nav">All</a></li>

              <?php
                for( $i = 0 ; $i < count($categories) ; $i++ ){ ?>
                    <li class="nav-item">
                      <a class="nav-link fw-medium" href="javascript: void(0)" data-filter=".<?= $categories[$i]['nom'];?>" data-bs-nav="data-bs-nav">
                        <?= $categories[$i]['nom'] ?>
                      </a>
                    </li>
                <?php } ?> 
            </ul>
          </nav><a class="back-to-top bg-info" href="#"><i class="fas fa-angle-double-up"> </i></a>
          
          <!-- Asiana an'ilay produits rehetra -->

          <div class="row mt-4 grid">
            <?php
              for( $i = 0 ; $i < count($objets) ; $i++ ){ ?>
                <div class="col-lg-4 col-6 mb-3 item admin">
                  <a class="text-decoration-none" href="https://prium.github.io/phoenix/v1.0.0/index.html" data-category="admin">
                  <div class="card mb-2 bg-white card-showcase">
                    <div class="card-body text-center">
                      <h4 class="card-title fw-bold text-success mb-0">Phoenix</h4>
                      <div class="card-text text-dark">Admin &amp; DashBoard</div>
                    </div>
                    <img class="card-img-bottom" src="" alt="Feature" />
                  </div>
                </a>
              </div>    
              <!-- var_dump($objets); -->
            <?php  } ?>
            <!-- <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://technext.github.io/elaadmin/index.html" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Elaadmin</h4>
                    <div class="card-text text-dark">Admin &amp; DashBoard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img12.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item multipurpose "><a class="text-decoration-none" href="https://technext.github.io/applab_2/v1.0.0/" data-category="multipurpose ">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">AppLab</h4>
                    <div class="card-text text-dark">Multipurpose </div>
                  </div><img class="card-img-bottom" src="assets/img/template/img10.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item travel"><a class="text-decoration-none" href="https://technext.github.io/jadoo/v1.0.0/index.html" data-category="travel">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Jadoo</h4>
                    <div class="card-text text-dark">Travel &amp; Booking</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img05.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item multipurpose "><a class="text-decoration-none" href="https://technext.github.io/LaslesVPN/v1.0.0/" data-category="multipurpose ">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">LaslesVPN</h4>
                    <div class="card-text text-dark">Multipurpose </div>
                  </div><img class="card-img-bottom" src="assets/img/template/img07.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://www.bootstrapdash.com/demo/purple-admin-free/" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Purple Admin</h4>
                    <div class="card-text text-dark">Admin &amp; DashBoard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img16.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item food"><a class="text-decoration-none" href="https://technext.github.io/foodwagon/v1.0.0/index.html" data-category="food">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">FoodWagon </h4>
                    <div class="card-text text-dark">Food &amp; Restaurant</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img002.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce"><a class="text-decoration-none" href="https://technext.github.io/eshopper/index.html" data-category="ecommerce">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Eshopper</h4>
                    <div class="card-text text-dark">E-commerce</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img003.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template-free/html/" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Sneat</h4>
                    <div class="card-text text-dark">Admin &amp; Dashboard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img73.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://technext.github.io/skydash/" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Skydash</h4>
                    <div class="card-text text-dark">Admin &amp; Dashboard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img55.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/little-squirrel/v1.0.0/index.html" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Little Squirrel</h4>
                    <div class="card-text text-dark">other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img23.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce"><a class="text-decoration-none" href="https://technext.github.io/zay-shop/" data-category="ecommerce">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Zay Shop</h4>
                    <div class="card-text text-dark">E-commerce</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img03.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item multipurpose "><a class="text-decoration-none" href="https://technext.github.io/titan/" data-category="multipurpose ">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Titan</h4>
                    <div class="card-text text-dark">Multipurpose </div>
                  </div><img class="card-img-bottom" src="assets/img/template/img04.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce"><a class="text-decoration-none" href="https://technext.github.io/karma/index.html" data-category="ecommerce">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Karma</h4>
                    <div class="card-text text-dark">E-commerce</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img06.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/original/" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Original </h4>
                    <div class="card-text text-dark">Other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img08.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce"><a class="text-decoration-none" href="https://technext.github.io/shoppers/index.html" data-category="ecommerce">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Shoppers</h4>
                    <div class="card-text text-dark">E-commerce</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img09.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item landing"><a class="text-decoration-none" href="https://technext.github.io/seogram/html/index.html" data-category="landing">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">SeoGram </h4>
                    <div class="card-text text-dark">Landing Page</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img13.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item landing"><a class="text-decoration-none" href="https://technext.github.io/cakezone/" data-category="landing">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">CakeZone</h4>
                    <div class="card-text text-dark">Landing Page</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img14.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/ecohosting/index.html" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">EcoHosting </h4>
                    <div class="card-text text-dark">Other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img15.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item food"><a class="text-decoration-none" href="https://technext.github.io/foodeiblog/index.html" data-category="food">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">FoodeiBlog</h4>
                    <div class="card-text text-dark">Food &amp; Restaurant</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img17.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item business"><a class="text-decoration-none" href="https://technext.github.io/softy-pinko/index.html" data-category="business">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Softy Pinko</h4>
                    <div class="card-text text-dark">Business </div>
                  </div><img class="card-img-bottom" src="assets/img/template/img18.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://windmill-dashboard.vercel.app/" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Windmill</h4>
                    <div class="card-text text-dark">Admin &amp; Dashboard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img19.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://graindashboard.com/" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Graindashboard</h4>
                    <div class="card-text text-dark">Admin &amp; Dashboard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img20.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://moesaid.github.io/cleopatra/index.html" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Cleopatra </h4>
                    <div class="card-text text-dark">Admin &amp; Dashboard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img21.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item landing"><a class="text-decoration-none" href="https://technext.github.io/appco/index.html" data-category="landing">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Appco </h4>
                    <div class="card-text text-dark">Landing Page</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img22.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item portfolio"><a class="text-decoration-none" href="https://technext.github.io/karma/index.html" data-category="portfolio">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Neat</h4>
                    <div class="card-text text-dark">Portfolio</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img24.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item law"><a class="text-decoration-none" href="https://technext.github.io/ariclaw/index.html" data-category="law">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Ariclaw</h4>
                    <div class="card-text text-dark">Law Firm</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img25.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/eventalk/index.html" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Eventalk</h4>
                    <div class="card-text text-dark">other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img26.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item travel"><a class="text-decoration-none" href="https://technext.github.io/carbook/index.html" data-category="travel">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Carbook</h4>
                    <div class="card-text text-dark">Travel &amp; booking</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img27.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item agency"><a class="text-decoration-none" href="https://technext.github.io/tournest/" data-category="agency">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Tournest</h4>
                    <div class="card-text text-dark">Travel Agency</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img28.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item medical"><a class="text-decoration-none" href="https://technext.github.io/medino/index.html" data-category="medical">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Medino </h4>
                    <div class="card-text text-dark">Medical &amp; Health Care</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img29.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/deerhost/index.html" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">DeerHost </h4>
                    <div class="card-text text-dark">Other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img30.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item business"><a class="text-decoration-none" href="https://technext.github.io/ultim8/index.html" data-category="business">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Ultim8</h4>
                    <div class="card-text text-dark">Business</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img31.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item portfolio"><a class="text-decoration-none" href="https://technext.github.io/satner/index.html" data-category="portfolio">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Satner</h4>
                    <div class="card-text text-dark">Portfolio</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img32.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item portfolio"><a class="text-decoration-none" href="https://technext.github.io/more/index.html" data-category="portfolio">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">More</h4>
                    <div class="card-text text-dark">Portfolio</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img33.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://demos.creative-tim.com/bs3/paper-dashboard/dashboard.html" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Paper Dashboard</h4>
                    <div class="card-text text-dark">Admin &amp; Dashboard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img34.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce "><a class="text-decoration-none" href="https://technext.github.io/majestic-2/v1.0.1/" data-category="ecommerce ">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Majestic </h4>
                    <div class="card-text text-dark">E-Commerce </div>
                  </div><img class="card-img-bottom" src="assets/img/template/img35.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce "><a class="text-decoration-none" href="https://technext.github.io/winkel/index.html" data-category="ecommerce ">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Winkel</h4>
                    <div class="card-text text-dark">E-Commerce </div>
                  </div><img class="card-img-bottom" src="assets/img/template/img36.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item landing"><a class="text-decoration-none" href="https://technext.github.io/sevi/v1.0.0/" data-category="landing">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Sevi</h4>
                    <div class="card-text text-dark">Landing Page</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img37.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/Nova/" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Nova</h4>
                    <div class="card-text text-dark">other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img38.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item medical"><a class="text-decoration-none" href="https://technext.github.io/drpro/index.html" data-category="medical">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">DrPro</h4>
                    <div class="card-text text-dark">Medical &amp; Health Care</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img39.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item travel"><a class="text-decoration-none" href="https://technext.github.io/pacific/index.html" data-category="travel">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Pacific</h4>
                    <div class="card-text text-dark">Travel &amp; Booking</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img40.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/boxus/" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Boxus</h4>
                    <div class="card-text text-dark">other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img41.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item business"><a class="text-decoration-none" href="https://technext.github.io/Asentus/HTML/" data-category="business">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Asentus </h4>
                    <div class="card-text text-dark">Business &amp; Corporate</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img42.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce"><a class="text-decoration-none" href="https://technext.github.io/amado/" data-category="ecommerce">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Amado</h4>
                    <div class="card-text text-dark">E-Commerce</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img43.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/glint/" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Glint</h4>
                    <div class="card-text text-dark">other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img44.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item multipurpose"><a class="text-decoration-none" href="https://technext.github.io/Flusk/" data-category="multipurpose">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Flusk</h4>
                    <div class="card-text text-dark">Multi-Purpose</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img45.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item landing"><a class="text-decoration-none" href="https://technext.github.io/notes-html-template/" data-category="landing">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Notes</h4>
                    <div class="card-text text-dark">Landing Page</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img46.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/Justice/" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Justice</h4>
                    <div class="card-text text-dark">other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img47.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce"><a class="text-decoration-none" href="https://technext.github.io/cozastore/" data-category="ecommerce">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Cozastore </h4>
                    <div class="card-text text-dark">E-Commerce</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img48.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce"><a class="text-decoration-none" href="https://technext.github.io/coffee/" data-category="ecommerce">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Coffee</h4>
                    <div class="card-text text-dark">E-commerce</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img49.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce"><a class="text-decoration-none" href="https://technext.github.io/shop/" data-category="ecommerce">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Shop</h4>
                    <div class="card-text text-dark">E-commerce</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img50.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item game"><a class="text-decoration-none" href="https://technext.github.io/anime/index.html" data-category="game">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Anime </h4>
                    <div class="card-text text-dark">Game &amp; Anime</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img51.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce"><a class="text-decoration-none" href="https://technext.github.io/karl/" data-category="ecommerce">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Karl</h4>
                    <div class="card-text text-dark">E-commerce</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img53.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item business"><a class="text-decoration-none" href="https://technext.github.io/woody/" data-category="business">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Woody</h4>
                    <div class="card-text text-dark">Business</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img54.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce"><a class="text-decoration-none" href="https://technext.github.io/violet/index.html" data-category="ecommerce">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Violet </h4>
                    <div class="card-text text-dark">E-commerce</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img56.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/ensurance/v1.0.0/index.html" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Ensurance</h4>
                    <div class="card-text text-dark">Other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img58.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item agency"><a class="text-decoration-none" href="https://technext.github.io/digital-1/" data-category="agency">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">DGital</h4>
                    <div class="card-text text-dark">Agency</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img59.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce"><a class="text-decoration-none" href="https://technext.github.io/famms/index.html" data-category="ecommerce">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Famms</h4>
                    <div class="card-text text-dark">E-commerce</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img60.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item multipurpose"><a class="text-decoration-none" href="https://technext.github.io/material-kit-2/" data-category="multipurpose">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Material kit 2</h4>
                    <div class="card-text text-dark">Multipurpose</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img61.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item landing"><a class="text-decoration-none" href="https://technext.github.io/chain/" data-category="landing">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Chain</h4>
                    <div class="card-text text-dark">Landing Page</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img62.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item landing"><a class="text-decoration-none" href="https://technext.github.io/patrix/index.html" data-category="landing">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Patrix </h4>
                    <div class="card-text text-dark">Landing Page</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img63.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item landing"><a class="text-decoration-none" href="https://technext.github.io/dtox/index.html" data-category="landing">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Dtox</h4>
                    <div class="card-text text-dark">Landing Page</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img64.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item medical"><a class="text-decoration-none" href="https://technext.github.io/live-doc/v1.0.0/index.html" data-category="medical">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Livedoc</h4>
                    <div class="card-text text-dark">Medical &amp; Health</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img65.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item business"><a class="text-decoration-none" href="https://technext.github.io/zinc/" data-category="business">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Zinc</h4>
                    <div class="card-text text-dark">Business</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img66.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item landing"><a class="text-decoration-none" href="https://technext.github.io/simple/" data-category="landing">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Simple</h4>
                    <div class="card-text text-dark">Landing Page</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img67.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item business"><a class="text-decoration-none" href="https://technext.github.io/ioniq/" data-category="business">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Ioniq</h4>
                    <div class="card-text text-dark">Business</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img68.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item business"><a class="text-decoration-none" href="https://technext.github.io/nubis/" data-category="business">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Nubis</h4>
                    <div class="card-text text-dark">Business</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img69.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item medical"><a class="text-decoration-none" href="https://technext.github.io/medic-care/" data-category="medical">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Medic Care</h4>
                    <div class="card-text text-dark">Medical &amp; Health</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img70.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item business"><a class="text-decoration-none" href="https://technext.github.io/makan/" data-category="business">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Makan</h4>
                    <div class="card-text text-dark">Business</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img02.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item business"><a class="text-decoration-none" href="https://technext.github.io/yavin/" data-category="business">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Yavin</h4>
                    <div class="card-text text-dark">Business</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img71.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Soft UI</h4>
                    <div class="card-text text-dark">Admin &amp; Dashboard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img72.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item medical"><a class="text-decoration-none" href="https://technext.github.io/convid/index.html" data-category="medical">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Convid</h4>
                    <div class="card-text text-dark">Medical &amp; Health Care</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img74.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item financial"><a class="text-decoration-none" href="https://technext.github.io/karma/index.html" data-category="financial">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Digitalex </h4>
                    <div class="card-text text-dark">Financial</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img75.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/eden/index.html" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Eden</h4>
                    <div class="card-text text-dark">other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img76.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item photography "><a class="text-decoration-none" href="https://technext.github.io/rettro/index.html" data-category="photography ">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Rettro</h4>
                    <div class="card-text text-dark">Photography </div>
                  </div><img class="card-img-bottom" src="assets/img/template/img77.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item landing"><a class="text-decoration-none" href="https://technext.github.io/karma/index.html" data-category="landing">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">JoBest</h4>
                    <div class="card-text text-dark">Landing Page</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img78.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://technext.github.io/corona-free-dark-bootstrap-admin-template/index.html" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Corona</h4>
                    <div class="card-text text-dark">Admin &amp; DashBoard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img01.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/karma/index.html" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Purple Buzz</h4>
                    <div class="card-text text-dark">Other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img79.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item business"><a class="text-decoration-none" href="https://technext.github.io/open-enterprise/v1.0.0/#" data-category="business">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Open Enterprise</h4>
                    <div class="card-text text-dark">Business</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img80.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item "><a class="text-decoration-none" href="https://technext.github.io/karmo/" data-category="">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Karmo</h4>
                    <div class="card-text text-dark"></div>
                  </div><img class="card-img-bottom" src="assets/img/template/img81.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://technext.github.io/celestialAdmin-free-admin-template/" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Celestial </h4>
                    <div class="card-text text-dark">Admin &amp; DashBoard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img82.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item landing"><a class="text-decoration-none" href="https://technext.github.io/Rhea/v1.0.0/" data-category="landing">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Rhea</h4>
                    <div class="card-text text-dark">Landing Page</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img83.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item landing"><a class="text-decoration-none" href="https://technext.github.io/dataWarehouse/v1.0.0/" data-category="landing">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">DataWarehouse</h4>
                    <div class="card-text text-dark">Landing Page</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img84.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item business"><a class="text-decoration-none" href="https://technext.github.io/mosaic/index.html" data-category="business">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Mosaic </h4>
                    <div class="card-text text-dark">Business</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img85.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item "><a class="text-decoration-none" href="https://technext.github.io/cial/index.html" data-category="">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Cial</h4>
                    <div class="card-text text-dark"></div>
                  </div><img class="card-img-bottom" src="assets/img/template/img86.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item ecommerce"><a class="text-decoration-none" href="https://technext.github.io/ashion/index.html" data-category="ecommerce">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Ashion </h4>
                    <div class="card-text text-dark">E-commerce</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img87.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item music"><a class="text-decoration-none" href="https://technext.github.io/podcast/index.html" data-category="music">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Podcast</h4>
                    <div class="card-text text-dark">Music</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img88.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item portfolio"><a class="text-decoration-none" href="https://technext.github.io/rezume/index.html" data-category="portfolio">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Rezume</h4>
                    <div class="card-text text-dark">Portfolio</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img89.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item other"><a class="text-decoration-none" href="https://technext.github.io/hightech/index.html" data-category="other">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Hightech</h4>
                    <div class="card-text text-dark">other</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img90.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item photography"><a class="text-decoration-none" href="https://technext.github.io/boto/index.html" data-category="photography">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Boto</h4>
                    <div class="card-text text-dark">Photography</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img91.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://technext.github.io/flat_able/" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Flat Able</h4>
                    <div class="card-text text-dark">Admin &amp; DashBoard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img92.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://technext.github.io/tinydash/index.html" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Tinydash</h4>
                    <div class="card-text text-dark">Admin &amp; DashBoard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img93.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item anime"><a class="text-decoration-none" href="https://technext.github.io/game-warrior/index.html" data-category="anime">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Game Warrior</h4>
                    <div class="card-text text-dark">Game &amp; Anime</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img94.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item magazine"><a class="text-decoration-none" href="https://technext.github.io/meranda/index.html" data-category="magazine">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Meranda</h4>
                    <div class="card-text text-dark">Magazine</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img95.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item admin"><a class="text-decoration-none" href="https://reduction-admin.github.io/react-reduction/" data-category="admin">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">React Reduction</h4>
                    <div class="card-text text-dark">Admin &amp; DashBoard</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img96.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item food"><a class="text-decoration-none" href="https://technext.github.io/dingo/index.html" data-category="food">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Dingo </h4>
                    <div class="card-text text-dark">Food &amp; Restaurant</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img97.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item travel"><a class="text-decoration-none" href="https://technext.github.io/gotrip/index.html" data-category="travel">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">GoTrip</h4>
                    <div class="card-text text-dark">Travel &amp; Booking</div>
                  </div><img class="card-img-bottom" src="assets/img/template/img98.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item photography "><a class="text-decoration-none" href="https://technext.github.io/studio/" data-category="photography ">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Studio</h4>
                    <div class="card-text text-dark">Photography </div>
                  </div><img class="card-img-bottom" src="assets/img/template/img99.png" alt="Feature" />
                </div>
              </a></div>
            <div class="col-lg-4 col-6 mb-3 item news "><a class="text-decoration-none" href="https://technext.github.io/newsbox/index.html" data-category="news ">
                <div class="card mb-2 bg-white card-showcase">
                  <div class="card-body text-center">
                    <h4 class="card-title fw-bold text-success mb-0">Newsboxs</h4>
                    <div class="card-text text-dark">News </div>
                  </div><img class="card-img-bottom" src="assets/img/template/img100.png" alt="Feature" />
                </div>
              </a></div>
          </div> -->
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

        <!-- <div class="bg-holder  bottom-0" style="background-image:url(undefined);background-image:linear-gradient(90deg, #0d2974 -11.17%, #3498db 110.39%);">
        </div> -->
        

        <div class="container-fluid">
          <!-- <div class="bg-holder  bottom-0" style="background-image:url(assets/img/footer/footer.png);">
          </div> -->
          

          <!-- <div class="bg-holder  " style="background-image:url(assets/img/footer/frame.png);background-size: auto;background-position: top;">
          </div> -->
          <!--/.bg-holder-->

          <div class="container text-center z-index-1">
            <h1 class="mb-4 fw-bold text-white fs-10">Ready to get started?</h1>
            <p class="text-dark fw-medium">
              Takalo-takalo project<br /> Made by Sarobidy ETU002032 - Rova ETU002069 - Haingo ETU001969</p>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <!-- <script src="<?= base_url('assets/vendors/@popperjs/popper.min.js') ?>"></script> -->
    <script src="<?= base_url('assets/assets/bootstrap/bootstrap-5.0.2/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/is/is.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/fontawesome/all.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/imagesloaded/imagesloaded.pkgd.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/isotope-packery/packery-mode.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/theme.js') ?>"></script>

  </body>

</html>