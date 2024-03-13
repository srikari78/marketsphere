<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php' ?>
    <title>About | Browse. Connect. Shop smart </title>
</head>
<body class="aboutPage">
    <?php 
        $page = 'About'; include 'navbar.php' ?>
    <div class="main-about">

        <div class="featured-work">
            <h2 style="color:Forestgreen;text-align:center;margin-bottom:1em">About the Market Sphere<h2>
            <p class="work-info">Our Marketplace offers quality products across various industries to meet our customers' diverse needs. Currently, we feature offerings from the travel, healthcare, and real estate sectors. For travel, we provide tour packages from one of the leading companies GTS Tours. Destinations span popular locales including India, the United States, and beyond. With many attractive and affordable options, you're sure to find a package that tempts you to book your next adventure. In healthcare, our marketplace features innovative products from LifeSaverHub. These items provide cutting-edge solutions to improve wellbeing and save lives. For real estate, we partner with CityVista Real Estate to offer listings in desirable neighborhoods. Whether you're buying or selling, their agents have specialized local expertise to help you achieve your property goals. No matter what you're looking for, our diverse marketplace has a quality product to enhance your life or work. Discover your next essential find with us today!!</p>
        </div>

        <div class="row container mt-3 mb-5 justify-content-end">
            <div class=" col-3 card mx-3" style="width:250px;background: lightcyan;color:Forestgreen">
                <img class="card-img-top" src="../img/Careers_img.svg" alt="Career image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Careers</h4>
                    <p class="card-text">Launch a standout career of continuous growth opportunities with us. Our award-winning development programs and encouraging culture nurture talent so staff can evolve expertise that enriches our global community. Join our team to chart your own upward course in a genuinely supportive, stimulating environment.</p>
                </div>
            </div>
            <div class=" col-3 card mx-3" style="width:250px;background: lightcyan;color:Forestgreen">
                <img class="card-img-top" src="../img/Newsroom.svg" alt="Newsroom image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Newsroom</h4>
                    <p class="card-text">Our NewsRoom shares product launches, innovations, company news, customer success stories, and insights into the exceptional people that drive our brand forward. Check back regularly for the inside perspective on our diverse marketplace offerings improving lives and businesses around the world..</p>
                </div>
            </div>
            <div class=" col-3 card mx-3" style="width:250px;background: lightcyan;color:Forestgreen">
                <img class="card-img-top" src="../img/InvestorRelations.svg" alt="InvestorRelations image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Investor Relations</h4>
                    <p class="card-text">Access quarterly earnings reports, stock data, annual shareholder updates, and more for the full financial picture of Market Sphere's performance. Review leadership presentations on our record growth and explore news related to strategic decisions that continue advancing our brand.</p>
                </div>
            </div>
            <div class=" col-3 card mx-3" style="width:250px;background: lightcyan;color:Forestgreen">
                <img class="card-img-top" src="../img/TrustSafety.svg" alt="TrustSafety image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Trust & Safety</h4>
                    <p class="card-text">Market Sphere prioritizes building an ethical, secure customer experience through stringent safety protocols and quality standards across our diverse product range. Discover how we protect community well-being via rigorous vetting procedures, responsive issue resolution, and proactive improvement of guidance policies.</p>
                </div>
            </div>
        </div>
    </div>
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