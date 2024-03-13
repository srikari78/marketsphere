<?php session_start();  include_once 'dbconnect.php';?>
<?php
    $result = $conn->query("SELECT * FROM Products where productId = 11");
    $prod = $result -> fetch_assoc();
    $hits = $prod["productHits"] + 1;
    $conn->query("UPDATE Products SET productHits = ".$hits." WHERE productId = 11");
    //$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php' ?>
    <title>Australia | GTS Tours</title>
</head>
<body class="australiaPage">
    <?php $page='Australia'; include 'navbar.php' ?>
    <?php
        if(isset($_SESSION["isSecure"]))
        {
            if($_SESSION["isSecure"])
            {
                $currentUserName = $_SESSION["user"];
                $result = $conn->query("SELECT * FROM UsersList where userName = '".$currentUserName."'");
                $customer = $result -> fetch_assoc();
                $custvisited = $customer["visited"];
                if(isset($custvisited) && $custvisited!="")
                {
                    //$custvisitedarr = explode(",",$custvisited);
                    //if(!in_array("A1",$custvisitedarr))
                    $custvisited = $custvisited.",B11";
                }
                else
                {
                    $custvisited = $custvisited."B11";
                }
                $conn->query("UPDATE UsersList SET visited = '".$custvisited."' WHERE userName = '".$currentUserName."'");
                //$conn->close();
            }
        }
        ?>
    <div class="topContainer">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/1_australia.jpeg" alt="Australia1" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/2_australia.jpeg" alt="Australia2" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/3_australia.jpeg" alt="Australia3" class="d-block" style="width:100%">
            </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="longDescContainer">
            <h4 class="Desctext">Short History</h4>
            <p class="longDesc">
            Australia, a vast and diverse continent, invites exploration with its breathtaking landscapes, unique wildlife, and rich indigenous heritage. The iconic Sydney Opera House and Harbour Bridge stand as symbols of Australia's modern urbanity, while the ancient monolith of Uluru in the heart of the Outback echoes the continent's timeless connection to the land. Pristine beaches stretch along the coastline, offering surfers paradise and sun-seekers a tranquil escape. The Great Barrier Reef, a natural wonder, teems with vibrant marine life beneath crystal-clear waters, showcasing the ecological richness of Australia's marine ecosystems.
            <br>
            <br>
            Australia's cultural mosaic is shaped by its indigenous roots and the influence of waves of immigrants, creating a dynamic fusion of traditions and contemporary expressions. Cities like Melbourne and Sydney pulsate with artistic energy, featuring world-class museums, galleries, and a thriving culinary scene that reflects the country's multicultural tapestry. The rugged landscapes of the Blue Mountains and the lush rainforests of the Daintree provide a stark contrast to the arid beauty of the Outback, offering adventurers a diverse range of experiences. Australia, with its laid-back charm and adventurous spirit, beckons travelers to immerse themselves in its natural wonders and vibrant culture. From the rugged terrain of the Red Centre to the cosmopolitan allure of its cities, Australia encapsulates a journey that unfolds across a vast canvas of contrasts—a land where the ancient and the contemporary coalesce, leaving an indelible mark on those who venture into its embrace.

            </p>
        </div>
    </div>

    <div class="bottomContainer">
        <div class="containerHeader">
            <h3 class="reviewsText">Reviews</h4>
            <?php 
                $sql = "SELECT * FROM Products WHERE productID = 11";
                $result = mysqli_query($conn, $sql);
                $rows = mysqli_num_rows($result);
                if($rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        echo "<div class='reviewContainer'>\n";
                            echo"<h4 style='margin-right:1em'>Average Rating</h4>";
                            for($i = 1; $i<=5; $i++)
                            {
                                $roundedRating = ceil($row["productAvgRating"]);
                                echo "<i class='fa fa-star ";
                                if($i <= $roundedRating)
                                {
                                    echo "checked";
                                }
                                else
                                {
                                    echo "unchecked";
                                }
                                echo"'></i>\n";
                            }
                    echo "</div>\n";
                    }
                }
            ?>
        </div>
        <?php 
            $sql = "SELECT * FROM Ratings WHERE productID = 11";
            $result = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($result);
            if($rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo "<div class='topReviewContainer'>\n";
                        echo "<div class='ratingContainer'>\n";
                            echo "<h4 class='currentUser'>".$row['userName']."</h4>";

                            for($i=1; $i<=5; $i++)
                            {
                                echo "<i class='fa fa-star ";
                                
                                if($i <= $row['rating'])
                                {
                                    echo "checked";
                                }
                                else
                                {
                                    echo "unchecked";
                                }
                                echo"'></i>\n";
                            }
                        echo "</div>\n";

                        echo "<div class='reviewContainer'>\n";
                            echo "<p class='reviewText'>".$row['review']."</p>";
                        echo "</div>\n";
                    echo "</div>\n";
                }
            }
        ?>
    </div>
</body>