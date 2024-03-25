<?php
include("../connection.php");
include("build_sidebar.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File-Rate User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../ADMIN_FILES/admin_dashboard.css">

    <style>
        /* CSS for GIF backgrounds */
        .section2 .box {
            background-image: url('../gif/building.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    

    <div class="wrapper">
        <main>
                <h1 class = "rateText">Welcome to Building Rate</h1>

                <div class="components">
                    
                    <div class="section2">

                                <a href="buildRate.php">
                                        <div class="box">
                                        <div class="title" style = "margin-left:-50px;">
                                            <h1> Building Rate</h1>
                                        </div>
                                        <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="rgb(73, 73, 73)" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                                            <!-- <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z"/> -->
                                        </svg>
                                        </div>
                                        <div class="dis">
                                                <h6>Click here to proceed to Building Rate</h6>
                                        </div>
                                    </div>
                                </a>

                    </div>

                    <div class="gif-container" id="gif-container">
                                <img src="../gif/gif.gif" id="gif" alt="First GIF" style="width: 100%; height: 100%; margin-left: 100px;">
                    </div>
                                
                </div>
        </main>
    </div>
    <script>
        // Array of GIF sources
        var gifs = ["../gif/first_gif.gif", "../gif/second_gif.gif", "../gif/third_gif.gif", "../gif/fourth_gif.gif", "../gif/fifth_gif.gif"];
        var currentIndex = 0;
        var gifElement = document.getElementById("gif");

        // Function to change the GIF
        function changeGIF() {
            currentIndex = (currentIndex + 1) % gifs.length; // Cycle through the array
            gifElement.src = gifs[currentIndex]; // Change the source of the GIF
        }

        // Change GIF every 3 seconds (3000 milliseconds)
        setInterval(changeGIF, 3000);
    </script>


<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>