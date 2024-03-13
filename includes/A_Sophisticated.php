<?php session_start();  include_once 'dbconnect.php';?>
<?php
    $result = $conn->query("SELECT * FROM Products where productId = 24");
    $prod = $result -> fetch_assoc();
    $hits = $prod["productHits"] + 1;
    $conn->query("UPDATE Products SET productHits = ".$hits." WHERE productId = 24");
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
                    $custvisited = $custvisited.",C24";
                }
                else
                {
                    $custvisited = $custvisited."C24";
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
                <img src="../img/4.1.jpg" alt="Adhesive Tape1" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/4.2.jpg" alt="Adhesive Tape2" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/4.3.jpg" alt="Adhesive Tape3" class="d-block" style="width:100%">
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
           Indulge in the epitome of luxury living in this stunning 5-bedroom, 4-bathroom luxury villa nestled in an exclusive suburban area. The interior boasts a harmonious blend of elegance with marble and carpet flooring, complemented by radiant floor heating and central air cooling for optimal comfort. The gourmet kitchen is equipped with top-of-the-line stainless steel appliances, including a refrigerator, oven, and microwave, creating a culinary haven. A washer and dryer hookup add to the practicality of daily living, while the property is offered unfurnished, allowing residents to customize the space to their taste.

            <br>
            <br>
          Outside, revel in the beauty of the meticulously landscaped garden and patio, and unwind by the inviting pool. Parking is a breeze with a detached garage, a driveway, and street parking available. This luxury villa is situated in an exclusive suburban region, offering a retreat from the hustle and bustle while maintaining accessibility to the best amenities. Immerse yourself in a lifestyle of sophistication and tranquility, where every detail of this residence reflects the pinnacle of refined living in an exclusive suburban enclave.

            </p>
        </div>
    </div>

    <div class="bottomContainer">
        <div class="containerHeader">
            <h3 class="reviewsText">Reviews</h4>
            <?php 
                $sql = "SELECT * FROM Products WHERE productID = 24";
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
            $sql = "SELECT * FROM Ratings WHERE productID = 24";
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