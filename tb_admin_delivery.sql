-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Nov-2021 às 01:26
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.delivery`
--

CREATE TABLE `tb_admin.delivery` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `ingredientes` varchar(255) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `tempo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.delivery`
--

INSERT INTO `tb_admin.delivery` (`id`, `nome`, `preco`, `ingredientes`, `peso`, `descricao`, `imagem`, `tempo`) VALUES
(1, 'Barco de Sushi', '29,50', 'arroz, sal, tomate, sushi', '1kg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.\r\n', 'https://www.shizencuritiba.com.br/wp-content/uploads/2021/05/Combinado-Shizen-Comida-Japonesa-em-Curitiba.png', '15-20 min'),
(2, 'Sushi Temaki', '14,95', 'couve, salmao, manjericão, chia', '350g', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'', 'https://static.wixstatic.com/media/26d38e_148627816e794188817335aa913afd99~mv2.png/v1/crop/x_86,y_0,w_777,h_574/fill/w_558,h_412,al_c,q_85,usm_0.66_1.00_0.01/temaki-sem-arroz.webp', '30-50min');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin.delivery`
--
ALTER TABLE `tb_admin.delivery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin.delivery`
--
ALTER TABLE `tb_admin.delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
