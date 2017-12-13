-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        10.1.12-MariaDB - mariadb.org binary distribution
-- 服务器操作系统:                      Win32
-- HeidiSQL 版本:                  9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出 db 的数据库结构
CREATE DATABASE IF NOT EXISTS `db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db`;


-- 导出  表 db.comment 结构
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photoid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `content` text NOT NULL,
  `pubtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- 正在导出表  db.comment 的数据：~9 rows (大约)
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` (`id`, `photoid`, `userid`, `content`, `pubtime`) VALUES
	(1, 10, 1, '你吃饭了吗？', '2017-11-03 11:06:42'),
	(2, 10, 1, '今天天气不错！', '2017-11-03 11:07:47'),
	(3, 9, 2, '弹射器是英国发明的，怎么弄个滑跃起飞，喷子们，你们倒是赶紧喷啊', '2017-11-06 13:56:39'),
	(4, 9, 2, '纸老虎，拆哪浪波旺，我国的全是自主研发，每一个配件到螺丝都是国产', '2017-11-06 13:56:57'),
	(5, 9, 2, '如果是俄罗斯的，该用霸气来形容了？', '2017-11-06 13:57:04'),
	(6, 9, 2, '一楼吗在东莞也是no1', '2017-11-06 13:57:09'),
	(7, 9, 2, '楼上漏讲了几个有关英国人在建造和使用航母的贡献，首先，使用光学助降系统减轻了飞行员着陆的风险和压力，第一个在航母起降喷气式战机，第一个使用航母的舰载机夜袭塔兰托，炸沉和炸伤多艘意大利军舰，开创了二战航母时代，日本人偷师成就了偷䶮珍珠港的成功！还有很多海军的礼仪都是英国人发展和沿习至今，受到各国海军沿用，包括中国海军在内！', '2017-11-06 13:57:25'),
	(8, 9, 2, '那飞机怎么办，F35B可以弹射？飞行员也模块化了，脑子里加块芯片不用训练直接开飞机。真要大改造伊丽莎白还不如问美国要艘封存航母快。', '2017-11-06 13:57:37'),
	(9, 10, 2, '今天讲分页设计。', '2017-11-07 08:43:16');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;


-- 导出  表 db.permission 结构
CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `photoid` int(11) NOT NULL DEFAULT '0',
  `perm` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- 正在导出表  db.permission 的数据：~4 rows (大约)
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
INSERT INTO `permission` (`id`, `userid`, `photoid`, `perm`) VALUES
	(1, 8, 10, 'read'),
	(2, 3, 10, 'read'),
	(3, 2, 10, 'read'),
	(12, 7, 10, 'read');
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;


-- 导出  表 db.photo 结构
CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tagjson` varchar(255) DEFAULT '0',
  `path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `extname` varchar(255) DEFAULT NULL,
  `uptime` datetime NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- 正在导出表  db.photo 的数据：~10 rows (大约)
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` (`id`, `tagjson`, `path`, `name`, `extname`, `uptime`, `userid`) VALUES
	(1, '0', '20171010/Tulips.jpg', 'Tulips.jpg', NULL, '2017-10-10 08:54:18', 0),
	(2, '0', '20171010/Tulips.jpg', 'Tulips.jpg', NULL, '2017-10-10 08:54:51', 0),
	(3, '0', '20171010/150759823650160100.jpg', '150759823650160100.jpg', NULL, '2017-10-10 09:17:16', 0),
	(4, '0', '20171010/150759826287610900.jpg', '150759826287610900.jpg', NULL, '2017-10-10 09:17:42', 0),
	(5, '0', '20171010/150759826503523300.jpg', '150759826503523300.jpg', NULL, '2017-10-10 09:17:45', 0),
	(6, '0', '20171010/150759834265267200.txt', '150759834265267200.txt', NULL, '2017-10-10 09:19:02', 0),
	(7, '0', '20171010/150759838365301700.exe', '150759838365301700.exe', NULL, '2017-10-10 09:19:43', 0),
	(8, '0', '20171023/150873900482188900.jpg', '150873900482188900.jpg', NULL, '2017-10-23 14:10:04', 1),
	(9, '0', '20171023/150873904772334300.jpg', '150873904772334300.jpg', NULL, '2017-10-23 14:10:47', 1),
	(10, '["yyy"]', '20171024/150880606506141900.jpg', '150880606506141900.jpg', NULL, '2017-10-24 08:47:45', 1);
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;


-- 导出  表 db.tag 结构
CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '0',
  `num` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  db.tag 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` (`id`, `name`, `num`) VALUES
	(1, 'Java', 5),
	(2, 'php', 2),
	(3, 'aaa', 1),
	(4, 'bbb', 1),
	(5, 'ccc', 1),
	(6, 'eeee', 1),
	(7, 'ggggggg', 2),
	(8, 'kkk', 1),
	(9, 'yyy', 1);
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;


-- 导出  表 db.user 结构
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `regtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- 正在导出表  db.user 的数据：~8 rows (大约)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `account`, `passwd`, `name`, `image`, `regtime`) VALUES
	(1, 'zhangsan', '111111', '张三', NULL, '2017-09-25 13:47:36'),
	(2, 'lisi', '11111111', '李四', NULL, '2017-09-30 13:45:27'),
	(3, 'b', 'b', 'b', '20171009/Hydrangeas.jpg', '2017-10-09 13:40:55'),
	(4, 'c', 'c', 'a', '20171009/Hydrangeas.jpg', '2017-10-09 13:43:04'),
	(5, 'd', 'a', 'd', '20171009/Hydrangeas.jpg', '2017-10-09 13:43:38'),
	(6, 'e', 'a', 'e', '20171009/Hydrangeas.jpg', '2017-10-09 13:44:14'),
	(7, 'f', 'a', 'f', '20171009/Hydrangeas.jpg', '2017-10-09 13:44:49'),
	(8, 'g', 'a', 'g', '20171009/Hydrangeas.jpg', '2017-10-09 13:49:30');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
