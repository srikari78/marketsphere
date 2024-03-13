<?php session_start();  include_once 'dbconnect.php';?>
<?php
    $result = $conn->query("SELECT * FROM Products where productId = 15");
    $prod = $result -> fetch_assoc();
    $hits = $prod["productHits"] + 1;
    $conn->query("UPDATE Products SET productHits = ".$hits." WHERE productId = 15");    
    //$conn->close();
?>
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
               $custvisited = $custvisited.",B15";
           }
           else
           {
               $custvisited = $custvisited."B15";
           }
           $conn->query("UPDATE UsersList SET visited = '".$custvisited."' WHERE userName = '".$currentUserName."'");    
           //$conn->close();
       }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php' ?>
    <title>Hawaii | GTS Tours</title>
</head>
<body class="hawaiiPage">
    <?php $page='Hawaii'; include 'navbar.php' ?>
    <div class="topContainer">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="15"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/1_hawaii.jpeg" alt="1_hawaii" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/2_hawaii.jpeg" alt="2_hawaii" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/3_hawaii.jpeg" alt="3_hawaii" class="d-block" style="width:100%">
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
            Hawaii, an archipelago of unparalleled beauty in the heart of the Pacific Ocean, is a paradisiacal destination that encapsulates the spirit of aloha. With its diverse landscapes, from volcanic craters to lush rainforests, Hawaii offers a captivating blend of natural wonders. The towering peaks of Mauna Kea and the fiery lava flows of Kilauea provide a dramatic backdrop to the sun-kissed beaches that line the coasts of Oahu, Maui, and Kauai. Each island possesses a distinct character, from the cosmopolitan vibes of Honolulu to the tranquil serenity of the Garden Isle, Kauai.
            <br>
            <br>
            Immerse yourself in the rich Hawaiian culture, where hula dances, traditional luaus, and the melodic sounds of the ukulele create an atmosphere of warmth and hospitality. The Polynesian influences are evident in the art, cuisine, and customs, making Hawaii a unique blend of ancient traditions and modern Pacific Island living. Snorkel in the crystalline waters of Molokini Crater, hike the Napali Coast's rugged cliffs, or simply relax on the pristine beaches, and you'll discover that Hawaii is not just a destination; it's a soul-stirring journey into the heart of paradise, where the aloha spirit leaves an indelible mark on those fortunate enough to experience its embrace.
            </p>
        </div>
    </div>

    <div class="bottomContainer">
        <div class="containerHeader">
            <h3 class="reviewsText">Reviews</h4>
            <?php 
                $sql = "SELECT * FROM Products WHERE productID = 15";
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
            $sql = "SELECT * FROM Ratings WHERE productID = 15";
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