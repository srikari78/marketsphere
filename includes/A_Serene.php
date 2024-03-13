<?php session_start();  include_once 'dbconnect.php';?>
<?php
    $result = $conn->query("SELECT * FROM Products where productId = 30");
    $prod = $result -> fetch_assoc();
    $hits = $prod["productHits"] + 1;
    $conn->query("UPDATE Products SET productHits = ".$hits." WHERE productId = 30");
    //$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php' ?>
    <title>Luxury House  | CityVistaRealEstate</title>
</head>
<body class="australiaPage">
    <?php $page='LuxuryHouse'; include 'navbar.php' ?>
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
                    $custvisited = $custvisited.",C30";
                }
                else
                {
                    $custvisited = $custvisited."C30";
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
                <img src="../img/10.1.jpg" alt="Adhesive Tape1" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/10.2.jpg" alt="Adhesive Tape2" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/10.3.jpg" alt="Adhesive Tape3" class="d-block" style="width:100%">
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
            <h4 class="Desctext">Short Description</h4>
            <p class="longDesc">
            Welcome to this exquisite residence that seamlessly blends contemporary elegance with craftsman charm. Boasting a total structure area of 2,999 sqft, this single-family home in the heart of Japan Town offers a spacious and inviting interior. The well-designed floor plan encompasses five bedrooms and four bathrooms, featuring two full bathrooms for added convenience. The dining area provides a perfect setting for family gatherings, while the kitchen-family room combo offers a seamless transition between cooking and leisure. Central forced air heating ensures comfort throughout the residence, making every corner of the 2,999 sqft total interior livable area a haven of warmth.


            <br>
            <br>
           Step outside and be greeted by the allure of a swimming pool surrounded by lush gardens, creating a private oasis for relaxation and entertainment. The residence is not only a testament to architectural excellence but also a part of a vibrant community in the Japan Town region. With its thoughtful design, contemporary features, and connection to the surrounding neighborhood, this home invites you to experience a harmonious blend of comfort and style in a sought-after locale.

            </p>
        </div>
    </div>

    <div class="bottomContainer">
        <div class="containerHeader">
            <h3 class="reviewsText">Reviews</h4>
            <?php 
                $sql = "SELECT * FROM Products WHERE productID = 30";
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
            $sql = "SELECT * FROM Ratings WHERE productID = 30";
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