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
    <!-- <link rel="icon" href="http://localhost/P_Final/ci306/images/favicon.png"> -->
</head>
<body>
    <section class="py-0">
        <?php $this->load->view('Utilities/Header') ?>
    </section>
    <section class="p-3  card w-50 mx-auto">
        <h2 class="text-center text-decoration-underline">
            Add Your object
        </h2>
        <form action="<?php echo site_url('products/modify'); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="hidden" class="form-control" value="<?= $objet['idObjet'] ?>" name="idObjet">
                <label for="" class="form-label"> Enter the product name </label>
                <input type="text" class="form-control" value="<?= $objet['nom'] ?>" name="nom">
            </div>
            <div class="mb-3">
                <label for="" class="form-label"> Enter the product price </label>
                <input type="text" class="form-control" value="<?= $objet['prix'] ?>" name="price">
            </div>
            <div class="mb-3">
                <label for=""> Choose the category </label>
                <select name="category" id="">
                    <?php
                        for( $i = 0 ; $i < count($categories) ; $i++ ){ ?>
                            <option value="<?= $categories[$i]['idCategories'] ?>" <?php echo ( $categories[$i]['idCategories'] == $objet['categorie']['idCategories'] ) ? "selected" : "" ?> >
                                <?= $categories[$i]['nom'] ?>
                            </option>
                        <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label"> Enter the product Description </label>
                <input type="text" class="form-control" value="<?= $objet['descriptions'] ?>" name="descri">
            </div>
            <div class="mb-3 text-center">
                <input type="submit" class="btn btn-primary" value="Modify Products">
            </div>
        </form>
    </section>
    
    <!-- end of projects -->

    <!-- Scripts -->
    <script src="<?= base_url('assets/assets/bootstrap/bootstrap-5.0.2/js/bootstrap.min.css') ?>">
        
    </script>
</body>
</html>