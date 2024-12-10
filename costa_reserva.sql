-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10/12/2024 às 14:32
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `costa_reserva`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade`
--

DROP TABLE IF EXISTS `cidade`;
CREATE TABLE IF NOT EXISTS `cidade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `maps_url` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `cidade`
--

INSERT INTO `cidade` (`id`, `nome`, `estado`, `image_url`, `maps_url`) VALUES
(1, 'Ubatuba', 'São Paulo', 'https://imgur.com/OPHlu4o.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58570.43119827367!2d-45.12631158934178!3d-23.43693679448326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cd5228bab1966d%3A0x9905169ef1825576!2sUbatuba%2C%20SP!5e0!3m2!1spt-BR!2sbr!4v1732301524854!5m2!1spt-BR!2sbr'),
(5, 'Fernando de Noronha', 'Pernanbuco', 'https://imgur.com/qYMBKjZ.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63693.41798861448!2d-32.468091365942286!3d-3.8447966589830895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x635de3fd6310b57%3A0xe1a76e103787589!2sFernando%20de%20Noronha!5e0!3m2!1spt-BR!2sbr!4v1732302182910!5m2!1spt-BR!2sbr'),
(6, 'Gramado', 'Rio Grande do Sul', 'https://imgur.com/b4mBp9c.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55626.84590646078!2d-50.90766784539061!3d-29.37971986761883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951932427804321f%3A0xa71c25f081e5aea6!2sGramado%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1732302499863!5m2!1spt-BR!2sbr'),
(11, 'Campos do Jordão', 'São Paulo', 'https://imgur.com/zvn7Tjh.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29438.973860474853!2d-45.606730080851676!3d-22.73300843015498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc89cbf10d10bf%3A0x42ed1a032c8ae78f!2sCampos%20do%20Jord%C3%A3o%2C%20SP%2C%2012460-000!5e0!3m2!1spt-BR!2sbr!4v1732304556449!5m2!1spt-BR!2sbr'),
(8, 'Curitiba', 'Paraná', 'https://imgur.com/vnlSm5x.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230483.22873983468!2d-49.454606714283905!3d-25.495024508545306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce35351cdb3dd%3A0x6d2f6ba5bacbe809!2sCuritiba%2C%20PR!5e0!3m2!1spt-BR!2sbr!4v1732304170181!5m2!1spt-BR!2sbr'),
(9, 'Natal', 'Rio Grande do Norte', 'https://imgur.com/qdQMUyL.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127020.22866887983!2d-35.30460815579632!3d-5.801581791100385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b3aaac26460531%3A0x5d8b404cf00fed69!2sNatal%2C%20RN!5e0!3m2!1spt-BR!2sbr!4v1732304352747!5m2!1spt-BR!2sbr'),
(12, 'Búzios', 'Rio de Janeiro', 'https://imgur.com/Ey3pDb3.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29432.823792448897!2d-41.9389634808062!3d-22.761559478861493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96555567e32337%3A0x40218e7a6ff28786!2zQXJtYcOnw6NvIGRvcyBCw7p6aW9zLCBCw7p6aW9zIC0gUko!5e0!3m2!1spt-BR!2sbr!4v1732304973600!5m2!1spt-BR!2sbr'),
(13, 'Trancoso', 'Bahia', 'https://imgur.com/KCe3dSB.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15294.544556790453!2d-39.11992318860514!3d-16.594812996613264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7369c75945eb6e1%3A0x6f151cc44b9306f5!2sTrancoso%2C%20Porto%20Seguro%20-%20BA!5e0!3m2!1spt-BR!2sbr!4v1732305035980!5m2!1spt-BR!2sbr');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comodidade`
--

DROP TABLE IF EXISTS `comodidade`;
CREATE TABLE IF NOT EXISTS `comodidade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `icone` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipagem`
--

DROP TABLE IF EXISTS `equipagem`;
CREATE TABLE IF NOT EXISTS `equipagem` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `icone` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `image2_url` varchar(500) DEFAULT NULL,
  `image3_url` varchar(500) DEFAULT NULL,
  `id_cidade` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cidade` (`id_cidade`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `hotel`
--

INSERT INTO `hotel` (`id`, `nome`, `image_url`, `image2_url`, `image3_url`, `id_cidade`) VALUES
(3, 'Eco Hotel ', 'https://imgur.com/7yjpKQ5.jpg', 'https://imgur.com/z1VB2tp.jpg', 'https://imgur.com/fzNRkmL.jpg', 1),
(4, 'Praia Hotel', 'https://imgur.com/BL7zu9h.jpg', 'https://imgur.com/iBDCXqy.jpg', 'https://imgur.com/LgosNDj.jpg', 1),
(5, 'Villa Sapê Pousada', 'https://imgur.com/oFfLBkb.jpg', 'https://imgur.com/soRzngT.jpg', 'https://imgur.com/uXqlgL2.jpg', 1),
(6, 'Pousada Maravilha', 'https://imgur.com/9oIkTjP.jpg', 'https://imgur.com/gqdrujf.jpg', 'https://imgur.com/4DGq6GX.jpg', 5),
(7, 'Dolphin Hotel', 'https://imgur.com/oC42i6O.jpg', 'https://imgur.com/vhI0KPk.jpg', 'https://imgur.com/TohGTzw.jpg', 5),
(8, 'Pousada Do Vale', 'https://imgur.com/JhT1N38.jpg', 'https://imgur.com/vy0DXsX.jpg', 'https://imgur.com/jYHypWU.jpg', 5),
(9, 'Hotel Valle D’incanto', 'https://imgur.com/90o5mvG.jpg', 'https://imgur.com/H3oyES2.jpg', 'https://imgur.com/lk0rgAC.jpg', 6),
(10, 'Pestana Curitiba', 'https://imgur.com/Xk3DfJ6.jpg', 'https://imgur.com/9ZPEuGB.jpg', 'https://imgur.com/q0U84vp.jpg', 8),
(11, 'Manary Praia', 'https://imgur.com/DU4QYbR.jpg', 'https://imgur.com/5dK1rJm.jpg', 'https://imgur.com/mzKbW87.jpg', 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `hotel_comodidade`
--

DROP TABLE IF EXISTS `hotel_comodidade`;
CREATE TABLE IF NOT EXISTS `hotel_comodidade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_hotel` int NOT NULL,
  `id_comodidade` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hotel` (`id_hotel`),
  KEY `id_comodidade` (`id_comodidade`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ponto_turistico`
--

DROP TABLE IF EXISTS `ponto_turistico`;
CREATE TABLE IF NOT EXISTS `ponto_turistico` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `id_cidade` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cidade` (`id_cidade`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `ponto_turistico`
--

INSERT INTO `ponto_turistico` (`id`, `nome`, `descricao`, `image_url`, `id_cidade`) VALUES
(1, 'Praia do Félix', 'A Praia do Felix se destaca por ser perfeita para família com crianças, mar calmo e várias árvores com sombra, inclusive um rio de água doce ao final do lado direito, vale a pena visitar!!!', 'https://imgur.com/cIU4xDu.jpg', 1),
(3, 'Praia Itamambuca', 'A praia é linda, ficarão apaixonados pelo rio na lateral, perfeito pra desfrutar de um banho gostoso de água doce. Ideal para crianças, aulas de surf e para descansar!', 'https://imgur.com/pfNzxKQ.jpg', 1),
(4, 'Baía do Sancho', 'A praia mais bonita do mundo, com uma natureza única a envolver a praia e com um mar de águas calmas, quentes e transparente para ver a natureza aquática. Nota máxima!', 'https://imgur.com/sYV06gI.jpg', 5),
(5, 'Fortaleza Nossa Senhora dos Remédios', 'Experiência rica em visual e divertida no fim da tarde, regado a um lindo pôr do sol, boa comida e música ao vivo com um bom samba. \r\n', 'https://imgur.com/NT7phHM.jpg', 5),
(6, 'Parque Nacional Marinho de Fernando de Noronha', 'Lugar maravilhoso que conecta o homem ao oceano e as belezas do Atlântico, sua biodiversidade marinha e aves. Maravilhosas ilhas secundárias,  muita geologia e histórias de tirar o fôlego!', 'https://imgur.com/IcQDyAZ.jpg', 5),
(7, 'Le Jardin Parque de Lavanda', 'Lugar sensacional, muito agradável e com Bistro que merece a visita! Deve estar nos locais imperdíveis de uma visita a Gramado!', 'https://imgur.com/bxIHzXw.jpg', 6),
(8, 'Igreja Matriz São Pedro Apóstolo', 'A igreja fica bem no centro da cidade. Com sua estrutura toda pedra, belíssima, por dentro e por fora, é uma boa prévia, antes de visitar a Catedral de Pedra de Canela, que é ainda mais linda. A praça e todo o seu entorno também é muito bonito. Vale caminhar sem pressa e aproveitar cada cantinho.', 'https://imgur.com/DYXk6t9.jpg', 6),
(9, 'Vinícola Ravanello', 'Uma vinícola diferenciada, com um ótimo atendimento, um ótimo local para passeio, sem contar a qualidade dos vinhos que proporcionam, indicada a todos que procuram uma vinícola de qualidade. Nota mil!', 'https://imgur.com/Mm80oSJ.jpg', 6),
(10, 'Jardim Botânico de Curitiba', 'Excelente opção para passar algumas horas caminhando, relaxando e em contato com a natureza. Lugar ideal para belas fotos.', 'https://imgur.com/A3nuDyE.jpg', 8),
(11, 'Museu Oscar Niemeyer', 'Muito rico em detalhes e muito extenso, vale a pena ter mais tempo para visitar , muito bonito e estruturado', 'https://imgur.com/sFZ8yEG.jpg', 8),
(12, 'Parrachos de Maracajaú', 'm paraíso! Lugar maravilhoso, natureza exuberante. Atendimento do local de apoio, simplesmente incrível! Com certeza, nota mil!!!', 'https://imgur.com/rPnij7k.jpg', 9),
(13, 'Parque das Dunas', 'Lugar maravilhoso, dia de sol e família unida \r\nTodos (as) são muito hospitaleiros (as).\r\nFaça uma mochila com protetor, água e se possível, uma fruta.', 'https://imgur.com/o3hoHWB.jpg', 9),
(14, 'Forte dos Reis Magos', 'Lugar histórico de Natal que vale muito a pena a visita. O forte está muito bem conservado e tem guia contando a história do mesmo. Também tem um pequeno museu com objetos indígenas.', 'https://imgur.com/bVpUzB6.jpg', 9),
(15, 'Lagoa de Pitangui', 'Uma lagoa de água limpíssima e doce , onde você pode passar o dia inteiro com sua família.\r\nOutra opção é chegar com os buggies onde você poderá passar algumas horas lá e seguir seu passeio pelas dunas', 'https://imgur.com/5mUG8QE.jpg', 9),
(16, 'Parque Capivari', 'Lugar super agradável ! Muitas opções e bem bacana para todas as idades. Tem lojinhas, vários quiosques, pista de gelo 3 orquestra em alguns dias determinados.', 'https://imgur.com/N7YqZ0o.jpg', 11),
(17, 'Morro do Elefante', 'Espaço com visual incrível da cidade, excelente para fotos. Com diversas lojinhas, bares e sem falar no passeo de teleférico que pode ser em cabine fechada ou em cadeiras. Um passeio imperdível. ', 'https://imgur.com/j5LhlCe.jpg', 11),
(18, 'Passeio de Barco Búzios', 'Excelente atendimento da empresa, nosso guia foi muito simpático, gentil e preocupado com as pessoas, o melhor!!! ', 'https://imgur.com/uqQhVJM.jpg', 12),
(19, 'Quadrado', 'O quadrado de Trancoso é muito lindo, repleto de história! As casinhas coloridas onde abrigam as lojas e restaurantes e a igrejinha dão todo charme ao local. A vista é incrível!', 'https://imgur.com/ZNZMzBL.jpg', 13),
(20, 'Praia dos Coqueiros', 'Praia dos Coqueiros em Trancoso é incrivelmente linda com uma faixa de areia extensa ,uma praia quase deserta,bem preservada,com um rio ao lado fica ainda mais linda.', 'https://imgur.com/z3lmbzF.jpg', 13),
(21, 'Igreja de São João Batista', 'Visite a charmosa Igreja de São João Batista, Trancoso. Um ícone histórico e cultural que encanta com sua arquitetura e energia serena. ', 'https://imgur.com/Fe5Ef4H.jpg', 13);

-- --------------------------------------------------------

--
-- Estrutura para tabela `quarto`
--

DROP TABLE IF EXISTS `quarto`;
CREATE TABLE IF NOT EXISTS `quarto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `pessoas` int NOT NULL,
  `image_url` varchar(500) NOT NULL,
  `image2_url` varchar(500) DEFAULT NULL,
  `image3_url` varchar(500) DEFAULT NULL,
  `id_hotel` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hotel` (`id_hotel`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `quarto`
--

INSERT INTO `quarto` (`id`, `nome`, `preco`, `pessoas`, `image_url`, `image2_url`, `image3_url`, `id_hotel`) VALUES
(1, 'Quarto Grande 2', 1000.99, 6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnSE7Qm842ATgPd07n1VmRnjWoowqvr6Eq7A&s', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1qqsY6io0SCJb6LZrUVd1t90uAtSr6NUwnQ&s', NULL, 1),
(2, 'Quarto Gold', 272, 2, 'https://imgur.com/nix8ttB.jpg', 'https://imgur.com/mDGsMvP.jpg', 'https://imgur.com/jhOE0Rh.jpg', 3),
(3, 'Quarto Silver', 248, 2, 'https://imgur.com/ZMOREEC.jpg', 'https://imgur.com/KJhKzku.jpg', 'https://imgur.com/hoREFfX.jpg', 3),
(4, 'Quarto Simples', 174, 2, 'https://imgur.com/MSAJKEv.jpg', 'https://imgur.com/i0gZpMw.jpg', 'https://imgur.com/Bpfh7zY.jpg', 4),
(5, 'Quarto Grande', 260, 2, 'https://imgur.com/7w1iuH8.jpg', 'https://imgur.com/N5oMefD.jpg', 'https://imgur.com/JFpcNUW.jpg', 4),
(6, 'Quarto Master', 450, 2, 'https://imgur.com/Q488W19.jpg', 'https://imgur.com/G6CWppm.jpg', 'https://imgur.com/qQuh9Mo.jpg', 5),
(7, 'Quarto Executivo', 285, 2, 'https://imgur.com/rpt1IHy.jpg', 'https://imgur.com/cMMdWQl.jpg', 'https://imgur.com/xqX6E3a.jpg', 5),
(8, 'Quarto Premium', 395, 2, 'https://imgur.com/vZLRX6m.jpg', 'https://imgur.com/hIrqJ33.jpg', 'https://imgur.com/szXWvep.jpg', 6),
(9, 'Quarto Base', 295, 2, 'https://imgur.com/v7OVfcA.jpg', 'https://imgur.com/vVtgHR0.jpg', 'https://imgur.com/9NOCMyX.jpg', 6),
(10, 'Quarto Vip', 356, 2, 'https://imgur.com/j9xuwWC.jpg', 'https://imgur.com/zPNotul.jpg', 'https://imgur.com/C6cygOr.jpg', 7),
(11, 'Quarto Luxo', 568, 2, 'https://imgur.com/nHuD3SJ.jpg', 'https://imgur.com/6urFM4F.jpg', 'https://imgur.com/tyQn2p8.jpg', 7),
(12, 'Quarto One', 234, 2, 'https://imgur.com/gIC4W5p.jpg.jpg', 'https://imgur.com/t9L3yt0.jpg', 'https://imgur.com/rb50wZz.jpg', 8),
(13, 'Quarto Two', 136, 2, 'https://imgur.com/Cwndg90.jpg', 'https://imgur.com/rDgXwCn.jpg', 'https://imgur.com/5ZrRBQv.jpg', 8),
(14, 'Quarto Luxo', 345, 2, 'https://imgur.com/R3BkkRT.jpg', 'https://imgur.com/jkLg4zK.jpg', 'https://imgur.com/FvM2PJ4.jpg', 9),
(15, 'Quarto Vip', 345, 2, 'https://imgur.com/U5TwoK7.jpg', 'https://imgur.com/88zD7BV.jpg', 'https://imgur.com/PPOIjQb.jpg', 11),
(16, 'Quarto Vip', 589, 2, 'https://imgur.com/K3PcueC.jpg', 'https://imgur.com/ZhCaPIZ.jpg', NULL, 6),
(17, 'Quarto Simples', 236, 2, 'https://imgur.com/ZW26Ste.jpg', 'https://imgur.com/2A8rC5H.jpg', NULL, 6),
(18, 'Quarto Mega', 675, 2, 'https://imgur.com/uqAyWyX.jpg', 'https://imgur.com/EqaOJbb.jpg', NULL, 7),
(19, 'Quarto Master', 704, 2, 'https://imgur.com/9M3hfUP.jpg', 'https://imgur.com/6wLsHg9.jpg', NULL, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `quarto_equipagem`
--

DROP TABLE IF EXISTS `quarto_equipagem`;
CREATE TABLE IF NOT EXISTS `quarto_equipagem` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_quarto` int NOT NULL,
  `id_equipagem` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_quarto` (`id_quarto`),
  KEY `id_equipagem` (`id_equipagem`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int NOT NULL AUTO_INCREMENT,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `forma_pagamento` tinyint NOT NULL,
  `id_usuario` int NOT NULL,
  `id_quarto` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_quarto` (`id_quarto`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `reserva`
--

INSERT INTO `reserva` (`id`, `checkin`, `checkout`, `forma_pagamento`, `id_usuario`, `id_quarto`) VALUES
(1, '2024-12-09 00:00:00', '2024-12-19 00:00:00', 1, 1, 3),
(3, '2024-12-11 00:00:00', '2024-12-20 00:00:00', 2, 1, 14),
(4, '2024-12-13 00:00:00', '2024-12-31 00:00:00', 3, 1, 7),
(5, '2025-01-07 00:00:00', '2025-01-29 00:00:00', 1, 1, 14),
(6, '2025-01-13 00:00:00', '2025-01-21 00:00:00', 4, 1, 15);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `admin`) VALUES
(1, 'ana', 'anaritapgreen08@gmail.com', 'fe1143c9dc95dcde3b5ed468f6c08f93', 1),
(2, 'rafael', 'rafael.manfrim@aluno.ifsp.edu.br', '248b79dddbbd86e41d181d1033be6d61', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
