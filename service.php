<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DehDeepya's Cake Factory</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favlogo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php
    include'compoents/navbar.php';
    ?>
<!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Services</h1>
                <a href="index.php">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="service.php">Services</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-fluid service position-relative px-5" style="margin-top: 90px;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">Birthday Cake</h4>
                        <p>Make every birthday extra special with our delicious and beautifully designed birthday cakes. From classic flavors to customized themes, we craft cakes that bring joy to every celebration. Whether it's for kids, adults, or milestone birthdays, we create the perfect cake to suit your style and taste.</p>
                        <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">Wedding Cake</h4>
                        <p>Celebrate your big day with an elegant, handcrafted wedding cake that reflects your love story. Our exquisite designs and premium flavors ensure a stunning centerpiece for your wedding. From traditional tiered cakes to modern, customized creations, we make your dream wedding cake a reality.</p>
                        <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <h4 class="text-uppercase mb-3">Custom Cake</h4>
                        <p>Looking for a unique cake tailored to your vision? Our custom cakes are designed to match any theme, occasion, or preference. Whether it’s a corporate event, anniversary, or a special surprise, we bring creativity and craftsmanship together to bake something truly extraordinary.</p>
                        <a class="text-uppercase text-dark" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 text-center">
                    <h1 class="text-uppercase text-light mb-4">30% Discount as Inarguration Offer.</h1>
                    <a href="menu.php" class="btn btn-primary border-inner py-3 px-5">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->
<div class="container" style="width: 100%; height:100px;">

</div>

    <?php
    include'compoents/footer.php';
    ?>
</body>

</html>