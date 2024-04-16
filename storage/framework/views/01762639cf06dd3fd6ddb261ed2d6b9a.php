<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?php echo e(asset('js/all.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    
    <footer class="footer" data-bs-theme="dark">
        <div class="footer-left">
            <h3>Payment Method</h3>
            <div class="credit-cards">
                <img src="<?php echo e(asset('images/dana.png')); ?>" alt="">
                <img src="<?php echo e(asset('images/bca.png')); ?>" alt="">
                <img src="<?php echo e(asset('images/ovo.png')); ?>" height="65px" alt="">
                <img src="<?php echo e(asset('images/shopee.png')); ?>" height="40px" width="250px" alt="">
            </div>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Indonesia, Jakarta</span></p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p><span>+62 812-5563-1791</span></p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><span><a href="#">support@gmail.com</a></span></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-about">
                <span>About</span>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptate, modi deleniti officiis
                voluptatem libero reprehenderit laboriosam distinctio nam at accusantium possimus doloribus deserunt
                magnam ex, quidem blanditiis suscipit consequuntur?
            </p>

            <div class="footer-media">
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <p class="footer-copyright">2023 NTAgency</p>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\ntagency\resources\views/component/footer.blade.php ENDPATH**/ ?>