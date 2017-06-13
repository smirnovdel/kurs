-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.53 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных group
CREATE DATABASE IF NOT EXISTS `group` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `group`;

-- Дамп структуры для таблица group.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `food` varchar(30) NOT NULL DEFAULT '0',
  `weight` int(5) NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `time_id` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `time_id` (`time_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы group.menu: ~13 rows (приблизительно)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id`, `food`, `weight`, `price`, `time_id`) VALUES
	(47, 'Яичница', 100, 125.00, 5),
	(48, 'Капучино', 200, 150.25, 2),
	(49, 'Мороженое', 110, 70.00, 1),
	(50, 'Гамбургер', 139, 99.00, 4),
	(51, 'Чай с лимоном', 160, 35.00, 2),
	(52, 'Сендвич', 100, 186.00, 4),
	(53, 'Каша рисовая', 230, 98.00, 6),
	(54, 'Суп харчо', 250, 135.00, 3),
	(55, 'Суп куринный', 250, 105.00, 3),
	(56, 'Борщ', 250, 150.25, 3),
	(57, 'Плов', 215, 165.00, 5),
	(58, 'Шашлык', 200, 250.00, 5),
	(59, 'Жаркое', 220, 222.00, 5);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Дамп структуры для таблица group.personal
CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `family` varchar(30) NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL DEFAULT '0',
  `secname` varchar(30) NOT NULL DEFAULT '0',
  `note` text NOT NULL,
  `profession` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profession` (`profession`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы group.personal: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;

-- Дамп структуры для таблица group.profession
CREATE TABLE IF NOT EXISTS `profession` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL DEFAULT '0',
  `all` varchar(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы group.profession: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `profession` DISABLE KEYS */;
/*!40000 ALTER TABLE `profession` ENABLE KEYS */;

-- Дамп структуры для таблица group.table_time_id
CREATE TABLE IF NOT EXISTS `table_time_id` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы group.table_time_id: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `table_time_id` DISABLE KEYS */;
INSERT INTO `table_time_id` (`id`, `title`) VALUES
	(1, 'Десерты'),
	(2, 'Напитки'),
	(3, 'Супы'),
	(4, 'Сендвичи'),
	(5, 'Горячие бл'),
	(6, 'Каши'),
	(7, 'Салаты');
/*!40000 ALTER TABLE `table_time_id` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
