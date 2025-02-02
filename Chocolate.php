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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap"
        rel="stylesheet">

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
  include'compoents/navbar.php';?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Our Menu</h1>
                <a href="index.php">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="menu.php">Our Menu</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="Chocolate.php">Chocolate</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


<!-- Products Start -->
<div class="container-fluid about py-5">
    <div class="container align-items-center justify-content-center">
        <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-3 justify-content-center">
                <!-- Item 1 -->
                <div class="card mx-auto text-center p-3" style="width: 18rem;">
                    <img src="img/about.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Chocolate Cake</h5>
                        <p class="card-text">Weight available: 500g to 2kg. Custom size available on request.</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->






    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-3"
                        style="max-width: 600px;">
                        <h2 class="text-primary font-secondary">Special Kombo Pack</h2>
                        <h1 class="display-4 text-uppercase text-white">Super Crispy Cakes</h1>
                    </div>
                    <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et
                        at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores
                        diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                    <a href="" class="btn btn-primary border-inner py-3 px-5 me-3">Shop Now</a>
                    <a href="" class="btn btn-dark border-inner py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <?php
  include'compoents/footer.php';?>
</body>

</html>