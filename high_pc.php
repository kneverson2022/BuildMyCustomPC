<!-- PHP Code to connec to server -->
<?php

$user = '';
$password = '';

$database = '';

$servername = '';
$mysqli = new mysqli($servername, $user, $password, $database);

if($mysqli->connect_error) {
    die('Connection Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}

$sql = " SELECT * FROM ___ ";
$result = $mysqli->query($sql);
$mysqli->close();

?>
<!-- HTML Code for webpage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Slabo+13px:wght@400&amp;family=Lato:wght@400&amp;display=swap">
    <title>High Build Page</title>
    <style>
        .fixed-img-size {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        /* Add this CSS for the blue scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #007bff; /* Blue color for the scrollbar */
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">BuildMyCustomPC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="BuildMyCustomPC.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactpage.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="build.html">Build</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-dark text-white text-center py-5">
        <h1 class="display-4 mb-4">High Cost PC's</h1>
        <h2 class="typing-animation"></h2>
        <p class="lead">PC Build Selection</p>
    </header>
    
    <section id="services" class="bg-light py-5">
        <div class="container">
            <h2 class="mb-4">PC Build Categories</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Lower Range Cost</h5>
                            <p class="card-text">.</p>
                        <?php 
                            //Database item section
                        ?>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-4 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Medium Range Cost</h5>
                            <p class="card-text">.</p>
                            <?php 
                                //Database item section
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">High Range Cost</h5>
                            <p class="card-text">.</p>
                            <?php 
                                //Database item section
                            ?>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2023 BuildMyCustomPC. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
    const text = "Welcome to BuildMyCustomPC!";
    const typingElement = document.querySelector(".typing-animation");
    let index = 0;

    function typeText() {
        if (index < text.length) {
            typingElement.innerHTML += text.charAt(index);
            index++;
            setTimeout(typeText, 100);
        }
    }

    document.addEventListener("DOMContentLoaded", typeText);
</script>


</body>
</html>