-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 08/10/2018 às 23:32
-- Versão do servidor: 5.7.22-0ubuntu0.16.04.1
-- Versão do PHP: 7.1.22-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `revict`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `relatorio`
--

CREATE TABLE `relatorio` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instituicao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_instituicao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `divida` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `relatorio`
--

INSERT INTO `relatorio` (`id`, `nome`, `cpf`, `email`, `telefone`, `endereco`, `instituicao`, `tel_instituicao`, `divida`, `valor`, `data_cadastro`) VALUES
(1, 'Jose Roberto Lira', '224.096.218-64', 'joserobertolira@gmail.com', '1127387076', 'Rua Mogi Mirim, 20', 'Banco ItaÃº', '11-3255-4315', 'Lorem ipsum nullam fringilla semper nam aptent senectus porttitor metus inceptos vel', '3.500.00', '2018-10-05'),
(2, 'Manuella Fachola Lira', '226.437.280-63', 'manuella@gmail.com', '1127387076', 'Rua Mogi Mirim, 20, Altos', 'Banco Panamericano', '11-3255-4315', 'Lorem ipsum nullam fringilla semper nam aptent senectus porttitor metus inceptos vel', '7.900.00', '2018-10-05'),
(3, 'Guilherme Fachola Lira', '111.111.111-11', 'guilherme@digplay.com.br', '11996426210', 'Street Mogi Mirim,20, House', 'Banco do Brasil', '1127387076', 'Lorem ipsum nullam fringilla semper nam aptent senectus porttitor metus inceptos vel,', '19.720,00', '2018-10-05'),
(4, 'Giovanna Fachola Lira', '224.562.512-77', 'gigcag2@gmail.com', '11989797878', 'Rua Mogi Mirim,20, casa', 'Banco Bradesco', '11-3255-4315', 'Lorem ipsum nullam fringilla semper nam aptent senectus porttitor metus inceptos vel', '11972.20', '2018-10-05'),
(5, 'Fabiana Fachola Lira', '226.437.280-63', 'fabianafacholalira@gmail.com', '1127387076', 'Rua Mogi Mirim,20, Altos', 'Banco ItaÃº', '11-3255-4315', 'Lorem ipsum nullam fringilla semper nam aptent senectus porttitor metus inceptos vel', '19.720.00', '2018-10-05');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `relatorio`
--
ALTER TABLE `relatorio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `relatorio`
--
ALTER TABLE `relatorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
