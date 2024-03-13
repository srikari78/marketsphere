<?php session_start(); include_once 'dbconnect.php';?>
<?php
    $result = $conn->query("SELECT * FROM Products where productId = 19");
    $prod = $result -> fetch_assoc();
    $hits = $prod["productHits"] + 1;
    $conn->query("UPDATE Products SET productHits = ".$hits." WHERE productId = 19");
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
               $custvisited = $custvisited.",B19";
           }
           else
           {
               $custvisited = $custvisited."B19";
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
    <title>London | GTS Tours</title>
</head>
<body class="londonPage">
    <?php $page='London'; include 'navbar.php' ?>
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
                <img src="../img/1_london.jpeg" alt="1_london" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/2_london.jpeg" alt="2_london" class="d-block" style="width:100%">
            </div>
            <div class="carousel-item">
                <img src="../img/3_london.jpeg" alt="3_london" class="d-block" style="width:100%">
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
            London, a timeless metropolis on the banks of the River Thames, seamlessly blends centuries-old history with a modern cosmopolitan vibe. The city's iconic skyline is adorned with historic landmarks like the Tower of London and the majestic Tower Bridge, coexisting harmoniously with contemporary marvels such as The Shard and the London Eye. Strolling through the charming streets of Westminster or the trendy neighborhoods of Shoreditch, visitors encounter a captivating mix of architectural styles that tell the story of London's evolution through the ages.
            <br>
            <br>
            Cultural richness saturates every corner of London, from the world-class museums like the British Museum and the Tate Modern to the West End theaters that stage some of the finest productions in the world. Buckingham Palace, the official residence of the British monarch, adds a regal touch to the city, while Hyde Park and the Royal Botanic Gardens at Kew offer serene green spaces for relaxation. London's diversity is reflected in its culinary scene, with international flavors echoing through vibrant street markets and Michelin-starred restaurants alike. London is a city of contrasts and continuity, where red double-decker buses navigate through narrow cobblestone streets, and historic pubs stand alongside sleek glass-fronted skyscrapers. From the historic halls of Parliament to the eclectic markets of Camden Town, London invites explorers to uncover its layers of history, culture, and contemporary dynamism—a city that remains at the forefront of global influence while cherishing its timeless traditions.
            </p>
        </div>
    </div>

    <div class="bottomContainer">
        <div class="containerHeader">
            <h3 class="reviewsText">Reviews</h4>
            <?php 
                $sql = "SELECT * FROM Products WHERE productID = 19";
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
            $sql = "SELECT * FROM Ratings WHERE productID = 19";
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