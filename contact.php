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
                <h1 class="display-4 text-uppercase text-white">Contact Us</h1>
                <a href="index.php">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid contact position-relative px-5" style="margin-top: 90px;">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-geo-alt fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Our Office</h6>
                        <span>MVP Colony, Vizag, Andhrapradesh</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-envelope-open fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Email Us</h6>
                        <span>dehdeepyascakefactory@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-phone-vibrate fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Call Us</h6>
                        <span>+91 63022 68588</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control bg-light border-0 px-4 py-3" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-primary border-inner w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<div style="height:100px;"></div>

    <?php
    include'compoents/footer.php';
    ?>
</body>

</html>