<?php
// pharmacyView.php
include "../inc/view_header.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style.css">
    <title> DailyPharma - Hallucinogen</title>
</head>
<body class="CategoriesView">
    <style> body { background-color: linear-gradient(#019585, #fff);;}</style>

    <!--Header-->
    <header>
        <div class="logo">
            <a href="../index.html">DailyPharma</a>
        </div>

        <div class="navbar">
            <nav class= navbar id="navbar">
                <a href="../index.html">Home</a>
                <a href="#about">Features</a>
                <a href="#footer">Contact Us</a>
                <a href="../logout.php" class="btn-login-popup" >Logout</a>                
            </nav>

            <?php
                echo '<div class="profile">';
                echo '<a href="profile.php">';
                echo '<i class="uil uil-user"></i>' . $username . '';
                echo '</a>';
                echo ' </div>';
            ?>
        
        </div>


        <i class="uil uil-bars navbar-toggle" onclick="toggleOverlay()"></i>

        <div id="menu" onclick="toggleOverlay()">
            <div id="menu-content">
                <a href="../index.html">Home</a>
                <a href="#about">Features</a>
                <a href="#footer">Contact Us</a>
                <a href="profile.php">Profile</a><!--Place username here-->
                <a href="../logout.php">Logout</a>
            </div>
        </div>
    </header>
    <section id="service" class="item below-fold">
        <div class="title-text">
            <p>About Anaesthetics</p>
            <h1> What are They</h1>
        </div>

        <div class="service-box">
            <p>
            Anesthesia refers to the use of medications (called anesthetics) to keep you from 
            feeling pain during procedures or surgery.
            Anesthetics temporarily block sensory signals from your nerves at the
            site of the procedure to the centers in your brain. Different types of anesthesia work
            in different ways. Some anesthetic medications numb
            certain parts of your body. Other anesthetics numb your brain so you 
            can sleep through more invasive surgical procedures.
            </p>
          
        </div>
    </section>
</body>