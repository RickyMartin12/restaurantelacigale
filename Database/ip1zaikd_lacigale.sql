-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 28/07/2017 às 12:19
-- Versão do servidor: 5.6.30-cll-lve
-- Versão do PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `ip1zaikd_lacigale`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `privilegios` varchar(10) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `no_del` varchar(10) NOT NULL DEFAULT '0',
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Fazendo dump de dados para tabela `admins`
--

INSERT INTO `admins` (`id`, `nome`, `pass`, `privilegios`, `email`, `tipo`, `no_del`, `logo`) VALUES
(24, 'Admin', '21232f297a57a5a743894a0e4a801fc3', '2', '11knum15@gmail.com', 'Administrator', '1', 'logo/logo-1066263947.png'),
(46, 'jluis', 'a3cef687363e0676efc7c016812b5952', '2', 'jessicamluis@outlook.com', 'Administrator', '0', 'logo/a.png'),
(45, 'Ferreira', 'a0099ac6dd1c32b1524709810a5c9b5e', '1', 'geral@oseubackoffice.com', 'SuperUser', '0', 'logo/logo.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` varchar(700) NOT NULL,
  `classifcacao_comida` float NOT NULL,
  `classifcacao_servicos` float NOT NULL,
  `classifcacao_valor` float NOT NULL,
  `classifcacao_ambiente` float NOT NULL,
  `classificacao_recommended` float NOT NULL,
  `activar_field` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Fazendo dump de dados para tabela `comentario`
--

INSERT INTO `comentario` (`id`, `nome`, `assunto`, `mensagem`, `classifcacao_comida`, `classifcacao_servicos`, `classifcacao_valor`, `classifcacao_ambiente`, `classificacao_recommended`, `activar_field`) VALUES
(32, 'Carlos Sousa', '-/-', 'Excelente serviÃ§o de sala com um belo conceito de decoraÃ§Ã£o muito clean e moderno, a dar ponto ao restaurante a pela vista panorÃ¢mica sobre o mar.\nUm espaÃ§o excelente para uma boa refeiÃ§Ã£o com o bÃ³nus da tranquilidade.\nRecomendo vivamente o Bife com molho de Pimentas.', 5, 5, 5, 5, 100, 1),
(30, 'Noelle', '-/-', 'We have been coming back to the Algarve for many years and since discovering this restaurant it is always a must for us to return to at least once or twice on our holiday. The location is wonderful right on the pretty little beach of Olhas de Agua. The food is excellent. I go for the sardines with a tomato salad every time. The Piri Piri Chicken and Grilled Salmon are worth a go to. Very friendly service as well.', 5, 5, 5, 5, 100, 1),
(31, 'Danielle', '-/-', 'I visited this restaurant once finished playing on the beach with my toddler. I really could not fault it. The food is reasonably priced and is so fresh. I had the Salmon which was cooked perfectly (the fish does have bones in so be careful) and my daughter had fish fingers which again were so fresh. Bonus eating your food whilst have a sea view is amazing.', 5, 5, 5, 5, 100, 1),
(33, 'Susana', '-/-', 'Excelente peixe e marisco, ambiente calmo e repousante, bons vinhos. Boa cozinha e funcionÃ¡rios simpÃ¡ticos e atentos.', 5, 5, 5, 5, 100, 1),
(34, 'Mafalda', '-/-', 'Todos os anos esta Ã© uma paragem obrigatÃ³ria quando visito o Algarve. Desde a simpatia e eficiÃªncia do atendimento, Ã  confecÃ§Ã£o da comida, nunca foi uma desilusÃ£o, supera sempre as expectativas. A aliar Ã  sua qualidade, uma excelente localizaÃ§Ã£o sobre a praia, pedir mais Ã© quase impossÃ­vel. Recomendado para quem aprecia um bom peixe, seja grelhado ou em cataplana e um arroz de marisco no ponto. Excelente, para ir e sempre voltar a repetir!', 5, 5, 5, 5, 100, 1),
(35, 'Epil', '-/-', 'Nous avons mangÃ© deux soirs et nous avons apprÃ©ciÃ© le personnel trÃ¨s poli qui parle un peu franÃ§ais \r\nLe repas succulent... Le poulet piri piri es super bon et le poisson trÃ¨s frais\r\nNiveau prix correct pour tout\r\nVu sur la mer vraiment gÃ©niale pour passer un bon moment \r\nJe recommande', 5, 5, 5, 5, 100, 1),
(36, 'Stratfrau', '-/-', 'Direkt Ã¼ber dem Strand gelegen, super Aussicht auf Meer und SteilkÃ¼ste. Frische Fischgerichte und andere Port. SpezialitÃ¤ten. Trotz reichlich betrieb freundliche Bewirtung. Ein Kleinod mitten im Trubel. Wir hatten Fisch und Pasta, beides sehr gut.', 5, 5, 5, 5, 100, 1),
(37, 'Carolina', '-/-', 'El vino blanco de la casa riquÃ­simo y el pescado delicioso. Lo recomendamos 100%. Sobre todo si puedes conseguir mesa en la terraza. ', 5, 5, 5, 5, 100, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `companhia`
--

CREATE TABLE IF NOT EXISTS `companhia` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `morada` varchar(100) NOT NULL,
  `cod_postal` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `tlm` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `site` varchar(100) NOT NULL,
  `nif` varchar(12) NOT NULL,
  `iban` varchar(50) NOT NULL,
  `desconto` varchar(10) NOT NULL DEFAULT '0',
  `hora_reserva` varchar(5) NOT NULL DEFAULT '0',
  `ravt` varchar(10) NOT NULL,
  `termos` text CHARACTER SET utf8,
  `color` varchar(25) NOT NULL DEFAULT '#123456',
  `pp_email` varchar(50) NOT NULL,
  `motorista` varchar(10) NOT NULL DEFAULT 'Sim',
  `paypal` varchar(10) NOT NULL DEFAULT 'Sim',
  `trans_bancaria` varchar(10) NOT NULL DEFAULT 'Sim',
  `pp_taxa` decimal(3,1) NOT NULL DEFAULT '3.5',
  `publicidade` varchar(255) NOT NULL,
  `noturno` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `companhia`
--

INSERT INTO `companhia` (`id`, `nome`, `logo`, `morada`, `cod_postal`, `tel`, `tlm`, `email`, `site`, `nif`, `iban`, `desconto`, `hora_reserva`, `ravt`, `termos`, `color`, `pp_email`, `motorista`, `paypal`, `trans_bancaria`, `pp_taxa`, `publicidade`, `noturno`) VALUES
(1, 'Osb Unipessoal, Lda', 'upload/logo1.png', 'Estrada Sta. Eulalia, Lt7', '8200-000 ALbufeira', '289150167', '914564564', '11knum15@gmail.com', 'oseubackoffice.com', '123456789', 'PT50009870834234534534567', '0', '4', '1234', '<p><strong>What are Terms and Conditions</strong></p><p>Terms and Conditions are a set of rules and guidelines that a user must agree to in order to use your website or mobile app. It acts as a legal contract between you (the company) who has the website or mobile app and the user who access your website and mobile app.</p><p>Itâ€™s up to you to set the rules and guidelines that the user must agree to. You can think of your Terms and Conditions agreement as the legal agreement where you maintain your rights to exclude users from your app in the event that they abuse your app, and where you maintain your legal rights against potential app abusers, and so on.</p><p><strong>Terms and Conditions are also known as Terms of Service or Terms of Use.</strong></p><p>This type of legal agreement can be used for both your website and your mobile app. Itâ€™s not required (itâ€™s not recommended actually) to have separate Terms and Conditions agreements: one for your website and one for your mobile app.</p>', 'rgba(186,198,201,0.85)', 'contas@oseubackoffice.com', 'checked', 'checked', 'checked', '4.2', 'publicidade', '79200,18000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `privilegios`
--

CREATE TABLE IF NOT EXISTS `privilegios` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(25) NOT NULL,
  `agenda_pri` varchar(10) NOT NULL DEFAULT 'false',
  `suporte_pri` varchar(10) NOT NULL DEFAULT 'false',
  `clientes_pri` varchar(10) NOT NULL DEFAULT 'false',
  `relatorios_pri` varchar(10) NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `privilegios`
--

INSERT INTO `privilegios` (`id`, `tipo`, `agenda_pri`, `suporte_pri`, `clientes_pri`, `relatorios_pri`) VALUES
(1, 'SuperUser', 'checked', 'checked', 'checked', 'checked'),
(2, 'Administrator', 'checked', 'checked', 'checked', 'checked'),
(3, 'GestorPlus', 'false', 'checked', 'checked', 'false'),
(4, 'Gestor', 'false', 'false', 'checked', 'false');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  `data_reserva` int(11) NOT NULL,
  `hora_reserva` int(11) NOT NULL,
  `adultos` int(11) NOT NULL,
  `criancas` int(11) NOT NULL,
  `bebes` int(11) NOT NULL,
  `observacoes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Fazendo dump de dados para tabela `reserva`
--

INSERT INTO `reserva` (`id`, `nome`, `pais`, `email`, `telefone`, `data_reserva`, `hora_reserva`, `adultos`, `criancas`, `bebes`, `observacoes`) VALUES
(64, 'Brenda rennick', 'Portugal', 'Bbannonrennick@aol.com', 2147483647, 1501200000, 1501266600, 7, 5, 0, '-/-'),
(19, 'Gary Crawford', 'Reino Unido', 'garyscrawford66@hotmail.com', 2147483647, 1499299200, 1499365800, 7, 0, 1, '-/-'),
(20, 'Waser Carlos', 'SuÃ­Ã§a', 'carwas6@gmail.com', 2147483647, 1501200000, 1501270200, 2, 0, 0, 'Guten Tag.\r\nBitte einen gut gelegenen Tisch mit Blick auf die Bucht auf der Terrasse reservieren und per E-Mail bestÃ¤tigen. Vielen Dank.\r\nFreundliche GrÃ¼sse\r\nCarlos Waser '),
(21, 'BjÃ¸rn BjÃ¸lseth', 'Noruega', 'Bjorn_Bjolseth@hotmail.com', 2147483647, 1500422400, 1500487200, 2, 0, 0, 'Would like a table for two with good sea view, please'),
(22, 'LISA VISTOSKY', 'Estados Unidos', 'LAV848@AOL.COM', 2147483647, 1502582400, 1502650800, 8, 0, 0, 'This is our first time in Portugal and in addition we are celebrating one of our kids 28th birthday.\r\n\r\nWe would love a table outside on the deck.\r\n\r\nThank you,\r\nLisa'),
(23, 'Miossec', 'FranÃ§a', 'jeanluc.miossec@free.fr', 2147483647, 1500854400, 1500924600, 2, 0, 0, 'Ã€ demain.\r\n  Cordialement\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
