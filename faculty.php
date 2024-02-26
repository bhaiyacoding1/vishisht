<?php include "header.php" ?>
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Faculty
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span>
                    <a href="faculty.php"> Faculty</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- start faculty Area -->

<div class="card mb-3" style="margin:40px">
    <div class="row g-0">
        <?php
        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "vsom";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        $sql = "SELECT * FROM `faculty`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $des = $row["f_des"];
            echo '<div class="col-md-4">
        <img src="./img/blog/c1.jpg" class="img-fluid rounded-start f_img" alt="..." style="width:80%">
    </div>
    <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Director\'s Message</h5>
                    <p class="card-text">' . $des . ' </p>
                </div>
             </div>
            </div>
    </div>';
        }
        ?>
        <!-- end faculty Area -->