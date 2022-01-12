    
    <?php  include('header.php'); ?>
    <?php  include('loading.php'); ?>
    
    <!-- header section starts  -->

    
    <header id="">

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><img class="logo" src="admin_pro/logo.jpg" alt="logo"></a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#popular">work demo</a>
            <a href="#services">services</a>
            <!-- <a href="#gal
            lery">All Resipe</a> -->
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons ">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container ">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->


    <!-- login form container  -->
    <?php include('login-form.php')  ?>
    <section class="home" id="home">

        <div class="content">
            <h3>web apps development</h3>
            <p> Discover Lorem ipsum dolor sit amet. </p>
            <a href="#" class="btn"> more</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="video/vid-1.mp4"></span>
            <span class="vid-btn" data-src="video/vid2.mp4"></span>
            <span class="vid-btn" data-src="video/video-3.mp4"></span>
        </div>

        <div class="video-container">
            <video src="video/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>
    <!-- home section ends -->
    
    <!-- packages section starts  -->
    <?php include('work_demo.php') ?>
    <!-- services section starts  -->
    
    <!-- services section ends -->
    <?php include('services.php') ?>
    
    <!-- review section starts  -->
    <?php include('review.php') ?>

    <!-- review section ends -->

    <!-- contact section starts  -->
    <?php include('contact.php') ?>
    <!-- contact section ends -->
    <?php include('footer.php') ?>

    <!-- footer section  -->