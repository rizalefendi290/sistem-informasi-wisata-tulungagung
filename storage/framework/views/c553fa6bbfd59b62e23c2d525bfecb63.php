<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?php echo e(asset('js/all.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
    <title>Beranda</title>
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
    <?php echo $__env->make('component.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="<?php echo e(asset('images/thumbnail2.png')); ?>" alt="">
            </div>
            <div class="item">
                <img src="<?php echo e(asset('images/thumbnail.jpg')); ?>" alt="">
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
        </ul>
    </div>

    <div>
        <div class="afooter">
            <h1>NTAgency Top Up</h1>
            <br>
            <h3>Website Top Up Diamond Terpercaya</h3>
            <br>
        </div>
        <div class="container text-center">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <img src="<?php echo e(asset('images/icon1.png')); ?>" alt="">
                    <h4>Bayar dalam hitungan detik</h4>
                    <p>Hanya dibutuhkan beberapa detik saja untuk menyelesaikan pembayaran di NTAgency karena
                        situs kami berfungsi dengan baik dan mudah untuk digunakan.</p>
                </div>
                <div class="col">
                    <img src="<?php echo e(asset('images/icon2.png')); ?>" alt="">
                    <h4>Metode pembayaran terbaik</h4>
                    <p>Kami menawarkan begitu banyak pilihan pembayaran mulai dari , e-wallet, bank transfer, dan
                        pembayaran
                        di mini market terdekat.</p>
                </div>

                <div class="col">
                    <img src="<?php echo e(asset('images/icon4.png')); ?>" alt="">
                    <h4>Pengiriman Instan</h4>
                    <p>Ketika kamu melakukan pembelian di NTAgency Store, item atau barang yang kamu beli akan
                        selalu dikirim ke akun kamu secara instan dan cepat, tanpa tertunda.</p>
                </div>
            </div>
        </div>

        <?php echo $__env->make('component.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\ntagency\resources\views/home.blade.php ENDPATH**/ ?>