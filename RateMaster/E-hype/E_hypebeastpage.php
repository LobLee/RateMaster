<?php
include("../connection.php");
include("E_hype_sidebar.php"); ?>

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
            background-image: url('../gif/hype.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    

    <div class="wrapper">
        <main>
                <h1 class = "rateText">Welcome to E_Hypebeast Rate</h1>

                <div class="components">
                    
                    <div class="section2">

                                <a href="E_hypeRate.php">
                                        <div class="box">
                                        <div class="title" style = "margin-left:-50px;">
                                            <h1> E_Hypebeast Rate</h1>
                                        </div>
                                        <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="rgb(73, 73, 73)" class="bi bi-kanban-fill" viewBox="0 0 16 16">
                                                    <!-- <path d="M2.5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm5 2h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1m-5 1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1zm9-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1"/> -->
                                                </svg>
                                        </div>
                                        <div class="dis">
                                                <h6>Click here to proceed to E_Hypebeast Rate</h6>
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