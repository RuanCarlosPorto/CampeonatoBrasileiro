-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 31-Jul-2021 às 17:29
-- Versão do servidor: 8.0.23-0ubuntu0.20.10.1
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `campeonato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `championships`
--

CREATE TABLE `championships` (
  `id` bigint UNSIGNED NOT NULL,
  `team_id` int NOT NULL,
  `points` int NOT NULL DEFAULT '0',
  `games` int NOT NULL DEFAULT '0',
  `victories` int NOT NULL DEFAULT '0',
  `draws` int NOT NULL DEFAULT '0',
  `loses` int NOT NULL DEFAULT '0',
  `goals_pro` int NOT NULL DEFAULT '0',
  `goals_against` int NOT NULL DEFAULT '0',
  `goals_dif` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `championships`
--

INSERT INTO `championships` (`id`, `team_id`, `points`, `games`, `victories`, `draws`, `loses`, `goals_pro`, `goals_against`, `goals_dif`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(2, 2, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(3, 3, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(4, 4, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(5, 5, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(6, 6, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(7, 7, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(8, 8, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(9, 9, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(10, 10, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(11, 11, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(12, 12, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(13, 13, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(14, 14, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(15, 15, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(16, 16, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(17, 17, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(18, 18, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(19, 19, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(20, 20, 0, 0, 0, 0, 0, 0, 0, 0, '2021-07-31 23:28:34', '2021-07-31 23:28:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matches`
--

CREATE TABLE `matches` (
  `id` bigint UNSIGNED NOT NULL,
  `team_one_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_two_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_team_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_team_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_07_31_152603_create_teams_table', 1),
(2, '2021_07_31_152948_create_matches_table', 1),
(3, '2021_07_31_153251_create_championships_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `teams`
--

INSERT INTO `teams` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Palmeiras', 'Palmeiras.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(2, 'Atlético-MG', 'atletico-mg.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(3, 'Fortaleza', 'fortaleza.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(4, 'Bragantino', 'bragantino.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(5, 'Atlético-PR', 'Athletico-PR.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(6, 'Flamengo', 'Flamengo-2018.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(7, 'Ceará', 'ceara.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(8, 'Atlético-GO', 'atletico-go-2020.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(9, 'Bahia', 'bahia.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(10, 'Corinthians', 'Corinthians.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(11, 'Fluminense', 'fluminense.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(12, 'Santos', 'santos.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(13, 'Juventude', 'Juventude-2021-01.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(14, 'Internacional', 'internacional.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(15, 'Cuiabá', 'Cuiaba_EC.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(16, 'Sport Recife', 'sport.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(17, 'São Paulo', 'sao-paulo.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(18, 'América-MG', 'America-MG.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(19, 'Grêmio', 'gremio.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34'),
(20, 'Chapecoense', 'CHAPECOENSE-2018.svg', '2021-07-31 23:28:34', '2021-07-31 23:28:34');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `championships`
--
ALTER TABLE `championships`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `championships`
--
ALTER TABLE `championships`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `matches`
--
ALTER TABLE `matches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
