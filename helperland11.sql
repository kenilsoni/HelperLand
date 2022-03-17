-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 04:43 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helperland11`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `Id` int(11) NOT NULL,
  `CityName` varchar(50) NOT NULL,
  `StateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`Id`, `CityName`, `StateId`) VALUES
(1, 'Ahmedabad', 1),
(2, 'NewDelhi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactUsId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Subject` varchar(500) DEFAULT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Message` longtext NOT NULL,
  `UploadFileName` varchar(100) DEFAULT NULL,
  `CreatedOn` datetime(3) DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `FileName` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favoriteandblocked`
--

CREATE TABLE `favoriteandblocked` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `TargetUserId` int(11) NOT NULL,
  `IsFavorite` tinyint(4) NOT NULL,
  `IsBlocked` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favoriteandblocked`
--

INSERT INTO `favoriteandblocked` (`Id`, `UserId`, `TargetUserId`, `IsFavorite`, `IsBlocked`) VALUES
(15, 2, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `RatingId` int(11) NOT NULL,
  `ServiceRequestId` int(11) NOT NULL,
  `RatingFrom` int(11) NOT NULL,
  `RatingTo` int(11) NOT NULL,
  `Ratings` decimal(2,1) NOT NULL,
  `Comments` varchar(2000) DEFAULT NULL,
  `RatingDate` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `OnTimeArrival` decimal(2,1) NOT NULL DEFAULT 0.0,
  `Friendly` decimal(2,1) NOT NULL DEFAULT 0.0,
  `QualityOfService` decimal(2,1) NOT NULL DEFAULT 0.0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`RatingId`, `ServiceRequestId`, `RatingFrom`, `RatingTo`, `Ratings`, `Comments`, `RatingDate`, `OnTimeArrival`, `Friendly`, `QualityOfService`) VALUES
(47, 98, 1, 2, '2.6', '', '2022-03-17 12:35:45.014', '2.8', '2.7', '2.3'),
(48, 97, 1, 2, '2.7', 'niceee\r\n', '2022-03-17 12:35:55.958', '2.0', '3.7', '2.5'),
(49, 109, 1, 5, '3.2', 'ok', '2022-03-17 12:40:12.476', '3.5', '3.4', '2.6'),
(50, 95, 1, 8, '2.8', '', '2022-03-17 12:43:42.721', '2.8', '3.2', '2.4'),
(51, 102, 1, 3, '2.8', 'nice service', '2022-03-17 12:48:21.131', '2.8', '2.7', '2.9'),
(52, 90, 1, 3, '4.0', 'nice ', '2022-03-17 12:48:37.252', '3.8', '4.0', '4.1');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE `servicerequest` (
  `ServiceRequestId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ServiceId` int(11) NOT NULL,
  `ServiceStartDate` datetime(3) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  `ServiceHourlyRate` decimal(8,2) DEFAULT NULL,
  `ServiceHours` double NOT NULL,
  `ExtraHours` double DEFAULT NULL,
  `SubTotal` decimal(8,2) NOT NULL,
  `Discount` decimal(8,2) DEFAULT NULL,
  `TotalCost` decimal(8,2) NOT NULL,
  `Comments` varchar(500) DEFAULT NULL,
  `PaymentTransactionRefNo` varchar(50) DEFAULT NULL,
  `PaymentDue` tinyint(4) NOT NULL DEFAULT 0,
  `ServiceProviderId` int(11) DEFAULT NULL,
  `SPAcceptedDate` datetime(3) DEFAULT NULL,
  `HasPets` tinyint(4) NOT NULL DEFAULT 0,
  `Status` int(11) DEFAULT NULL COMMENT '1:complete 2:pending 3:cancel 4:assign',
  `CreatedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ModifiedDate` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `ModifiedBy` int(11) DEFAULT NULL,
  `RefundedAmount` decimal(8,2) DEFAULT NULL,
  `Distance` decimal(18,2) NOT NULL DEFAULT 0.00,
  `HasIssue` tinyint(4) DEFAULT NULL,
  `PaymentDone` tinyint(4) DEFAULT NULL,
  `RecordVersion` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`ServiceRequestId`, `UserId`, `ServiceId`, `ServiceStartDate`, `ZipCode`, `ServiceHourlyRate`, `ServiceHours`, `ExtraHours`, `SubTotal`, `Discount`, `TotalCost`, `Comments`, `PaymentTransactionRefNo`, `PaymentDue`, `ServiceProviderId`, `SPAcceptedDate`, `HasPets`, `Status`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `RefundedAmount`, `Distance`, `HasIssue`, `PaymentDone`, `RecordVersion`) VALUES
(90, 1, 929432, '2022-03-17 12:18:00.000', '382424', '25.00', 3, 1.5, '4.50', '0.00', '112.50', 'yre', NULL, 0, 3, '2022-03-17 12:47:06.000', 1, 1, '2022-03-17 07:17:33', '2022-03-17 12:18:11.871', NULL, NULL, '0.00', NULL, NULL, NULL),
(91, 1, 656903, '2022-03-17 13:20:00.000', '382424', '25.00', 3, 1, '4.00', '0.00', '100.00', 'okkkk', NULL, 0, NULL, NULL, 0, 2, '2022-03-17 06:49:06', '2022-03-17 12:19:06.094', NULL, NULL, '0.00', NULL, NULL, NULL),
(92, 1, 162160, '2022-03-17 13:21:00.000', '382525', '25.00', 3, 1, '4.00', '0.00', '100.00', 'nice', NULL, 0, NULL, NULL, 1, 2, '2022-03-17 06:50:54', '2022-03-17 12:20:54.771', NULL, NULL, '0.00', NULL, NULL, NULL),
(93, 1, 103997, '2022-03-17 13:23:00.000', '382525', '25.00', 3, 1, '4.00', '0.00', '100.00', 'fsfdsf', NULL, 0, 8, '2022-03-17 12:42:42.000', 1, 1, '2022-03-17 07:13:10', '2022-03-17 12:21:21.615', NULL, NULL, '0.00', NULL, NULL, NULL),
(94, 1, 474980, '2022-02-17 12:23:00.000', '382424', '25.00', 3, 8, '11.00', '0.00', '275.00', 'fs', NULL, 0, NULL, NULL, 1, 2, '2022-03-17 14:09:45', '2022-03-17 12:22:39.775', NULL, NULL, '0.00', NULL, NULL, NULL),
(95, 1, 773176, '2022-03-17 13:23:00.000', '382525', '25.00', 3, 1, '4.00', '0.00', '100.00', 'fdsf', NULL, 0, 8, '2022-03-17 12:42:45.000', 1, 1, '2022-03-17 07:13:15', '2022-03-17 12:23:03.361', NULL, NULL, '0.00', NULL, NULL, NULL),
(96, 1, 883433, '2022-03-17 12:24:00.000', '382424', '25.00', 3, 1, '4.00', '0.00', '100.00', 'fsdfs', NULL, 0, NULL, NULL, 0, 2, '2022-03-17 14:10:02', '2022-03-17 12:23:23.002', NULL, NULL, '0.00', NULL, NULL, NULL),
(97, 1, 809089, '2022-03-17 14:25:00.000', '382424', '25.00', 3, 1, '4.00', '0.00', '100.00', 'fdfs', NULL, 0, 2, '2022-03-17 12:34:01.000', 1, 1, '2022-03-17 07:04:45', '2022-03-17 12:23:46.366', NULL, NULL, '0.00', NULL, NULL, NULL),
(98, 1, 663762, '2022-03-17 12:24:00.000', '382424', '25.00', 3, 1, '4.00', '0.00', '100.00', 'fsf', NULL, 0, 2, '2022-03-17 12:33:57.000', 1, 1, '2022-03-17 07:04:48', '2022-03-17 12:24:07.441', NULL, NULL, '0.00', NULL, NULL, NULL),
(99, 1, 837068, '2022-03-17 12:26:00.000', '382424', '25.00', 3, 1, '4.00', '0.00', '100.00', 'dfdf', NULL, 0, NULL, NULL, 0, 3, '2022-03-17 07:53:44', '2022-03-17 12:24:26.150', NULL, NULL, '0.00', NULL, NULL, NULL),
(100, 1, 216689, '2022-03-17 12:25:00.000', '382525', '25.00', 3, 1, '4.00', '0.00', '100.00', 'dffsd', NULL, 0, 8, '2022-03-17 12:44:52.000', 1, 1, '2022-03-17 07:15:11', '2022-03-17 12:24:44.232', NULL, NULL, '0.00', NULL, NULL, NULL),
(101, 1, 986282, '2022-03-17 12:27:00.000', '382525', '25.00', 3, 1, '4.00', '0.00', '100.00', 'dfdfsf', NULL, 0, 5, '2022-03-17 12:38:37.000', 1, 1, '2022-03-17 07:09:25', '2022-03-17 12:25:01.230', NULL, NULL, '0.00', NULL, NULL, NULL),
(102, 1, 286341, '2022-03-17 12:30:00.000', '382424', '25.00', 3, 1, '4.00', '0.00', '100.00', 'dfdf', NULL, 0, 3, '2022-03-17 12:47:13.000', 0, 1, '2022-03-17 07:17:39', '2022-03-17 12:25:17.882', NULL, NULL, '0.00', NULL, NULL, NULL),
(103, 1, 373790, '2022-03-17 12:31:00.000', '382424', '25.00', 3, 1, '4.00', '0.00', '100.00', 'qddc', NULL, 0, 3, '2022-03-17 12:47:09.000', 0, 1, '2022-03-17 07:17:41', '2022-03-17 12:25:43.302', NULL, NULL, '0.00', NULL, NULL, NULL),
(104, 1, 283867, '2022-03-17 15:28:00.000', '382424', '25.00', 3, 1, '4.00', '0.00', '100.00', 'dssa', NULL, 0, NULL, NULL, 0, 3, '2022-03-17 06:59:09', '2022-03-17 12:26:01.022', NULL, NULL, '0.00', NULL, NULL, NULL),
(105, 1, 671827, '2022-03-17 12:27:00.000', '382525', '25.00', 3, 1, '4.00', '0.00', '100.00', 'rewe', NULL, 0, 8, '2022-03-17 12:42:39.000', 0, 4, '2022-03-17 07:12:39', '2022-03-17 12:26:22.926', NULL, NULL, '0.00', NULL, NULL, NULL),
(106, 1, 220588, '2022-03-17 16:28:00.000', '382424', '25.00', 3, 1.5, '4.50', '0.00', '112.50', 'ffwd', NULL, 0, 2, '2022-03-17 12:33:54.000', 1, 1, '2022-03-17 07:09:28', '2022-03-17 12:26:41.943', NULL, NULL, '0.00', NULL, NULL, NULL),
(107, 1, 848779, '2022-03-17 13:28:00.000', '382525', '25.00', 3, 1, '4.00', '0.00', '100.00', 'eecdwe', NULL, 0, NULL, NULL, 1, 2, '2022-03-17 06:57:00', '2022-03-17 12:27:00.494', NULL, NULL, '0.00', NULL, NULL, NULL),
(108, 1, 333377, '2022-03-17 14:29:00.000', '382525', '25.00', 3, 1, '4.00', '0.00', '100.00', 'sdgdg', NULL, 0, 5, '2022-03-17 12:38:43.000', 0, 1, '2022-03-17 07:14:38', '2022-03-17 12:27:37.863', NULL, NULL, '0.00', NULL, NULL, NULL),
(109, 1, 453238, '2022-03-17 13:29:00.000', '382525', '25.00', 3, 1, '4.00', '0.00', '100.00', 'dvsvs', NULL, 0, 5, '2022-03-17 12:38:41.000', 0, 1, '2022-03-17 07:09:32', '2022-03-17 12:27:56.478', NULL, NULL, '0.00', NULL, NULL, NULL),
(110, 1, 339145, '2022-03-17 13:30:00.000', '382424', '25.00', 3, 1, '4.00', '0.00', '100.00', 'dvsvs', NULL, 0, NULL, NULL, 0, 3, '2022-03-17 06:59:12', '2022-03-17 12:28:15.477', NULL, NULL, '0.00', NULL, NULL, NULL),
(111, 10, 939951, '2022-03-17 19:51:00.000', '382424', '25.00', 3, 1, '4.00', '0.00', '100.00', 'siddharth', NULL, 0, 2, '2022-03-17 20:12:07.000', 1, 4, '2022-03-17 14:42:07', '2022-03-17 19:51:08.586', NULL, NULL, '0.00', NULL, NULL, NULL),
(113, 10, 711134, '2022-03-17 20:59:00.000', '382424', '25.00', 3, 0, '3.00', '0.00', '75.00', '', NULL, 0, NULL, NULL, 0, 2, '2022-03-17 15:27:22', '2022-03-17 20:57:22.694', NULL, NULL, '0.00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servicerequestaddress`
--

CREATE TABLE `servicerequestaddress` (
  `Id` int(11) NOT NULL,
  `ServiceRequestId` int(11) DEFAULT NULL,
  `AddressLine1` varchar(200) DEFAULT NULL,
  `AddressLine2` varchar(200) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `PostalCode` varchar(20) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequestaddress`
--

INSERT INTO `servicerequestaddress` (`Id`, `ServiceRequestId`, `AddressLine1`, `AddressLine2`, `City`, `State`, `PostalCode`, `Mobile`, `Email`) VALUES
(98, 90, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', '5689758965', 'kenil@gmail.com'),
(99, 91, 'sp road', '456', 'ahmedabad', NULL, '382424', '5689567895', 'kenil@gmail.com'),
(100, 92, 'maninagar', '568', 'ahmedabad', NULL, '382525', '5689567986', 'kenil@gmail.com'),
(101, 93, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', '5689562396', 'kenil@gmail.com'),
(102, 94, 'prashwanath', '1893', 'Ahmedabad', NULL, '382424', '07016656729', 'kenil@gmail.com'),
(103, 95, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', '5689562396', 'kenil@gmail.com'),
(104, 96, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', '5689758965', 'kenil@gmail.com'),
(105, 97, 'prashwanath', '1893', 'Ahmedabad', NULL, '382424', '07016656729', 'kenil@gmail.com'),
(106, 98, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', '5689758965', 'kenil@gmail.com'),
(107, 99, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', '5689758965', 'kenil@gmail.com'),
(108, 100, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', '5689562396', 'kenil@gmail.com'),
(109, 101, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', '5689562396', 'kenil@gmail.com'),
(110, 102, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', '5689758965', 'kenil@gmail.com'),
(111, 103, 'prashwanath', '1893', 'Ahmedabad', NULL, '382424', '07016656729', 'kenil@gmail.com'),
(112, 104, 'prashwanath', '1893', 'Ahmedabad', NULL, '382424', '07016656729', 'kenil@gmail.com'),
(113, 105, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', '5689562396', 'kenil@gmail.com'),
(114, 106, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', '5689758965', 'kenil@gmail.com'),
(115, 107, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', '5689562396', 'kenil@gmail.com'),
(116, 108, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', '5689562396', 'kenil@gmail.com'),
(117, 109, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', '5689562396', 'kenil@gmail.com'),
(118, 110, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', '5689758965', 'kenil@gmail.com'),
(119, 111, 'om apartment', '78', 'ahmedabad', NULL, '382424', '7016656965', 'siddharth@gmail.com'),
(121, 113, 'prashwanath', '788', 'Ahmedabad', NULL, '382424', '07016656729', 'siddharth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequestextra`
--

CREATE TABLE `servicerequestextra` (
  `ServiceRequestExtraId` int(11) NOT NULL,
  `ServiceRequestId` int(11) NOT NULL,
  `ServiceExtraId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequestextra`
--

INSERT INTO `servicerequestextra` (`ServiceRequestExtraId`, `ServiceRequestId`, `ServiceExtraId`) VALUES
(86, 90, 123),
(87, 91, 45),
(88, 92, 12),
(89, 93, 23),
(90, 94, 23),
(91, 95, 13),
(92, 96, 15),
(93, 97, 25),
(94, 98, 13),
(95, 99, 25),
(96, 100, 35),
(97, 101, 15),
(98, 102, 35),
(99, 103, 23),
(100, 104, 13),
(101, 105, 24),
(102, 106, 145),
(103, 107, 13),
(104, 108, 13),
(105, 109, 25),
(106, 110, 25),
(107, 111, 23),
(109, 113, 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `Id` int(11) NOT NULL,
  `StateName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`Id`, `StateName`) VALUES
(1, 'Gujarat'),
(2, 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Mobile` varchar(20) NOT NULL,
  `UserTypeId` int(11) NOT NULL COMMENT '1:customer\r\n2:sp\r\n3:Admin',
  `Gender` int(11) DEFAULT NULL COMMENT '1: Male\r\n2:female\r\n3:Rather not to say',
  `DateOfBirth` date DEFAULT NULL,
  `UserProfilePicture` varchar(200) DEFAULT NULL,
  `IsRegisteredUser` tinyint(4) NOT NULL DEFAULT 0,
  `PaymentGatewayUserRef` varchar(200) DEFAULT NULL,
  `ZipCode` varchar(20) DEFAULT NULL,
  `WorksWithPets` tinyint(4) NOT NULL DEFAULT 0,
  `LanguageId` int(11) DEFAULT NULL COMMENT '1:English2:Hindi3:gujarati4:tamil',
  `NationalityId` int(11) DEFAULT NULL COMMENT '1:American\r\n2:Indian\r\n3:Canadian\r\n4:German',
  `CreatedDate` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `ModifiedDate` datetime(3) NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `IsApproved` tinyint(4) NOT NULL DEFAULT 0,
  `IsActive` tinyint(4) NOT NULL DEFAULT 0,
  `IsDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `Status` int(11) DEFAULT NULL,
  `BankTokenId` varchar(100) DEFAULT NULL,
  `TaxNo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `Mobile`, `UserTypeId`, `Gender`, `DateOfBirth`, `UserProfilePicture`, `IsRegisteredUser`, `PaymentGatewayUserRef`, `ZipCode`, `WorksWithPets`, `LanguageId`, `NationalityId`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `IsApproved`, `IsActive`, `IsDeleted`, `Status`, `BankTokenId`, `TaxNo`) VALUES
(1, 'kenil', 'soni', 'kenil@gmail.com', 'Kenil@123', '7016656729', 1, 1, '2001-05-25', NULL, 0, NULL, NULL, 0, 3, NULL, '2022-03-08 12:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 1, 0, NULL, NULL, NULL),
(2, 'jay', 'soni', 'kenil123@gmail.com', 'Kps@123', '5689759862', 2, 1, '2003-10-29', 'avatar-iron', 0, NULL, '382424', 0, NULL, 2, '2022-02-01 10:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 1, 0, NULL, NULL, NULL),
(3, 'Taksh', 'patel', 'taksh@gmail.com', 'Kps@123', '7845658978', 2, 1, '1970-01-01', 'avatar-hat', 0, NULL, '382424', 0, NULL, 4, '2022-03-01 15:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 1, 0, NULL, NULL, NULL),
(5, 'Gaurav', 'patel', 'gaurav@gmail.com', 'Kps@123', '8975689856', 2, 1, '2003-10-29', 'avatar-car', 0, NULL, '382525', 0, NULL, 1, '2022-02-09 16:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 1, 0, NULL, NULL, NULL),
(8, 'Devarsh', 'Panchal', 'devarsh@gmail.com', 'Kps@123', '5689758965', 2, 1, '1970-01-01', 'avatar-ship', 0, NULL, '382525', 0, NULL, 3, '2022-03-02 17:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 1, 0, NULL, NULL, NULL),
(9, 'kenil', 'soni', 'admin@gmail.com', 'Admin@123', '', 3, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, '0000-00-00 00:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 0, 0, NULL, NULL, NULL),
(10, 'siddharth', 'Patel', 'siddharth@gmail.com', 'Kps@123', '4568985645', 1, NULL, '2022-03-17', NULL, 0, NULL, NULL, 0, 2, NULL, '2022-03-17 19:46:54.041', '0000-00-00 00:00:00.000', 0, 0, 1, 0, NULL, NULL, NULL),
(11, 'raj', 'Soni', 'kenilsoni2973@gmail.com', 'Kps@123', '7016656729', 2, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, '2022-03-17 21:06:12.536', '0000-00-00 00:00:00.000', 0, 0, 1, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `AddressId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `AddressLine1` varchar(200) NOT NULL,
  `AddressLine2` varchar(200) DEFAULT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) DEFAULT NULL,
  `PostalCode` varchar(20) NOT NULL,
  `IsDefault` tinyint(4) NOT NULL DEFAULT 0,
  `IsDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`AddressId`, `UserId`, `AddressLine1`, `AddressLine2`, `City`, `State`, `PostalCode`, `IsDefault`, `IsDeleted`, `Mobile`, `Email`) VALUES
(56, 1, 'prashwanath', '1893', 'Ahmedabad', NULL, '382424', 0, 0, '07016656729', NULL),
(57, 1, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', 0, 0, '5689758965', NULL),
(58, 1, 'maninagar', '568', 'ahmedabad', NULL, '382525', 0, 0, '5689567986', NULL),
(59, 1, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', 0, 0, '5689562396', NULL),
(60, 1, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', 0, 0, '5689758965', 'kenil@gmail.com'),
(61, 1, 'sp road', '456', 'ahmedabad', NULL, '382424', 0, 0, '5689567895', 'kenil@gmail.com'),
(62, 1, 'maninagar', '568', 'ahmedabad', NULL, '382525', 0, 0, '5689567986', 'kenil@gmail.com'),
(63, 1, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', 0, 0, '5689562396', 'kenil@gmail.com'),
(64, 1, 'prashwanath', '1893', 'Ahmedabad', NULL, '382424', 0, 0, '07016656729', 'kenil@gmail.com'),
(65, 1, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', 0, 0, '5689562396', 'kenil@gmail.com'),
(66, 1, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', 0, 0, '5689758965', 'kenil@gmail.com'),
(67, 1, 'prashwanath', '1893', 'Ahmedabad', NULL, '382424', 0, 0, '07016656729', 'kenil@gmail.com'),
(68, 1, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', 0, 0, '5689758965', 'kenil@gmail.com'),
(69, 1, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', 0, 0, '5689758965', 'kenil@gmail.com'),
(70, 1, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', 0, 0, '5689562396', 'kenil@gmail.com'),
(71, 1, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', 0, 0, '5689562396', 'kenil@gmail.com'),
(72, 1, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', 0, 0, '5689758965', 'kenil@gmail.com'),
(73, 1, 'prashwanath', '1893', 'Ahmedabad', NULL, '382424', 0, 0, '07016656729', 'kenil@gmail.com'),
(74, 1, 'prashwanath', '1893', 'Ahmedabad', NULL, '382424', 0, 0, '07016656729', 'kenil@gmail.com'),
(75, 1, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', 0, 0, '5689562396', 'kenil@gmail.com'),
(76, 1, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', 0, 0, '5689758965', 'kenil@gmail.com'),
(77, 1, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', 0, 0, '5689562396', 'kenil@gmail.com'),
(78, 1, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', 0, 0, '5689562396', 'kenil@gmail.com'),
(79, 1, 'vastrapur', '568', 'Gjksvsi', NULL, '382525', 0, 0, '5689562396', 'kenil@gmail.com'),
(80, 1, 'ved arcade', '1898', 'Ahmedabad', NULL, '382424', 0, 0, '5689758965', 'kenil@gmail.com'),
(81, 2, 'pebblebay', '586', 'ahmedabad', NULL, '382424', 0, 0, NULL, '5689759862'),
(82, 5, 'vastral road', '456', 'ahmedabad', NULL, '382525', 0, 0, NULL, '8975689856'),
(83, 8, 'cg road', '5656', 'ahmedabad', NULL, '382525', 0, 0, NULL, '5689758965'),
(84, 3, 'om road', '589', 'ahmedabad', NULL, '382424', 0, 0, NULL, '7845658978'),
(85, 10, 'om apartment', '78', 'ahmedabad', NULL, '382424', 0, 0, '7016656965', 'siddharth@gmail.com'),
(86, 10, 'prashwanath nagar jantanagar chandkheda', '189', '382525', NULL, 'Ahmedabad', 0, 0, '07016656729', 'siddharth@gmail.com'),
(87, 10, 'prashwanath', '788', 'Ahmedabad', NULL, '382424', 0, 0, '07016656729', 'siddharth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `zipcode`
--

CREATE TABLE `zipcode` (
  `Id` int(11) NOT NULL,
  `ZipcodeValue` varchar(50) NOT NULL,
  `CityId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zipcode`
--

INSERT INTO `zipcode` (`Id`, `ZipcodeValue`, `CityId`) VALUES
(1, '382424', 1),
(2, '382525', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `StateId` (`StateId`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactUsId`);

--
-- Indexes for table `favoriteandblocked`
--
ALTER TABLE `favoriteandblocked`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `TargetUserId` (`TargetUserId`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`RatingId`),
  ADD KEY `ServiceRequestId` (`ServiceRequestId`),
  ADD KEY `RatingFrom` (`RatingFrom`),
  ADD KEY `RatingTo` (`RatingTo`);

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD PRIMARY KEY (`ServiceRequestId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `ServiceProviderId` (`ServiceProviderId`);

--
-- Indexes for table `servicerequestaddress`
--
ALTER TABLE `servicerequestaddress`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ServiceRequestId` (`ServiceRequestId`);

--
-- Indexes for table `servicerequestextra`
--
ALTER TABLE `servicerequestextra`
  ADD PRIMARY KEY (`ServiceRequestExtraId`),
  ADD KEY `servicerequestextra_ibfk_1` (`ServiceRequestId`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`AddressId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `zipcode`
--
ALTER TABLE `zipcode`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CityId` (`CityId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactUsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `favoriteandblocked`
--
ALTER TABLE `favoriteandblocked`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `RatingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `ServiceRequestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `servicerequestaddress`
--
ALTER TABLE `servicerequestaddress`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `servicerequestextra`
--
ALTER TABLE `servicerequestextra`
  MODIFY `ServiceRequestExtraId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `AddressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `zipcode`
--
ALTER TABLE `zipcode`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`StateId`) REFERENCES `state` (`Id`);

--
-- Constraints for table `favoriteandblocked`
--
ALTER TABLE `favoriteandblocked`
  ADD CONSTRAINT `favoriteandblocked_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`),
  ADD CONSTRAINT `favoriteandblocked_ibfk_2` FOREIGN KEY (`TargetUserId`) REFERENCES `user` (`UserId`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`ServiceRequestId`) REFERENCES `servicerequest` (`ServiceRequestId`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`RatingFrom`) REFERENCES `user` (`UserId`),
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`RatingTo`) REFERENCES `user` (`UserId`);

--
-- Constraints for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD CONSTRAINT `servicerequest_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`) ON DELETE CASCADE,
  ADD CONSTRAINT `servicerequest_ibfk_2` FOREIGN KEY (`ServiceProviderId`) REFERENCES `user` (`UserId`) ON DELETE CASCADE;

--
-- Constraints for table `servicerequestaddress`
--
ALTER TABLE `servicerequestaddress`
  ADD CONSTRAINT `servicerequestaddress_ibfk_1` FOREIGN KEY (`ServiceRequestId`) REFERENCES `servicerequest` (`ServiceRequestId`) ON DELETE CASCADE;

--
-- Constraints for table `servicerequestextra`
--
ALTER TABLE `servicerequestextra`
  ADD CONSTRAINT `servicerequestextra_ibfk_1` FOREIGN KEY (`ServiceRequestId`) REFERENCES `servicerequest` (`ServiceRequestId`) ON DELETE CASCADE;

--
-- Constraints for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD CONSTRAINT `useraddress_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`) ON DELETE CASCADE;

--
-- Constraints for table `zipcode`
--
ALTER TABLE `zipcode`
  ADD CONSTRAINT `zipcode_ibfk_1` FOREIGN KEY (`CityId`) REFERENCES `city` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
