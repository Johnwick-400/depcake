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
            background-repeat: no-repeat;
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
    <style>
    /* Basic Styles */
    .hero-header {
        position: relative;
        width: 100%;
        height: 500px;
        overflow: hidden;
    }

    .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .active {
        opacity: 1;
    }

    /* Navigation Arrows */
    .arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 2rem;
        color: white;
        cursor: pointer;
        padding: 10px;
        background: rgba(0, 0, 0, 0.4);
        border-radius: 50%;
        user-select: none;
        transition: background 0.3s;
    }

    .arrow:hover {
        background: rgba(0, 0, 0, 0.7);
    }

    .left {
        left: 20px;
    }

    .right {
        right: 20px;
    }

    /* Indicators */
    .dots {
        position: absolute;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
    }

    .dot {
        width: 12px;
        height: 12px;
        margin: 0 5px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        cursor: pointer;
        transition: background 0.3s;
    }

    .dot.active {
        background: white;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-header {
            height: 300px;
        }
        .arrow {
            font-size: 1.5rem;
            padding: 5px;
        }
    }
</style>

<div class="container-fluid bg-primary hero-header hero-wrap" id="hero-slider">
    <div class="slide active" style="background-image: url('img/Depcake.jpg');"></div>
    <div class="slide" style="background-image: url('img/depcake2.jpg');"></div>
    <div class="slide" style="background-image: url('img/depcake3.jpg');"></div>

    <!-- Navigation Arrows -->
    <div class="arrow left" onclick="changeSlide(-1)">&#10094;</div>
    <div class="arrow right" onclick="changeSlide(1)">&#10095;</div>

    <!-- Dots -->
    <div class="dots"></div>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll(".slide");
    const dotsContainer = document.querySelector(".dots");

    function createDots() {
        slides.forEach((_, index) => {
            const dot = document.createElement("div");
            dot.classList.add("dot");
            dot.addEventListener("click", () => showSlide(index));
            dotsContainer.appendChild(dot);
        });
    }

    function showSlide(index) {
        slides[currentSlide].classList.remove("active");
        document.querySelectorAll(".dot")[currentSlide].classList.remove("active");

        currentSlide = (index + slides.length) % slides.length;

        slides[currentSlide].classList.add("active");
        document.querySelectorAll(".dot")[currentSlide].classList.add("active");
    }

    function changeSlide(direction) {
        showSlide(currentSlide + direction);
    }

    // Auto-slide every 5 seconds
    let slideInterval = setInterval(() => changeSlide(1), 5000);

    // Pause auto-slide on hover
    document.getElementById("hero-slider").addEventListener("mouseenter", () => clearInterval(slideInterval));
    document.getElementById("hero-slider").addEventListener("mouseleave", () => slideInterval = setInterval(() => changeSlide(1), 5000));

    // Swipe support for mobile users
    let startX = 0;
    document.getElementById("hero-slider").addEventListener("touchstart", (e) => startX = e.touches[0].clientX);
    document.getElementById("hero-slider").addEventListener("touchend", (e) => {
        let endX = e.changedTouches[0].clientX;
        if (startX > endX + 50) changeSlide(1);
        if (startX < endX - 50) changeSlide(-1);
    });

    // Keyboard navigation
    document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowLeft") changeSlide(-1);
        if (e.key === "ArrowRight") changeSlide(1);
    });

    // Initialize
    createDots();
    showSlide(currentSlide);
</script>

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