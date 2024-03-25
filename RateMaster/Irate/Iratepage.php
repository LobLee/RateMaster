<?php
include("../connection.php");
include("Irate_sidebar.php");
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
                <h1 class = "rateText">Welcome to I-Rate</h1>

                <div class="components">
                    
                    <div class="section2">

                                <a href="Irate.php">
                                        <div class="box">
                                        <div class="title" style = "margin-left:-50px;">
                                            <h1> I-Rate</h1>
                                        </div>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="rgb(73, 73, 73)" class="bi bi-images" viewBox="0 0 16 16">
                                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                                                <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2M14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1M2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1z"/>
                                            </svg>
                                        </div>
                                        <div class="dis">
                                                <h6>Click here to proceed to I-Rate</h6>
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