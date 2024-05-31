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
                <a href="#reviews">satisfied clients</a>
            </nav>

            <!-- User logo and pop-up menu -->
            <a href="#" class="user-logo" onclick="togglePopup()"><img src="img/doktor1.png" alt="User Avatar"></a>
            <div class="popup-menu" id="popupMenu">
                <a href="#">Edit Profile</a>
                <a href="#">Settings</a>
                <a href="#">Help and Information</a>
                <a href="index.php">Logout</a>
            </div>
            <!-- Akhir tambahan -->

            <!-- <a href="login.php" class="link-btn">LOGIN</a> -->

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
                <h3>Let's Ask your complaint on Likedok</h3>
                <p>Always there for those who need 24 hour treatment</p>
                <a href="#services" class="link-btn">ASKED THE DOCTOR</a>
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
                <img src="img/doktor1.png" class="w-200 mb-10 mb-md-10" alt="">
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

<!-- services start -->

<section class="services" id="services">

    <h1 class="heading">OUR DOCTOR</h1>

    <div class="box-container container">

        <div class="box">
            <img src="img/doktor1.png" alt="">
            <h3>alignment specialist</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officiis cupiditate placeat, maxime consectetur amet.</p>
            <a href="#contact" class="link-btn">ASKED THE DOCTOR</a>
        </div>

        <div class="box">
            <img src="img/doktor2.png" alt="">
            <h3>alignment specialist</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officiis cupiditate placeat, maxime consectetur amet.</p>
            <a href="#contact" class="link-btn">ASKED THE DOCTOR</a>
        </div>

        <div class="box">
            <img src="img/doktor3.png" alt="">
            <h3>alignment specialist</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officiis cupiditate placeat, maxime consectetur amet.</p>
            <a href="#contact" class="link-btn">ASKED THE DOCTOR</a>
        </div>

    </div>

</section>

<!-- services end -->

<!-- process start -->

<section class="process" id="apotlike">

    <h1 class="heading">APOTLIKE</h1>

    <div class="box-container container">

        <div class="box">
            <img src="img/doktor3.png" alt="">
            <h3>cosmetic dentistry</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, fuga.</p>
        </div>

        <div class="box">
            <img src="img/doktor3.png" alt="">
            <h3>cosmetic dentistry</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, fuga.</p>
        </div>

        <div class="box">
            <img src="img/doktor3.png" alt="">
            <h3>cosmetic dentistry</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, fuga.</p>
        </div>

    </div>

</section>

<!-- process end -->



<!-- reviews section starts -->

<section class="reviews" id="reviews">

    <h1 class="heading"> satisfied clients</h1>

    <div class="box-container container">

        <div class="box">
          <img src="img/doktor1.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsum sapiente quam minus, doloremque minima numquam aperiam nulla nesciunt inventore!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>agus deo</h3>
          <span>satisfied client</span>
        </div>

        <div class="box">
          <img src="img/doktor2.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsum sapiente quam minus, doloremque minima numquam aperiam nulla nesciunt inventore!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>agus deo</h3>
          <span>satisfied client</span>
        </div>

        <div class="box">
          <img src="img/doktor3.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsum sapiente quam minus, doloremque minima numquam aperiam nulla nesciunt inventore!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>agus deo</h3>
          <span>satisfied client</span>
        </div>

        <div class="box">
          <img src="img/doktor1.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsum sapiente quam minus, doloremque minima numquam aperiam nulla nesciunt inventore!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>agus deo</h3>
          <span>satisfied client</span>
        </div>


        <div class="box">
          <img src="img/doktor2.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsum sapiente quam minus, doloremque minima numquam aperiam nulla nesciunt inventore!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>agus deo</h3>
          <span>satisfied client</span>
        </div>
        
        <div class="box">
          <img src="img/doktor3.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsum sapiente quam minus, doloremque minima numquam aperiam nulla nesciunt inventore!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>agus deo</h3>
          <span>satisfied client</span>
        </div>

    </div>

</section>

<!-- reviews section ends -->


<!-- contact section starts -->

<section class="contact" id="contact">

    <h1 class="heading">make appoiment</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
            if(isset($message)){
                foreach($message as $message){
                    echo '<p class="message">'.$message.'</p>';
                }
            }
        ?>
        <span>your name :</span>
        <input type="text" name="name" placeholder="enter your name" class="box">
        <span>your email :</span>
        <input type="email" name="email" placeholder="enter your email" class="box">
        <span>your number :</span>
        <input type="number" name="number" placeholder="enter your number" class="box">
        <span>appointment date :</span>
        <input type="datetime-local" name="date" class="box">
        <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>

</section>

<!-- contact section ends -->

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
