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

-- Дамп данных таблицы group.menu: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id`, `food`, `weight`, `price`, `time_id`) VALUES
	(40, 'Молоко', 78, 45.50, 11),
	(45, 'Пицца', 330, 256.00, 7),
	(46, 'ewr', 34, 23.00, 7);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Дамп данных таблицы group.personal: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;

-- Дамп данных таблицы group.profession: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `profession` DISABLE KEYS */;
/*!40000 ALTER TABLE `profession` ENABLE KEYS */;

-- Дамп данных таблицы group.table_time_id: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `table_time_id` DISABLE KEYS */;
INSERT INTO `table_time_id` (`id`, `title`) VALUES
	(7, 'Обед'),
	(9, 'Ужин'),
	(11, 'Завтрак');
/*!40000 ALTER TABLE `table_time_id` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
