<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Deh Deepya's Cake Factory</title>
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
    include 'compoents/navbar.php';
    ?>
    <!-- Navbar End -->
    <div class="container" style="height: 80vh;">
        <div class="container my-5 p-4" style="background-color: #FAF3EB;">
            <div class="row">
                <!-- Left Side Image -->
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                <?php
                         $id = $_GET['id'];
                         $sql="select images from battercake where id ='$id'";
                         $result = $conn->query($sql);
                         while($row = $result->fetch_assoc()){?>
                    <img src="img/flavours/<?= $row['images']?>" alt="Cake Image" class="img-fluid" width="400px" style="border-radius: 4px;">
                    <?php } ?>
                </div>
                <!-- Right Side Form -->
                <div class="col-md-6">
                    <h1 style="text-align: center;">Cake</h1>

                    <form>
                        <!-- Cake Name -->
                         <?php
                         $id = $_GET['id'];
                         $sql="select cakename from battercake where id ='$id'";
                         $result = $conn->query($sql);
                         while($row = $result->fetch_assoc()){?>
                        <div class="mb-3">
                            <label for="cakeName" class="form-label">Cake Flavour :</label>
                            <label for="cakeName" class="form-label"><?= $row['cakename']?></label>

                        </div><?php } ?>
                        <!-- Veg/Non-Veg Options -->
                        <div class="mb-3">
                            <label class="form-label">Type :</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="veg" value="Veg">
                                <label class="form-check-label" for="veg">Egg Less🟢</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="nonVeg" value="Non-Veg">
                                <label class="form-check-label" for="nonVeg">Egg🔴</label>
                            </div>
                        </div>
                        <!-- Description -->
                                                <div class="mb-3">
                            <label for="cakeWeight" class="form-label">Select Cake Weight:</label>
                            <select class="form-select" id="cakeWeight" aria-label="Cake Weight Selection" onchange="toggleCustomWeight()">
                                <option selected disabled>Choose a weight</option>
                                <option value="0.5">500 gm</option>
                                <option value="1">1 kg</option>
                                <option value="1.5">1.5 kg</option>
                                <option value="2">2 kg</option>
                                <option value="custom">Custom Weight</option>
                            </select>
                        </div>

                        <div class="mb-3" id="customWeightDiv" style="display: none;">
                            <label for="customWeight" class="form-label">Enter Custom Weight (kg):</label>
                            <input type="number" class="form-control" id="customWeight" placeholder="Enter weight in kg" min="0.1" step="0.1">
                        </div>
                                                
                        <script>
                            function toggleCustomWeight() {
                                const select = document.getElementById("cakeWeight");
                                const customWeightDiv = document.getElementById("customWeightDiv");
                                
                                if (select.value === "custom") {
                                    customWeightDiv.style.display = "block";
                                } else {
                                    customWeightDiv.style.display = "none";
                                }
                            }
                        </script>

                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Address :</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter your address">
                        </div>
                        <!-- Price -->
                        <div class="mb-3">
    <label for="phoneNumber" class="form-label">Phone Number:</label>
    <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter your phone number" 
           pattern="[0-9]{10}" maxlength="10" required>
    <small class="form-text text-muted">Enter a 10-digit phone number.</small>
</div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary" style="background-color: #E78E2A;">Book My Cake</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- footer start  -->
    <?php
    include 'compoents/footer.php';
    ?>
</body>

</html>