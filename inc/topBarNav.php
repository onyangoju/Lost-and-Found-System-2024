<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
  <div class="container-lg d-flex justify-content-between px-4">
    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= base_url ?>" class="logo d-flex align-items-center">
        <img src="<?= validate_image($_settings->info('logo')) ?>" alt="System Logo">
        <span class="d-none d-lg-block"><?= $_settings->info('short_name') ?></span>
      </a>
    </div><!-- End Logo -->
    <nav class="header-nav me-auto">
      <ul class="d-flex align-items-center h-100">
        <li class="nav-item pe-3">
            <a href="<?= base_url ?>" class="nav-link">HOME</a>
        </li>
        <li class="nav-item pe-3">
            <a href="<?= base_url.'?page=items' ?>" class="nav-link">LOST AND FOUND</a>
        </li>
        <li class="nav-item pe-3">
            <a href="<?= base_url.'?page=found' ?>" class="nav-link">POST FOUND ITEM</a>
        </li>
        <li class="nav-item pe-3">
            <a href="<?= base_url."?page=about" ?>" class="nav-link">ABOUT US</a>
        </li>
        <li class="nav-item pe-3">
            <a href="<?= base_url.'?page=contact' ?>" class="nav-link">CONTACT US</a>
        </li>
      </ul>
    </nav><!-- End Icons Navigation -->
    <div class="d-flex align-items-center justify-content-between">
            <a href="<?= base_url.'admin' ?>" class="btn btn-primary">Admin Login</a>
    </div>
  </div>
</header><!-- End Header -->