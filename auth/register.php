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
    <link href="../css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="../index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="../posts/create.html">create</a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="login.html">login</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="register.html">register</a></li>


                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="../contact.html">Contact</a>
                    </li>
                </ul>   
            </div>
        </div>
    </nav>
    <?php require "../includes/header.php"; ?>
    <?php require "../config/config.php"; ?>
    <?php
    if (isset($_POST["submit"])) {

        if ($_POST["email"] == '' OR $_POST["username"] == '' OR $_POST["password"] == '') {
            echo "Kindly input the blanks.";
        } else {
            $email = $_POST["email"];
            $username = $_POST["username"];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $insert = $conn->prepare("INSERT INTO users (email, username, mypassword) VALUES (:email, :username, :mypassword)");

            $insert->execute([
                ':email' => $email,
                ':username' => $username,
                ':mypassword' => $password
            ]);
        }
    }

    header("location: login.php");

    ?>


    <form method="POST" action="register.php">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />

        </div>

        <div class="form-outline mb-4">
            <input type="" name="username" id="form2Example1" class="form-control" placeholder="Username" />

        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />

        </div>



        <!-- Submit button -->
        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Register</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Aleardy a member? <a href="login.php">Login</a></p>



        </div>
    </form>
    <?php require "../includes/footer.php" ?>