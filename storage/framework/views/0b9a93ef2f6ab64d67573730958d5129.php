<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
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
  <div class="container-sm">
    <div style="text-align: start;">
        <h1 class="home-tag" style="margin-bottom: 30px;">Contact Us</h1>
        <p style="font-size: 20px; margin-left: 15%;">Selamat Datang di TripTulungagung, web informasi wisata di Kabupaten Tulungagung</p>
        <p style="font-size: 20px; margin-left: 15%;">Jika kamu mempunyai pertanyaan, input pertanyaan kerjasama dan review, jangan ragu ragu untuk menghubungi kami melalui contact form di bawah</p>
    </div>
    <br>
    <form style="margin-left: 20%; margin-right: 20%; position:relative; justify-content: center;" >
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">Kita tidak akan membagikan alamat email anda kesiapapun</div>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
          <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" required>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
      </form>
  </div>
<br>
<?php echo $__env->make('component.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\wisata\resources\views/contactus.blade.php ENDPATH**/ ?>