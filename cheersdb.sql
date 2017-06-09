-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2017 at 11:20 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cheersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `last_login` datetime DEFAULT NULL,
  `xyz` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `username`, `password`, `salt`, `status`, `last_login`, `xyz`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', '5f29d9141de0edebf8b725dfd122cd4b49c73e11', '57c2b00821a1f', 1, '2017-06-09 21:45:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT '0',
  `price` varchar(50) NOT NULL,
  `discount` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `costumer_id` int(11) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `rank` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `slug` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` text,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `role`, `parent_id`, `name`, `rank`, `status`, `slug`, `image`, `description`, `created_date`, `modified_date`, `created_by`, `modified_by`) VALUES
(1, 'category', NULL, 'whisky', 1, 1, 'whisky', '', '', '2017-02-08 14:21:06', NULL, 'admin', NULL),
(2, 'subcategory', 1, 'Regular whisky', 2, 1, 'regular_whisky', '', '', '2017-02-08 14:22:59', NULL, 'admin', NULL),
(3, 'subcategory', 1, 'premium whisky', 3, 1, 'premium_whisky', '', '', '2017-02-08 14:24:26', NULL, 'admin', NULL),
(4, 'subcategory', 1, 'Bourbon Whiskey', 4, 1, 'bourbon_whiskey', '', '', '2017-02-08 14:24:54', NULL, 'admin', NULL),
(5, 'subcategory', 1, 'malt whiskey', 5, 1, 'malt_whiskey', '', '', '2017-02-08 14:25:12', NULL, 'admin', NULL),
(6, 'subcategory', 1, 'domestic whiskey', 6, 1, 'domestic_whiskey', '', '', '2017-02-08 14:25:41', NULL, 'admin', NULL),
(7, 'category', NULL, 'vodka', 7, 1, 'vodka', '', '', '2017-02-08 14:25:59', NULL, 'admin', NULL),
(8, 'subcategory', 7, 'regular vodka', 8, 1, 'regulat_vodka', '', '', '2017-02-08 14:26:37', NULL, 'admin', NULL),
(9, 'subcategory', 7, 'premium vodka', 9, 1, 'premium_vodka', '', '', '2017-02-08 14:27:09', NULL, 'admin', NULL),
(10, 'subcategory', 7, 'domestic vodka', 9, 1, 'domestic_vodka', '', '', '2017-02-08 14:27:27', NULL, 'admin', NULL),
(11, 'category', NULL, 'Gin', 10, 1, 'gin', '', '', '2017-02-08 14:27:48', NULL, 'admin', NULL),
(12, 'subcategory', 11, 'imported gin', 11, 1, 'imported_gin', '', '', '2017-02-08 14:28:09', NULL, 'admin', NULL),
(13, 'subcategory', 11, 'domestic gin', 12, 1, 'domestic_gin', '', '', '2017-02-08 14:28:26', NULL, 'admin', NULL),
(14, 'category', NULL, 'Rum', 13, 1, 'rum', '', '', '2017-02-08 14:28:53', NULL, 'admin', NULL),
(15, 'subcategory', 14, 'imported rum', 14, 1, 'imported_rum', '', '', '2017-02-08 14:29:28', NULL, 'admin', NULL),
(16, 'category', NULL, 'Beer', 15, 1, 'beer', '', '', '2017-02-08 14:29:51', NULL, 'admin', NULL),
(17, 'subcategory', 16, 'imported beer', 16, 1, 'imported_beer', '', '', '2017-02-08 14:30:24', NULL, 'admin', NULL),
(18, 'subcategory', 16, 'domestic beer', 17, 1, 'domestic_beer', '', '', '2017-02-08 14:30:54', NULL, 'admin', NULL),
(19, 'category', NULL, 'Tobacco', 19, 1, 'tobacco', '', '', '2017-02-08 14:31:29', NULL, 'admin', NULL),
(20, 'subcategory', 19, 'cigarette', 20, 1, 'cigarette', '', '', '2017-02-08 14:32:02', NULL, 'admin', NULL),
(21, 'subcategory', 19, 'cigar', 21, 1, 'cigar', '', '', '2017-02-08 14:32:48', NULL, 'admin', NULL),
(22, 'category', NULL, 'wine', 22, 1, 'wine', '', '', '2017-02-08 14:33:10', NULL, 'admin', NULL),
(23, 'subcategory', 22, 'red wine', 23, 1, 'red_wine', '', '', '2017-02-08 14:33:40', NULL, 'admin', NULL),
(24, 'subcategory', 22, 'white wine', 24, 1, 'white_wine', '', '', '2017-02-08 14:41:27', NULL, 'admin', NULL),
(25, 'subcategory', 22, 'champagne', 25, 1, 'champagne', '', '', '2017-02-08 14:43:02', NULL, 'admin', NULL),
(26, 'category', NULL, 'Beverages', 26, 1, 'beverages', '', '', '2017-02-08 14:46:31', NULL, 'admin', NULL),
(27, 'subcategory', 26, 'soft drinks', 27, 1, 'soft_drinks', '', '', '2017-02-08 14:50:15', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `verification_key` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `email`, `address`, `phone`, `username`, `password`, `salt`, `status`, `created_date`, `verification_key`) VALUES
(1, 'bimochan', 'bmochan@gmail.com', 'shanti', 'shantinagar', 'sbimochan', 'admin123', NULL, 1, '2017-04-21 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `costumer_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_amount` double NOT NULL,
  `status` varchar(50) NOT NULL,
  `trans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders_details`
--

CREATE TABLE `tbl_orders_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT '0',
  `price` varchar(50) NOT NULL,
  `discount` varchar(50) DEFAULT '0',
  `color` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `color` varchar(50) NOT NULL,
  `country` varchar(35) DEFAULT NULL,
  `price` varchar(50) NOT NULL,
  `discount` varchar(50) DEFAULT '0',
  `stock` int(11) DEFAULT '0',
  `quantity` int(11) DEFAULT '0',
  `image1` varchar(250) NOT NULL,
  `image2` varchar(250) DEFAULT NULL,
  `image3` varchar(250) DEFAULT NULL,
  `image4` varchar(250) DEFAULT NULL,
  `short_description` varchar(250) DEFAULT NULL,
  `description` text,
  `status` tinyint(1) DEFAULT '0',
  `slug` varchar(50) NOT NULL,
  `feature_key` tinyint(1) DEFAULT '0',
  `slider_key` tinyint(1) DEFAULT '0',
  `created_date` date NOT NULL,
  `modified_date` date DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `category_id`, `subcategory_id`, `name`, `color`, `country`, `price`, `discount`, `stock`, `quantity`, `image1`, `image2`, `image3`, `image4`, `short_description`, `description`, `status`, `slug`, `feature_key`, `slider_key`, `created_date`, `modified_date`, `created_by`, `modified_by`) VALUES
(1, 1, 2, 'Teachers 1L', 'brown', 'Scotland', '3480', '10', 20, 1, '589bf85a771b6_teachers.png', '', '', '', 'Truly a masterpiece.', '<div><p>It is said that William Teacher would not give his name to his blend until he had found perfection. Highland Cream is that whisky. It uses fully smoked peat single malt whisky. This gives it incredible depth and smoothness combined with a rich smokey undertone.</p><p>There is a challenging and exciting taste that at the same time is round and warming. This superb flavour is full of rich malts and maturity that slowly fades to a silky rounded texture.</p><p>Truly a masterpiece.</p></div>', 1, 'teachers', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(2, 1, 2, 'Johnnie Walker Red Label', 'red', 'Scotland', '4580', '', 23, 1, '589bf90620bf6_redlabel.png', '', '', '', 'A must for every bar.', '<p><strong>Country: </strong>Scotland</p><div><p>Renowned the world over, Johnnie Walker Red Label is the quintessential Scotch. Enjoy neat, over ice or with your favourite mixer. A must for every bar.</p></div>', 1, 'jwredlabel', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(3, 1, 3, 'Chivas Regal 12yrs', 'brown', 'Scotland', '30000', '20', 9, 1, '589bfa1b8aca9_chivas regal.png', '', '', '', 'Matured for 12 years the result is a rich and generous whisky with honey and hazelnut notes and a long creamy finish. This rich, smooth blend balances style with substance and tradition with a modern twist.', '<div><p>Chivas Regal is a blend of many different malt and grain Scotch whiskies, matured for at least 12 years. From the oldest operating distillery in the Scottish Highlands, Chivas Regal has been famous for its extraordinary selection of malt Whiskies.</p><p>Matured for 12 years the result is a rich and generous whisky with honey and hazelnut notes and a long creamy finish. This rich, smooth blend balances style with substance and tradition with a modern twist.</p></div>', 1, 'chival_regal12', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(4, 1, 4, 'Jack Daniel 750ml', 'brown', 'United States of America', '4325', '25', 30, 1, '589bfa940b000_jd.png', '', '', '', ' A true American icon that has become everyones favourite. ', '<p>Jack Daniel&#39;s is one of the very few Tennessee Whiskies that is charcoal mellowed. Jack Daniel&#39;s has a smooth aroma and flavour of vanilla, toasted oak and caramel translates well to the palate. A true American icon that has become everyone&#39;s favourite.</p>', 1, 'jack_daniel', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(5, 1, 5, 'Glenfiddich 12yrs 1L', 'white', 'Scotland', '7230', '30', 100, 1, '589bfe901b6b9_Glenfiddich.png', '', '', '', 'After 12 years, this signature single malt by Glenfiddich - the pioneer of the prestigious single malt category', '<p>After 12 years, this signature single malt by Glenfiddich - the pioneer of the prestigious single malt category - offers a distinctive fresh and fruity nose with a hint of pear followed by a palate of butterscotch, cream, malt and a subtle oak thanks to its long maturation in Oloroso sherry and bourbon oak casks.</p>', 1, 'Glenfiddich ', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(6, 1, 6, 'Antiquity Blue 750ML', 'blue', 'Nepal', '1600', '10', 25, 1, '589bffc30822f_antiquity.png', '', '', '', 'Antiquity Blue is the true blue of whiskies. Made of the finest Indian malts and rare Scotch carefully blended with premium grain spirit', '<div><p>Antiquity Blue is the true blue of whiskies. Made of the finest Indian malts and rare Scotch carefully blended with premium grain spirit, it is painstakingly distilled in copper pot stills, matured and mellowed in imported white oak casks and fused with premium Scotch.</p><p>The pronounced malt and rich wood aroma, with a whiff of peat and heather supplements the fantasy while its subtle nuances come from the choicest components of the blend, giving it a full smooth flavour and a bouquet that proclaims its royal pedigree.</p></div>', 1, 'antiiquity', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(7, 1, 6, 'Royal Stag 750ML', 'brown', 'Nepal', '1100', '10', 30, 1, '589c0009d4883_royalstag.png', '', '', '', 'This is one of the very few blended Nepali whiskeys in this category that can be taken on the rocks.', '<div><p>Royal Stag is named after one of the species of deer famous for its antlers soaring over all other species of deer. This whiskey is a blend of the best scotch malts from Scotland and Nepali grain spirits.</p><p>Royal Stag Deluxe whiskey is a full-bodied whiskey, famous for its exceptional smoothness, taste and malty-flavour.</p><p>This is one of the very few blended Nepali whiskeys in this category that can be taken on the rocks.</p></div>', 1, 'royalstag', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(8, 7, 8, ' Absolut Blue 750ML', 'white', 'Sweden', '3470', '', 23, 1, '589c00661fd32_absolute.png', '', '', '', '\r\n\r\nAbsolut Vodka is a Swedish vodka made exclusively from natural ingredients, and unlike some other vodkas\r\n', '<div><div><p>Absolut Vodka is a Swedish vodka made exclusively from natural ingredients, and unlike some other vodkas, it doesn&rsquo;t contain any added sugar. Rich, full-bodied and complex, yet smooth and mellow.</p></div></div><div>&nbsp;</div><div style="margin-top: 20px;">&nbsp;</div>', 1, 'absolut', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(9, 7, 8, 'Finlandia Cranberry 750ML', 'white', 'finaland', '2810', '10', 23, 1, '589c00a57d36e_870265415225304954312471143380724406729925657.png', '', '', '', 'Combined with pure glacial spring water and six-row barley ripened under the Midnight Sun, the bold note of cranberry creates a taste as authentic and natural as Finland itself.', '<div><p>Nothing stands between the world&rsquo;s finest vodka and the crisp, natural taste of cranberry. You see, the cranberry is one of only a handful of berries that grow as far north as the Arctic, so they&rsquo;re part of the Finnish heritage.</p><p>Combined with pure glacial spring water and six-row barley ripened under the Midnight Sun, the bold note of cranberry creates a taste as authentic and natural as Finland itself.</p></div>', 1, 'finlandia', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(10, 7, 9, 'Belvedere Intense 700ML', 'white', 'poland', '6375', '10', 40, 1, '589c010d0e52b_belvedere.png', '', '', '', 'Pure and provides a powerful, yet elegant drinking experience. This is the ideal vodka to be served neat or over ice to fully appreciate the pure nature of this remarkable spirit.', '<div><p>Belvedere Intense is a bolder version of Belvedere Vodka which elevates and intensifies the special characteristics of Dankowskie rye. Diluted with less water to 100 proof (50%ABV), the vodka is double filtered through charcoal to yield a refreshing texture and complexity, highlighting a fine balance between elegance and strength &mdash; an accomplishment unmatched by other higher strength vodkas.</p><p>Pure and provides a powerful, yet elegant drinking experience. This is the ideal vodka to be served neat or over ice to fully appreciate the pure nature of this remarkable spirit.</p></div>', 1, 'belvedere', 1, 0, '2017-02-09', NULL, 'admin', NULL),
(11, 7, 10, 'Ruslan Vodka 750ml', 'white', 'Nepal', '1150', '10', 200, 1, '589c015a6ea70_ruslan.png', '', '', '', '\r\n\r\nRuslan Vodka at 70 proof is clear in colour, clean and crisp. Matching up the connoisseurs of rich taste', '<div><div><p>Ruslan Vodka at 70 proof is clear in colour, clean and crisp. Matching up the connoisseurs of rich taste, Ruslan Vodka has few equals when it comes to enlivening moments</p></div></div>', 1, 'ruslan', 1, 0, '2017-02-09', NULL, 'admin', NULL),
(12, 11, 12, 'Beefeater 1L', 'white', 'England', '4700', '', 23, 1, '589c019cd1c3f_4700.png', '', '', '', 'Beefeater London Dry is one of the world s best selling gins ', ' < p > Beefeater London Dry IS ONE of the world &#39;s best selling gins, distilled in a traditional London Dry style that&#39;s beloved by bartenders and cocktail lovers in over 50 countries.</p>', 1, 'beefeater', 1, 0, '2017-02-09', NULL, 'admin', NULL),
(13, 11, 13, 'Blue Diamont 750ml', 'white', 'Nepal', '600', '', 300, 1, '589c0247b0427_bluediamont.png', '', '', '', 'Blue Diamond is an extra dry gin in the 40up segment. It is synonymous with quality, price and taste.', '<p>Blue Diamond is an extra dry gin in the 40up segment. It is synonymous with quality, price and taste.</p>', 1, 'blue_diamont', 0, 0, '2017-02-09', NULL, 'admin', NULL),
(14, 14, 15, 'Bacardi Gold 1L', 'brown', 'Cuba', '3350', '50', 24, 1, '589c02aa7aab7_bacardi.png', '', '', '', 'Bacardi Gold features rich vanilla, buttery caramel, toasted almond and sweet banana notes with the warm zest of orange peel and a light tasting, oaky finish.', '<div><p>Bacardi Gold is expertly crafted by Maestros de Ron Bacardi. Its rich flavors and golden complexion are developed in toasted oak barrels and its mellow character comes from being shaped through a secret blend of charcoals.</p><p>Bacardi Gold features rich vanilla, buttery caramel, toasted almond and sweet banana notes with the warm zest of orange peel and a light tasting, oaky finish.</p></div>', 1, 'bacardi', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(15, 16, 17, 'Hoegaarden White Beer', 'brown', 'Belgium', '300', '', 200, 1, '589c031e53d40_hoegaarden.png', '', '', '', 'There is plenty of yeasty aroma, that quite high and floral. On the palate it is very easy-drinking with plenty of spicebox nuances, a vaguely medicinal hint and a crisp, fruity, refreshing style.', '<div><p>Hoegaarden White is subtly flavoured with Coriander and Cura&ccedil;ao, pouring in a swirling cloud of yeast with a pale yellow, almost putty colour and strong white head. It is intensely aromatic, with lots of lemony fruit, spices and a hint of white chocolate.</p><p>There is plenty of yeasty aroma, that&#39;s quite high and floral. On the palate it is very easy-drinking with plenty of spicebox nuances, a vaguely medicinal hint and a crisp, fruity, refreshing style.</p></div>', 1, 'hoegaarden', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(16, 16, 18, ' Tuborg Can 500ML', 'brown', 'nepal', '200', '', 200, 1, '589c0359e6fdc_tuborg.png', '', '', '', 'Tuborg recently unveiled its new look with the innovative Pull-Off Cap for the first time in Nepal.', '<div><p>Launched in Nepal in 1990 and enjoyed worldwide since 1880, Tuborg is the largest selling, most preferred and therefore the number 1 beer brand in Nepal.</p><p>Tuborg recently unveiled its new look with the innovative Pull-Off Cap for the first time in Nepal.</p><p>Tuborg also has a strong association with music and has been involved with various musical events over the years with the essence of Open for Fun&hellip;wherever you are.</p></div>', 1, 'tuborg', 1, 0, '2017-02-09', NULL, 'admin', NULL),
(17, 16, 18, ' Somersby Apple Cider', 'brown', 'nepal', '100', '', 500, 1, '589c039d5a4f8_somersby.png', '', '', '', 'Somersby is Carlsberg Group biggest selling cider and was among the world fastest growing international ciders IN 2014. It IS a very popular alternative TO beer AND wine,\r\n  AND a NATURAL alternative TO flavoured Ready - TO - Drink products.', ' < p > Somersby IS Carlsberg GROUP &#39;s biggest selling cider and was among the world&#39;s fastest growing international ciders in 2014. It is a very popular alternative to beer and wine, and a natural alternative to flavoured Ready-to-Drink products.</p><p>Apple Cider is derived by the fermentation of the juice of apples, without at any time adding distilled alcohol. Sugar and apple juice may be added both prior and post fermentation. Most ciders are carbonated and food additives (permitted in EU legislation) can be used</p>', 1, 'somersby', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(18, 26, 27, 'Coke 2.25L', 'black', 'Nepal', '180', '', 400, 1, '589c0414e64a1_coke.png', '', '', '', 'Coca-Cola is Number One Sparkling Brand in Nepal today.', '<div><p>Coca-Cola is the most popular and biggest-selling soft drink in history, as well as one of the most recognizable brands in the world.</p><p>Created in 1886 in Atlanta, Georgia, by Dr. John S. Pemberton, Coca-Cola was first offered as a fountain beverage at Jacob&#39;s Pharmacy by mixing Coca-Cola syrup with carbonated water.</p><p>Coca-Cola is Number One Sparkling Brand in Nepal today.</p></div>', 1, 'coke', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(19, 22, 23, 'Cockburn Special Reserve', 'red', 'portugol', '2750', '', 30, 1, '589c0475d47d0_cockburns.png', '', '', '', 'Cockburn vineyard holdings are some of the largest in the Douro region which gives the house valuable flexibility in selecting \r\n', '<div><p>Cockburn&#39;s vineyard holdings are some of the largest in the Douro region which gives the house valuable flexibility in selecting only the very best fruit for their ports.</p><p>Nose: A youthful nose packed with rich and concentrated aromas of red fruits.</p><p>Palate: Sweet, well rounded, medium length and with luscious red berry flavours leading to a distinctive dry finish.</p><p>Recommendations: Pairs particularly well with cheese and other desserts.</p></div>', 1, 'cokcburns', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(20, 22, 24, ' Baron dArignac Sweet ', 'white', 'France', '950', '', 20, 1, '589c04e8797a0_baron.png', '', '', '', 'Colour: Pale yellow, with golden shades.', '<div><p>Colour: Pale yellow, with golden shades.</p><p>Nose: Fine aromatic wine, dried fruit, vineyards peach.</p><p>Palate: Mellow wine, ample and richness, fine persistence.</p><p>Recommendations: Serve alone or as aperitif, it can be served favourably with desserts.</p></div>', 1, 'whitewine1', 1, 0, '2017-02-09', NULL, 'admin', NULL),
(21, 22, 25, 'Chandon Brut 750ML', 'brown', 'India', '2350', '', 20, 1, '589c054530db3_chandon.png', '', '', '', 'This wine offers the balance and elegance that has become Chandons hallmark style. When you taste Chandon Brut, look for nutty flavors with hints of brioche that build to a refreshing dry finish.', '<div><p>This wine offers the balance and elegance that has become Chandon&#39;s hallmark style. When you taste Chandon Brut, look for nutty flavors with hints of brioche that build to a refreshing dry finish.</p><p>The wine delivers complex apple and pear characteristics accented by citrus spice over notes of almond and caramel in the bouquet.</p></div>', 1, 'Chandon', 1, 1, '2017-02-09', NULL, 'admin', NULL),
(22, 19, 20, 'Surya Kings', 'white', 'Nepal', '180', '', 400, 1, '589c057ff193f_surya.png', '', '', '', 'A quality product from Surya Nepal Pvt. Ltd.', '<div><p>A quality product from Surya Nepal Pvt. Ltd.</p><p>*Smoking is injurious to your health.</p></div>', 1, 'surya', 0, 0, '2017-02-09', NULL, 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `costumer_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `costumer_id` (`costumer_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `costumer_id` (`costumer_id`);

--
-- Indexes for table `tbl_orders_details`
--
ALTER TABLE `tbl_orders_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `costumer_id` (`costumer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_orders_details`
--
ALTER TABLE `tbl_orders_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id`),
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`costumer_id`) REFERENCES `tbl_customer` (`id`);

--
-- Constraints for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD CONSTRAINT `tbl_category_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_admin` (`username`),
  ADD CONSTRAINT `tbl_category_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `tbl_admin` (`username`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`costumer_id`) REFERENCES `tbl_customer` (`id`);

--
-- Constraints for table `tbl_orders_details`
--
ALTER TABLE `tbl_orders_details`
  ADD CONSTRAINT `tbl_orders_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`id`),
  ADD CONSTRAINT `tbl_orders_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`id`),
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `tbl_admin` (`username`),
  ADD CONSTRAINT `tbl_product_ibfk_3` FOREIGN KEY (`modified_by`) REFERENCES `tbl_admin` (`username`);

--
-- Constraints for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD CONSTRAINT `tbl_wishlist_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`id`),
  ADD CONSTRAINT `tbl_wishlist_ibfk_2` FOREIGN KEY (`costumer_id`) REFERENCES `tbl_customer` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
