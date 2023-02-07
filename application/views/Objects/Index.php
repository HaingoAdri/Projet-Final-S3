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
                      <a class="nav-link fw-medium" href="javascript: void(0)" data-filter=".<?= strtolower($categories[$i]['nom'])?>" data-bs-nav="data-bs-nav">
                        <?= $categories[$i]['nom'] ?>
                      </a>
                    </li>
                <?php } ?> 
            </ul>
          </nav><a class="back-to-top bg-info" href="#"><i class="fas fa-angle-double-up"> </i></a>
          

          <div class="row mt-4 grid">
            <?php
              for( $i = 0 ; $i < count($objets) ; $i++ ){ 
                  
                ?>
                <div class="col-lg-4 col-6 mb-3 item <?= strtolower($objets[$i]['categorie']['nom'])?>">
                  <a class="text-decoration-none" href="https://prium.github.io/phoenix/v1.0.0/index.html" data-category="<?= strtolower($objets[$i]['categorie']['nom']) ?>">
                  <div class="card mb-2 bg-white card-showcase">
                    <div class="card-body text-center">
                      <h4 class="card-title fw-bold text-success mb-0">
                        <?= $objets[$i]['nom'] ?>
                      </h4>
                      <div class="card-text text-dark"> 
                        <?= $objets[$i]['categorie']['nom'] ?>
                      </div>
                    </div>
                    <img class="card-img-bottom" src="<?php echo base_url('assets/images/image/'.$objets[$i]['image']['lienImage']); ?>" alt="Feature" />
                    <div class="card-footer text-center">
                      <a href="" class="btn btn-success">
                        Propose an Exchange
                      </a>
                    </div>
                  </div>
                </a>
              </div>    
              <!-- var_dump($objets); -->
            <?php  } ?>
            
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