<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Deh Deepya's Cake Factory</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img\favlogo.png" rel="icon">

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
    <style>
        .hero-wrap {
            position: relative;
            width: 100%;
            height: 80vh;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 100%;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            display: none;
            animation-duration: 1s;
            animation-fill-mode: forwards;
        }

        @keyframes slideIn {
            from {
                left: 100%;
            }
            to {
                left: 0;
            }
        }

        @keyframes slideOut {
            from {
                left: 0;
            }
            to {
                left: -100%;
            }
        }

        .content {
            position: absolute;
            bottom: 20%;
            left: 10%;
            color: #fff;
            z-index: 2;
        }

        .content h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .content .btn {
            padding: 10px 20px;
            text-decoration: none;
            margin-right: 10px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary {
            background: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background: #0056b3;
            transform: scale(1.1);
        }

        .btn-white {
            background: #fff;
            color: #000;
        }

        .btn-white:hover {
            background: #ddd;
            transform: scale(1.1);
        }

        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px;
            cursor: pointer;
            z-index: 2;
            transition: transform 0.3s ease;
        }

        .arrow:hover {
            transform: scale(1.2);
        }

        .arrow.left {
            left: 10px;
        }

        .arrow.right {
            right: 10px;
        }
    </style>
</head>

<body>
    <?php include 'compoents/navbar.php'; ?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header hero-wrap" id="hero-slider">
        <div class="slide" style="background-image: url('img/Depcake.jpg');">
           <!-- <div class="overlay"></div>
            <div class="content">
                <h1 class="mb-4">Slide 1: Counseling For Your Better Life</h1>
                <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p>
                    <a href="#" class="btn btn-primary">Contact us</a>
                    <a href="#" class="btn btn-white">Read more</a>
                </p>
            </div>-->
        </div>
        <div class="slide" style="background-image: url('img/depcake2.jpg');">
            <!--<div class="overlay"></div>
            <div class="content">
                <h1 class="mb-4">Slide 2: Empowering Your Future</h1>
                <p class="mb-4">Discover the best ways to improve your lifestyle with our expert counseling.</p>
                <p>
                    <a href="#" class="btn btn-primary">Join Now</a>
                    <a href="#" class="btn btn-white">Learn More</a>
                </p>
            </div>-->
        </div>
        <div class="slide" style="background-image: url('img/depcake3.jpg');">
           <!-- <div class="overlay"></div>
            <div class="content">
                <h1 class="mb-4">Slide 3: Delicious Cakes Await You</h1>
                <p class="mb-4">Experience the best cakes in town, baked fresh with love and care.</p>
                <p>
                    <a href="#" class="btn btn-primary">Order Now</a>
                    <a href="#" class="btn btn-white">Explore More</a>
                </p>
            </div>-->
        </div>

        <div class="arrow left" onclick="changeSlide(-1)">
            <span>&#10094;</span>
        </div>
        <div class="arrow right" onclick="changeSlide(1)">
            <span>&#10095;</span>
        </div>
    </div>

    <script>
        const slides = document.querySelectorAll(".slide");
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.style.display = "block";
                    slide.style.animation = "slideIn 1s forwards";
                } else if (i === currentSlide) {
                    slide.style.animation = "slideOut 1s forwards";
                } else {
                    slide.style.display = "none";
                }
            });
        }

        function changeSlide(direction) {
            const nextSlide = (currentSlide + direction + slides.length) % slides.length;
            showSlide(nextSlide);
            currentSlide = nextSlide;
        }

        // Auto-slide every 5 seconds
        setInterval(() => {
            changeSlide(1);
        }, 5000);

        // Initialize the first slide
        showSlide(currentSlide);
    </script>
    <!-- Hero End -->

    <!-- Footer Components -->
    <?php
    include 'compoents/about.php';
    include 'compoents/clients.php';
    include 'compoents/product.php';
    include 'compoents/testimonital.php';
    include 'compoents/footer.php';
    ?>
</body>

</html>