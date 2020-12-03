-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2020 às 01:39
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `smscovid19`
--
CREATE DATABASE IF NOT EXISTS `smscovid19` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `smscovid19`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `acompanhamentos`
--

DROP TABLE IF EXISTS `acompanhamentos`;
CREATE TABLE `acompanhamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_funcionario` bigint(20) UNSIGNED NOT NULL,
  `id_agendamentos` bigint(20) UNSIGNED NOT NULL,
  `id_funcionario_acompanhante` bigint(20) UNSIGNED NOT NULL,
  `houveContato` tinyint(1) NOT NULL,
  `sintomas` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contatoComInfectado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apresentaPiora` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orientadoAoPA` tinyint(1) NOT NULL,
  `proximoPasso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigoCID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outrasInformacoes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estaAfastado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicioAfastamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duracaoAfastamento` int(11) NOT NULL,
  `necessitaAfastamento` tinyint(1) NOT NULL,
  `necessitaAcompanhamento` tinyint(1) NOT NULL,
  `motivoFimAcompanhamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desejaAgendar` tinyint(1) NOT NULL,
  `dataReavaliacao` date NOT NULL,
  `horaReavaliacao` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `acompanhamentos`
--

INSERT INTO `acompanhamentos` (`id`, `id_funcionario`, `id_agendamentos`, `id_funcionario_acompanhante`, `houveContato`, `sintomas`, `contatoComInfectado`, `apresentaPiora`, `orientadoAoPA`, `proximoPasso`, `codigoCID`, `outrasInformacoes`, `estaAfastado`, `inicioAfastamento`, `duracaoAfastamento`, `necessitaAfastamento`, `necessitaAcompanhamento`, `motivoFimAcompanhamento`, `desejaAgendar`, `dataReavaliacao`, `horaReavaliacao`, `created_at`, `updated_at`) VALUES
(3, 1, 7, 2, 0, 'Nenhum', 'Nenhum', 'Não', 0, '0', '0', '0', '0', '', 0, 0, 0, '', 0, '0000-00-00', '0000-00-00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

DROP TABLE IF EXISTS `agendamentos`;
CREATE TABLE `agendamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_funcionario` bigint(20) UNSIGNED NOT NULL,
  `id_funcionario_acompanhante` bigint(20) UNSIGNED NOT NULL,
  `categoriaAcompanhante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agendarCom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataAgendamento` date NOT NULL,
  `horaAgendamento` time NOT NULL,
  `agendadoPor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `id_funcionario`, `id_funcionario_acompanhante`, `categoriaAcompanhante`, `agendarCom`, `dataAgendamento`, `horaAgendamento`, `agendadoPor`, `created_at`, `updated_at`) VALUES
(7, 1, 2, 'Médico', 'Homero', '2020-05-06', '16:00:00', '', NULL, '2020-08-26 20:25:48'),
(11, 6, 2, 'Médico', 'ENFERMAGEM', '2020-08-19', '11:48:10', 'Pedro Gurgel Diniz Neto', NULL, NULL),
(12, 2, 6, 'Enfermagem', 'Carlos', '2020-08-25', '12:19:58', 'ziniD', NULL, NULL),
(13, 1, 2, 'Psicólogo', 'Carlos', '2020-08-25', '12:19:58', 'Fulano', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE `funcionarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataNascimento` date NOT NULL,
  `distrito` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoriaAcompanhante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroConselhoRegional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtdeAcompanhamentos` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `cpf`, `telefone`, `email`, `dataNascimento`, `distrito`, `unidade`, `categoriaAcompanhante`, `numeroConselhoRegional`, `qtdeAcompanhamentos`, `created_at`, `updated_at`) VALUES
(1, 'Pedro Gurgel Diniz Neto', '07457547401', '(84) 9 9632-7131', 'pgdneto@gmail.com', '1993-02-19', 'Central', 'SGTIC', 'Administrador', '', 0, NULL, NULL),
(2, 'Alison Tavares', '117.837.424-61', '(84) 99136-9606', 'alisonbjjk@gmail.com', '1999-05-13', 'Leste', 'Hospital Municipal de Natal', 'MEDICO', '99999', 0, NULL, NULL),
(6, 'Telefone e Email', '00099988877', '99988877764', 'pgdneto@gmail.com', '2000-03-08', 'Central', 'UPA Central', 'Médico', '9989', 0, '2020-08-19 17:18:49', '2020-08-19 17:18:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2020_05_27_143132_create_agendamentos_table', 1),
(25, '2020_06_09_165440_create_funcionarios_table', 1),
(26, '2020_06_09_174756_create_triagens_table', 1),
(27, '2020_06_09_181145_create_acompanhamentos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `triagens`
--

DROP TABLE IF EXISTS `triagens`;
CREATE TABLE `triagens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_funcionario` bigint(20) UNSIGNED NOT NULL,
  `contatoComInfectado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fezTeste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senteSintomas` tinyint(1) NOT NULL,
  `sintomas` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`sintomas`)),
  `possuiAtestado` tinyint(1) NOT NULL,
  `inicioAtestado` date NOT NULL,
  `duracaoAtestado` int(11) NOT NULL,
  `trabalhaExterno` tinyint(1) NOT NULL,
  `outrosLocaisTrabalho` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outrasInformacoes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acompanhamentos`
--
ALTER TABLE `acompanhamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_funcionario` (`id_funcionario`,`id_agendamentos`,`id_funcionario_acompanhante`),
  ADD KEY `id_funcionario_acompanhante` (`id_funcionario_acompanhante`),
  ADD KEY `id_agendamentos` (`id_agendamentos`);

--
-- Índices para tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_funcionario` (`id_funcionario`,`id_funcionario_acompanhante`),
  ADD KEY `id_funcionario_acompanhante` (`id_funcionario_acompanhante`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `triagens`
--
ALTER TABLE `triagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_funcionario` (`id_funcionario`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acompanhamentos`
--
ALTER TABLE `acompanhamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `triagens`
--
ALTER TABLE `triagens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `acompanhamentos`
--
ALTER TABLE `acompanhamentos`
  ADD CONSTRAINT `acompanhamentos_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionarios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acompanhamentos_ibfk_2` FOREIGN KEY (`id_funcionario_acompanhante`) REFERENCES `funcionarios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acompanhamentos_ibfk_3` FOREIGN KEY (`id_agendamentos`) REFERENCES `agendamentos` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agendamentos_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionarios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `agendamentos_ibfk_2` FOREIGN KEY (`id_funcionario_acompanhante`) REFERENCES `funcionarios` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `triagens`
--
ALTER TABLE `triagens`
  ADD CONSTRAINT `triagens_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionarios` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
