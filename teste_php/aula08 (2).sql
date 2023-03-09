-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Mar-2023 às 01:41
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula08`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_acessoadm`
--

CREATE TABLE `tbl_acessoadm` (
  `id` int(11) NOT NULL,
  `usuario_adm` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `senha_adm` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL,
  `id_adm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_acessoadm`
--

INSERT INTO `tbl_acessoadm` (`id`, `usuario_adm`, `senha_adm`, `id_situacao`, `id_adm`) VALUES
(1, 'teste_adm@teste.com', '1234', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_acessos`
--

CREATE TABLE `tbl_acessos` (
  `id` int(11) NOT NULL,
  `hash_usuario` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `usuario` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `senha` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL,
  `hash` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_acessos`
--

INSERT INTO `tbl_acessos` (`id`, `hash_usuario`, `usuario`, `senha`, `id_situacao`, `hash`) VALUES
(1, '15', 'pedrooekrroere', '$2b$06$4eb968f7379c3caa2aacaO.gKDUwnV4lsFdFA6N/ieMJ1OHd9Dp2i', 1, NULL),
(2, '16', '21212121@hotmail.com', '$2b$06$a13d58c10091e164ce749u4hpDDI9yF8j9rlJg4m2I2GXg4Igg5Iq', 1, NULL),
(3, '1', 'teste_cadastro@teste.com', '$2b$06$fd89539db6720bab6c893uXrM3XE/aNFa/fJ2C.olx5DusvIDwcKa', 1, NULL),
(4, '1', 'teste_1cadastro@teste.com', '$2b$06$83d23a27662e308cf5468OSswjjdhQKcy.NORihpiEJ/Y.5NRA4ia', 1, NULL),
(5, '7e93b6d698162cd14240c020dc153ba4f3fcb71a', 'teste_cadastro255@teste.com', '$2b$06$757a3c1b6dc07cefec82duKcuF/OMFnQT/BqD.xKk37ww9wORfNFi', 1, NULL),
(6, '7e93b6d698162cd14240c020dc153ba4f3fcb71a', 'teste_cadastro0202@teste.com', '$2b$06$dfa6b84c2d5dc0180eeeeehIGUmyoPAjnbL6dXJwnUZMCPyZ0gjA.', 1, NULL),
(7, '91f95f0f742c057ed8c22ec514cf5b1ae812f807', 'pedroteste@teste.com', '$2b$06$a575d49387951515fdc1euF12wbt74gTCRkUVa7c42Ao9XhLNqJFu', 1, NULL),
(8, '2', 'marcelinhofumaça@teste.com', '$2b$06$eb23749b882e2844bd7ffONV/SYhpxZKZQscxcZ2K2O6am9V4zhtu', 1, NULL),
(9, '3', 'diego@teste.com', '$2b$06$9cbe89e2ad5ae96b1a7e0utfFHjZJmzU/5vT7n66YsGI4iknN7Hn.', 1, NULL),
(10, '4', 'gabriel@teste.com', '$2b$06$c61314933ae8a00ea31e3uW89MAuhFUeaMws62d8iWA5OolUqJrTW', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `slug` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `visibilidade` char(1) COLLATE utf8mb4_bin NOT NULL,
  `id_situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`id`, `nome`, `img`, `slug`, `visibilidade`, `id_situacao`) VALUES
(2, 'Açougue', '', '', '', 1),
(7, 'Bebida', '', '1', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `sobrenome` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `newsletter` char(1) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) NOT NULL,
  `hash` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `renda` double NOT NULL,
  `profssao` varchar(45) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`id_cliente`, `nome`, `sobrenome`, `data_nasc`, `id_genero`, `newsletter`, `id_situacao`, `hash`, `renda`, `profssao`) VALUES
(1, 'Pedro', 'Henrique', '0001-12-18', 13, '1', 1, '9d8944d1891687aa4745abd13cf11b0d260059ae', 1500.99, 'ADMIN'),
(2, 'Marcelinho', 'Fumaça', '2006-10-15', 13, '1', 1, 'e2e3b8238ea0551911c1a35dae4f55992d5fbfe6', 1500, 'DEV'),
(3, 'Diego', 'teste', '1980-12-18', 13, '1', 1, '59cb98aeff203d40d296f056d4db1281c10468b1', 2000, 'DEV'),
(4, 'Gabriel', 'teste', '2000-12-18', 13, '1', 1, '2533aecb8a4f356a82da1a2e502724658176576d', 150000, 'ESTAGIO'),
(16, 'Dsdsds', 'henrique', '2000-12-18', 13, '1', 1, '91f95f0f742c057ed8c22ec514cf5b1ae812f807', 150000, 'ADMIN'),
(17, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 'ESTAGIO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_contatos`
--

CREATE TABLE `tbl_contatos` (
  `id` int(11) NOT NULL,
  `hash_usuario` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_contatos`
--

INSERT INTO `tbl_contatos` (`id`, `hash_usuario`, `numero`, `id_situacao`) VALUES
(1, '1', 1118181881, NULL),
(2, '1', 1118181881, NULL),
(3, '7e93b6d698162cd14240c020dc153ba4f3fcb71a', 0, NULL),
(4, '7e93b6d698162cd14240c020dc153ba4f3fcb71a', 0, NULL),
(5, '91f95f0f742c057ed8c22ec514cf5b1ae812f807', 0, NULL),
(6, '2', 1818181, NULL),
(7, '3', 25156, NULL),
(8, '4', 185188, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_contatos_emails`
--

CREATE TABLE `tbl_contatos_emails` (
  `id` int(11) NOT NULL,
  `hash_usuario` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_contatos_emails`
--

INSERT INTO `tbl_contatos_emails` (`id`, `hash_usuario`, `email`, `id_situacao`) VALUES
(1, '1', 'teste_cadastro@teste.com', NULL),
(2, '1', 'teste_1cadastro@teste.com', NULL),
(3, '7e93b6d698162cd14240c020dc153ba4f3fcb71a', 'teste_cadastro255@teste.com', NULL),
(4, '7e93b6d698162cd14240c020dc153ba4f3fcb71a', 'teste_cadastro0202@teste.com', NULL),
(5, '91f95f0f742c057ed8c22ec514cf5b1ae812f807', 'pedroteste@teste.com', NULL),
(6, '2', 'marcelinhofumaça@teste.com', NULL),
(7, '3', 'diego@teste.com', NULL),
(8, '4', 'gabriel@teste.com', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_docs`
--

CREATE TABLE `tbl_docs` (
  `id` int(11) NOT NULL,
  `hash_usuario` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_tipo_documento` int(11) DEFAULT NULL,
  `documento` char(14) COLLATE utf8mb4_bin DEFAULT NULL,
  `id_situacao` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_docs`
--

INSERT INTO `tbl_docs` (`id`, `hash_usuario`, `id_tipo_documento`, `documento`, `id_situacao`) VALUES
(1, '0', 1, '2121212121', 1),
(2, '0', 2, '00000000000000', 1),
(3, '15', 1, '2121212121', 1),
(4, '15', 2, '00000000000000', 1),
(5, '15', 1, '2121212121', 1),
(6, '15', 2, '00000000000000', 1),
(7, '15', 1, '2121212121', 1),
(8, '15', 2, '00000000000000', 1),
(9, '16', 1, '2121212121', 1),
(10, '16', 2, '21212121212121', 1),
(11, '1', 1, '2121212121', 1),
(12, '1', 2, '21212121212121', 1),
(13, '1', 1, '2121212121', 1),
(14, '1', 2, 'dsds', 1),
(15, '7e93b6d698162cd14240c020dc153ba4f3fcb71a', 3, '1151511', 1),
(16, '7e93b6d698162cd14240c020dc153ba4f3fcb71a', 3, 'dsds', 1),
(17, '91f95f0f742c057ed8c22ec514cf5b1ae812f807', 3, '123456789', 1),
(18, '2', 1, '2121212121', 1),
(19, '2', 2, '21212121212121', 1),
(20, '3', 1, '2121212121', 1),
(21, '3', 2, 'dsds', 1),
(22, '4', 1, '2121212121', 1),
(23, '4', 2, '21212121212121', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_genero`
--

CREATE TABLE `tbl_genero` (
  `id` int(11) NOT NULL,
  `genero` varchar(30) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_genero`
--

INSERT INTO `tbl_genero` (`id`, `genero`) VALUES
(3, 'Feminino'),
(13, 'Masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_parceiros`
--

CREATE TABLE `tbl_parceiros` (
  `id` int(11) NOT NULL,
  `razao_social` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `nome_fantasia` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `ie` int(11) DEFAULT NULL,
  `im` int(11) DEFAULT NULL,
  `id_situacao` int(11) DEFAULT NULL,
  `hash` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_parceiros`
--

INSERT INTO `tbl_parceiros` (`id`, `razao_social`, `nome_fantasia`, `ie`, `im`, `id_situacao`, `hash`) VALUES
(1, 'Fazer Fumaça', 'Marcelinho Tabaco', 1234, 1234, 1, 'd28d470ff03d42be3df7b06338f3dfdc65e98bfe'),
(2, '', '', 0, 0, 1, '5b7b04a7f49affad79e5ea3204a92d7825faf211'),
(3, 'Teste', 'Teste Teste', 0, 0, 1, 'c67bd896c65447d5a597e1b580a08e6410077f1a'),
(4, 'teste tes', 'Pedro Teste', 0, 0, 1, 'e7a3f624b88e04a4f1f942fbf2d603caffe0482d'),
(5, 'dsds', 'Marcelinho tabaco', 0, 0, 1, '73f5d964b8f8cfa2faac84b38fc8a84df74feb2a'),
(6, 'dsds', 'Marcelinho tabaco', 0, 0, 1, '73f5d964b8f8cfa2faac84b38fc8a84df74feb2a'),
(7, 'dsds12', 'Pedro Teste 14 ', 1214, 1234, 1, '950f5bbb886f3c9fab2108c34c607fed651ec33e'),
(8, 'Fazer Fumaça', 'Pedro Teste 144', 1234, 1234, 1, '1fe583ca44d1714806143406e649f1649047ba69'),
(9, 'Fazer fumaça', 'Marcelinho tabaco02', 1234, 1234, 1, '94cd3ca2b9f1ba3000fb81263ff8b03a399e3bcd'),
(10, 'Fazer fumaça02', 'Marcelinho Tabaco03', 123402, 123420, 1, '3ae2a64c4e8ebfdbfe5be3e3fefb15783cd36d4e'),
(11, 'Fazer Fumaça05', 'Marcelinho Tabaco05', 12304, 514, 1, '056165a6558c31b29efd17e35f38bd6eaa82443a'),
(12, '', '', 0, 0, 1, '5b7b04a7f49affad79e5ea3204a92d7825faf211'),
(13, 'Fazer Fumaça06', 'Marcelinho Tabaco08', 1234, 1234, 1, '236bf7086a4d158cc37df663f79adbc4ceeea3f7'),
(14, 'Fazer Fumaça03', 'Marcelinho Tabaco09', 15451, 1544, 1, '7e93b6d698162cd14240c020dc153ba4f3fcb71a'),
(15, 'vender', 'Pedro Vendas', 12345, 12345, 1, '91f95f0f742c057ed8c22ec514cf5b1ae812f807'),
(16, 'pedro', 'henrique', 1234, 12345, 1, '91f95f0f742c057ed8c22ec514cf5b1ae812f807');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_situacao`
--

CREATE TABLE `tbl_situacao` (
  `id` int(11) NOT NULL,
  `situacao` varchar(20) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_situacao`
--

INSERT INTO `tbl_situacao` (`id`, `situacao`) VALUES
(7, 'Ativo'),
(8, 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipo_docs`
--

CREATE TABLE `tbl_tipo_docs` (
  `id` int(11) NOT NULL,
  `tipo_doc` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `tbl_tipo_docs`
--

INSERT INTO `tbl_tipo_docs` (`id`, `tipo_doc`) VALUES
(1, ''),
(2, ''),
(3, 'rg'),
(4, ''),
(5, ''),
(6, ''),
(7, 'RG1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_acessoadm`
--
ALTER TABLE `tbl_acessoadm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_acessos`
--
ALTER TABLE `tbl_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `tbl_contatos`
--
ALTER TABLE `tbl_contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_contatos_emails`
--
ALTER TABLE `tbl_contatos_emails`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_docs`
--
ALTER TABLE `tbl_docs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_genero`
--
ALTER TABLE `tbl_genero`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_parceiros`
--
ALTER TABLE `tbl_parceiros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_situacao`
--
ALTER TABLE `tbl_situacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_tipo_docs`
--
ALTER TABLE `tbl_tipo_docs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_acessoadm`
--
ALTER TABLE `tbl_acessoadm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbl_acessos`
--
ALTER TABLE `tbl_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tbl_contatos`
--
ALTER TABLE `tbl_contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbl_contatos_emails`
--
ALTER TABLE `tbl_contatos_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbl_docs`
--
ALTER TABLE `tbl_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `tbl_genero`
--
ALTER TABLE `tbl_genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbl_parceiros`
--
ALTER TABLE `tbl_parceiros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbl_situacao`
--
ALTER TABLE `tbl_situacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbl_tipo_docs`
--
ALTER TABLE `tbl_tipo_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
