<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          Tak-Tak
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?= site_url('welcome/acceuil') ?>" class="nav-link px-2 link-secondary">Acceuil</a></li>
          <li><a href="<?= site_url('welcome/profil') ?>" class="nav-link px-2 link-dark">My Profile</a></li>
          <li><a href="<?= site_url('exchange/proposition') ?>" class="nav-link px-2 link-dark">Propositions</a></li>
          <li><a href="<?= site_url('welcome/add') ?>" class="nav-link px-2 link-dark">Add Object</a></li>
        </ul>

        <form class="col-12 col-lg-auto d-flex mb-3 mb-lg-0 me-lg-3">
          <input type="text" class="form-control w-50" name="titre" placeholder="Search..." aria-label="Search">
          <!-- Mila avadika ho mini-select ito search bar ito -->
          <select class="form-select w-50" name="category" placeholder="Search..." aria-label="Search">
          <?php
            for( $i = 0 ; $i < count($categories) ; $i++ ){ ?>
                <option value="<?= $categories[$i]['idCategories'] ?>">
                  <?= $categories[$i]['nom'] ?>
                </option>
            <?php } ?>
        </select>
        <button type="submit" class="btn btn-primary">
            search
        </button>
        </form>

        <div class="dropdown text-end d-flex">
          <a class="dropdown-item" href="<?= site_url('welcome/log_out') ?>">Sign out</a>
          
        </div>
      </div>
    </div>
  </header>