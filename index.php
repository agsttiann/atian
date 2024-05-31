<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO contact_form(name, email, number, date)
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message[] = 'appointment made succesfully!';
    }else{
        $message[] = 'appointment failed';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- css -->
    <link rel="stylesheet" href="style/style.css">

</head>
<body>

<!-- header starts -->
<header class="header fixed-top ">
    <div class="container">

        <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">LIKE<span>DOK.</span></a>

            <nav class="nav">
                <a href="#about">health information</a>
                <a href="#services">asked the doctor</a>
                <a href="#apotlike">apotlike</a>
            </nav>

            <a href="login.php" class="link-btn">LOGIN</a>

            <div id="menu-btn" class="fas fa-bars"></div>

        </div>

    </div>

</header>

<!-- header end -->

<!-- home start -->

<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>Welcome to the likedok website</h3>
                <p>login to get more features</p>
                <a href="login.php" class="link-btn">LOGIN</a>
            </div>
        </div>

    </div>


</section>

<!-- home end -->

<!-- about start -->

<section class="about" id="about">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 image">
                <img src="img/doktor1.png" class="w-200 mb-10 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
                <span>ABOUT US</span>
                <h3>true healthcare for your family</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum laboriosam sed fuga aut perferendis sapiente.</p>
            </div>

        </div>
    </div>

</section>

<!-- about end -->

<!-- footer starts -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Informasi Kontak</h3>
                <p>Email: info@contoh.com</p>
                <p>Telepon: +1234567890</p>
                <p>Alamat: kp.sukamaju desa.bojongkunci kec.pameungpeuk, bandung, indonesia</p>
            </div>
            <div class="col-md-4">
                <h3>Tautan Sosial Media</h3>
                <ul class="social-links">
                    <li class="p-2"><a href="#"><i class="fa-brands fa-facebook fa-2xl"></i></a></li>
                    <li class="p-2"><a href="#"><i class="fa-brands fa-x-twitter fa-2xl"></i></a></li>
                    <li class="p-2"><a href="#"><i class="fa-brands fa-instagram fa-2xl"></i></a></li>
                    <li class="p-2"><a href="#"><i class="fa-brands fa-whatsapp fa-2xl"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Tentang Kami</h3>
                <p>website ini memmbantu pengguna untuk mencari tau bagaimana kesehatan yng ada di dalam kampung sekarang dan untuk menghubungi doktor terdekat yang bisa di ajak ketemu</p>
            </div>
        </div>
    </div>
</footer>

<!-- footer ends -->























<!-- js -->
<script src="style/style.js"></script>
</body>
</html>
