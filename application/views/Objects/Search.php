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
      <section class="py-0">
        <?php
          $this->load->view('Utilities/Header');
        ?>
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 z-index-1">

        <div class="container-fluid px-5">
          <div class="row mt-4 grid">
            <?php
              for( $i = 0 ; $i < count($objets) ; $i++ ){  

                  if( $objets[$i]['idUsers'] == $id ){
                    continue;
                  }


                ?>
                <div class="col-lg-4 col-6 mb-3 item <?= strtolower($objets[$i]['categorie']['nom'])?>">
                  <a class="text-decoration-none" data-category="<?= strtolower($objets[$i]['categorie']['nom']) ?>">
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
                      <a href="<?= site_url('exchange/?id='.$objets[$i]['idObjet']) ?>" class="btn btn-success">
                        Propose an Exchange
                      </a>
                      <a href="<?= site_url('exchange/self?id='.$objets[$i]['idObjet']) ?>" class="btn btn-primary">
                        See details
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

          <div class="container text-center z-index-5">
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
    <script src="<?= base_url('assets/assets/bootstrap/bootstrap-5.0.2/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/assets/bootstrap/bootstrap-5.0.2/js/bootstrap.esm.min.js') ?>"></script>
    
    <script src="<?= base_url('assets/vendors/is/is.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/fontawesome/all.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/imagesloaded/imagesloaded.pkgd.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/isotope-packery/packery-mode.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/theme.js') ?>"></script>

  </body>

</html>