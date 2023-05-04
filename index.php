<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>bmc jobstation</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- tailwind css -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet" /> -->

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">Job Station</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="#schedule">About</a></li>
                            <li><a href="#trainers">Vacancy</a></li>
                            <li><a href="#our-classes">News</a></li>
                            <li><a href="./admin/admin_login.php">Admin</a></li>
                            <!-- Updated the name to 'Admin' -->
                            <li><a href="./employer/registration.php">Post Job</a></li>
                            <!-- Updated the name to 'Post Job' -->
                            <li><a href="./job seeker/registration.php">Apply Job</a></li>
                            <!-- Updated the name to 'Apply Job' -->
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <!-- ***** Header Area End ***** -->
    <!-- ***** Main Banner Area Start ***** -->
    <!-- <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video3.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>WELCOME TO Bmc JOB STATION</h6>
                <h2>Find the perfect <em>Job</em></h2>

                <br>
                <form class="d-flex justify-content-center" role="search">
                    <input style="width : 400px;" class="form-control me-2" type="search" placeholder="Find Your Next Job." aria-label="Search">
                    &nbsp; <button class="btn btn-outline-success" style="color : orangered; border-color: orangered; " type="submit">Search</button>
                </form>

            </div>
        </div>
    </div> -->

    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video3.mp4" type="video/mp4" />
        </video>
        <div class="video-overlay header-text">
            <div class="caption">
                <h6>WELCOME TO BMC JOB STATION</h6>

                <br><br>
                <h2>Find Your Dream <em>Job</em> Today 💼</h2>
                <br><br>
                <form class="d-flex justify-content-center" role="search">
                    <form class="d-flex justify-content-center" role="search">
                        <input style="width : 400px;" class="form-control me-2" type="search" placeholder="Find Your Next Job." aria-label="Search">
                        &nbsp; <button class="" href="#trainers" style=" border-color: orangered; " type="submit">Search</button>
                    </form>
                    <!-- <input class="form-control me-2" type="search" placeholder="Enter Job Title or Keyword" aria-label="Search">

                    <button class="btn btn-outline-success" type="submit">Search Jobs</button> -->
                </form>

            </div>
        </div>
    </div>




    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Cars Starts ***** -->

    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>Jobs</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Choose a job you love, and you will never have to work a day in your life.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                include 'connection/db.php';
                $sql = "select * from job_master";

                // Execute query
                $result = mysqli_query($conn, $sql);

                // Loop through each records
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-lg-4">
                        <a href="./job seeker/registration.php">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/job.jpg" alt="job">
                                </div>
                                <div class="down-content">
                                    <span>Expected Salary : RS <?php echo $row['ExpectedSalary']; ?></span>

                                    <h4><?php echo $row['CompanyName']; ?></h4>

                                    <p><?php echo $row['JobTitle']; ?> &nbsp;/&nbsp; <?php echo $row['Description']; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </section>
    <!-- testomonial -->
    <style>
        /* .testimonial-container {
    background-color: rgba(0, 0, 0, 0.2);
  } */
    </style>

    <div class="container-fluid bg-dark testimonial-container py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2><em>User Testimonials</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>In this section, we display news published by admin</p>
                    </div>
                </div>
            </div>
            <!-- <h2 class="text-light">User </h2> -->
            <div class="row">
                <?php
                $testimonials = array(
                    array(
                        "name" => "John Doe",
                        "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac mi vel sem porta scelerisque. Duis quis nunc luctus, posuere arcu a, placerat mi.",
                        "image" => "https://dummyimage.com/300x300/ccc/000&text=John+Doe"
                    ),
                    array(
                        "name" => "Jane Smith",
                        "content" => "Vestibulum eget posuere ante. Morbi tempor libero vitae orci consequat viverra. Aenean dapibus mi vel leo malesuada, vel semper quam pellentesque.",
                        "image" => "https://dummyimage.com/300x300/ccc/000&text=Jane+Smith"
                    )
                );

                foreach ($testimonials as $testimonial) {
                    echo '<div class="col-lg-6 mb-4">';
                    echo '<div class="card h-100">';
                    echo '<div class="card-body">';
                    echo '<img src="' . $testimonial["image"] . '" class="img-fluid mb-3" alt="' . $testimonial["name"] . '">';
                    echo '<p class="card-text">' . $testimonial["content"] . '</p>';
                    echo '<p class="card-text"><small class="text-muted">' . $testimonial["name"] . '</small></p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- testomonial end -->


    <!-- ***** Blog Start ***** -->
    <section class="section bg-light" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading text-center">
                        <h2>Read our <em>News</em></h2>
                        <img src="assets/images/line-dec.png" alt="" class="mx-auto">
                        <p class="mt-4">In this section, we display news published by admin</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                include 'connection/db.php';
                $dummyText = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed. Nulla semper mi et nulla pellentesque, vitae malesuada urna facilisis. Quisque at massa eu velit mollis elementum. Duis ac elit enim. Nam congue, urna vel bibendum maximus, sapien ipsum vestibulum risus, quis scelerisque ante augue sit amet justo. Quisque finibus, libero in scelerisque lacinia, quam nisi porttitor sapien, in aliquam odio libero vitae velit..";
                $stmt = mysqli_prepare($conn, "SELECT News, NewsDate FROM news_master");
                if (!$stmt) {
                    die(mysqli_error($conn));
                }
                if (!mysqli_stmt_execute($stmt)) {
                    die(mysqli_stmt_error($stmt));
                }
                mysqli_stmt_bind_result($stmt, $news, $news_date);
                while (mysqli_stmt_fetch($stmt)) {
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $news; ?></h5>
                                <p class="card-text"><?php echo $news_date; ?></p>
                                <!-- <p class="card-text"><?php echo "<br>" . $dummyText; ?></p> -->
                                <p class="card-text" style="text-align: justify;"><?php echo "<br>" . $dummyText; ?></p>

                                <br>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </section>




    <!-- ***** Blog End ***** -->



    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>If you are interested, feel free to mail us at jobvetau@gmail.com</p>
                        <div class="main-button">
                            <a href="https://www.gmail.com" target="_blank" style="color:white">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Testimonials</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>What our team member say 🗣️</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/dummy.png" alt="First One" style="width:150px ; height:100px">
                            </div>
                            <div class="right-content">
                                <h4>Nabin</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitati!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/dummy.png" alt="second one" style="width:150px ; height:100px">
                            </div>
                            <div class="right-content">
                                <h4>Bimal</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessitat"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/dummy.png" alt="fourth muscle" style="width:150px ; height:100px">
                            </div>
                            <div class="right-content">
                                <h4>Chetan</h4>
                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta numquam maxime voluptatibus, impedit sed! Necessit"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <!-- <img src="assets/images/line-dec.png" alt=""> -->
                        <p>If opportunity doesn't knock, build a door.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Our Job Portal is also designed for the various employer who required to recruit employees in their organization. Employer can registered himself on the web portal and then he can upload information of various job vacancies in their organization. Employeer can view the applications of Job Seeker and send call latter to the job seekers.</p>

                        <p>It provides facility to the Job Seeker to search for various jobs as per his qualification. Here Job Seeker can registered himself on the web portal and create his profile along with his educational information. Job Seeker can search various jobs and apply for the Job.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- location about us -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading dark-bg">
                    <h2><em>Contact Us</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <p>If opportunity doesn't knock, build a door.</p>
                </div>
            </div>
        </div>
        <!-- <h2 class="text-center mb-5">Contact Us</h2> -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <h3>Our Address</h3>
                <address>
                    123 Main St<br>
                    New York, NY 10001<br>
                    USA
                </address>
            </div>
            <div class="col-md-4 mb-4">
                <h3>Contact Number</h3>
                <ul class="list-unstyled">
                    <li><i class="bi bi-telephone-fill me-3"></i>+1 (123) 456-7890</li>
                    <li><i class="bi bi-envelope-fill me-3"></i><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h3>Our Staff</h3>
                <div class="card">
                    <img src="https://dummyimage.com/400x400/000/fff&text=Staff+Image" class="card-img-top rounded-circle" alt="Staff Image">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-telephone-fill me-3"></i>+1 (123) 456-7890</li>
                            <li><i class="bi bi-envelope-fill me-3"></i><a href="mailto:john@example.com">john@example.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- location end -->







    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        bmc JOb Station © 2023 jobstation.com
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
</body>

</html>