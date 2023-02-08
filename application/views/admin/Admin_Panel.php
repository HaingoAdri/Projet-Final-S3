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
	<!-- Favicon  -->
    <!-- <link rel="icon" href="http://localhost/P_Final/ci306/images/favicon.png"> -->
</head>
<body>
    
    <!-- Preloader -->
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <?php $this->load->view('Utilities/adminheader'); ?>
    <section class="py-0">
        <!-- Atao misy oue ajouter ilay izy -->
        <div class="container">
            <h2 class="text-center text-decoration-underline">
                Lists of Categories
                
            </h2>
            <div class="row mb-4">
            <?php for( $i = 0 ; $i < count($categories) ; $i++ ){ ?>
                    <div class="col-lg-6 col-sm-12 p-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 py-2 col-sm-3 left">
                                        <?= $categories[$i]['nom'] ?>  : 
                                        <span class="badge bg-success">
                                            Total of objects : <?= $categories[$i]['count'] ?>
                                        </span>
                                        
                                    </div>
                                    <div class="col-lg-5 offset-1 right">
                                        <a href="<?= site_url('admin/modify?idCategory='.$categories[$i]['idCategories']) ?>" class="btn btn-primary">
                                            Modify
                                        </a>
                                        <!-- <a href="" class="btn btn-danger">
                                            Remove
                                        </a> -->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            <?php } ?>
                </div>
        </div>
    </section>


    	
    <!-- Scripts -->
    <script src="<?= base_url('assets/assets/bootstrap/bootstrap-5.0.2/js/bootstrap.min.js') ?>"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    
</body>
</html>