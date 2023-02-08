 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Takalo-Takalo</title>
    
    <!-- Styles -->
    <link href="<?= base_url('assets/assets/bootstrap/bootstrap-5.0.2/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/fontawesome-all.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/swiper.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/magnific-popup.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="http://localhost/P_Final/ci306/images/favicon.png">
</head>
<body >

    <section class="py-0">
        <?php $this->load->view('Utilities/Header') ?>
    </section>

    <section class="py-0">
        <div class="my-4 grid mx-auto w-75">
            <form action="<?php echo site_url('exchange/exchanges'); ?>" method="post">
                
                <div class="col-lg-4 col-6 mb-3 item">
                    <input type="hidden" name="idObject1" value="<?= $object['idObjet'] ?>">
                    <input type="hidden" name="idOwner" value="<?= $object['idUsers'] ?>">
                    <a class="text-decoration-none">
                      <div class="card mb-2 bg-white card-showcase">
                        <div class="card-body text-center">
                          <h4 class="card-title fw-bold text-success mb-0">
                            <?= $object['nom'] ?>
                          </h4>
                          <div class="card-text text-dark"> 
                            <?= $object['categorie']['nom'] ?>
                          </div>
                        </div>
                        <img class="card-img-bottom" src="<?php echo base_url('assets/images/image/'.$object['image']['lienImage']); ?>" alt="Feature" />
                        
                      </div>
                    </a>
                </div>
                <div class="col-lg-4 col-6 mb-3 offset-1 item ">
                    <!-- Asiana liste kely fotsiny eto -->
                    <div class="form">
                        <h3 class="text-center text-decoration-underline">
                            Exchange with :
                        </h3>
                            <select name="toExchange" class="form-select"> size="<?= count($myObject) ?>" id="" aria-label="size <?= count($myObject) ?> select example">
                                <?php
                                    for( $i = 0 ; $i < count($myObject) ; $i++ ){ ?>
                                        <option value="<?= $myObject[$i]['idObjet'] ?>">
                                            <?= $myObject[$i]['nom'] ?>
                                        </option>
                                    <?php } ?>
                            </select>
                            <div class=" text-center col-lg-4 col-6 my-3  ">
                                <input type="submit" class="btn btn-primary" value="exchange">
                            </div>
                    </div>
                </div>
            </form>
        </div>
        
    </section>

 <!-- Scripts -->
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
