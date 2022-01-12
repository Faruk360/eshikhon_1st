<?php
ob_start();
include('../header.php') ?>

<style>
    .icons a {
        font-size: 2rem;
    }

    .danger {
        color: #ED4C67;
    }
    .nav_header{
        margin-bottom: 70px;
    }
    
</style>

<head>

<body>
    <!-- header section starts  -->

    <header class="nav_header">
        <a href="#" class="logo"><img class="logo" src="../admin_pro/logo.jpg" alt="logo"></a>

        <nav class="navbar">
            <a href="list.php" class="add">Home</a>
            <a href="insret.php" class="add">Add New</a>
                <a href="#review">review</a>
                <a href="#contact">contact</a>

        </nav>

        <div class="icons ">
        <!-- <i class="fas fa-sign-out-alt danger"></i> -->

            <?php
            if (isset($_REQUEST['submit'])) {
                $cokie = time() - 86400 * 365;
                setcookie("userName", "omar faruk", $cokie);
            }
            if (isset($_COOKIE['userName'])) {
                // 
            ?>
            <style>
                .image_area:hover .desbrod_area {
                    display: block;
                }
                .image_area .desbrod_area {
                    border-radius: 5px;
                    margin:-60px auto auto -100px;
                    height: 75px;
                    width: 120px;
                    background: #000;
                    padding: 10px;
                    display: none;
                }
                .image_area .desbrod_area a{
                    font-size: 18px;
                    width: 100% !important;
                    
                }
                .image_area .desbrod_area .a1{
                    /* color: #ff4444; */
                    color: white;
                    background: #ff4444;
                    padding: 0 20%;
                }
                .image_area .desbrod_area .a2{
                    color: white;
                    background: #33b5e5;
                    padding: 0 4%;
                }
            </style>
            <div class="image_area">
                <img class="profile_image " src="../admin_pro/Eggplant.webp" alt="">
                <div class="desbrod_area">
                    <a class="a1" href="logout.php?out=2" id="name">log out</a><br>
                    <a class="a2" href="edit_profile.php">Edit Profile</a>
                    <!-- <a class="a2" href="profile.php">profile</a> -->
                </div>
            </div><?php } ?>
        </div>
    </header>