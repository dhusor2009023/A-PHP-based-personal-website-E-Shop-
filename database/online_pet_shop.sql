-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2026 at 10:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online pet shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(2, 'Md Al Sayekh Dhusor', 'sayekh9121@gmail.com', '123', 'IMG_20221111_230551.jpg', '01741400457', 'Bangladesh', 'moderator', 'moderate our website'),
(3, 'Sayekh Dhusor', 'sayekhdhusor@gmail.com', '2009023', 'Screenshot 2024-01-21 144647.png', '01734081767', 'Bangladesh', 'CEO', 'Student of ECE at Kuet'),
(4, 'Rana', 'dhusor2009023@stud.kuet.ac.bd', '123456', 'untitled.png', '01741400457', 'Bangladesh', 'Owner', '...........');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'North America', 'The Bald Eagle, with its striking white head and tail set against a dark brown body, symbolizes strength and freedom across North America. Often found near large bodies of water, it\'s a skilled hunter of fish and a majestic sight in flight.\r\n\r\nThe American Robin, with its reddish-orange breast and gray back, is a harbinger of spring in North America. Its melodious song fills gardens and wooded areas as it forages for insects, earthworms, and berries.\r\n\r\nThe Northern Cardinal, with its vibrant red plumage (in males) or softer reddish-brown (in females), adds a splash of color to suburban and rural landscapes. Its enchanting song is a year-round feature, and it\'s often seen in thickets, woodlands, and gardens.'),
(2, 'South America', 'South America boasts a rich tapestry of birdlife, with a stunning diversity of species found across its varied landscapes. Here are descriptions of a few notable South American birds:\r\n\r\nThe Scarlet Macaw (Ara macao) is a breathtakingly colorful parrot with vibrant red, yellow, and blue plumage. Found in the rainforests of South America, it\'s known for its raucous calls and impressive size, making it a charismatic symbol of tropical biodiversity.\r\n\r\nThe Andean Condor (Vultur gryphus) is one of the largest flying birds in the world, with a wingspan that can exceed 3 meters (10 feet). Found in the Andes Mountains of South America, it\'s an awe-inspiring sight soaring effortlessly on thermal updrafts, scavenging for carrion.'),
(3, 'Europe', 'Europe is home to a fascinating array of bird species, adapted to a diverse range of habitats from coastal cliffs to alpine meadows. Here are descriptions of some notable European birds:\r\n\r\nThe European Robin (Erithacus rubecula) is a small bird with a delightful red-orange breast and a charming, melodic song. Often associated with Christmas due to its appearance on Christmas cards, it\'s a common sight in gardens, parks, and woodlands across Europe.\r\n\r\nThe Common Blackbird (Turdus merula) is a ubiquitous bird in European landscapes, known for its glossy black plumage and distinctive orange-yellow beak. Its beautiful song, particularly from males during the breeding season, is a familiar sound in urban and rural areas alike.\r\n\r\nThe Eurasian Magpie (Pica pica) is a highly intelligent and sociable corvid species found throughout Europe. With its striking black and white plumage and long tail, it\'s often seen in parks and gardens, where it scavenges for food and interacts with other members of its group.'),
(4, 'Africa', '\r\nAfrica is home to a stunning diversity of birdlife, with a myriad of species adapted to its varied habitats, from the dense rainforests of the Congo Basin to the vast savannas of the Serengeti. Here are descriptions of some notable African birds:\r\n\r\nThe African Grey Parrot (Psittacus erithacus) is renowned for its intelligence and ability to mimic human speech. Found in the dense forests of Central and West Africa, it\'s characterized by its grey plumage, red tail feathers, and distinctive red tail.\r\n\r\nThe Lilac-breasted Roller (Coracias caudatus) is a striking bird with vibrant lilac, blue, and green plumage. Commonly found in savannas and open woodlands across sub-Saharan Africa, it\'s known for its aerial acrobatics during courtship displays and while hunting insects.\r\n\r\nThe African Fish Eagle (Haliaeetus vocifer) is Africa\'s equivalent of the bald eagle, with its distinctive white head, chestnut body, and hooked yellow beak. Found near freshwater habitats throughout Africa, it\'s a formidable hunter, often seen swooping down to snatch fish from the water\'s surface.'),
(5, 'Asia', 'Asia is home to a remarkable variety of bird species, ranging from the majestic raptors of the Himalayas to the colorful songbirds of the Southeast Asian rainforests. Here are descriptions of some notable Asian birds:\r\n\r\nThe Common Kingfisher (Alcedo atthis) is a small but vibrant bird found across Asia, known for its brilliant blue and orange plumage. It inhabits a wide range of aquatic habitats, from rivers and streams to coastal areas, where it dives from perches to catch fish with remarkable precision.\r\n\r\nThe Himalayan Monal (Lophophorus impejanus) is a strikingly beautiful pheasant species found in the mountainous regions of the Himalayas. Males boast iridescent plumage with shimmering hues of green, blue, and copper, making them a prized sight for birdwatchers and photographers.\r\n\r\nThe Japanese Crane (Grus japonensis), also known as the red-crowned crane, is an iconic symbol of longevity and fidelity in Japanese culture. With its elegant white plumage and distinctive red crown, it\'s found in marshes and wetlands across East Asia, where it performs elaborate courtship dances during the breeding season.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(9, 'sayekh dhusor', 'sayekh1118@gmail.com', '123', 'Bangladesh', 'Dhaka', '01734081767', '49/, A R.K. Mission Road Dhaka-1203', 'Document from Sayekh Dhusor.jpg', '::1'),
(10, 'dhusor', 'dhusor_alsayekh@yahoo.com', '1118', 'Bangladesh', 'Dhaka', '01903946178', 'Wari, Dhaka', 'IMG_1715.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(100) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `product_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(28, 9, 2, 18000, 1384034998, 1, 'Male ', '2024-05-05 08:48:06', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(100) NOT NULL,
  `invoice_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(100) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_id`, `amount`, `payment_mode`, `ref_no`, `payment_date`) VALUES
(6, 1384034998, 18000, 'Bkash', 2009023, '2024-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `pending_order`
--

CREATE TABLE `pending_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending_order`
--

INSERT INTO `pending_order` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(23, 9, 203130057, '9', 1, 'Male ', 'Complete'),
(24, 9, 273151217, '6', 1, 'Male ', 'pending'),
(25, 9, 897410141, '5', 1, 'Female ', 'pending'),
(26, 9, 897410141, '4', 1, 'Male ', 'pending'),
(27, 10, 1896805530, '7', 1, 'Male ', 'Complete'),
(28, 9, 1384034998, '2', 1, 'Male ', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `p_cat_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(200) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keyword`) VALUES
(2, 1, 2, '2024-05-03 08:26:50', 'Pineapple conure', 'pineapple conure.jpg', 'pineapple conure.jpg', 'pineapple conure.jpg', 18000, '<p>The Pineapple Conure is a beautiful and popular color mutation of the Green-Cheeked Conure (Pyrrhura molinae), which is native to the forests of South America, particularly Brazil, Bolivia, and Argentina. This conure is known for its vibrant and unique coloration, as well as its affectionate and playful personality.</p>', 'conure'),
(3, 1, 2, '2024-04-26 19:36:13', 'Green-cheek-conure', 'green-cheek-conure.jpg', 'green-cheek-conure.jpg', 'green-cheek-conure.jpg', 20000, '<p>The Green-Cheeked Conure (Pyrrhura molinae) is a small to medium-sized parrot native to the forests of South America, particularly in regions of Brazil, Bolivia, and Argentina. They are known for their playful nature and affectionate disposition, making them popular as pets.</p>', 'conure'),
(4, 1, 2, '2024-04-26 19:37:36', 'Yellow-Cheek-Conure', 'yellow-cheek-conure.jpg', 'yellow-cheek-conure.jpg', 'yellow-cheek-conure.jpg', 16000, '<p><br>The Yellow-Cheeked Conure, also known as the Golden-Crowned Conure (Aratinga auricapillus), is a small to medium-sized parrot native to the forests and woodland regions of eastern Brazil. Known for its vibrant colors and lively personality, the Yellow-Cheeked Conure is a popular pet bird among parrot enthusiasts.</p>', 'conure'),
(5, 1, 1, '2024-04-26 19:39:28', 'Blue and yellow macaw', 'blue and yellow macaw.jpg', 'blue and yellow macaw.jpg', 'blue and yellow macaw.jpg', 26000, '<p>Macaws are large, colorful parrots belonging to the Psittacidae family, native to the forests and jungles of Central and South America. They are among the most recognizable parrots due to their vibrant plumage, impressive size, and intelligence. Macaws are popular pets, especially among experienced bird enthusiasts, due to their playful nature and striking appearance.</p>', 'macaw'),
(6, 1, 2, '2024-04-26 19:41:09', 'Sulphur-crested cockatoo', 'product8.jpg', 'product8.jpg', 'product8.jpg', 25000, '<p>The Sulphur-Crested Cockatoo (Cacatua galerita) is a large and distinctive cockatoo species native to Australia and parts of New Guinea. This bird is known for its striking appearance, characterized by a prominent yellow crest, white plumage, and its lively personality.</p>', 'Sulphur-crested cockatoo'),
(7, 1, 4, '2024-04-26 19:44:23', 'African fish eagle', 'product7.jpg', 'product7.jpg', 'product7.jpg', 300000, '<p>The African Fish Eagle (Haliaeetus vocifer) is a large bird of prey native to sub-Saharan Africa, renowned for its distinctive call and impressive fishing skills. Often referred to as the \"Voice of Africa\" due to its iconic cry, this eagle is a common sight around lakes, rivers, and other freshwater bodies where it hunts for fish.</p>', 'Eagle'),
(8, 1, 3, '2024-04-26 19:46:52', 'Rufous hummingbird', 'product3.jpg', 'product3.jpg', 'product3.jpg', 2000000, '<p><br>The Rufous Hummingbird (Selasphorus rufus) is a small but feisty hummingbird species known for its remarkable migratory journey and striking coloration. Native to western North America, the Rufous Hummingbird has a distinctive reddish-brown (rufous) coloration that makes it one of the most vibrant hummingbird species.</p>', 'Hummingbird'),
(9, 1, 2, '2024-05-02 22:03:39', 'Sun Conure', 'sun conure.jpg', 'sun conure.jpg', 'sun conure.jpg', 140000, '<p>Sun conures, also known as sun parakeets (Aratinga solstitialis), are brightly colored parrots native to northeastern South America. Known for their vivid plumage and playful personalities, sun conures are popular among bird enthusiasts and pet owners</p>', 'conure');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Birds', 'Discover the fascinating world of birds with our wide selection of species from around the globe. From colorful parrots to melodious songbirds, we offer a variety of feathered friends to bring joy and companionship into your home.'),
(2, 'Birds Food', ' Keep your feathered companions happy and healthy with our premium selection of bird food. From nutritious seed blends to tasty fruit treats, we provide high-quality options to meet the dietary needs of birds of all sizes and species.'),
(3, 'Cages', ' Create a safe and comfortable habitat for your birds with our range of bird cages. Whether you\'re looking for a spacious aviary or a cozy cage for a pet parakeet, we offer sturdy and stylish options designed to meet the needs of both birds and their owners.'),
(4, 'Accessories', 'Enhance your bird\'s environment with our collection of accessories designed for avian enrichment and enjoyment. From perches and toys to grooming tools and nesting materials, we offer everything you need to create a stimulating and comfortable environment for your feathered companions.'),
(5, 'Medicine', 'Ensure the well-being of your avian friends with our selection of bird medicine and healthcare products. From vitamins and supplements to treatments for common ailments, we provide reliable solutions to keep your birds happy and thriving.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL,
  `slider_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `slider_image`, `slider_url`) VALUES
(1, 'slider number 1', '4.jpg', 'http://localhost/online%20pet%20shop/details.php?pro_id=5'),
(2, 'slider number 2', '3.jpg', 'http://localhost/online%20pet%20shop/details.php?pro_id=8'),
(3, 'slider number 3', '2.jpg', ''),
(4, 'slider number 4', '5.jpg', 'http://localhost/online%20pet%20shop/details.php?pro_id=4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_order`
--
ALTER TABLE `pending_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pending_order`
--
ALTER TABLE `pending_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
