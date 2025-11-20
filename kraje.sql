-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 20, 2025 at 10:30 AM
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
(7, 'Wielka Brytania', 'Zjednoczone Królestwo to kraj o bogatej historii i kulturze. Londyn, Edynburg, wspaniałe zamki i muzea to tylko część atrakcji, jakie czekają na turystów.', '2h 15m', 'flags/gb.svg'),
(8, 'Czechy', 'Czechy to kraj z przepiękną Pragą, wspaniałymi zamkami i piwem, które uważane jest za jedno z najlepszych na świecie. Idealne miejsce na weekendowy wypad.', '1h 10m', 'flags/cz.svg'),
(9, 'Szwajcaria', 'Szwajcaria to kraj niesamowitych krajobrazów — od Alp po jeziora. To raj dla miłośników górskich wędrówek, a także kraj pełen luksusowych kurortów i wspaniałych miast jak Zurych czy Lucerna.', '2h 10m', 'flags/ch.svg'),
(10, 'Egipt', 'Egipt to miejsce, które łączy fascynującą historię starożytnego świata z nowoczesnymi kurortami nad Morzem Czerwonym. Piramidy, świątynie i podwodne rafy koralowe — to tylko niektóre z atrakcji.', '4h 10m', 'flags/eg.svg'),
(11, 'Malta', 'Malta to wyspa pełna historii, turkusowych wód i pięknych plaż. Zamek św. Anioła, Mdina, Valletta — to tylko niektóre z miejsc, które warto zobaczyć.', '2h 30m', 'flags/mt.svg'),
(12, 'Portugalia', 'Portugalia to kraj z pięknymi plażami, urokliwymi miastami i pyszną kuchnią. Lizbona, Porto i region Algarve oferują turystom wspaniałe krajobrazy i mnóstwo atrakcji.', '3h 20m', 'flags/pt.svg'),
(13, 'Szwecja', 'Szwecja to kraj pełen naturalnych piękności, takich jak Laponia, jeziora, lasy i góry. Sztokholm to dynamiczne miasto z nowoczesnymi muzeami i restauracjami, a także jednym z najczystszych powietrzy na świecie.', '2h 10m', 'flags/se.svg'),
(14, 'Holandia', 'Holandia to kraj wiatraków, tulipanów i rowerów. Amsterdam jest pełen uroku, a malownicze miasteczka jak Giethoorn przyciągają turystów swoją idylliczną atmosferą.', '1h 40m', 'flags/nl.svg'),
(15, 'Austria', 'Austria to kraj, który zachwyca miłośników sztuki, muzyki i przyrody. Wiedeń to miasto cesarzy, z przepięknymi pałacami, a Alpy austriackie oferują wspaniałe warunki do narciarzy.', '1h 40m', 'flags/at.svg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kraje`
--
ALTER TABLE `kraje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kraje`
--
ALTER TABLE `kraje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
