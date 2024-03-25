<?php
include("../connection.php");
include("file_sidebar.php");

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
        .section1 .box {
            background-image: url('../gif/file.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            
        }
        .section2 .box {
            background-image: url('../gif/book2.gif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    

    <div class="wrapper">
        <main>
                <h1 class = "rateText">Welcome to I-Shared File Rate System</h1>

                
                <div class="components">
                    
                    <div class="section1">

                                <a href="FileRating.php">
                                        <div class="box">
                                        <div class="title" style = "margin-left:-50px;">
                                            <h1> File Rate</h1>
                                        </div>
                                        <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="rgb(73, 73, 73)" class="bi bi-files" viewBox="0 0 16 16">
                                            <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2m0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1M3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1z"/>
                                        </svg>
                                        </div>
                                        <div class="dis">
                                                <h6>Click here to proceed to File Rate</h6>
                                        </div>
                                    </div>
                                </a>
                    </div>

                    <div class="section2">

                        <a href="E_Library.php">
                            <div class="box">
                                <div class="title" style = "margin-left:-50px;">
                                    <h1>Book Rate</h1>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="rgb(73, 73, 73)" class="bi bi-book-fill" viewBox="0 0 16 16">
                                        <!-- <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/> -->
                                    </svg>
                                </div>
                                <div class="dis">
                                        <h6>Click here to proceed to Book Rate Management</h6>
                                </div>
                            </div>
                        </a>
                    </div> 

                    <div class="section3">
                        <div class="box">
                            <div class="gif-container" id="gif-container">
                                <img src="../gif/gif.gif" id="gif" alt="First GIF" style="width: 100%; height: 100%;">
                            </div>
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