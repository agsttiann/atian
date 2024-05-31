<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- css -->
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
<header class="header fixed-top ">
    <div class="container">

        <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">LIKE<span>DOK.</span></a>

            <nav class="nav">
                <a href="#about">health information</a>
                <a href="#services">asked the doctor</a>
                <a href="#apotlike">apotlike</a>
            </nav>

            <a href="register.php" class="link-btn">LOGIN</a>

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
                <h2>Login</h2>
                    <?php if (isset($_SESSION['error'])) {?>
                        <div style="color: red;"><?php echo $_SESSION['error']; ?></div>
                    <?php }?>
                <form action="database.php" method="post">
                    <label for="username">Username:</label><br>
                    <input type="text" id="username" name="username" required><br>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" required><br><br>
                    <p>register here <a href="register.php">register</a></p>
                    <input type="submit" value="Login" name="login" class="link-btn">
                </form>
            </div>
        </div>

    </div>


</section>

<!-- home end -->

<!-- js -->
<script src="style/style.js"></script>
</body>
</html>
