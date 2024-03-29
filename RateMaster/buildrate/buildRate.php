<?php
include("../connection.php");
include("build_sidebar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Houses you Want to Sell</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <br>
    <header>
        <h1> Building List </h1>
    </header>
   

    <div class="container" style="margin-top: -30px;">
        <div class="row">
            <?php
            $sql = "SELECT * FROM propertylist";
            $query = mysqli_query($connForEjie,$sql);
            while($check = mysqli_fetch_assoc($query)){
                $pic = $check['image1'];
                $name = $check['title'];
                $price = $check['price'];
                $id = $check['id'];

            ?>
            <div class="col-md-2"style = "margin: 12px;">
                <div class="card" style="width: 12rem; height: 22rem; margin: 30px; box-shadow: 0 4px 8px rgba(4, 4, 4, 1.1); position: relative; left: 100px;">
                    <img src="<?php echo $pic; ?>" class="card-img-top" style="height: 190px; width: 190px;">
                    <div class="card-body">
                        <h5 class="card-title" style = "font-size:12px;"><?php echo $name; ?></h5>
                        <h5 class="card-title" style = "font-size:12px;">$<?php echo $price; ?></h5>
                            <div class="opt">
                                <div class="sec1">                                    
                                        <a href = 'build_details.php?building_id=<?php echo $id; ?>' class = "btn btn-success">Rate</a>
                                </div>
                                <div class="sec2">

                                </div>
                            </div>
                    </div>
                </div>
            </div>

           
            <?php } ?>
        </div>
    </div>


    <div class="div" style = "margin-top: 60px;"></div>

    <!-- Bootstrap JS and jQuery (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
