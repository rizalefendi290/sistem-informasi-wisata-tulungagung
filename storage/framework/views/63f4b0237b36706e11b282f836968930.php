<?php
$posts = App\Models\Post::paginate(5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/all.js"></script>
    <script src="https://kit.fontawesome.com/8e23404ed8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php echo $__env->make('component.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <br>
    <div class="container">
        <h1 class="home-tag" style="text-align: start; ">Objek Wisata di Tulungagung</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Destination</li>
          </ol>
        </nav>
        <div class="container text-center">
          <div class="row">
            <div class="col-md-3">
              <h4 style="text-align: start;">Jenis Kategori</h4>
              <h5 style="text-align: start;">Objek Wisata</h5>
              <a href="" style="text-align:start; text-decoration: none; color: rgb(104, 104, 104);"><p>Aktivitas Outdoor</p></a>
              <a href="" style="text-align:start; text-decoration: none; color: rgb(104, 104, 104);"><p>Aktivitas Indoor</p></a>
              <h4 style="text-align: start;">Jenis Objek Wisata</h4>
              <a href="" style="text-align:start; text-decoration: none; color: rgb(104, 104, 104);"><p>Wisata Alam</p></a>
              <a href="" style="text-align:start; text-decoration: none; color: rgb(104, 104, 104);"><p>Taman Hiburan</p></a>
              <a href="" style="text-align:start; text-decoration: none; color: rgb(104, 104, 104);"><p>Tour</p></a>
            </div>
            <div class="col">
              <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('detail',$post->id)); ?>">
                <img src="<?php echo e(asset('images/'.$post->gambar)); ?>" alt="" style="margin-bottom: 25px; width:100%; height:300px;" >
                </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col">
              <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="">
                  <a style="text-decoration: none; color:black;" href="<?php echo e(route('detail',$post->id)); ?>">
                    <h4 style=" text-align:start;">
                      <?php echo e($post->nama_tempat); ?>

                      <p style="padding-bottom:180px; margin-bottom:35px; margin-top:20px"><?php echo e($post->lokasi_tempat); ?></p>
                    </h4>
                  </a>
                  
                </div>
              </a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
    </div>
    
    <nav aria-label="Page navigation example" style="margin-left: 45%;">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="" aria-label="Previous" style="color: black;">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#" style="color: black;">1</a></li>
        <li class="page-item"><a class="page-link" href="#" style="color: black;">2</a></li>
        <li class="page-item"><a class="page-link" href="#" style="color: black;">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next" style="color: black;">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
    <?php echo $__env->make('component.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html><?php /**PATH C:\xampp\htdocs\wisata\resources\views/destinasi.blade.php ENDPATH**/ ?>