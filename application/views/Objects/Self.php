<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/assets/bootstrap/bootstrap-5.0.2/css/bootstrap.min.css') ?>">
	<title>Description of the objects</title>
</head>
<body>

	<section class="py-0">
		<?php
			$this->load->view('Utilities/Header');
		?>
	</section>
	<section class="py-0">
		<!-- Apoitra eto ny liste an'ilay appartenance -->
		<div class="container py-5"> 
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
          	<img src="<?php echo base_url('assets/images/image/'.$objet['image']['lienImage']) ?>" alt="">
            <h5 class="my-3"> <?= $user['Nom'] ?> <?= $user['prenom'] ?> </h5>
            <p class="text-muted mb-1"><?= $user['email'] ?></p>            
          </div>
        </div>
      </div>
      <!-- Atao liste ana objet no mety amn'ito -->
      <div class="col-lg-8">
        <div class="p-3 card mb-4">
          <h2 class="text-center text-decoration-underline">
              Liste de vos objets
          </h2>
          <div class="p-4 row mt-4 grid">
            <?php
              for( $i = 0 ; $i < count($objets) ; $i++ ){  ?>
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
                      <a href="<?php echo site_url('welcome/modify?idObject='.$objets[$i]['idObjet']) ?>" class="btn btn-primary">
                        Modify
                      </a>
                      <a href="<?php echo site_url('products/delete?idObject='.$objets[$i]['idObjet']) ?>" class="btn btn-danger">
                        Delete
                      </a>
                    </div>
                  </div>
                </a>
              </div>    
              <!-- var_dump($objets); -->
            <?php  } ?>
            
        </div>
        </div>
    </div>
  </div>
	</section>
	<script src="<?= base_url('assets/assets/bootstrap/bootstrap-5.0.2/js/bootstrap.min.js') ?>" ></script>
</body>
</html>