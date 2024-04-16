<?php
$posts = App\Models\Post::all();
?>
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
<?php echo $__env->make('component.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
  <br>
  <h1 class="home-tag">Selamat Datang di Trip Tulungagung</h1>
  <div class="container">
    <img src="<?php echo e(asset('images/alon-alon.jpg')); ?>" class="img-fluid" style="width: 80%; height: 400px; margin-left: 10%;" alt="...">
  </div>
<br>
<div class="container">
    <div>
        <h1 class="home-tag">Tentang Tulungagung</h1>
        <p style="text-align: center; font-size: 25px;">Selain sebagai penghasil batu marmer terbesar di Indonesia, Tulungagung yang terletak di Jawa Timur, mempunyai beberapa obyek wisata diantaranya wisata bahari seperti pantai Sidem, pantai Coro, pantai klatak, pantai Sine, dan lain-lain</p>    
    </div>
  <div class="slider">
    <div class="list">
        <div class="item">
            <img src="<?php echo e(asset('images/thumbnaill3.jpg')); ?>" alt="">
        </div>
        <div class="item">
            <img src="<?php echo e(asset('images/thumbnail2.webp')); ?>" alt="">
        </div>
        <div class="item">
            <img src="<?php echo e(asset('images/cobankromo.jpeg')); ?>" alt="">
        </div>
    </div>
    <div class="buttons">
        <button id="prev">
            < </button>
                <button id="next">></button>
    </div>
    <ul class="dots">
        <li class="active"></li>
        <li class="active"></li>
        <li class="active"></li>
    </ul>
</div>
<div>
    <h1 class="home-tag" style="text-align: start;">Destinasi Wisata Tulungagung</h1>
    <p style="font-size: 25px; text-align: justify;">Pelayanan terbaik untuk tour aktivitas, akomodasi hotel & villas, sewa mobil, bus dan motorbike hingga tiket fast boat dan sewa phinisi/kapal sailing tour. Destinasi unggulan Pantai Gemah, Puncak Gunung Wilis, Pantai Coro, Gunung Budheg, Pantai Popoh dan masih banyak lagi</p>
    <br>
    <div class="container text-center">
        <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col">
            <h1 style="margin-bottom: 20px"><?php echo e($post->nama_tempat); ?></h1>
            <a href="<?php echo e(route('detail', $post->id)); ?>">
              <img src="<?php echo e(asset('images/'. $post->gambar)); ?>" alt="" style="width: 20rem; height:250px; margin-bottom:60px;" >
            </a>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
</div>
<br>
</div>

<?php echo $__env->make('component.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <script>
        let list = document.querySelector('.slider .list');
        let items = document.querySelectorAll('.slider .list .item');
        let dots = document.querySelectorAll('.slider .dots li');
        let prev = document.getElementById('prev');
        let next = document.getElementById('next');
        let active = 0;
        let lengthItems = items.length - 1;

next.onclick = function(){
    if(active + 1 > lengthItems){
        active = 0;
    }else{
        active = active + 1;
    }
    reloadSlider();
}
prev.onclick = function(){
    if(active - 1 < 0){
        active = lengthItems;
    }else{
        active = active - 1;
    }
    reloadSlider();
}
let refreshSlider = setInterval(()=> {next.click()},3000);
function reloadSlider(){
    let checkLeft = items[active].offsetLeft;
    list.style.left = -checkLeft + 'px';
    let lastActiveDot = document.querySelector('.slider .dots li.active');
    lastActiveDot.classList.remove('active');
    dots[active].classList.add('active');
    clearInterval(refreshSlider);
    refreshSlider = setInterval(()=>{next.click()},3000);
}
dots.forEach((li, key) => {
    li.addEventListener('click', function(){
        active = key;
        reloadSlider();
    })
})
        const loginText = document.querySelector("title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const daftarBtn = document.querySelector("label.signup");
        const daftarLink = document.querySelector("form.signup-link a");
        daftarBtn.onclick=(()=>{
          loginForm.style.marginLeft = "-50%";
          loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick=(()=>{
          loginForm.style.marginLeft = "0%";
          loginText.style.marginLeft = "0%";
        });
        daftarLink.onclick=(()=>{
          daftarBtn.click();
          return false;
        })

        function validatePassword() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        if (password != confirmPassword) {
          alert("Password and confirm password do not match!");
          return false;
        }
        return true;
}
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\wisata\resources\views/home.blade.php ENDPATH**/ ?>