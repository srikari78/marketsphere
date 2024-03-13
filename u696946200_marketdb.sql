-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2024 at 01:17 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u696946200_marketdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `productCompany` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `productImgUrl` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `productPrice` decimal(7,2) NOT NULL,
  `productShortDesc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `productHits` int(11) NOT NULL,
  `productRating` int(11) NOT NULL,
  `productRatingCount` int(11) NOT NULL,
  `productAvgRating` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `productReviewCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`productId`, `productName`, `productCompany`, `productImgUrl`, `productPrice`, `productShortDesc`, `productHits`, `productRating`, `productRatingCount`, `productAvgRating`, `productReviewCount`) VALUES
(1, 'Pain Relievers', 'A', 'img/pain1.jpeg', 60.00, 'Over-the-counter pain relievers like acetaminophen or ibuprofen can help relieve pain and reduce fever. Follow the recommended dosages and guidelines.', 24, 4, 1, '4', 1),
(2, 'Disposable Gloves', 'A', 'img/gloves1.jpeg', 45.99, 'Disposable latex or nitrile gloves are essential for protecting both the person administering first aid and the injured person. They help maintain cleanliness and reduce the risk of infection.', 21, 5, 1, '5', 1),
(3, 'Adhesive Tapes', 'A', 'img/tape1.jpeg', 20.00, 'Medical tape is used to secure dressings and bandages in place. It is hypoallergenic and gentle on the skin. There are various types, including paper tape and cloth tape.', 2, 5, 1, '5', 1),
(4, 'Adhesive Bandages', 'A', 'img/bandage1.jpeg', 19.99, 'Adhesive bandages are small, sterile strips with an adhesive backing. They are used to cover and protect minor cuts, blisters, and abrasions. They come in various sizes, including standard and fingertip sizes.', 15, 6, 2, '3', 3),
(5, 'Antiseptic Wipes', 'A', 'img/wipes1.jpeg', 29.99, 'Antiseptic wipes or solutions contain disinfectants like alcohol or iodine to clean wounds and prevent infection. They are used before applying bandages or dressings.', 9, 4, 1, '4', 1),
(6, 'Scissors', 'A', 'img/scissors1.jpeg', 49.99, 'Small, sharp scissors with rounded tips are useful for cutting tape, clothing, or gauze. They should be included to safely remove clothing near wounds or to trim materials as needed.', 18, 5, 2, '2.5', 2),
(7, 'CPR Masks', 'A', 'img/mask1.jpeg', 20.00, 'CPR face shield or mask provides a barrier between the rescuer and the person receiving CPR, preventing the exchange of bodily fluids and offering protection during resuscitation.', 16, 5, 1, '5', 2),
(8, 'Tweezers', 'A', 'img/tweezers1.jpeg', 15.00, 'Fine-point tweezers are used to remove splinters, glass, or other foreign objects from the skin. They provide precision for safe removal.', 13, 10, 2, '5', 2),
(9, 'Emergency blanket', 'A', 'img/blanket1.jpeg', 35.00, 'An emergency blanket, is a lightweight, compact, and reflective blanket that helps retain body heat. It\'s crucial for staying warm in emergency situations or extreme weather.', 0, 9, 2, '4.5', 2),
(10, 'Eyewash or Saline Solution', 'A', 'img/eyewash1.jpeg', 49.99, 'Saline solution is used for rinsing the eyes in case of foreign object or chemical exposure. It helps flush out irritants and is essential for eye safety.', 10, 10, 2, '5', 2),
(11, 'Australia', 'B', 'img/2_australia.jpeg', 6999.99, 'Discover the wonders of Australia, a vast and diverse continent, where ancient landscapes, vibrant cities, and unique wildlife converge in a breathtaking tapestry of natural beauty and cultural richness.', 49, 8, 2, '4', 3),
(12, 'Caribbean', 'B', 'img/2_caribbean.jpeg', 2999.99, 'Sail into the captivating allure of the Caribbean, a tropical paradise where turquoise waters, white-sand beaches, and vibrant cultures create an idyllic escape for sun-seekers and adventure enthusiasts alike.', 20, 0, 0, '0', 0),
(13, 'Thailand', 'B', 'img/3_Thailand.jpeg', 1499.99, 'Thailand, a mesmerizing blend of vibrant urban life, cultural treasures, and tropical paradises, invites visitors to explore its dynamic cities, ancient temples, and pristine beaches.', 24, 12, 7, '1.7142857142857', 4),
(14, 'Dubai', 'B', 'img/2_dubai.jpeg', 5499.99, 'Dive into the opulence of Dubai, a cosmopolitan city and emirate renowned for its iconic skyline, luxury shopping, and cultural richness. Explore the intersection of tradition and modernity in this vibrant destination.', 11, 3, 3, '1', 1),
(15, 'Hawaii', 'B', 'img/2_hawaii.jpeg', 2249.99, 'Immerse yourself in the allure of Hawaii, where the rhythmic waves meet volcanic landscapes, creating a Pacific paradise that beckons with vibrant traditions, breathtaking scenery, and the spirit of aloha.', 19, 13, 3, '4.3333333333333', 3),
(16, 'India', 'B', 'img/1_India.jpeg', 2499.99, 'Embark on a journey through India, a land of diverse cultures, ancient traditions, and vibrant landscapes, where the echoes of history harmonize with the kaleidoscope of colors, flavors, and spiritual richness.', 29, 15, 8, '1.875', 7),
(17, 'Italy', 'B', 'img/2_italy.jpeg', 5999.99, 'Indulge in the timeless charm of Italy, a Mediterranean masterpiece where ancient history, sumptuous cuisine, and architectural wonders intertwine, inviting travelers to savor la dolce vita.', 26, 10, 2, '5', 2),
(18, 'Las Vegas', 'B', 'img/2_lasvegas.jpeg', 1999.99, 'Experience the exhilarating allure of Las Vegas, where dazzling lights, world-class entertainment, and high-stakes excitement come together in the entertainment capital of the world.', 10, 5, 1, '5', 1),
(19, 'London', 'B', 'img/2_london.jpeg', 4499.99, 'Embark on a journey through London, a timeless metropolis where iconic landmarks, rich history, and cosmopolitan vibrancy blend seamlessly, offering a captivating tapestry of cultural diversity and urban sophistication.', 14, 5, 4, '1.25', 1),
(20, 'Singapore', 'B', 'img/2_singapore.jpeg', 1999.99, 'Singapore, a futuristic metropolis blending innovation with cultural diversity, offers a unique experience with iconic architecture, lush greenery, and a dynamic culinary scene.', 15, 4, 1, '4', 1),
(21, 'Luxury Villa in Prime Location', 'C', 'img/3_property1.jpg', 65999.99, 'Explore this exquisite luxury villa located in a prime residential area. This spacious property features modern amenities, beautiful landscaping, and stunning views. It\'s the perfect place to call home.', 15, 9, 2, '4.5', 1),
(22, 'A Lavish Mansion in an Exclusive Locale', 'C', 'img/3_property2.jpg', 82999.99, 'Discover this magnificent luxury villa situated in an upscale residential district. With contemporary conveniences, picturesque gardens, and breathtaking vistas, it\'s an ideal haven for your next home.', 12, 0, 0, '0', 0),
(23, 'A Stylish Estate in a Coveted Location', 'C', 'img/3_property3.jpg', 94999.99, 'Experience an exceptional luxury villa in a prestigious residential enclave. This expansive estate boasts state-of-the-art facilities, meticulously landscaped grounds, and awe-inspiring panoramas. It\'s a dream residence waiting for you.', 13, 3, 1, '3', 1),
(24, 'A Sophisticated Property in Desirable Area', 'C', 'img/3_property4.jpg', 45999.99, 'Uncover an opulent luxury villa located in the heart of an exclusive residential community. Featuring cutting-edge amenities, meticulously manicured gardens, and panoramic vistas, it\'s a haven that defines the essence of home.', 11, 0, 0, '0', 1),
(25, 'A Grand Retreat in a Superb Locale', 'C', 'img/3_property5.jpg', 88999.99, 'Embark on a journey to explore this sumptuous luxury villa positioned in a sought-after residential neighborhood. With contemporary luxuries, lush greenery, and captivating scenery, it\'s an idyllic place to call your own.', 6, 3, 1, '3', 1),
(26, 'A Magnificent Adobe in the Heart of Elegance', 'C', 'img/3_property6.jpg', 98987.99, 'Witness the allure of this grand luxury villa located in an upscale residential haven. Encompassing modern features, meticulously designed gardens, and mesmerizing vistas, it\'s the epitome of a dream home.', 11, 5, 1, '5', 0),
(27, 'A Sumptuous Homestead in an Ideal Spot', 'C', 'img/3_property7.jpg', 55999.99, 'Dive into the charm of this regal luxury villa within a prestigious residential zone. This remarkable estate boasts state-of-the-art conveniences, meticulously tended gardens, and captivating views. It\'s a place you\'ll never want to leave.', 12, 4, 1, '4', 1),
(28, 'An Elegant Estate in Coveted Location', 'C', 'img/3_property8.jpg', 88999.99, 'Immerse yourself in the elegance of this sophisticated luxury villa situated in a prime residential neighborhood. Modern amenities, enchanting outdoor spaces, and breathtaking views make it the ultimate dwelling.', 19, 5, 1, '5', 1),
(29, 'A Regal Dwelling Amidst Luxury and Convenienc', 'C', 'img/3_property9.jpg', 78999.99, 'Enter the world of this serene luxury villa located in an exclusive residential locale. With contemporary comforts, meticulously crafted outdoor areas, and awe-inspiring scenery, it offers the perfect blend of elegance and tranquility.', 23, 5, 1, '5', 1),
(30, 'A Serene Residence in Highly Sought -  After ', 'C', 'img/3_property10.jpg', 48999.99, 'Venture into this splendid luxury villa nestled in an esteemed residential area. The property offers contemporary amenities, beautifully landscaped grounds, and mesmerizing views. It\'s a residence like no other.', 18, 0, 0, '0', 0),
(31, 'Innovation on Wheels: The Audi Experience', 'D', 'img/4_audi.jpeg', 49580.00, 'Audi is a German automobile manufacturer that is part of the Volkswagen Group. The company was founded in 1910, and its headquarters are located in Ingolstadt, Germany. Audi produces a wide range of luxury vehicles, including sedans, coupes, SUVs.', 18, 0, 0, '0', 1),
(32, 'Luxury Redefined: BMW\'s Elegance on the Road', 'D', 'img/4_bmw.jpeg', 42000.00, 'BMW, synonymous with ultimate driving pleasure, seamlessly blends luxury and performance, creating a symbol of elegance and dynamism on the road.', 11, 5, 1, '5', 1),
(33, 'Prancing Perfection: The Ferrari Legacy Unvei', 'D', 'img/4_ferrari.jpeg', 59954.00, 'Experience the pinnacle of automotive artistry with Ferrari – where precision engineering meets the thrill of unparalleled speed, defining a legacy of pure exhilaration.', 10, 4, 1, '4', 1),
(34, 'Trailblazing Icons: The Jeep Adventure Unleas', 'D', 'img/4_jeep.jpeg', 31995.00, 'Embark on a rugged journey with Jeep, where iconic design meets off-road prowess. From the legendary seven-slot grille to conquering the toughest terrains, Jeep vehicles embody a heritage of exploration and adventure.', 17, 0, 0, '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Ratings`
--

CREATE TABLE `Ratings` (
  `idRatings` int(11) NOT NULL,
  `userName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `productID` int(11) NOT NULL,
  `companyName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Ratings`
--

INSERT INTO `Ratings` (`idRatings`, `userName`, `productID`, `companyName`, `rating`, `review`) VALUES
(5, 'kolla1', 15, 'B', 5, 'Mesmerizing Place to relax in your summer holidays at an affordable price!!!'),
(7, 'kolla1', 16, 'B', 5, 'Amazing place to visit!!'),
(8, 'kolla1', 13, 'B', 5, 'Wow.. a place with pristine beaches.'),
(9, 'kolla1', 20, 'B', 4, 'Mesmerizing place to visit!'),
(10, 'kolla1', 14, 'B', 3, 'Best for skydiving experience..'),
(11, 'kolla1', 25, 'C', 3, 'Good luxury villa'),
(12, 'kolla1', 4, 'A', 3, 'Quality bandaids'),
(14, 'naveen', 13, 'B', 4, 'Nice place to visit'),
(15, 'naveen', 11, 'B', 3, 'Incredible place'),
(16, 'naveen', 1, 'A', 4, 'Great pain reliever'),
(17, 'naveen', 4, 'A', 3, 'Nice bandage'),
(18, 'naveen', 7, 'A', 5, 'Good CPR mask'),
(19, 'naveen', 21, 'C', 4, 'Nice villa'),
(20, 'naveen', 33, 'D', 4, 'Nice car'),
(21, 'naveen', 23, 'C', 3, 'Nice luxurious estate'),
(22, 'Sowjanya', 16, 'B', 5, 'A mesmerizing place to visit!!'),
(23, 'Sowjanya', 13, 'B', 4, 'Vibrant place to visit'),
(24, 'Sowjanya', 18, 'B', 5, 'Exhilarating experience!!'),
(25, 'Sowjanya', 32, 'D', 5, 'What a car!!'),
(26, 'Sowjanya', 5, 'A', 4, 'Good disinfectant wipes..'),
(27, 'Sowjanya', 27, 'C', 4, 'Nice villa'),
(28, 'Sowjanya', 17, 'B', 5, 'Exquisite place..'),
(29, 'Sowjanya', 15, 'B', 5, 'Mesmerizing place..'),
(30, 'Lakshmi', 2, 'A', 5, 'Good product'),
(31, 'Lakshmi', 19, 'B', 5, 'Nice place to travel.'),
(32, 'Lakshmi', 17, 'B', 5, 'Nice place to visit'),
(33, 'Lakshmi', 15, 'B', 4, 'Beautiful place to visit.'),
(34, 'Sowjanya', 11, 'B', 5, 'Great place to visit!!'),
(35, 'Prashansa ', 21, 'C', 5, ''),
(36, 'Evangeline', 28, 'C', 5, 'Excellent!'),
(37, 'Evangeline', 26, 'C', 5, ''),
(38, 'sasank', 7, 'A', 5, 'Great product quality at reasonable price'),
(39, 'sasank', 11, 'B', 5, 'Really enjoyed the place'),
(40, 'Sri', 10, 'A', 5, 'Quick relief. Good product\r\n\r\n\r\n\r\n\r\n\r\n'),
(41, 'Sri', 8, 'A', 5, 'Great product.'),
(42, 'Sri', 9, 'A', 5, 'Great'),
(45, 'minty', 4, 'A', 4, 'Good product'),
(47, 'robert', 9, 'A', 4, 'Blankets are wonderful'),
(50, 'Sindhu', 3, 'A', 5, 'Good product.'),
(51, 'sindhuja', 10, 'A', 5, 'good product'),
(52, 'Siri', 29, 'C', 5, 'Awesome Villa ');

-- --------------------------------------------------------

--
-- Table structure for table `UsersList`
--

CREATE TABLE `UsersList` (
  `idUsersList` int(11) NOT NULL,
  `firstName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `homeAddress` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `homePhone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellPhone` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwd` blob NOT NULL,
  `visited` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `UsersList`
--

INSERT INTO `UsersList` (`idUsersList`, `firstName`, `lastName`, `email`, `homeAddress`, `homePhone`, `cellPhone`, `userName`, `passwd`, `visited`) VALUES
(1, 'minty', 'bunty', 'minty@bunty.com', '123 San jose', '(996)209-3456', '(996)209-3456', 'sam', 0xea18ccff8b89abdc2476d5d92babda1b, 'B18,A4,C22,B13,A7,A7,C22,C3,C3,C3,A3,A3,A3,A3,A5,A3,A3,A3,A3,A3,A3,A3,A3,A3,A4,A1,A3,A1,A2,A2,A4,A5,A6,A7,A2,A8,A9,A10,A10,A10,C29,C22,C11,C11,C11,A6,A12,A13,C26,C26,A16,A16,A16,A16,A16,A7,A5,B18,B18,C27,B19,B20,B20,B19,C29,C29,C29,C28,C22,C23,C21,C21,C21'),
(2, 'Sam', 'Houston', 'sam@houston.com', '123 Houston', '(123)456-7890', '(123)456-7890', 'samhouston', 0xbecb04fe8ea1fe0ac392106b0e6aa1fb, 'A4,A6,A8,A6,A3,A8,A3,A3'),
(3, 'Sowjanya', 'Bheemineni', 'sowjanya.bheemineni@sjsu.edu', '500 Amalfi Loop', '(123)456-7891', '(123)456-7891', 'sowjab02', 0x5caf6111d4c4ddaf3b3c23434b4ea957, ''),
(4, 'Mounika', 'Kolla', 'kollamounika@gmail.com', 'India', '(678)123-8901', '(678)123-8901', 'kolla1', 0x84eaa87485ff923c2a1a24f13d708f3d, ''),
(5, 'dell', 'laptop', 'dell@laptop.com', '345 San Jose', '(669)209-3456', '(669)209-3456', 'Dell', 0x9bf1790e7e85c503238aa3bb28dd5cfa, 'A1,A2,B11,B12,C21,C22,C21,B16'),
(6, 'lenovo', 'laptop', 'lenovo@laptop.com', '456 San Jose', '(669)902-3456', '(669)902-3456', 'Lenovo', 0x0224b90e0a7aef3fcd9927c8e1676a6c, 'A1,B11,C30,D34'),
(7, 'Naveen', 'Ravipati', 'naveen@gmail.com', 'Milpitas', '(234)678-0976', '(234)678-0976', 'naveen', 0x44a6939d1697230b3813d99e3cdd8848, ''),
(8, 'Sowjanya', 'Ravipati', 'sowjanya@gmail.com', 'San jose', '(478)450-1234', '(478)450-1234', 'Sowjanya', 0x86a651046a61c72d540cddfb1065c900, 'B16,B16,B16,B11,B11'),
(9, 'lakshmi', 'v', 'lakshmi@gmail.com', '987 santa clara', '(996)845-3456', '(996)845-3456', 'Lakshmi', 0x1e5990a7331f9c7924a6fb7be69a2b3f, 'B19,B19,A2,B16,B17,B17,B15,B15,D32,D32,B15,B16,A6,A6,B16,D32'),
(10, 'Prashansa', 'Bonapalle', 'prashansaevangeline93@gmail.com', '124 S 11th Street', '(669)800-7746', '(000)000-0000', 'Prashansa ', 0x3fe33b6eb1ad85465d2f401c0e4d95d2, 'C22,C24'),
(11, 'Prashansa', 'Bonapalle', 'prashansaevangeline2627@gmail.com', '124 S 11th Street', '(669)800-7746', '(000)000-0000', 'Evangeline', 0x5127ff66011e5c9bf8ef6d3cfbe0c83a, ''),
(12, 'sri', 'v', 'sri@gmail.com', '123', '(996)209-3456', '(996)209-3456', 'lucky', 0xc1ab67316383a1834843ee2211e56fd1, 'A1,D33'),
(13, 'srikari', 'v', 'v.srikari39@gmail.com', 'Houston', '(996)209-3456', '(996)209-3456', 'Sri', 0x8f912f57503821e54d4f55aa503b913a, 'A10,A9,A9'),
(15, 'Sasank', 'V', 'sasank.vajhala@gmail.com', '100 San Jose', '(123)456-7890', '(123)456-7890', 'sasank', 0x865c1103f939036fcb2811e7f625bda0, 'A1,A4,A6,A7,A7,A7,A7,B11,B11,B11'),
(17, 'prashansa', 'evangeline', 'prashansa@gmail.com', 'santa clara', '(996)209-3456', '(996)209-3456', 'prashansa', 0xd8d2d3de802a6d59c3bf913816642e4b, ''),
(19, 'minty', 'minty', 'minty@gmail.com', '123 san jose', '(996)632-8574', '(996)632-8574', 'minty', 0xf8d202bafbe7265cba63f7347b4f5dad, 'A4,A4'),
(20, 'robert', 'james', 'robertjames@gmail.com', 'sanjose', '(996)632-8574', '(996)632-8574', 'robert', 0xb4223810f94b35622c8bcfd76f6d0684, 'D31,D31,A4,A9,A9'),
(24, 'Sindhuja', 'R', 'sindhuja@gmail.com', 'San Jose', '(998)778-6578', '(998)778-9876', 'Sindhu', 0x0044d479e417bd6ef5d940ce021dc88b, 'A3,A3,B20,A7,C22,D31'),
(25, 'sindhu', 'r', 'sindhu@gmail.com', 'Santa Clara', '(889)876-4638', '(678)888-9821', 'sindhuja', 0xbed72bab03ff16accbfad16efd673e18, 'A10,A10,B11,C23,D32'),
(26, 'SINDHU', 'RAVI', 'marketsphere272@gmail.com', '101', '(669)977-9356', '(669)977-9356', 'SINDHU', 0xb61d335151576e4654df591a285d435e, ''),
(28, 'wilson', 'D', 'veerubhotlasrikari@gmail.com', 'San Jose', '(996)209-3454', '(669)209-3256', 'Wilson', 0xdc5cd4d0b8ae7a1134a27490c6c013ab, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `Ratings`
--
ALTER TABLE `Ratings`
  ADD PRIMARY KEY (`idRatings`);

--
-- Indexes for table `UsersList`
--
ALTER TABLE `UsersList`
  ADD PRIMARY KEY (`idUsersList`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Ratings`
--
ALTER TABLE `Ratings`
  MODIFY `idRatings` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `UsersList`
--
ALTER TABLE `UsersList`
  MODIFY `idUsersList` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
