-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 05 aug 2013 om 12:41
-- Serverversie: 5.5.32-cll-lve
-- PHP-versie: 5.3.17


-- --------------------------------------------------------

--
-- Stand-in structuur voor view `countURLS`
--
CREATE TABLE IF NOT EXISTS `countURLS` (
`urls` bigint(21)
);
-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `urls`
--

CREATE TABLE IF NOT EXISTS `urls` (
  `url_id` int(6) NOT NULL AUTO_INCREMENT,
  `url` varchar(2000) NOT NULL,
  `code` varchar(6) NOT NULL,
  PRIMARY KEY (`url_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `website_config`
--

CREATE TABLE IF NOT EXISTS `website_config` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) NOT NULL,
  `site_name` varchar(60) NOT NULL,
  `site_slogan` varchar(255) NOT NULL,
  `site_footer` varchar(255) NOT NULL,
  `site_url` varchar(255) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `website_config`
--

INSERT INTO `website_config` (`index`, `site_title`, `site_name`, `site_slogan`, `site_footer`, `site_url`) VALUES
(1, 'QDB Short URL Service by Midas van Oene | midasvo.nl |', 'qdb.tld', 'An open source short url script!', '', 'qdb.tld/');

-- --------------------------------------------------------

--
-- Structuur voor de view `countURLS`
--
DROP TABLE IF EXISTS `countURLS`;

CREATE ALGORITHM=UNDEFINED DEFINER=`hlaagvut`@`localhost` SQL SECURITY DEFINER VIEW `countURLS` AS select count(`urls`.`url`) AS `urls` from `urls`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;