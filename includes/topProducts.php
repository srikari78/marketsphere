<?php include_once 'dbconnect.php';?>
<!-- The Modal -->
<div class="modal fade modal-xl" id="MostVisMarketModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Most Visited Products in the Whole Marketplace</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products ORDER BY productHits DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                 if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostVisLifeSaverHubModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Most Visited Products in the Life Saver Hub </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products WHERE productCompany = 'A' ORDER BY productHits DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostVisToursModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Most Visited Products in the Tours Company</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products WHERE productCompany = 'B' ORDER BY productHits DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostVisCityVistaRealEstateModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Most Visited Products in the City Vista Real Estate Company</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products WHERE productCompany = 'C' ORDER BY productHits DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostVisCarRentalsModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Most Visited Products in the Premium Car Rentals </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products WHERE productCompany = 'D' ORDER BY productHits DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>


<!-- The Modal -->
<div class="modal fade modal-xl" id="MostRevMarketModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Most Reviewed Products in the Whole Marketplace</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products ORDER BY productReviewCount DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostRevLifeSaverHubModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Most Reviewed Products in the LifeSaverHub Company</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products WHERE productCompany = 'A' ORDER BY productReviewCount DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostRevToursModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Most Reviewed Products in the Tours Company</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products WHERE productCompany = 'B' ORDER BY productReviewCount DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostRevCityVistaRealEstateModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Most Reviewed Products in the City Vista Real Estate Company</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products WHERE productCompany = 'C' ORDER BY productReviewCount DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostRevCarRentalsModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Most Reviewed Products in the Premium Car Rentals</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products WHERE productCompany = 'D' ORDER BY productReviewCount DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostRatMarketModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Highly Rated Products in the Whole Marketplace</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products ORDER BY productAvgRating DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostRatLifeSaverHubModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Highly Rated Products in the LifeSaverHub Company</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products WHERE productCompany = 'A' ORDER BY productAvgRating DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostRatToursModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Highly Rated Products in the Tours Company</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products WHERE productCompany = 'B' ORDER BY productAvgRating DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostRatCityVistaRealEstateModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Highly Rated Products in the City Vista Real Estate Company</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products WHERE productCompany = 'C' ORDER BY productAvgRating DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade modal-xl" id="MostRatCarRentalsModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Highly Rated Products in the Premium Car Rentals</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body container">
        <?php
            $sql = "SELECT * FROM Products WHERE productCompany = 'D' ORDER BY productAvgRating DESC";
            $results = $conn->query($sql);
            echo "<div class='row'>\n"; 
            for($i=0; $i<5; $i++)
            {
                $row = $results->fetch_assoc();
                $companyId = $row['productCompany'];
                $id = $row['productId'];
                echo "<div class='col-xl-4 card'>\n";
                echo "<img class='card-img-top' style='width:100%' src = ' ../".$row["productImgUrl"]."' alt = '".$row["productName"]."'>\n";
                echo "<div class='card-body'>";
                echo "<h4 class='card-title'>".$row["productName"]."</h4>\n";
                echo "<h4 class='shortDescText'>Short Description:</h4>\n";
                echo "<p class='card-text'>".$row["productShortDesc"]."</p>\n";
                echo "<h4 class='priceText'>Price:</h4>\n";
                echo "<p class='card-text'>$".$row["productPrice"]."</p>\n";
                echo "<h4 class='priceText'>Total Reviews</h4>\n";
                echo "<p class='card-text'>".$row["productReviewCount"]."</p>\n";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<div class='knowMoreBtn' style='justify-content:space-between'>\n";
                  }
                }
                else
                {
                  echo "<div class='knowMoreBtn' style='justify-content:center'>\n";
                }
                $newName = handleSpaces($row["productName"]);
                echo "<a href='$newName.php' class='btn btn-primary'>Know More</a>";
                if(isset($_SESSION["isSecure"]))
                {
                  if($_SESSION["isSecure"])
                  {
                    echo "<a class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#reviewRateModal".$companyId."-".$id."'>Rate/Review</a>";
                  }
                }
                echo "</div>";
                echo "</div>\n";
                echo "</div>\n\n";
            }
            echo "</div>\n";
        ?>
      </div>
    </div>
  </div>
</div>