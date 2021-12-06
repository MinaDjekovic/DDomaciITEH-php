CREATE DATABASE `prodavnica`;

USE `prodavnica`;

DROP TABLE IF EXISTS `igracke`;

CREATE TABLE `igracke` (
  `id` int(11) NOT NULL,
  `kategorija` enum('Dečaci','Devojčice') COLLATE utf8_unicode_ci NOT NULL,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `opis` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cena` double NOT NULL,
  `slika` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `igracke` (`id`, `kategorija`, `naziv`, `opis`, `cena`, `slika`) VALUES
(1, 'Dečaci', 'MATTEL Batman figure 30cm', 'Batman figura namenjena dečacima, uzrasta 4-6 godina, dostupna takođe u: PRODAVNICA 907 TC DELTA CITY - Jurija Gagarina 1', 3299, 'images/betmen.jpg'),
(2, 'Dečaci', 'Motorized web shooting spider man 22cm', 'Spiderman figura koju treba da ima svaki dečak! Pritiskom na dugme, mehanizam pokreće Spidermanove ruke iz kojih se ispaljuje mreža.\r\nIgra će biti zanimljivija sa omiljenim likom svih dečaka!', 2200, 'images/spajdermen.jpg'),
(3, 'Dečaci', 'Ben10 Battle Ultrimatrix sat', 'Ben10 sat,koji svetli na pritisak i nakon što se ubaci prozirni kolut iz njega progovara glas odgovarajućeg Ben10 junaka', 1850, 'images/ben10_sat.jpg'),
(4, 'Dečaci', 'Wolverine X-Men Marvel akcijska figura 18cm', 'Wolverine akcijska figurica namenjena dečacima uzrasta preko 3 godine, sadrži 2 seta kandži koje se stavljaju na ruke superheroju, može da govori', 2000, 'images/wolverine.jpg'),
(5, 'Devojčice', 'Barbie Pink Shoes Kristyn Farraday Doll ', 'Barbie lutkica za devojčice, 18cm, dodatak set aksesoara za Barbie, kao i dve haljinice', 1890, 'images/barbi.jpg'),
(6, 'Devojčice', 'KidKraft Chelsea Doll Cottage with Furniture', 'Kućica za lutke sa: dva stepeništa, tri sprata otvorenog  izgleda, 17 komada nameštaja, prozori na otvaranje i zatvaranje!', 6500, 'images/kucica_za_lutke.jpg'),
(7, 'Devojčice', 'Winx Club Musa doll', 'Lutkica namenjena devojčicama do 3 godine uzrasta. Ima dodatan par Enchantix i Believix krila, i peva', 3000, 'images/winx.jpg'),
(8, 'Devojčice', 'Bon Bon Teddy Bear', 'PLišani medvedić koji može da priča i peva, namenjen devojčicama svih uzrasta', 1730, 'images/medvedic.jpg');


DROP TABLE IF EXISTS `kontakt`;

CREATE TABLE `kontakt` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `igracke`
--
ALTER TABLE `igracke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `igracke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;


ALTER TABLE `kontakt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
