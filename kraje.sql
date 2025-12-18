-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2025 at 01:54 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kraje`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fiszki1`
--

CREATE TABLE `fiszki1` (
  `id` int(11) NOT NULL,
  `eng` varchar(50) DEFAULT NULL,
  `pl` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fiszki1`
--

INSERT INTO `fiszki1` (`id`, `eng`, `pl`) VALUES
(12, 'cat', 'kot'),
(13, 'dog', 'pies'),
(14, 'bird', 'ptak'),
(15, 'fish', 'ryba'),
(16, 'horse', 'koń'),
(17, 'cow', 'krowa'),
(18, 'sheep', 'owca'),
(19, 'pig', 'świnia'),
(20, 'mouse', 'mysz'),
(21, 'rabbit', 'królik'),
(22, 'red', 'czerwony'),
(23, 'blue', 'niebieski'),
(24, 'green', 'zielony'),
(25, 'yellow', 'żółty'),
(26, 'black', 'czarny'),
(27, 'white', 'biały'),
(28, 'one', 'jeden'),
(29, 'two', 'dwa'),
(30, 'three', 'trzy'),
(31, 'four', 'cztery'),
(32, 'five', 'pięć'),
(33, 'six', 'sześć'),
(34, 'seven', 'siedem'),
(35, 'eight', 'osiem'),
(36, 'nine', 'dziewięć'),
(37, 'ten', 'dziesięć'),
(38, 'up', 'góra'),
(39, 'down', 'dół'),
(40, 'left', 'lewo'),
(41, 'right', 'prawo'),
(42, 'big', 'duży'),
(43, 'small', 'mały'),
(44, 'fast', 'szybki'),
(45, 'slow', 'wolny'),
(46, 'hot', 'gorąco'),
(47, 'cold', 'zimno'),
(48, 'happy', 'szczęśliwy'),
(49, 'sad', 'smutny'),
(50, 'day', 'dzień'),
(51, 'night', 'noc'),
(52, 'sun', 'słońce'),
(53, 'moon', 'księżyc'),
(54, 'star', 'gwiazda'),
(55, 'sky', 'niebo'),
(56, 'tree', 'drzewo'),
(57, 'flower', 'kwiat'),
(58, 'house', 'dom'),
(59, 'door', 'drzwi'),
(60, 'window', 'okno'),
(61, 'table', 'stół'),
(62, 'chair', 'krzesło'),
(63, 'bed', 'łóżko'),
(64, 'food', 'jedzenie'),
(65, 'drink', 'napój'),
(66, 'bread', 'chleb'),
(67, 'milk', 'mleko'),
(68, 'cheese', 'ser'),
(69, 'apple', 'jabłko'),
(70, 'orange', 'pomarańcza'),
(71, 'banana', 'banan'),
(72, 'water', 'woda'),
(73, 'coffee', 'kawa'),
(74, 'tea', 'herbata'),
(75, 'juice', 'sok'),
(76, 'egg', 'jajo'),
(77, 'butter', 'masło'),
(78, 'meat', 'mięso'),
(79, 'fish', 'ryba'),
(80, 'soup', 'zupa'),
(81, 'rice', 'ryż'),
(82, 'pasta', 'makaron'),
(83, 'salad', 'sałatka'),
(84, 'cake', 'ciasto'),
(85, 'chocolate', 'czekolada'),
(86, 'pen', 'długopis'),
(87, 'pencil', 'ołówek'),
(88, 'book', 'książka'),
(89, 'paper', 'papier'),
(90, 'computer', 'komputer'),
(91, 'phone', 'telefon'),
(92, 'music', 'muzyka'),
(93, 'movie', 'film'),
(94, 'game', 'gra'),
(95, 'toy', 'zabawka'),
(96, 'friend', 'przyjaciel'),
(97, 'family', 'rodzina'),
(98, 'school', 'szkoła'),
(99, 'teacher', 'nauczyciel'),
(100, 'student', 'uczeń'),
(101, 'work', 'praca'),
(102, 'car', 'samochód'),
(103, 'bike', 'rower'),
(104, 'bus', 'autobus'),
(105, 'train', 'pociąg'),
(106, 'door', 'drzwi'),
(107, 'window', 'okno'),
(108, 'light', 'światło'),
(109, 'dark', 'ciemno'),
(110, 'happy', 'szczęśliwy'),
(111, 'sad', 'smutny'),
(112, 'fast', 'szybki'),
(113, 'slow', 'wolny'),
(114, 'hot', 'gorąco'),
(115, 'cold', 'zimno'),
(116, 'good', 'dobry'),
(117, 'bad', 'zły');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fiszki2`
--

CREATE TABLE `fiszki2` (
  `id` int(11) NOT NULL,
  `eng` varchar(50) DEFAULT NULL,
  `pl` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fiszki2`
--

INSERT INTO `fiszki2` (`id`, `eng`, `pl`) VALUES
(1, 'Poland', 'Polska'),
(2, 'Warsaw', 'Warszawa'),
(3, 'Germany', 'Niemcy'),
(4, 'Berlin', 'Berlin'),
(5, 'France', 'Francja'),
(6, 'Paris', 'Paryż'),
(7, 'Spain', 'Hiszpania'),
(8, 'Madrid', 'Madryt'),
(9, 'Italy', 'Włochy'),
(10, 'Rome', 'Rzym'),
(11, 'UK', 'Wielka Brytania'),
(12, 'London', 'Londyn'),
(13, 'USA', 'Stany Zjednoczone'),
(14, 'Washington', 'Waszyngton'),
(15, 'Russia', 'Rosja'),
(16, 'Moscow', 'Moskwa'),
(17, 'China', 'Chiny'),
(18, 'Beijing', 'Pekin'),
(19, 'Japan', 'Japonia'),
(20, 'Tokyo', 'Tokio'),
(21, 'Canada', 'Kanada'),
(22, 'Ottawa', 'Ottawa'),
(23, 'Mexico', 'Meksyk'),
(24, 'Mexico City', 'Meksyk'),
(25, 'Brazil', 'Brazylia'),
(26, 'Brasilia', 'Brasilia'),
(27, 'Argentina', 'Argentyna'),
(28, 'Buenos Aires', 'Buenos Aires'),
(29, 'Chile', 'Chile'),
(30, 'Santiago', 'Santiago'),
(31, 'Australia', 'Australia'),
(32, 'Canberra', 'Canberra'),
(33, 'India', 'Indie'),
(34, 'New Delhi', 'Nowe Delhi'),
(35, 'Thailand', 'Tajlandia'),
(36, 'Bangkok', 'Bangkok'),
(37, 'Vietnam', 'Wietnam'),
(38, 'Hanoi', 'Hanoi'),
(39, 'Egypt', 'Egipt'),
(40, 'Cairo', 'Kair'),
(41, 'South Africa', 'RPA'),
(42, 'Pretoria', 'Pretoria'),
(43, 'Nigeria', 'Nigeria'),
(44, 'Abuja', 'Abuja'),
(45, 'Kenya', 'Kenia'),
(46, 'Nairobi', 'Nairobi'),
(47, 'Turkey', 'Turcja'),
(48, 'Ankara', 'Ankara'),
(49, 'Greece', 'Grecja'),
(50, 'Athens', 'Ateny'),
(51, 'Portugal', 'Portugalia'),
(52, 'Lisbon', 'Lizbona'),
(53, 'Netherlands', 'Holandia'),
(54, 'Amsterdam', 'Amsterdam'),
(55, 'Belgium', 'Belgia'),
(56, 'Brussels', 'Bruksela'),
(57, 'Sweden', 'Szwecja'),
(58, 'Stockholm', 'Sztokholm'),
(59, 'Norway', 'Norwegia'),
(60, 'Oslo', 'Oslo'),
(61, 'Finland', 'Finlandia'),
(62, 'Helsinki', 'Helsinki'),
(63, 'Denmark', 'Dania'),
(64, 'Copenhagen', 'Kopenhaga'),
(65, 'Iceland', 'Islandia'),
(66, 'Reykjavik', 'Reykjavik'),
(67, 'Ireland', 'Irlandia'),
(68, 'Dublin', 'Dublin'),
(69, 'Scotland', 'Szkocja'),
(70, 'Edinburgh', 'Edynburg'),
(71, 'Wales', 'Walia'),
(72, 'Cardiff', 'Cardiff'),
(73, 'Austria', 'Austria'),
(74, 'Vienna', 'Wiedeń'),
(75, 'Switzerland', 'Szwajcaria'),
(76, 'Zurich', 'Zurych'),
(77, 'Czech Republic', 'Czechy'),
(78, 'Prague', 'Praga'),
(79, 'Slovakia', 'Słowacja'),
(80, 'Bratislava', 'Bratysława'),
(81, 'Hungary', 'Węgry'),
(82, 'Budapest', 'Budapeszt'),
(83, 'Lithuania', 'Litwa'),
(84, 'Vilnius', 'Wilno'),
(85, 'Latvia', 'Łotwa'),
(86, 'Riga', 'Ryga'),
(87, 'Estonia', 'Estonia'),
(88, 'Tallinn', 'Tallinn'),
(89, 'Belarus', 'Białoruś'),
(90, 'Minsk', 'Mińsk'),
(91, 'Ukraine', 'Ukraina'),
(92, 'Kyiv', 'Kijów'),
(93, 'Moldova', 'Mołdawia'),
(94, 'Chisinau', 'Kiszyniów'),
(95, 'Georgia', 'Gruzja'),
(96, 'Tbilisi', 'Tbilisi'),
(97, 'Armenia', 'Armenia'),
(98, 'Yerevan', 'Erywań'),
(99, 'Azerbaijan', 'Azerbejdżan'),
(100, 'Baku', 'Baku');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fiszki3`
--

CREATE TABLE `fiszki3` (
  `id` int(11) NOT NULL,
  `eng` varchar(50) DEFAULT NULL,
  `pl` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fiszki3`
--

INSERT INTO `fiszki3` (`id`, `eng`, `pl`) VALUES
(1, 'airport', 'lotnisko'),
(2, 'train', 'pociąg'),
(3, 'bus', 'autobus'),
(4, 'car', 'samochód'),
(5, 'bicycle', 'rower'),
(6, 'ticket', 'bilet'),
(7, 'luggage', 'bagaż'),
(8, 'hotel', 'hotel'),
(9, 'restaurant', 'restauracja'),
(10, 'map', 'mapa'),
(11, 'passport', 'paszport'),
(12, 'flight', 'lot'),
(13, 'station', 'stacja'),
(14, 'street', 'ulica'),
(15, 'taxi', 'taksówka'),
(16, 'bus stop', 'przystanek'),
(17, 'suitcase', 'walizka'),
(18, 'journey', 'podróż'),
(19, 'ticket office', 'kasa biletowa'),
(20, 'departure', 'odlot'),
(21, 'arrival', 'przylot'),
(22, 'train station', 'dworzec'),
(23, 'subway', 'metro'),
(24, 'airport terminal', 'terminal'),
(25, 'boarding gate', 'bramka'),
(26, 'check-in', 'odprawa'),
(27, 'lounge', 'poczekalnia'),
(28, 'baggage claim', 'odbiór bagażu'),
(29, 'customs', 'odprawa celna'),
(30, 'security', 'kontrola'),
(31, 'schedule', 'rozkład'),
(32, 'platform', 'peron'),
(33, 'seat', 'miejsce'),
(34, 'window seat', 'okno'),
(35, 'aisle seat', 'korytarz'),
(36, 'ticket counter', 'kasa biletowa'),
(37, 'coach', 'wagon'),
(38, 'bus line', 'linia autobusowa'),
(39, 'fare', 'opłata'),
(40, 'passenger', 'pasażer'),
(41, 'driver', 'kierowca'),
(42, 'pilot', 'pilot'),
(43, 'flight attendant', 'stewardessa'),
(44, 'crew', 'załoga'),
(45, 'delay', 'opóźnienie'),
(46, 'cancellation', 'odwołanie'),
(47, 'reservation', 'rezerwacja'),
(48, 'boarding pass', 'karta pokładowa'),
(49, 'luggage cart', 'wózek bagażowy'),
(50, 'conductor', 'konduktor'),
(51, 'round trip', 'podróż w obie strony'),
(52, 'one way', 'w jedną stronę'),
(53, 'ticket machine', 'biletomat'),
(54, 'train line', 'linia kolejowa'),
(55, 'bus stop sign', 'znak przystanku'),
(56, 'ride', 'przejazd'),
(57, 'station master', 'dyżurny ruchu'),
(58, 'car rental', 'wypożyczalnia samochodów'),
(59, 'fuel', 'paliwo'),
(60, 'road', 'droga'),
(61, 'highway', 'autostrada'),
(62, 'bridge', 'most'),
(63, 'tunnel', 'tunel'),
(64, 'traffic', 'ruch'),
(65, 'crosswalk', 'przejście'),
(66, 'intersection', 'skrzyżowanie'),
(67, 'roundabout', 'rondo'),
(68, 'parking', 'parking'),
(69, 'garage', 'garaż'),
(70, 'ticket inspector', 'kontroler biletów'),
(71, 'bus terminal', 'dworzec autobusowy'),
(72, 'train schedule', 'rozkład jazdy'),
(73, 'flight schedule', 'rozkład lotów'),
(74, 'luggage locker', 'szafka bagażowa'),
(75, 'seat belt', 'pas bezpieczeństwa'),
(76, 'exit', 'wyjście'),
(77, 'entrance', 'wejście'),
(78, 'travel agency', 'biuro podróży'),
(79, 'tour', 'wycieczka'),
(80, 'guide', 'przewodnik'),
(81, 'souvenir', 'pamiątka'),
(82, 'hotel reception', 'recepcja'),
(83, 'room key', 'klucz do pokoju'),
(84, 'reservation desk', 'recepcja rezerwacji'),
(85, 'check-out', 'wymeldowanie'),
(86, 'check-in desk', 'recepcja odprawy'),
(87, 'boarding time', 'czas wejścia na pokład'),
(88, 'arrival time', 'czas przylotu'),
(89, 'departure time', 'czas odlotu'),
(90, 'platform number', 'numer peronu'),
(91, 'gate number', 'numer bramki'),
(92, 'luggage weight', 'waga bagażu'),
(93, 'carry-on', 'bagaż podręczny'),
(94, 'travel insurance', 'ubezpieczenie podróży'),
(95, 'customs declaration', 'deklaracja celna'),
(96, 'visa', 'wiza'),
(97, 'passport control', 'kontrola paszportowa'),
(98, 'emergency exit', 'wyjście ewakuacyjne'),
(99, 'lost and found', 'biuro rzeczy znalezionych'),
(100, 'tax', 'podatek'),
(101, 'tip', 'napiwek'),
(102, 'travel companion', 'towarzysz podróży'),
(103, 'itinerary', 'plan podróży'),
(104, 'backpack', 'plecak'),
(105, 'map app', 'aplikacja z mapą'),
(106, 'bus schedule', 'rozkład autobusów'),
(107, 'train ticket', 'bilet kolejowy'),
(108, 'flight ticket', 'bilet lotniczy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fiszki4`
--

CREATE TABLE `fiszki4` (
  `id` int(11) NOT NULL,
  `eng` varchar(50) DEFAULT NULL,
  `pl` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fiszki4`
--

INSERT INTO `fiszki4` (`id`, `eng`, `pl`) VALUES
(1, 'bread', 'chleb'),
(2, 'milk', 'mleko'),
(3, 'cheese', 'ser'),
(4, 'apple', 'jabłko'),
(5, 'orange', 'pomarańcza'),
(6, 'banana', 'banan'),
(7, 'water', 'woda'),
(8, 'coffee', 'kawa'),
(9, 'tea', 'herbata'),
(10, 'juice', 'sok'),
(11, 'egg', 'jajo'),
(12, 'butter', 'masło'),
(13, 'meat', 'mięso'),
(14, 'fish', 'ryba'),
(15, 'soup', 'zupa'),
(16, 'rice', 'ryż'),
(17, 'pasta', 'makaron'),
(18, 'salad', 'sałatka'),
(19, 'cake', 'ciasto'),
(20, 'chocolate', 'czekolada'),
(21, 'honey', 'miód'),
(22, 'yogurt', 'jogurt'),
(23, 'ice cream', 'lody'),
(24, 'coffee beans', 'ziarna kawy'),
(25, 'tea leaves', 'liście herbaty'),
(26, 'sugar', 'cukier'),
(27, 'salt', 'sól'),
(28, 'pepper', 'pieprz'),
(29, 'oil', 'olej'),
(30, 'vinegar', 'ocet'),
(31, 'chicken', 'kurczak'),
(32, 'beef', 'wołowina'),
(33, 'pork', 'wieprzowina'),
(34, 'lamb', 'jagnięcina'),
(35, 'sausage', 'kiełbasa'),
(36, 'bread roll', 'bułka'),
(37, 'croissant', 'rogalik'),
(38, 'bagel', 'bajgiel'),
(39, 'pancake', 'naleśnik'),
(40, 'waffle', 'gofr'),
(41, 'coffee cup', 'filiżanka kawy'),
(42, 'tea cup', 'filiżanka herbaty'),
(43, 'fork', 'widelec'),
(44, 'knife', 'nóż'),
(45, 'spoon', 'łyżka'),
(46, 'plate', 'talerz'),
(47, 'bowl', 'miska'),
(48, 'glass', 'szklanka'),
(49, 'bottle', 'butelka'),
(50, 'napkin', 'serwetka'),
(51, 'sandwich', 'kanapka'),
(52, 'pizza', 'pizza'),
(53, 'hamburger', 'hamburger'),
(54, 'hot dog', 'hot dog'),
(55, 'fries', 'frytki'),
(56, 'vegetables', 'warzywa'),
(57, 'fruit', 'owoce'),
(58, 'carrot', 'marchew'),
(59, 'potato', 'ziemniak'),
(60, 'tomato', 'pomidor'),
(61, 'cucumber', 'ogórek'),
(62, 'onion', 'cebula'),
(63, 'garlic', 'czosnek'),
(64, 'lettuce', 'sałata'),
(65, 'spinach', 'szpinak'),
(66, 'cheeseburger', 'cheeseburger'),
(67, 'soup bowl', 'miska zupy'),
(68, 'ice', 'lód'),
(69, 'cold drink', 'zimny napój'),
(70, 'smoothie', 'koktajl'),
(71, 'cookie', 'ciastko'),
(72, 'brownie', 'brownie'),
(73, 'muffin', 'babeczka'),
(74, 'pie', 'ciasto'),
(75, 'jam', 'dżem'),
(76, 'honey jar', 'słoik miodu'),
(77, 'tea pot', 'dzbanek herbaty'),
(78, 'coffee maker', 'ekspres do kawy'),
(79, 'water bottle', 'butelka wody'),
(80, 'milkshake', 'shake'),
(81, 'cream', 'śmietana'),
(82, 'cheddar', 'cheddar'),
(83, 'mozzarella', 'mozzarella'),
(84, 'yogurt cup', 'kubek jogurtu'),
(85, 'ice cream cone', 'rożek lodowy'),
(86, 'chili', 'papryczka chili'),
(87, 'cucumber salad', 'sałatka z ogórka'),
(88, 'fruit salad', 'sałatka owocowa'),
(89, 'pasta dish', 'danie makaronowe'),
(90, 'rice dish', 'danie ryżowe'),
(91, 'sandwich bread', 'chleb do kanapki'),
(92, 'baguette', 'bagietka'),
(93, 'toast', 'tost'),
(94, 'croissant chocolate', 'rogalik czekoladowy'),
(95, 'tea bag', 'torebka herbaty'),
(96, 'coffee cup small', 'mała filiżanka kawy'),
(97, 'coffee cup large', 'duża filiżanka kawy'),
(98, 'milk cup', 'kubek mleka'),
(99, 'juice glass', 'szklanka soku'),
(100, 'smoothie glass', 'szklanka smoothie'),
(101, 'beer', 'piwo'),
(102, 'wine', 'wino'),
(103, 'vodka', 'wódka'),
(104, 'rum', 'rum'),
(105, 'cocktail', 'koktajl'),
(106, 'whiskey', 'whisky'),
(107, 'cheese platter', 'talerz serów'),
(108, 'meat platter', 'talerz mięs'),
(109, 'fruit platter', 'talerz owoców'),
(110, 'dessert', 'deser');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fiszki5`
--

CREATE TABLE `fiszki5` (
  `id` int(11) NOT NULL,
  `eng` varchar(50) DEFAULT NULL,
  `pl` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fiszki5`
--

INSERT INTO `fiszki5` (`id`, `eng`, `pl`) VALUES
(1, 'Hello', 'Cześć'),
(2, 'Good morning', 'Dzień dobry'),
(3, 'Good evening', 'Dobry wieczór'),
(4, 'How are you?', 'Jak się masz?'),
(5, 'I am fine', 'Mam się dobrze'),
(6, 'Thank you', 'Dziękuję'),
(7, 'Please', 'Proszę'),
(8, 'Excuse me', 'Przepraszam'),
(9, 'I am sorry', 'Przykro mi'),
(10, 'See you', 'Do widzenia'),
(11, 'Yes', 'Tak'),
(12, 'No', 'Nie'),
(13, 'Maybe', 'Może'),
(14, 'I don’t know', 'Nie wiem'),
(15, 'Can you help me?', 'Czy możesz mi pomóc?'),
(16, 'What is your name?', 'Jak masz na imię?'),
(17, 'My name is…', 'Mam na imię…'),
(18, 'Where is the bathroom?', 'Gdzie jest łazienka?'),
(19, 'I like it', 'Podoba mi się'),
(20, 'I don’t like it', 'Nie podoba mi się'),
(21, 'How much is it?', 'Ile to kosztuje?'),
(22, 'I need help', 'Potrzebuję pomocy'),
(23, 'I am lost', 'Zgubiłem się'),
(24, 'Can you repeat?', 'Czy możesz powtórzyć?'),
(25, 'I don’t understand', 'Nie rozumiem'),
(26, 'Goodbye', 'Do widzenia'),
(27, 'See you later', 'Do zobaczenia później'),
(28, 'Nice to meet you', 'Miło cię poznać'),
(29, 'Have a nice day', 'Miłego dnia'),
(30, 'Happy birthday', 'Wszystkiego najlepszego'),
(31, 'Congratulations', 'Gratulacje'),
(32, 'I am tired', 'Jestem zmęczony'),
(33, 'I am hungry', 'Jestem głodny'),
(34, 'I am thirsty', 'Chce mi się pić'),
(35, 'I am happy', 'Jestem szczęśliwy'),
(36, 'I am sad', 'Jestem smutny'),
(37, 'I am angry', 'Jestem zły'),
(38, 'I am excited', 'Jestem podekscytowany'),
(39, 'I am bored', 'Nudzę się'),
(40, 'What time is it?', 'Która godzina?'),
(41, 'Where is…?', 'Gdzie jest…?'),
(42, 'How far is it?', 'Jak daleko to jest?'),
(43, 'Can I have…?', 'Czy mogę prosić…?'),
(44, 'I would like…', 'Chciałbym…'),
(45, 'Do you speak English?', 'Czy mówisz po angielsku?'),
(46, 'I speak a little', 'Mówię trochę'),
(47, 'Can you speak slowly?', 'Czy możesz mówić wolniej?'),
(48, 'Repeat please', 'Powtórz proszę'),
(49, 'I need a doctor', 'Potrzebuję lekarza'),
(50, 'Call the police', 'Zadzwoń na policję'),
(51, 'Where is the train station?', 'Gdzie jest dworzec kolejowy?'),
(52, 'Where is the bus stop?', 'Gdzie jest przystanek autobusowy'),
(53, 'I am looking for…', 'Szukam…'),
(54, 'Is it far?', 'Czy to daleko?'),
(55, 'Turn left', 'Skręć w lewo'),
(56, 'Turn right', 'Skręć w prawo'),
(57, 'Go straight', 'Idź prosto'),
(58, 'Stop here', 'Zatrzymaj się tutaj'),
(59, 'Can you show me?', 'Czy możesz mi pokazać?'),
(60, 'I am learning English', 'Uczę się angielskiego'),
(61, 'Excuse me, where is…?', 'Przepraszam, gdzie jest…?'),
(62, 'How do I get to…?', 'Jak dojdę do…?'),
(63, 'I need a taxi', 'Potrzebuję taksówki'),
(64, 'Call me a taxi', 'Zamów mi taksówkę'),
(65, 'I want to go to…', 'Chcę jechać do…'),
(66, 'I am lost', 'Zgubiłem się'),
(67, 'I need a hotel', 'Potrzebuję hotelu'),
(68, 'Can you recommend a restaurant?', 'Czy możesz polecić restaurację?'),
(69, 'I am allergic to…', 'Jestem uczulony na…'),
(70, 'I don’t eat meat', 'Nie jem mięsa'),
(71, 'I am vegetarian', 'Jestem wegetarianinem'),
(72, 'I am vegan', 'Jestem weganinem'),
(73, 'Check, please', 'Proszę o rachunek'),
(74, 'Where is the nearest pharmacy?', 'Gdzie jest najbliższa apteka'),
(75, 'I have a reservation', 'Mam rezerwację'),
(76, 'Do you have a menu?', 'Czy macie menu?'),
(77, 'I would like water', 'Poproszę wodę'),
(78, 'I would like coffee', 'Poproszę kawę'),
(79, 'I would like tea', 'Poproszę herbatę'),
(80, 'Can I pay by card?', 'Czy mogę zapłacić kartą'),
(81, 'I need directions', 'Potrzebuję wskazówek'),
(82, 'Where can I buy…?', 'Gdzie mogę kupić…?'),
(83, 'What is this?', 'Co to jest?'),
(84, 'I am learning Polish', 'Uczę się polskiego'),
(85, 'Can you write it down?', 'Czy możesz to zapisać?'),
(86, 'I am tired', 'Jestem zmęczony'),
(87, 'I am cold', 'Jest mi zimno'),
(88, 'I am hot', 'Jest mi gorąco'),
(89, 'I am sick', 'Jestem chory'),
(90, 'I am happy', 'Jestem szczęśliwy'),
(91, 'I am sad', 'Jestem smutny'),
(92, 'I am bored', 'Nudzę się'),
(93, 'I am excited', 'Jestem podekscytowany'),
(94, 'I am nervous', 'Jestem zdenerwowany'),
(95, 'I am scared', 'Boję się'),
(96, 'Good luck', 'Powodzenia'),
(97, 'Have fun', 'Miłej zabawy'),
(98, 'Be careful', 'Uważaj'),
(99, 'Watch out', 'Uważaj'),
(100, 'Help!', 'Pomocy!'),
(101, 'Stop!', 'Stój!'),
(102, 'Call an ambulance!', 'Zadzwoń po karetkę!'),
(103, 'I am in a hurry', 'Śpieszę się'),
(104, 'I am lost', 'Zgubiłem się'),
(105, 'Can you help me please?', 'Czy możesz mi pomóc, proszę?'),
(106, 'What is your phone number?', 'Jaki jest twój numer telefonu'),
(107, 'Where are you from?', 'Skąd jesteś?'),
(108, 'I am from Poland', 'Jestem z Polski'),
(109, 'Nice to meet you', 'Miło cię poznać'),
(110, 'Have a nice day', 'Miłego dnia'),
(111, 'See you soon', 'Do zobaczenia wkrótce'),
(112, 'Good night', 'Dobranoc'),
(113, 'Sweet dreams', 'Słodkich snów'),
(114, 'Take care', 'Trzymaj się'),
(115, 'I am fine, thank you', 'Dziękuję, dobrze'),
(116, 'I am lost, can you help me?', 'Zgubiłem się, czy możesz mi pomóc?'),
(117, 'Can I try it?', 'Czy mogę spróbować?'),
(118, 'I like it very much', 'Bardzo mi się podoba'),
(119, 'I don’t like it at all', 'Wcale mi się nie podoba'),
(120, 'Excuse me, please', 'Przepraszam proszę'),
(121, 'I am learning, please help me', 'Uczę się, proszę pomóż mi');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kraje`
--

CREATE TABLE `kraje` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `opis` text DEFAULT NULL,
  `czas_lotu` varchar(50) DEFAULT NULL,
  `zdjecie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kraje`
--

INSERT INTO `kraje` (`id`, `nazwa`, `opis`, `czas_lotu`, `zdjecie`) VALUES
(1, 'Włochy', 'Włochy to kraj pełen historii, kultury i niesamowitej kuchni. Można odwiedzić Wieczne Miasto, podziwiać dzieła sztuki w Florencji, odpocząć na malowniczych plażach Sycylia czy zwiedzić winnice Toskanii.', '2h 15m', 'flags/it.svg'),
(2, 'Hiszpania', 'Hiszpania oferuje szeroki wachlarz atrakcji — od tętniącego życiem Barcelony, przez zabytki Madrytu, aż po gorące plaże Costa Brava. Idealna destynacja na urlop pełen słońca.', '2h 45m', 'flags/es.svg'),
(3, 'Niemcy', 'Niemcy to kraj o bogatej historii i nowoczesnych miastach. Berlin, Monachium i Frankfurt oferują mnóstwo atrakcji kulturalnych, a do tego można zwiedzać zamki nad Renem i Bawarii.', '1h 30m', 'flags/de.svg'),
(4, 'Turcja', 'Turcja łączy w sobie wschodnią i zachodnią kulturę, oferując egzotyczne plaże, zabytki antyczne, a także nowoczesne miasta jak Stambuł. Idealne miejsce na wakacje pełne przygód.', '3h 10m', 'flags/tr.svg'),
(5, 'Francja', 'Francja to kraj miłości, sztuki i pysznej kuchni. Paryż, Lazurowe Wybrzeże, Prowansja — każdy znajdzie coś dla siebie. Warto odwiedzić katedry, zamki i oczywiście spróbować francuskich win.', '2h 30m', 'flags/fr.svg'),
(6, 'Grecja', 'Grecja to kraj z niesamowitą historią, wspaniałymi plażami i wyspami pełnymi uroku. Ateny to centrum starożytnej cywilizacji, a wyspy jak Santorini czy Mykonos to prawdziwe perły turystyczne.', '2h 50m', 'flags/gr.svg'),
(7, 'Wielka_Brytania', 'Zjednoczone Królestwo to kraj o bogatej historii i kulturze. Londyn, Edynburg, wspaniałe zamki i muzea to tylko część atrakcji, jakie czekają na turystów.', '2h 15m', 'flags/gb.svg'),
(8, 'Czechy', 'Czechy to kraj z przepiękną Pragą, wspaniałymi zamkami i piwem, które uważane jest za jedno z najlepszych na świecie. Idealne miejsce na weekendowy wypad.', '1h 10m', 'flags/cz.svg'),
(9, 'Szwajcaria', 'Szwajcaria to kraj niesamowitych krajobrazów — od Alp po jeziora. To raj dla miłośników górskich wędrówek, a także kraj pełen luksusowych kurortów i wspaniałych miast jak Zurych czy Lucerna.', '2h 10m', 'flags/ch.svg'),
(10, 'Egipt', 'Egipt to miejsce, które łączy fascynującą historię starożytnego świata z nowoczesnymi kurortami nad Morzem Czerwonym. Piramidy, świątynie i podwodne rafy koralowe — to tylko niektóre z atrakcji.', '4h 10m', 'flags/eg.svg'),
(11, 'Malta', 'Malta to wyspa pełna historii, turkusowych wód i pięknych plaż. Zamek św. Anioła, Mdina, Valletta — to tylko niektóre z miejsc, które warto zobaczyć.', '2h 30m', 'flags/mt.svg'),
(12, 'Portugalia', 'Portugalia to kraj z pięknymi plażami, urokliwymi miastami i pyszną kuchnią. Lizbona, Porto i region Algarve oferują turystom wspaniałe krajobrazy i mnóstwo atrakcji.', '3h 20m', 'flags/pt.svg'),
(13, 'Szwecja', 'Szwecja to kraj pełen naturalnych piękności, takich jak Laponia, jeziora, lasy i góry. Sztokholm to dynamiczne miasto z nowoczesnymi muzeami i restauracjami, a także jednym z najczystszych powietrzy na świecie.', '2h 10m', 'flags/se.svg'),
(14, 'Holandia', 'Holandia to kraj wiatraków, tulipanów i rowerów. Amsterdam jest pełen uroku, a malownicze miasteczka jak Giethoorn przyciągają turystów swoją idylliczną atmosferą.', '1h 40m', 'flags/nl.svg'),
(15, 'Austria', 'Austria to kraj, który zachwyca miłośników sztuki, muzyki i przyrody. Wiedeń to miasto cesarzy, z przepięknymi pałacami, a Alpy austriackie oferują wspaniałe warunki do narciarzy.', '1h 40m', 'flags/at.svg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(40) DEFAULT NULL,
  `haslo` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `fiszki1`
--
ALTER TABLE `fiszki1`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `fiszki2`
--
ALTER TABLE `fiszki2`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `fiszki3`
--
ALTER TABLE `fiszki3`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `fiszki4`
--
ALTER TABLE `fiszki4`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `fiszki5`
--
ALTER TABLE `fiszki5`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kraje`
--
ALTER TABLE `kraje`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fiszki1`
--
ALTER TABLE `fiszki1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `fiszki2`
--
ALTER TABLE `fiszki2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `fiszki3`
--
ALTER TABLE `fiszki3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `fiszki4`
--
ALTER TABLE `fiszki4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `fiszki5`
--
ALTER TABLE `fiszki5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `kraje`
--
ALTER TABLE `kraje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
