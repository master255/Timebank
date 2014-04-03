-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 192.168.1.101:3306
-- Время создания: Апр 03 2014 г., 12:26
-- Версия сервера: 5.6.15-log
-- Версия PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `export`
--

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_adsmanager_adcat`
--

CREATE TABLE IF NOT EXISTS `w96sn_adsmanager_adcat` (
  `adid` int(10) unsigned NOT NULL,
  `catid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`adid`,`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_adsmanager_ads`
--

CREATE TABLE IF NOT EXISTS `w96sn_adsmanager_ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` int(10) unsigned DEFAULT '0',
  `userid` int(10) unsigned DEFAULT NULL,
  `name` text,
  `ad_phone` text,
  `email` text,
  `ad_headline` text,
  `ad_text` text,
  `ad_price` text,
  `rating` int(11) NOT NULL DEFAULT '0',
  `count1` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_recall` date DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `recall_mail_sent` tinyint(1) DEFAULT '0',
  `views` int(10) unsigned DEFAULT '0',
  `published` tinyint(1) DEFAULT '1',
  `ad_datestart` text NOT NULL,
  `ad_dateend` text NOT NULL,
  `root_cat` int(10) unsigned NOT NULL DEFAULT '0',
  `ad_rating` float(10,2) NOT NULL DEFAULT '0.00',
  `ad_map` text NOT NULL,
  `ad_group` text NOT NULL,
  `ad_important` text NOT NULL,
  `ad_days` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=167 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_adsmanager_categories`
--

CREATE TABLE IF NOT EXISTS `w96sn_adsmanager_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent` int(10) unsigned DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `ordering` int(11) DEFAULT '0',
  `published` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=132 ;

--
-- Дамп данных таблицы `w96sn_adsmanager_categories`
--

INSERT INTO `w96sn_adsmanager_categories` (`id`, `parent`, `name`, `description`, `ordering`, `published`) VALUES
(1, 3, 'Услуги', '', 10, 1),
(2, 3, 'Товары', '', 20, 1),
(3, 0, 'Спрос', '', 30, 1),
(4, 0, 'Предложение', '', 40, 1),
(5, 4, 'Услуги', '', 50, 1),
(6, 4, 'Товары', '', 60, 1),
(7, 1, 'Бухгалтерские услуги', '', 70, 1),
(57, 5, 'Перевоз грузов, грузчики', '', 715, 1),
(9, 1, 'Вязание и творческая вышивка', '', 90, 1),
(10, 1, 'Перевоз грузов, грузчики', '', 245, 1),
(11, 1, 'Другие', '', 110, 1),
(13, 1, 'Издательское дело, полиграфия', '', 130, 1),
(14, 1, 'Йога, спорт, здоровье', '', 140, 1),
(56, 5, 'Вязание и творческая вышивка', '', 560, 1),
(16, 1, 'Массаж и косметические процедуры', '', 160, 1),
(17, 1, 'Медицинские услуги, здоровье', '', 170, 1),
(19, 1, 'Недвижимость, квартиры', '', 190, 1),
(20, 1, 'Обучение работе на PC', '', 200, 1),
(21, 1, 'Организация праздников', '', 210, 1),
(22, 1, 'Охранные и сыскные услуги', '', 220, 1),
(23, 1, 'Парикмахерские услуги', '', 230, 1),
(24, 1, 'Переводы текстов', '', 240, 1),
(25, 1, 'Помощь школьникам и студентам', '', 250, 1),
(26, 1, 'Программирование (Web, программы, контроллеры)', '', 260, 1),
(27, 1, 'Профессиональный макияж, обучение, подбор', '', 270, 1),
(28, 1, 'Реализация товаров (магазины)', '', 280, 1),
(29, 1, 'Реклама, оформление', '', 290, 1),
(30, 1, 'Ремонт автотранспорта', '', 300, 1),
(31, 1, 'Ремонт дома, квартиры', '', 310, 1),
(33, 1, 'Ремонт оргтехники', '', 330, 1),
(34, 1, 'Ремонт сантехники', '', 340, 1),
(35, 1, 'Ремонт сотовых аппаратов', '', 350, 1),
(36, 1, 'Ремонт электрики', '', 360, 1),
(37, 1, 'Ремонт элетроники и бытовых приборов', '', 370, 1),
(38, 1, 'Ремонт и настройка компьютеров', '', 380, 1),
(39, 1, 'Стоматологическое лечение', '', 390, 1),
(40, 1, 'Страхование', '', 400, 1),
(41, 1, 'Строительные работы', '', 410, 1),
(42, 1, 'Транспортные и курьерские услуги', '', 420, 1),
(43, 1, 'Уборка помещений (квартира, офис и т.д.)', '', 430, 1),
(44, 1, 'Уроки иностранных языков', '', 440, 1),
(45, 1, 'Уроки музыки', '', 450, 1),
(46, 1, 'Уроки танцев', '', 460, 1),
(48, 1, 'Услуги для домашних любимцев', '', 480, 1),
(49, 1, 'Услуги нянь, сиделок', '', 490, 1),
(50, 1, 'Услуги, маникюр, педикюр', '', 500, 1),
(51, 1, 'Финансовые услуги', '', 510, 1),
(52, 1, 'Фото и модельные услуги', '', 520, 1),
(53, 1, 'Юридические услуги, аудит', '', 530, 1),
(58, 5, 'Другие', '', 580, 1),
(54, 5, 'Бухгалтерские услуги', '', 540, 1),
(60, 5, 'Издательское дело, полиграфия', '', 600, 1),
(61, 5, 'Йога, спорт, здоровье', '', 610, 1),
(63, 5, 'Массаж и косметические процедуры', '', 630, 1),
(64, 5, 'Медицинские услуги, здоровье', '', 640, 1),
(66, 5, 'Недвижимость, квартиры', '', 660, 1),
(67, 5, 'Обучение работе на PC', '', 670, 1),
(68, 5, 'Организация праздников', '', 680, 1),
(69, 5, 'Охранные и сыскные услуги', '', 690, 1),
(70, 5, 'Парикмахерские услуги', '', 700, 1),
(71, 5, 'Переводы текстов', '', 710, 1),
(72, 5, 'Помощь школьникам и студентам', '', 720, 1),
(73, 5, 'Программирование (Web, программы, контроллеры)', '', 730, 1),
(74, 5, 'Профессиональный макияж, обучение, подбор', '', 740, 1),
(75, 5, 'Реализация товаров (магазины)', '', 750, 1),
(76, 5, 'Реклама, оформление', '', 760, 1),
(77, 5, 'Ремонт автотранспорта', '', 770, 1),
(78, 5, 'Ремонт дома, квартиры', '', 780, 1),
(80, 5, 'Ремонт оргтехники', '', 800, 1),
(81, 5, 'Ремонт сантехники', '', 810, 1),
(82, 5, 'Ремонт сотовых аппаратов', '', 820, 1),
(83, 5, 'Ремонт электрики', '', 830, 1),
(84, 5, 'Ремонт элетроники и бытовых приборов', '', 840, 1),
(85, 5, 'Ремонт и настройка компьютеров', '', 850, 1),
(86, 5, 'Стоматологическое лечение', '', 860, 1),
(87, 5, 'Страхование', '', 870, 1),
(88, 5, 'Строительные работы', '', 880, 1),
(89, 5, 'Транспортные и курьерские услуги', '', 890, 1),
(90, 5, 'Уборка помещений (квартира, офис и т.д.)', '', 900, 1),
(91, 5, 'Уроки иностранных языков', '', 910, 1),
(92, 5, 'Уроки музыки', '', 920, 1),
(93, 5, 'Уроки танцев', '', 930, 1),
(95, 5, 'Услуги для домашних любимцев', '', 950, 1),
(96, 5, 'Услуги нянь, сиделок', '', 960, 1),
(97, 5, 'Услуги, маникюр, педикюр', '', 970, 1),
(98, 5, 'Финансовые услуги', '', 980, 1),
(99, 5, 'Фото и модельные услуги', '', 990, 1),
(100, 5, 'Юридические услуги, аудит', '', 1000, 1),
(101, 2, 'Автотовары', '', 1010, 1),
(102, 2, 'Бытовые товары', '', 1020, 1),
(103, 2, 'Лесная промышленность', '', 1030, 1),
(104, 2, 'Металлы', '', 1040, 1),
(105, 2, 'Нефть, газ, уголь', '', 1050, 1),
(106, 2, 'Одежда и ткани', '', 1060, 1),
(109, 2, 'Оргтехника и компьютеры', '', 1070, 1),
(108, 2, 'Отдых, развлечения', '', 1080, 1),
(110, 2, 'Продукты питания', '', 1090, 1),
(111, 2, 'Промышленное оборудование', '', 1100, 1),
(112, 2, 'Прочие товары', '', 1110, 1),
(113, 2, 'Строительные товары', '', 1120, 1),
(114, 2, 'Товары для офиса', '', 1130, 1),
(115, 2, 'Устройства связи и коммуникаций', '', 1140, 1),
(116, 2, 'Химические товары', '', 1150, 1),
(117, 6, 'Автотовары', '', 1160, 1),
(118, 6, 'Бытовые товары', '', 1170, 1),
(119, 6, 'Лесная промышленность', '', 1180, 1),
(120, 6, 'Металлы', '', 1190, 1),
(121, 6, 'Нефть, газ, уголь', '', 1200, 1),
(122, 6, 'Одежда и ткани', '', 1210, 1),
(123, 6, 'Оргтехника и компьютеры', '', 1220, 1),
(124, 6, 'Отдых, развлечения', '', 1230, 1),
(125, 6, 'Продукты питания', '', 1240, 1),
(126, 6, 'Промышленное оборудование', '', 1250, 1),
(127, 6, 'Прочие товары', '', 1260, 1),
(128, 6, 'Строительные товары', '', 1270, 1),
(129, 6, 'Товары для офиса', '', 1280, 1),
(130, 6, 'Устройства связи и коммуникаций', '', 1290, 1),
(131, 6, 'Химические товары', '', 1300, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_adsmanager_columns`
--

CREATE TABLE IF NOT EXISTS `w96sn_adsmanager_columns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `catsid` text NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `w96sn_adsmanager_columns`
--

INSERT INTO `w96sn_adsmanager_columns` (`id`, `name`, `ordering`, `catsid`, `published`) VALUES
(9, 'Рейтинг', 0, ',4,5,54,56,58,60,61,63,64,66,67,68,69,70,71,57,72,73,74,75,76,77,78,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,6,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,', 1),
(7, 'Цена', 0, ',-1,', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_adsmanager_config`
--

CREATE TABLE IF NOT EXISTS `w96sn_adsmanager_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `version` text NOT NULL,
  `ads_per_page` int(10) unsigned NOT NULL DEFAULT '20',
  `max_image_size` int(10) unsigned NOT NULL DEFAULT '102400',
  `max_width` int(4) NOT NULL DEFAULT '450',
  `max_height` int(4) NOT NULL DEFAULT '300',
  `max_width_t` int(4) NOT NULL DEFAULT '150',
  `max_height_t` int(4) NOT NULL DEFAULT '100',
  `root_allowed` tinyint(4) NOT NULL DEFAULT '1',
  `nb_images` int(4) NOT NULL DEFAULT '2',
  `show_contact` tinyint(4) NOT NULL DEFAULT '1',
  `send_email_on_new` tinyint(4) NOT NULL DEFAULT '1',
  `send_email_on_update` tinyint(4) NOT NULL DEFAULT '1',
  `auto_publish` tinyint(4) NOT NULL DEFAULT '1',
  `tag` text NOT NULL,
  `fronttext` text NOT NULL,
  `comprofiler` tinyint(4) NOT NULL DEFAULT '0',
  `email_display` tinyint(4) NOT NULL DEFAULT '0',
  `rules_text` text NOT NULL,
  `display_expand` tinyint(4) NOT NULL DEFAULT '1',
  `display_last` tinyint(4) NOT NULL DEFAULT '2',
  `display_fullname` tinyint(4) NOT NULL DEFAULT '2',
  `expiration` tinyint(1) NOT NULL DEFAULT '1',
  `ad_duration` int(4) NOT NULL DEFAULT '30',
  `recall` tinyint(1) NOT NULL DEFAULT '1',
  `recall_time` int(4) NOT NULL DEFAULT '7',
  `recall_text` text NOT NULL,
  `image_display` varchar(50) NOT NULL DEFAULT 'default',
  `cat_max_width` int(4) NOT NULL DEFAULT '150',
  `cat_max_height` int(4) NOT NULL DEFAULT '150',
  `cat_max_width_t` int(4) NOT NULL DEFAULT '30',
  `cat_max_height_t` int(4) NOT NULL DEFAULT '30',
  `submission_type` int(4) NOT NULL DEFAULT '30',
  `nb_ads_by_user` int(4) NOT NULL DEFAULT '-1',
  `allow_attachement` tinyint(1) NOT NULL DEFAULT '0',
  `allow_contact_by_pms` tinyint(1) NOT NULL DEFAULT '0',
  `show_rss` tinyint(1) NOT NULL DEFAULT '0',
  `nbcats` int(4) NOT NULL DEFAULT '1',
  `show_new` tinyint(1) NOT NULL DEFAULT '1',
  `nbdays_new` int(10) NOT NULL DEFAULT '5',
  `show_hot` tinyint(1) NOT NULL DEFAULT '1',
  `nbhits` int(10) NOT NULL DEFAULT '100',
  `bannedwords` text,
  `replaceword` text,
  `after_expiration` text,
  `archive_catid` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `w96sn_adsmanager_config`
--

INSERT INTO `w96sn_adsmanager_config` (`id`, `version`, `ads_per_page`, `max_image_size`, `max_width`, `max_height`, `max_width_t`, `max_height_t`, `root_allowed`, `nb_images`, `show_contact`, `send_email_on_new`, `send_email_on_update`, `auto_publish`, `tag`, `fronttext`, `comprofiler`, `email_display`, `rules_text`, `display_expand`, `display_last`, `display_fullname`, `expiration`, `ad_duration`, `recall`, `recall_time`, `recall_text`, `image_display`, `cat_max_width`, `cat_max_height`, `cat_max_width_t`, `cat_max_height_t`, `submission_type`, `nb_ads_by_user`, `allow_attachement`, `allow_contact_by_pms`, `show_rss`, `nbcats`, `show_new`, `nbdays_new`, `show_hot`, `nbhits`, `bannedwords`, `replaceword`, `after_expiration`, `archive_catid`) VALUES
(1, '1.0.1', 10, 2048000, 450, 350, 150, 100, 0, 1, 1, 1, 1, 1, 'timebankspb.ru', '<p align="center"><strong><br /></strong></p>', 2, 0, '<p>Правила публикации объявления:</p>\r\n<p>1) Не обманывать </p>', 2, 2, 1, 0, 30, 1, 7, '<p>Add This Text to recall message</p>', 'highslide', 150, 150, 0, 0, 1, -1, 1, 1, 1, 1, 1, 5, 1, 100, '', '****', 'delete', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_adsmanager_fieldgmap`
--

CREATE TABLE IF NOT EXISTS `w96sn_adsmanager_fieldgmap` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fieldid` int(10) unsigned DEFAULT NULL,
  `contentid` int(10) unsigned DEFAULT NULL,
  `lat` text,
  `lng` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=237 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_adsmanager_fieldgmap_conf`
--

CREATE TABLE IF NOT EXISTS `w96sn_adsmanager_fieldgmap_conf` (
  `fieldid` int(10) unsigned NOT NULL DEFAULT '0',
  `map_width` int(10) unsigned DEFAULT '500',
  `map_height` int(10) unsigned DEFAULT '350',
  `lat` varchar(50) DEFAULT '55.75',
  `lng` varchar(50) DEFAULT '37.616666699999996',
  PRIMARY KEY (`fieldid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_adsmanager_fieldgmap_conf`
--

INSERT INTO `w96sn_adsmanager_fieldgmap_conf` (`fieldid`, `map_width`, `map_height`, `lat`, `lng`) VALUES
(0, 500, 350, '55.75', '37.616666699999996'),
(16, 420, 350, '59.945785', '30.360518');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_adsmanager_fields`
--

CREATE TABLE IF NOT EXISTS `w96sn_adsmanager_fields` (
  `fieldid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `display_title` tinyint(1) NOT NULL DEFAULT '0',
  `description` mediumtext NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT '',
  `maxlength` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `required` tinyint(4) DEFAULT '0',
  `ordering` int(11) DEFAULT NULL,
  `cols` int(11) DEFAULT NULL,
  `rows` int(11) DEFAULT NULL,
  `link_text` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) NOT NULL DEFAULT '',
  `columnid` int(11) NOT NULL DEFAULT '-1',
  `columnorder` int(11) NOT NULL DEFAULT '0',
  `pos` tinyint(4) NOT NULL DEFAULT '1',
  `posorder` tinyint(4) NOT NULL DEFAULT '1',
  `profile` tinyint(1) NOT NULL DEFAULT '0',
  `cb_field` int(11) NOT NULL DEFAULT '-1',
  `cbfieldvalues` int(11) NOT NULL DEFAULT '-1',
  `editable` tinyint(1) NOT NULL DEFAULT '1',
  `searchable` tinyint(1) NOT NULL DEFAULT '1',
  `sort` tinyint(1) NOT NULL DEFAULT '0',
  `sort_direction` varchar(4) NOT NULL DEFAULT 'DESC',
  `catsid` text NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`fieldid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `w96sn_adsmanager_fields`
--

INSERT INTO `w96sn_adsmanager_fields` (`fieldid`, `name`, `title`, `display_title`, `description`, `type`, `maxlength`, `size`, `required`, `ordering`, `cols`, `rows`, `link_text`, `link_image`, `columnid`, `columnorder`, `pos`, `posorder`, `profile`, `cb_field`, `cbfieldvalues`, `editable`, `searchable`, `sort`, `sort_direction`, `catsid`, `published`) VALUES
(15, 'ad_rating', 'Рейтинг', 0, '', 'number', 20, 11, 0, 0, 0, 0, '', 'null', 9, 0, -1, 0, 0, -1, -1, 0, 0, 1, 'DESC', ',4,5,54,56,58,60,61,63,64,66,67,68,69,70,71,57,72,73,74,75,76,77,78,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,6,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,', 1),
(5, 'ad_headline', 'ADSMANAGER_FORM_AD_HEADLINE', 0, '', 'text', 60, 35, 1, 0, 0, 0, '', '', -1, 0, 1, 1, 0, -1, -1, 1, 1, 0, 'DESC', ',-1,', 1),
(12, 'ad_dateend', 'Время окончания', 0, 'До какого времени вас можно беспокоить по телефону по этому объявлению', 'text', 20, 0, 0, 9, 0, 0, '', 'null', -1, 0, -1, 0, 0, -1, -1, 1, 1, 1, 'DESC', ',-1,', 1),
(11, 'ad_datestart', 'Время начала', 0, 'Время с которого вас можно беспокоить по телефону по этому объявлению', 'text', 20, 0, 0, 6, 0, 0, '', 'null', -1, 0, -1, 0, 0, -1, -1, 1, 1, 1, 'DESC', ',-1,', 1),
(10, 'ad_price', 'Цена', 0, '', 'price', 20, 7, 1, 5, 0, 0, '', 'null', 7, 0, 4, 1, 0, -1, -1, 1, 1, 1, 'DESC', ',-1,', 1),
(7, 'ad_phone', 'ADSMANAGER_FORM_PHONE1', 0, '', 'number', 50, 35, 1, 1, 0, 0, '', '', -1, 0, 5, 1, 1, -1, -1, 1, 1, 0, 'DESC', ',-1,', 1),
(6, 'ad_text', 'ADSMANAGER_FORM_AD_TEXT', 0, '', 'textarea', 500, 0, 1, 2, 40, 20, '', '', -1, 0, 3, 1, 0, -1, -1, 1, 1, 0, 'DESC', ',-1,', 1),
(2, 'email', 'ADSMANAGER_FORM_EMAIL', 0, '', 'emailaddress', 50, 35, 0, 0, 0, 0, '', 'null', -1, 10, 5, 4, 1, -1, -1, 1, 1, 0, 'DESC', ',-1,', 0),
(1, 'name', 'Заголовок', 0, '', 'text', 50, 35, 0, 0, 0, 0, '', 'null', -1, 5, 1, 1, 1, -1, -1, 1, 1, 1, 'DESC', ',-1,', 0),
(16, 'ad_map', 'Карта', 0, '', 'gmap', 20, 0, 0, 13, 0, 0, '', 'null', -1, 0, 6, 0, 0, -1, -1, 1, 0, 0, 'DESC', ',-1,', 1),
(17, 'ad_group', 'Доступ группам', 0, 'Какие группы видят объявление. Кнопкой CTRL можно выделить несколько групп.', 'multiselect', 20, 0, 1, 12, 0, 0, '', 'null', -1, 0, -1, 0, 0, -1, -1, 1, 0, 0, 'DESC', ',-1,', 1),
(18, 'ad_important', 'Обязуюсь выполнить', 0, 'Обязательных объявлений может быть минимум 1. Иначе участие в проекте прекращается. Такие объявления определяют вашу профессию. Чем больше обязательных объявлений тем вы более ценны для нашей организации.', 'checkbox', 20, 1, 0, 11, 0, 0, '', 'null', -1, 0, -1, 0, 0, -1, -1, 1, 0, 1, 'DESC', ',4,5,54,56,58,60,61,63,64,66,67,68,69,70,71,57,72,73,74,75,76,77,78,80,81,82,83,84,85,86,87,88,89,90,91,92,93,95,96,97,98,99,100,6,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,', 1),
(19, 'ad_days', 'Желаемые дни', 0, '', 'multicheckbox', 20, 7, 1, 10, 7, 1, '', 'null', -1, 0, -1, 0, 0, -1, -1, 1, 0, 0, 'DESC', ',-1,', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_adsmanager_field_values`
--

CREATE TABLE IF NOT EXISTS `w96sn_adsmanager_field_values` (
  `fieldvalueid` int(11) NOT NULL AUTO_INCREMENT,
  `fieldid` int(11) NOT NULL DEFAULT '0',
  `fieldtitle` varchar(50) NOT NULL DEFAULT '',
  `fieldvalue` varchar(50) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `sys` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fieldvalueid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Дамп данных таблицы `w96sn_adsmanager_field_values`
--

INSERT INTO `w96sn_adsmanager_field_values` (`fieldvalueid`, `fieldid`, `fieldtitle`, `fieldvalue`, `ordering`, `sys`) VALUES
(1, 8, 'ADSMANAGER_KINDOF2', '1', 1, 0),
(2, 8, 'ADSMANAGER_KINDOF1', '2', 2, 0),
(3, 9, 'ADSMANAGER_STATE_0', '4', 4, 0),
(4, 8, 'ADSMANAGER_KINDOFALL', '0', 0, 0),
(5, 9, 'ADSMANAGER_STATE_1', '3', 3, 0),
(6, 9, 'ADSMANAGER_STATE_3', '1', 1, 0),
(7, 9, 'ADSMANAGER_STATE_2', '2', 2, 0),
(8, 9, 'ADSMANAGER_STATE_4', '0', 0, 0),
(12, 17, 'Все', '0', 0, 0),
(52, 19, 'Вс', '7', 6, 0),
(51, 19, 'Сб', '6', 5, 0),
(50, 19, 'Пт', '5', 4, 0),
(49, 19, 'Чт', '4', 3, 0),
(48, 19, 'Ср', '3', 2, 0),
(47, 19, 'Вт', '2', 1, 0),
(46, 19, 'Пн', '1', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_adsmanager_positions`
--

CREATE TABLE IF NOT EXISTS `w96sn_adsmanager_positions` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `w96sn_adsmanager_positions`
--

INSERT INTO `w96sn_adsmanager_positions` (`id`, `name`, `title`) VALUES
(1, 'top', 'ADSMANAGER_POSITION_TOP'),
(2, 'subtitle', 'ADSMANAGER_POSITION_SUBTITLE'),
(3, 'description', 'ADSMANAGER_POSITION_DESCRIPTION'),
(4, 'description2', 'ADSMANAGER_POSITION_DESCRIPTION2'),
(5, 'contact', 'ADSMANAGER_POSITION_CONTACT'),
(6, 'description', 'ADSMANAGER_POSITION_DESCRIPTION');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_adsmanager_profile`
--

CREATE TABLE IF NOT EXISTS `w96sn_adsmanager_profile` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `ad_city` text NOT NULL,
  `email` text NOT NULL,
  `ad_zip` text NOT NULL,
  `ad_phone` text NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_assets`
--

CREATE TABLE IF NOT EXISTS `w96sn_assets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set parent.',
  `lft` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set lft.',
  `rgt` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set rgt.',
  `level` int(10) unsigned NOT NULL COMMENT 'The cached level in the nested tree.',
  `name` varchar(50) NOT NULL COMMENT 'The unique name for the asset.\n',
  `title` varchar(100) NOT NULL COMMENT 'The descriptive title for the asset.',
  `rules` varchar(5120) NOT NULL COMMENT 'JSON encoded access control.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_asset_name` (`name`),
  KEY `idx_lft_rgt` (`lft`,`rgt`),
  KEY `idx_parent_id` (`parent_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Дамп данных таблицы `w96sn_assets`
--

INSERT INTO `w96sn_assets` (`id`, `parent_id`, `lft`, `rgt`, `level`, `name`, `title`, `rules`) VALUES
(1, 0, 1, 83, 0, 'root.1', 'Root Asset', '{"core.login.site":{"6":1,"2":1},"core.login.admin":{"6":1},"core.login.offline":{"6":1},"core.admin":{"8":1},"core.manage":{"7":1},"core.create":{"6":1,"3":1},"core.delete":{"6":1},"core.edit":{"6":1,"4":1},"core.edit.state":{"6":1,"5":1},"core.edit.own":{"6":1,"3":1}}'),
(2, 1, 1, 2, 1, 'com_admin', 'com_admin', '{}'),
(3, 1, 3, 6, 1, 'com_banners', 'com_banners', '{"core.admin":{"7":1},"core.manage":{"6":1},"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[]}'),
(4, 1, 7, 8, 1, 'com_cache', 'com_cache', '{"core.admin":{"7":1},"core.manage":{"7":1}}'),
(5, 1, 9, 10, 1, 'com_checkin', 'com_checkin', '{"core.admin":{"7":1},"core.manage":{"7":1}}'),
(6, 1, 11, 12, 1, 'com_config', 'com_config', '{}'),
(7, 1, 13, 16, 1, 'com_contact', 'com_contact', '{"core.admin":{"7":1},"core.manage":{"6":1},"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[],"core.edit.own":[]}'),
(8, 1, 17, 26, 1, 'com_content', 'com_content', '{"core.admin":{"7":1},"core.manage":{"6":1},"core.create":{"3":1},"core.delete":[],"core.edit":{"4":1},"core.edit.state":{"5":1},"core.edit.own":[]}'),
(9, 1, 27, 28, 1, 'com_cpanel', 'com_cpanel', '{}'),
(10, 1, 29, 30, 1, 'com_installer', 'com_installer', '{"core.admin":[],"core.manage":{"7":0},"core.delete":{"7":0},"core.edit.state":{"7":0}}'),
(11, 1, 31, 32, 1, 'com_languages', 'com_languages', '{"core.admin":{"7":1},"core.manage":[],"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[]}'),
(12, 1, 33, 34, 1, 'com_login', 'com_login', '{}'),
(13, 1, 35, 36, 1, 'com_mailto', 'com_mailto', '{}'),
(14, 1, 37, 38, 1, 'com_massmail', 'com_massmail', '{}'),
(15, 1, 39, 40, 1, 'com_media', 'com_media', '{"core.admin":{"7":1},"core.manage":{"6":1},"core.create":{"3":1},"core.delete":{"5":1}}'),
(16, 1, 41, 42, 1, 'com_menus', 'com_menus', '{"core.admin":{"7":1},"core.manage":[],"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[]}'),
(17, 1, 43, 44, 1, 'com_messages', 'com_messages', '{"core.admin":{"7":1},"core.manage":{"7":1}}'),
(18, 1, 45, 46, 1, 'com_modules', 'com_modules', '{"core.admin":{"7":1},"core.manage":[],"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[]}'),
(19, 1, 47, 50, 1, 'com_newsfeeds', 'com_newsfeeds', '{"core.admin":{"7":1},"core.manage":{"6":1},"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[],"core.edit.own":[]}'),
(20, 1, 51, 52, 1, 'com_plugins', 'com_plugins', '{"core.admin":{"7":1},"core.manage":[],"core.edit":[],"core.edit.state":[]}'),
(21, 1, 53, 54, 1, 'com_redirect', 'com_redirect', '{"core.admin":{"7":1},"core.manage":[]}'),
(22, 1, 55, 56, 1, 'com_search', 'com_search', '{"core.admin":{"7":1},"core.manage":{"6":1}}'),
(23, 1, 57, 58, 1, 'com_templates', 'com_templates', '{"core.admin":{"7":1},"core.manage":[],"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[]}'),
(24, 1, 59, 62, 1, 'com_users', 'com_users', '{"core.admin":{"7":1},"core.manage":[],"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[]}'),
(25, 1, 63, 66, 1, 'com_weblinks', 'com_weblinks', '{"core.admin":{"7":1},"core.manage":{"6":1},"core.create":{"3":1},"core.delete":[],"core.edit":{"4":1},"core.edit.state":{"5":1},"core.edit.own":[]}'),
(26, 1, 67, 68, 1, 'com_wrapper', 'com_wrapper', '{}'),
(27, 8, 18, 25, 2, 'com_content.category.2', '123', '{"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[],"core.edit.own":[]}'),
(28, 3, 4, 5, 2, 'com_banners.category.3', 'Uncategorised', '{"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[]}'),
(29, 7, 14, 15, 2, 'com_contact.category.4', 'Uncategorised', '{"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[],"core.edit.own":[]}'),
(30, 19, 48, 49, 2, 'com_newsfeeds.category.5', 'Uncategorised', '{"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[],"core.edit.own":[]}'),
(31, 25, 64, 65, 2, 'com_weblinks.category.6', 'Uncategorised', '{"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[],"core.edit.own":[]}'),
(32, 24, 60, 61, 1, 'com_users.notes.category.7', 'Uncategorised', '{"core.create":[],"core.delete":[],"core.edit":[],"core.edit.state":[]}'),
(33, 1, 69, 70, 1, 'com_finder', 'com_finder', '{"core.admin":{"7":1},"core.manage":{"6":1}}'),
(34, 1, 71, 72, 1, 'com_adsmanager', 'adsmanager', '{}'),
(35, 1, 73, 74, 1, 'com_comprofiler', 'comprofiler', '{}'),
(36, 1, 75, 76, 1, 'com_uddeim', 'uddeim', '{}'),
(37, 1, 77, 78, 1, 'com_gantry', 'gantry', '{}'),
(38, 1, 79, 80, 1, 'com_kunena', 'com_kunena', '{}'),
(39, 27, 19, 20, 3, 'com_content.article.1', 'Подробно о главном:', '{"core.delete":[],"core.edit":[],"core.edit.state":[]}'),
(40, 27, 21, 22, 3, 'com_content.article.2', 'Правила регистрации', '{"core.delete":[],"core.edit":[],"core.edit.state":[]}'),
(41, 27, 23, 24, 3, 'com_content.article.3', 'Правила форума', '{"core.delete":[],"core.edit":[],"core.edit.state":[]}'),
(42, 1, 81, 82, 1, 'com_jcomments', 'jcomments', '{}');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_associations`
--

CREATE TABLE IF NOT EXISTS `w96sn_associations` (
  `id` varchar(50) NOT NULL COMMENT 'A reference to the associated item.',
  `context` varchar(50) NOT NULL COMMENT 'The context of the associated item.',
  `key` char(32) NOT NULL COMMENT 'The key for the association computed from an md5 on associated ids.',
  PRIMARY KEY (`context`,`id`),
  KEY `idx_key` (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_banners`
--

CREATE TABLE IF NOT EXISTS `w96sn_banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `imptotal` int(11) NOT NULL DEFAULT '0',
  `impmade` int(11) NOT NULL DEFAULT '0',
  `clicks` int(11) NOT NULL DEFAULT '0',
  `clickurl` varchar(200) NOT NULL DEFAULT '',
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `custombannercode` varchar(2048) NOT NULL,
  `sticky` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `metakey` text NOT NULL,
  `params` text NOT NULL,
  `own_prefix` tinyint(1) NOT NULL DEFAULT '0',
  `metakey_prefix` varchar(255) NOT NULL DEFAULT '',
  `purchase_type` tinyint(4) NOT NULL DEFAULT '-1',
  `track_clicks` tinyint(4) NOT NULL DEFAULT '-1',
  `track_impressions` tinyint(4) NOT NULL DEFAULT '-1',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `reset` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `language` char(7) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `idx_state` (`state`),
  KEY `idx_own_prefix` (`own_prefix`),
  KEY `idx_metakey_prefix` (`metakey_prefix`),
  KEY `idx_banner_catid` (`catid`),
  KEY `idx_language` (`language`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_banner_clients`
--

CREATE TABLE IF NOT EXISTS `w96sn_banner_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `contact` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `extrainfo` text NOT NULL,
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `metakey` text NOT NULL,
  `own_prefix` tinyint(4) NOT NULL DEFAULT '0',
  `metakey_prefix` varchar(255) NOT NULL DEFAULT '',
  `purchase_type` tinyint(4) NOT NULL DEFAULT '-1',
  `track_clicks` tinyint(4) NOT NULL DEFAULT '-1',
  `track_impressions` tinyint(4) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`id`),
  KEY `idx_own_prefix` (`own_prefix`),
  KEY `idx_metakey_prefix` (`metakey_prefix`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_banner_tracks`
--

CREATE TABLE IF NOT EXISTS `w96sn_banner_tracks` (
  `track_date` datetime NOT NULL,
  `track_type` int(10) unsigned NOT NULL,
  `banner_id` int(10) unsigned NOT NULL,
  `count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`track_date`,`track_type`,`banner_id`),
  KEY `idx_track_date` (`track_date`),
  KEY `idx_track_type` (`track_type`),
  KEY `idx_banner_id` (`banner_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_categories`
--

CREATE TABLE IF NOT EXISTS `w96sn_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `asset_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table.',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `lft` int(11) NOT NULL DEFAULT '0',
  `rgt` int(11) NOT NULL DEFAULT '0',
  `level` int(10) unsigned NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL DEFAULT '',
  `extension` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(11) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `access` int(10) unsigned NOT NULL DEFAULT '0',
  `params` text NOT NULL,
  `metadesc` varchar(1024) NOT NULL COMMENT 'The meta description for the page.',
  `metakey` varchar(1024) NOT NULL COMMENT 'The meta keywords for the page.',
  `metadata` varchar(2048) NOT NULL COMMENT 'JSON encoded metadata properties.',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `modified_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `language` char(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_idx` (`extension`,`published`,`access`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_path` (`path`),
  KEY `idx_left_right` (`lft`,`rgt`),
  KEY `idx_alias` (`alias`),
  KEY `idx_language` (`language`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `w96sn_categories`
--

INSERT INTO `w96sn_categories` (`id`, `asset_id`, `parent_id`, `lft`, `rgt`, `level`, `path`, `extension`, `title`, `alias`, `note`, `description`, `published`, `checked_out`, `checked_out_time`, `access`, `params`, `metadesc`, `metakey`, `metadata`, `created_user_id`, `created_time`, `modified_user_id`, `modified_time`, `hits`, `language`) VALUES
(1, 0, 0, 0, 13, 0, '', 'system', 'ROOT', 'root', '', '', 1, 0, '0000-00-00 00:00:00', 1, '{}', '', '', '', 0, '2009-10-18 16:07:09', 0, '0000-00-00 00:00:00', 0, '*'),
(2, 27, 1, 1, 2, 1, '123', 'com_content', '123', '123', '', '', 1, 0, '0000-00-00 00:00:00', 1, '{"category_layout":"","image":""}', '', '', '{"author":"","robots":""}', 42, '2010-06-28 13:26:37', 42, '2012-02-22 16:40:29', 0, '*'),
(3, 28, 1, 3, 4, 1, 'uncategorised', 'com_banners', 'Uncategorised', 'uncategorised', '', '', 1, 0, '0000-00-00 00:00:00', 1, '{"target":"","image":"","foobar":""}', '', '', '{"page_title":"","author":"","robots":""}', 42, '2010-06-28 13:27:35', 0, '0000-00-00 00:00:00', 0, '*'),
(4, 29, 1, 5, 6, 1, 'uncategorised', 'com_contact', 'Uncategorised', 'uncategorised', '', '', 1, 0, '0000-00-00 00:00:00', 1, '{"target":"","image":""}', '', '', '{"page_title":"","author":"","robots":""}', 42, '2010-06-28 13:27:57', 0, '0000-00-00 00:00:00', 0, '*'),
(5, 30, 1, 7, 8, 1, 'uncategorised', 'com_newsfeeds', 'Uncategorised', 'uncategorised', '', '', 1, 0, '0000-00-00 00:00:00', 1, '{"target":"","image":""}', '', '', '{"page_title":"","author":"","robots":""}', 42, '2010-06-28 13:28:15', 0, '0000-00-00 00:00:00', 0, '*'),
(6, 31, 1, 9, 10, 1, 'uncategorised', 'com_weblinks', 'Uncategorised', 'uncategorised', '', '', 1, 0, '0000-00-00 00:00:00', 1, '{"target":"","image":""}', '', '', '{"page_title":"","author":"","robots":""}', 42, '2010-06-28 13:28:33', 0, '0000-00-00 00:00:00', 0, '*'),
(7, 32, 1, 11, 12, 1, 'uncategorised', 'com_users.notes', 'Uncategorised', 'uncategorised', '', '', 1, 0, '0000-00-00 00:00:00', 1, '{"target":"","image":""}', '', '', '{"page_title":"","author":"","robots":""}', 42, '2010-06-28 13:28:33', 0, '0000-00-00 00:00:00', 0, '*');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_comprofiler`
--

CREATE TABLE IF NOT EXISTS `w96sn_comprofiler` (
  `id` int(11) NOT NULL DEFAULT '0',
  `idref` int(11) NOT NULL DEFAULT '42',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `points` float(10,2) NOT NULL DEFAULT '0.00',
  `dolg` float(10,2) NOT NULL DEFAULT '0.00',
  `min_points` float(10,2) NOT NULL DEFAULT '0.00',
  `max_points` float(10,2) NOT NULL DEFAULT '0.00',
  `dov` tinyint(2) NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL DEFAULT '0',
  `count1` int(11) NOT NULL,
  `message` text,
  `hits` int(11) NOT NULL DEFAULT '0',
  `message_last_sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `message_number_sent` int(11) NOT NULL DEFAULT '0',
  `avatar` varchar(255) DEFAULT NULL,
  `avatarapproved` tinyint(4) NOT NULL DEFAULT '1',
  `approved` tinyint(4) NOT NULL DEFAULT '1',
  `confirmed` tinyint(4) NOT NULL DEFAULT '1',
  `lastupdatedate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `registeripaddr` varchar(50) NOT NULL DEFAULT '',
  `cbactivation` varchar(50) NOT NULL DEFAULT '',
  `banned` tinyint(4) NOT NULL DEFAULT '0',
  `banneddate` datetime DEFAULT NULL,
  `unbanneddate` datetime DEFAULT NULL,
  `bannedby` int(11) DEFAULT NULL,
  `unbannedby` int(11) DEFAULT NULL,
  `bannedreason` mediumtext,
  `acceptedterms` tinyint(1) NOT NULL DEFAULT '0',
  `sett1` tinyint(2) NOT NULL DEFAULT '1',
  `sett2` tinyint(2) NOT NULL DEFAULT '1',
  `sett3` tinyint(2) NOT NULL DEFAULT '1',
  `sett4` tinyint(2) NOT NULL DEFAULT '1',
  `sett5` tinyint(2) NOT NULL DEFAULT '1',
  `sett6` tinyint(2) NOT NULL DEFAULT '1',
  `sett7` tinyint(2) NOT NULL DEFAULT '1',
  `sett8` tinyint(2) NOT NULL DEFAULT '1',
  `sett9` tinyint(2) NOT NULL DEFAULT '1',
  `sett10` tinyint(2) NOT NULL DEFAULT '0',
  `sett11` tinyint(2) NOT NULL DEFAULT '1',
  `cb_telnum` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  KEY `apprconfbanid` (`approved`,`confirmed`,`banned`,`id`),
  KEY `avatappr_apr_conf_ban_avatar` (`avatarapproved`,`approved`,`confirmed`,`banned`,`avatar`),
  KEY `lastupdatedate` (`lastupdatedate`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_comprofiler`
--

INSERT INTO `w96sn_comprofiler` (`id`, `idref`, `user_id`, `firstname`, `middlename`, `lastname`, `points`, `dolg`, `min_points`, `max_points`, `dov`, `rating`, `count1`, `message`, `hits`, `message_last_sent`, `message_number_sent`, `avatar`, `avatarapproved`, `approved`, `confirmed`, `lastupdatedate`, `registeripaddr`, `cbactivation`, `banned`, `banneddate`, `unbanneddate`, `bannedby`, `unbannedby`, `bannedreason`, `acceptedterms`, `sett1`, `sett2`, `sett3`, `sett4`, `sett5`, `sett6`, `sett7`, `sett8`, `sett9`, `sett10`, `sett11`, `cb_telnum`) VALUES
(165, 42, 165, 'тест', 'тест', 'тест', 0.00, 0.00, 0.00, 0.00, 0, 0, 0, NULL, 9, '0000-00-00 00:00:00', 0, NULL, 1, 1, 1, '0000-00-00 00:00:00', '84.204.102.213,192.168.1.101', '', 0, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, '123456');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_comprofiler_fields`
--

CREATE TABLE IF NOT EXISTS `w96sn_comprofiler_fields` (
  `fieldid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `tablecolumns` text NOT NULL,
  `table` varchar(50) NOT NULL DEFAULT '#__comprofiler',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `type` varchar(50) NOT NULL DEFAULT '',
  `maxlength` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `required` tinyint(4) DEFAULT '0',
  `tabid` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `cols` int(11) DEFAULT NULL,
  `rows` int(11) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL,
  `default` mediumtext,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `registration` tinyint(1) NOT NULL DEFAULT '0',
  `profile` tinyint(1) NOT NULL DEFAULT '1',
  `displaytitle` tinyint(1) NOT NULL DEFAULT '1',
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  `searchable` tinyint(1) NOT NULL DEFAULT '0',
  `calculated` tinyint(1) NOT NULL DEFAULT '0',
  `sys` tinyint(4) NOT NULL DEFAULT '0',
  `pluginid` int(11) NOT NULL DEFAULT '0',
  `params` mediumtext,
  PRIMARY KEY (`fieldid`),
  KEY `tabid_pub_prof_order` (`tabid`,`published`,`profile`,`ordering`),
  KEY `readonly_published_tabid` (`readonly`,`published`,`tabid`),
  KEY `registration_published_order` (`registration`,`published`,`ordering`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Дамп данных таблицы `w96sn_comprofiler_fields`
--

INSERT INTO `w96sn_comprofiler_fields` (`fieldid`, `name`, `tablecolumns`, `table`, `title`, `description`, `type`, `maxlength`, `size`, `required`, `tabid`, `ordering`, `cols`, `rows`, `value`, `default`, `published`, `registration`, `profile`, `displaytitle`, `readonly`, `searchable`, `calculated`, `sys`, `pluginid`, `params`) VALUES
(42, 'username', 'username', '#__users', 'Логин', '_UE_VALID_UNAME', 'predefined', 0, 0, 1, 11, -46, 0, 0, NULL, '', 1, 1, 0, 0, 0, 0, 1, 1, 1, 'fieldMinLength=\nfieldValidateExpression=\npregexp=/^.*$/\npregexperror=Not a valid input\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit='),
(49, 'lastupdatedate', 'lastupdatedate', '#__comprofiler', '_UE_LASTUPDATEDON', '', 'datetime', 0, 0, 0, 21, -18, 0, 0, NULL, '', 1, 0, 0, 0, 1, 0, 1, 1, 1, 'year_min=-110\nyear_max=+25\nfield_display_by=2\nfield_display_years_text=1\nfield_display_ago_text=1\nfield_search_by=0\nduration_title=\nshow_date_time=0'),
(48, 'lastname', 'lastname', '#__comprofiler', '_UE_YOUR_LNAME', '_UE_REGWARN_LNAME', 'predefined', NULL, NULL, 1, 11, -53, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 1, 1, 1, 1, NULL),
(47, 'middlename', 'middlename', '#__comprofiler', '_UE_YOUR_MNAME', '_UE_REGWARN_MNAME', 'predefined', 0, 0, 1, 11, -48, 0, 0, NULL, '', 1, 1, 1, 1, 0, 1, 1, 1, 1, 'fieldMinLength=\nfieldValidateExpression=\npregexp=/^.*$/\npregexperror=Not a valid input\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit='),
(46, 'firstname', 'firstname', '#__comprofiler', '_UE_YOUR_FNAME', '_UE_REGWARN_FNAME', 'predefined', NULL, NULL, 1, 11, -49, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 0, 1, 1, 1, 1, NULL),
(45, 'formatname', '', '#__comprofiler', '_UE_FORMATNAME', '', 'formatname', NULL, NULL, 0, 11, -52, NULL, NULL, NULL, NULL, 1, 0, 0, 0, 1, 0, 1, 1, 1, NULL),
(29, 'avatar', 'avatar,avatarapproved', '#__comprofiler', '_UE_IMAGE', '', 'image', 0, 0, 0, 20, -54, 0, 0, NULL, '', 1, 0, 1, 0, 0, 0, 1, 1, 1, 'avatarHeight=\navatarWidth=\navatarSize=\nthumbHeight=\nthumbWidth='),
(28, 'registerDate', 'registerDate', '#__users', '_UE_MEMBERSINCE', '', 'datetime', NULL, NULL, 0, 21, -20, NULL, NULL, NULL, NULL, 1, 0, 1, 1, 1, 0, 1, 1, 1, 'field_display_by=2'),
(27, 'lastvisitDate', 'lastvisitDate', '#__users', '_UE_LASTONLINE', '', 'datetime', NULL, NULL, 0, 21, -19, NULL, NULL, NULL, NULL, 1, 0, 1, 1, 1, 0, 1, 1, 1, 'field_display_by=2'),
(26, 'onlinestatus', '', '#__comprofiler', '_UE_ONLINESTATUS', '', 'status', NULL, NULL, 0, 21, -21, NULL, NULL, NULL, NULL, 1, 0, 1, 1, 0, 0, 1, 1, 1, NULL),
(41, 'name', 'name', '#__users', '_UE_NAME', '_UE_REGWARN_NAME', 'predefined', 0, 0, 1, 11, -51, 0, 0, NULL, '', 0, 0, 0, 1, 0, 1, 1, 1, 1, 'fieldMinLength=\nfieldValidateExpression=\npregexp=/^.*$/\npregexperror=Not a valid input\nfieldValidateForbiddenList_register=http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit='),
(50, 'email', 'email', '#__users', '_UE_EMAIL', '_UE_REGWARN_MAIL', 'primaryemailaddress', NULL, NULL, 1, 11, -47, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 0, 0, 1, 1, 1, NULL),
(25, 'hits', 'hits', '#__comprofiler', 'Просмотров', '_UE_HITS_DESC', 'counter', 0, 0, 0, 21, -22, 0, 0, NULL, '', 1, 0, 1, 1, 1, 0, 1, 1, 1, ''),
(51, 'password', 'password', '#__users', '_UE_PASS', '_UE_VALID_PASS', 'password', 50, 0, 1, 11, -45, 0, 0, NULL, '', 1, 1, 0, 1, 0, 0, 1, 1, 1, 'verifyPassTitle=_UE_VERIFY_SOMETHING\nfieldMinLength=6\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input\nfieldValidateForbiddenList_register=\nfieldValidateForbiddenList_edit='),
(52, 'params', 'params', '#__users', '_UE_USERPARAMS', '', 'userparams', NULL, NULL, 0, 11, -30, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 0, 0, 1, 1, 1, NULL),
(24, 'connections', '', '#__comprofiler', '_UE_CONNECTION', '', 'connections', NULL, NULL, 0, 21, -17, NULL, NULL, NULL, NULL, 1, 0, 1, 1, 1, 0, 1, 1, 1, NULL),
(23, 'forumrank', '', '#__comprofiler', '_UE_FORUM_FORUMRANKING', '', 'forumstats', NULL, NULL, 1, 21, -16, NULL, NULL, NULL, NULL, 1, 0, 1, 1, 1, 0, 1, 1, 4, NULL),
(22, 'forumposts', '', '#__comprofiler', '_UE_FORUM_TOTALPOSTS', '', 'forumstats', NULL, NULL, 1, 21, -15, NULL, NULL, NULL, NULL, 1, 0, 1, 1, 1, 0, 1, 1, 4, NULL),
(21, 'forumkarma', '', '#__comprofiler', '_UE_FORUM_KARMA', '', 'forumstats', NULL, NULL, 1, 21, -14, NULL, NULL, NULL, NULL, 1, 0, 1, 1, 1, 0, 1, 1, 4, NULL),
(20, 'forumsignature', '', '#__comprofiler', '_UE_FB_SIGNATURE', '', 'forumsettings', NULL, NULL, 0, 13, 3, 60, 5, NULL, NULL, 1, 0, 0, 1, 0, 0, 0, 1, 4, NULL),
(19, 'forumview', '', '#__comprofiler', '_UE_FB_VIEWTYPE_TITLE', '', 'forumsettings', NULL, NULL, 1, 13, 2, NULL, NULL, NULL, 'flat', 1, 0, 0, 1, 0, 0, 0, 1, 4, NULL),
(18, 'forumorder', '', '#__comprofiler', '_UE_FB_ORDERING_TITLE', '', 'forumsettings', NULL, NULL, 1, 13, 1, NULL, NULL, NULL, '0', 1, 0, 0, 1, 0, 0, 0, 1, 4, NULL),
(55, 'cb_telnum', 'cb_telnum', '#__comprofiler', 'Телефон', '', 'text', 0, 0, 1, 11, -29, 0, 0, NULL, '', 1, 1, 0, 0, 0, 0, 0, 0, 1, 'fieldMinLength=0\nfieldValidateExpression=\npregexp=/^.*$/\nfieldValidateInBrowser=1\npregexperror=Not a valid input\nfieldValidateForbiddenList_register=123456,http:,https:,mailto:,//.[url],<a,</a>,&#\nfieldValidateForbiddenList_edit=');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_comprofiler_field_values`
--

CREATE TABLE IF NOT EXISTS `w96sn_comprofiler_field_values` (
  `fieldvalueid` int(11) NOT NULL AUTO_INCREMENT,
  `fieldid` int(11) NOT NULL DEFAULT '0',
  `fieldtitle` varchar(255) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `sys` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fieldvalueid`),
  KEY `fieldid_ordering` (`fieldid`,`ordering`),
  KEY `fieldtitle_id` (`fieldtitle`,`fieldid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_comprofiler_lists`
--

CREATE TABLE IF NOT EXISTS `w96sn_comprofiler_lists` (
  `listid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` mediumtext,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `viewaccesslevel` int(10) unsigned NOT NULL DEFAULT '0',
  `usergroupids` varchar(255) DEFAULT NULL,
  `useraccessgroupid` int(9) NOT NULL DEFAULT '18',
  `sortfields` varchar(255) DEFAULT NULL,
  `filterfields` mediumtext,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `col1title` varchar(255) DEFAULT NULL,
  `col1enabled` tinyint(1) NOT NULL DEFAULT '0',
  `col1fields` mediumtext,
  `col2title` varchar(255) DEFAULT NULL,
  `col2enabled` tinyint(1) NOT NULL DEFAULT '0',
  `col1captions` tinyint(1) NOT NULL DEFAULT '0',
  `col2fields` mediumtext,
  `col2captions` tinyint(1) NOT NULL DEFAULT '0',
  `col3title` varchar(255) DEFAULT NULL,
  `col3enabled` tinyint(1) NOT NULL DEFAULT '0',
  `col3fields` mediumtext,
  `col3captions` tinyint(1) NOT NULL DEFAULT '0',
  `col4title` varchar(255) DEFAULT NULL,
  `col4enabled` tinyint(1) NOT NULL DEFAULT '0',
  `col4fields` mediumtext,
  `col4captions` tinyint(1) NOT NULL DEFAULT '0',
  `params` mediumtext,
  PRIMARY KEY (`listid`),
  KEY `pub_ordering` (`published`,`ordering`),
  KEY `default_published` (`default`,`published`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `w96sn_comprofiler_lists`
--

INSERT INTO `w96sn_comprofiler_lists` (`listid`, `title`, `description`, `published`, `default`, `viewaccesslevel`, `usergroupids`, `useraccessgroupid`, `sortfields`, `filterfields`, `ordering`, `col1title`, `col1enabled`, `col1fields`, `col2title`, `col2enabled`, `col1captions`, `col2fields`, `col2captions`, `col3title`, `col3enabled`, `col3fields`, `col3captions`, `col4title`, `col4enabled`, `col4fields`, `col4captions`, `params`) VALUES
(4, 'Список пользователей', '', 1, 1, 2, '1, 6, 7, 2, 3, 4, 5, 8', -1, '`lastname` ASC', '', 0, 'Ф.И.О. ↓', 1, '48|*|46|*|47', 'Друзья', 1, 0, '24', 0, 'Аватар', 1, '29', 0, 'Онлайн', 1, '26', 0, 'list_search=1\nlist_compare_types=0\nlist_limit=15\nlist_paging=1\nhotlink_protection=1');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_comprofiler_members`
--

CREATE TABLE IF NOT EXISTS `w96sn_comprofiler_members` (
  `referenceid` int(11) NOT NULL DEFAULT '0',
  `memberid` int(11) NOT NULL DEFAULT '0',
  `accepted` tinyint(1) NOT NULL DEFAULT '1',
  `pending` tinyint(1) NOT NULL DEFAULT '0',
  `membersince` date NOT NULL DEFAULT '0000-00-00',
  `reason` mediumtext,
  `description` varchar(255) DEFAULT NULL,
  `type` mediumtext,
  PRIMARY KEY (`referenceid`,`memberid`),
  KEY `pamr` (`pending`,`accepted`,`memberid`,`referenceid`),
  KEY `aprm` (`accepted`,`pending`,`referenceid`,`memberid`),
  KEY `membrefid` (`memberid`,`referenceid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_comprofiler_plugin`
--

CREATE TABLE IF NOT EXISTS `w96sn_comprofiler_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `element` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(100) DEFAULT '',
  `folder` varchar(100) DEFAULT '',
  `backend_menu` varchar(255) NOT NULL DEFAULT '',
  `access` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `published` tinyint(3) NOT NULL DEFAULT '0',
  `iscore` tinyint(3) NOT NULL DEFAULT '0',
  `client_id` tinyint(3) NOT NULL DEFAULT '0',
  `checked_out` int(11) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `params` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_folder` (`published`,`client_id`,`access`,`folder`),
  KEY `type_pub_order` (`type`,`published`,`ordering`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=503 ;

--
-- Дамп данных таблицы `w96sn_comprofiler_plugin`
--

INSERT INTO `w96sn_comprofiler_plugin` (`id`, `name`, `element`, `type`, `folder`, `backend_menu`, `access`, `ordering`, `published`, `iscore`, `client_id`, `checked_out`, `checked_out_time`, `params`) VALUES
(4, 'Forum integration', 'cb.simpleboardtab', 'user', 'plug_cbsimpleboardtab', '', 0, 2, 1, 1, 0, 0, '0000-00-00 00:00:00', 'forumType=4\nsidebarMode=0\nsidebarBeginnerName=0\nsidebarBeginnerAvatar=0\nsidebarBeginner1=0\nsidebarBeginner2=0\nsidebarBeginner3=0\nsidebarBeginner4=0\nsidebarBeginner5=0\nsidebarBeginner6=0\nsidebarBeginner7=0\nsidebarBeginner8=0\nsidebarBeginner9=0\nsidebarBeginner10=0\nsidebarBeginner11=0\nsidebarBeginner12=0\nsidebarBeginner13=0\nsidebarBeginner14=0\nsidebarBeginner15=0\nsidebarBeginner16=0\nsidebarBeginner17=0\nsidebarBeginner18=0\nsidebarBeginner19=0\nsidebarBeginner20=0\nsidebarBeginner21=0\nsidebarAdvancedExists=\nsidebarAdvancedDeleted=\nsidebarAdvancedPublic=\nstatDisplay=1\nTemplateRank=/template/default/images\nstatRanking=1\nstatRankingImg=1\nstatPosts=1\nstatKarma=1'),
(3, 'Content Author', 'cb.authortab', 'user', 'plug_cbmamboauthortab', '', 0, 7, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(2, 'CB Connections', 'cb.connections', 'user', 'plug_cbconnections', '', 0, 6, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(1, 'CB Core', 'cb.core', 'user', 'plug_cbcore', '', 0, 4, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(5, 'Mamblog Blog', 'cb.mamblogtab', 'user', 'plug_cbmamblogtab', '', 0, 8, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(6, 'YaNC Newsletters', 'yanc', 'user', 'plug_yancintegration', '', 0, 9, 0, 1, 0, 0, '0000-00-00 00:00:00', ''),
(7, 'Default', 'default', 'templates', 'default', '', 0, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(8, 'WinClassic', 'winclassic', 'templates', 'winclassic', '', 0, 2, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(9, 'WebFX', 'webfx', 'templates', 'webfx', '', 0, 3, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(10, 'OSX', 'osx', 'templates', 'osx', '', 0, 4, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(11, 'Luna', 'luna', 'templates', 'luna', '', 0, 5, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(12, 'Dark', 'dark', 'templates', 'dark', '', 0, 6, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(13, 'Default language (English)', 'default_language', 'language', 'default_language', '', 0, -1, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(14, 'CB Menu', 'cb.menu', 'user', 'plug_cbmenu', '', 0, 5, 1, 1, 0, 0, '0000-00-00 00:00:00', ''),
(15, 'Private Message System', 'pms.mypmspro', 'user', 'plug_pms_mypmspro', '', 0, 1, 1, 1, 0, 0, '0000-00-00 00:00:00', 'pmsType=4\npmsMenuText=_UE_PM_USER\npmsMenuDesc=_UE_MENU_PM_USER_DESC\npmsMenuInboxText=_UE_PM_INBOX\npmsMenuInboxDesc=_UE_MENU_PM_INBOX_DESC\npmsMenuOutboxText=_UE_PM_OUTBOX\npmsMenuOutboxDesc=_UE_MENU_PM_OUTBOX_DESC\npmsMenuTrashboxText=_UE_PM_TRASHBOX\npmsMenuTrashboxDesc=_UE_MENU_PM_TRASHBOX_DESC\npmsMenuOptionsText=_UE_PM_OPTIONS\npmsMenuOptionsDesc=_UE_MENU_PM_OPTIONS_DESC\npmsUserDeleteOption=1\npmsUserFunction=1'),
(500, 'ru-RU', 'language', 'language', 'ru-ru', '', 0, 99, 1, 0, 0, 0, '0000-00-00 00:00:00', ''),
(501, 'AdsManager-Tab', 'adsmanager.plugin', 'user', 'plug_adsmanager-tab', '', 0, 3, 1, 0, 0, 0, '0000-00-00 00:00:00', 'itemid='),
(502, 'CB AlphaUserPoints', 'alphauserpoints', 'user', 'plug_cbalphauserpoints', '', 0, 10, 1, 0, 0, 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_comprofiler_sessions`
--

CREATE TABLE IF NOT EXISTS `w96sn_comprofiler_sessions` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `ui` tinyint(4) NOT NULL DEFAULT '0',
  `incoming_ip` varchar(39) NOT NULL DEFAULT '',
  `client_ip` varchar(39) NOT NULL DEFAULT '',
  `session_id` varchar(33) NOT NULL DEFAULT '',
  `session_data` mediumtext NOT NULL,
  `expiry_time` int(14) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`session_id`),
  KEY `expiry_time` (`expiry_time`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_comprofiler_tabs`
--

CREATE TABLE IF NOT EXISTS `w96sn_comprofiler_tabs` (
  `tabid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `description` text,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `ordering_register` int(11) NOT NULL DEFAULT '10',
  `width` varchar(10) NOT NULL DEFAULT '.5',
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `pluginclass` varchar(255) DEFAULT NULL,
  `pluginid` int(11) DEFAULT NULL,
  `fields` tinyint(1) NOT NULL DEFAULT '1',
  `params` mediumtext,
  `sys` tinyint(4) NOT NULL DEFAULT '0',
  `displaytype` varchar(255) NOT NULL DEFAULT '',
  `position` varchar(255) NOT NULL DEFAULT '',
  `viewaccesslevel` int(10) unsigned NOT NULL DEFAULT '0',
  `useraccessgroupid` int(9) NOT NULL DEFAULT '-2',
  PRIMARY KEY (`tabid`),
  KEY `enabled_position_ordering` (`enabled`,`position`,`ordering`),
  KEY `orderreg_enabled_pos_order` (`enabled`,`ordering_register`,`position`,`ordering`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Дамп данных таблицы `w96sn_comprofiler_tabs`
--

INSERT INTO `w96sn_comprofiler_tabs` (`tabid`, `title`, `description`, `ordering`, `ordering_register`, `width`, `enabled`, `pluginclass`, `pluginid`, `fields`, `params`, `sys`, `displaytype`, `position`, `viewaccesslevel`, `useraccessgroupid`) VALUES
(20, '_UE_PORTRAIT', '', -7, 10, '1', 1, 'getPortraitTab', 1, 1, '', 1, 'html', 'cb_middle', 2, -2),
(19, '_UE_PROFILE_PAGE_TITLE', '', -8, 10, '1', 1, 'getPageTitleTab', 1, 0, 'title=_UE_PROFILE_TITLE_TEXT', 1, 'html', 'cb_head', 2, -2),
(18, '_UE_CONNECTIONPATHS', '', -9, 10, '1', 1, 'getConnectionPathsTab', 2, 0, '', 1, 'html', 'cb_head', 2, -2),
(17, '_UE_MENU', '', -10, 10, '1', 1, 'getMenuTab', 14, 0, 'firstMenuName=\nfirstSubMenuName=\nfirstSubMenuHref=\nsecondSubMenuName=\nsecondSubMenuHref=', 1, 'html', 'cb_head', 2, -2),
(16, '_UE_NEWSLETTER_HEADER', '_UE_NEWSLETTER_INTRODCUTION', 99, 10, '1', 0, 'getNewslettersTab', 6, 0, NULL, 1, 'tab', 'cb_tabmain', 0, -2),
(15, '_UE_CONNECTION', '', 99, 10, '1', 1, 'getConnectionTab', 2, 0, 'con_ShowTitle=1\ncon_ShowSummary=0\ncon_SummaryEntries=4\ncon_PagingEnabled=1\ncon_EntriesPerPage=10', 1, 'tab', 'cb_tabmain', 2, -2),
(14, '_UE_BLOGTAB', '', -1, 10, '1', 0, 'getBlogTab', 5, 0, NULL, 1, 'tab', 'cb_tabmain', 0, -2),
(13, '_UE_FORUMTAB', '', -2, 10, '1', 1, 'getForumTab', 4, 1, 'postsNumber=10\npagingEnabled=0\nsearchEnabled=0', 1, 'tab', 'cb_tabmain', 2, -2),
(12, '_UE_AUTHORTAB', '', -3, 10, '1', 0, 'getAuthorTab', 3, 0, NULL, 1, 'tab', 'cb_tabmain', 0, -2),
(11, '_UE_CONTACT_INFO_HEADER', '', -4, 10, '1', 1, 'getContactTab', 1, 1, '', 2, 'tab', 'cb_tabmain', 2, -2),
(21, '_UE_USER_STATUS', '', -6, 10, '.5', 1, 'getStatusTab', 14, 1, '', 1, 'html', 'cb_right', 2, -2),
(22, '_UE_PMSTAB', '', -5, 10, '.5', 0, 'getmypmsproTab', 15, 0, 'showTitle=1\nshowSubject=1\nwidth=30\nheight=5', 1, 'html', 'cb_right', 2, -2),
(23, 'Объявления', '', 100, 10, '.5', 1, 'AdsManagerTab', 501, 0, '', 0, 'tab', 'cb_tabmain', 2, -2),
(24, 'AlphaUserPoints', '', 101, 10, '.5', 1, 'getAlphaUserPointsTab', 502, 0, '', 0, 'html', 'cb_head', 2, -2),
(25, 'AUP Medals', '', 102, 10, '.5', 0, 'getAUPMedalsTab', 502, 0, '', 0, 'tab', 'cb_tabmain', 0, -1);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_comprofiler_userreports`
--

CREATE TABLE IF NOT EXISTS `w96sn_comprofiler_userreports` (
  `reportid` int(11) NOT NULL AUTO_INCREMENT,
  `reporteduser` int(11) NOT NULL DEFAULT '0',
  `reportedbyuser` int(11) NOT NULL DEFAULT '0',
  `reportedondate` date NOT NULL DEFAULT '0000-00-00',
  `reportexplaination` text NOT NULL,
  `reportedstatus` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`reportid`),
  KEY `status_user_date` (`reportedstatus`,`reporteduser`,`reportedondate`),
  KEY `reportedbyuser_ondate` (`reportedbyuser`,`reportedondate`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_comprofiler_views`
--

CREATE TABLE IF NOT EXISTS `w96sn_comprofiler_views` (
  `viewer_id` int(11) NOT NULL DEFAULT '0',
  `profile_id` int(11) NOT NULL DEFAULT '0',
  `lastip` varchar(50) NOT NULL DEFAULT '',
  `lastview` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `viewscount` int(11) NOT NULL DEFAULT '0',
  `vote` tinyint(3) DEFAULT NULL,
  `lastvote` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`viewer_id`,`profile_id`,`lastip`),
  KEY `lastview` (`lastview`),
  KEY `profile_id_lastview` (`profile_id`,`lastview`,`viewer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_contact_details`
--

CREATE TABLE IF NOT EXISTS `w96sn_contact_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `con_position` varchar(255) DEFAULT NULL,
  `address` text,
  `suburb` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `postcode` varchar(100) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `misc` mediumtext,
  `image` varchar(255) DEFAULT NULL,
  `imagepos` varchar(20) DEFAULT NULL,
  `email_to` varchar(255) DEFAULT NULL,
  `default_con` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `params` text NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `catid` int(11) NOT NULL DEFAULT '0',
  `access` int(10) unsigned NOT NULL DEFAULT '0',
  `mobile` varchar(255) NOT NULL DEFAULT '',
  `webpage` varchar(255) NOT NULL DEFAULT '',
  `sortname1` varchar(255) NOT NULL,
  `sortname2` varchar(255) NOT NULL,
  `sortname3` varchar(255) NOT NULL,
  `language` char(7) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created_by_alias` varchar(255) NOT NULL DEFAULT '',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `metadata` text NOT NULL,
  `featured` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'Set if article is featured.',
  `xreference` varchar(50) NOT NULL COMMENT 'A reference to enable linkages to external data sets.',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`published`),
  KEY `idx_catid` (`catid`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_featured_catid` (`featured`,`catid`),
  KEY `idx_language` (`language`),
  KEY `idx_xreference` (`xreference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_content`
--

CREATE TABLE IF NOT EXISTS `w96sn_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asset_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to the #__assets table.',
  `title` varchar(255) NOT NULL DEFAULT '',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `title_alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '' COMMENT 'Deprecated in Joomla! 3.0',
  `introtext` mediumtext NOT NULL,
  `fulltext` mediumtext NOT NULL,
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `sectionid` int(10) unsigned NOT NULL DEFAULT '0',
  `mask` int(10) unsigned NOT NULL DEFAULT '0',
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created_by_alias` varchar(255) NOT NULL DEFAULT '',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `images` text NOT NULL,
  `urls` text NOT NULL,
  `attribs` varchar(5120) NOT NULL,
  `version` int(10) unsigned NOT NULL DEFAULT '1',
  `parentid` int(10) unsigned NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `access` int(10) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `metadata` text NOT NULL,
  `featured` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'Set if article is featured.',
  `language` char(7) NOT NULL COMMENT 'The language code for the article.',
  `xreference` varchar(50) NOT NULL COMMENT 'A reference to enable linkages to external data sets.',
  PRIMARY KEY (`id`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_catid` (`catid`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_featured_catid` (`featured`,`catid`),
  KEY `idx_language` (`language`),
  KEY `idx_xreference` (`xreference`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `w96sn_content`
--

INSERT INTO `w96sn_content` (`id`, `asset_id`, `title`, `alias`, `title_alias`, `introtext`, `fulltext`, `state`, `sectionid`, `mask`, `catid`, `created`, `created_by`, `created_by_alias`, `modified`, `modified_by`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `images`, `urls`, `attribs`, `version`, `parentid`, `ordering`, `metakey`, `metadesc`, `access`, `hits`, `metadata`, `featured`, `language`, `xreference`) VALUES
(1, 39, 'Подробно о главном:', 'start1', '', '<p style="text-align: left;"><span style="font-family: ''arial'', ''helvetica'', sans-serif; font-size: 14pt;">Подобные системы успешно развивали с 1976 года и называли их "Банк времени". В них использовалось время, как расчётная единица. Т.е. ценность всех услуг определялась по часам. Час работы дворника ровнялся часу работы профессора. В связи с этим создали нового типа системы. В которых ценность услуг ровняется их ценности в рублях. И трудности перестали существовать.</span></p>\r\n<p style="text-align: left;"><span style="font-family: ''arial'', ''helvetica'', sans-serif; font-size: 14pt;">Проблема развития подобных систем всегда существовала из-за недостатка коммуникаций. Так как у системы есть не существенный в наше время недостаток - необходимость в периодической связи с организатором. Это сейчас у нас есть сотовые, интернет и прочие коммуникации. А раньше не было.</span></p>\r\n<p style="text-align: left;"><span style="font-family: ''arial'', ''helvetica'', sans-serif; font-size: 14pt;">Проблема оценки товаров\\услуг будет решаться с бесплатной помощью организатора. При возникновении споров с оплатой услуг\\товаров и если обе стороны будут иметь равное количество аргументов, то спор решается в сторону движения денежных средств.</span></p>\r\n<p style="text-align: left;"><span style="font-family: ''arial'', ''helvetica'', sans-serif; font-size: 14pt;">Метода вступления в общество 2:</span></p>\r\n<p style="text-align: left;"><span style="font-family: ''arial'', ''helvetica'', sans-serif; font-size: 14pt;">1) Вы заключаете договор и вам оказывают помощь. Что бы начать пользоваться системой вы должны отработать либо отдать товаром полученную впервые помощь.</span></p>\r\n<p style="text-align: left;"><span style="font-family: ''arial'', ''helvetica'', sans-serif; font-size: 14pt;">2) Вы заключаете договор и вы первым оказываете помощь. Тогда вам необходимо заработать очки доверия. Вычисляемые по условию договора.</span></p>\r\n<p style="text-align: left;"><span style="font-family: ''arial'', ''helvetica'', sans-serif; font-size: 14pt;">Любые вопросы можете обсудить на <a href="index.php/forum2">форуме</a>.</span></p>\r\n<p style="text-align: left;"><span style="font-family: ''arial'', ''helvetica'', sans-serif; font-size: 14pt;">Ссылки по теме:</span></p>\r\n<p style="text-align: left;"><a href="http://www.1tv.ru/news/social/141868"><span style="font-family: ''arial'', ''helvetica'', sans-serif; font-size: 14pt;">Новости первого канала</span></a></p>\r\n<p style="text-align: left;"><a href="http://ru.wikipedia.org/wiki/Банк_времени"><span style="font-family: ''arial'', ''helvetica'', sans-serif; font-size: 14pt;">Википедия</span></a></p>\r\n<p style="text-align: left;"><span style="font-family: ''arial'', ''helvetica'', sans-serif; font-size: 14pt;"><a href="http://timebank.ru/">Российский сайт</a> и <a href="http://bank-vremeni.ru/">ещё один</a></span></p>\r\n<p style="text-align: left;"><a href="http://bankvremeni.org/lets_tb.jsf"><span style="font-family: ''arial'', ''helvetica'', sans-serif; font-size: 14pt;">Список подобных сайтов</span></a></p>', '', 1, 0, 0, 2, '2012-02-22 16:42:45', 42, '', '0000-00-00 00:00:00', 0, 42, '2013-02-07 20:19:33', '2012-02-22 16:42:45', '0000-00-00 00:00:00', '{"image_intro":"","float_intro":"","image_intro_alt":"","image_intro_caption":"","image_fulltext":"","float_fulltext":"","image_fulltext_alt":"","image_fulltext_caption":""}', '{"urla":null,"urlatext":"","targeta":"","urlb":null,"urlbtext":"","targetb":"","urlc":null,"urlctext":"","targetc":""}', '{"show_title":"","link_titles":"","show_intro":"","show_category":"","link_category":"","show_parent_category":"","link_parent_category":"","show_author":"","link_author":"","show_create_date":"","show_modify_date":"","show_publish_date":"","show_item_navigation":"","show_icons":"","show_print_icon":"","show_email_icon":"","show_vote":"","show_hits":"","show_noauth":"","urls_position":"","alternative_readmore":"","article_layout":"","show_publishing_options":"","show_article_options":"","show_urls_images_backend":"","show_urls_images_frontend":""}', 1, 0, 2, '', '', 1, 5, '{"robots":"","author":"","rights":"","xreference":""}', 0, '*', ''),
(2, 40, 'Правила регистрации', 'pravila', '', '<p style="text-align: center;"><span style="font-size: 12pt;"><strong>Соглашение</strong></span></p>\r\n<p><span style="font-size: 12pt;">Автономная некоммерческая организация «Банк времени Свобода», именуемая в дальнейшем организатор, и клиент Банка времени, именуемый в дальнейшем участник, заключают соглашение о сотрудничестве. Соглашением оговариваются права и обязанности сторон в ходе вышеуказанного сотрудничества.</span></p>\r\n<p><span style="font-size: 12pt;"><strong>1. Суть участия</strong></span></p>\r\n<p><span style="font-size: 12pt;">1.1. Участник, один из многих, обязан обменивать заявленные на сайте услуги на часы и по обоюдному согласию обменивать на часы товары другим участникам. При этом он должен через сайт сообщать организатору всю информацию о произошедшем событии, а именно:</span></p>\r\n<p><span style="font-size: 12pt;">- количество часов, и за какие товары и услуги они перечислены другому участнику;</span></p>\r\n<p><span style="font-size: 12pt;">- данные о личности обоих сторон участников;</span></p>\r\n<p><span style="font-size: 12pt;">1.2. Организатор обязуется:</span></p>\r\n<p><span style="font-size: 12pt;">- вести учёт часов и публиковать состояние счёта в разрезе каждого участника;</span></p>\r\n<p><span style="font-size: 12pt;">- вести учёт перечня имеющихся у всех участников услуг и товаров;</span></p>\r\n<p><span style="font-size: 12pt;">- развивать и поддерживать работоспособность сайта;</span></p>\r\n<p><span style="font-size: 12pt;">- предоставить участнику любую интересующую информацию и консультацию, касающуюся организации по телефону, на встречах или через интернет.</span></p>\r\n<p><span style="font-size: 12pt;"><strong>2. Общие правила</strong></span></p>\r\n<p><span style="font-size: 12pt;">2.1 Клиентом Банка времени считается физическое или юридическое лицо, зарегистрировавшееся на официальном сайте Банка времени (timebankspb.ru), в дальнейшем сайт, прошедшее информационную/личную встречу и заполнившее/предоставившее все необходимые документы;</span></p>\r\n<p><span style="font-size: 12pt;">2.2. После заключения настоящих правил участник обязуется записать все услуги и примерное время, в которое может их оказывать в разделе «Предложение» в течение 3 дней. Так же по желанию участника можно указать список товаров, которые он хотел бы получить от других участников за часы;</span></p>\r\n<p><span style="font-size: 12pt;">2.3. В дальнейшем участник с помощью сайта может добавлять или удалять те услуги, которые он обязан оказывать другим участникам;</span></p>\r\n<p><span style="font-size: 12pt;">2.4. Если у участника не остаётся ни одной услуги, то организатор может удалить аккаунт участника. В отдельных случаях, по желанию организатора, участника можно оставить;</span></p>\r\n<p><span style="font-size: 12pt;">2.5 Пределы максимума и минимума часов рассчитываются по формулам, приведённым в приложении 1;</span></p>\r\n<p><span style="font-size: 12pt;">2.6 Организатор вправе удалять объявления участника, если тот не предоставил необходимые документы на выполнение услуг или продажу товаров;</span></p>\r\n<p><span style="font-size: 12pt;">2.7. Пока пригласивший участника не решит, что участник заслуживает доверия минимум и максимум участника выставляются вручную по желанию организатора либо пригласившего;</span></p>\r\n<p><span style="font-size: 12pt;">2.8. Если новый участник не оправдает доверия, то пригласивший после исключения нового участника обязан будет отдать свои часы по количеству компенсации, если она будет;</span></p>\r\n<p><span style="font-size: 12pt;">2.9. Время работы организатора с 18-00 до 00:00 по Москве и может в дальнейшем меняться;</span></p>\r\n<p><span style="font-size: 12pt;">2.10. Участник обязан оказывать услуги всем остальным участникам. Услуга, оказывается, по обоюдной договорённости обеих сторон. В свободное от других работ для обеих сторон время. Отказ помогать другим участникам по своим направлениям, объявленных на сайте в разделе «предложения», является причиной исключения участника. Временно отказаться от оказания услуги участник может лишь в одном случае – когда он хочет потратить свои часы и если количество его часов больше нуля, исключительно на время траты часов;</span></p>\r\n<p><span style="font-size: 12pt;">2.11. За несоблюдение правил участия организатор вправе удалить участника;</span></p>\r\n<p><span style="font-size: 12pt;">2.12. При удалении участника, в случае количества часов меньше нуля, участник обязуется восстановить состояние счёта до нуля или выше своими услугами или товарами. Либо выплатить компенсацию иной валютой, эквивалентной по стоимости количеству часов меньше нуля. При распределении валюты организатор имеет право отнять часы у участников, которым принадлежит выплата;</span></p>\r\n<p><span style="font-size: 12pt;">2.13. При отказе, от выплаты бывшим участником дальнейшие споры разрешаются в судебном порядке;</span></p>\r\n<p><span style="font-size: 12pt;">2.14. Если активный участник достиг максимума или минимум часов, то при следующей операции с часами часы не должны превышать минимум или максимум иначе они не будут начислены, либо сняты;</span></p>\r\n<p><span style="font-size: 12pt;">2.15. Организатор, как один из участников, вправе собирать добровольный налог с участников (включая самого себя) в виде часов, если это нужно для всей организации либо группы участников. Любой участник может свободно узнать, куда были потрачены часы;</span></p>\r\n<p><span style="font-size: 12pt;">2.16. Оценка товаров и услуг происходит исходя из их потребности и договорённости между покупателем и продавцом. Для удобства можно использовать 1 час = 1 рубль;</span></p>\r\n<p><span style="font-size: 12pt;">2.17. Все операции участников с часами открыты для всех участников, но не публикуются. Операции приватного характера закрыты. При спорных разбирательствах операции приватного характера открываются;</span></p>\r\n<p><span style="font-size: 12pt;">2.18. Организатор вправе в одностороннем порядке исключить участника при условии наличия отрицательного количества часов у участника. Удаление происходит в соответствии с пунктом 2.12;</span></p>\r\n<p><span style="font-size: 12pt;">2.19 Объявления на сайте подвергаются цензуре со стороны организатора.</span></p>\r\n<p><span style="font-size: 12pt;"><strong>3. Ответственность сторон и порядок разрешения споров</strong></span></p>\r\n<p><span style="font-size: 12pt;">3.1. В случае не исполнения или ненадлежащего исполнения обязательств по настоящим правилам, стороны несут ответственность в соответствии с действующим законодательством РФ.</span></p>\r\n<p><span style="font-size: 12pt;"><strong>4. Форс-мажор</strong></span></p>\r\n<p><span style="font-size: 12pt;">4.1. Стороны освобождаются от ответственности за частичное или полное неисполнение обязательств по настоящим правилам, если это неисполнение явилось следствием обстоятельств непреодолимой силы, возникших после заключения правил в результате событий чрезвычайного характера, которые стороны не могли ни предвидеть, ни предотвратить разумными мерами;</span></p>\r\n<p><span style="font-size: 12pt;">4.2. К обстоятельствам непреодолимой силы относятся события, как: землетрясение, наводнение, пожар, а также забастовка, правительственные постановления или распоряжения государственных органов, военные действия любого характера, препятствующие выполнению данных правил;</span></p>\r\n<p><span style="font-size: 12pt;">4.3. Сторона, ссылающаяся на обстоятельства непреодолимой силы, обязана незамедлительно информировать другую сторону в устной или письменной форме, причем по требованию любой из сторон должны быть представлены все необходимые документы. </span><span style="font-size: 12pt;">В случае несвоевременного оповещения стороны несут ответственность, предусмотренную действующим законодательством и настоящими правилами.</span></p>', '', 1, 0, 0, 2, '2012-02-22 16:43:59', 42, '', '2012-08-03 20:49:39', 42, 0, '0000-00-00 00:00:00', '2012-02-22 16:43:59', '0000-00-00 00:00:00', '{"image_intro":"","float_intro":"","image_intro_alt":"","image_intro_caption":"","image_fulltext":"","float_fulltext":"","image_fulltext_alt":"","image_fulltext_caption":""}', '{"urla":null,"urlatext":"","targeta":"","urlb":null,"urlbtext":"","targetb":"","urlc":null,"urlctext":"","targetc":""}', '{"show_title":"","link_titles":"","show_intro":"","show_category":"","link_category":"","show_parent_category":"","link_parent_category":"","show_author":"","link_author":"","show_create_date":"","show_modify_date":"","show_publish_date":"","show_item_navigation":"","show_icons":"","show_print_icon":"","show_email_icon":"","show_vote":"","show_hits":"","show_noauth":"","urls_position":"","alternative_readmore":"","article_layout":"","show_publishing_options":"","show_article_options":"","show_urls_images_backend":"","show_urls_images_frontend":""}', 2, 0, 1, '', '', 1, 631, '{"robots":"","author":"","rights":"","xreference":""}', 0, '*', ''),
(3, 41, 'Правила форума', 'pravilaforum', '', '<p style="text-align: center;">Правила форума</p>\r\n<p>1. Порядок поведения на форуме.<br />1.1 Общение на форуме строится на принципах общепринятой морали и сетевого этикета.<br />1.2 Строго запрещено использование нецензурных слов, брани, оскорбительных выражений, в независимости от того, в каком виде и кому они были адресованы. В том числе при подмене букв символами.<br />1.3 Категорически запрещается любая реклама, в том числе реклама интернет-проектов (за исключением случаев предварительного согласования с администрацией).</p>\r\n<p>2. Публикация сообщений.<br />2.1 Название темы должно быть информативным, максимально четко отражая смысл проблемы.<br />2.2 Перед созданием новой темы убедитесь, что вы создаете ее в форуме соответствующей тематики, а также постарайтесь убедиться в том, что данный вопрос не обсуждался ранее.<br />2.3 Запрещено создание одинаковых тем в разных разделах и помещение одинаковых по смыслу сообщений в разные темы.<br />2.4 Старайтесь не делать грамматических ошибок в сообщениях - это создаст негативное впечатление о вас.</p>\r\n<p>3. Отношения между пользователями и администрацией.<br />3.1 В своих действиях администрация форума руководствуется здравым смыслом, логикой и внутренними правилами управления форумом.<br />3.2 Обсуждение действий администрации (администраторов и модераторов форума) категорически запрещается в любых форумах и темах, за исключением специализированного форума, предназначенного для обсуждения всех аспектов работы портала и всего форума.</p>\r\n<p>3.3 Администрация оставляет за собой право изменять правила с последующим уведомлением об этом пользователей форума. Все изменения и новации на форуме производятся с учетом мнений и интересов пользователей.</p>', '', 1, 0, 0, 2, '2012-02-22 16:44:50', 42, '', '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '2012-02-22 16:44:50', '0000-00-00 00:00:00', '{"image_intro":"","float_intro":"","image_intro_alt":"","image_intro_caption":"","image_fulltext":"","float_fulltext":"","image_fulltext_alt":"","image_fulltext_caption":""}', '{"urla":null,"urlatext":"","targeta":"","urlb":null,"urlbtext":"","targetb":"","urlc":null,"urlctext":"","targetc":""}', '{"show_title":"","link_titles":"","show_intro":"","show_category":"","link_category":"","show_parent_category":"","link_parent_category":"","show_author":"","link_author":"","show_create_date":"","show_modify_date":"","show_publish_date":"","show_item_navigation":"","show_icons":"","show_print_icon":"","show_email_icon":"","show_vote":"","show_hits":"","show_noauth":"","urls_position":"","alternative_readmore":"","article_layout":"","show_publishing_options":"","show_article_options":"","show_urls_images_backend":"","show_urls_images_frontend":""}', 1, 0, 0, '', '', 1, 0, '{"robots":"","author":"","rights":"","xreference":""}', 0, '*', '');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_content_frontpage`
--

CREATE TABLE IF NOT EXISTS `w96sn_content_frontpage` (
  `content_id` int(11) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_content_rating`
--

CREATE TABLE IF NOT EXISTS `w96sn_content_rating` (
  `content_id` int(11) NOT NULL DEFAULT '0',
  `rating_sum` int(10) unsigned NOT NULL DEFAULT '0',
  `rating_count` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_core_log_searches`
--

CREATE TABLE IF NOT EXISTS `w96sn_core_log_searches` (
  `search_term` varchar(128) NOT NULL DEFAULT '',
  `hits` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_extensions`
--

CREATE TABLE IF NOT EXISTS `w96sn_extensions` (
  `extension_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `element` varchar(100) NOT NULL,
  `folder` varchar(100) NOT NULL,
  `client_id` tinyint(3) NOT NULL,
  `enabled` tinyint(3) NOT NULL DEFAULT '1',
  `access` int(10) unsigned NOT NULL DEFAULT '1',
  `protected` tinyint(3) NOT NULL DEFAULT '0',
  `manifest_cache` text NOT NULL,
  `params` text NOT NULL,
  `custom_data` text NOT NULL,
  `system_data` text NOT NULL,
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ordering` int(11) DEFAULT '0',
  `state` int(11) DEFAULT '0',
  PRIMARY KEY (`extension_id`),
  KEY `element_clientid` (`element`,`client_id`),
  KEY `element_folder_clientid` (`element`,`folder`,`client_id`),
  KEY `extension` (`type`,`element`,`folder`,`client_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10049 ;

--
-- Дамп данных таблицы `w96sn_extensions`
--

INSERT INTO `w96sn_extensions` (`extension_id`, `name`, `type`, `element`, `folder`, `client_id`, `enabled`, `access`, `protected`, `manifest_cache`, `params`, `custom_data`, `system_data`, `checked_out`, `checked_out_time`, `ordering`, `state`) VALUES
(1, 'com_mailto', 'component', 'com_mailto', '', 0, 1, 1, 1, '{"legacy":false,"name":"com_mailto","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_MAILTO_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(2, 'com_wrapper', 'component', 'com_wrapper', '', 0, 1, 1, 1, '{"legacy":false,"name":"com_wrapper","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_WRAPPER_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(3, 'com_admin', 'component', 'com_admin', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_admin","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_ADMIN_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(4, 'com_banners', 'component', 'com_banners', '', 1, 1, 1, 0, '{"legacy":false,"name":"com_banners","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_BANNERS_XML_DESCRIPTION","group":""}', '{"purchase_type":"3","track_impressions":"0","track_clicks":"0","metakey_prefix":""}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(5, 'com_cache', 'component', 'com_cache', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_cache","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_CACHE_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(6, 'com_categories', 'component', 'com_categories', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_categories","type":"component","creationDate":"December 2007","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_CATEGORIES_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(7, 'com_checkin', 'component', 'com_checkin', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_checkin","type":"component","creationDate":"Unknown","author":"Joomla! Project","copyright":"(C) 2005 - 2008 Open Source Matters. All rights reserved.\\n\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_CHECKIN_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(8, 'com_contact', 'component', 'com_contact', '', 1, 1, 1, 0, '{"legacy":false,"name":"com_contact","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_CONTACT_XML_DESCRIPTION","group":""}', '{"show_contact_category":"hide","show_contact_list":"0","presentation_style":"sliders","show_name":"1","show_position":"1","show_email":"0","show_street_address":"1","show_suburb":"1","show_state":"1","show_postcode":"1","show_country":"1","show_telephone":"1","show_mobile":"1","show_fax":"1","show_webpage":"1","show_misc":"1","show_image":"1","image":"","allow_vcard":"0","show_articles":"0","show_profile":"0","show_links":"0","linka_name":"","linkb_name":"","linkc_name":"","linkd_name":"","linke_name":"","contact_icons":"0","icon_address":"","icon_email":"","icon_telephone":"","icon_mobile":"","icon_fax":"","icon_misc":"","show_headings":"1","show_position_headings":"1","show_email_headings":"0","show_telephone_headings":"1","show_mobile_headings":"0","show_fax_headings":"0","allow_vcard_headings":"0","show_suburb_headings":"1","show_state_headings":"1","show_country_headings":"1","show_email_form":"1","show_email_copy":"1","banned_email":"","banned_subject":"","banned_text":"","validate_session":"1","custom_reply":"0","redirect":"","show_category_crumb":"0","metakey":"","metadesc":"","robots":"","author":"","rights":"","xreference":""}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(9, 'com_cpanel', 'component', 'com_cpanel', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_cpanel","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_CPANEL_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10, 'com_installer', 'component', 'com_installer', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_installer","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_INSTALLER_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(11, 'com_languages', 'component', 'com_languages', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_languages","type":"component","creationDate":"2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_LANGUAGES_XML_DESCRIPTION","group":""}', '{"administrator":"ru-RU","site":"ru-RU"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(12, 'com_login', 'component', 'com_login', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_login","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_LOGIN_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(13, 'com_media', 'component', 'com_media', '', 1, 1, 0, 1, '{"legacy":false,"name":"com_media","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_MEDIA_XML_DESCRIPTION","group":""}', '{"upload_extensions":"bmp,csv,doc,gif,ico,jpg,jpeg,odg,odp,ods,odt,pdf,png,ppt,swf,txt,xcf,xls,BMP,CSV,DOC,GIF,ICO,JPG,JPEG,ODG,ODP,ODS,ODT,PDF,PNG,PPT,SWF,TXT,XCF,XLS","upload_maxsize":"10","file_path":"images","image_path":"images","restrict_uploads":"1","allowed_media_usergroup":"3","check_mime":"1","image_extensions":"bmp,gif,jpg,png","ignore_extensions":"","upload_mime":"image\\/jpeg,image\\/gif,image\\/png,image\\/bmp,application\\/x-shockwave-flash,application\\/msword,application\\/excel,application\\/pdf,application\\/powerpoint,text\\/plain,application\\/x-zip","upload_mime_illegal":"text\\/html","enable_flash":"0"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(14, 'com_menus', 'component', 'com_menus', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_menus","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_MENUS_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(15, 'com_messages', 'component', 'com_messages', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_messages","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_MESSAGES_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(16, 'com_modules', 'component', 'com_modules', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_modules","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_MODULES_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(17, 'com_newsfeeds', 'component', 'com_newsfeeds', '', 1, 1, 1, 0, '{"legacy":false,"name":"com_newsfeeds","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_NEWSFEEDS_XML_DESCRIPTION","group":""}', '{"show_feed_image":"1","show_feed_description":"1","show_item_description":"1","feed_word_count":"0","show_headings":"1","show_name":"1","show_articles":"0","show_link":"1","show_description":"1","show_description_image":"1","display_num":"","show_pagination_limit":"1","show_pagination":"1","show_pagination_results":"1","show_cat_items":"1"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(18, 'com_plugins', 'component', 'com_plugins', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_plugins","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_PLUGINS_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(19, 'com_search', 'component', 'com_search', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_search","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_SEARCH_XML_DESCRIPTION","group":""}', '{"enabled":"0","show_date":"1"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(20, 'com_templates', 'component', 'com_templates', '', 1, 1, 1, 1, '{"legacy":false,"name":"com_templates","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_TEMPLATES_XML_DESCRIPTION","group":""}', '{"template_positions_display":"0"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(21, 'com_weblinks', 'component', 'com_weblinks', '', 1, 1, 1, 0, '{"legacy":false,"name":"com_weblinks","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\n\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_WEBLINKS_XML_DESCRIPTION","group":""}', '{"show_comp_description":"1","comp_description":"","show_link_hits":"1","show_link_description":"1","show_other_cats":"0","show_headings":"0","show_numbers":"0","show_report":"1","count_clicks":"1","target":"0","link_icons":""}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(22, 'com_content', 'component', 'com_content', '', 1, 1, 0, 1, '{"legacy":false,"name":"com_content","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_CONTENT_XML_DESCRIPTION","group":""}', '{"article_layout":"_:default","show_title":"0","link_titles":"0","show_intro":"0","show_category":"0","link_category":"0","show_parent_category":"0","link_parent_category":"0","show_author":"0","link_author":"0","show_create_date":"0","show_modify_date":"0","show_publish_date":"0","show_item_navigation":"0","show_vote":"0","show_readmore":"0","show_readmore_title":"0","readmore_limit":"100","show_icons":"0","show_print_icon":"0","show_email_icon":"0","show_hits":"0","show_noauth":"0","urls_position":"0","show_publishing_options":"1","show_article_options":"1","show_urls_images_frontend":"0","show_urls_images_backend":"1","targeta":0,"targetb":0,"targetc":0,"float_intro":"left","float_fulltext":"left","category_layout":"_:blog","show_category_title":"0","show_description":"0","show_description_image":"0","maxLevel":"1","show_empty_categories":"0","show_no_articles":"1","show_subcat_desc":"1","show_cat_num_articles":"0","show_base_description":"1","maxLevelcat":"-1","show_empty_categories_cat":"0","show_subcat_desc_cat":"1","show_cat_num_articles_cat":"1","num_leading_articles":"1","num_intro_articles":"4","num_columns":"2","num_links":"4","multi_column_order":"0","show_subcategory_content":"0","show_pagination_limit":"1","filter_field":"hide","show_headings":"1","list_show_date":"0","date_format":"","list_show_hits":"1","list_show_author":"1","orderby_pri":"order","orderby_sec":"rdate","order_date":"published","show_pagination":"2","show_pagination_results":"1","show_feed_link":"1","feed_summary":"0"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(23, 'com_config', 'component', 'com_config', '', 1, 1, 0, 1, '{"legacy":false,"name":"com_config","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_CONFIG_XML_DESCRIPTION","group":""}', '{"filters":{"1":{"filter_type":"NH","filter_tags":"","filter_attributes":""},"6":{"filter_type":"BL","filter_tags":"","filter_attributes":""},"7":{"filter_type":"NONE","filter_tags":"","filter_attributes":""},"2":{"filter_type":"NH","filter_tags":"","filter_attributes":""},"3":{"filter_type":"BL","filter_tags":"","filter_attributes":""},"4":{"filter_type":"BL","filter_tags":"","filter_attributes":""},"5":{"filter_type":"BL","filter_tags":"","filter_attributes":""},"8":{"filter_type":"NONE","filter_tags":"","filter_attributes":""}}}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10000, 'Russian', 'language', 'ru-RU', '', 0, 1, 0, 0, '{"legacy":true,"name":"Russian","type":"language","creationDate":"2012-06-20","author":"Russian Translation Team","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved","authorEmail":"smart@joomlaportal.ru","authorUrl":"www.joomlaportal.ru","version":"2.5.6.1","description":"Russian language pack (site) for Joomla! 2.5","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(24, 'com_redirect', 'component', 'com_redirect', '', 1, 1, 0, 1, '{"legacy":false,"name":"com_redirect","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_REDIRECT_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(25, 'com_users', 'component', 'com_users', '', 1, 1, 0, 1, '{"legacy":false,"name":"com_users","type":"component","creationDate":"April 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.\\t","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_USERS_XML_DESCRIPTION","group":""}', '{"allowUserRegistration":"1","new_usertype":"2","guest_usergroup":"1","useractivation":"2","mail_to_admin":"1","captcha":"","frontend_userparams":"0","site_language":"0","mailSubjectPrefix":"","mailBodySuffix":""}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(27, 'com_finder', 'component', 'com_finder', '', 1, 1, 0, 0, '{"legacy":false,"name":"com_finder","type":"component","creationDate":"August 2011","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"COM_FINDER_XML_DESCRIPTION","group":""}', '{"show_description":"1","description_length":255,"allow_empty_query":"0","show_url":"1","show_autosuggest":"1","show_advanced":"1","expand_advanced":"1","show_date_filters":"0","sort_order":"relevance","sort_direction":"desc","highlight_terms":"1","opensearch_name":"","opensearch_description":"","batch_size":"50","memory_table_limit":30000,"title_multiplier":"1.7","text_multiplier":"0.7","meta_multiplier":"1.2","path_multiplier":"2.0","misc_multiplier":"0.3","stem":"1","stemmer":"snowball"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(100, 'PHPMailer', 'library', 'phpmailer', '', 0, 1, 1, 1, '{"legacy":false,"name":"PHPMailer","type":"library","creationDate":"2001","author":"PHPMailer","copyright":"(c) 2001-2003, Brent R. Matzelle, (c) 2004-2009, Andy Prevost. All Rights Reserved., (c) 2010-2011, Jim Jagielski. All Rights Reserved.","authorEmail":"jimjag@gmail.com","authorUrl":"https:\\/\\/code.google.com\\/a\\/apache-extras.org\\/p\\/phpmailer\\/","version":"5.2","description":"LIB_PHPMAILER_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(101, 'SimplePie', 'library', 'simplepie', '', 0, 1, 1, 1, '{"legacy":false,"name":"SimplePie","type":"library","creationDate":"2004","author":"SimplePie","copyright":"Copyright (c) 2004-2009, Ryan Parman and Geoffrey Sneddon","authorEmail":"","authorUrl":"http:\\/\\/simplepie.org\\/","version":"1.2","description":"LIB_SIMPLEPIE_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(102, 'phputf8', 'library', 'phputf8', '', 0, 1, 1, 1, '{"legacy":false,"name":"phputf8","type":"library","creationDate":"2006","author":"Harry Fuecks","copyright":"Copyright various authors","authorEmail":"hfuecks@gmail.com","authorUrl":"http:\\/\\/sourceforge.net\\/projects\\/phputf8","version":"0.5","description":"LIB_PHPUTF8_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(103, 'Joomla! Platform', 'library', 'joomla', '', 0, 1, 1, 1, '{"legacy":false,"name":"Joomla! Platform","type":"library","creationDate":"2008","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"http:\\/\\/www.joomla.org","version":"11.4","description":"LIB_JOOMLA_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(200, 'mod_articles_archive', 'module', 'mod_articles_archive', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_articles_archive","type":"module","creationDate":"July 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters.\\n\\t\\tAll rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_ARTICLES_ARCHIVE_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(201, 'mod_articles_latest', 'module', 'mod_articles_latest', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_articles_latest","type":"module","creationDate":"July 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_LATEST_NEWS_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(202, 'mod_articles_popular', 'module', 'mod_articles_popular', '', 0, 1, 1, 0, '{"legacy":false,"name":"mod_articles_popular","type":"module","creationDate":"July 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_POPULAR_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(203, 'mod_banners', 'module', 'mod_banners', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_banners","type":"module","creationDate":"July 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_BANNERS_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(204, 'mod_breadcrumbs', 'module', 'mod_breadcrumbs', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_breadcrumbs","type":"module","creationDate":"July 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_BREADCRUMBS_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(205, 'mod_custom', 'module', 'mod_custom', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_custom","type":"module","creationDate":"July 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_CUSTOM_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(206, 'mod_feed', 'module', 'mod_feed', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_feed","type":"module","creationDate":"July 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_FEED_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(207, 'mod_footer', 'module', 'mod_footer', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_footer","type":"module","creationDate":"July 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_FOOTER_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(208, 'mod_login', 'module', 'mod_login', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_login","type":"module","creationDate":"July 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_LOGIN_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(209, 'mod_menu', 'module', 'mod_menu', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_menu","type":"module","creationDate":"July 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_MENU_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(210, 'mod_articles_news', 'module', 'mod_articles_news', '', 0, 1, 1, 0, '{"legacy":false,"name":"mod_articles_news","type":"module","creationDate":"July 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_ARTICLES_NEWS_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(211, 'mod_random_image', 'module', 'mod_random_image', '', 0, 1, 1, 0, '{"legacy":false,"name":"mod_random_image","type":"module","creationDate":"July 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_RANDOM_IMAGE_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(212, 'mod_related_items', 'module', 'mod_related_items', '', 0, 1, 1, 0, '{"legacy":false,"name":"mod_related_items","type":"module","creationDate":"July 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_RELATED_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(213, 'mod_search', 'module', 'mod_search', '', 0, 1, 1, 0, '{"legacy":false,"name":"mod_search","type":"module","creationDate":"July 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_SEARCH_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(214, 'mod_stats', 'module', 'mod_stats', '', 0, 1, 1, 0, '{"legacy":false,"name":"mod_stats","type":"module","creationDate":"July 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_STATS_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(215, 'mod_syndicate', 'module', 'mod_syndicate', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_syndicate","type":"module","creationDate":"May 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_SYNDICATE_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(216, 'mod_users_latest', 'module', 'mod_users_latest', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_users_latest","type":"module","creationDate":"December 2009","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_USERS_LATEST_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(217, 'mod_weblinks', 'module', 'mod_weblinks', '', 0, 1, 1, 0, '{"legacy":false,"name":"mod_weblinks","type":"module","creationDate":"July 2009","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_WEBLINKS_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(218, 'mod_whosonline', 'module', 'mod_whosonline', '', 0, 0, 1, 0, '{"legacy":false,"name":"mod_whosonline","type":"module","creationDate":"July 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_WHOSONLINE_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(219, 'mod_wrapper', 'module', 'mod_wrapper', '', 0, 1, 1, 0, '{"legacy":false,"name":"mod_wrapper","type":"module","creationDate":"October 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_WRAPPER_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(220, 'mod_articles_category', 'module', 'mod_articles_category', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_articles_category","type":"module","creationDate":"February 2010","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_ARTICLES_CATEGORY_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(221, 'mod_articles_categories', 'module', 'mod_articles_categories', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_articles_categories","type":"module","creationDate":"February 2010","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_ARTICLES_CATEGORIES_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(222, 'mod_languages', 'module', 'mod_languages', '', 0, 1, 1, 1, '{"legacy":false,"name":"mod_languages","type":"module","creationDate":"February 2010","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_LANGUAGES_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(223, 'mod_finder', 'module', 'mod_finder', '', 0, 1, 0, 0, '{"legacy":false,"name":"mod_finder","type":"module","creationDate":"August 2011","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_FINDER_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(300, 'mod_custom', 'module', 'mod_custom', '', 1, 1, 1, 1, '{"legacy":false,"name":"mod_custom","type":"module","creationDate":"July 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_CUSTOM_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(301, 'mod_feed', 'module', 'mod_feed', '', 1, 1, 1, 0, '{"legacy":false,"name":"mod_feed","type":"module","creationDate":"July 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_FEED_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(302, 'mod_latest', 'module', 'mod_latest', '', 1, 1, 1, 0, '{"legacy":false,"name":"mod_latest","type":"module","creationDate":"July 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_LATEST_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(303, 'mod_logged', 'module', 'mod_logged', '', 1, 1, 1, 0, '{"legacy":false,"name":"mod_logged","type":"module","creationDate":"January 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_LOGGED_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(304, 'mod_login', 'module', 'mod_login', '', 1, 1, 1, 1, '{"legacy":false,"name":"mod_login","type":"module","creationDate":"March 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_LOGIN_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(305, 'mod_menu', 'module', 'mod_menu', '', 1, 1, 1, 0, '{"legacy":false,"name":"mod_menu","type":"module","creationDate":"March 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_MENU_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(307, 'mod_popular', 'module', 'mod_popular', '', 1, 1, 1, 0, '{"legacy":false,"name":"mod_popular","type":"module","creationDate":"July 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_POPULAR_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(308, 'mod_quickicon', 'module', 'mod_quickicon', '', 1, 1, 1, 1, '{"legacy":false,"name":"mod_quickicon","type":"module","creationDate":"Nov 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_QUICKICON_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(309, 'mod_status', 'module', 'mod_status', '', 1, 1, 1, 0, '{"legacy":false,"name":"mod_status","type":"module","creationDate":"Feb 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_STATUS_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(310, 'mod_submenu', 'module', 'mod_submenu', '', 1, 1, 1, 0, '{"legacy":false,"name":"mod_submenu","type":"module","creationDate":"Feb 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_SUBMENU_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(311, 'mod_title', 'module', 'mod_title', '', 1, 1, 1, 0, '{"legacy":false,"name":"mod_title","type":"module","creationDate":"Nov 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_TITLE_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(312, 'mod_toolbar', 'module', 'mod_toolbar', '', 1, 1, 1, 1, '{"legacy":false,"name":"mod_toolbar","type":"module","creationDate":"Nov 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_TOOLBAR_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(313, 'mod_multilangstatus', 'module', 'mod_multilangstatus', '', 1, 1, 1, 0, '{"legacy":false,"name":"mod_multilangstatus","type":"module","creationDate":"September 2011","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_MULTILANGSTATUS_XML_DESCRIPTION","group":""}', '{"cache":"0"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(314, 'mod_version', 'module', 'mod_version', '', 1, 1, 1, 0, '{"legacy":false,"name":"mod_version","type":"module","creationDate":"January 2012","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"MOD_VERSION_XML_DESCRIPTION","group":""}', '{"format":"short","product":"1","cache":"0"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(400, 'plg_authentication_gmail', 'plugin', 'gmail', 'authentication', 0, 0, 1, 0, '{"legacy":false,"name":"plg_authentication_gmail","type":"plugin","creationDate":"February 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_GMAIL_XML_DESCRIPTION","group":""}', '{"applysuffix":"0","suffix":"","verifypeer":"1","user_blacklist":""}', '', '', 0, '0000-00-00 00:00:00', 1, 0),
(401, 'plg_authentication_joomla', 'plugin', 'joomla', 'authentication', 0, 1, 1, 1, '{"legacy":false,"name":"plg_authentication_joomla","type":"plugin","creationDate":"November 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_AUTH_JOOMLA_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(402, 'plg_authentication_ldap', 'plugin', 'ldap', 'authentication', 0, 0, 1, 0, '{"legacy":false,"name":"plg_authentication_ldap","type":"plugin","creationDate":"November 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_LDAP_XML_DESCRIPTION","group":""}', '{"host":"","port":"389","use_ldapV3":"0","negotiate_tls":"0","no_referrals":"0","auth_method":"bind","base_dn":"","search_string":"","users_dn":"","username":"admin","password":"bobby7","ldap_fullname":"fullName","ldap_email":"mail","ldap_uid":"uid"}', '', '', 0, '0000-00-00 00:00:00', 3, 0),
(404, 'plg_content_emailcloak', 'plugin', 'emailcloak', 'content', 0, 1, 1, 0, '{"legacy":false,"name":"plg_content_emailcloak","type":"plugin","creationDate":"November 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_CONTENT_EMAILCLOAK_XML_DESCRIPTION","group":""}', '{"mode":"1"}', '', '', 0, '0000-00-00 00:00:00', 1, 0),
(405, 'plg_content_geshi', 'plugin', 'geshi', 'content', 0, 0, 1, 0, '{"legacy":false,"name":"plg_content_geshi","type":"plugin","creationDate":"November 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"","authorUrl":"qbnz.com\\/highlighter","version":"2.5.0","description":"PLG_CONTENT_GESHI_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 2, 0),
(406, 'plg_content_loadmodule', 'plugin', 'loadmodule', 'content', 0, 1, 1, 0, '{"legacy":false,"name":"plg_content_loadmodule","type":"plugin","creationDate":"November 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_LOADMODULE_XML_DESCRIPTION","group":""}', '{"style":"xhtml"}', '', '', 0, '2011-09-18 15:22:50', 0, 0),
(407, 'plg_content_pagebreak', 'plugin', 'pagebreak', 'content', 0, 1, 1, 1, '{"legacy":false,"name":"plg_content_pagebreak","type":"plugin","creationDate":"November 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_CONTENT_PAGEBREAK_XML_DESCRIPTION","group":""}', '{"title":"1","multipage_toc":"1","showall":"1"}', '', '', 0, '0000-00-00 00:00:00', 4, 0),
(408, 'plg_content_pagenavigation', 'plugin', 'pagenavigation', 'content', 0, 1, 1, 1, '{"legacy":false,"name":"plg_content_pagenavigation","type":"plugin","creationDate":"January 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_PAGENAVIGATION_XML_DESCRIPTION","group":""}', '{"position":"1"}', '', '', 0, '0000-00-00 00:00:00', 5, 0),
(409, 'plg_content_vote', 'plugin', 'vote', 'content', 0, 1, 1, 1, '{"legacy":false,"name":"plg_content_vote","type":"plugin","creationDate":"November 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_VOTE_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 6, 0),
(410, 'plg_editors_codemirror', 'plugin', 'codemirror', 'editors', 0, 1, 1, 1, '{"legacy":false,"name":"plg_editors_codemirror","type":"plugin","creationDate":"28 March 2011","author":"Marijn Haverbeke","copyright":"","authorEmail":"N\\/A","authorUrl":"","version":"1.0","description":"PLG_CODEMIRROR_XML_DESCRIPTION","group":""}', '{"linenumbers":"0","tabmode":"indent"}', '', '', 0, '0000-00-00 00:00:00', 1, 0),
(411, 'plg_editors_none', 'plugin', 'none', 'editors', 0, 1, 1, 1, '{"legacy":false,"name":"plg_editors_none","type":"plugin","creationDate":"August 2004","author":"Unknown","copyright":"","authorEmail":"N\\/A","authorUrl":"","version":"2.5.0","description":"PLG_NONE_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 2, 0),
(412, 'plg_editors_tinymce', 'plugin', 'tinymce', 'editors', 0, 1, 1, 1, '{"legacy":false,"name":"plg_editors_tinymce","type":"plugin","creationDate":"2005-2012","author":"Moxiecode Systems AB","copyright":"Moxiecode Systems AB","authorEmail":"N\\/A","authorUrl":"tinymce.moxiecode.com\\/","version":"3.5.2","description":"PLG_TINY_XML_DESCRIPTION","group":""}', '{"mode":"1","skin":"0","entity_encoding":"raw","lang_mode":"0","lang_code":"en","text_direction":"ltr","content_css":"1","content_css_custom":"","relative_urls":"1","newlines":"0","invalid_elements":"script,applet,iframe","extended_elements":"","toolbar":"top","toolbar_align":"left","html_height":"550","html_width":"750","resizing":"true","resize_horizontal":"false","element_path":"1","fonts":"1","paste":"1","searchreplace":"1","insertdate":"1","format_date":"%Y-%m-%d","inserttime":"1","format_time":"%H:%M:%S","colors":"1","table":"1","smilies":"1","media":"1","hr":"1","directionality":"1","fullscreen":"1","style":"1","layer":"1","xhtmlxtras":"1","visualchars":"1","nonbreaking":"1","template":"1","blockquote":"1","wordcount":"1","advimage":"1","advlink":"1","advlist":"1","autosave":"1","contextmenu":"1","inlinepopups":"1","custom_plugin":"","custom_button":""}', '', '', 0, '0000-00-00 00:00:00', 3, 0),
(413, 'plg_editors-xtd_article', 'plugin', 'article', 'editors-xtd', 0, 1, 1, 1, '{"legacy":false,"name":"plg_editors-xtd_article","type":"plugin","creationDate":"October 2009","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_ARTICLE_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 1, 0),
(414, 'plg_editors-xtd_image', 'plugin', 'image', 'editors-xtd', 0, 1, 1, 0, '{"legacy":false,"name":"plg_editors-xtd_image","type":"plugin","creationDate":"August 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_IMAGE_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 2, 0),
(415, 'plg_editors-xtd_pagebreak', 'plugin', 'pagebreak', 'editors-xtd', 0, 1, 1, 0, '{"legacy":false,"name":"plg_editors-xtd_pagebreak","type":"plugin","creationDate":"August 2004","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_EDITORSXTD_PAGEBREAK_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 3, 0),
(416, 'plg_editors-xtd_readmore', 'plugin', 'readmore', 'editors-xtd', 0, 1, 1, 0, '{"legacy":false,"name":"plg_editors-xtd_readmore","type":"plugin","creationDate":"March 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_READMORE_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 4, 0),
(417, 'plg_search_categories', 'plugin', 'categories', 'search', 0, 1, 1, 0, '{"legacy":false,"name":"plg_search_categories","type":"plugin","creationDate":"November 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_SEARCH_CATEGORIES_XML_DESCRIPTION","group":""}', '{"search_limit":"50","search_content":"1","search_archived":"1"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(418, 'plg_search_contacts', 'plugin', 'contacts', 'search', 0, 1, 1, 0, '{"legacy":false,"name":"plg_search_contacts","type":"plugin","creationDate":"November 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_SEARCH_CONTACTS_XML_DESCRIPTION","group":""}', '{"search_limit":"50","search_content":"1","search_archived":"1"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(419, 'plg_search_content', 'plugin', 'content', 'search', 0, 1, 1, 0, '{"legacy":false,"name":"plg_search_content","type":"plugin","creationDate":"November 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_SEARCH_CONTENT_XML_DESCRIPTION","group":""}', '{"search_limit":"50","search_content":"1","search_archived":"1"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(420, 'plg_search_newsfeeds', 'plugin', 'newsfeeds', 'search', 0, 1, 1, 0, '{"legacy":false,"name":"plg_search_newsfeeds","type":"plugin","creationDate":"November 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_SEARCH_NEWSFEEDS_XML_DESCRIPTION","group":""}', '{"search_limit":"50","search_content":"1","search_archived":"1"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(421, 'plg_search_weblinks', 'plugin', 'weblinks', 'search', 0, 1, 1, 0, '{"legacy":false,"name":"plg_search_weblinks","type":"plugin","creationDate":"November 2005","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_SEARCH_WEBLINKS_XML_DESCRIPTION","group":""}', '{"search_limit":"50","search_content":"1","search_archived":"1"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(422, 'plg_system_languagefilter', 'plugin', 'languagefilter', 'system', 0, 0, 1, 1, '{"legacy":false,"name":"plg_system_languagefilter","type":"plugin","creationDate":"July 2010","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_SYSTEM_LANGUAGEFILTER_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 1, 0),
(423, 'plg_system_p3p', 'plugin', 'p3p', 'system', 0, 1, 1, 1, '{"legacy":false,"name":"plg_system_p3p","type":"plugin","creationDate":"September 2010","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_P3P_XML_DESCRIPTION","group":""}', '{"headers":"NOI ADM DEV PSAi COM NAV OUR OTRo STP IND DEM"}', '', '', 0, '0000-00-00 00:00:00', 2, 0),
(424, 'plg_system_cache', 'plugin', 'cache', 'system', 0, 1, 1, 1, '{"legacy":false,"name":"plg_system_cache","type":"plugin","creationDate":"February 2007","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_CACHE_XML_DESCRIPTION","group":""}', '{"browsercache":"0","cachetime":"15"}', '', '', 0, '0000-00-00 00:00:00', 9, 0),
(425, 'plg_system_debug', 'plugin', 'debug', 'system', 0, 1, 1, 0, '{"legacy":false,"name":"plg_system_debug","type":"plugin","creationDate":"December 2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_DEBUG_XML_DESCRIPTION","group":""}', '{"profile":"1","queries":"1","memory":"1","language_files":"1","language_strings":"1","strip-first":"1","strip-prefix":"","strip-suffix":""}', '', '', 0, '0000-00-00 00:00:00', 4, 0),
(426, 'plg_system_log', 'plugin', 'log', 'system', 0, 1, 1, 1, '{"legacy":false,"name":"plg_system_log","type":"plugin","creationDate":"April 2007","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_LOG_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 5, 0),
(427, 'plg_system_redirect', 'plugin', 'redirect', 'system', 0, 1, 1, 1, '{"legacy":false,"name":"plg_system_redirect","type":"plugin","creationDate":"April 2009","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_REDIRECT_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 6, 0);
INSERT INTO `w96sn_extensions` (`extension_id`, `name`, `type`, `element`, `folder`, `client_id`, `enabled`, `access`, `protected`, `manifest_cache`, `params`, `custom_data`, `system_data`, `checked_out`, `checked_out_time`, `ordering`, `state`) VALUES
(428, 'plg_system_remember', 'plugin', 'remember', 'system', 0, 1, 1, 1, '{"legacy":false,"name":"plg_system_remember","type":"plugin","creationDate":"April 2007","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_REMEMBER_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 7, 0),
(429, 'plg_system_sef', 'plugin', 'sef', 'system', 0, 1, 1, 0, '{"legacy":false,"name":"plg_system_sef","type":"plugin","creationDate":"December 2007","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_SEF_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 8, 0),
(430, 'plg_system_logout', 'plugin', 'logout', 'system', 0, 1, 1, 1, '{"legacy":false,"name":"plg_system_logout","type":"plugin","creationDate":"April 2009","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_SYSTEM_LOGOUT_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 3, 0),
(431, 'plg_user_contactcreator', 'plugin', 'contactcreator', 'user', 0, 0, 1, 1, '{"legacy":false,"name":"plg_user_contactcreator","type":"plugin","creationDate":"August 2009","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_CONTACTCREATOR_XML_DESCRIPTION","group":""}', '{"autowebpage":"","category":"34","autopublish":"0"}', '', '', 0, '0000-00-00 00:00:00', 1, 0),
(432, 'plg_user_joomla', 'plugin', 'joomla', 'user', 0, 1, 1, 0, '{"legacy":false,"name":"plg_user_joomla","type":"plugin","creationDate":"December 2006","author":"Joomla! Project","copyright":"(C) 2005 - 2009 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_USER_JOOMLA_XML_DESCRIPTION","group":""}', '{"autoregister":"1"}', '', '', 0, '0000-00-00 00:00:00', 2, 0),
(433, 'plg_user_profile', 'plugin', 'profile', 'user', 0, 0, 1, 1, '{"legacy":false,"name":"plg_user_profile","type":"plugin","creationDate":"January 2008","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_USER_PROFILE_XML_DESCRIPTION","group":""}', '{"register-require_address1":"1","register-require_address2":"1","register-require_city":"1","register-require_region":"1","register-require_country":"1","register-require_postal_code":"1","register-require_phone":"1","register-require_website":"1","register-require_favoritebook":"1","register-require_aboutme":"1","register-require_tos":"1","register-require_dob":"1","profile-require_address1":"1","profile-require_address2":"1","profile-require_city":"1","profile-require_region":"1","profile-require_country":"1","profile-require_postal_code":"1","profile-require_phone":"1","profile-require_website":"1","profile-require_favoritebook":"1","profile-require_aboutme":"1","profile-require_tos":"1","profile-require_dob":"1"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(434, 'plg_extension_joomla', 'plugin', 'joomla', 'extension', 0, 1, 1, 1, '{"legacy":false,"name":"plg_extension_joomla","type":"plugin","creationDate":"May 2010","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_EXTENSION_JOOMLA_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 1, 0),
(435, 'plg_content_joomla', 'plugin', 'joomla', 'content', 0, 1, 1, 0, '{"legacy":false,"name":"plg_content_joomla","type":"plugin","creationDate":"November 2010","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_CONTENT_JOOMLA_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(436, 'plg_system_languagecode', 'plugin', 'languagecode', 'system', 0, 0, 1, 0, '{"legacy":false,"name":"plg_system_languagecode","type":"plugin","creationDate":"November 2011","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_SYSTEM_LANGUAGECODE_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 10, 0),
(437, 'plg_quickicon_joomlaupdate', 'plugin', 'joomlaupdate', 'quickicon', 0, 1, 1, 1, '{"legacy":false,"name":"plg_quickicon_joomlaupdate","type":"plugin","creationDate":"August 2011","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_QUICKICON_JOOMLAUPDATE_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(438, 'plg_quickicon_extensionupdate', 'plugin', 'extensionupdate', 'quickicon', 0, 1, 1, 1, '{"legacy":false,"name":"plg_quickicon_extensionupdate","type":"plugin","creationDate":"August 2011","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_QUICKICON_EXTENSIONUPDATE_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(439, 'plg_captcha_recaptcha', 'plugin', 'recaptcha', 'captcha', 0, 1, 1, 0, '{"legacy":false,"name":"plg_captcha_recaptcha","type":"plugin","creationDate":"December 2011","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_CAPTCHA_RECAPTCHA_XML_DESCRIPTION","group":""}', '{"public_key":"","private_key":"","theme":"clean"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(440, 'plg_system_highlight', 'plugin', 'highlight', 'system', 0, 1, 1, 0, '{"legacy":false,"name":"plg_system_highlight","type":"plugin","creationDate":"August 2011","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_SYSTEM_HIGHLIGHT_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 7, 0),
(441, 'plg_content_finder', 'plugin', 'finder', 'content', 0, 1, 1, 0, '{"legacy":false,"name":"plg_content_finder","type":"plugin","creationDate":"December 2011","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_CONTENT_FINDER_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(442, 'plg_finder_categories', 'plugin', 'categories', 'finder', 0, 1, 1, 0, '{"legacy":false,"name":"plg_finder_categories","type":"plugin","creationDate":"August 2011","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_FINDER_CATEGORIES_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 1, 0),
(443, 'plg_finder_contacts', 'plugin', 'contacts', 'finder', 0, 1, 1, 0, '{"legacy":false,"name":"plg_finder_contacts","type":"plugin","creationDate":"August 2011","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_FINDER_CONTACTS_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 2, 0),
(444, 'plg_finder_content', 'plugin', 'content', 'finder', 0, 1, 1, 0, '{"legacy":false,"name":"plg_finder_content","type":"plugin","creationDate":"August 2011","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_FINDER_CONTENT_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 3, 0),
(445, 'plg_finder_newsfeeds', 'plugin', 'newsfeeds', 'finder', 0, 1, 1, 0, '{"legacy":false,"name":"plg_finder_newsfeeds","type":"plugin","creationDate":"August 2011","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_FINDER_NEWSFEEDS_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 4, 0),
(446, 'plg_finder_weblinks', 'plugin', 'weblinks', 'finder', 0, 1, 1, 0, '{"legacy":false,"name":"plg_finder_weblinks","type":"plugin","creationDate":"August 2011","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"PLG_FINDER_WEBLINKS_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 5, 0),
(500, 'atomic', 'template', 'atomic', '', 0, 0, 1, 0, '{"legacy":false,"name":"atomic","type":"template","creationDate":"10\\/10\\/09","author":"Ron Severdia","copyright":"Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.","authorEmail":"contact@kontentdesign.com","authorUrl":"http:\\/\\/www.kontentdesign.com","version":"2.5.0","description":"TPL_ATOMIC_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(502, 'bluestork', 'template', 'bluestork', '', 1, 1, 1, 0, '{"legacy":false,"name":"bluestork","type":"template","creationDate":"07\\/02\\/09","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.0","description":"TPL_BLUESTORK_XML_DESCRIPTION","group":""}', '{"useRoundedCorners":"1","showSiteName":"0","textBig":"0","highContrast":"0"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(503, 'beez_20', 'template', 'beez_20', '', 0, 0, 1, 0, '{"legacy":false,"name":"beez_20","type":"template","creationDate":"25 November 2009","author":"Angie Radtke","copyright":"Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.","authorEmail":"a.radtke@derauftritt.de","authorUrl":"http:\\/\\/www.der-auftritt.de","version":"2.5.0","description":"TPL_BEEZ2_XML_DESCRIPTION","group":""}', '{"wrapperSmall":"53","wrapperLarge":"72","sitetitle":"","sitedescription":"","navposition":"center","templatecolor":"nature"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(504, 'hathor', 'template', 'hathor', '', 1, 0, 1, 0, '{"legacy":false,"name":"hathor","type":"template","creationDate":"May 2010","author":"Andrea Tarr","copyright":"Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.","authorEmail":"hathor@tarrconsulting.com","authorUrl":"http:\\/\\/www.tarrconsulting.com","version":"2.5.0","description":"TPL_HATHOR_XML_DESCRIPTION","group":""}', '{"showSiteName":"0","colourChoice":"0","boldText":"0"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(505, 'beez5', 'template', 'beez5', '', 0, 0, 1, 0, '{"legacy":false,"name":"beez5","type":"template","creationDate":"21 May 2010","author":"Angie Radtke","copyright":"Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.","authorEmail":"a.radtke@derauftritt.de","authorUrl":"http:\\/\\/www.der-auftritt.de","version":"2.5.0","description":"TPL_BEEZ5_XML_DESCRIPTION","group":""}', '{"wrapperSmall":"53","wrapperLarge":"72","sitetitle":"","sitedescription":"","navposition":"center","html5":"0"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(600, 'English (United Kingdom)', 'language', 'en-GB', '', 0, 1, 1, 1, '{"legacy":false,"name":"English (United Kingdom)","type":"language","creationDate":"2008-03-15","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.5","description":"en-GB site language","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(601, 'English (United Kingdom)', 'language', 'en-GB', '', 1, 1, 1, 1, '{"legacy":false,"name":"English (United Kingdom)","type":"language","creationDate":"2008-03-15","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.5","description":"en-GB administrator language","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(700, 'files_joomla', 'file', 'joomla', '', 0, 1, 1, 1, '{"legacy":false,"name":"files_joomla","type":"file","creationDate":"June 2012","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.6","description":"FILES_JOOMLA_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(800, 'PKG_JOOMLA', 'package', 'pkg_joomla', '', 0, 1, 1, 1, '{"legacy":false,"name":"PKG_JOOMLA","type":"package","creationDate":"2006","author":"Joomla! Project","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"http:\\/\\/www.joomla.org","version":"2.5.0","description":"PKG_JOOMLA_XML_DESCRIPTION","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10001, 'Russian', 'language', 'ru-RU', '', 1, 1, 0, 0, '{"legacy":true,"name":"Russian","type":"language","creationDate":"2012-06-20","author":"Russian Translation Team","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved","authorEmail":"smart@joomlaportal.ru","authorUrl":"www.joomlaportal.ru","version":"2.5.6.1","description":"Russian language pack (administrator) for Joomla! 2.5","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10002, 'ru-RU', 'package', 'pkg_ru-RU', '', 0, 1, 1, 0, '{"legacy":false,"name":"Russian Language Pack","type":"package","creationDate":"Unknown","author":"Unknown","copyright":"","authorEmail":"","authorUrl":"","version":"2.5.6.1","description":"Joomla 2.5 Russian Language Package","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10003, 'adsmanager', 'component', 'com_adsmanager', '', 1, 1, 0, 0, '{"legacy":true,"name":"Adsmanager","type":"component","creationDate":"September 2011","author":"TomPAP (joomprod.com)","copyright":"\\n\\t\\tCopyright (C) 2010-2011 JoomPROD. All rights reserved.\\n\\t","authorEmail":"webmaster@joomprod.com","authorUrl":"www.joomprod.com","version":"2.6.5","description":"Classifield Ads","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10004, 'mod_adsmanager_ads', 'module', 'mod_adsmanager_ads', '', 0, 0, 0, 0, '{"legacy":true,"name":"mod_adsmanager_ads","type":"module","creationDate":"September 2011","author":"Thomas Papin","copyright":"","authorEmail":"webmaster@joomprod.com","authorUrl":"www.joomprod.com","version":"2.6.5","description":"Displays the latest \\/ random \\/ popular ads of AdsManager","group":""}', '{"random":"0","nb_ads":"3","style":"hor","image":"1","displaycategory":"1","displaydate":"1","catselect":"","default_itemid":"","field1":"","field2":"","field3":"","field4":"","field5":"","cache":"1","cache_time":"900","cachemode":"static"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10005, 'mod_adsmanager_menu', 'module', 'mod_adsmanager_menu', '', 0, 0, 0, 0, '{"legacy":true,"name":"mod_adsmanager_menu","type":"module","creationDate":"September 2011","author":"Thomas Papin","copyright":"","authorEmail":"webmaster@joomprod.com","authorUrl":"www.joomprod.com","version":"2.6.5","description":"Displays the AdsManager Menu","group":""}', '{"displaynumads":"1","default_itemid":"","cache":"0","cache_time":"900","cachemode":"static"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10006, 'mod_adsmanager_search', 'module', 'mod_adsmanager_search', '', 0, 0, 0, 0, '{"legacy":true,"name":"mod_adsmanager_search","type":"module","creationDate":"September 2011","author":"Thomas Papin","copyright":"","authorEmail":"webmaster@joomprod.com","authorUrl":"www.joomprod.com","version":"2.6.5","description":"AdsManager Search Module","group":""}', '{"default_itemid":"","advanced_search":"1","search_by_cat":"1","field1":"","field2":"","field3":"","field4":"","field5":"","type":"table"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10007, 'mod_adsmanager_table', 'module', 'mod_adsmanager_table', '', 0, 0, 0, 0, '{"legacy":true,"name":"mod_adsmanager_table","type":"module","creationDate":"September 2011","author":"Thomas Papin","copyright":"","authorEmail":"webmaster@joomprod.com","authorUrl":"www.joomprod.com","version":"2.6.5","description":"Displays the latest \\/ random \\/ popular AdsManager ads in a Table","group":""}', '{"nb_ads":"3","random":"0","catselect":"","default_itemid":"","cache":"1","cache_time":"900","cachemode":"static"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10008, 'AdsManagerContent - Captcha', 'plugin', 'captcha', 'adsmanagercontent', 0, 0, 1, 0, '{"legacy":true,"name":"AdsManagerContent - Captcha","type":"plugin","creationDate":"August, 2011","author":"JoomPROD","copyright":"Copyright (C) 2011 ITPrism.com. All rights reserved.","authorEmail":"webmaster@joomprod.com","authorUrl":"http:\\/\\/www.joomprod.com","version":"1.0","description":"\\n    Captcha for Adsmanager\\n    ","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10009, 'Adsmanager - JComments', 'plugin', 'jcomments', 'adsmanagercontent', 0, 1, 1, 0, '{"legacy":true,"name":"Adsmanager - JComments","type":"plugin","creationDate":"August 2011","author":"JoomPROD","copyright":"Copyright (C) 2005 - 2011 Open Source Matters. All rights reserved.","authorEmail":"webmaster@joomprod.com","authorUrl":"www.joomprod.com","version":"1.0","description":"JComments Adsmanager Integration","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10010, 'comprofiler', 'component', 'com_comprofiler', '', 1, 1, 0, 0, '{"legacy":false,"name":"comprofiler","type":"component","creationDate":"2012-06-19","author":"Beat","copyright":"Copyright (C) 2004-2012 Joomlapolis.com. All rights reserved.","authorEmail":"beat@joomlapolis.com","authorUrl":"www.joomlapolis.com","version":"1.8.1","description":"Joomla\\/Mambo Community Builder 1.8.1 native for Joomla! 2.5.0 - 2.5.6, 1.7.0 - 1.7.3, 1.6.0 - 1.6.6, 1.5.3 - 1.5.26, 1.0.0 - 1.0.15 and Mambo 4.5.0 - 4.6.5.","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10011, 'CB Login', 'module', 'mod_cblogin', '', 0, 1, 0, 0, '{"legacy":true,"name":"CB Login","type":"module","creationDate":"2012-06-19","author":"Beat and JoomlaJoe","copyright":"(C) 2005-2012 Joomlapolis.com. This module is released under the GNU\\/GPL v2 License","authorEmail":"beat@joomlapolis.com","authorUrl":"www.joomlapolis.com","version":"1.8.1","description":"Login module to be used with Community Builder instead of the Login module.","group":""}', '{"moduleclass_sfx":"","horizontal":"0","compact":"0","pretext":"","logoutpretext":"","login":"","logout":"index.php","show_lostpass":"1","show_newaccount":"1","show_username_pass_icons":"0","name_lenght":"14","pass_lenght":"14","show_buttons_icons":"0","show_remind_register_icons":"0","login_message":"0","logout_message":"0","remember_enabled":"1","greeting":"1","name":"0","show_avatar":"0","avatar_position":"default","text_show_profile":"","text_edit_profile":"","pms_type":"0","show_pms":"0","show_connection_notifications":"0","https_post":"0","cb_plugins":"0"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10012, 'CB Workflows', 'module', 'mod_comprofilermoderator', '', 0, 1, 0, 0, '{"legacy":true,"name":"CB Workflows","type":"module","creationDate":"2012-06-19","author":"Beat and JoomlaJoe","copyright":"(C) 2005-2012 Joomlapolis.com. This module is released under the GNU\\/GPL v2 License","authorEmail":"beat@joomlapolis.com","authorUrl":"www.joomlapolis.com","version":"1.8.1","description":"Displays Notifications of pending actions for the moderator and connections functionality of Community Builder.","group":""}', '{"moduleclass_sfx":"","pretext":"","posttext":""}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10013, 'CB Online', 'module', 'mod_comprofileronline', '', 0, 1, 0, 0, '{"legacy":true,"name":"CB Online","type":"module","creationDate":"2012-06-19","author":"Beat and JoomlaJoe","copyright":"(C) 2005-2012 Joomlapolis.com. This module is released under the GNU\\/GPL v2 License","authorEmail":"beat@joomlapolis.com","authorUrl":"www.joomlapolis.com","version":"1.8.1","description":"Displays a list of users logged in with a link to their profile.","group":""}', '{"moduleclass_sfx":"","pretext":""}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10014, 'uddeim', 'component', 'com_uddeim', '', 1, 1, 0, 0, '{"legacy":false,"name":"uddeIM","type":"component","creationDate":"2012-01-01","author":"Stephan Slabihoud","copyright":"This is free software and you may redistribute it under the GPL. uddeIM comes with absolutely no warranty. For details, see the license at http:\\/\\/www.gnu.org\\/licenses\\/gpl.txt. For icons credits and license, see LICENSE folder. Where noted, other copyrights apply for code portions. This version is based on uddeIM 0.5b which has been written by Benjamin Zweifel in 2006.","authorEmail":"ssl@gmx.de","authorUrl":"http:\\/\\/www.slabihoud.de\\/software\\/","version":"2.6","description":"uddeIM Instant Messages for Mambo\\/Joomla","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10043, 'Gantry', 'library', 'lib_gantry', '', 0, 1, 1, 0, '{"legacy":false,"name":"Gantry","type":"library","creationDate":"April 2, 2012","author":"RocketTheme, LLC","copyright":"(C) 2005 - 2012 RocketTheme, LLC. All rights reserved.","authorEmail":"support@rockettheme.com","authorUrl":"http:\\/\\/www.rockettheme.com","version":"3.2.19","description":"${project.description}","group":""}', '{}', '{"last_update":1356264129}', '', 0, '0000-00-00 00:00:00', 0, 0),
(10024, 'com_kunena', 'component', 'com_kunena', '', 1, 1, 0, 0, '{"legacy":false,"name":"com_kunena","type":"component","creationDate":"2012-01-31","author":"Kunena Team","copyright":"(C) 2008 - 2012 Kunena Team. All rights reserved.","authorEmail":"kunena@kunena.org","authorUrl":"http:\\/\\/www.kunena.org","version":"1.7.2","description":"Kunena Forum","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10017, 'gantry', 'component', 'com_gantry', '', 0, 1, 0, 0, '{"legacy":false,"name":"Gantry","type":"component","creationDate":"April 2, 2012","author":"RocketTheme, LLC","copyright":"(C) 2005 - 2012 RocketTheme, LLC. All rights reserved.","authorEmail":"support@rockettheme.com","authorUrl":"http:\\/\\/www.rockettheme.com","version":"3.2.19","description":"${project.description}","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10018, 'System - Gantry', 'plugin', 'gantry', 'system', 0, 1, 1, 0, '{"legacy":false,"name":"System - Gantry","type":"plugin","creationDate":"April 2, 2012","author":"RocketTheme, LLC","copyright":"(C) 2005 - 2012 RocketTheme, LLC. All rights reserved.","authorEmail":"support@rockettheme.com","authorUrl":"http:\\/\\/www.rockettheme.com","version":"3.2.19","description":"Gantry System Plugin for Joomla","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 1, 0),
(10019, 'ca_cloudbase2_j25', 'template', 'ca_cloudbase2_j25', '', 0, 1, 1, 0, '{"legacy":false,"name":"ca_cloudbase2_j25","type":"template","creationDate":"July 27, 2011","author":"CloudAccess.net","copyright":"CloudAccess.net","authorEmail":"support@cloudaccess.net","authorUrl":"CloudAccess.net","version":"2.0.3","description":"${project.description}","group":""}', '{"master":"true"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10020, 'System - RokExtender', 'plugin', 'rokextender', 'system', 0, 1, 1, 0, '{"legacy":false,"name":"System - RokExtender","type":"plugin","creationDate":"February 24, 2011","author":"RocketTheme, LLC","copyright":"(C) 2005 - 2011 RocketTheme, LLC. All rights reserved.","authorEmail":"support@rockettheme.com","authorUrl":"http:\\/\\/www.rockettheme.com","version":"1.0","description":"System - Gantry","group":""}', '{"registered":"\\/modules\\/mod_roknavmenu\\/lib\\/RokNavMenuEvents.php"}', '', '', 0, '0000-00-00 00:00:00', 1, 0),
(10021, 'RokNavMenu', 'module', 'mod_roknavmenu', '', 0, 1, 1, 0, '{"legacy":false,"name":"RokNavMenu","type":"module","creationDate":"December 15, 2011","author":"RocketTheme, LLC","copyright":"(C) 2005 - 2011 RocketTheme, LLC. All rights reserved.","authorEmail":"support@rockettheme.com","authorUrl":"http:\\/\\/www.rockettheme.com","version":"1.8","description":"RocketTheme Customizable Navigation Menu","group":""}', '{"limit_levels":"0","startLevel":"0","endLevel":"0","showAllChildren":"0","window_open":"","filteringspacer2":"","theme":"default","custom_layout":"default.php","custom_formatter":"default.php","cache":"1","cache_time":"900","cachemode":"itemid"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10025, 'plg_system_kunena', 'plugin', 'kunena', 'system', 0, 1, 1, 0, '{"legacy":false,"name":"plg_system_kunena","type":"plugin","creationDate":"2012-01-31","author":"Kunena Team","copyright":"www.kunena.org","authorEmail":"Kunena@kunena.org","authorUrl":"http:\\/\\/www.kunena.org","version":"1.7.2","description":"Kunena System Plugin -- Please do not unpublish or uninstall","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10027, 'tranz', 'component', 'com_tranz', '', 1, 1, 1, 0, '{"legacy":false,"name":"tranz","type":"component","creationDate":"18.12.2011","author":"Oleg Kazantsev","copyright":"Copyright \\u00a9 2011, Masters, All Rights Reserved.","authorEmail":"masters@inbox.ru","authorUrl":"http:\\/\\/smotri.3dn.ru\\/","version":"1.7.0","description":"\\u0411\\u0438\\u043b\\u043b\\u0438\\u043d\\u0433","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10046, 'com_gantry', 'component', 'com_gantry', '', 1, 1, 1, 0, '{"legacy":false,"name":"Gantry","type":"component","creationDate":"April 2, 2012","author":"RocketTheme, LLC","copyright":"(C) 2005 - 2012 RocketTheme, LLC. All rights reserved.","authorEmail":"support@rockettheme.com","authorUrl":"http:\\/\\/www.rockettheme.com","version":"3.2.19","description":"${project.description}","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, -1),
(10029, 'Tranz - qfeedback', 'module', 'mod_qfeedback', '', 0, 1, 1, 0, '{"legacy":false,"name":"Tranz - qfeedback","type":"module","creationDate":"2012 01 07","author":"Oleg Kazantsev","copyright":"Masters Copyright (C) 2011-2012. All rights reserved.","authorEmail":"masters@inbox.ru","authorUrl":"http:\\/\\/www.com","version":"1.4","description":"Feedback","group":""}', '{"format":"h1"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10030, 'Tranz - sslider', 'module', 'mod_sslider', '', 0, 1, 1, 0, '{"legacy":false,"name":"Tranz - sslider","type":"module","creationDate":"2012 01 15","author":"Oleg Kazantsev","copyright":"Masters Copyright (C) 2011-2012. All rights reserved.","authorEmail":"masters@inbox.ru","authorUrl":"http:\\/\\/www.com","version":"1.4","description":"sslider","group":""}', '{"format":"h1"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10031, 'Tranz-schet', 'module', 'mod_schet', '', 0, 1, 1, 0, '{"legacy":false,"name":"Tranz-schet","type":"module","creationDate":"2012 feb 23","author":"Oleg Kazantsev","copyright":"Masters Copyright (C) 1998-2012. All rights reserved.","authorEmail":"masters@inbox.ru","authorUrl":"http:\\/\\/\\u0443\\u043c\\u043d\\u044b\\u0439\\u0444\\u043e\\u0440\\u0443\\u043c.\\u0440\\u0444","version":"1.0","description":"Actual hours","group":""}', '{"format":"h1"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10032, 'com_jcomments', 'component', 'com_jcomments', '', 1, 1, 0, 0, '{"legacy":true,"name":"JComments","type":"component","creationDate":"20\\/02\\/2012","author":"smart","copyright":"Copyright 2006-2012 JoomlaTune.ru All rights reserved!","authorEmail":"smart@joomlatune.ru","authorUrl":"http:\\/\\/www.joomlatune.ru","version":"2.3.0","description":"JComments lets your users comment on content items.","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10033, 'plg_content_jcomments', 'plugin', 'jcomments', 'content', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', 7, 0),
(10034, 'plg_search_jcomments', 'plugin', 'jcomments', 'search', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', 1, 0),
(10035, 'plg_system_jcomments', 'plugin', 'jcomments', 'system', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', 11, 0),
(10036, 'plg_editors-xtd_jcommentson', 'plugin', 'jcommentson', 'editors-xtd', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', 5, 0),
(10037, 'plg_editors-xtd_jcommentsoff', 'plugin', 'jcommentsoff', 'editors-xtd', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', 5, 0),
(10038, 'plg_user_jcomments', 'plugin', 'jcomments', 'user', 0, 1, 1, 0, '', '', '', '', 0, '0000-00-00 00:00:00', 3, 0),
(10039, 'www', 'module', 'mod_www', '', 0, 1, 1, 0, '{"legacy":false,"name":"www","type":"module","creationDate":"2012 01 15","author":"Oleg Kazantsev","copyright":"Masters Copyright (C) 2011-2012. All rights reserved.","authorEmail":"masters@inbox.ru","authorUrl":"http:\\/\\/www.com","version":"1.4","description":"www","group":""}', '{"format":"h1"}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(28, 'com_joomlaupdate', 'component', 'com_joomlaupdate', '', 1, 1, 0, 1, '{"legacy":false,"name":"com_joomlaupdate","type":"component","creationDate":"February 2012","author":"Joomla! Project","copyright":"(C) 2005 - 2012 Open Source Matters. All rights reserved.","authorEmail":"admin@joomla.org","authorUrl":"www.joomla.org","version":"2.5.2","description":"COM_JOOMLAUPDATE_XML_DESCRIPTION","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10047, 'TinyMCE ru-RU', 'file', 'tinymce_ru-ru', '', 0, 1, 0, 0, '{"legacy":false,"name":"TinyMCE ru-RU","type":"file","creationDate":"2012-06-19","author":"Russian Translation Team","copyright":"Copyright (C) 2005 - 2012 Open Source Matters. All rights reserved","authorEmail":"smart@joomlaportal.ru","authorUrl":"www.joomlaportal.ru","version":"3.5.2.1","description":"Russian Language Package for TinyMCE 3.5.2.1 in Joomla 2.5","group":""}', '', '', '', 0, '0000-00-00 00:00:00', 0, 0),
(10048, 'earth', 'module', 'mod_earth', '', 0, 1, 1, 0, '{"legacy":false,"name":"earth","type":"module","creationDate":"2014 01 22","author":"Oleg Kazantsev","copyright":"Masters Copyright (C) 2011-2014. All rights reserved.","authorEmail":"masters@inbox.ru","authorUrl":"http:\\/\\/www.com","version":"1.0","description":"earth","group":""}', '{}', '', '', 0, '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_filters`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_filters` (
  `filter_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(10) unsigned NOT NULL,
  `created_by_alias` varchar(255) NOT NULL,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `map_count` int(10) unsigned NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `params` mediumtext,
  PRIMARY KEY (`filter_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `indexdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md5sum` varchar(32) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `state` int(5) DEFAULT '1',
  `access` int(5) DEFAULT '0',
  `language` varchar(8) NOT NULL,
  `publish_start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_end_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `list_price` double unsigned NOT NULL DEFAULT '0',
  `sale_price` double unsigned NOT NULL DEFAULT '0',
  `type_id` int(11) NOT NULL,
  `object` mediumblob NOT NULL,
  PRIMARY KEY (`link_id`),
  KEY `idx_type` (`type_id`),
  KEY `idx_title` (`title`),
  KEY `idx_md5` (`md5sum`),
  KEY `idx_url` (`url`(75)),
  KEY `idx_published_list` (`published`,`state`,`access`,`publish_start_date`,`publish_end_date`,`list_price`),
  KEY `idx_published_sale` (`published`,`state`,`access`,`publish_start_date`,`publish_end_date`,`sale_price`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_terms0`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_terms0` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_terms1`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_terms1` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_terms2`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_terms2` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_terms3`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_terms3` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_terms4`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_terms4` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_terms5`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_terms5` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_terms6`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_terms6` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_terms7`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_terms7` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_terms8`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_terms8` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_terms9`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_terms9` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_termsa`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_termsa` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_termsb`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_termsb` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_termsc`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_termsc` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_termsd`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_termsd` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_termse`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_termse` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_links_termsf`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_links_termsf` (
  `link_id` int(10) unsigned NOT NULL,
  `term_id` int(10) unsigned NOT NULL,
  `weight` float unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`term_id`),
  KEY `idx_term_weight` (`term_id`,`weight`),
  KEY `idx_link_term_weight` (`link_id`,`term_id`,`weight`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_taxonomy`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_taxonomy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `state` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `access` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ordering` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `state` (`state`),
  KEY `ordering` (`ordering`),
  KEY `access` (`access`),
  KEY `idx_parent_published` (`parent_id`,`state`,`access`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `w96sn_finder_taxonomy`
--

INSERT INTO `w96sn_finder_taxonomy` (`id`, `parent_id`, `title`, `state`, `access`, `ordering`) VALUES
(1, 0, 'ROOT', 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_taxonomy_map`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_taxonomy_map` (
  `link_id` int(10) unsigned NOT NULL,
  `node_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`link_id`,`node_id`),
  KEY `link_id` (`link_id`),
  KEY `node_id` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_terms`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_terms` (
  `term_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `term` varchar(75) NOT NULL,
  `stem` varchar(75) NOT NULL,
  `common` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `phrase` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `weight` float unsigned NOT NULL DEFAULT '0',
  `soundex` varchar(75) NOT NULL,
  `links` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  UNIQUE KEY `idx_term` (`term`),
  KEY `idx_term_phrase` (`term`,`phrase`),
  KEY `idx_stem_phrase` (`stem`,`phrase`),
  KEY `idx_soundex_phrase` (`soundex`,`phrase`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_terms_common`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_terms_common` (
  `term` varchar(75) NOT NULL,
  `language` varchar(3) NOT NULL,
  KEY `idx_word_lang` (`term`,`language`),
  KEY `idx_lang` (`language`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_finder_terms_common`
--

INSERT INTO `w96sn_finder_terms_common` (`term`, `language`) VALUES
('a', 'en'),
('about', 'en'),
('after', 'en'),
('ago', 'en'),
('all', 'en'),
('am', 'en'),
('an', 'en'),
('and', 'en'),
('ani', 'en'),
('any', 'en'),
('are', 'en'),
('aren''t', 'en'),
('as', 'en'),
('at', 'en'),
('be', 'en'),
('but', 'en'),
('by', 'en'),
('for', 'en'),
('from', 'en'),
('get', 'en'),
('go', 'en'),
('how', 'en'),
('if', 'en'),
('in', 'en'),
('into', 'en'),
('is', 'en'),
('isn''t', 'en'),
('it', 'en'),
('its', 'en'),
('me', 'en'),
('more', 'en'),
('most', 'en'),
('must', 'en'),
('my', 'en'),
('new', 'en'),
('no', 'en'),
('none', 'en'),
('not', 'en'),
('noth', 'en'),
('nothing', 'en'),
('of', 'en'),
('off', 'en'),
('often', 'en'),
('old', 'en'),
('on', 'en'),
('onc', 'en'),
('once', 'en'),
('onli', 'en'),
('only', 'en'),
('or', 'en'),
('other', 'en'),
('our', 'en'),
('ours', 'en'),
('out', 'en'),
('over', 'en'),
('page', 'en'),
('she', 'en'),
('should', 'en'),
('small', 'en'),
('so', 'en'),
('some', 'en'),
('than', 'en'),
('thank', 'en'),
('that', 'en'),
('the', 'en'),
('their', 'en'),
('theirs', 'en'),
('them', 'en'),
('then', 'en'),
('there', 'en'),
('these', 'en'),
('they', 'en'),
('this', 'en'),
('those', 'en'),
('thus', 'en'),
('time', 'en'),
('times', 'en'),
('to', 'en'),
('too', 'en'),
('true', 'en'),
('under', 'en'),
('until', 'en'),
('up', 'en'),
('upon', 'en'),
('use', 'en'),
('user', 'en'),
('users', 'en'),
('veri', 'en'),
('version', 'en'),
('very', 'en'),
('via', 'en'),
('want', 'en'),
('was', 'en'),
('way', 'en'),
('were', 'en'),
('what', 'en'),
('when', 'en'),
('where', 'en'),
('whi', 'en'),
('which', 'en'),
('who', 'en'),
('whom', 'en'),
('whose', 'en'),
('why', 'en'),
('wide', 'en'),
('will', 'en'),
('with', 'en'),
('within', 'en'),
('without', 'en'),
('would', 'en'),
('yes', 'en'),
('yet', 'en'),
('you', 'en'),
('your', 'en'),
('yours', 'en');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_tokens`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_tokens` (
  `term` varchar(75) NOT NULL,
  `stem` varchar(75) NOT NULL,
  `common` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `phrase` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `weight` float unsigned NOT NULL DEFAULT '1',
  `context` tinyint(1) unsigned NOT NULL DEFAULT '2',
  KEY `idx_word` (`term`),
  KEY `idx_context` (`context`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_tokens_aggregate`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_tokens_aggregate` (
  `term_id` int(10) unsigned NOT NULL,
  `map_suffix` char(1) NOT NULL,
  `term` varchar(75) NOT NULL,
  `stem` varchar(75) NOT NULL,
  `common` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `phrase` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `term_weight` float unsigned NOT NULL,
  `context` tinyint(1) unsigned NOT NULL DEFAULT '2',
  `context_weight` float unsigned NOT NULL,
  `total_weight` float unsigned NOT NULL,
  KEY `token` (`term`),
  KEY `keyword_id` (`term_id`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_finder_types`
--

CREATE TABLE IF NOT EXISTS `w96sn_finder_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `mime` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `w96sn_finder_types`
--

INSERT INTO `w96sn_finder_types` (`id`, `title`, `mime`) VALUES
(1, 'Category', ''),
(2, 'Contact', ''),
(3, 'Article', ''),
(4, 'News Feed', ''),
(5, 'Web Link', '');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_jcomments`
--

CREATE TABLE IF NOT EXISTS `w96sn_jcomments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent` int(11) unsigned NOT NULL DEFAULT '0',
  `thread_id` int(11) unsigned NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL DEFAULT '',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `object_id` int(11) unsigned NOT NULL DEFAULT '0',
  `object_group` varchar(255) NOT NULL DEFAULT '',
  `object_params` text NOT NULL,
  `lang` varchar(255) NOT NULL DEFAULT '',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `homepage` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `comment` text NOT NULL,
  `ip` varchar(39) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `isgood` smallint(5) NOT NULL DEFAULT '0',
  `ispoor` smallint(5) NOT NULL DEFAULT '0',
  `published` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `subscribe` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `source` varchar(255) NOT NULL DEFAULT '',
  `source_id` int(11) unsigned NOT NULL DEFAULT '0',
  `checked_out` int(11) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `editor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_userid` (`userid`),
  KEY `idx_source` (`source`),
  KEY `idx_email` (`email`),
  KEY `idx_lang` (`lang`),
  KEY `idx_subscribe` (`subscribe`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_object` (`object_id`,`object_group`,`published`,`date`),
  KEY `idx_path` (`path`,`level`),
  KEY `idx_thread` (`thread_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_jcomments_blacklist`
--

CREATE TABLE IF NOT EXISTS `w96sn_jcomments_blacklist` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(39) NOT NULL DEFAULT '',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) unsigned NOT NULL DEFAULT '0',
  `expire` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `reason` tinytext NOT NULL,
  `notes` tinytext NOT NULL,
  `checked_out` int(11) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `editor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_jcomments_custom_bbcodes`
--

CREATE TABLE IF NOT EXISTS `w96sn_jcomments_custom_bbcodes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  `simple_pattern` varchar(255) NOT NULL DEFAULT '',
  `simple_replacement_html` text NOT NULL,
  `simple_replacement_text` text NOT NULL,
  `pattern` varchar(255) NOT NULL DEFAULT '',
  `replacement_html` text NOT NULL,
  `replacement_text` text NOT NULL,
  `button_acl` text NOT NULL,
  `button_open_tag` varchar(16) NOT NULL DEFAULT '',
  `button_close_tag` varchar(16) NOT NULL DEFAULT '',
  `button_title` varchar(255) NOT NULL DEFAULT '',
  `button_prompt` varchar(255) NOT NULL DEFAULT '',
  `button_image` varchar(255) NOT NULL DEFAULT '',
  `button_css` varchar(255) NOT NULL DEFAULT '',
  `button_enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ordering` int(11) unsigned NOT NULL DEFAULT '0',
  `published` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `w96sn_jcomments_custom_bbcodes`
--

INSERT INTO `w96sn_jcomments_custom_bbcodes` (`id`, `name`, `simple_pattern`, `simple_replacement_html`, `simple_replacement_text`, `pattern`, `replacement_html`, `replacement_text`, `button_acl`, `button_open_tag`, `button_close_tag`, `button_title`, `button_prompt`, `button_image`, `button_css`, `button_enabled`, `ordering`, `published`) VALUES
(1, 'YouTube Video', '[youtube]http://www.youtube.com/watch?v={IDENTIFIER}[/youtube]', '<object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/{IDENTIFIER}"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/{IDENTIFIER}" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>', 'http://www.youtube.com/watch?v={IDENTIFIER}', '\\[youtube\\]http\\:\\/\\/www\\.youtube\\.com\\/watch\\?v\\=([A-Za-z0-9-_]+)([A-Za-z0-9\\%\\&\\=\\#]*?)\\[\\/youtube\\]', '<object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/${1}"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/${1}" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>', 'http://www.youtube.com/watch?v=${1}', '1,2,3,4,5,6,7,8', '[youtube]', '[/youtube]', 'YouTube Video', '', '', 'bbcode-youtube', 1, 1, 1),
(2, 'YouTube Video (short syntax)', '[youtube]{IDENTIFIER}[/youtube]', '<object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/{IDENTIFIER}"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/{IDENTIFIER}" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>', 'http://www.youtube.com/watch?v={IDENTIFIER}', '\\[youtube\\]([A-Za-z0-9-_]+)([A-Za-z0-9\\%\\&\\=\\#]*?)\\[\\/youtube\\]', '<object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/${1}"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/${1}" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>', 'http://www.youtube.com/watch?v=${1}', '1,2,3,4,5,6,7,8', '', '', '', '', '', '', 0, 2, 1),
(3, 'YouTube Video (full syntax)', '[youtube]http://www.youtube.com/watch?v={IDENTIFIER}{TEXT}[/youtube]', '<object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/{IDENTIFIER}"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/{IDENTIFIER}" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>', 'http://www.youtube.com/watch?v={IDENTIFIER}', '\\[youtube\\]http\\:\\/\\/www\\.youtube\\.com\\/watch\\?v\\=([A-Za-z0-9-_]+)([\\w0-9-\\+\\=\\!\\?\\(\\)\\[\\]\\{\\}\\&\\%\\*\\#\\.,_ ]+)\\[\\/youtube\\]', '<object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/${1}"></param><param name="wmode" value="transparent"></param><embed src="http://www.youtube.com/v/${1}" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>', 'http://www.youtube.com/watch?v=${1}', '1,2,3,4,5,6,7,8', '[youtube]', '[/youtube]', 'YouTube Video', '', '', '', 0, 3, 1),
(4, 'Google Video', '[google]http://video.google.com/videoplay?docid={IDENTIFIER}[/google]', '<embed style="width:425px; height:350px;" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId={IDENTIFIER}" flashvars=""></embed>', 'http://video.google.com/videoplay?docid={IDENTIFIER}', '\\[google\\]http\\:\\/\\/video\\.google\\.com\\/videoplay\\?docid\\=([A-Za-z0-9-_]+)([A-Za-z0-9\\%\\&\\=\\#]*?)\\[\\/google\\]', '<embed style="width:425px; height:350px;" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId=${1}" flashvars=""></embed>', 'http://video.google.com/videoplay?docid=${1}', '1,2,3,4,5,6,7,8', '[google]', '[/google]', 'Google Video', '', '', 'bbcode-google', 1, 4, 1),
(5, 'Google Video (short syntax)', '[google]{IDENTIFIER}[/google]', '<embed style="width:425px; height:350px;" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId={IDENTIFIER}" flashvars=""></embed>', 'http://video.google.com/videoplay?docid={IDENTIFIER}', '\\[google\\]([A-Za-z0-9-_]+)([A-Za-z0-9\\%\\&\\=\\#]*?)\\[\\/google\\]', '<embed style="width:425px; height:350px;" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId=${1}" flashvars=""></embed>', 'http://video.google.com/videoplay?docid=${1}', '1,2,3,4,5,6,7,8', '', '', '', '', '', '', 0, 5, 1),
(6, 'Google Video (alternate syntax)', '[gv]http://video.google.com/videoplay?docid={IDENTIFIER}[/gv]', '<embed style="width:425px; height:350px;" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId={IDENTIFIER}" flashvars=""></embed>', 'http://video.google.com/videoplay?docid={IDENTIFIER}', '\\[gv\\]http\\:\\/\\/video\\.google\\.com\\/videoplay\\?docid\\=([A-Za-z0-9-_]+)([A-Za-z0-9\\%\\&\\=\\#]*?)\\[\\/gv\\]', '<embed style="width:425px; height:350px;" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId=${1}" flashvars=""></embed>', 'http://video.google.com/videoplay?docid=${1}', '1,2,3,4,5,6,7,8', '', '', '', '', '', '', 0, 6, 1),
(7, 'Google Video (alternate syntax)', '[googlevideo]http://video.google.com/videoplay?docid={IDENTIFIER}[/googlevideo]', '<embed style="width:425px; height:350px;" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId={IDENTIFIER}" flashvars=""></embed>', 'http://video.google.com/videoplay?docid={IDENTIFIER}', '\\[googlevideo\\]http\\:\\/\\/video\\.google\\.com\\/videoplay\\?docid\\=([A-Za-z0-9-_]+)([A-Za-z0-9\\%\\&\\=\\#]*?)\\[\\/googlevideo\\]', '<embed style="width:425px; height:350px;" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId=${1}" flashvars=""></embed>', 'http://video.google.com/videoplay?docid=${1}', '1,2,3,4,5,6,7,8', '', '', '', '', '', '', 0, 7, 1),
(8, 'Facebook Video', '[fv]http://www.facebook.com/video/video.php?v={IDENTIFIER}[/fv]', '<object width="425" height="350"><param name="movie" value="http://www.facebook.com/v/{IDENTIFIER}"></param><param name="wmode" value="transparent"></param><embed src="http://www.facebook.com/v/{IDENTIFIER}" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>', 'http://www.facebook.com/video/video.php?v={IDENTIFIER}', '\\[fv\\]http\\:\\/\\/www\\.facebook\\.com\\/video\\/video\\.php\\?v\\=([A-Za-z0-9-_]+)([A-Za-z0-9\\%\\&\\=\\#]*?)\\[\\/fv\\]', '<object width="425" height="350"><param name="movie" value="http://www.facebook.com/v/${1}"></param><param name="wmode" value="transparent"></param><embed src="http://www.facebook.com/v/${1}" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>', 'http://www.facebook.com/video/video.php?v=${1}', '1,2,3,4,5,6,7,8', '[fv]', '[/fv]', 'Facebook Video', '', '', 'bbcode-facebook', 1, 8, 1),
(9, 'Facebook Video (short syntax)', '[fv]{IDENTIFIER}[/fv]', '<object width="425" height="350"><param name="movie" value="http://www.facebook.com/v/{IDENTIFIER}"></param><param name="wmode" value="transparent"></param><embed src="http://www.facebook.com/v/{IDENTIFIER}" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>', 'http://www.facebook.com/video/video.php?v={IDENTIFIER}', '\\[fv\\]([A-Za-z0-9-_]+)([A-Za-z0-9\\%\\&\\=\\#]*?)\\[\\/fv\\]', '<object width="425" height="350"><param name="movie" value="http://www.facebook.com/v/${1}"></param><param name="wmode" value="transparent"></param><embed src="http://www.facebook.com/v/${1}" type="application/x-shockwave-flash" wmode="transparent" width="425" height="350"></embed></object>', 'http://www.facebook.com/video/video.php?v=${1}', '1,2,3,4,5,6,7,8', '', '', '', '', '', '', 0, 9, 1),
(10, 'Wiki', '[wiki]{SIMPLETEXT}[/wiki]', '<a href="http://www.wikipedia.org/wiki/{SIMPLETEXT}" title="{SIMPLETEXT}" target="_blank">{SIMPLETEXT}</a>', '{SIMPLETEXT}', '\\[wiki\\]([A-Za-z0-9\\-\\+\\.,_ ]+)\\[\\/wiki\\]', '<a href="http://www.wikipedia.org/wiki/${1}" title="${1}" target="_blank">${1}</a>', '${1}', '1,2,3,4,5,6,7,8', '[wiki]', '[/wiki]', 'Wikipedia', '', '', 'bbcode-wiki', 1, 10, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_jcomments_objects`
--

CREATE TABLE IF NOT EXISTS `w96sn_jcomments_objects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `object_id` int(11) unsigned NOT NULL DEFAULT '0',
  `object_group` varchar(255) NOT NULL DEFAULT '',
  `lang` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  `access` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `expired` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_object` (`object_id`,`object_group`,`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=106 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_jcomments_reports`
--

CREATE TABLE IF NOT EXISTS `w96sn_jcomments_reports` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `commentid` int(11) unsigned NOT NULL DEFAULT '0',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(39) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `reason` tinytext NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_jcomments_settings`
--

CREATE TABLE IF NOT EXISTS `w96sn_jcomments_settings` (
  `component` varchar(50) NOT NULL DEFAULT '',
  `lang` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  PRIMARY KEY (`component`,`lang`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_jcomments_settings`
--

INSERT INTO `w96sn_jcomments_settings` (`component`, `lang`, `name`, `value`) VALUES
('', '', 'enable_username_check', '1'),
('', '', 'username_maxlength', '999'),
('', '', 'forbidden_names', 'administrator,moderator'),
('', '', 'author_name', '2'),
('', '', 'author_email', '2'),
('', '', 'author_homepage', '0'),
('', '', 'comment_maxlength', '999999'),
('', '', 'comment_minlength', '0'),
('', '', 'word_maxlength', '15'),
('', '', 'link_maxlength', '30'),
('', '', 'flood_time', '10'),
('', '', 'enable_notification', '1'),
('', '', 'notification_email', 'masters@inbox.ru'),
('', '', 'template', 'default'),
('', '', 'enable_smiles', '1'),
('', '', 'comments_per_page', '10'),
('', '', 'comments_page_limit', '15'),
('', '', 'comments_pagination', 'both'),
('', '', 'comments_order', 'ASC'),
('', '', 'show_commentlength', '0'),
('', '', 'enable_nested_quotes', '1'),
('', '', 'enable_rss', '1'),
('', '', 'censor_replace_word', '[censored]'),
('', '', 'can_comment', '1,6,7,2,3,4,5,8'),
('', '', 'can_reply', '1,6,7,2,3,4,5,8'),
('', '', 'show_policy', '1,2'),
('', '', 'enable_captcha', '1'),
('', '', 'floodprotection', '1,2,3,4'),
('', '', 'enable_comment_length_check', '1,2'),
('', '', 'autopublish', '6,7,2,3,4,5,8'),
('', '', 'autolinkurls', '1,6,7,2,3,4,5,8'),
('', '', 'enable_subscribe', '1,6,7,2,3,4,5,8'),
('', '', 'enable_gravatar', ''),
('', '', 'can_view_homepage', '6,7,2,3,4,5,8'),
('', '', 'can_publish', '6,7,5,8'),
('', '', 'can_publish_for_my_object', ''),
('', '', 'can_view_email', '6,7,8'),
('', '', 'can_edit', '6,7,8'),
('', '', 'can_edit_own', '6,7,2,3,4,5,8'),
('', '', 'can_edit_for_my_object', ''),
('', '', 'can_delete', '6,7,8'),
('', '', 'can_delete_own', '6,7,8'),
('', '', 'can_delete_for_my_object', ''),
('', '', 'enable_bbcode_b', '1,6,7,2,3,4,5,8'),
('', '', 'enable_bbcode_i', '1,6,7,2,3,4,5,8'),
('', '', 'enable_bbcode_u', '6,7,2,3,4,5,8'),
('', '', 'enable_bbcode_s', '6,7,2,3,4,5,8'),
('', '', 'enable_bbcode_url', '6,7,2,3,4,5,8'),
('', '', 'message_banned', 'Комментарии вам не доступны'),
('', '', 'enable_bbcode_img', '6,7,2,3,4,5,8'),
('', '', 'max_comments_per_object', '0'),
('', '', 'enable_bbcode_list', '6,7,2,3,4,5,8'),
('', '', 'captcha_engine', 'kcaptcha'),
('', '', 'enable_bbcode_hide', '6,7,2,3,4,5,8'),
('', '', 'form_position', '0'),
('', '', 'can_view_ip', '7,8'),
('', '', 'enable_categories', ''),
('', '', 'emailprotection', '1'),
('', '', 'enable_comment_maxlength_check', ''),
('', '', 'enable_autocensor', '1'),
('', '', 'badwords', ''),
('', '', 'smiles', ':D	laugh.gif\n:lol:	lol.gif\n:-)	smile.gif\n;-)	wink.gif\n8)	cool.gif\n:-|	normal.gif\n:-*	whistling.gif\n:oops:	redface.gif\n:sad:	sad.gif\n:cry:	cry.gif\n:o	surprised.gif\n:-?	confused.gif\n:-x	sick.gif\n:eek:	shocked.gif\n:zzz	sleeping.gif\n:P	tongue.gif\n:roll:	rolleyes.gif\n:sigh:	unsure.gif'),
('', '', 'enable_mambots', '1'),
('', '', 'form_show', '1'),
('', '', 'display_author', 'name'),
('', '', 'enable_voting', '1'),
('', '', 'can_vote', '1,6,7,2,3,4,5,8'),
('', '', 'reports_before_unpublish', '0'),
('', '', 'merge_time', '0'),
('', '', 'template_view', 'tree'),
('', '', 'message_policy_post', ''),
('', '', 'message_policy_whocancomment', 'У вас недостаточно прав для добавления комментариев.\r\nВозможно, вам необходимо зарегистрироваться на сайте.'),
('', '', 'message_locked', 'Комментирование не доступно'),
('', '', 'comment_title', '0'),
('', '', 'enable_custom_bbcode', '1'),
('', '', 'enable_bbcode_quote', '1,6,7,2,3,4,5,8'),
('', '', 'reports_per_comment', '10'),
('', '', 'enable_bbcode_code', ''),
('', '', 'enable_reports', '1'),
('', '', 'enable_geshi', '0'),
('', '', 'can_report', ''),
('', '', 'load_cached_comments', '0'),
('', '', 'enable_quick_moderation', '1'),
('', '', 'notification_type', '1,2'),
('', '', 'delete_mode', '0'),
('', '', 'enable_blacklist', '1'),
('', '', 'can_ban', '7,8'),
('', '', 'smiles_path', '/components/com_jcomments/images/smiles/'),
('', '', 'feed_limit', '100'),
('', '', 'report_reason_required', '1'),
('', '', 'tree_order', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_jcomments_subscriptions`
--

CREATE TABLE IF NOT EXISTS `w96sn_jcomments_subscriptions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `object_id` int(11) unsigned NOT NULL DEFAULT '0',
  `object_group` varchar(255) NOT NULL DEFAULT '',
  `lang` varchar(255) NOT NULL DEFAULT '',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `hash` varchar(255) NOT NULL DEFAULT '',
  `published` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `source` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `idx_object` (`object_id`,`object_group`),
  KEY `idx_lang` (`lang`),
  KEY `idx_source` (`source`),
  KEY `idx_hash` (`hash`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_jcomments_version`
--

CREATE TABLE IF NOT EXISTS `w96sn_jcomments_version` (
  `version` varchar(16) NOT NULL DEFAULT '',
  `previous` varchar(16) NOT NULL DEFAULT '',
  `installed` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_jcomments_version`
--

INSERT INTO `w96sn_jcomments_version` (`version`, `previous`, `installed`, `updated`) VALUES
('2.3.0', '', '2012-03-03 02:54:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_jcomments_votes`
--

CREATE TABLE IF NOT EXISTS `w96sn_jcomments_votes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `commentid` int(11) unsigned NOT NULL DEFAULT '0',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(39) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `value` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_comment` (`commentid`,`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_announcement`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_announcement` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `sdescription` text NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `ordering` tinyint(4) NOT NULL DEFAULT '0',
  `showdate` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_attachments`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mesid` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  `hash` char(32) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `folder` varchar(255) NOT NULL,
  `filetype` varchar(20) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mesid` (`mesid`),
  KEY `userid` (`userid`),
  KEY `hash` (`hash`),
  KEY `filename` (`filename`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_categories`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) DEFAULT '0',
  `name` tinytext,
  `cat_emoticon` tinyint(4) NOT NULL DEFAULT '0',
  `locked` tinyint(4) NOT NULL DEFAULT '0',
  `alert_admin` tinyint(4) NOT NULL DEFAULT '0',
  `moderated` tinyint(4) NOT NULL DEFAULT '1',
  `moderators` varchar(15) DEFAULT NULL,
  `accesstype` varchar(20) NOT NULL DEFAULT 'none',
  `access` int(11) NOT NULL DEFAULT '0',
  `pub_access` tinyint(4) DEFAULT '1',
  `pub_recurse` tinyint(4) DEFAULT '1',
  `admin_access` tinyint(4) DEFAULT '0',
  `admin_recurse` tinyint(4) DEFAULT '1',
  `ordering` smallint(6) NOT NULL DEFAULT '0',
  `future2` int(11) DEFAULT '0',
  `published` tinyint(4) NOT NULL DEFAULT '0',
  `checked_out` tinyint(4) NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `review` tinyint(4) NOT NULL DEFAULT '0',
  `allow_anonymous` tinyint(4) NOT NULL DEFAULT '0',
  `post_anonymous` tinyint(4) NOT NULL DEFAULT '0',
  `hits` int(11) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `headerdesc` text NOT NULL,
  `class_sfx` varchar(20) NOT NULL,
  `allow_polls` tinyint(4) NOT NULL DEFAULT '0',
  `id_last_msg` int(10) NOT NULL DEFAULT '0',
  `numTopics` mediumint(8) NOT NULL DEFAULT '0',
  `numPosts` mediumint(8) NOT NULL DEFAULT '0',
  `time_last_msg` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  KEY `published_pubaccess_id` (`published`,`pub_access`,`id`),
  KEY `msg_id` (`id_last_msg`),
  KEY `category_access` (`accesstype`,`access`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `w96sn_kunena_categories`
--

INSERT INTO `w96sn_kunena_categories` (`id`, `parent`, `name`, `cat_emoticon`, `locked`, `alert_admin`, `moderated`, `moderators`, `accesstype`, `access`, `pub_access`, `pub_recurse`, `admin_access`, `admin_recurse`, `ordering`, `future2`, `published`, `checked_out`, `checked_out_time`, `review`, `allow_anonymous`, `post_anonymous`, `hits`, `description`, `headerdesc`, `class_sfx`, `allow_polls`, `id_last_msg`, `numTopics`, `numPosts`, `time_last_msg`) VALUES
(18, 15, 'Ссылки на другие банки времени', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 11, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 131, 1, 2, 1341999177),
(19, 0, 'Технический раздел', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 12, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, 0),
(20, 19, 'Вопросы по неисправностям компьютера', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 4, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 0, 0, 0, 0),
(4, 1, 'Просто общение на любые темы', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 2, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 0, 0, 0, 0),
(5, 1, 'Предложения о сотрудничестве', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 3, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 33, 0, 0, 1326912284),
(6, 1, 'Просьбы к участникам о помощи', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 6, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 0, 0, 0, 0),
(7, 1, 'Просьбы к организаторам о помощи связанной с проектом', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 8, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 133, 1, 1, 1357995833),
(12, 11, 'Вопросы', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 13, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 85, 1, 23, 1328812981),
(13, 11, 'Предложения и пожелания', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 14, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 122, 2, 24, 1328873205),
(14, 11, 'Ошибки', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 15, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 0, 0, 0, 0),
(15, 0, 'О банках времени', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 10, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 0, 131, 2, 9, 1341999177),
(16, 15, 'История и прогресс банков времени', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 7, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 0, 0, 0, 0),
(17, 15, 'Обсуждение других банков времени', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 9, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 129, 1, 7, 1328881650),
(1, 0, 'Общий раздел', 0, 0, 0, 1, NULL, 'joomla.level', 1, 2, 1, 0, 1, 1, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 0, 133, 1, 1, 1357995833),
(8, 0, 'О проекте', 0, 0, 0, 0, NULL, 'joomla.level', 1, 1, 1, 8, 1, 5, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 0, 126, 5, 79, 1328876275),
(9, 8, 'Вопросы по принципам работы', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 16, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 117, 2, 32, 1328871533),
(10, 8, 'Обсуждение принципов работы банка времени', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 17, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 0, 0, 0, 0),
(11, 8, 'Обсуждение сайта-портала банка времени', 0, 0, 0, 1, NULL, 'joomla.level', 1, 1, 1, 8, 1, 18, 0, 1, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, '', '', '', 1, 126, 3, 47, 1328876275);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_config`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_config` (
  `id` int(11) NOT NULL DEFAULT '0',
  `board_title` text,
  `email` text,
  `board_offline` int(11) DEFAULT NULL,
  `board_ofset` text,
  `offline_message` text,
  `enablerss` int(11) DEFAULT NULL,
  `enablepdf` int(11) DEFAULT NULL,
  `threads_per_page` int(11) DEFAULT NULL,
  `messages_per_page` int(11) DEFAULT NULL,
  `messages_per_page_search` int(11) DEFAULT NULL,
  `showhistory` int(11) DEFAULT NULL,
  `historylimit` int(11) DEFAULT NULL,
  `shownew` int(11) DEFAULT NULL,
  `jmambot` int(11) DEFAULT NULL,
  `disemoticons` int(11) DEFAULT NULL,
  `template` text,
  `showannouncement` int(11) DEFAULT NULL,
  `avataroncat` int(11) DEFAULT NULL,
  `catimagepath` text,
  `showchildcaticon` int(11) DEFAULT NULL,
  `annmodid` text,
  `rtewidth` int(11) DEFAULT NULL,
  `rteheight` int(11) DEFAULT NULL,
  `enableforumjump` int(11) DEFAULT NULL,
  `reportmsg` int(11) DEFAULT NULL,
  `username` int(11) DEFAULT NULL,
  `askemail` int(11) DEFAULT NULL,
  `showemail` int(11) DEFAULT NULL,
  `showuserstats` int(11) DEFAULT NULL,
  `showkarma` int(11) DEFAULT NULL,
  `useredit` int(11) DEFAULT NULL,
  `useredittime` int(11) DEFAULT NULL,
  `useredittimegrace` int(11) DEFAULT NULL,
  `editmarkup` int(11) DEFAULT NULL,
  `allowsubscriptions` int(11) DEFAULT NULL,
  `subscriptionschecked` int(11) DEFAULT NULL,
  `allowfavorites` int(11) DEFAULT NULL,
  `maxsubject` int(11) DEFAULT NULL,
  `maxsig` int(11) DEFAULT NULL,
  `regonly` int(11) DEFAULT NULL,
  `changename` int(11) DEFAULT NULL,
  `pubwrite` int(11) DEFAULT NULL,
  `floodprotection` int(11) DEFAULT NULL,
  `mailmod` int(11) DEFAULT NULL,
  `mailadmin` int(11) DEFAULT NULL,
  `captcha` int(11) DEFAULT NULL,
  `mailfull` int(11) DEFAULT NULL,
  `allowavatar` int(11) DEFAULT NULL,
  `allowavatarupload` int(11) DEFAULT NULL,
  `allowavatargallery` int(11) DEFAULT NULL,
  `avatarquality` int(11) DEFAULT NULL,
  `avatarsize` int(11) DEFAULT NULL,
  `allowimageupload` int(11) DEFAULT NULL,
  `allowimageregupload` int(11) DEFAULT NULL,
  `imageheight` int(11) DEFAULT NULL,
  `imagewidth` int(11) DEFAULT NULL,
  `imagesize` int(11) DEFAULT NULL,
  `allowfileupload` int(11) DEFAULT NULL,
  `allowfileregupload` int(11) DEFAULT NULL,
  `filetypes` text,
  `filesize` int(11) DEFAULT NULL,
  `showranking` int(11) DEFAULT NULL,
  `rankimages` int(11) DEFAULT NULL,
  `avatar_src` text,
  `fb_profile` text,
  `pm_component` text,
  `userlist_rows` int(11) DEFAULT NULL,
  `userlist_online` int(11) DEFAULT NULL,
  `userlist_avatar` int(11) DEFAULT NULL,
  `userlist_name` int(11) DEFAULT NULL,
  `userlist_username` int(11) DEFAULT NULL,
  `userlist_posts` int(11) DEFAULT NULL,
  `userlist_karma` int(11) DEFAULT NULL,
  `userlist_email` int(11) DEFAULT NULL,
  `userlist_usertype` int(11) DEFAULT NULL,
  `userlist_joindate` int(11) DEFAULT NULL,
  `userlist_lastvisitdate` int(11) DEFAULT NULL,
  `userlist_userhits` int(11) DEFAULT NULL,
  `latestcategory` text,
  `showstats` int(11) DEFAULT NULL,
  `showwhoisonline` int(11) DEFAULT NULL,
  `showgenstats` int(11) DEFAULT NULL,
  `showpopuserstats` int(11) DEFAULT NULL,
  `popusercount` int(11) DEFAULT NULL,
  `showpopsubjectstats` int(11) DEFAULT NULL,
  `popsubjectcount` int(11) DEFAULT NULL,
  `usernamechange` int(11) DEFAULT NULL,
  `rules_infb` int(11) DEFAULT NULL,
  `rules_cid` int(11) DEFAULT NULL,
  `help_infb` int(11) DEFAULT NULL,
  `help_cid` int(11) DEFAULT NULL,
  `showspoilertag` int(11) DEFAULT NULL,
  `showvideotag` int(11) DEFAULT NULL,
  `showebaytag` int(11) DEFAULT NULL,
  `trimlongurls` int(11) DEFAULT NULL,
  `trimlongurlsfront` int(11) DEFAULT NULL,
  `trimlongurlsback` int(11) DEFAULT NULL,
  `autoembedyoutube` int(11) DEFAULT NULL,
  `autoembedebay` int(11) DEFAULT NULL,
  `ebaylanguagecode` text,
  `fbsessiontimeout` int(11) DEFAULT NULL,
  `highlightcode` int(11) DEFAULT NULL,
  `rss_type` text,
  `rss_timelimit` text,
  `rss_limit` int(11) DEFAULT NULL,
  `rss_included_categories` text,
  `rss_excluded_categories` text,
  `rss_specification` text,
  `rss_allow_html` int(11) DEFAULT NULL,
  `rss_author_format` text,
  `rss_author_in_title` int(11) DEFAULT NULL,
  `rss_word_count` text,
  `rss_old_titles` int(11) DEFAULT NULL,
  `rss_cache` int(11) DEFAULT NULL,
  `fbdefaultpage` text,
  `default_sort` text,
  `alphauserpointsnumchars` int(11) DEFAULT NULL,
  `sef` int(11) DEFAULT NULL,
  `sefcats` int(11) DEFAULT NULL,
  `sefutf8` int(11) DEFAULT NULL,
  `showimgforguest` int(11) DEFAULT NULL,
  `showfileforguest` int(11) DEFAULT NULL,
  `pollnboptions` int(11) DEFAULT NULL,
  `pollallowvoteone` int(11) DEFAULT NULL,
  `pollenabled` int(11) DEFAULT NULL,
  `poppollscount` int(11) DEFAULT NULL,
  `showpoppollstats` int(11) DEFAULT NULL,
  `polltimebtvotes` text,
  `pollnbvotesbyuser` int(11) DEFAULT NULL,
  `pollresultsuserslist` int(11) DEFAULT NULL,
  `maxpersotext` int(11) DEFAULT NULL,
  `ordering_system` text,
  `post_dateformat` text,
  `post_dateformat_hover` text,
  `hide_ip` int(11) DEFAULT NULL,
  `js_actstr_integration` int(11) DEFAULT NULL,
  `imagetypes` text,
  `checkmimetypes` int(11) DEFAULT NULL,
  `imagemimetypes` text,
  `imagequality` int(11) DEFAULT NULL,
  `thumbheight` int(11) DEFAULT NULL,
  `thumbwidth` int(11) DEFAULT NULL,
  `hideuserprofileinfo` text,
  `integration_access` text,
  `integration_login` text,
  `integration_avatar` text,
  `integration_profile` text,
  `integration_private` text,
  `integration_activity` text,
  `boxghostmessage` int(11) DEFAULT NULL,
  `userdeletetmessage` int(11) DEFAULT NULL,
  `latestcategory_in` int(11) DEFAULT NULL,
  `topicicons` int(11) DEFAULT NULL,
  `onlineusers` int(11) DEFAULT NULL,
  `debug` int(11) DEFAULT NULL,
  `catsautosubscribed` int(11) DEFAULT NULL,
  `showbannedreason` int(11) DEFAULT NULL,
  `version_check` int(11) DEFAULT NULL,
  `showthankyou` int(11) DEFAULT NULL,
  `showpopthankyoustats` int(11) DEFAULT NULL,
  `popthankscount` int(11) DEFAULT NULL,
  `mod_see_deleted` int(11) DEFAULT NULL,
  `bbcode_img_secure` text,
  `listcat_show_moderators` int(11) DEFAULT NULL,
  `lightbox` int(11) DEFAULT NULL,
  `activity_limit` int(11) DEFAULT NULL,
  `show_list_time` int(11) DEFAULT NULL,
  `show_session_type` int(11) DEFAULT NULL,
  `show_session_starttime` int(11) DEFAULT NULL,
  `userlist_allowed` int(11) DEFAULT NULL,
  `userlist_count_users` int(11) DEFAULT NULL,
  `enable_threaded_layouts` int(11) DEFAULT NULL,
  `category_subscriptions` text,
  `topic_subscriptions` text,
  `pubprofile` int(11) DEFAULT NULL,
  `thankyou_max` int(11) DEFAULT NULL,
  `email_recipient_count` int(11) DEFAULT NULL,
  `email_recipient_privacy` text,
  `email_visible_address` text,
  `captcha_post_limit` int(11) DEFAULT NULL,
  `recaptcha_publickey` text,
  `recaptcha_privatekey` text,
  `recaptcha_theme` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_kunena_config`
--

INSERT INTO `w96sn_kunena_config` (`id`, `board_title`, `email`, `board_offline`, `board_ofset`, `offline_message`, `enablerss`, `enablepdf`, `threads_per_page`, `messages_per_page`, `messages_per_page_search`, `showhistory`, `historylimit`, `shownew`, `jmambot`, `disemoticons`, `template`, `showannouncement`, `avataroncat`, `catimagepath`, `showchildcaticon`, `annmodid`, `rtewidth`, `rteheight`, `enableforumjump`, `reportmsg`, `username`, `askemail`, `showemail`, `showuserstats`, `showkarma`, `useredit`, `useredittime`, `useredittimegrace`, `editmarkup`, `allowsubscriptions`, `subscriptionschecked`, `allowfavorites`, `maxsubject`, `maxsig`, `regonly`, `changename`, `pubwrite`, `floodprotection`, `mailmod`, `mailadmin`, `captcha`, `mailfull`, `allowavatar`, `allowavatarupload`, `allowavatargallery`, `avatarquality`, `avatarsize`, `allowimageupload`, `allowimageregupload`, `imageheight`, `imagewidth`, `imagesize`, `allowfileupload`, `allowfileregupload`, `filetypes`, `filesize`, `showranking`, `rankimages`, `avatar_src`, `fb_profile`, `pm_component`, `userlist_rows`, `userlist_online`, `userlist_avatar`, `userlist_name`, `userlist_username`, `userlist_posts`, `userlist_karma`, `userlist_email`, `userlist_usertype`, `userlist_joindate`, `userlist_lastvisitdate`, `userlist_userhits`, `latestcategory`, `showstats`, `showwhoisonline`, `showgenstats`, `showpopuserstats`, `popusercount`, `showpopsubjectstats`, `popsubjectcount`, `usernamechange`, `rules_infb`, `rules_cid`, `help_infb`, `help_cid`, `showspoilertag`, `showvideotag`, `showebaytag`, `trimlongurls`, `trimlongurlsfront`, `trimlongurlsback`, `autoembedyoutube`, `autoembedebay`, `ebaylanguagecode`, `fbsessiontimeout`, `highlightcode`, `rss_type`, `rss_timelimit`, `rss_limit`, `rss_included_categories`, `rss_excluded_categories`, `rss_specification`, `rss_allow_html`, `rss_author_format`, `rss_author_in_title`, `rss_word_count`, `rss_old_titles`, `rss_cache`, `fbdefaultpage`, `default_sort`, `alphauserpointsnumchars`, `sef`, `sefcats`, `sefutf8`, `showimgforguest`, `showfileforguest`, `pollnboptions`, `pollallowvoteone`, `pollenabled`, `poppollscount`, `showpoppollstats`, `polltimebtvotes`, `pollnbvotesbyuser`, `pollresultsuserslist`, `maxpersotext`, `ordering_system`, `post_dateformat`, `post_dateformat_hover`, `hide_ip`, `js_actstr_integration`, `imagetypes`, `checkmimetypes`, `imagemimetypes`, `imagequality`, `thumbheight`, `thumbwidth`, `hideuserprofileinfo`, `integration_access`, `integration_login`, `integration_avatar`, `integration_profile`, `integration_private`, `integration_activity`, `boxghostmessage`, `userdeletetmessage`, `latestcategory_in`, `topicicons`, `onlineusers`, `debug`, `catsautosubscribed`, `showbannedreason`, `version_check`, `showthankyou`, `showpopthankyoustats`, `popthankscount`, `mod_see_deleted`, `bbcode_img_secure`, `listcat_show_moderators`, `lightbox`, `activity_limit`, `show_list_time`, `show_session_type`, `show_session_starttime`, `userlist_allowed`, `userlist_count_users`, `enable_threaded_layouts`, `category_subscriptions`, `topic_subscriptions`, `pubprofile`, `thankyou_max`, `email_recipient_count`, `email_recipient_privacy`, `email_visible_address`, `captcha_post_limit`, `recaptcha_publickey`, `recaptcha_privatekey`, `recaptcha_theme`) VALUES
(1, 'Форум', 'forum@timebankspb.ru', 0, '0.00', '<h2>The Forum is currently offline for maintenance.</h2>\r\n<div>Check back soon!</div>', 1, 1, 20, 10, 60, 1, 6, 1, 0, 0, 'default', 1, 0, 'category_images/', 1, '62', 450, 300, 1, 1, 0, 0, 0, 1, 1, 1, 0, 600, 1, 1, 1, 1, 60, 600, 1, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 65, 2048, 0, 1, 800, 800, 2048, 0, 1, 'txt,rtf,pdf,zip,tar.gz,tgz,tar.bz2', 7000, 1, 1, 'fb', 'fb', 'no', 30, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, '', 1, 1, 1, 1, 5, 1, 5, 0, 1, 3, 1, 1, 1, 1, 1, 1, 40, 20, 1, 1, 'en-us', 1800, 0, 'topic', 'month', 100, '', '', 'rss2.0', 1, 'name', 1, '0', 1, 900, 'recent', 'asc', 0, 1, 0, 0, 1, 1, 30, 1, 1, 5, 1, '00:15:00', 100, 1, 500, 'mesid', 'datetime', 'ago', 1, 0, 'jpg,jpeg,gif,png', 1, 'image/jpeg,image/jpg,image/gif,image/png', 50, 32, 32, 'put_empty', 'communitybuilder', 'communitybuilder', 'communitybuilder', 'kunena', 'uddeim', 'communitybuilder', 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 5, 0, 'text', 1, 1, 0, 720, 0, 0, 0, 1, 0, 'post', 'every', 1, 20, 0, 'bcc', '', 0, '', '', 'white');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_config_backup`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_config_backup` (
  `id` int(11) NOT NULL DEFAULT '0',
  `board_title` text,
  `email` text,
  `board_offline` int(11) DEFAULT NULL,
  `board_ofset` text,
  `offline_message` text,
  `enablerss` int(11) DEFAULT NULL,
  `enablepdf` int(11) DEFAULT NULL,
  `threads_per_page` int(11) DEFAULT NULL,
  `messages_per_page` int(11) DEFAULT NULL,
  `messages_per_page_search` int(11) DEFAULT NULL,
  `showhistory` int(11) DEFAULT NULL,
  `historylimit` int(11) DEFAULT NULL,
  `shownew` int(11) DEFAULT NULL,
  `jmambot` int(11) DEFAULT NULL,
  `disemoticons` int(11) DEFAULT NULL,
  `template` text,
  `showannouncement` int(11) DEFAULT NULL,
  `avataroncat` int(11) DEFAULT NULL,
  `catimagepath` text,
  `showchildcaticon` int(11) DEFAULT NULL,
  `annmodid` text,
  `rtewidth` int(11) DEFAULT NULL,
  `rteheight` int(11) DEFAULT NULL,
  `enableforumjump` int(11) DEFAULT NULL,
  `reportmsg` int(11) DEFAULT NULL,
  `username` int(11) DEFAULT NULL,
  `askemail` int(11) DEFAULT NULL,
  `showemail` int(11) DEFAULT NULL,
  `showuserstats` int(11) DEFAULT NULL,
  `showkarma` int(11) DEFAULT NULL,
  `useredit` int(11) DEFAULT NULL,
  `useredittime` int(11) DEFAULT NULL,
  `useredittimegrace` int(11) DEFAULT NULL,
  `editmarkup` int(11) DEFAULT NULL,
  `allowsubscriptions` int(11) DEFAULT NULL,
  `subscriptionschecked` int(11) DEFAULT NULL,
  `allowfavorites` int(11) DEFAULT NULL,
  `maxsubject` int(11) DEFAULT NULL,
  `maxsig` int(11) DEFAULT NULL,
  `regonly` int(11) DEFAULT NULL,
  `changename` int(11) DEFAULT NULL,
  `pubwrite` int(11) DEFAULT NULL,
  `floodprotection` int(11) DEFAULT NULL,
  `mailmod` int(11) DEFAULT NULL,
  `mailadmin` int(11) DEFAULT NULL,
  `captcha` int(11) DEFAULT NULL,
  `mailfull` int(11) DEFAULT NULL,
  `allowavatar` int(11) DEFAULT NULL,
  `allowavatarupload` int(11) DEFAULT NULL,
  `allowavatargallery` int(11) DEFAULT NULL,
  `avatarquality` int(11) DEFAULT NULL,
  `avatarsize` int(11) DEFAULT NULL,
  `allowimageupload` int(11) DEFAULT NULL,
  `allowimageregupload` int(11) DEFAULT NULL,
  `imageheight` int(11) DEFAULT NULL,
  `imagewidth` int(11) DEFAULT NULL,
  `imagesize` int(11) DEFAULT NULL,
  `allowfileupload` int(11) DEFAULT NULL,
  `allowfileregupload` int(11) DEFAULT NULL,
  `filetypes` text,
  `filesize` int(11) DEFAULT NULL,
  `showranking` int(11) DEFAULT NULL,
  `rankimages` int(11) DEFAULT NULL,
  `avatar_src` text,
  `fb_profile` text,
  `pm_component` text,
  `userlist_rows` int(11) DEFAULT NULL,
  `userlist_online` int(11) DEFAULT NULL,
  `userlist_avatar` int(11) DEFAULT NULL,
  `userlist_name` int(11) DEFAULT NULL,
  `userlist_username` int(11) DEFAULT NULL,
  `userlist_posts` int(11) DEFAULT NULL,
  `userlist_karma` int(11) DEFAULT NULL,
  `userlist_email` int(11) DEFAULT NULL,
  `userlist_usertype` int(11) DEFAULT NULL,
  `userlist_joindate` int(11) DEFAULT NULL,
  `userlist_lastvisitdate` int(11) DEFAULT NULL,
  `userlist_userhits` int(11) DEFAULT NULL,
  `latestcategory` text,
  `showstats` int(11) DEFAULT NULL,
  `showwhoisonline` int(11) DEFAULT NULL,
  `showgenstats` int(11) DEFAULT NULL,
  `showpopuserstats` int(11) DEFAULT NULL,
  `popusercount` int(11) DEFAULT NULL,
  `showpopsubjectstats` int(11) DEFAULT NULL,
  `popsubjectcount` int(11) DEFAULT NULL,
  `usernamechange` int(11) DEFAULT NULL,
  `rules_infb` int(11) DEFAULT NULL,
  `rules_cid` int(11) DEFAULT NULL,
  `help_infb` int(11) DEFAULT NULL,
  `help_cid` int(11) DEFAULT NULL,
  `showspoilertag` int(11) DEFAULT NULL,
  `showvideotag` int(11) DEFAULT NULL,
  `showebaytag` int(11) DEFAULT NULL,
  `trimlongurls` int(11) DEFAULT NULL,
  `trimlongurlsfront` int(11) DEFAULT NULL,
  `trimlongurlsback` int(11) DEFAULT NULL,
  `autoembedyoutube` int(11) DEFAULT NULL,
  `autoembedebay` int(11) DEFAULT NULL,
  `ebaylanguagecode` text,
  `fbsessiontimeout` int(11) DEFAULT NULL,
  `highlightcode` int(11) DEFAULT NULL,
  `rss_type` text,
  `rss_timelimit` text,
  `rss_limit` int(11) DEFAULT NULL,
  `rss_included_categories` text,
  `rss_excluded_categories` text,
  `rss_specification` text,
  `rss_allow_html` int(11) DEFAULT NULL,
  `rss_author_format` text,
  `rss_author_in_title` int(11) DEFAULT NULL,
  `rss_word_count` text,
  `rss_old_titles` int(11) DEFAULT NULL,
  `rss_cache` int(11) DEFAULT NULL,
  `fbdefaultpage` text,
  `default_sort` text,
  `alphauserpointsnumchars` int(11) DEFAULT NULL,
  `sef` int(11) DEFAULT NULL,
  `sefcats` int(11) DEFAULT NULL,
  `sefutf8` int(11) DEFAULT NULL,
  `showimgforguest` int(11) DEFAULT NULL,
  `showfileforguest` int(11) DEFAULT NULL,
  `pollnboptions` int(11) DEFAULT NULL,
  `pollallowvoteone` int(11) DEFAULT NULL,
  `pollenabled` int(11) DEFAULT NULL,
  `poppollscount` int(11) DEFAULT NULL,
  `showpoppollstats` int(11) DEFAULT NULL,
  `polltimebtvotes` text,
  `pollnbvotesbyuser` int(11) DEFAULT NULL,
  `pollresultsuserslist` int(11) DEFAULT NULL,
  `maxpersotext` int(11) DEFAULT NULL,
  `ordering_system` text,
  `post_dateformat` text,
  `post_dateformat_hover` text,
  `hide_ip` int(11) DEFAULT NULL,
  `js_actstr_integration` int(11) DEFAULT NULL,
  `imagetypes` text,
  `checkmimetypes` int(11) DEFAULT NULL,
  `imagemimetypes` text,
  `imagequality` int(11) DEFAULT NULL,
  `thumbheight` int(11) DEFAULT NULL,
  `thumbwidth` int(11) DEFAULT NULL,
  `hideuserprofileinfo` text,
  `integration_access` text,
  `integration_login` text,
  `integration_avatar` text,
  `integration_profile` text,
  `integration_private` text,
  `integration_activity` text,
  `boxghostmessage` int(11) DEFAULT NULL,
  `userdeletetmessage` int(11) DEFAULT NULL,
  `latestcategory_in` int(11) DEFAULT NULL,
  `topicicons` int(11) DEFAULT NULL,
  `onlineusers` int(11) DEFAULT NULL,
  `debug` int(11) DEFAULT NULL,
  `catsautosubscribed` int(11) DEFAULT NULL,
  `showbannedreason` int(11) DEFAULT NULL,
  `version_check` int(11) DEFAULT NULL,
  `showthankyou` int(11) DEFAULT NULL,
  `showpopthankyoustats` int(11) DEFAULT NULL,
  `popthankscount` int(11) DEFAULT NULL,
  `mod_see_deleted` int(11) DEFAULT NULL,
  `bbcode_img_secure` text,
  `listcat_show_moderators` int(11) DEFAULT NULL,
  `lightbox` int(11) DEFAULT NULL,
  `activity_limit` int(11) DEFAULT NULL,
  `show_list_time` int(11) DEFAULT NULL,
  `show_session_type` int(11) DEFAULT NULL,
  `show_session_starttime` int(11) DEFAULT NULL,
  `userlist_allowed` int(11) DEFAULT NULL,
  `userlist_count_users` int(11) DEFAULT NULL,
  `enable_threaded_layouts` int(11) DEFAULT NULL,
  `category_subscriptions` text,
  `topic_subscriptions` text,
  `pubprofile` int(11) DEFAULT NULL,
  `thankyou_max` int(11) DEFAULT NULL,
  `email_recipient_count` int(11) DEFAULT NULL,
  `email_recipient_privacy` text,
  `email_visible_address` text,
  `captcha_post_limit` int(11) DEFAULT NULL,
  `recaptcha_publickey` text,
  `recaptcha_privatekey` text,
  `recaptcha_theme` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_kunena_config_backup`
--

INSERT INTO `w96sn_kunena_config_backup` (`id`, `board_title`, `email`, `board_offline`, `board_ofset`, `offline_message`, `enablerss`, `enablepdf`, `threads_per_page`, `messages_per_page`, `messages_per_page_search`, `showhistory`, `historylimit`, `shownew`, `jmambot`, `disemoticons`, `template`, `showannouncement`, `avataroncat`, `catimagepath`, `showchildcaticon`, `annmodid`, `rtewidth`, `rteheight`, `enableforumjump`, `reportmsg`, `username`, `askemail`, `showemail`, `showuserstats`, `showkarma`, `useredit`, `useredittime`, `useredittimegrace`, `editmarkup`, `allowsubscriptions`, `subscriptionschecked`, `allowfavorites`, `maxsubject`, `maxsig`, `regonly`, `changename`, `pubwrite`, `floodprotection`, `mailmod`, `mailadmin`, `captcha`, `mailfull`, `allowavatar`, `allowavatarupload`, `allowavatargallery`, `avatarquality`, `avatarsize`, `allowimageupload`, `allowimageregupload`, `imageheight`, `imagewidth`, `imagesize`, `allowfileupload`, `allowfileregupload`, `filetypes`, `filesize`, `showranking`, `rankimages`, `avatar_src`, `fb_profile`, `pm_component`, `userlist_rows`, `userlist_online`, `userlist_avatar`, `userlist_name`, `userlist_username`, `userlist_posts`, `userlist_karma`, `userlist_email`, `userlist_usertype`, `userlist_joindate`, `userlist_lastvisitdate`, `userlist_userhits`, `latestcategory`, `showstats`, `showwhoisonline`, `showgenstats`, `showpopuserstats`, `popusercount`, `showpopsubjectstats`, `popsubjectcount`, `usernamechange`, `rules_infb`, `rules_cid`, `help_infb`, `help_cid`, `showspoilertag`, `showvideotag`, `showebaytag`, `trimlongurls`, `trimlongurlsfront`, `trimlongurlsback`, `autoembedyoutube`, `autoembedebay`, `ebaylanguagecode`, `fbsessiontimeout`, `highlightcode`, `rss_type`, `rss_timelimit`, `rss_limit`, `rss_included_categories`, `rss_excluded_categories`, `rss_specification`, `rss_allow_html`, `rss_author_format`, `rss_author_in_title`, `rss_word_count`, `rss_old_titles`, `rss_cache`, `fbdefaultpage`, `default_sort`, `alphauserpointsnumchars`, `sef`, `sefcats`, `sefutf8`, `showimgforguest`, `showfileforguest`, `pollnboptions`, `pollallowvoteone`, `pollenabled`, `poppollscount`, `showpoppollstats`, `polltimebtvotes`, `pollnbvotesbyuser`, `pollresultsuserslist`, `maxpersotext`, `ordering_system`, `post_dateformat`, `post_dateformat_hover`, `hide_ip`, `js_actstr_integration`, `imagetypes`, `checkmimetypes`, `imagemimetypes`, `imagequality`, `thumbheight`, `thumbwidth`, `hideuserprofileinfo`, `integration_access`, `integration_login`, `integration_avatar`, `integration_profile`, `integration_private`, `integration_activity`, `boxghostmessage`, `userdeletetmessage`, `latestcategory_in`, `topicicons`, `onlineusers`, `debug`, `catsautosubscribed`, `showbannedreason`, `version_check`, `showthankyou`, `showpopthankyoustats`, `popthankscount`, `mod_see_deleted`, `bbcode_img_secure`, `listcat_show_moderators`, `lightbox`, `activity_limit`, `show_list_time`, `show_session_type`, `show_session_starttime`, `userlist_allowed`, `userlist_count_users`, `enable_threaded_layouts`, `category_subscriptions`, `topic_subscriptions`, `pubprofile`, `thankyou_max`, `email_recipient_count`, `email_recipient_privacy`, `email_visible_address`, `captcha_post_limit`, `recaptcha_publickey`, `recaptcha_privatekey`, `recaptcha_theme`) VALUES
(1, 'Форум', 'forum@timebank.16mb.com', 0, '0.00', '<h2>The Forum is currently offline for maintenance.</h2>\r\n<div>Check back soon!</div>', 1, 1, 20, 10, 60, 1, 6, 1, 0, 0, 'default', 1, 0, 'category_images/', 1, '62', 450, 300, 1, 1, 0, 0, 0, 1, 1, 1, 0, 600, 1, 1, 1, 1, 60, 600, 1, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 65, 2048, 0, 1, 800, 800, 2048, 0, 1, 'txt,rtf,pdf,zip,tar.gz,tgz,tar.bz2', 7000, 1, 1, 'fb', 'fb', 'no', 30, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, '', 1, 1, 1, 1, 5, 1, 5, 0, 1, 3, 1, 1, 1, 1, 1, 1, 40, 20, 1, 1, 'en-us', 1800, 0, 'topic', 'month', 100, '', '', 'rss2.0', 1, 'name', 1, '0', 1, 900, 'recent', 'asc', 0, 1, 0, 0, 1, 1, 30, 1, 1, 5, 1, '00:15:00', 100, 1, 500, 'mesid', 'datetime', 'ago', 1, 0, 'jpg,jpeg,gif,png', 1, 'image/jpeg,image/jpg,image/gif,image/png', 50, 32, 32, 'put_empty', 'communitybuilder', 'communitybuilder', 'communitybuilder', 'kunena', 'uddeim', 'communitybuilder', 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 5, 0, 'text', 1, 1, 0, 720, 0, 0, 0, 1, 0, 'post', 'every', 1, 20, 0, 'bcc', '', 0, '', '', 'white');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_favorites`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_favorites` (
  `thread` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `thread` (`thread`,`userid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_groups`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_groups` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_messages`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) DEFAULT '0',
  `thread` int(11) DEFAULT '0',
  `catid` int(11) NOT NULL DEFAULT '0',
  `name` tinytext,
  `userid` int(11) NOT NULL DEFAULT '0',
  `email` tinytext,
  `subject` tinytext,
  `time` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(15) DEFAULT NULL,
  `topic_emoticon` int(11) NOT NULL DEFAULT '0',
  `locked` tinyint(4) NOT NULL DEFAULT '0',
  `hold` tinyint(4) NOT NULL DEFAULT '0',
  `ordering` int(11) DEFAULT '0',
  `hits` int(11) DEFAULT '0',
  `moved` tinyint(4) DEFAULT '0',
  `modified_by` int(7) DEFAULT NULL,
  `modified_time` int(11) DEFAULT NULL,
  `modified_reason` tinytext,
  PRIMARY KEY (`id`),
  KEY `thread` (`thread`),
  KEY `ip` (`ip`),
  KEY `userid` (`userid`),
  KEY `time` (`time`),
  KEY `locked` (`locked`),
  KEY `hold_time` (`hold`,`time`),
  KEY `parent_hits` (`parent`,`hits`),
  KEY `catid_parent` (`catid`,`parent`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=134 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_messages_text`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_messages_text` (
  `mesid` int(11) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  PRIMARY KEY (`mesid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_moderation`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_moderation` (
  `catid` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  `future1` tinyint(4) DEFAULT '0',
  `future2` int(11) DEFAULT '0',
  PRIMARY KEY (`catid`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_polls`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `threadid` int(11) NOT NULL,
  `polltimetolive` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `threadid` (`threadid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_polls_options`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_polls_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pollid` int(11) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL,
  `votes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pollid` (`pollid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_polls_users`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_polls_users` (
  `pollid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `votes` int(11) DEFAULT NULL,
  `lasttime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `lastvote` int(11) DEFAULT NULL,
  UNIQUE KEY `pollid` (`pollid`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_ranks`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_ranks` (
  `rank_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `rank_title` varchar(255) NOT NULL DEFAULT '',
  `rank_min` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rank_special` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `rank_image` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rank_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `w96sn_kunena_ranks`
--

INSERT INTO `w96sn_kunena_ranks` (`rank_id`, `rank_title`, `rank_min`, `rank_special`, `rank_image`) VALUES
(1, 'Новый участник', 0, 0, 'rank1.gif'),
(2, 'Осваиваюсь на форуме', 20, 0, 'rank2.gif'),
(3, 'Захожу иногда', 40, 0, 'rank3.gif'),
(4, 'Давно я тут', 80, 0, 'rank4.gif'),
(5, 'Завсегдатай', 160, 0, 'rank5.gif'),
(6, 'Живу я здесь', 320, 0, 'rank6.gif'),
(7, 'Администратор', 0, 1, 'rankadmin.gif'),
(8, 'Модератор', 0, 1, 'rankmod.gif'),
(9, 'СПАМер', 0, 1, 'rankspammer.gif'),
(10, 'Заблокирован', 0, 1, 'rankbanned.gif');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_sessions`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_sessions` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `allowed` text,
  `lasttime` int(11) NOT NULL DEFAULT '0',
  `readtopics` text,
  `currvisit` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`),
  KEY `currvisit` (`currvisit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_smileys`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_smileys` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `code` varchar(12) NOT NULL DEFAULT '',
  `location` varchar(50) NOT NULL DEFAULT '',
  `greylocation` varchar(60) NOT NULL DEFAULT '',
  `emoticonbar` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

--
-- Дамп данных таблицы `w96sn_kunena_smileys`
--

INSERT INTO `w96sn_kunena_smileys` (`id`, `code`, `location`, `greylocation`, `emoticonbar`) VALUES
(1, 'B)', 'cool.png', 'cool-grey.png', 1),
(2, '8)', 'cool.png', 'cool-grey.png', 0),
(3, '8-)', 'cool.png', 'cool-grey.png', 0),
(4, ':-(', 'sad.png', 'sad-grey.png', 0),
(5, ':(', 'sad.png', 'sad-grey.png', 1),
(6, ':sad:', 'sad.png', 'sad-grey.png', 0),
(7, ':cry:', 'sad.png', 'sad-grey.png', 0),
(8, ':)', 'smile.png', 'smile-grey.png', 1),
(9, ':-)', 'smile.png', 'smile-grey.png', 0),
(10, ':cheer:', 'cheerful.png', 'cheerful-grey.png', 1),
(11, ';)', 'wink.png', 'wink-grey.png', 1),
(12, ';-)', 'wink.png', 'wink-grey.png', 0),
(13, ':wink:', 'wink.png', 'wink-grey.png', 0),
(14, ';-)', 'wink.png', 'wink-grey.png', 0),
(15, ':P', 'tongue.png', 'tongue-grey.png', 1),
(16, ':p', 'tongue.png', 'tongue-grey.png', 0),
(17, ':-p', 'tongue.png', 'tongue-grey.png', 0),
(18, ':-P', 'tongue.png', 'tongue-grey.png', 0),
(19, ':razz:', 'tongue.png', 'tongue-grey.png', 0),
(20, ':angry:', 'angry.png', 'angry-grey.png', 1),
(21, ':mad:', 'angry.png', 'angry-grey.png', 0),
(22, ':unsure:', 'unsure.png', 'unsure-grey.png', 1),
(23, ':o', 'shocked.png', 'shocked-grey.png', 0),
(24, ':-o', 'shocked.png', 'shocked-grey.png', 0),
(25, ':O', 'shocked.png', 'shocked-grey.png', 0),
(26, ':-O', 'shocked.png', 'shocked-grey.png', 0),
(27, ':eek:', 'shocked.png', 'shocked-grey.png', 0),
(28, ':ohmy:', 'shocked.png', 'shocked-grey.png', 1),
(29, ':huh:', 'wassat.png', 'wassat-grey.png', 1),
(30, ':?', 'confused.png', 'confused-grey.png', 0),
(31, ':-?', 'confused.png', 'confused-grey.png', 0),
(32, ':???', 'confused.png', 'confused-grey.png', 0),
(33, ':dry:', 'ermm.png', 'ermm-grey.png', 1),
(34, ':ermm:', 'ermm.png', 'ermm-grey.png', 0),
(35, ':lol:', 'grin.png', 'grin-grey.png', 1),
(36, ':X', 'sick.png', 'sick-grey.png', 0),
(37, ':x', 'sick.png', 'sick-grey.png', 0),
(38, ':sick:', 'sick.png', 'sick-grey.png', 1),
(39, ':silly:', 'silly.png', 'silly-grey.png', 1),
(40, ':y32b4:', 'silly.png', 'silly-grey.png', 0),
(41, ':blink:', 'blink.png', 'blink-grey.png', 1),
(42, ':blush:', 'blush.png', 'blush-grey.png', 1),
(43, ':oops:', 'blush.png', 'blush-grey.png', 1),
(44, ':kiss:', 'kissing.png', 'kissing-grey.png', 1),
(45, ':rolleyes:', 'blink.png', 'blink-grey.png', 0),
(46, ':roll:', 'blink.png', 'blink-grey.png', 0),
(47, ':woohoo:', 'w00t.png', 'w00t-grey.png', 1),
(48, ':side:', 'sideways.png', 'sideways-grey.png', 1),
(49, ':S', 'dizzy.png', 'dizzy-grey.png', 1),
(50, ':s', 'dizzy.png', 'dizzy-grey.png', 0),
(51, ':evil:', 'devil.png', 'devil-grey.png', 1),
(52, ':twisted:', 'devil.png', 'devil-grey.png', 0),
(53, ':whistle:', 'whistling.png', 'whistling-grey.png', 1),
(54, ':pinch:', 'pinch.png', 'pinch-grey.png', 1),
(55, ':D', 'laughing.png', 'laughing-grey.png', 0),
(56, ':-D', 'laughing.png', 'laughing-grey.png', 0),
(57, ':grin:', 'laughing.png', 'laughing-grey.png', 0),
(58, ':laugh:', 'laughing.png', 'laughing-grey.png', 0),
(59, ':|', 'neutral.png', 'neutral-grey.png', 0),
(60, ':-|', 'neutral.png', 'neutral-grey.png', 0),
(61, ':neutral:', 'neutral.png', 'neutral-grey.png', 0),
(62, ':mrgreen:', 'mrgreen.png', 'mrgreen-grey.png', 0),
(63, ':?:', 'question.png', 'question-grey.png', 0),
(64, ':!:', 'exclamation.png', 'exclamation-grey.png', 0),
(65, ':arrow:', 'arrow.png', 'arrow-grey.png', 0),
(66, ':idea:', 'idea.png', 'idea-grey.png', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_subscriptions`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_subscriptions` (
  `thread` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  `future1` int(11) DEFAULT '0',
  UNIQUE KEY `thread` (`thread`,`userid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_kunena_subscriptions`
--

INSERT INTO `w96sn_kunena_subscriptions` (`thread`, `userid`, `future1`) VALUES
(5, 42, 0),
(4, 42, 0),
(5, 44, 0),
(21, 42, 0),
(21, 50, 0),
(31, 68, 0),
(31, 42, 0),
(34, 42, 0),
(37, 79, 0),
(37, 42, 0),
(37, 84, 0),
(51, 84, 0),
(52, 84, 0),
(52, 42, 0),
(69, 84, 0),
(69, 42, 0),
(84, 84, 0),
(84, 42, 0),
(119, 84, 0),
(119, 42, 0),
(51, 42, 0),
(132, 160, 0),
(132, 42, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_subscriptions_categories`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_subscriptions_categories` (
  `catid` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL DEFAULT '0',
  `future1` int(11) DEFAULT '0',
  UNIQUE KEY `thread` (`catid`,`userid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_thankyou`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_thankyou` (
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `targetuserid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `postid` (`postid`,`userid`),
  KEY `userid` (`userid`),
  KEY `targetuserid` (`targetuserid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_kunena_thankyou`
--

INSERT INTO `w96sn_kunena_thankyou` (`postid`, `userid`, `targetuserid`, `time`) VALUES
(21, 50, 42, '2012-01-08 02:42:43'),
(51, 42, 84, '2012-02-09 19:14:38');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_users`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_users` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `view` varchar(8) NOT NULL DEFAULT 'flat',
  `signature` text,
  `moderator` int(11) DEFAULT '0',
  `banned` datetime DEFAULT NULL,
  `ordering` int(11) DEFAULT '0',
  `posts` int(11) DEFAULT '0',
  `avatar` varchar(255) DEFAULT NULL,
  `karma` int(11) DEFAULT '0',
  `karma_time` int(11) DEFAULT '0',
  `group_id` int(4) DEFAULT '1',
  `uhits` int(11) DEFAULT '0',
  `personalText` tinytext,
  `gender` tinyint(4) NOT NULL DEFAULT '0',
  `birthdate` date NOT NULL DEFAULT '0001-01-01',
  `location` varchar(50) DEFAULT NULL,
  `ICQ` varchar(50) DEFAULT NULL,
  `AIM` varchar(50) DEFAULT NULL,
  `YIM` varchar(50) DEFAULT NULL,
  `MSN` varchar(50) DEFAULT NULL,
  `SKYPE` varchar(50) DEFAULT NULL,
  `TWITTER` varchar(50) DEFAULT NULL,
  `FACEBOOK` varchar(50) DEFAULT NULL,
  `GTALK` varchar(50) DEFAULT NULL,
  `MYSPACE` varchar(50) DEFAULT NULL,
  `LINKEDIN` varchar(50) DEFAULT NULL,
  `DELICIOUS` varchar(50) DEFAULT NULL,
  `FRIENDFEED` varchar(50) DEFAULT NULL,
  `DIGG` varchar(50) DEFAULT NULL,
  `BLOGSPOT` varchar(50) DEFAULT NULL,
  `FLICKR` varchar(50) DEFAULT NULL,
  `BEBO` varchar(50) DEFAULT NULL,
  `websitename` varchar(50) DEFAULT NULL,
  `websiteurl` varchar(50) DEFAULT NULL,
  `rank` tinyint(4) NOT NULL DEFAULT '0',
  `hideEmail` tinyint(1) NOT NULL DEFAULT '1',
  `showOnline` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`userid`),
  KEY `group_id` (`group_id`),
  KEY `posts` (`posts`),
  KEY `uhits` (`uhits`),
  KEY `banned` (`banned`),
  KEY `moderator` (`moderator`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_kunena_users`
--

INSERT INTO `w96sn_kunena_users` (`userid`, `view`, `signature`, `moderator`, `banned`, `ordering`, `posts`, `avatar`, `karma`, `karma_time`, `group_id`, `uhits`, `personalText`, `gender`, `birthdate`, `location`, `ICQ`, `AIM`, `YIM`, `MSN`, `SKYPE`, `TWITTER`, `FACEBOOK`, `GTALK`, `MYSPACE`, `LINKEDIN`, `DELICIOUS`, `FRIENDFEED`, `DIGG`, `BLOGSPOT`, `FLICKR`, `BEBO`, `websitename`, `websiteurl`, `rank`, `hideEmail`, `showOnline`) VALUES
(165, 'flat', NULL, 0, NULL, 0, 0, NULL, 0, 0, 1, 0, NULL, 0, '0001-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_users_banned`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_users_banned` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `ip` varchar(128) DEFAULT NULL,
  `blocked` tinyint(4) NOT NULL DEFAULT '0',
  `expiration` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_time` datetime NOT NULL,
  `reason_private` text,
  `reason_public` text,
  `modified_by` int(11) DEFAULT NULL,
  `modified_time` datetime DEFAULT NULL,
  `comments` text,
  `params` text,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `ip` (`ip`),
  KEY `expiration` (`expiration`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_version`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_version` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version` varchar(20) NOT NULL,
  `versiondate` date NOT NULL,
  `installdate` date NOT NULL,
  `build` varchar(20) NOT NULL,
  `versionname` varchar(40) DEFAULT NULL,
  `state` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `w96sn_kunena_version`
--

INSERT INTO `w96sn_kunena_version` (`id`, `version`, `versiondate`, `installdate`, `build`, `versionname`, `state`) VALUES
(1, '1.7.2', '2012-01-31', '2012-02-22', '5215', 'Omega', '');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_kunena_whoisonline`
--

CREATE TABLE IF NOT EXISTS `w96sn_kunena_whoisonline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `time` varchar(14) NOT NULL DEFAULT '0',
  `item` int(6) DEFAULT '0',
  `what` varchar(255) DEFAULT '0',
  `func` varchar(50) DEFAULT NULL,
  `do` varchar(50) DEFAULT NULL,
  `task` varchar(50) DEFAULT NULL,
  `link` text,
  `userip` varchar(20) NOT NULL DEFAULT '',
  `user` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userid_userip` (`userid`,`userip`),
  KEY `func` (`func`),
  KEY `time` (`time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `w96sn_kunena_whoisonline`
--

INSERT INTO `w96sn_kunena_whoisonline` (`id`, `userid`, `time`, `item`, `what`, `func`, `do`, `task`, `link`, `userip`, `user`) VALUES
(49, 42, '1391613212', 0, 'просматривает последние обсуждения', 'latest', '', '', 'http://timebankspb.ru/forum/recent', '77.241.32.197', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_languages`
--

CREATE TABLE IF NOT EXISTS `w96sn_languages` (
  `lang_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lang_code` char(7) NOT NULL,
  `title` varchar(50) NOT NULL,
  `title_native` varchar(50) NOT NULL,
  `sef` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(512) NOT NULL,
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `sitename` varchar(1024) NOT NULL DEFAULT '',
  `published` int(11) NOT NULL DEFAULT '0',
  `access` int(10) unsigned NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`lang_id`),
  UNIQUE KEY `idx_sef` (`sef`),
  UNIQUE KEY `idx_image` (`image`),
  UNIQUE KEY `idx_langcode` (`lang_code`),
  KEY `idx_ordering` (`ordering`),
  KEY `idx_access` (`access`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `w96sn_languages`
--

INSERT INTO `w96sn_languages` (`lang_id`, `lang_code`, `title`, `title_native`, `sef`, `image`, `description`, `metakey`, `metadesc`, `sitename`, `published`, `access`, `ordering`) VALUES
(1, 'en-GB', 'English (UK)', 'English (UK)', 'en', 'en', '', '', '', '', 1, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_menu`
--

CREATE TABLE IF NOT EXISTS `w96sn_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menutype` varchar(24) NOT NULL COMMENT 'The type of menu this item belongs to. FK to #__menu_types.menutype',
  `title` varchar(255) NOT NULL COMMENT 'The display title of the menu item.',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'The SEF alias of the menu item.',
  `note` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(1024) NOT NULL COMMENT 'The computed path of the menu item based on the alias field.',
  `link` varchar(1024) NOT NULL COMMENT 'The actually link the menu item refers to.',
  `type` varchar(16) NOT NULL COMMENT 'The type of link: Component, URL, Alias, Separator',
  `published` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'The published state of the menu link.',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '1' COMMENT 'The parent menu item in the menu tree.',
  `level` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'The relative level in the tree.',
  `component_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to #__extensions.id',
  `ordering` int(11) NOT NULL DEFAULT '0' COMMENT 'The relative ordering of the menu item in the tree.',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'FK to #__users.id',
  `checked_out_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'The time the menu item was checked out.',
  `browserNav` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'The click behaviour of the link.',
  `access` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'The access level required to view the menu item.',
  `img` varchar(255) NOT NULL COMMENT 'The image of the menu item.',
  `template_style_id` int(10) unsigned NOT NULL DEFAULT '0',
  `params` text NOT NULL COMMENT 'JSON encoded data for the menu item.',
  `lft` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set lft.',
  `rgt` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set rgt.',
  `home` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'Indicates if this menu item is the home or default page.',
  `language` char(7) NOT NULL DEFAULT '',
  `client_id` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_client_id_parent_id_alias_language` (`client_id`,`parent_id`,`alias`,`language`),
  KEY `idx_componentid` (`component_id`,`menutype`,`published`,`access`),
  KEY `idx_menutype` (`menutype`),
  KEY `idx_left_right` (`lft`,`rgt`),
  KEY `idx_alias` (`alias`),
  KEY `idx_path` (`path`(333)),
  KEY `idx_language` (`language`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=184 ;

--
-- Дамп данных таблицы `w96sn_menu`
--

INSERT INTO `w96sn_menu` (`id`, `menutype`, `title`, `alias`, `note`, `path`, `link`, `type`, `published`, `parent_id`, `level`, `component_id`, `ordering`, `checked_out`, `checked_out_time`, `browserNav`, `access`, `img`, `template_style_id`, `params`, `lft`, `rgt`, `home`, `language`, `client_id`) VALUES
(1, '', 'Menu_Item_Root', 'root', '', '', '', '', 1, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '', 0, '', 0, 169, 0, '*', 0),
(2, 'menu', 'com_banners', 'Banners', '', 'Banners', 'index.php?option=com_banners', 'component', 0, 1, 1, 4, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:banners', 0, '', 1, 10, 0, '*', 1),
(3, 'menu', 'com_banners', 'Banners', '', 'Banners/Banners', 'index.php?option=com_banners', 'component', 0, 2, 2, 4, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:banners', 0, '', 2, 3, 0, '*', 1),
(4, 'menu', 'com_banners_categories', 'Categories', '', 'Banners/Categories', 'index.php?option=com_categories&extension=com_banners', 'component', 0, 2, 2, 6, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:banners-cat', 0, '', 4, 5, 0, '*', 1),
(5, 'menu', 'com_banners_clients', 'Clients', '', 'Banners/Clients', 'index.php?option=com_banners&view=clients', 'component', 0, 2, 2, 4, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:banners-clients', 0, '', 6, 7, 0, '*', 1),
(6, 'menu', 'com_banners_tracks', 'Tracks', '', 'Banners/Tracks', 'index.php?option=com_banners&view=tracks', 'component', 0, 2, 2, 4, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:banners-tracks', 0, '', 8, 9, 0, '*', 1),
(7, 'menu', 'com_contact', 'Contacts', '', 'Contacts', 'index.php?option=com_contact', 'component', 0, 1, 1, 8, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:contact', 0, '', 37, 42, 0, '*', 1),
(8, 'menu', 'com_contact', 'Contacts', '', 'Contacts/Contacts', 'index.php?option=com_contact', 'component', 0, 7, 2, 8, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:contact', 0, '', 38, 39, 0, '*', 1),
(9, 'menu', 'com_contact_categories', 'Categories', '', 'Contacts/Categories', 'index.php?option=com_categories&extension=com_contact', 'component', 0, 7, 2, 6, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:contact-cat', 0, '', 40, 41, 0, '*', 1),
(10, 'menu', 'com_messages', 'Messaging', '', 'Messaging', 'index.php?option=com_messages', 'component', 0, 1, 1, 15, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:messages', 0, '', 49, 54, 0, '*', 1),
(11, 'menu', 'com_messages_add', 'New Private Message', '', 'Messaging/New Private Message', 'index.php?option=com_messages&task=message.add', 'component', 0, 10, 2, 15, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:messages-add', 0, '', 50, 51, 0, '*', 1),
(12, 'menu', 'com_messages_read', 'Read Private Message', '', 'Messaging/Read Private Message', 'index.php?option=com_messages', 'component', 0, 10, 2, 15, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:messages-read', 0, '', 52, 53, 0, '*', 1),
(13, 'menu', 'com_newsfeeds', 'News Feeds', '', 'News Feeds', 'index.php?option=com_newsfeeds', 'component', 0, 1, 1, 17, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:newsfeeds', 0, '', 55, 60, 0, '*', 1),
(14, 'menu', 'com_newsfeeds_feeds', 'Feeds', '', 'News Feeds/Feeds', 'index.php?option=com_newsfeeds', 'component', 0, 13, 2, 17, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:newsfeeds', 0, '', 56, 57, 0, '*', 1),
(15, 'menu', 'com_newsfeeds_categories', 'Categories', '', 'News Feeds/Categories', 'index.php?option=com_categories&extension=com_newsfeeds', 'component', 0, 13, 2, 6, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:newsfeeds-cat', 0, '', 58, 59, 0, '*', 1),
(16, 'menu', 'com_redirect', 'Redirect', '', 'Redirect', 'index.php?option=com_redirect', 'component', 0, 1, 1, 24, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:redirect', 0, '', 71, 72, 0, '*', 1),
(17, 'menu', 'com_search', 'Basic Search', '', 'Basic Search', 'index.php?option=com_search', 'component', 0, 1, 1, 19, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:search', 0, '', 63, 64, 0, '*', 1),
(18, 'menu', 'com_weblinks', 'Weblinks', '', 'Weblinks', 'index.php?option=com_weblinks', 'component', 0, 1, 1, 21, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:weblinks', 0, '', 65, 70, 0, '*', 1),
(19, 'menu', 'com_weblinks_links', 'Links', '', 'Weblinks/Links', 'index.php?option=com_weblinks', 'component', 0, 18, 2, 21, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:weblinks', 0, '', 66, 67, 0, '*', 1),
(20, 'menu', 'com_weblinks_categories', 'Categories', '', 'Weblinks/Categories', 'index.php?option=com_categories&extension=com_weblinks', 'component', 0, 18, 2, 6, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:weblinks-cat', 0, '', 68, 69, 0, '*', 1),
(21, 'menu', 'com_finder', 'Smart Search', '', 'Smart Search', 'index.php?option=com_finder', 'component', 0, 1, 1, 27, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:finder', 0, '', 61, 62, 0, '*', 1),
(101, 'mainmenu', 'Главная', 'home', '', 'home', 'index.php?option=com_tranz&view=general&layout=general', 'component', 1, 1, 1, 10027, 0, 0, '0000-00-00 00:00:00', 0, 1, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":1,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 11, 12, 1, '*', 0),
(102, 'main', 'COM_ADSMANAGER', 'com-adsmanager', '', 'com-adsmanager', 'index.php?option=com_adsmanager', 'component', 0, 1, 1, 10003, 0, 0, '0000-00-00 00:00:00', 0, 1, '../components/com_adsmanager/images/menu/adsmanager-16.png', 0, '', 73, 92, 0, '', 1),
(103, 'main', 'COM_ADSMANAGER_CONFIGURATION', 'com-adsmanager-configuration', '', 'com-adsmanager/com-adsmanager-configuration', 'index.php?option=com_adsmanager&c=configuration', 'component', 0, 102, 2, 10003, 0, 0, '0000-00-00 00:00:00', 0, 1, '../components/com_adsmanager/images/menu/adsconfig.png', 0, '', 74, 75, 0, '', 1),
(104, 'main', 'COM_ADSMANAGER_FIELDS', 'com-adsmanager-fields', '', 'com-adsmanager/com-adsmanager-fields', 'index.php?option=com_adsmanager&c=fields', 'component', 0, 102, 2, 10003, 0, 0, '0000-00-00 00:00:00', 0, 1, '../components/com_adsmanager/images/menu/adsfield.png', 0, '', 76, 77, 0, '', 1),
(105, 'main', 'COM_ADSMANAGER_COLUMNS', 'com-adsmanager-columns', '', 'com-adsmanager/com-adsmanager-columns', 'index.php?option=com_adsmanager&c=columns', 'component', 0, 102, 2, 10003, 0, 0, '0000-00-00 00:00:00', 0, 1, '../components/com_adsmanager/images/menu/adscolumns.png', 0, '', 78, 79, 0, '', 1),
(106, 'main', 'COM_ADSMANAGER_AD_DISPLAY', 'com-adsmanager-ad-display', '', 'com-adsmanager/com-adsmanager-ad-display', 'index.php?option=com_adsmanager&c=positions', 'component', 0, 102, 2, 10003, 0, 0, '0000-00-00 00:00:00', 0, 1, '../components/com_adsmanager/images/menu/adspositions.png', 0, '', 80, 81, 0, '', 1),
(107, 'main', 'COM_ADSMANAGER_CATEGORIES', 'com-adsmanager-categories', '', 'com-adsmanager/com-adsmanager-categories', 'index.php?option=com_adsmanager&c=categories', 'component', 0, 102, 2, 10003, 0, 0, '0000-00-00 00:00:00', 0, 1, '../components/com_adsmanager/images/menu/adscategory.png', 0, '', 82, 83, 0, '', 1),
(108, 'main', 'COM_ADSMANAGER_CONTENTS', 'com-adsmanager-contents', '', 'com-adsmanager/com-adsmanager-contents', 'index.php?option=com_adsmanager&c=contents', 'component', 0, 102, 2, 10003, 0, 0, '0000-00-00 00:00:00', 0, 1, '../components/com_adsmanager/images/menu/adscontent.png', 0, '', 84, 85, 0, '', 1),
(109, 'main', 'COM_ADSMANAGER_PLUGINS', 'com-adsmanager-plugins', '', 'com-adsmanager/com-adsmanager-plugins', 'index.php?option=com_adsmanager&c=plugins', 'component', 0, 102, 2, 10003, 0, 0, '0000-00-00 00:00:00', 0, 1, '../components/com_adsmanager/images/menu/adsplugins.png', 0, '', 86, 87, 0, '', 1),
(110, 'main', 'COM_ADSMANAGER_FIELD_IMAGES', 'com-adsmanager-field-images', '', 'com-adsmanager/com-adsmanager-field-images', 'index.php?option=com_adsmanager&c=fieldimages', 'component', 0, 102, 2, 10003, 0, 0, '0000-00-00 00:00:00', 0, 1, '../components/com_adsmanager/images/menu/adsimages.png', 0, '', 88, 89, 0, '', 1),
(111, 'main', 'COM_ADSMANAGER_TOOLS', 'com-adsmanager-tools', '', 'com-adsmanager/com-adsmanager-tools', 'index.php?option=com_adsmanager&c=tools', 'component', 0, 102, 2, 10003, 0, 0, '0000-00-00 00:00:00', 0, 1, '../components/com_adsmanager/images/menu/adstools.png', 0, '', 90, 91, 0, '', 1),
(182, 'main', 'COM_COMPROFILER_SHOWCONFIG', 'com-comprofiler-showconfig', '', 'com-comprofiler/com-comprofiler-showconfig', 'index.php?option=com_comprofiler&task=showconfig&view=showconfig', 'component', 0, 175, 2, 10010, 0, 0, '0000-00-00 00:00:00', 0, 1, 'class:config', 0, '', 166, 167, 0, '', 1),
(181, 'main', 'COM_COMPROFILER_TOOLS', 'com-comprofiler-tools', '', 'com-comprofiler/com-comprofiler-tools', 'index.php?option=com_comprofiler&task=tools&view=tools', 'component', 0, 175, 2, 10010, 0, 0, '0000-00-00 00:00:00', 0, 1, 'class:maintenance', 0, '', 164, 165, 0, '', 1),
(180, 'main', 'COM_COMPROFILER_SHOWPLUGINS', 'com-comprofiler-showplugins', '', 'com-comprofiler/com-comprofiler-showplugins', 'index.php?option=com_comprofiler&task=showPlugins&view=showPlugins', 'component', 0, 175, 2, 10010, 0, 0, '0000-00-00 00:00:00', 0, 1, 'class:plugin', 0, '', 162, 163, 0, '', 1),
(179, 'main', 'COM_COMPROFILER_SHOWLISTS', 'com-comprofiler-showlists', '', 'com-comprofiler/com-comprofiler-showlists', 'index.php?option=com_comprofiler&task=showLists&view=showLists', 'component', 0, 175, 2, 10010, 0, 0, '0000-00-00 00:00:00', 0, 1, 'class:search', 0, '', 160, 161, 0, '', 1),
(178, 'main', 'COM_COMPROFILER_SHOWFIELD', 'com-comprofiler-showfield', '', 'com-comprofiler/com-comprofiler-showfield', 'index.php?option=com_comprofiler&task=showField&view=showField', 'component', 0, 175, 2, 10010, 0, 0, '0000-00-00 00:00:00', 0, 1, 'class:content', 0, '', 158, 159, 0, '', 1),
(176, 'main', 'COM_COMPROFILER_SHOWUSERS', 'com-comprofiler-showusers', '', 'com-comprofiler/com-comprofiler-showusers', 'index.php?option=com_comprofiler&task=showusers&view=showusers', 'component', 0, 175, 2, 10010, 0, 0, '0000-00-00 00:00:00', 0, 1, 'class:user', 0, '', 154, 155, 0, '', 1),
(177, 'main', 'COM_COMPROFILER_SHOWTAB', 'com-comprofiler-showtab', '', 'com-comprofiler/com-comprofiler-showtab', 'index.php?option=com_comprofiler&task=showTab&view=showTab', 'component', 0, 175, 2, 10010, 0, 0, '0000-00-00 00:00:00', 0, 1, 'class:themes', 0, '', 156, 157, 0, '', 1),
(175, 'main', 'COM_COMPROFILER', 'com-comprofiler', '', 'com-comprofiler', 'index.php?option=com_comprofiler', 'component', 0, 1, 1, 10010, 0, 0, '0000-00-00 00:00:00', 0, 1, '../components/com_comprofiler/plugin/templates/luna/images/header/icon-16-cb.png', 0, '', 153, 168, 0, '', 1),
(120, 'main', 'COM_UDDEIM_MENU', 'com-uddeim-menu', '', 'com-uddeim-menu', 'index.php?option=com_uddeim', 'component', 0, 1, 1, 10014, 0, 0, '0000-00-00 00:00:00', 0, 1, '../components/com_uddeim/templates/images/uddeim-favicon.png', 0, '', 93, 94, 0, '', 1),
(142, 'mainmenu', 'Спрос', 'spros', '', 'spros', 'index.php?option=com_adsmanager&view=list&catid=3', 'component', 1, 1, 1, 10003, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 13, 14, 0, '*', 0),
(123, 'main', 'COM_KUNENA', 'com-kunena', '', 'com-kunena', 'index.php?option=com_kunena', 'component', 0, 1, 1, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_kunena/media/icons/kunena-favicon.png', 0, '', 95, 108, 0, '', 1),
(124, 'main', 'COM_KUNENA_CONFIGURATION', 'com-kunena-configuration', '', 'com-kunena/com-kunena-configuration', 'index.php?option=com_kunena&task=showconfig', 'component', 0, 123, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_kunena/media/icons/config-favicon.png', 0, '', 96, 97, 0, '', 1),
(125, 'main', 'COM_KUNENA_CATEGORY_MANAGER', 'com-kunena-category-manager', '', 'com-kunena/com-kunena-category-manager', 'index.php?option=com_kunena&task=showAdministration', 'component', 0, 123, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_kunena/media/icons/forums-favicon.png', 0, '', 98, 99, 0, '', 1),
(126, 'main', 'COM_KUNENA_USER_MANAGER', 'com-kunena-user-manager', '', 'com-kunena/com-kunena-user-manager', 'index.php?option=com_kunena&task=showprofiles', 'component', 0, 123, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_kunena/media/icons/users-favicon.png', 0, '', 100, 101, 0, '', 1),
(127, 'main', 'COM_KUNENA_TEMPLATE_MANAGER', 'com-kunena-template-manager', '', 'com-kunena/com-kunena-template-manager', 'index.php?option=com_kunena&task=showTemplates', 'component', 0, 123, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_kunena/media/icons/templates-favicon.png', 0, '', 102, 103, 0, '', 1),
(128, 'main', 'COM_KUNENA_RANK_MANAGER', 'com-kunena-rank-manager', '', 'com-kunena/com-kunena-rank-manager', 'index.php?option=com_kunena&task=ranks', 'component', 0, 123, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_kunena/media/icons/ranks-favicon.png', 0, '', 104, 105, 0, '', 1),
(129, 'main', 'COM_KUNENA_TRASH_MANAGER', 'com-kunena-trash-manager', '', 'com-kunena/com-kunena-trash-manager', 'index.php?option=com_kunena&task=showtrashview', 'component', 0, 123, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_kunena/media/icons/trash-favicon.png', 0, '', 106, 107, 0, '', 1),
(130, 'kunenamenu', 'Форум', 'forum', '', 'forum', 'index.php?option=com_kunena&view=entrypage&defaultmenu=132', 'component', 1, 1, 1, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0}', 109, 128, 0, '*', 0),
(131, 'kunenamenu', 'Оглавление', 'index', '', 'forum/index', 'index.php?option=com_kunena&view=listcat', 'component', 1, 130, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0}', 110, 111, 0, '*', 0),
(132, 'kunenamenu', 'Последнее', 'recent', '', 'forum/recent', 'index.php?option=com_kunena&view=latest', 'component', 1, 130, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0}', 112, 113, 0, '*', 0),
(133, 'kunenamenu', 'Новая тема', 'newtopic', '', 'forum/newtopic', 'index.php?option=com_kunena&view=post&do=new', 'component', 1, 130, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0}', 114, 115, 0, '*', 0),
(134, 'kunenamenu', 'Без ответов', 'noreplies', '', 'forum/noreplies', 'index.php?option=com_kunena&view=latest&do=noreplies', 'component', 1, 130, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0}', 116, 117, 0, '*', 0),
(135, 'kunenamenu', 'Мои темы', 'mylatest', '', 'forum/mylatest', 'index.php?option=com_kunena&view=latest&do=mylatest', 'component', 1, 130, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0}', 118, 119, 0, '*', 0),
(136, 'kunenamenu', 'Профиль', 'profile', '', 'forum/profile', 'index.php?option=com_kunena&view=profile', 'component', 1, 130, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"integration":"0","menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"90","fusion_module_positions":"","splitmenu_item_subtext":""}', 120, 121, 0, '*', 0),
(137, 'kunenamenu', 'Правила', 'rules', '', 'forum/rules', 'index.php?option=com_kunena&view=rules', 'component', 1, 130, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0}', 122, 123, 0, '*', 0),
(138, 'kunenamenu', 'Помощь', 'help', '', 'forum/help', 'index.php?option=com_kunena&view=help', 'component', 0, 130, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0}', 124, 125, 0, '*', 0),
(139, 'kunenamenu', 'Поиск', 'search', '', 'forum/search', 'index.php?option=com_kunena&view=search', 'component', 1, 130, 2, 10024, 0, 0, '0000-00-00 00:00:00', 0, 1, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0}', 126, 127, 0, '*', 0),
(140, 'mainmenu', 'Форум', 'forum1', '', 'forum1', 'index.php?option=com_kunena&view=listcat&catid=0', 'component', 1, 1, 1, 10024, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 45, 46, 0, '*', 0),
(141, 'main', 'Управление банком времени', 'Управление банком времени', '', 'Управление банком времени', 'index.php?option=com_tranz&view=uprav', 'component', 0, 1, 1, 10027, 0, 0, '0000-00-00 00:00:00', 0, 1, 'class:component', 0, '', 129, 130, 0, '', 1),
(143, 'mainmenu', 'Предложение', 'predlozhenie', '', 'predlozhenie', 'index.php?option=com_adsmanager&view=list&catid=4', 'component', 1, 1, 1, 10003, 0, 42, '2013-02-23 19:22:44', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 15, 16, 0, '*', 0),
(144, 'mainmenu', 'Мои сообщения', 'message', '', 'message', 'index.php?option=com_uddeim&view=select&id=1', 'component', 1, 1, 1, 10014, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 19, 20, 0, '*', 0),
(145, 'mainmenu', 'Список всех участников', 'users', '', 'users', 'index.php?option=com_comprofiler&task=userslist', 'component', 1, 1, 1, 10010, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 21, 22, 0, '*', 0),
(146, 'mainmenu', 'Мой профиль', 'profile', '', 'profile', 'index.php?option=com_comprofiler', 'component', 1, 1, 1, 10010, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 25, 26, 0, '*', 0),
(147, 'mainmenu', 'Отправленные заявки', 'otpravlennye-zayavki', '', 'otpravlennye-zayavki', 'index.php?option=com_tranz&view=second&layout=second', 'component', 1, 1, 1, 10027, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 29, 30, 0, '*', 0),
(148, 'mainmenu', 'Пришедшие заявки', 'prishedshie-zayavki', '', 'prishedshie-zayavki', 'index.php?option=com_tranz&view=third&layout=third', 'component', 1, 1, 1, 10027, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 31, 32, 0, '*', 0),
(149, 'mainmenu', 'Мой отчёт о балансе', 'otchjot-o-platezhakh', '', 'otchjot-o-platezhakh', 'index.php?option=com_tranz&view=first&layout=first', 'component', 1, 1, 1, 10027, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 33, 34, 0, '*', 0),
(150, 'mainmenu', 'Мои настройки', 'settings', '', 'settings', 'index.php?option=com_tranz&view=options&layout=options', 'component', 1, 1, 1, 10027, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 35, 36, 0, '*', 0),
(151, 'mainmenu', 'Как это работает?', 'instr', '', 'instr', 'index.php?option=com_tranz&view=instr&layout=instr', 'component', 1, 1, 1, 10027, 0, 0, '0000-00-00 00:00:00', 0, 1, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 43, 44, 0, '*', 0),
(152, 'main', 'COM_JCOMMENTS', 'JComments', '', 'JComments', 'index.php?option=com_jcomments', 'component', 0, 1, 1, 10032, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_jcomments/assets/icon-16-jcomments.png', 0, '', 131, 148, 0, '', 1),
(153, 'main', 'COM_JCOMMENTS_COMMENTS', 'Comments', '', 'JComments/Comments', 'index.php?option=com_jcomments&task=comments', 'component', 0, 152, 2, 10032, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_jcomments/assets/icon-16-comments.png', 0, '', 132, 133, 0, '', 1),
(154, 'main', 'COM_JCOMMENTS_SETTINGS', 'Settings', '', 'JComments/Settings', 'index.php?option=com_jcomments&task=settings', 'component', 0, 152, 2, 10032, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_jcomments/assets/icon-16-settings.png', 0, '', 134, 135, 0, '', 1),
(155, 'main', 'COM_JCOMMENTS_SMILES', 'Smiles', '', 'JComments/Smiles', 'index.php?option=com_jcomments&task=smiles', 'component', 0, 152, 2, 10032, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_jcomments/assets/icon-16-smiles.png', 0, '', 136, 137, 0, '', 1),
(156, 'main', 'COM_JCOMMENTS_SUBSCRIPTIONS', 'Subscriptions', '', 'JComments/Subscriptions', 'index.php?option=com_jcomments&task=subscriptions', 'component', 0, 152, 2, 10032, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_jcomments/assets/icon-16-subscriptions.png', 0, '', 138, 139, 0, '', 1),
(157, 'main', 'COM_JCOMMENTS_CUSTOM_BBCODE', 'Custom BBCode', '', 'JComments/Custom BBCode', 'index.php?option=com_jcomments&task=custombbcodes', 'component', 0, 152, 2, 10032, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_jcomments/assets/icon-16-custombbcodes.png', 0, '', 140, 141, 0, '', 1),
(158, 'main', 'COM_JCOMMENTS_BLACKLIST', 'Blacklist', '', 'JComments/Blacklist', 'index.php?option=com_jcomments&task=blacklist', 'component', 0, 152, 2, 10032, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_jcomments/assets/icon-16-blacklist.png', 0, '', 142, 143, 0, '', 1),
(159, 'main', 'COM_JCOMMENTS_IMPORT', 'Import', '', 'JComments/Import', 'index.php?option=com_jcomments&task=import', 'component', 0, 152, 2, 10032, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_jcomments/assets/icon-16-import.png', 0, '', 144, 145, 0, '', 1),
(160, 'main', 'COM_JCOMMENTS_ABOUT', 'About JComments', '', 'JComments/About JComments', 'index.php?option=com_jcomments&task=about', 'component', 0, 152, 2, 10032, 0, 0, '0000-00-00 00:00:00', 0, 1, 'components/com_jcomments/assets/icon-16-jcomments.png', 0, '', 146, 147, 0, '', 1),
(161, 'main', 'Встречи банка времени', 'Встречи банка времени', '', 'Встречи банка времени', 'index.php?option=com_tranz&view=vstrechi', 'component', 0, 1, 1, 10027, 0, 0, '0000-00-00 00:00:00', 0, 1, 'class:component', 0, '', 149, 150, 0, '*', 1),
(162, 'main', 'Управление рассылкой', 'Управление рассылкой', '', 'Управление рассылкой', 'index.php?option=com_tranz&view=rassilka', 'component', 1, 1, 1, 10027, 0, 0, '0000-00-00 00:00:00', 0, 1, 'class:component', 0, '', 151, 152, 0, '*', 1),
(163, 'mainmenu', 'Встречи', 'vstrechi', '', 'vstrechi', 'index.php?option=com_tranz&view=vstrechi&layout=vstrechi', 'component', 1, 1, 1, 10027, 0, 42, '2013-02-23 19:22:55', 0, 1, '', 8, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 27, 28, 0, '*', 0),
(22, 'menu', 'com_joomlaupdate', 'Joomla! Update', '', 'Joomla! Update', 'index.php?option=com_joomlaupdate', 'component', 0, 1, 1, 28, 0, 0, '0000-00-00 00:00:00', 0, 0, 'class:joomlaupdate', 0, '', 47, 48, 0, '*', 1),
(166, 'mainmenu', 'Мои группы', 'groups', '', 'groups', 'index.php?option=com_tranz&view=groups&layout=groups', 'component', 1, 1, 1, 10027, 0, 0, '0000-00-00 00:00:00', 0, 2, '', 0, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 23, 24, 0, '*', 0),
(183, 'mainmenu', 'Карта объявлений', 'map', '', 'map', 'index.php?option=com_tranz&view=map&layout=map', 'component', 1, 1, 1, 10027, 0, 42, '2013-02-17 12:33:33', 0, 2, '', 0, '{"menu-anchor_title":"","menu-anchor_css":"","menu_image":"","menu_text":1,"page_title":"","show_page_heading":0,"page_heading":"","pageclass_sfx":"","menu-meta_description":"","menu-meta_keywords":"","robots":"","secure":0,"fusion_item_subtext":"","fusion_customimage":"","fusion_customclass":"","fusion_columns":"1","fusion_distribution":"even","fusion_dropdown_width":"","fusion_column_widths":"","fusion_children_group":"0","fusion_children_type":"menuitems","fusion_modules":"89","fusion_module_positions":"","splitmenu_item_subtext":""}', 17, 18, 0, '*', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_menu_types`
--

CREATE TABLE IF NOT EXISTS `w96sn_menu_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menutype` varchar(24) NOT NULL,
  `title` varchar(48) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_menutype` (`menutype`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `w96sn_menu_types`
--

INSERT INTO `w96sn_menu_types` (`id`, `menutype`, `title`, `description`) VALUES
(1, 'mainmenu', 'Меню сайта', ''),
(2, 'kunenamenu', 'Kunena меню', 'Это меню Kunena по умолчанию. Оно используется в качестве верхней навигации для Kunena. Можно опубликовать в любой позиции модуля. Просто снимите с публикации пункты, которые не требуются.');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_messages`
--

CREATE TABLE IF NOT EXISTS `w96sn_messages` (
  `message_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id_from` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id_to` int(10) unsigned NOT NULL DEFAULT '0',
  `folder_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `date_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `priority` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  PRIMARY KEY (`message_id`),
  KEY `useridto_state` (`user_id_to`,`state`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_messages_cfg`
--

CREATE TABLE IF NOT EXISTS `w96sn_messages_cfg` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `cfg_name` varchar(100) NOT NULL DEFAULT '',
  `cfg_value` varchar(255) NOT NULL DEFAULT '',
  UNIQUE KEY `idx_user_var_name` (`user_id`,`cfg_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_modules`
--

CREATE TABLE IF NOT EXISTS `w96sn_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `note` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `position` varchar(50) NOT NULL DEFAULT '',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `module` varchar(50) DEFAULT NULL,
  `access` int(10) unsigned NOT NULL DEFAULT '0',
  `showtitle` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `params` text NOT NULL,
  `client_id` tinyint(4) NOT NULL DEFAULT '0',
  `language` char(7) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `published` (`published`,`access`),
  KEY `newsfeeds` (`module`,`published`),
  KEY `idx_language` (`language`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=110 ;

--
-- Дамп данных таблицы `w96sn_modules`
--

INSERT INTO `w96sn_modules` (`id`, `title`, `note`, `content`, `ordering`, `position`, `checked_out`, `checked_out_time`, `publish_up`, `publish_down`, `published`, `module`, `access`, `showtitle`, `params`, `client_id`, `language`) VALUES
(1, 'Меню сайта', '', '', 1, 'sidebar-b', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_menu', 1, 1, '{"menutype":"mainmenu","startLevel":"1","endLevel":"0","showAllChildren":"0","tag_id":"","class_sfx":"","window_open":"","layout":"_:default","moduleclass_sfx":"_menu","cache":"1","cache_time":"900","cachemode":"itemid"}', 0, '*'),
(2, 'Login', '', '', 1, 'login', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_login', 1, 1, '', 1, '*'),
(3, 'Popular Articles', '', '', 3, 'cpanel', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_popular', 3, 1, '{"count":"5","catid":"","user_id":"0","layout":"_:default","moduleclass_sfx":"","cache":"0","automatic_title":"1"}', 1, '*'),
(4, 'Recently Added Articles', '', '', 4, 'cpanel', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_latest', 3, 1, '{"count":"5","ordering":"c_dsc","catid":"","user_id":"0","layout":"_:default","moduleclass_sfx":"","cache":"0","automatic_title":"1"}', 1, '*'),
(8, 'Toolbar', '', '', 1, 'toolbar', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_toolbar', 3, 1, '', 1, '*'),
(9, 'Quick Icons', '', '', 1, 'icon', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_quickicon', 3, 1, '', 1, '*'),
(10, 'Logged-in Users', '', '', 2, 'cpanel', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_logged', 3, 1, '{"count":"5","name":"1","layout":"_:default","moduleclass_sfx":"","cache":"0","automatic_title":"1"}', 1, '*'),
(12, 'Admin Menu', '', '', 1, 'menu', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_menu', 3, 1, '{"layout":"","moduleclass_sfx":"","shownew":"1","showhelp":"1","cache":"0"}', 1, '*'),
(13, 'Admin Submenu', '', '', 1, 'submenu', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_submenu', 3, 1, '', 1, '*'),
(14, 'User Status', '', '', 2, 'status', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_status', 3, 1, '', 1, '*'),
(15, 'Title', '', '', 1, 'title', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_title', 3, 1, '', 1, '*'),
(16, 'Login Form', '', '', 7, 'position-7', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'mod_login', 1, 1, '{"greeting":"1","name":"0"}', 0, '*'),
(17, 'Breadcrumbs', '', '', 1, 'navigation', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'mod_breadcrumbs', 1, 0, '{"showHere":"1","showHome":"1","homeText":"Home","showLast":"1","separator":"","layout":"_:default","moduleclass_sfx":"","cache":"1","cache_time":"900","cachemode":"itemid"}', 0, '*'),
(79, 'Multilanguage status', '', '', 1, 'status', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'mod_multilangstatus', 3, 1, '{"layout":"_:default","moduleclass_sfx":"","cache":"0"}', 1, '*'),
(86, 'Joomla Version', '', '', 1, 'footer', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_version', 3, 1, '{"format":"short","product":"1","layout":"_:default","moduleclass_sfx":"","cache":"0"}', 1, '*'),
(87, 'mod_adsmanager_ads', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'mod_adsmanager_ads', 1, 1, '', 0, '*'),
(88, 'mod_adsmanager_menu', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'mod_adsmanager_menu', 1, 1, '', 0, '*'),
(89, 'mod_adsmanager_search', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'mod_adsmanager_search', 1, 1, '', 0, '*'),
(90, 'mod_adsmanager_table', '', '', 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'mod_adsmanager_table', 1, 1, '', 0, '*'),
(91, 'CB Login', '', '', 1, 'sidebar-b', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_cblogin', 1, 0, '{"moduleclass_sfx":"","horizontal":"0","compact":"1","pretext":"","posttext":"","logoutpretext":"","logoutposttext":"","login":"","logout":"index.php","show_lostpass":"1","show_newaccount":"1","show_username_pass_icons":"0","name_lenght":"14","pass_lenght":"14","show_buttons_icons":"0","show_remind_register_icons":"0","login_message":"0","logout_message":"0","remember_enabled":"1","greeting":"0","name":"0","show_avatar":"0","avatar_position":"default","text_show_profile":"","text_edit_profile":"","pms_type":"0","show_pms":"0","show_connection_notifications":"0","https_post":"0","cb_plugins":"0"}', 0, '*'),
(92, 'Для организатора:', '', '', 3, 'sidebar-b', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_comprofilermoderator', 3, 1, '{"moduleclass_sfx":"","pretext":"","posttext":""}', 0, '*'),
(93, 'Кто на сайте:', '', '', 5, 'sidebar-b', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_comprofileronline', 3, 1, '{"moduleclass_sfx":"","pretext":"","posttext":""}', 0, '*'),
(95, 'Kunena меню', '', '', 1, 'kunena_menu', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_menu', 1, 0, '{"menutype":"kunenamenu","startLevel":"2","endLevel":"3","showAllChildren":"0","tag_id":"","class_sfx":"","window_open":"","layout":"_:default","moduleclass_sfx":"","cache":"1","cache_time":"900","cachemode":"itemid"}', 0, '*'),
(101, 'qfeedback', '', '', 1, 'debug', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_qfeedback', 1, 0, '{"format":"1"}', 0, '*'),
(103, 'sslider', '', '', 1, 'header-a', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_sslider', 1, 0, '{"format":"1"}', 0, '*'),
(104, 'donation', '', '', 1, 'footer-c', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'mod_donation', 1, 0, '{}', 0, '*'),
(105, 'Ваше количество часов:', '', '', 4, 'sidebar-b', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_schet', 2, 1, '{"format":"1"}', 0, '*'),
(106, 'поиск', '', '', 1, 'sidebar-b', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'mod_finder', 1, 1, '{"searchfilter":"","show_autosuggest":"1","show_advanced":"0","layout":"_:default","moduleclass_sfx":"","field_size":25,"alt_label":"","show_label":"1","label_pos":"top","show_button":"1","button_pos":"right","opensearch":"0","opensearch_title":""}', 0, '*'),
(107, 'поиск1', '', '', 1, 'sidebar-b', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'mod_search', 1, 1, '{"label":"","width":"20","text":"","button":"1","button_pos":"right","imagebutton":"","button_text":"","opensearch":"1","opensearch_title":"","set_itemid":"","layout":"_:default","moduleclass_sfx":"","cache":"1","cache_time":"900","cachemode":"itemid"}', 0, '*'),
(108, 'Мы в интернете', '', '', 8, 'sidebar-b', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_www', 1, 1, '{"format":"1"}', 0, '*'),
(109, 'Земля', '', '', 9, 'sidebar-b', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'mod_earth', 1, 0, '', 0, '*');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_modules_menu`
--

CREATE TABLE IF NOT EXISTS `w96sn_modules_menu` (
  `moduleid` int(11) NOT NULL DEFAULT '0',
  `menuid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`moduleid`,`menuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_modules_menu`
--

INSERT INTO `w96sn_modules_menu` (`moduleid`, `menuid`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(79, 0),
(86, 0),
(91, 0),
(92, 0),
(93, 0),
(95, 0),
(101, 0),
(103, 0),
(105, 0),
(106, 0),
(107, 0),
(108, 0),
(109, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_newsfeeds`
--

CREATE TABLE IF NOT EXISTS `w96sn_newsfeeds` (
  `catid` int(11) NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `link` varchar(200) NOT NULL DEFAULT '',
  `filename` varchar(200) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `numarticles` int(10) unsigned NOT NULL DEFAULT '1',
  `cache_time` int(10) unsigned NOT NULL DEFAULT '3600',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `rtl` tinyint(4) NOT NULL DEFAULT '0',
  `access` int(10) unsigned NOT NULL DEFAULT '0',
  `language` char(7) NOT NULL DEFAULT '',
  `params` text NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created_by_alias` varchar(255) NOT NULL DEFAULT '',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `metadata` text NOT NULL,
  `xreference` varchar(50) NOT NULL COMMENT 'A reference to enable linkages to external data sets.',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`published`),
  KEY `idx_catid` (`catid`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_language` (`language`),
  KEY `idx_xreference` (`xreference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_overrider`
--

CREATE TABLE IF NOT EXISTS `w96sn_overrider` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `constant` varchar(255) NOT NULL,
  `string` text NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_redirect_links`
--

CREATE TABLE IF NOT EXISTS `w96sn_redirect_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `old_url` varchar(255) NOT NULL,
  `new_url` varchar(255) NOT NULL,
  `referer` varchar(150) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `published` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_link_old` (`old_url`),
  KEY `idx_link_modifed` (`modified_date`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=272 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_schemas`
--

CREATE TABLE IF NOT EXISTS `w96sn_schemas` (
  `extension_id` int(11) NOT NULL,
  `version_id` varchar(20) NOT NULL,
  PRIMARY KEY (`extension_id`,`version_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_schemas`
--

INSERT INTO `w96sn_schemas` (`extension_id`, `version_id`) VALUES
(700, '2.5.6');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_session`
--

CREATE TABLE IF NOT EXISTS `w96sn_session` (
  `session_id` varchar(200) NOT NULL DEFAULT '',
  `client_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `guest` tinyint(4) unsigned DEFAULT '1',
  `time` varchar(14) DEFAULT '',
  `data` mediumtext,
  `userid` int(11) DEFAULT '0',
  `username` varchar(150) DEFAULT '',
  `usertype` varchar(50) DEFAULT '',
  PRIMARY KEY (`session_id`),
  KEY `whosonline` (`guest`,`usertype`),
  KEY `userid` (`userid`),
  KEY `time` (`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_template_styles`
--

CREATE TABLE IF NOT EXISTS `w96sn_template_styles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `template` varchar(50) NOT NULL DEFAULT '',
  `client_id` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `home` char(7) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `params` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_template` (`template`),
  KEY `idx_home` (`home`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `w96sn_template_styles`
--

INSERT INTO `w96sn_template_styles` (`id`, `template`, `client_id`, `home`, `title`, `params`) VALUES
(2, 'bluestork', 1, '1', 'Bluestork - Default', '{"useRoundedCorners":"1","showSiteName":"0"}'),
(3, 'atomic', 0, '0', 'Atomic - Default', '{}'),
(4, 'beez_20', 0, '0', 'Beez2 - Default', '{"wrapperSmall":"53","wrapperLarge":"72","logo":"images\\/joomla_black.gif","sitetitle":"Joomla!","sitedescription":"Open Source Content Management","navposition":"left","templatecolor":"personal","html5":"0"}'),
(5, 'hathor', 1, '0', 'Hathor - Default', '{"showSiteName":"0","colourChoice":"","boldText":"0"}'),
(6, 'beez5', 0, '0', 'Beez5 - Default', '{"wrapperSmall":"53","wrapperLarge":"72","logo":"images\\/sampledata\\/fruitshop\\/fruits.gif","sitetitle":"Joomla!","sitedescription":"Open Source Content Management","navposition":"left","html5":"0"}'),
(8, 'ca_cloudbase2_j25', 0, '1', 'Cloudbase 2.0 - Default', '{"master":"true","current_id":"8","template_full_name":"CloudBase 2","grid_system":"12","template_prefix":"gantry-","cookie_time":"31536000","copy_lang_files_if_diff":"1","pattern":"pattern9","bgcolor":"#0e96cf","moduleheadercolor":"#0e96cf","moduleheadertextcolor1":"#ffffff","moduleheadertextcolor2":"#0e96cf","contentheadercolor":"#0e96cf","footercolor":"#042b3c","linkcolor":"#2e8fd4","buttoncolor":"#0e96cf","menucolor":"#4696bd","webfonts":{"enabled":"0","source":"google"},"font":{"family":"helvetica","size":"default","size-is":"default"},"viewswitcher-priority":"1","logo-priority":"2","copyright-priority":"3","styledeclaration-priority":"4","fontsizer-priority":"5","iphonegradients-priority":"6","date-priority":"7","totop-priority":"8","systemmessages-priority":"9","inactive-priority":"10","iphoneimages-priority":"11","morearticles-priority":"12","smartload-priority":"13","pagesuffix-priority":"14","resetsettings-priority":"15","analytics-priority":"16","belatedpng-priority":"17","fusionmenu-priority":"18","ie6menu-priority":"19","ie6warn-priority":"20","jstools-priority":"21","moduleoverlays-priority":"22","rtl-priority":"23","splitmenu-priority":"24","suckerfishmenu-priority":"25","touchmenu-priority":"26","webfonts-priority":"27","styledeclaration-enabled":"1","logo":{"enabled":"0","position":"header-a","perstyle":"1","css":"body #rt-logo"},"date":{"enabled":"0","position":"top-d","clientside":"0","formats":"%A, %B %d, %Y"},"fontsizer":{"enabled":"0","position":"feature-b"},"copyright":{"enabled":"0","position":"copyright","text":"Designed by CloudAccess.net"},"smartload":{"enabled":"0","text":"50","ignores":"com_contact","exclusion":""},"totop":{"enabled":"0","text":"Scroll to Top"},"systemmessages":{"enabled":"1","position":"content-top-a"},"resetsettings":{"enabled":"0","position":"copyright","text":"Reset Settings"},"analytics":{"enabled":"0","code":""},"equalheights":{"enabled":"0"},"menu":{"enabled":"0","type":"fusionmenu","fusionmenu":{"menutype":"mainmenu","position":"navigation","enable_js":"1","opacity":"1","effect":"slidefade","hidedelay":"500","menu-animation":"Circ.easeOut","menu-duration":"300","centered-offset":"0","tweak-initial-x":"-10","tweak-initial-y":"-13","tweak-subsequent-x":"0","tweak-subsequent-y":"0","tweak-width":"20","tweak-height":"20","enable-current-id":"0","theme":"gantry-fusion","limit_levels":"0","startLevel":"0","showAllChildren":"1","class_sfx":"top","cache":"0","module_cache":"1"},"splitmenu":{"menutype":"mainmenu","theme":"gantry-splitmenu","cache":"0","module_cache":"1","mainmenu-position":"navigation","mainmenu-limit_levels":"1","mainmenu-startLevel":"0","mainmenu-endLevel":"0","mainmenu-class_sfx":"top","submenu-position":"sidebar-a","submenu-limit_levels":"1","submenu-startLevel":"1","submenu-endLevel":"9","submenu-class_sfx":""}},"top":{"layout":"3,3,3,3","showall":"0","showmax":"6"},"header":{"layout":"3,3,3,3","showall":"0","showmax":"6"},"feature":{"layout":"3,3,3,3","showall":"0","showmax":"6"},"utility":{"layout":"3,3,3,3","showall":"0","showmax":"6"},"maintop":{"layout":"3,3,3,3","showall":"0","showmax":"6"},"mainbodyPosition":"a:1:{i:12;a:1:{i:2;a:2:{s:2:\\"sa\\";i:3;s:2:\\"mb\\";i:9;}}}","mainbottom":{"layout":"3,3,3,3","showall":"0","showmax":"6"},"bottom":{"layout":"3,3,3,3","showall":"0","showmax":"6"},"footer":{"layout":"3,3,3,3","showall":"0","showmax":"6"},"iphone-enabled":"1","android-enabled":"0","iphone-scalable":"0","iphone-switcher":{"enabled":"0","position":"mobile-header"},"touchmenu":{"menutype":"mainmenu","enabled":"1","position":"mobile-navigation","theme":"touch","animation":"cube","cache":"0","module_cache":"1","startLevel":"0","endLevel":"20","showAllChildren":"1"},"iphoneimages":{"enabled":"1","minWidth":"80","percentage":"33"},"iphone-header-gradient":{"from":"#545353","to":"#262626","direction_start":"left-top","fromopacity":"1","toopacity":"1","direction_end":"left-bottom"},"iphone-showcase-gradient":{"from":"#ededed","to":"#fff","direction_start":"left-top","fromopacity":"1","toopacity":"1","direction_end":"left-bottom"},"iphone-copyright-gradient":{"from":"#545353","to":"#262626","direction_start":"left-top","fromopacity":"1","toopacity":"1","direction_end":"left-bottom"},"mobile":{"drawer":"drawer","top":"top-a","header":"header-a","navigation":"mobile-navigation","showcase":"showcase","footer":"footer-a","copyright":"copyright"},"cache":{"enabled":"0","time":"900"},"gzipper":{"enabled":"0","time":"600","expirestime":"1440","stripwhitespace":"1"},"inputstyling":{"enabled":"0","exclusions":"''.content_vote''"},"component-enabled":"1","rtl-enabled":"0","buildspans-enabled":"0","pagesuffix-enabled":"0","inactive":{"enabled":"0","menuitem":"140"}}');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_tranz_accept`
--

CREATE TABLE IF NOT EXISTS `w96sn_tranz_accept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `touserid` int(11) NOT NULL,
  `fromuserid` int(11) NOT NULL,
  `fromuserapproved` tinyint(1) NOT NULL DEFAULT '0',
  `points` float(10,2) NOT NULL DEFAULT '0.00',
  `insert_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rule` int(11) NOT NULL DEFAULT '0',
  `keyreference` varchar(10) NOT NULL,
  `namereference` varchar(255) NOT NULL,
  `datareference` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=140 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_tranz_cod`
--

CREATE TABLE IF NOT EXISTS `w96sn_tranz_cod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vst_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cod` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=291 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_tranz_data`
--

CREATE TABLE IF NOT EXISTS `w96sn_tranz_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `touserid` int(11) NOT NULL,
  `fromuserid` int(11) NOT NULL,
  `fromuserapproved` tinyint(1) NOT NULL DEFAULT '0',
  `points` float(10,2) NOT NULL DEFAULT '0.00',
  `rank` int(2) NOT NULL DEFAULT '0',
  `insert_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `accept_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rule` int(11) NOT NULL DEFAULT '0',
  `keyreference` varchar(255) NOT NULL,
  `namereference` varchar(255) NOT NULL,
  `datareference` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=135 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_tranz_data_archive`
--

CREATE TABLE IF NOT EXISTS `w96sn_tranz_data_archive` (
  `id` int(11) NOT NULL DEFAULT '0',
  `touserid` int(11) NOT NULL,
  `fromuserid` int(11) NOT NULL,
  `fromuserapproved` tinyint(1) NOT NULL,
  `points` float(10,2) NOT NULL DEFAULT '0.00',
  `insert_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `accept_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rule` int(11) NOT NULL DEFAULT '0',
  `keyreference` varchar(255) NOT NULL,
  `namereference` varchar(255) NOT NULL,
  `datareference` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_tranz_gen`
--

CREATE TABLE IF NOT EXISTS `w96sn_tranz_gen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `min_points` float(10,2) NOT NULL,
  `max_points` float(10,2) NOT NULL,
  `raspred` tinyint(2) NOT NULL,
  `rassilka` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3243 ;

--
-- Дамп данных таблицы `w96sn_tranz_gen`
--

INSERT INTO `w96sn_tranz_gen` (`id`, `min_points`, `max_points`, `raspred`, `rassilka`) VALUES
(1, -5200.00, 52000.00, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_tranz_groups`
--

CREATE TABLE IF NOT EXISTS `w96sn_tranz_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `opisanie` varchar(255) NOT NULL,
  `dov` smallint(3) NOT NULL DEFAULT '0',
  `creator` int(11) NOT NULL,
  `admusers` text NOT NULL,
  `users` text NOT NULL,
  `web` varchar(255) DEFAULT NULL,
  `stena` text,
  `type_stena` smallint(3) NOT NULL DEFAULT '1',
  `zaiav` varchar(255) DEFAULT NULL,
  `prigl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=60 AUTO_INCREMENT=131 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_tranz_vstrechi`
--

CREATE TABLE IF NOT EXISTS `w96sn_tranz_vstrechi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_create` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `adres` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `dov` varchar(255) NOT NULL,
  `dateras` int(11) NOT NULL DEFAULT '0',
  `uch` text,
  `lat` text,
  `lng` text,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_uddeim`
--

CREATE TABLE IF NOT EXISTS `w96sn_uddeim` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `replyid` int(11) NOT NULL DEFAULT '0',
  `fromid` int(11) NOT NULL DEFAULT '0',
  `toid` int(11) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `datum` int(11) DEFAULT NULL,
  `toread` int(1) NOT NULL DEFAULT '0',
  `totrash` int(1) NOT NULL DEFAULT '0',
  `totrashdate` int(11) DEFAULT NULL,
  `totrashoutbox` int(1) NOT NULL DEFAULT '0',
  `totrashdateoutbox` int(11) DEFAULT NULL,
  `expires` int(11) NOT NULL DEFAULT '0',
  `disablereply` int(1) NOT NULL DEFAULT '0',
  `systemflag` int(1) NOT NULL DEFAULT '0',
  `delayed` int(1) NOT NULL DEFAULT '0',
  `systemmessage` varchar(60) DEFAULT NULL,
  `archived` int(1) NOT NULL DEFAULT '0',
  `cryptmode` int(1) NOT NULL DEFAULT '0',
  `flagged` int(1) NOT NULL DEFAULT '0',
  `crypthash` varchar(32) DEFAULT NULL,
  `publicname` text,
  `publicemail` text,
  PRIMARY KEY (`id`),
  KEY `toid_toread` (`toid`,`toread`),
  KEY `fromid` (`fromid`),
  KEY `replyid` (`replyid`),
  KEY `datum` (`datum`),
  KEY `totrashdate` (`totrashdate`),
  KEY `totrashdateoutbox_datum` (`totrashdateoutbox`,`datum`),
  KEY `toread_totrash_datum` (`toread`,`totrash`,`datum`),
  KEY `totrash_totrashdate` (`totrash`,`totrashdate`),
  KEY `archived_totrash_toid_datum` (`archived`,`totrash`,`toid`,`datum`),
  KEY `systemflag` (`systemflag`),
  KEY `delayed` (`delayed`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2166 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_uddeim_attachments`
--

CREATE TABLE IF NOT EXISTS `w96sn_uddeim_attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mid` int(1) NOT NULL DEFAULT '0',
  `tempname` text NOT NULL,
  `filename` text NOT NULL,
  `fileid` varchar(32) NOT NULL,
  `size` int(1) NOT NULL DEFAULT '0',
  `datum` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`),
  KEY `fileid` (`fileid`),
  KEY `datum` (`datum`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_uddeim_blocks`
--

CREATE TABLE IF NOT EXISTS `w96sn_uddeim_blocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blocker` int(11) NOT NULL DEFAULT '0',
  `blocked` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_uddeim_config`
--

CREATE TABLE IF NOT EXISTS `w96sn_uddeim_config` (
  `varname` tinytext NOT NULL,
  `value` tinytext NOT NULL,
  PRIMARY KEY (`varname`(30))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_uddeim_copy`
--

CREATE TABLE IF NOT EXISTS `w96sn_uddeim_copy` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `replyid` int(11) NOT NULL DEFAULT '0',
  `fromid` int(11) NOT NULL DEFAULT '0',
  `toid` int(11) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `datum` int(11) DEFAULT NULL,
  `toread` int(1) NOT NULL DEFAULT '0',
  `totrash` int(1) NOT NULL DEFAULT '0',
  `totrashdate` int(11) DEFAULT NULL,
  `totrashoutbox` int(1) NOT NULL DEFAULT '0',
  `totrashdateoutbox` int(11) DEFAULT NULL,
  `expires` int(11) NOT NULL DEFAULT '0',
  `disablereply` int(1) NOT NULL DEFAULT '0',
  `systemflag` int(1) NOT NULL DEFAULT '0',
  `delayed` int(1) NOT NULL DEFAULT '0',
  `systemmessage` varchar(60) DEFAULT NULL,
  `archived` int(1) NOT NULL DEFAULT '0',
  `cryptmode` int(1) NOT NULL DEFAULT '0',
  `flagged` int(1) NOT NULL DEFAULT '0',
  `crypthash` varchar(32) DEFAULT NULL,
  `publicname` text,
  `publicemail` text,
  PRIMARY KEY (`id`),
  KEY `archived_totrash_toid_datum` (`archived`,`totrash`,`toid`,`datum`),
  KEY `datum` (`datum`),
  KEY `delayed` (`delayed`),
  KEY `fromid` (`fromid`),
  KEY `replyid` (`replyid`),
  KEY `systemflag` (`systemflag`),
  KEY `toid_toread` (`toid`,`toread`),
  KEY `toread_totrash_datum` (`toread`,`totrash`,`datum`),
  KEY `totrash_totrashdate` (`totrash`,`totrashdate`),
  KEY `totrashdate` (`totrashdate`),
  KEY `totrashdateoutbox_datum` (`totrashdateoutbox`,`datum`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=339 AUTO_INCREMENT=1870 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_uddeim_emn`
--

CREATE TABLE IF NOT EXISTS `w96sn_uddeim_emn` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `popup` int(1) NOT NULL DEFAULT '0',
  `public` int(1) NOT NULL DEFAULT '0',
  `remindersent` int(11) NOT NULL DEFAULT '0',
  `lastsent` int(11) NOT NULL DEFAULT '0',
  `autoresponder` int(1) NOT NULL DEFAULT '0',
  `autorespondertext` text NOT NULL,
  `autoforward` int(1) NOT NULL DEFAULT '0',
  `autoforwardid` int(1) NOT NULL DEFAULT '0',
  `locked` int(1) NOT NULL DEFAULT '0',
  `moderated` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_uddeim_spam`
--

CREATE TABLE IF NOT EXISTS `w96sn_uddeim_spam` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL DEFAULT '0',
  `datum` int(11) DEFAULT NULL,
  `reported` int(11) DEFAULT NULL,
  `fromid` int(1) NOT NULL DEFAULT '0',
  `toid` int(1) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mid` (`mid`),
  KEY `fromid` (`fromid`),
  KEY `toid` (`toid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_uddeim_userlists`
--

CREATE TABLE IF NOT EXISTS `w96sn_uddeim_userlists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(40) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `userids` text NOT NULL,
  `global` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `global` (`global`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_updates`
--

CREATE TABLE IF NOT EXISTS `w96sn_updates` (
  `update_id` int(11) NOT NULL AUTO_INCREMENT,
  `update_site_id` int(11) DEFAULT '0',
  `extension_id` int(11) DEFAULT '0',
  `categoryid` int(11) DEFAULT '0',
  `name` varchar(100) DEFAULT '',
  `description` text NOT NULL,
  `element` varchar(100) DEFAULT '',
  `type` varchar(20) DEFAULT '',
  `folder` varchar(20) DEFAULT '',
  `client_id` tinyint(3) DEFAULT '0',
  `version` varchar(10) DEFAULT '',
  `data` text NOT NULL,
  `detailsurl` text NOT NULL,
  `infourl` text NOT NULL,
  PRIMARY KEY (`update_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Available Updates' AUTO_INCREMENT=99 ;

--
-- Дамп данных таблицы `w96sn_updates`
--

INSERT INTO `w96sn_updates` (`update_id`, `update_site_id`, `extension_id`, `categoryid`, `name`, `description`, `element`, `type`, `folder`, `client_id`, `version`, `data`, `detailsurl`, `infourl`) VALUES
(2, 8, 0, 0, 'Kunena Forum', 'Kunena Forum Component', 'com_kunena', 'component', '', 0, '1.7.2', '', 'http://update.kunena.org/1.7.2/extension.xml', ''),
(3, 8, 0, 0, 'Kunena Forum Importer', '', 'com_kunenaimporter', 'component', '', 0, '1.7.1', '', 'http://update.kunena.org/1.7.1/extension.xml', ''),
(4, 8, 0, 0, 'Kunena Latest', '', 'mod_kunenalatest', 'module', '', 0, '1.7.1', '', 'http://update.kunena.org/1.7.1/extension.xml', ''),
(5, 8, 0, 0, 'Kunena Login', '', 'mod_kunenalogin', 'module', '', 0, '1.7.1', '', 'http://update.kunena.org/1.7.1/extension.xml', ''),
(6, 8, 0, 0, 'Kunena Search', '', 'mod_kunenasearch', 'module', '', 0, '1.7.1', '', 'http://update.kunena.org/1.7.1/extension.xml', ''),
(7, 8, 0, 0, 'Kunena Statistics', '', 'mod_kunenastats', 'module', '', 0, '1.7.1', '', 'http://update.kunena.org/1.7.1/extension.xml', ''),
(8, 8, 0, 0, 'Kunena Discuss', '', 'plg_kunenadiscuss', 'plugin', 'content', 0, '1.7.1', '', 'http://update.kunena.org/1.7.1/extension.xml', ''),
(9, 8, 0, 0, 'Kunena Search', '', 'plg_kunenasearch', 'plugin', 'search', 0, '1.7.1', '', 'http://update.kunena.org/1.7.1/extension.xml', ''),
(10, 8, 0, 0, 'Kunena Groups for JomSocial', '', 'plg_jomsocial_kunenagroups', 'plugin', 'community', 0, '1.7.1', '', 'http://update.kunena.org/1.7.1/extension.xml', ''),
(11, 8, 0, 0, 'Kunena Menu for JomSocial', '', 'plg_jomsocial_kunenamenu', 'plugin', 'community', 0, '1.7.1', '', 'http://update.kunena.org/1.7.1/extension.xml', ''),
(12, 8, 0, 0, 'My Kunena for JomSocial', '', 'plg_jomsocial_mykunena', 'plugin', 'community', 0, '1.7.1', '', 'http://update.kunena.org/1.7.1/extension.xml', ''),
(98, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.6.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(24, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(25, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(26, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(27, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(28, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(29, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(30, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(31, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(32, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(33, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(34, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(35, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(36, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(37, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(38, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(39, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(40, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(41, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(42, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(43, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(44, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(45, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(46, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(47, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(48, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(49, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(50, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(51, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(52, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(53, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(54, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(55, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(56, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(57, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(58, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(59, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(60, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(61, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(62, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(63, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(64, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(65, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(66, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(67, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(68, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(97, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.6.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(70, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.4.3', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(71, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.5.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(72, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.5.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(73, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.5.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(74, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.5.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(75, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.5.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(76, 1, 0, 0, 'Joomla', '', 'joomla', 'file', '', 0, '2.5.6', '', 'http://update.joomla.org/core/extension.xml', ''),
(77, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.6.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(78, 1, 0, 0, 'Joomla', '', 'joomla', 'file', '', 0, '2.5.6', '', 'http://update.joomla.org/core/extension.xml', ''),
(79, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.6.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(80, 1, 0, 0, 'Joomla', '', 'joomla', 'file', '', 0, '2.5.6', '', 'http://update.joomla.org/core/extension.xml', ''),
(81, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.6.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(83, 1, 0, 0, 'Joomla', '', 'joomla', 'file', '', 0, '2.5.6', '', 'http://update.joomla.org/core/extension.xml', ''),
(84, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.6.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(85, 1, 0, 0, 'Joomla', '', 'joomla', 'file', '', 0, '2.5.6', '', 'http://update.joomla.org/core/extension.xml', ''),
(86, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.6.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(87, 1, 0, 0, 'Joomla', '', 'joomla', 'file', '', 0, '2.5.6', '', 'http://update.joomla.org/core/extension.xml', ''),
(88, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.6.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(89, 1, 0, 0, 'Joomla', '', 'joomla', 'file', '', 0, '2.5.6', '', 'http://update.joomla.org/core/extension.xml', ''),
(90, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.6.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(91, 1, 0, 0, 'Joomla', '', 'joomla', 'file', '', 0, '2.5.6', '', 'http://update.joomla.org/core/extension.xml', ''),
(92, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.6.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(93, 1, 0, 0, 'Joomla', '', 'joomla', 'file', '', 0, '2.5.6', '', 'http://update.joomla.org/core/extension.xml', ''),
(94, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.6.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', ''),
(95, 1, 0, 0, 'Joomla', '', 'joomla', 'file', '', 0, '2.5.6', '', 'http://update.joomla.org/core/extension.xml', ''),
(96, 3, 0, 0, 'Russian', '', 'pkg_ru-RU', 'package', '', 0, '2.5.6.1', '', 'http://joomlaportal.ru/downloads/joomla/languages/ru-RU.xml', '');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_update_categories`
--

CREATE TABLE IF NOT EXISTS `w96sn_update_categories` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT '',
  `description` text NOT NULL,
  `parent` int(11) DEFAULT '0',
  `updatesite` int(11) DEFAULT '0',
  PRIMARY KEY (`categoryid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Update Categories' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_update_sites`
--

CREATE TABLE IF NOT EXISTS `w96sn_update_sites` (
  `update_site_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT '',
  `type` varchar(20) DEFAULT '',
  `location` text NOT NULL,
  `enabled` int(11) DEFAULT '0',
  `last_check_timestamp` bigint(20) DEFAULT '0',
  PRIMARY KEY (`update_site_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Update Sites' AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `w96sn_update_sites`
--

INSERT INTO `w96sn_update_sites` (`update_site_id`, `name`, `type`, `location`, `enabled`, `last_check_timestamp`) VALUES
(1, 'Joomla Core', 'collection', 'http://update.joomla.org/core/list.xml', 0, 1346060380),
(2, 'Joomla Extension Directory', 'collection', 'http://update.joomla.org/jed/list.xml', 0, 1346060380),
(3, 'Joomla! Russia Updates', 'collection', 'http://joomlaportal.ru/translations.xml', 0, 1346060380),
(4, 'JoomPROD Update Site', 'extension', 'http://www.joomprod.com/update/adsmanager.xml', 0, 1346060380),
(5, 'Community Builder Update Site', 'extension', 'http://update.joomlapolis.net/versions/comprofiler-1_8-update.xml', 0, 1346060380),
(11, 'Gantry Framework Update Site', 'extension', 'http://www.gantry-framework.org/updates/joomla16/gantry.xml', 0, 1339566786),
(8, 'Kunena 1.7 Update Site', 'collection', 'http://update.kunena.org/1.7', 0, 1336226166),
(9, 'JComments Update Site', 'extension', 'http://www.joomlatune.ru/updates/jcomments.xml', 0, 1346060380);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_update_sites_extensions`
--

CREATE TABLE IF NOT EXISTS `w96sn_update_sites_extensions` (
  `update_site_id` int(11) NOT NULL DEFAULT '0',
  `extension_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`update_site_id`,`extension_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Links extensions to update sites';

--
-- Дамп данных таблицы `w96sn_update_sites_extensions`
--

INSERT INTO `w96sn_update_sites_extensions` (`update_site_id`, `extension_id`) VALUES
(1, 700),
(2, 700),
(3, 10002),
(4, 10003),
(5, 10010),
(8, 10024),
(9, 10032),
(11, 10043);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_usergroups`
--

CREATE TABLE IF NOT EXISTS `w96sn_usergroups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Adjacency List Reference Id',
  `lft` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set lft.',
  `rgt` int(11) NOT NULL DEFAULT '0' COMMENT 'Nested set rgt.',
  `title` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_usergroup_parent_title_lookup` (`parent_id`,`title`),
  KEY `idx_usergroup_title_lookup` (`title`),
  KEY `idx_usergroup_adjacency_lookup` (`parent_id`),
  KEY `idx_usergroup_nested_set_lookup` (`lft`,`rgt`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `w96sn_usergroups`
--

INSERT INTO `w96sn_usergroups` (`id`, `parent_id`, `lft`, `rgt`, `title`) VALUES
(1, 0, 1, 20, 'Public'),
(2, 1, 6, 17, 'Registered'),
(3, 2, 7, 14, 'Author'),
(4, 3, 8, 11, 'Editor'),
(5, 4, 9, 10, 'Publisher'),
(6, 1, 2, 5, 'Manager'),
(7, 6, 3, 4, 'Administrator'),
(8, 1, 18, 19, 'Super Users');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_users`
--

CREATE TABLE IF NOT EXISTS `w96sn_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idref` int(11) NOT NULL DEFAULT '42',
  `name` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(150) NOT NULL DEFAULT '',
  `points` float(10,2) NOT NULL DEFAULT '0.00',
  `dolg` float(10,2) NOT NULL DEFAULT '0.00',
  `min_points` float(10,2) NOT NULL DEFAULT '0.00',
  `max_points` float(10,2) NOT NULL DEFAULT '52000.00',
  `dov` tinyint(2) NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL DEFAULT '0',
  `count1` int(11) NOT NULL,
  `message` text,
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `usertype` varchar(25) NOT NULL DEFAULT '',
  `block` tinyint(4) NOT NULL DEFAULT '0',
  `sendEmail` tinyint(4) DEFAULT '0',
  `registerDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastvisitDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `activation` varchar(100) NOT NULL DEFAULT '',
  `params` text NOT NULL,
  `sett1` tinyint(2) NOT NULL DEFAULT '1',
  `sett2` tinyint(2) NOT NULL DEFAULT '1',
  `sett3` tinyint(2) NOT NULL DEFAULT '1',
  `sett4` tinyint(2) NOT NULL DEFAULT '0',
  `sett5` tinyint(2) NOT NULL DEFAULT '0',
  `sett6` tinyint(2) NOT NULL DEFAULT '1',
  `sett7` tinyint(2) NOT NULL DEFAULT '1',
  `sett8` tinyint(2) NOT NULL DEFAULT '1',
  `sett9` tinyint(2) NOT NULL DEFAULT '1',
  `sett10` tinyint(2) NOT NULL DEFAULT '0',
  `sett11` tinyint(2) NOT NULL DEFAULT '1',
  `lastResetTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Date of last password reset',
  `resetCount` int(11) NOT NULL DEFAULT '0' COMMENT 'Count of password resets since lastResetTime',
  PRIMARY KEY (`id`),
  KEY `usertype` (`usertype`),
  KEY `idx_name` (`name`),
  KEY `idx_block` (`block`),
  KEY `username` (`username`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=262 ;

--
-- Дамп данных таблицы `w96sn_users`
--

INSERT INTO `w96sn_users` (`id`, `idref`, `name`, `username`, `points`, `dolg`, `min_points`, `max_points`, `dov`, `rating`, `count1`, `message`, `email`, `password`, `usertype`, `block`, `sendEmail`, `registerDate`, `lastvisitDate`, `activation`, `params`, `sett1`, `sett2`, `sett3`, `sett4`, `sett5`, `sett6`, `sett7`, `sett8`, `sett9`, `sett10`, `sett11`, `lastResetTime`, `resetCount`) VALUES
(165, 42, 'тест тест тест', 'тест', 0.00, 0.00, -1000.00, 37000.00, 0, 0, 0, '', '', 'a11aaa52049de795d3614cca5afea200:epDgE3aImASoUjd7dBmAdHED7BbZcRZN', 'Super Users', 0, 0, '2013-02-05 13:20:15', '2013-06-11 06:11:29', '', '{}', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_users_coord`
--

CREATE TABLE IF NOT EXISTS `w96sn_users_coord` (
  `userid` int(11) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_users_coord`
--

INSERT INTO `w96sn_users_coord` (`userid`, `lat`, `lon`, `time`) VALUES
(42, 59.931992786005, 30.298258764669, '2014-02-26 16:27:33');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_users_del`
--

CREATE TABLE IF NOT EXISTS `w96sn_users_del` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `delete_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `w96sn_users_del`
--

INSERT INTO `w96sn_users_del` (`id`, `name`, `delete_date`) VALUES
(167, 'PeafPlefehink PeafPlefehink PeafPlefehinkJX', '2013-05-01 01:57:10'),
(168, 'AlexanderZS AlexanderZS Александр Зинин', '2013-05-01 01:57:10'),
(178, 'peaguesyloase peaguesyloase peaguesyloaseIW', '2013-05-01 01:57:10'),
(180, 'seomiks seomiks seomiks', '2013-05-01 01:57:10'),
(181, 'marishaa marishaa Marina', '2013-05-01 01:57:10'),
(188, 'enronsautose enronsautose enronsautoseIX', '2013-05-01 01:57:11'),
(154, 'GabacquimbPum GabacquimbPum GabacquimbPumTC', '2013-05-01 01:58:52'),
(156, 'Danjamov Danjamov VuxpirovTV', '2013-05-01 01:58:52'),
(157, 'PavelJP PavelJP Павел', '2013-05-01 01:58:52'),
(158, 'gennick gennick gennickOA', '2013-05-01 01:58:52'),
(159, 'Ivanuvich Ivanuvich IvanuvichLI', '2013-05-01 01:58:52'),
(161, 'Shoriernore Shoriernore ShoriernoreWX', '2013-05-01 01:58:52'),
(170, 'movesbas movesbas movestemRL', '2013-05-01 01:58:52'),
(171, 'Suinizeni Suinizeni SuinizeniZN', '2013-05-01 01:58:52'),
(173, 'immurrouh immurrouh immurrouhGY', '2013-05-01 01:58:52'),
(175, 'alexstydia.ru alexstydia.ru Алина', '2013-05-01 01:58:52'),
(177, 'Cupduzov Cupduzov CabdisovML', '2013-05-01 01:58:52'),
(179, 'ruisruffigo ruisruffigo ruisruffigoSL', '2013-05-01 01:58:52'),
(183, 'Oceascaples Oceascaples OceascaplesJQ', '2013-05-01 01:58:53'),
(185, 'hetaSteence hetaSteence hetaSteenceIU', '2013-05-01 01:58:53'),
(186, 'ziosqpqiwis ziosqpqiwis ziosqpqiwisOZ', '2013-05-01 01:58:53'),
(191, 'Immulsila Immulsila Immulsila', '2013-06-04 19:36:53'),
(192, 'Nocropov Nocropov NappekovZX', '2013-06-04 19:36:53'),
(193, 'MamaMalisha MamaMalisha MamaMalisha', '2013-06-04 19:36:53'),
(241, 'Warezddll Warezddll WarezddllFE', '2014-02-27 19:47:13'),
(242, 'ASteaveAmbibia ASteaveAmbibia ASteaveAmbibiaQW', '2014-02-27 19:47:13'),
(243, 'Atlazova Atlazova AthavovaTC', '2014-02-27 19:47:13'),
(244, 'Malvina31 Malvina31 Malvina72LQ', '2014-02-27 19:47:13'),
(245, 'Lioneltom Lioneltom LioneltomVC', '2014-02-27 19:47:13'),
(246, 'AmnsaBymn AmnsaBymn AmnsaBymnOV', '2014-02-27 19:47:14'),
(247, 'Niwranbr Niwranbr Anatolij', '2014-02-27 19:47:14'),
(248, 'forex.forex-indextop20.ru forex.forex-indextop20.ru forex.forex-indextop20.ru', '2014-02-27 19:47:14'),
(249, 'Justingus Justingus JustingusYG', '2014-02-27 19:47:36'),
(250, 'VictorTils VictorTils VictorTilsQQ', '2014-02-27 19:47:36'),
(251, 'Michaelpt Michaelpt MichaelptBE', '2014-02-27 19:47:36'),
(252, 'GeorgeDarm GeorgeDarm GeorgeDarmZJ', '2014-02-27 19:47:36'),
(253, 'nesterdron nesterdron Сергей', '2014-02-27 19:47:36'),
(255, 'Awwemova Awwemova AdjuwovaSA', '2014-02-27 19:47:36'),
(256, 'Denniser Denniser DenniserUI', '2014-02-27 19:47:36'),
(257, 'Greenkfsv Greenkfsv Greenkfsv', '2014-02-27 19:47:36'),
(258, 'Adoliya11 Adoliya11 Adoliya46YL', '2014-02-27 19:47:36'),
(259, 'Adoliya88 Adoliya88 Adoliya57YL', '2014-02-27 19:47:36'),
(260, 'Ada51 Ada51 Ada18YL', '2014-02-27 19:47:36'),
(221, 'AkorwinarJan AkorwinarJan AkorwinarJanYB', '2014-02-27 19:48:08'),
(223, 'annualest annualest annualestIU', '2014-02-27 19:48:08'),
(224, 'jaigodaLori jaigodaLori jaigodaLoriWU', '2014-02-27 19:48:08'),
(225, 'Katushas Katushas KatushasZP', '2014-02-27 19:48:08'),
(226, 'expogeCax expogeCax expogeCaxPZ', '2014-02-27 19:48:08'),
(227, 'Illindilt Illindilt IllindiltPU', '2014-02-27 19:48:08'),
(228, 'Tomeoguegeply Tomeoguegeply TomeoguegeplyYF', '2014-02-27 19:48:08'),
(229, 'MariaanaBof MariaanaBof MariaanaBofQS', '2014-02-27 19:48:08'),
(230, 'Ferieillewram Ferieillewram FerieillewramNN', '2014-02-27 19:48:08'),
(231, 'Shellabeets Shellabeets ShellabeetsWE', '2014-02-27 19:48:08'),
(232, 'Rolaagetout Rolaagetout RolaagetoutXJ', '2014-02-27 19:48:08'),
(233, 'phelcophesy phelcophesy phelcophesySB', '2014-02-27 19:48:08'),
(234, 'Unieuhlc Unieuhlc Unieuhlc', '2014-02-27 19:48:08'),
(235, 'TinaHor TinaHor TinaHorYH', '2014-02-27 19:48:08'),
(236, 'Shearmanath Shearmanath ShearmanathJH', '2014-02-27 19:48:08'),
(237, 'groroSace groroSace groroSaceKU', '2014-02-27 19:48:08'),
(238, 'Bleptuttexlat Bleptuttexlat BleptuttexlatTW', '2014-02-27 19:48:09'),
(239, 'Colinen Colinen ColinenYQ', '2014-02-27 19:48:09'),
(240, 'Amelrymor Amelrymor AmelrymorBL', '2014-02-27 19:48:09'),
(201, 'DepecheMode DepecheMode DepecheMode', '2014-02-27 19:48:40'),
(202, 'ajjfsfd ajjfsfd Toby Speed', '2014-02-27 19:48:40'),
(203, 'alegroprom alegroprom alegroproml', '2014-02-27 19:48:40'),
(204, 'Wenneerty Wenneerty WenneertyHR', '2014-02-27 19:48:40'),
(205, 'darmasarp darmasarp darmasarpZG', '2014-02-27 19:48:40'),
(206, 'osteosory osteosory osteosoryTV', '2014-02-27 19:48:40'),
(207, 'wouctuttadope wouctuttadope wouctuttadopeNW', '2014-02-27 19:48:40'),
(208, 'Acelpenue Acelpenue AcelpenueVG', '2014-02-27 19:48:40'),
(209, 'julikrulitonline julikrulitonline julikrulitonline', '2014-02-27 19:48:40'),
(210, 'Uzwzryweor Uzwzryweor UzwzryweorED', '2014-02-27 19:48:41'),
(211, 'Cercoiteinita Cercoiteinita CercoiteinitaSN', '2014-02-27 19:48:41'),
(213, 'Ovevoilmike Ovevoilmike OvevoilmikeVQ', '2014-02-27 19:48:41'),
(214, 'miss-lazaruk2011gGW miss-lazaruk2011gGW yuliya-zagumenkinagGAVC', '2014-02-27 19:48:41'),
(215, 'Twessidondist Twessidondist TwessidondistJF', '2014-02-27 19:48:41'),
(216, 'MarianaBof MarianaBof MarianaBofPC', '2014-02-27 19:48:41'),
(217, 'Viagra Viagra EnenseMum', '2014-02-27 19:48:41'),
(218, 'simmanikkozzas simmanikkozzas Revia', '2014-02-27 19:48:41'),
(219, 'Geytidama Geytidama GeytidamaDU', '2014-02-27 19:48:41'),
(197, 'AlexledovichA AlexledovichA AlexledovichAAF', '2014-02-27 19:49:00'),
(198, 'Midoweeffrefe Midoweeffrefe MidoweeffrefeGY', '2014-02-27 19:49:00'),
(199, 'invamCeaxia invamCeaxia invamCeaxiaQB', '2014-02-27 19:49:00'),
(200, 'LollaBof LollaBof LollaBofQE', '2014-02-27 19:49:00');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_user_notes`
--

CREATE TABLE IF NOT EXISTS `w96sn_user_notes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `catid` int(10) unsigned NOT NULL DEFAULT '0',
  `subject` varchar(100) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `state` tinyint(3) NOT NULL DEFAULT '0',
  `checked_out` int(10) unsigned NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_user_id` int(10) unsigned NOT NULL,
  `modified_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `review_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_user_id` (`user_id`),
  KEY `idx_category_id` (`catid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_user_profiles`
--

CREATE TABLE IF NOT EXISTS `w96sn_user_profiles` (
  `user_id` int(11) NOT NULL,
  `profile_key` varchar(100) NOT NULL,
  `profile_value` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `idx_user_id_profile_key` (`user_id`,`profile_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Simple user profile storage table';

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_user_usergroup_map`
--

CREATE TABLE IF NOT EXISTS `w96sn_user_usergroup_map` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Foreign Key to #__users.id',
  `group_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Foreign Key to #__usergroups.id',
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `w96sn_user_usergroup_map`
--

INSERT INTO `w96sn_user_usergroup_map` (`user_id`, `group_id`) VALUES
(165, 8),
(187, 2),
(189, 2),
(190, 2),
(194, 2),
(195, 2),
(196, 2),
(212, 2),
(220, 2),
(222, 2),
(254, 2),
(261, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_viewlevels`
--

CREATE TABLE IF NOT EXISTS `w96sn_viewlevels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `title` varchar(100) NOT NULL DEFAULT '',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `rules` varchar(5120) NOT NULL COMMENT 'JSON encoded access control.',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_assetgroup_title_lookup` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `w96sn_viewlevels`
--

INSERT INTO `w96sn_viewlevels` (`id`, `title`, `ordering`, `rules`) VALUES
(1, 'Public', 0, '[1]'),
(2, 'Registered', 1, '[6,2,8]'),
(3, 'Special', 2, '[6,3,8]');

-- --------------------------------------------------------

--
-- Структура таблицы `w96sn_weblinks`
--

CREATE TABLE IF NOT EXISTS `w96sn_weblinks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL DEFAULT '0',
  `sid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `url` varchar(250) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hits` int(11) NOT NULL DEFAULT '0',
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `checked_out` int(11) NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `archived` tinyint(1) NOT NULL DEFAULT '0',
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `access` int(11) NOT NULL DEFAULT '1',
  `params` text NOT NULL,
  `language` char(7) NOT NULL DEFAULT '',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created_by_alias` varchar(255) NOT NULL DEFAULT '',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(10) unsigned NOT NULL DEFAULT '0',
  `metakey` text NOT NULL,
  `metadesc` text NOT NULL,
  `metadata` text NOT NULL,
  `featured` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'Set if link is featured.',
  `xreference` varchar(50) NOT NULL COMMENT 'A reference to enable linkages to external data sets.',
  `publish_up` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `idx_access` (`access`),
  KEY `idx_checkout` (`checked_out`),
  KEY `idx_state` (`state`),
  KEY `idx_catid` (`catid`),
  KEY `idx_createdby` (`created_by`),
  KEY `idx_featured_catid` (`featured`,`catid`),
  KEY `idx_language` (`language`),
  KEY `idx_xreference` (`xreference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
