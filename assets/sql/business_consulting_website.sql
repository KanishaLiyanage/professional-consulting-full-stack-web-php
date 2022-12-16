-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 12:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business_consulting_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `isDeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `email`, `password`, `image`, `isDeleted`) VALUES
(1, 'admin1', 'admin1@gmail.com', '123', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `consultant_id` int(11) NOT NULL,
  `customerMessage` longtext NOT NULL,
  `consultantMessage` longtext NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isDeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `consultants`
--

CREATE TABLE `consultants` (
  `consultant_id` int(11) NOT NULL,
  `consultantUsername` varchar(50) NOT NULL,
  `consultantFirstName` varchar(50) NOT NULL,
  `consultantLastName` varchar(50) NOT NULL,
  `consultantEmail` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `consultantMobileNo` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `availability` varchar(100) NOT NULL,
  `ratings` float NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isDeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultants`
--

INSERT INTO `consultants` (`consultant_id`, `consultantUsername`, `consultantFirstName`, `consultantLastName`, `consultantEmail`, `password`, `consultantMobileNo`, `image`, `title`, `description`, `availability`, `ratings`, `createdDate`, `isDeleted`) VALUES
(1, 'OmaleeCooray', 'Omalee', 'Cooray', 'omalee@gmail.com', '123', '', 'CONSULTANT-630b0c01658177.12833639.jpg', 'Brand Strategist', 'I believe that every professional should have a personal website, or what I like to call a firstnamelastname.com. In this digital space, I realized I needed to go the extra mile to be warm and approachable. I want to connect with people and I love to share advice. My personal website is my outlet for that and it’s also a place where people can quickly find out who I am.\r\n\r\nI wanted to go from being viewed as a designer for hire to being respected as an authority in the branding and design field. A personal website has helped me build that platform. While I am currently defining the additional goals that I want to accomplish with my personal brand, my website still attracts inquires for consulting, speaking and guest blog writing. A personal website sends the message that I’m available for these opportunities, and helps me connect with people on an international scale.', 'Available', 0, '2022-08-28 09:37:44', 0),
(2, 'Peter', 'Peter', 'Bruce', 'max86@example.org\r\n', '12345', '+947741291', 'CONSULTANT2.jpg\r\n', 'IT and Technology', 'I am a former senior software engineeer at XYZsolutions PVT LTD.\r\nI have lots of experiences with providing organizations with information technology support to operate more efficiently. \r\nmy duties include implementing hardware and software solutions, enhancing IT systems, and resolving technical issues.\r\n', 'available\r\n', 0, '2022-12-15 21:08:56', 0),
(3, 'Jonathon', 'Jonathon', 'Huynh', 'logan73@example.com\r\n', '12345', '+947741291', 'CONSULTANT3.jpg\r\n', 'Financial', 'As a well experienced financial consultant I am good advising clients on a range of financial services and decisions, \r\nincluding budgeting, saving for big purchases, retirement planning, investing, and trust and estate planning.', 'available\r\n', 0, '2022-12-15 21:11:06', 0),
(5, 'Meagan', 'Meagan', 'Salazar', 'mmeadows@example.com\r\n', '12345', '+947741291', 'CONSULTANT4.jpg\r\n', 'Legal Laws', 'A Legal Advisor, I can help you with legal guidance to businesses and clients. \r\nIn that case I am you with structuring solutions for disputes, providing support in legal issues and reviewing legal materials and contracts.\r\n\r\n', 'available\r\n', 0, '2022-12-15 21:11:14', 0),
(6, 'Nicholas', 'Nicholas', 'Glenn', 'snowedwin@example.net\r\n', '12345', '+947741291', 'CONSULTANT5.jpg\r\n', 'Marketing', 'As a marketing consultants I expect to define marketing strategies, identify the most appropriate message, and execute these strategies. \r\nAnd also my experices include monitoring outcomes, identifying new markets, and positioning services and products effectively.\r\n\r\n', 'available\r\n', 0, '2022-12-15 21:11:19', 0),
(7, 'Jamie', 'Jamie', 'Logan', 'diane97@example.org\r\n', '12345', '+947741291', 'CONSULTANT6.jpg\r\n', 'Marketing', 'I anticipate that as a marketing consultant, I will design marketing strategies, choose the most effective messaging, and put these plans into practice.\r\nMy experiments also involve keeping track of results, finding new markets, and strategically positioning goods and services.', 'available\r\n', 0, '2022-12-15 21:11:24', 0),
(8, 'Stacie', 'Stacie', 'Barnett', 'latasha47@example.com\r\n', '12345', '+947741291', 'CONSULTANT7.jpg\r\n', 'IT and Technology', 'I used to work at XYZsolutions PVT LTD as a senior software engineer.\r\nI have a lot of expertise assisting firms in using information technology to run more effectively.\r\nImplementing hardware and software solutions, expanding IT systems, and fixing technical problems are some of my duties.', 'available\r\n', 0, '2022-12-15 21:11:28', 0),
(9, 'Caroline', 'Caroline', 'Lindsey', 'hesscole@example.net\r\n', '12345', '+947741291', 'CONSULTANT8.jpg\r\n', 'Financial', 'I am skilled at guiding customers on a variety of financial decisions and services, such as budgeting, saving for major purchases, retirement planning, investing, and trust and estate planning, as I am a well-versed financial consultant.', 'available\r\n', 0, '2022-12-15 21:11:34', 0),
(10, 'Kara', 'Kara', 'Bruce', 'marcowen@example.org\r\n', '12345', '+947741291', 'CONSULTANT9.jpg\r\n', 'Legal Laws', 'As a legal advisor, I can assist you with providing legal advice to clients and enterprises.\r\nIf so, I can help you by designing resolutions to conflicts, offering advice on legal matters, and examining legal documents and contracts.', 'available\r\n', 0, '2022-12-15 21:11:39', 0),
(11, 'Jacqueline', 'Jacqueline', 'Harper', 'henry51@example.net\r\n', '12345', '+947741291', 'CONSULTANT10.jpg\r\n', 'Brand Strategist', 'I work with market research, positioning recommendations for products or services in different markets to enhance branding efforts as well develop marketing plans through trend analysis of current data on consumers\' needs.', 'available\r\n', 0, '2022-12-15 21:11:43', 0),
(13, 'BatMan', 'Bat', 'Man', 'batman@gmail.com', '123', '+941234567', 'CONSULTANT-639ba0d590bc36.01870732.jpg', 'Legal Laws', '......................', 'Available', 0, '2022-12-15 22:33:57', 0),
(14, 'adaad', 'jhadjad', 'fsfsf', 'k@gmIL.COM', '1223564', '+941234567', 'CONSULTANT-639beb05235546.41400290.jpg', 'it', 'SFFS', 'Available', 0, '2022-12-16 03:50:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customerFirstName` varchar(50) NOT NULL,
  `customerLastName` varchar(50) NOT NULL,
  `customerUsername` varchar(50) NOT NULL,
  `customerEmail` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `profession` varchar(50) NOT NULL,
  `customerMobileNo` varchar(12) NOT NULL,
  `package` varchar(20) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isDeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customerFirstName`, `customerLastName`, `customerUsername`, `customerEmail`, `password`, `image`, `profession`, `customerMobileNo`, `package`, `createdDate`, `isDeleted`) VALUES
(1, 'Shelby', 'Terrell', 'Shelby', 'elijah57@example.net', '12345', 'CLIENT-5.jpg\r\n', 'Chief Financial Officer', '+9477845512', 'Basic', '2022-12-15 21:30:01', 0),
(2, 'Phillip', 'Summers', 'Phillip', 'bethany14@example.com\r\n', '12345', 'CLIENT-1.jpg\r\n\r\n', 'Marketing Manager', '+94740326895', 'Enhanced', '2022-12-15 21:15:02', 0),
(3, 'Kristine', 'Travis', 'Kristine', 'bthompson@example.com\r\n', '12345', 'CLIENT-2.jpg\r\n', 'Payroll Manager', '+94740326895', 'Standard', '2022-12-15 21:15:12', 0),
(4, 'Yesenia', 'Martinez', 'Yesenia', 'kaitlinkaiser@example.com\r\n', '12345', 'CLIENT-3.jpg\r\n', 'Business Lawyer', '+94740326895', 'Basic', '2022-12-15 21:15:22', 0),
(5, 'Lori', 'Todd', 'Lori', 'buchananmanuel@example.net\r\n', '12345', 'CLIENT-4.jpg\r\n', 'Software Engineer', '+94740326895', 'Standard', '2022-12-15 21:15:32', 0),
(6, 'Erin', 'Day', 'Erin', 'tconner@example.org\r\n', '12345', 'CLIENT-5.jpg\r\n', 'Business Lawyer', '+94740326895', 'Basic', '2022-12-15 21:15:53', 0),
(7, 'Katherine', 'Buck', 'Katherine', 'conniecowan@example.com\r\n', '12345', 'CLIENT-6.jpg', 'Data Analyst', '+94740326895', 'Basic', '2022-12-15 21:16:58', 0),
(8, 'Ricardo', 'Hinton', 'Ricardo', 'wyattbishop@example.com\r\n', '12345', 'CLIENT-7.jpg', 'Business Lawyer', '+94740326895', 'Enhanced', '2022-12-15 21:17:05', 0),
(9, 'Dave', 'Farrell', 'Dave', 'nmccann@example.net\r\n', '12345', 'CLIENT-8.jpg', 'Financial Controller', '+94740326895', 'Standard', '2022-12-15 21:17:12', 0),
(10, 'Isaiah', 'Downs', 'Isaiah', 'virginiaterrell@example.org\r\n', '12345', 'CLIENT-9.jpg\r\n', 'Marketing Manager', '+94740326895', 'Basic', '2022-12-15 21:17:22', 0),
(11, 'Sheila', 'Ross', 'Sheila', 'huangcathy@example.com\r\n', '12345', 'CLIENT-2.jpg\r\n', 'HR Manager', '+94740326895', 'Standard', '2022-12-15 21:29:24', 0),
(12, 'Stacy', 'Newton', 'Stacy', 'rayleroy@example.org\r\n', '12345', 'CLIENT-3.jpg\r\n', 'Financial Controller', '+94740326895', 'Standard', '2022-12-15 21:29:35', 0),
(13, 'Mandy', 'Blake', 'Mandy', 'jefferynoble@example.org\r\n', '12345', 'CLIENT-4.jpg\r\n', 'Digital Marketing Coordinator', '+94740326895', 'Basic', '2022-12-15 21:29:44', 0),
(14, 'Bridget', 'Nash', 'Bridget', 'mercedes44@example.com\r\n', '12345', 'CLIENT-13.jpg\r\n', 'Financial Lawyer', '+94740326895', 'Standard', '2022-12-15 21:17:57', 0),
(15, 'Crystal', 'Farmer', 'Crystal', 'pmiranda@example.org', '12345', 'CLIENT-14.jpg\r\n', 'HR Manager', '+94740326895', 'Basic', '2022-12-15 21:18:03', 0),
(16, 'Thomas', 'Knight', 'Thomas', 'braunpriscilla@example.net\r\n', '12345', 'CLIENT-15.jpg\r\n', 'Payroll Manager', '+94740326895', 'Standard', '2022-12-15 21:25:46', 0),
(17, 'Maurice', 'Rangel', 'Maurice', 'sheenabanks@example.com\r\n', '12345', 'CLIENT-16.jpg\r\n', 'Digital Marketing Coordinator', '+94740326895', 'Enhanced', '2022-12-15 21:25:53', 0),
(18, 'Frank', 'Meadows', 'Frank', 'gbrewer@example.org', '12345', 'CLIENT-17.jpg\r\n', 'Business Lawyer', '+94740326895', 'Basic', '2022-12-15 21:26:02', 0),
(19, 'Alvin', 'Paul', 'Alvin', 'gilbertdonaldson@example.com\r\n', '12345', 'CLIENT-18.jpg\r\n', 'Business Lawyer', '+94740326895', 'Enhanced', '2022-12-15 21:26:13', 0),
(20, 'Jared', 'Mitchell', 'Jared', 'jcortez@example.com\r\n', '12345', 'CLIENT-19.jpg\r\n', 'Financial Controller', '+94740326895', 'Basic', '2022-12-15 21:26:24', 0),
(21, 'Jacqueline', 'Norton', 'Jacqueline', 'carias@example.net\r\n', '12345', 'CLIENT-20.jpg\r\n', 'HR Manager', '+94740326895', 'Basic', '2022-12-15 21:26:31', 0),
(22, 'Colleen', 'Hatfield', 'Colleen', '\r\nfknox@example.org', '12345', 'CLIENT-21.jpg\r\n', 'HR Manager', '+94740326895', 'Standard', '2022-12-15 21:26:38', 0),
(23, 'Randy', 'Barnes', 'Randy', 'huangbill@example.org\r\n', '12345', 'CLIENT-22.jpg\r\n', 'Marketing Manager', '+94740326895', 'Basic', '2022-12-15 21:26:44', 0),
(24, 'Janice', 'Rhodes', 'Janice', 'juarezdominique@example.net\r\n', '12345', 'CLIENT-22.jpg\r\n\r\n', 'Marketing Manager', '+94740326895', 'Basic', '2022-12-15 21:26:54', 0),
(25, 'Jacqueline', 'Norton', 'Jacqueline', 'carias@example.net', '12345', 'CLIENT-23.jpg\r\n', 'Financial Controller', '+94740326895', 'Basic', '2022-12-15 21:27:05', 0),
(26, 'Janice', 'Rhodes', 'Janice', 'juarezdominique@example.net\r\n', '12345', 'CLIENT-24.jpg\r\n', 'Payroll Manager', '+94740326895', 'Enhansed', '2022-12-15 21:27:15', 0),
(27, 'Alfred', 'Mcneil', 'Alfred', 'cassandramorris@example.com\r\n', '12345', 'CLIENT-25.jpg\r\n', 'Payroll Manager', '+94740326895', 'Basic', '2022-12-15 21:27:55', 0),
(28, 'Sean', 'Levine', 'Sean', 'sallymiller@example.net\r\n', '12345', 'CLIENT-6.jpg\r\n', 'Business Lawyer', '+94740326895', 'Enhanced', '2022-12-15 21:30:09', 0),
(29, 'Louis', 'Payne', 'Louis', 'bsullivan@example.net\r\n', '12345', 'CLIENT-7.jpg\r\n', 'Financial Controller', '+94740326895', 'Basic', '2022-12-15 21:30:18', 0),
(30, 'Brittney', 'Vega', 'Brittney', 'ayalajose@example.net\r\n', '12345', 'CLIENT-8.jpg\r\n', 'Payroll Manager', '+94740326895', 'Enhanced', '2022-12-15 21:30:27', 0),
(31, 'Judy', 'Buckley', 'Judy', 'irosales@example.net\r\n', '12345', 'CLIENT-9.jpg\r\n', 'HR Manager', '+94740326895', 'Basic', '2022-12-15 21:30:36', 0),
(32, 'Norman', 'Weber', 'Norman', 'mconrad@example.com\r\n', '12345', 'CLIENT-10.jpg\r\n', 'Marketing Manager', '+94740326895', 'Standard', '2022-12-15 21:30:46', 0),
(33, 'Isaiah', 'Camacho', 'Isaiah', 'jimblake@example.org\r\n', '12345', 'CLIENT-11.jpg\r\n', 'Financial Controller', '+94740326895', 'Enhansed', '2022-12-15 21:30:56', 0),
(34, 'Jacqueline', 'Gallagher', 'Jacqueline', 'nsampson@example.net\r\n', '12345', 'CLIENT-12.jpg\r\n', 'Business Lawyer', '+94740326895', 'Basic', '2022-12-15 21:31:14', 0),
(35, 'Bonnie', 'Andrews', 'Bonnie', 'caitlin24@example.net\r\n', '12345', 'CLIENT-13.jpg\r\n', 'Data Analyst', '+94740326895', 'Basic', '2022-12-15 21:31:27', 0),
(36, 'Brandon', 'Schmidt', 'Brandon', 'reynoldsdarryl@example.net\r\n', '12345', 'CLIENT-14.jpg\r\n', 'Payroll Manager', '+94740326895', 'Standard', '2022-12-15 21:31:42', 0),
(37, 'Melody', 'Cook', 'Melody', 'jeannovak@example.org\r\n', '12345', 'CLIENT-15.jpg\r\n', 'HR Manager', '+94740326895', 'Basic', '2022-12-15 21:31:50', 0),
(38, 'Leonard', 'Hurst', 'Leonard', 'clinton78@example.org\r\n', '12345', 'CLIENT-16.jpg\r\n', 'Business Lawyer', '+94740326895', 'Enhanced', '2022-12-15 21:31:59', 0),
(39, 'Gene', 'Rich', 'Gene', 'luisdeleon@example.org\r\n', '12345', 'CLIENT-17.jpg\r\n', 'Marketing Manager', '+94740326895', 'Standard', '2022-12-15 21:32:36', 0),
(40, 'Cynthia', 'Wiggins', 'Cynthia', 'rosariodave@example.org\r\n', '12345', 'CLIENT-18.jpg\r\n', 'Financial Controller', '+94740326895', 'Basic', '2022-12-15 21:32:44', 0),
(41, 'Tanya', 'Mckinney', 'Tanya', 'vickihouston@example.com\r\n', '12345', 'CLIENT-19.jpg\r\n', 'Payroll Manager', '+94740326895', 'Standard', '2022-12-15 21:32:53', 0),
(42, 'Matthew', 'Stone', 'Matthew', 'evelyn31@example.org\r\n', '12345', 'CLIENT-20.jpg\r\n', 'Financial Controller', '+94740326895', 'Enhanced', '2022-12-15 21:33:06', 0),
(43, 'Kirk', 'Walsh', 'Kirk', 'stephenfuller@example.org\r\n', '12345', 'CLIENT-21.jpg\r\n', 'Financial Controller', '+94740326895', 'Basic', '2022-12-15 21:33:13', 0),
(44, 'Willie', 'Vang', 'Willie', 'haleymathews@example.net\r\n', '12345', 'CLIENT-22.jpg\r\n', 'HR Manager', '+94740326895', 'Standard', '2022-12-15 21:33:22', 0),
(45, 'Miguel', 'Hill', 'Miguel', 'tyrone56@example.org\r\n', '12345', 'CLIENT-23.jpg\r\n', 'Marketing Manager', '+94740326895', 'Standard', '2022-12-15 21:33:34', 0),
(46, 'Darren', 'Andrews', 'Darren', 'lhernandez@example.com\r\n', '12345', 'CLIENT-24.jpg\r\n', 'Marketing Manager', '+94740326895', 'Standard', '2022-12-15 21:33:46', 0),
(47, 'Haley', 'Pugh', 'Haley', 'molly03@example.org', '12345', 'CLIENT-12345.jpg', 'HR Manager', '+94740326895', '', '2022-12-15 20:40:49', 0),
(48, 'Danielle', 'Estrada', 'Danielle', 'jvang@example.org\r\n', '12345', 'CLIENT-25.jpg\r\n', 'HR Manager', '+94740326895', 'Enhanced', '2022-12-15 21:34:01', 0),
(49, 'Becky', 'Brady', 'Becky', 'erikmueller@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Marketing Manager', '+94740326895', 'Enhanced', '2022-12-15 20:41:00', 0),
(50, 'Caitlyn', 'Frey', 'Caitlyn', 'rivasdominique@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Marketing Manager', '+94740326895', 'Basic', '2022-12-15 20:41:09', 0),
(51, 'Joshua', 'Sweeney', 'Joshua', 'daisymcgee@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Data Analyst', '+94740326895', 'Basic', '2022-12-15 20:41:18', 0),
(52, 'Heidi', 'Escobar', 'Heidi', 'staffordtravis@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Marketing Manager', '+94740326895', 'Standard', '2022-12-15 20:42:34', 0),
(53, 'Brian', 'Oconnell', 'Brian', 'saralong@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Payroll Manager', '+94740326895', 'Standard', '2022-12-15 20:42:41', 0),
(54, 'Beverly', 'Esparza', 'Beverly', 'iphelps@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Business Lawyer', '+94740326895', 'Enhanced', '2022-12-15 20:42:47', 0),
(55, 'Nathaniel', 'Rivas', 'Nathaniel', 'roberto29@example.com\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Financial Controller', '+94740326895', 'Enhanced', '2022-12-15 20:42:50', 0),
(56, 'Debra', 'Payne', 'Debra', 'yolanda07@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Data Analyst', '+94740326895', 'Basic', '2022-12-15 20:42:55', 0),
(57, 'Mackenzie', 'Rocha', 'Mackenzie', 'abbottyvette@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'HR Manager', '+94740326895', 'Basic', '2022-12-15 20:42:59', 0),
(58, 'Courtney', 'Watkins', 'Courtney', 'ochang@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Financial Controller', '+94740326895', 'Enhanced', '2022-12-15 20:43:02', 0),
(59, 'Fred', 'Olsen', 'Fred', 'amyanderson@example.com\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Business Lawyer', '+94740326895', 'Standard', '2022-12-15 20:43:05', 0),
(60, 'Ryan', 'Nelson', 'Ryan', 'qnorman@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Payroll Manager', '+94740326895', 'Standard', '2022-12-15 20:43:09', 0),
(61, 'Grace', 'Phelps', 'Grace', 'clarkeangela@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Marketing Manager', '+94740326895', 'Basic', '2022-12-15 20:43:15', 0),
(62, 'Shari', 'Daugherty', 'Shari', 'kalvarado@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'HR Manager', '+94740326895', 'Enhanced', '2022-12-15 20:43:22', 0),
(63, 'Kelli', 'Garner', 'Kelli', 'jodyvincent@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Business Lawyer', '+94740326895', 'Basic', '2022-12-15 20:43:26', 0),
(64, 'Jackie', 'Bennett', 'Jackie', 'hutchinsonkirk@example.com\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Chief Financial Officer', '+94740326895', 'Standard', '2022-12-15 20:43:30', 0),
(65, 'Larry', 'Harper', 'Larry', 'maria32@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Financial Lawyer', '+94740326895', 'Standard', '2022-12-15 20:43:33', 0),
(66, 'Mike', 'Ward', 'Mike', 'imccullough@example.com\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Chief Financial Officer', '+94740326895', 'Enhanced', '2022-12-15 20:43:37', 0),
(67, 'Brittney', 'Rubio', 'Brittney', 'corey92@example.com\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Digital Marketing Coordinator', '+94740326895', 'Standard', '2022-12-15 20:43:40', 0),
(68, 'Frank', 'Pineda', 'Frank', 'daltoncalvin@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Payroll Manager', '+94740326895', 'Enhansed', '2022-12-15 20:43:43', 0),
(69, 'Sandra', 'Wu', 'Sandra', 'ubanks@example.com\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Financial Lawyer', '+94740326895', 'Basic', '2022-12-15 20:43:49', 0),
(70, 'Ryan', 'Benton', 'Ryan', 'lopezdebbie@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Software Engineer', '+94740326895', 'Standard', '2022-12-15 20:43:53', 0),
(71, 'Tamara', 'Hull', 'Tamara', 'meagan39@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'HR Manager', '+94740326895', 'Enhanced', '2022-12-15 20:43:55', 0),
(72, 'Jean', 'Ritter', 'Jean', 'kristina76@example.com\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Marketing Manager', '+94740326895', 'Standard', '2022-12-15 20:52:38', 0),
(73, 'Veronica', 'Briggs', 'Veronica', 'weissbridget@example.com\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Business Lawyer', '+94740326895', 'Standard', '2022-12-15 20:44:02', 0),
(74, 'Kim', 'Andrews', 'Kim', 'wpetersen@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Data Analyst', '+94740326895', 'Enhanced', '2022-12-15 20:44:05', 0),
(75, 'Tina', 'Cunningham', 'Tina', 'wongmary@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Payroll Manager', '+94740326895', 'Standard', '2022-12-15 20:54:56', 0),
(76, 'Jonathon', 'Atkinson', 'Jonathon', 'gailfrench@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Marketing Manager', '+94740326895', 'Enhanced', '2022-12-15 20:55:30', 0),
(77, 'Jermaine', 'Reid', 'Jermaine', 'vpaul@example.com\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Payroll Manager', '+94740326895', 'Standard', '2022-12-15 20:56:11', 0),
(78, 'Regina', 'Stevens', 'Regina', 'xpoole@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Marketing Manager', '+94740326895', 'Standard', '2022-12-15 20:57:08', 0),
(79, 'Terrence', 'Huff', 'Terrence', 'cassandra80@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Financial Controller', '+94740326895', 'Enhanced', '2022-12-15 20:57:48', 0),
(80, 'Tyler', 'Foley', 'Tyler', 'johnathan72@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'HR Manager', '+94740326895', 'Standard', '2022-12-15 20:58:30', 0),
(81, 'Andrew', 'Waters', 'Andrew', 'nhall@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Business Lawyer', '+94740326895', 'Enhanced', '2022-12-15 20:59:03', 0),
(82, 'Reginald', 'Stephenson', 'Reginald', 'erikaball@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Financial Controller', '+94740326895', 'Basic', '2022-12-15 21:00:23', 0),
(83, 'Douglas', 'Reese', 'Douglas', 'nixonvanessa@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Business Lawyer', '+94740326895', 'Basic', '2022-12-15 20:44:43', 0),
(84, 'Helen', 'Williamson', 'Helen', 'melvin08@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Financial Controller', '+94740326895', 'Standard', '2022-12-15 21:01:00', 0),
(85, 'Mario', 'Vaughn', 'Mario', 'oblake@example.com\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Payroll Manager', '+94740326895', 'Standard', '2022-12-15 21:01:35', 0),
(86, 'Chelsea', 'Dickson', 'Chelsea', 'johnnyhendricks@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Marketing Manager', '+94740326895', 'Enhanced', '2022-12-15 21:02:09', 0),
(87, 'Dustin', 'Bailey', 'Dustin', 'pbarron@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Marketing Manager', '+94740326895', 'Standard', '2022-12-15 20:44:55', 0),
(88, 'Harry', 'Medina', 'Harry', 'olsenmalik@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Payroll Manager', '+94740326895', 'Basic', '2022-12-15 21:03:20', 0),
(89, 'Kathy', 'Haney', 'Kathy', 'teresa37@example.com\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Marketing Manager', '+94740326895', 'Enhansed', '2022-12-15 20:45:01', 0),
(90, 'Alison', 'Nixon', 'Alison', 'zmiles@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Business Lawyer', '+94740326895', 'Basic', '2022-12-15 20:45:04', 0),
(91, 'Jamie', 'Hardy', 'Jamie', 'sheenadouglas@example.com\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Payroll Manager', '+94740326895', 'Basic', '2022-12-15 20:45:06', 0),
(92, 'Melody', 'Cox', 'Melody', 'evan90@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'HR Manager', '+94740326895', 'Standard', '2022-12-15 20:45:10', 0),
(93, 'Xavier', 'Cole', 'Xavier', 'nicolas90@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Financial Controller', '+94740326895', 'Standard', '2022-12-15 20:45:14', 0),
(94, 'Dillon', 'Guzman', 'Dillon', 'angelanavarro@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Marketing Manager', '+94740326895', 'Enhansed', '2022-12-15 20:45:17', 0),
(95, 'Dennis', 'Barnes', 'Dennis', 'bmartin@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Financial Controller', '+94740326895', 'Basic', '2022-12-15 20:45:31', 0),
(96, 'Steve', 'Patterson', 'Steve', 'latasha46@example.net\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Marketing Manager', '+94740326895', 'Basic', '2022-12-15 20:45:37', 0),
(97, 'Wesley', 'Bray', 'Wesley', 'regina11@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Business Lawyer', '+94740326895', 'Standard', '2022-12-15 20:45:40', 0),
(98, 'Summer', 'Oconnell', 'Summer', 'alexiscantrell@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Financial Controller', '+94740326895', 'Basic', '2022-12-15 20:45:44', 0),
(99, 'Mariah', 'Bernard', 'Mariah', 'pcopeland@example.org\r\n', '12345', 'CLIENT-12345.jpg\r\n', 'Financial Controller', '+94740326895', 'Standard', '2022-12-15 20:45:54', 0),
(100, 'meth', 'rasa', 'meth', 'meth@gmail.com', '123', 'CUSTOMER_IMG-639be9f09ed0f1.52938598.jpg', 'IT', '+941234567', '', '2022-12-16 03:45:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `consultant_id` int(11) NOT NULL,
  `orderedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `shipmentDate` varchar(100) NOT NULL,
  `shipmentStatus` varchar(50) NOT NULL,
  `isDeleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `consultant_id`, `orderedDate`, `shipmentDate`, `shipmentStatus`, `isDeleted`) VALUES
(1, 75, 5, '2022-12-15 20:28:06', '', '', 0),
(2, 3, 2, '2022-12-15 20:28:13', '', '', 0),
(3, 1, 8, '2022-12-15 20:28:24', '', '', 0),
(4, 10, 1, '2022-12-15 19:29:31', '', '', 0),
(5, 7, 5, '2022-12-15 20:28:33', '', '', 0),
(6, 2, 7, '2022-12-15 20:28:48', '', '', 0),
(7, 3, 7, '2022-12-15 20:28:56', '', '', 0),
(8, 8, 3, '2022-12-15 20:29:23', '', '', 0),
(9, 9, 8, '2022-12-15 20:29:30', '', '', 0),
(10, 1, 8, '2022-12-15 20:29:01', '', '', 0),
(11, 5, 2, '2022-12-15 20:29:35', '', '', 0),
(12, 2, 1, '2022-12-15 19:38:04', '', '', 0),
(13, 10, 6, '2022-12-15 20:29:12', '', '', 0),
(14, 2, 3, '2022-12-15 20:29:49', '', '', 0),
(15, 7, 11, '2022-12-15 20:29:55', '', '', 0),
(16, 10, 8, '2022-12-15 20:30:10', '', '', 0),
(17, 1, 10, '2022-12-15 20:30:02', '', '', 0),
(18, 1, 9, '2022-12-15 20:30:15', '', '', 0),
(19, 7, 1, '2022-12-15 19:44:36', '', '', 0),
(20, 1, 6, '2022-12-15 20:30:27', '', '', 0),
(21, 1, 7, '2022-12-15 20:30:33', '', '', 0),
(22, 1, 8, '2022-12-15 20:30:37', '', '', 0),
(23, 1, 3, '2022-12-15 20:30:43', '', '', 0),
(24, 7, 6, '2022-12-15 20:31:08', '', '', 0),
(25, 8, 2, '2022-12-15 20:31:16', '', '', 0),
(26, 8, 2, '2022-12-15 20:31:26', '', '', 0),
(27, 1, 3, '2022-12-15 20:31:30', '', '', 0),
(28, 7, 1, '2022-12-15 19:50:49', '', '', 0),
(29, 7, 5, '2022-12-15 20:31:37', '', '', 0),
(30, 1, 2, '2022-12-15 20:31:41', '', '', 0),
(31, 2, 11, '2022-12-15 20:31:47', '', '', 0),
(32, 2, 10, '2022-12-15 20:31:52', '', '', 0),
(33, 2, 1, '2022-12-15 19:53:58', '', '', 0),
(34, 2, 3, '2022-12-15 20:32:03', '', '', 0),
(35, 1, 7, '2022-12-15 20:32:10', '', '', 0),
(36, 9, 3, '2022-12-15 20:32:15', '', '', 0),
(37, 10, 11, '2022-12-15 20:32:31', '', '', 0),
(38, 1, 2, '2022-12-15 20:32:36', '', '', 0),
(39, 1, 5, '2022-12-15 20:32:44', '', '', 0),
(40, 1, 8, '2022-12-15 20:32:49', '', '', 0),
(41, 2, 1, '2022-12-15 20:00:14', '', '', 0),
(42, 5, 3, '2022-12-15 20:32:57', '', '', 0),
(43, 7, 2, '2022-12-15 20:33:03', '', '', 0),
(44, 10, 9, '2022-12-15 20:33:09', '', '', 0),
(45, 7, 11, '2022-12-15 20:33:15', '', '', 0),
(46, 3, 1, '2022-12-15 20:05:12', '', '', 0),
(47, 7, 2, '2022-12-15 20:33:26', '', '', 0),
(48, 1, 5, '2022-12-15 20:33:30', '', '', 0),
(49, 5, 8, '2022-12-15 20:33:33', '', '', 0),
(50, 6, 8, '2022-12-15 20:33:41', '', '', 0),
(51, 11, 9, '2022-12-15 20:33:48', '', '', 0),
(52, 1, 3, '2022-12-15 20:33:55', '', '', 0),
(53, 7, 8, '2022-12-15 20:33:59', '', '', 0),
(54, 2, 5, '2022-12-15 20:34:02', '', '', 0),
(55, 9, 2, '2022-12-15 20:34:10', '', '', 0),
(56, 3, 7, '2022-12-15 20:34:16', '', '', 0),
(57, 8, 1, '2022-12-15 20:16:32', '', '', 0),
(58, 5, 3, '2022-12-15 20:34:22', '', '', 0),
(59, 11, 2, '2022-12-15 20:34:30', '', '', 0),
(60, 7, 1, '2022-12-15 20:18:51', '', '', 0),
(61, 10, 6, '2022-12-15 20:34:38', '', '', 0),
(62, 7, 8, '2022-12-15 20:34:45', '', '', 0),
(63, 9, 11, '2022-12-15 20:34:53', '', '', 0),
(64, 10, 2, '2022-12-15 20:34:57', '', '', 0),
(65, 7, 1, '2022-12-15 20:21:57', '', '', 0),
(66, 8, 6, '2022-12-15 20:35:01', '', '', 0),
(67, 7, 3, '2022-12-15 20:35:06', '', '', 0),
(68, 9, 7, '2022-12-15 20:35:12', '', '', 0),
(69, 5, 9, '2022-12-15 20:35:23', '', '', 0),
(70, 2, 5, '2022-12-15 20:35:29', '', '', 0),
(71, 7, 1, '2022-12-15 20:26:02', '', '', 0),
(72, 1, 7, '2022-12-15 20:36:09', '', '', 0),
(73, 8, 1, '2022-12-15 20:51:50', '', '', 0),
(74, 2, 7, '2022-12-15 21:04:00', '', '', 0),
(75, 5, 6, '2022-12-15 21:08:29', '', '', 0),
(76, 7, 3, '2022-12-15 21:09:44', '', '', 0),
(77, 7, 2, '2022-12-15 21:09:49', '', '', 0),
(78, 3, 1, '2022-12-15 20:55:36', '', '', 0),
(79, 2, 7, '2022-12-15 21:09:56', '', '', 0),
(80, 7, 5, '2022-12-15 21:10:13', '', '', 0),
(81, 5, 7, '2022-12-15 21:10:09', '', '', 0),
(82, 7, 11, '2022-12-15 21:10:17', '', '', 0),
(83, 7, 1, '2022-12-15 20:59:10', '', '', 0),
(84, 9, 2, '2022-12-15 21:10:21', '', '', 0),
(85, 2, 5, '2022-12-15 21:10:25', '', '', 0),
(86, 7, 7, '2022-12-15 21:10:28', '', '', 0),
(87, 9, 8, '2022-12-15 21:10:34', '', '', 0),
(88, 2, 1, '2022-12-15 21:02:15', '', '', 0),
(89, 1, 2, '2022-12-15 21:10:41', '', '', 0),
(90, 2, 6, '2022-12-15 21:10:53', '', '', 0),
(92, 1, 2, '2022-12-16 03:00:28', '', '', 0),
(95, 1, 1, '2022-12-16 03:47:38', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`),
  ADD UNIQUE KEY `consultant_id` (`consultant_id`);

--
-- Indexes for table `consultants`
--
ALTER TABLE `consultants`
  ADD PRIMARY KEY (`consultant_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `consultant_id` (`consultant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consultants`
--
ALTER TABLE `consultants`
  MODIFY `consultant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chats_ibfk_2` FOREIGN KEY (`consultant_id`) REFERENCES `consultants` (`consultant_id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`consultant_id`) REFERENCES `consultants` (`consultant_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
