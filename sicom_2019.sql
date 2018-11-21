-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2018 às 20:59
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sicom_2019`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `id_os` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `assets`
--

CREATE TABLE `assets` (
  `id` int(10) UNSIGNED NOT NULL,
  `nserieId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_modelo` int(10) UNSIGNED NOT NULL,
  `compradoEm` time NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `asset_contratos`
--

CREATE TABLE `asset_contratos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_asset` int(10) UNSIGNED NOT NULL,
  `id_contrato` int(10) UNSIGNED NOT NULL,
  `inicio` time NOT NULL,
  `fim` time NOT NULL,
  `statusEntrega` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_os` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `inicio` time NOT NULL,
  `fim` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `auditorias`
--

CREATE TABLE `auditorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `log` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_contrato` int(10) UNSIGNED NOT NULL,
  `id_os` int(10) UNSIGNED NOT NULL,
  `id_sa` int(10) UNSIGNED NOT NULL,
  `id_estoque` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `Cliente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SegCod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Endereco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bairro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InsEst` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCliente` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contratos`
--

CREATE TABLE `contratos` (
  `id` int(10) UNSIGNED NOT NULL,
  `inicio` time NOT NULL,
  `fim` time NOT NULL,
  `anotacoes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nContrato` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCliente` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregas`
--

CREATE TABLE `entregas` (
  `id` int(10) UNSIGNED NOT NULL,
  `data` time NOT NULL,
  `id_contato` int(10) UNSIGNED NOT NULL,
  `id_asset_contrato` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoques`
--

CREATE TABLE `estoques` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigoNCM` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigoFornecedor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigoSAP` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ativo` int(11) NOT NULL,
  `valor` double(8,2) NOT NULL,
  `vitoria_estoqueInterno` double(8,3) NOT NULL,
  `vitoria_estoque` double(8,3) NOT NULL,
  `vitoria_minimo` double(8,3) NOT NULL,
  `vitoria_ideal` double(8,3) NOT NULL,
  `SamarcoUbuEstoqueInterno` double(8,3) NOT NULL,
  `SamarcoUbuEstoque` double(8,3) NOT NULL,
  `SamarcoUbuMinimo` double(8,3) NOT NULL,
  `SamarcoUbuIdeal` double(8,3) NOT NULL,
  `SamarcoGermanoEstoqueInterno` double(8,3) NOT NULL,
  `SamarcoGermanoEstoque` double(8,3) NOT NULL,
  `SamarcoGermanoMinimo` double(8,3) NOT NULL,
  `SamarcoGermanoIdeal` double(8,3) NOT NULL,
  `fibriaAracruzEstoqueInterno` double(8,3) NOT NULL,
  `fibriaAracruzEstoque` double(8,3) NOT NULL,
  `fibriaAracruzMinimo` double(8,3) NOT NULL,
  `fibriaAracruzIdeal` double(8,3) NOT NULL,
  `fibriaPostoDaMataEstoqueInterno` double(8,3) NOT NULL,
  `fibriaPostoDaMataEstoque` double(8,3) NOT NULL,
  `fibriaPostoDaMataMinimo` double(8,3) NOT NULL,
  `fibriaPostoDaMataIdeal` double(8,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_tec_os`
--

CREATE TABLE `grupo_tec_os` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_os` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `material_os`
--

CREATE TABLE `material_os` (
  `id` int(10) UNSIGNED NOT NULL,
  `valor` double(8,2) NOT NULL,
  `quant` double(8,3) NOT NULL,
  `faturado` double(8,3) NOT NULL,
  `id_os` int(10) UNSIGNED NOT NULL,
  `id_item` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_21_144223_create_modelos_table', 1),
(4, '2018_10_22_201835_create_estoques_table', 1),
(5, '2018_10_22_202356_create_clientes_table', 1),
(6, '2018_10_22_202447_create_assets_table', 1),
(7, '2018_10_22_202709_create_contatos_table', 1),
(8, '2018_10_22_203342_create_propostas_table', 1),
(9, '2018_10_22_203942_create_s_as_table', 1),
(10, '2018_10_22_204124_create_s_a_materials_table', 1),
(11, '2018_10_29_190819_create_contratos_table', 1),
(12, '2018_10_29_190956_create_asset_contratos_table', 1),
(13, '2018_10_30_201743_create_o_s_table', 1),
(14, '2018_10_30_203405_create_atividades_table', 1),
(15, '2018_10_30_203640_create_work_logs_table', 1),
(16, '2018_10_30_203726_create_material_o_s_table', 1),
(17, '2018_10_30_203832_create_grupo_tec_o_s_table', 1),
(18, '2018_10_30_203930_create_entregas_table', 1),
(19, '2018_10_31_175315_create_arquivos_table', 1),
(20, '2018_10_31_194905_create_auditorias_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelos`
--

CREATE TABLE `modelos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nseriePadrao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `os`
--

CREATE TABLE `os` (
  `id` int(10) UNSIGNED NOT NULL,
  `prioridade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `centroCusto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chamadoEXT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivoStatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_nserieId` int(10) UNSIGNED NOT NULL,
  `id_contrato` int(10) UNSIGNED NOT NULL,
  `id_contato` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `propostas`
--

CREATE TABLE `propostas` (
  `id` int(10) UNSIGNED NOT NULL,
  `data` time NOT NULL,
  `natureza` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `analiseCritica` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nProposta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double(8,2) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCliente` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sas`
--

CREATE TABLE `sas` (
  `id` int(10) UNSIGNED NOT NULL,
  `data` time NOT NULL,
  `nSA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sa_materiais`
--

CREATE TABLE `sa_materiais` (
  `id` int(10) UNSIGNED NOT NULL,
  `prazo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant` double(8,3) NOT NULL,
  `quant_entregue` double(8,3) NOT NULL,
  `aplicacao` int(10) UNSIGNED NOT NULL,
  `aprovado` int(10) UNSIGNED NOT NULL,
  `fechamento` int(10) UNSIGNED NOT NULL,
  `id_item` int(10) UNSIGNED NOT NULL,
  `id_sa` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissao` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `cargo`, `area`, `email`, `remember_token`, `permissao`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Paulo Wagner Cardoso Gama Vasconcelos', 'paulow', 'Estagiario', 'Técnica', 'paulowvasconcelos@gmail.com', NULL, 21848, '$2y$10$KNOqitEmfPMcRORzV3a5KuG2u.I0zgtP93526DCoN1aK3mCBYf9yO', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `work_logs`
--

CREATE TABLE `work_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_os` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `log` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arquivos_id_os_foreign` (`id_os`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assets_id_modelo_foreign` (`id_modelo`);

--
-- Indexes for table `asset_contratos`
--
ALTER TABLE `asset_contratos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_contratos_id_asset_foreign` (`id_asset`),
  ADD KEY `asset_contratos_id_contrato_foreign` (`id_contrato`);

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `atividades_id_os_foreign` (`id_os`),
  ADD KEY `atividades_id_user_foreign` (`id_user`);

--
-- Indexes for table `auditorias`
--
ALTER TABLE `auditorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auditorias_id_contrato_foreign` (`id_contrato`),
  ADD KEY `auditorias_id_os_foreign` (`id_os`),
  ADD KEY `auditorias_id_sa_foreign` (`id_sa`),
  ADD KEY `auditorias_id_estoque_foreign` (`id_estoque`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contatos_idcliente_foreign` (`idCliente`);

--
-- Indexes for table `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contratos_idcliente_foreign` (`idCliente`);

--
-- Indexes for table `entregas`
--
ALTER TABLE `entregas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entregas_id_contato_foreign` (`id_contato`),
  ADD KEY `entregas_id_asset_contrato_foreign` (`id_asset_contrato`);

--
-- Indexes for table `estoques`
--
ALTER TABLE `estoques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grupo_tec_os`
--
ALTER TABLE `grupo_tec_os`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupo_tec_os_id_os_foreign` (`id_os`),
  ADD KEY `grupo_tec_os_id_user_foreign` (`id_user`);

--
-- Indexes for table `material_os`
--
ALTER TABLE `material_os`
  ADD PRIMARY KEY (`id`),
  ADD KEY `material_os_id_os_foreign` (`id_os`),
  ADD KEY `material_os_id_item_foreign` (`id_item`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`id`),
  ADD KEY `os_id_nserieid_foreign` (`id_nserieId`),
  ADD KEY `os_id_contrato_foreign` (`id_contrato`),
  ADD KEY `os_id_contato_foreign` (`id_contato`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `propostas`
--
ALTER TABLE `propostas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propostas_idcliente_foreign` (`idCliente`);

--
-- Indexes for table `sas`
--
ALTER TABLE `sas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sas_id_user_foreign` (`id_user`);

--
-- Indexes for table `sa_materiais`
--
ALTER TABLE `sa_materiais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sa_materiais_id_item_foreign` (`id_item`),
  ADD KEY `sa_materiais_id_sa_foreign` (`id_sa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work_logs`
--
ALTER TABLE `work_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_logs_id_os_foreign` (`id_os`),
  ADD KEY `work_logs_id_user_foreign` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asset_contratos`
--
ALTER TABLE `asset_contratos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auditorias`
--
ALTER TABLE `auditorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entregas`
--
ALTER TABLE `entregas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estoques`
--
ALTER TABLE `estoques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grupo_tec_os`
--
ALTER TABLE `grupo_tec_os`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `material_os`
--
ALTER TABLE `material_os`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `os`
--
ALTER TABLE `os`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propostas`
--
ALTER TABLE `propostas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sas`
--
ALTER TABLE `sas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sa_materiais`
--
ALTER TABLE `sa_materiais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_logs`
--
ALTER TABLE `work_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD CONSTRAINT `arquivos_id_os_foreign` FOREIGN KEY (`id_os`) REFERENCES `os` (`id`);

--
-- Limitadores para a tabela `assets`
--
ALTER TABLE `assets`
  ADD CONSTRAINT `assets_id_modelo_foreign` FOREIGN KEY (`id_modelo`) REFERENCES `modelos` (`id`);

--
-- Limitadores para a tabela `asset_contratos`
--
ALTER TABLE `asset_contratos`
  ADD CONSTRAINT `asset_contratos_id_asset_foreign` FOREIGN KEY (`id_asset`) REFERENCES `assets` (`id`),
  ADD CONSTRAINT `asset_contratos_id_contrato_foreign` FOREIGN KEY (`id_contrato`) REFERENCES `contratos` (`id`);

--
-- Limitadores para a tabela `atividades`
--
ALTER TABLE `atividades`
  ADD CONSTRAINT `atividades_id_os_foreign` FOREIGN KEY (`id_os`) REFERENCES `os` (`id`),
  ADD CONSTRAINT `atividades_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `auditorias`
--
ALTER TABLE `auditorias`
  ADD CONSTRAINT `auditorias_id_contrato_foreign` FOREIGN KEY (`id_contrato`) REFERENCES `contratos` (`id`),
  ADD CONSTRAINT `auditorias_id_estoque_foreign` FOREIGN KEY (`id_estoque`) REFERENCES `estoques` (`id`),
  ADD CONSTRAINT `auditorias_id_os_foreign` FOREIGN KEY (`id_os`) REFERENCES `os` (`id`),
  ADD CONSTRAINT `auditorias_id_sa_foreign` FOREIGN KEY (`id_sa`) REFERENCES `sas` (`id`);

--
-- Limitadores para a tabela `contatos`
--
ALTER TABLE `contatos`
  ADD CONSTRAINT `contatos_idcliente_foreign` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`);

--
-- Limitadores para a tabela `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `contratos_idcliente_foreign` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`);

--
-- Limitadores para a tabela `entregas`
--
ALTER TABLE `entregas`
  ADD CONSTRAINT `entregas_id_asset_contrato_foreign` FOREIGN KEY (`id_asset_contrato`) REFERENCES `asset_contratos` (`id`),
  ADD CONSTRAINT `entregas_id_contato_foreign` FOREIGN KEY (`id_contato`) REFERENCES `contatos` (`id`);

--
-- Limitadores para a tabela `grupo_tec_os`
--
ALTER TABLE `grupo_tec_os`
  ADD CONSTRAINT `grupo_tec_os_id_os_foreign` FOREIGN KEY (`id_os`) REFERENCES `os` (`id`),
  ADD CONSTRAINT `grupo_tec_os_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `material_os`
--
ALTER TABLE `material_os`
  ADD CONSTRAINT `material_os_id_item_foreign` FOREIGN KEY (`id_item`) REFERENCES `estoques` (`id`),
  ADD CONSTRAINT `material_os_id_os_foreign` FOREIGN KEY (`id_os`) REFERENCES `os` (`id`);

--
-- Limitadores para a tabela `os`
--
ALTER TABLE `os`
  ADD CONSTRAINT `os_id_contato_foreign` FOREIGN KEY (`id_contato`) REFERENCES `contatos` (`id`),
  ADD CONSTRAINT `os_id_contrato_foreign` FOREIGN KEY (`id_contrato`) REFERENCES `contratos` (`id`),
  ADD CONSTRAINT `os_id_nserieid_foreign` FOREIGN KEY (`id_nserieId`) REFERENCES `assets` (`id`);

--
-- Limitadores para a tabela `propostas`
--
ALTER TABLE `propostas`
  ADD CONSTRAINT `propostas_idcliente_foreign` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`);

--
-- Limitadores para a tabela `sas`
--
ALTER TABLE `sas`
  ADD CONSTRAINT `sas_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `sa_materiais`
--
ALTER TABLE `sa_materiais`
  ADD CONSTRAINT `sa_materiais_id_item_foreign` FOREIGN KEY (`id_item`) REFERENCES `estoques` (`id`),
  ADD CONSTRAINT `sa_materiais_id_sa_foreign` FOREIGN KEY (`id_sa`) REFERENCES `sas` (`id`);

--
-- Limitadores para a tabela `work_logs`
--
ALTER TABLE `work_logs`
  ADD CONSTRAINT `work_logs_id_os_foreign` FOREIGN KEY (`id_os`) REFERENCES `os` (`id`),
  ADD CONSTRAINT `work_logs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
