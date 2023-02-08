<section style="background-color: #eee;">
  <div class="container py-5"> 
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <h5 class="my-3"> <?= $user['Nom'] ?> <?= $user['prenom'] ?> </h5>
            <p class="text-muted mb-1"><?= $user['email'] ?></p>
            <!-- <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> -->
            
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
        <!-- 
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>