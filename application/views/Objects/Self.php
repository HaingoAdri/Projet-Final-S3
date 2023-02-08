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
          	<img class="card-img-bottom" src="<?php echo base_url('assets/images/image/'.$objet['image']['lienImage']) ?>" alt="">
            <h5 class="my-3"> Current Owner : <?= $objet['users']['Nom'] ?> <?= $objet['users']['prenom'] ?> </h5>
            <p class="text-muted mb-1"><?= $objet['users']['email'] ?></p>            
            <p class="text-muted mb-1"><?= $objet['prix']?></p>            
            <p class="text-muted mb-1"><?= $objet['descriptions']?></p>            
          </div>
        </div>
      </div>
      <!-- Atao liste ana objet no mety amn'ito -->
      <div class="col-lg-8">
        <div class="p-3 card mb-4">
          <h2 class="text-center text-decoration-underline">
              Memebership history
          </h2>
          <div class="p-4 row mt-4 grid">
          	<!-- Alaina le liste ana historique -->
            <?php
              for( $i = 0 ; $i < count($historics) ; $i++){ ?>
                <div class="my-3 card">
                  <div class="card-body">
                    <p class="param"> Old Owner : <?= $historics[$i]['user']['Nom']." ".$historics[$i]['user']['prenom'] ?> , last-ownership : <?= $historics[$i]['finAppartenance'] ?> </p> 
                  </div>
                </div>
              <?php } ?>
          </div>
        </div>
    </div>
  </div>
	</section>
	<script src="<?= base_url('assets/assets/bootstrap/bootstrap-5.0.2/js/bootstrap.min.js') ?>" ></script>
</body>
</html>