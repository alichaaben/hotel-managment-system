-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2024 at 09:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bookings`
--

CREATE TABLE `Bookings` (
  `code` int(11) NOT NULL,
  `roomId` int(11) DEFAULT NULL,
  `checkIn` date DEFAULT NULL,
  `checkOut` date DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `totalPrice` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Bookings`
--

INSERT INTO `Bookings` (`code`, `roomId`, `checkIn`, `checkOut`, `firstName`, `lastName`, `email`, `phone`, `totalPrice`) VALUES
(3, 5, '2024-05-16', '2024-05-23', 'Ali', 'chaabane', 'alichaaben85@gmail.com', '22865991', 300.00),
(4, 6, '2024-05-17', '2024-05-18', 'test', 'test', 'test@gmail.com', '22865999', 200.00),
(5, 6, '2024-05-23', '2024-05-25', 'ddd', 'dd', 'alichaaben85@gmail.com', '22865991', 160.00),
(6, 7, '2024-05-09', '2024-05-14', 'ff', 'ff', 'ahmed.kaaroui1@gmail.com', '22865991', 800.00);

-- --------------------------------------------------------

--
-- Table structure for table `Clients`
--

CREATE TABLE `Clients` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `zipCode` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Clients`
--

INSERT INTO `Clients` (`id`, `firstname`, `lastname`, `date`, `email`, `phone`, `country`, `zipCode`, `city`, `password`) VALUES
(1, 'test', 'test', '2024-05-23', 'alichaaben85@gmail.com', '22865991', 'Afghanistan', '2022', 'Kalâat el-Andalous, Gouvernorat Ariana', '123456'),
(3, 'cc', 'cc', '2024-05-14', 'alichaabeen85@gmail.com', '22865991', 'Afghanistan', '2022', 'Kalâat el-Andalous, Gouvernorat Ariana', 'cccc'),
(4, 'vvv', 'vvv', '2024-05-23', 'ali-chaaben@gmail.com', '22865991', 'Åland Islands', '2022', 'Kalâat el-Andalous, Gouvernorat Ariana', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `Facilities`
--

CREATE TABLE `Facilities` (
  `facilitesId` int(11) NOT NULL,
  `facilityName` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Offres`
--

CREATE TABLE `Offres` (
  `offreId` int(11) NOT NULL,
  `roomId` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `offer_Starts` date DEFAULT NULL,
  `offer_Ends` date DEFAULT NULL,
  `show_on_Site` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Offres`
--

INSERT INTO `Offres` (`offreId`, `roomId`, `title`, `description`, `image`, `offer_Starts`, `offer_Ends`, `show_on_Site`) VALUES
(3, 7, 'Special 25% discount on all overwater rooms', 'Profitez d\'une remise spéciale de 25 % sur toutes nos chambres sur l\'eau ! Offrez-vous un séjour inoubliable avec des vues panoramiques, un accès direct à la mer et un confort luxueux. Ne manquez pas cette occasion exceptionnelle de vivre une expérience unique à un prix réduit. Réservez dès maintenant et laissez-vous séduire par l\'élégance et la tranquillité de nos chambres sur l\'eau.', './assets/imgUpload/66440616394060.05567312.jpg', '2024-05-15', '2024-07-15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `Payments`
--

CREATE TABLE `Payments` (
  `CardID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Zip` varchar(20) DEFAULT NULL,
  `Balance` decimal(10,2) DEFAULT NULL,
  `CardNumber` varchar(20) DEFAULT NULL,
  `CardName` varchar(255) DEFAULT NULL,
  `CardType` varchar(50) DEFAULT NULL,
  `Expiration` date DEFAULT NULL,
  `CVV` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Payments`
--

INSERT INTO `Payments` (`CardID`, `UserID`, `FirstName`, `LastName`, `Country`, `Email`, `City`, `Zip`, `Balance`, `CardNumber`, `CardName`, `CardType`, `Expiration`, `CVV`) VALUES
(1, 1, 'John', 'Doe', 'USA', 'john@example.com', 'New York', '10001', 5000.00, '1234567890123456', 'John Doe Card', 'Visa', '2024-12-31', '123'),
(2, 2, 'Alice', 'Smith', 'UK', 'alice@example.com', 'London', 'SW1A 1AA', 3000.00, '2345678901234567', 'Alice Smith Card', 'Mastercard', '2025-10-31', '456'),
(3, 3, 'Michael', 'Johnson', 'Canada', 'michael@example.com', 'Toronto', 'M5H 2N2', 7000.00, '3456789012345678', 'Michael Johnson Card', 'Visa', '2026-06-30', '789'),
(4, 4, 'Emily', 'Brown', 'Australia', 'emily@example.com', 'Sydney', '2000', 4000.00, '4567890123456789', 'Emily Brown Card', 'Mastercard', '2023-09-30', '321'),
(5, 5, 'David', 'Lee', 'Germany', 'david@example.com', 'Berlin', '10115', 6000.00, '5678901234567890', 'David Lee Card', 'Visa', '2027-03-31', '654'),
(6, 6, 'Emma', 'Garcia', 'Spain', 'emma@example.com', 'Madrid', '28001', 4500.00, '6789012345678901', 'Emma Garcia Card', 'Mastercard', '2024-08-31', '987'),
(7, 7, 'James', 'Martinez', 'France', 'james@example.com', 'Paris', '75001', 5500.00, '7890123456789012', 'James Martinez Card', 'Visa', '2025-05-31', '135'),
(8, 8, 'Olivia', 'Lopez', 'Italy', 'olivia@example.com', 'Rome', '00184', 6500.00, '8901234567890123', 'Olivia Lopez Card', 'Mastercard', '2023-11-30', '246'),
(9, 9, 'Noah', 'Hernandez', 'Japan', 'noah@example.com', 'Tokyo', '100-0005', 7500.00, '9012345678901234', 'Noah Hernandez Card', 'Visa', '2026-02-28', '579'),
(10, 10, 'Sophia', 'Gonzalez', 'Brazil', 'sophia@example.com', 'São Paulo', '01310-000', 8500.00, '0123456789012345', 'Sophia Gonzalez Card', 'Mastercard', '2024-07-31', '345');

-- --------------------------------------------------------

--
-- Table structure for table `Rooms`
--

CREATE TABLE `Rooms` (
  `roomId` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `nameRoom` varchar(255) DEFAULT NULL,
  `area` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `maxPersons` int(11) DEFAULT NULL,
  `maxChildren` int(11) DEFAULT NULL,
  `priceNight` decimal(10,2) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `numberRooms` int(11) DEFAULT NULL,
  `roomFacilities` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Rooms`
--

INSERT INTO `Rooms` (`roomId`, `images`, `nameRoom`, `area`, `description`, `maxPersons`, `maxChildren`, `priceNight`, `status`, `numberRooms`, `roomFacilities`) VALUES
(5, './assets/imgUpload/66484d70d9ef73.75955967.jpg,./assets/imgUpload/66484d70d9f4a8.64409700.jpg,./assets/imgUpload/66484d70d9f982.95590749.jpg,./assets/imgUpload/66484d70d9fc46.31824369.jpeg', 'Junior Suite Deluxe', 35.00, 'La Junior Suite Deluxe offre une expérience de luxe et de confort. Spacieuse et élégamment décorée, cette suite dispose d\'un coin salon séparé, idéal pour se détendre ou travailler. Les grandes fenêtres laissent entrer une abondance de lumière naturelle, mettant en valeur les finitions haut de gamme et le mobilier raffiné. La salle de bains est équipée de commodités modernes et de produits de toilette exclusifs. Profitez d\'équipements premium tels qu\'une literie de qualité supérieure, une machine à café, et une connexion Wi-Fi haut débit. Un choix parfait pour un séjour inoubliable alliant style et confort.', 4, 1, 220.00, 'Active', 2, NULL),
(6, './assets/imgUpload/66484d872a7215.97425261.jpg,./assets/imgUpload/66484d872a7555.16308107.jpg,./assets/imgUpload/66484d872a7715.98754708.jpg,./assets/imgUpload/66484d872a7889.08895860.jpg', 'Double Room Classic', 22.00, 'La chambre Double Room Classic combine confort et élégance. Dotée d\'un grand lit double, elle est aménagée avec un mobilier classique et des touches de décoration raffinées. L\'espace, bien agencé, offre une atmosphère chaleureuse et accueillante. Les équipements incluent une télévision à écran plat, une connexion Wi-Fi gratuite, et un bureau pour travailler ou planifier vos sorties. La salle de bains privative est pourvue de tous les articles de toilette nécessaires. Idéale pour les voyageurs en quête d\'un séjour agréable et reposant.', 1, 2, 160.00, 'Active', 1, NULL),
(7, './assets/imgUpload/66484d9e3f7444.71430515.jpg,./assets/imgUpload/66484d9e3f7988.66027402.jpg,./assets/imgUpload/66484d9e3f7b93.33659763.jpg,./assets/imgUpload/66484d9e3f7d78.68300939.jpg', 'NEW! Junior Suite Premium', 40.00, 'Découvrez-la toute nouvelle Junior Suite Premium, conçue pour offrir une expérience de séjour inégalée. Spacieuse et luxueusement aménagée, cette suite dispose d\'un coin salon sophistiqué, parfait pour se détendre ou recevoir des invités. La décoration moderne et les finitions élégantes créent une ambiance à la fois chic et confortable. Profitez d\'un lit king-size avec une literie de qualité supérieure pour des nuits de sommeil exceptionnelles. La salle de bains, équipée d\'installations haut de gamme et de produits de toilette exclusifs, promet des moments de détente absolue.', 6, 3, 800.00, 'Active', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(8) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `profile_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `birth_date`, `email`, `phone`, `country`, `zip_code`, `city`, `password`, `created_at`, `profile_picture`) VALUES
(1, 'raed', 'raed', '1999-12-11', 'essidraed2@gmail.com', '93716981', 'Åland Islands', '2022', 'kalaa', '$2y$10$RgtdbIkLoTVAl.6YW1Y9ju6rgu1SHXKvBuE2RgnuuKQugTX4/Hi1e', '2024-05-10 23:17:01', NULL),
(2, 'ali', 'chaaben', '1111-12-11', 'alichaaben@gmail.com', '29222222', 'Afghanistan', '2000', 'kalaa', '$2y$10$HelxryBoDvAsAUx6t8A4kef4UV3MFulTO2mrfFwPmZFsLWpBNO/6C', '2024-05-11 09:26:00', NULL),
(3, 'raed', 'essid', '1999-12-11', 'essidraed2@gmail', '93716981', 'Åland Islands', '20222', 'kalaa', '$2y$10$QCe4COME2bLz3CS9hpf4I.X3eGlvFw3PHwUXT6VBSeMFgXYcDbyKS', '2024-05-11 12:00:24', NULL),
(4, 'raed', 'raed', '0011-11-11', 'raed@raed', '93716981', 'Afghanistan', '22222', 'kalaa', '$2y$10$fPpP62GeYbz5hnr5.QVZMuuw7eCmLt73KcU/kHII9VGzZbWU0AJFK', '2024-05-11 12:12:01', NULL),
(5, 'raed', 'raed', '0011-11-11', 'raed@gmail.com', '93716981', 'Afghanistan', '2222', 'kalaa', '$2y$10$BCq8/bV5Q92yjzJcByDvqe1qTLekdmwfJPrXrTyWhlFGEhR90jFOy', '2024-05-11 12:15:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `idUser` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `creationDate` date DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `accountStatus` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `expirationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`idUser`, `image`, `userName`, `emailAddress`, `creationDate`, `role`, `accountStatus`, `password`, `expirationDate`) VALUES
(13, './assets/imgUpload/66484133658043.17243769.jpg', 'Ali', 'alichaaben85@gmail.com', '2024-05-17', 'Admin', 'ON', 'Ali123456', '2024-06-09'),
(16, './assets/imgUpload/66483ebc550e10.21708827.jpg', 'test', 'alichaaben85@gmail.com', '2024-05-22', 'Admin', 'ON', 'test123456', '2024-05-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bookings`
--
ALTER TABLE `Bookings`
  ADD PRIMARY KEY (`code`),
  ADD KEY `roomId` (`roomId`);

--
-- Indexes for table `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `Facilities`
--
ALTER TABLE `Facilities`
  ADD PRIMARY KEY (`facilitesId`);

--
-- Indexes for table `Offres`
--
ALTER TABLE `Offres`
  ADD PRIMARY KEY (`offreId`),
  ADD KEY `roomId` (`roomId`);

--
-- Indexes for table `Rooms`
--
ALTER TABLE `Rooms`
  ADD PRIMARY KEY (`roomId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bookings`
--
ALTER TABLE `Bookings`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Clients`
--
ALTER TABLE `Clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Facilities`
--
ALTER TABLE `Facilities`
  MODIFY `facilitesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Offres`
--
ALTER TABLE `Offres`
  MODIFY `offreId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Rooms`
--
ALTER TABLE `Rooms`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bookings`
--
ALTER TABLE `Bookings`
  ADD CONSTRAINT `Bookings_ibfk_1` FOREIGN KEY (`roomId`) REFERENCES `Rooms` (`roomId`);

--
-- Constraints for table `Offres`
--
ALTER TABLE `Offres`
  ADD CONSTRAINT `Offres_ibfk_1` FOREIGN KEY (`roomId`) REFERENCES `Rooms` (`roomId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
