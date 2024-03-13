<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php' ?>
    <title>News | Browse. Connect. Shop smart</title>
</head>
<body class="newsPage">
    <?php $page='News'; include 'navbar.php' ?>
    <div class="newsContainer">
        <p class="newsText1">Kickstart your holiday season with exclusive deals and offers!!</p>
        <p class="newsText2">Discover a world of options on our products page – your gateway to endless possibilities!</p>
        <div class="exploreContainer">
            <a 
                    class="exploreBtn"
                    id="scrollBtn1"
                    href="../includes/products.php"
            >Explore Now</a>
        </div>
    </div>
    <br><br><br><br>
    <style>
                .socialIcons {
                    display: flex;
                    margin-left: 620px; /* Add this line to push icons to the right */
                    margin-top: 20px;
        
                }
        
                .socialIcons a i {
                    color: #ffffff; /* Replace #ffffff with the desired color code */
                    font-size: 24px; /* Adjust the size as needed */
                    margin-left: 10px; /* Adjust the margin as needed */
                }
            </style>
    <footer class="footerContainer">
        <div class="container-fluid">
            <a class="footerImage" href="../index.php">
                <img src="../img/Spartan_Marketplace_Icon.svg" alt="Spartan_Marketplace_Logo" style="width:15em;"> 
            </a>
        </div>
        <div class="socialIcons ml-auto">
            <a href="https://www.facebook.com/profile.php?id=61554208380735" target="_blank">
                <i class="fab fa-facebook-square"></i>
            </a>
            <a href="https://www.instagram.com/marketsphere272" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://plus.google.com/YourGooglePage" target="_blank">
                <i class="fab fa-google-plus-square"></i>
            </a>
        </div>
        <div class="footerContentContainer">
                <div class="locationContainer">
                    <h4 class="locationText">Head Quarters</h4>
                    <p class="locations">San Jose</p>
                    <p class="locations">Milpitas</p>
                </div>
                <div class="footerContacts">
                    <h4 class="contactsText">Contact Us</h4>
                    <p class="emailId">marketsphere272@gmail.com</p>
                    <p class="phnNo">(892)742-9721</p>
                </div>
            </div>
        </footer>
</body>

