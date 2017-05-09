-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 11:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usename` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usename`, `password`) VALUES
(1, 'kingkong', '123'),
(2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `description`) VALUES
(1, 'Escalope de Veau', 13.95, 'images/h5.jpg', 'Sautéed breaded veal escalope with watercress, lemon and veal jus.'),
(2, 'Roast Duck Breast', 9.5, 'images/h3.jpg', 'Roasted duck breast (served pink) with gratin potato and a griottine cherry sauce'),
(3, 'Chicken and Walnut Salad', 10.95, 'images/h2.jpg', 'Chargrilled chicken with avocado, baby gem lettuce, baby spinach, shallots, French beans, walnuts, croutons and a mustard dressing'),
(4, 'Roasted Pork Belly', 13.5, 'images/h1.jpg', 'Pan roasted pork belly with gratin potato, braised Savoy cabbage, apples, thyme and calvados jus'),
(5, 'Breton Fish Stew', 13.95, 'images/h4.jpg', 'Pan roasted haddock fillet wrapped in smoked French bacon with pea purée and tomato and chive vinaigrette'),
(6, 'Goats Cheese Salad', 7.5, 'images/h3.jpg', 'Warm goats cheese and roasted vegetable salad with black olive tapenade crostini'),
(7, 'Apple Strudel', 15, 'images/kemSocola.jpg', 'Apples, Vanilla Ice Cream, Nuts'),
(8, 'Cherry Pie', 15, 'images/pie.jpg', 'Cherries, Dough, White Sugar, Cheese, Vanilla Ice Cream'),
(9, 'Caeser Salad', 30, 'images/salad.jpg', 'Lettuce, Eggs, Parmesan Cheese, Chicken Breast Fillets.'),
(12, 'Apple Strudel', 15, 'images/product-4-585x390.jpg', 'Tasty apple dessert for tea time. This delicious you will never forget.');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `cate`, `img`) VALUES
(1, 'pizza', 'imges/cat-1.jpg'),
(2, 'salad', 'images/cat-2.jpg'),
(3, 'Desserts', 'images/cat-3.jpg'),
(4, 'Soups', 'images/cat-4.jpg'),
(5, 'Drinks', 'images/cat-2.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
