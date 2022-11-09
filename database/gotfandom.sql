-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2022 pada 15.39
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gotfandom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `opini` varchar(255) NOT NULL,
  `tanggal_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `house`
--

CREATE TABLE `house` (
  `id_house` int(11) NOT NULL,
  `name_house` varchar(40) NOT NULL,
  `loc_house` varchar(40) NOT NULL,
  `region_house` varchar(40) NOT NULL,
  `words_house` varchar(100) NOT NULL,
  `pict_house` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `house`
--

INSERT INTO `house` (`id_house`, `name_house`, `loc_house`, `region_house`, `words_house`, `pict_house`) VALUES
(101, 'Stark', 'Winterfell', 'North', 'Winter is Coming', ''),
(102, 'Targaryen', 'Dragonstone', 'North', 'Fire and Blood', ''),
(103, 'Lannister', 'Casterly Rock', 'Westerlands', 'Hear Me Roar!', ''),
(104, 'Geyjoy', 'Pyke', 'Iron Island', 'We Do Not Show', ''),
(105, 'Martell', 'Sunspear', 'Dorne', 'Unbowed, Unbent, Unbroken', ''),
(106, 'Tyrell', 'Highgarden', 'Reach', 'Growing Strong', ''),
(107, 'Baratheon', 'Storms End', 'Stormlands', 'Ours is the Fury', ''),
(108, 'Arryn', 'Eyrie', 'Vale', 'As High as Honor', ''),
(109, 'Tully', 'Riverrun', 'Rverlands', 'Family, Duty, Honor', ''),
(110, 'Royce', 'Runestone', 'North', 'We Remember', ''),
(111, 'Clegane', 'Cleganes Keep', 'Westerlands', '', ''),
(112, 'Tarly', 'Horn Hill', 'Reach', 'First in Battle', ''),
(113, 'Karstark', 'Karhold', 'North', 'The Sun of Winter', ''),
(114, 'Umber', 'Last Hearth', 'North', '', ''),
(115, 'Bolton', 'Dreadfort', 'North', 'Our Blades Are Sharp', ''),
(116, 'Mormont', 'Bear Island', 'North', 'Here We Stand', ''),
(117, 'Reed', 'Greywater Watch', 'North', '', ''),
(118, 'Seaworth', 'Cape Wrath', 'Stormlands', '', ''),
(119, 'Frey', 'Twins', 'Riverlands', '', ''),
(120, 'Reyne', 'Castamere', 'Westerlands', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karakter`
--

CREATE TABLE `karakter` (
  `id_char` int(11) NOT NULL,
  `name_char` varchar(40) NOT NULL,
  `id_house` int(11) NOT NULL,
  `title_char` varchar(100) NOT NULL,
  `caption_char` varchar(255) NOT NULL,
  `pict_char` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id_house`);

--
-- Indeks untuk tabel `karakter`
--
ALTER TABLE `karakter`
  ADD PRIMARY KEY (`id_char`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `house`
--
ALTER TABLE `house`
  MODIFY `id_house` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `karakter`
--
ALTER TABLE `karakter`
  MODIFY `id_char` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
