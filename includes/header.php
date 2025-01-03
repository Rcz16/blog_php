<?php

session_start();

?>

<!-- Page Header-->
<header class="masthead" style="background-image: url('http://localhost/clean-blog/assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content-->
<div class="container px-4 px-lg-5">

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
            type="text/css" />
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
            rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRHOa7WAsxL1B6eRyEQxk4OzEVm0+VX9n6S10eN7j" crossorigin="anonymous">
        <link href="http://localhost/clean-blog/css/styles.css" rel="stylesheet" />
    </head>

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="../index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="navbar-nav ms-auto py-4 py-lg-0">

                        <?php if (isset($_SESSION["username"])): ?>

                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                    href="../clean-blog/index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                    href="../clean-blog/posts/create.php">create</a></li>
                            <li class="nav-item dropdown mt-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $_SESSION["username"]; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="../clean-blog/auth/logout.php">Logout</a>
                                </div>
                            </li>
                        <?php else: ?>

                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                    href="../clean-blog/auth/login.php">login</a></li>
                            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                    href="../clean-blog/auth/register.php">register</a>
                            </li>

                        <?php endif; ?>

                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                                href="../clean-blog/contact.php">Contact</a>
                        </li>
                        </ul>
                    </div>
                </div>
        </nav>