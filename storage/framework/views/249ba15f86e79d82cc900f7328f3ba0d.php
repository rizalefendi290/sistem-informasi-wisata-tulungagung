<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
  <script src="js/all.js"></script>
  <script src="https://kit.fontawesome.com/8e23404ed8.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <img src="<?php echo e(asset('images/icon.png')); ?>" width="100px" height="100px" alt="">
          <a href="<?php echo e(route('home')); ?>" style="text-decoration: none;"><h1 class="navbar-brand">TripTulungagung</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" aria-current="page" href="<?php echo e(route('tentangkita')); ?>">Tentang Kita</a>
              <a class="nav-link" href="<?php echo e(route('destinasi')); ?>">Destination</a>
              <a class="nav-link" href="<?php echo e(route('contactus')); ?>">Contact Us</a>
            </div>
          </div>
          <form class="d-flex" role="search" method="GET" action="<?php echo e(route('search')); ?>">
            <input class="form-control me-2" name="search" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success me-2" style="width: 20%; " type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
          </form>
          <a href="">
            <button type="button" class="btn btn-success me-5">Login</button>
          </a>
        </div>
      </nav>
  </header>
</body>
</html><?php /**PATH C:\xampp\htdocs\wisata\resources\views/component/navbar.blade.php ENDPATH**/ ?>