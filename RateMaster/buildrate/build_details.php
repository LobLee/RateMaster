<?php
include("../connection.php");
include("buildrate_navbar.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['building_id']) && isset($_POST['rating'])) {
        $building_id = $_POST['building_id'];
        $rating = $_POST['rating'];

        // Update the item's rating in the items table
        $update_query = "UPDATE propertylist SET rate = '$rating' WHERE id = $building_id";
        $update_result = mysqli_query($connForEjie, $update_query);

        $txt = "A user rated an item in the Real Estate and Resources Management Platform!";

        $insertLog = "INSERT INTO log (type,message) VALUES ('build','$txt')";
        mysqli_query($conn,$insertLog);

        if ($update_result) {
            header('Location: buildRate.php');
            exit; // Stop further execution after redirection
        } else {
            echo "Error updating rating: " . mysqli_error($connForEjie);
        }
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate Details</title>
    <style>
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
        }
        .star {
            cursor: pointer;
            text-shadow: 1px 1px 1px #000;
        }
        input[type=radio] {
            display: none;
        }
        label:before {
            content: '★';
            color: gray;
        }
        input[type=radio]:checked ~ label:before {
            color: gold;
        }
    </style>
</head>
<body>

    <?php
    if(isset($_GET['building_id'])) {
        $id = mysqli_real_escape_string($connForEjie, $_GET['building_id']);
        $sql = "SELECT * FROM propertylist WHERE id = '$id'";
        $query = mysqli_query($connForEjie, $sql);

        if(mysqli_num_rows($query) > 0) {
            $test = mysqli_fetch_assoc($query);
    ?>
            <img src="<?php echo $test['image1']; ?>" style="width: 400px; height: 400px; margin-left: 400px;">
            <h4 style="margin-left: 400px;"><?php echo $test['title'] ?></h4>
            <h4 style="margin-left: 400px;"><?php echo $test['price'] ?></h4>
            <h4 style="margin-left: 400px;"><?php echo $test['state'] ?></h4>
            <h4 style="margin-left: 400px;"><?php echo $test['agent'] ?></h4>
            <h4 style="margin-left: 400px;"><?php echo $test['type'] ?></h4>

            <form action="build_details.php" method="post" style="margin-left: 400px;">
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 stars" class="star"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 stars" class="star"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 stars" class="star"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 stars" class="star"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star" class="star"></label>
                </div>
                <input type="hidden" name="building_id" value="<?php echo $id; ?>">

                <button type="submit">Submit Rating</button>
            </form>
             <!-- Back Button -->
            <button onclick="history.back()">Back</button>
    <?php
        } else {
           echo "Error: Item not found.";
        }
    } 
    ?>

</body>
</html>
