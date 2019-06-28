-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Jun-2019 às 23:03
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(2) NOT NULL,
  `descricao` varchar(20) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `descricao`, `valor`) VALUES
(1, 'SUV', 200),
(2, 'Passeio', 100),
(3, 'Van', 270),
(4, 'Pick Up', 300);

-- --------------------------------------------------------

--
-- Estrutura da tabela `exemplares`
--

CREATE TABLE `exemplares` (
  `id_exemplar` int(11) NOT NULL,
  `placa_veiculo` varchar(8) NOT NULL,
  `id_locacao` int(11) NOT NULL,
  `locado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacao`
--

CREATE TABLE `locacao` (
  `id_locacao` int(11) NOT NULL,
  `dataInicial` date NOT NULL,
  `dataFinal` date NOT NULL,
  `valor_total` float NOT NULL,
  `cpf_socio` varchar(11) NOT NULL,
  `id_veiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `socios`
--

CREATE TABLE `socios` (
  `cpf` varchar(11) NOT NULL,
  `cnh` varchar(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `socios`
--

INSERT INTO `socios` (`cpf`, `cnh`, `nome`, `rg`, `endereco`, `telefone`, `email`) VALUES
('00254453736', '54455455902', 'Vielka Moore', '29769710597', '6301 Ac Rd.', '(82) 89412-7959', 'a@consectetuer.edu'),
('00507339739', '25439864155', 'Janna Mcintyre', '24195067888', '237-3523 Sed Rd.', '(16) 48514-8673', 'cursus@atarcuVestibulum.co.uk'),
('00638236664', '04927846413', 'Sonya Delaney', '56739511800', 'P.O. Box 224, 5997 Cras Ave', '(18) 73021-2027', 'sem.elit.pharetra@Suspendissenon.ed'),
('00694818009', '97922807808', 'Nasim Peterson', '48026847994', 'P.O. Box 321, 1139 Non, Av.', '(37) 80638-4445', 'vitae.sodales.nisi@pretiumet.org'),
('02810211277', '82798451139', 'Kibo Bass', '32693506789', '139-3208 Magnis Av.', '(25) 76821-8236', 'metus.Vivamus.euismod@Pellentesqueh'),
('03620320739', '64408822878', 'Josiah Mcmahon', '09551803282', '890-6244 Est. Road', '(98) 92112-0127', 'id@ullamcorper.co.uk'),
('03923870213', '51252194546', 'Hollee Russell', '27825285126', 'Ap #817-1740 Lectus, Rd.', '(13) 90047-5708', 'blandit@augueut.net'),
('03993353147', '98038657728', 'Madeline Stephenson', '66651192606', '682-4494 Vitae, Rd.', '(59) 00058-8143', 'consequat.dolor@feugiatmetus.net'),
('04308060879', '83196175738', 'Iliana Witt', '03936456415', 'Ap #360-9202 Arcu. Street', '(31) 49690-1973', 'venenatis@leoVivamusnibh.net'),
('04806929076', '66785227218', 'Ronan Tate', '56925075134', 'P.O. Box 585, 7183 Odio Rd.', '(91) 56425-3199', 'sem.Pellentesque.ut@Cras.org'),
('07627488832', '94742290067', 'Zachery Burton', '68665943532', 'P.O. Box 994, 7461 Mi Road', '(57) 07552-6634', 'condimentum.eget.volutpat@nonquam.c'),
('07897117537', '83617893854', 'Irma Decker', '36860115787', 'P.O. Box 517, 1371 Et St.', '(71) 36194-6866', 'Phasellus.libero@libero.ca'),
('08697144770', '95641997394', 'Marah Boyer', '95718111154', '3032 Risus. Av.', '(67) 20366-7132', 'amet.consectetuer@nec.com'),
('11111111111', '12312311111', 'Teste 2', '9489489448', 'rua teste', '(28) 3355-5555', 'ricardo.quaresma@gmail.com'),
('11303903408', '75503959375', 'Portia Donaldson', '21948283187', 'P.O. Box 147, 2966 In, Av.', '(66) 28836-1051', 'ac.urna@in.net'),
('12583602047', '18031937976', 'Wendy Michael', '26129605469', '782-134 Dapibus Street', '(38) 18060-6104', 'leo@urna.org'),
('13657425951', '64043377756', 'Rae Colon', '14950723571', 'P.O. Box 262, 6715 Dolor, Rd.', '(98) 00682-4017', 'sit.amet.lorem@consectetueradipisci'),
('15167729714', '44675773478', 'Edan Booker', '85696590035', 'P.O. Box 328, 5409 Urna. Ave', '(37) 00560-6601', 'nunc.id.enim@feugiatnecdiam.co.uk'),
('15265353798', '46079114878', 'Gabriel Mathis', '25931015790', 'P.O. Box 100, 6748 Vel St.', '(25) 14579-0938', 'laoreet.lectus@etmagnis.com'),
('17728542541', '34269195646', 'Nomlanga Newman', '46108541908', 'Ap #115-4470 Elit. Rd.', '(50) 98886-0098', 'vulputate@pede.org'),
('18301301307', '63193515560', 'Isaac Faulkner', '09464850506', 'Ap #235-586 At St.', '(07) 04721-8084', 'et.euismod.et@congueInscelerisque.c'),
('18778588824', '17215012225', 'Karyn Poole', '06724678901', '1682 Egestas. Rd.', '(73) 40487-4541', 'a.malesuada@euenimEtiam.com'),
('20644937753', '04832935315', 'Reese Alvarado', '76537105902', 'Ap #919-2364 Praesent St.', '(39) 34348-4374', 'sollicitudin@interdum.edu'),
('21077513181', '87326815557', 'Connor Mercado', '89329485853', 'Ap #783-5513 Neque Road', '(07) 95478-0616', 'dolor@idmollisnec.edu'),
('22750200886', '92611684904', 'Serina Aguilar', '72250161186', '9807 Nullam Av.', '(49) 28985-2258', 'consectetuer.cursus.et@Nulladigniss'),
('23227630132', '13610142403', 'Brynne Peck', '10223808400', 'P.O. Box 679, 1977 Eleifend St.', '(96) 59936-6313', 'urna.suscipit.nonummy@consectetuer.'),
('23733963469', '83005629289', 'Pandora Tanner', '22559110644', 'P.O. Box 912, 6149 At, St.', '(35) 76740-2214', 'turpis.egestas@Nunc.net'),
('23912774549', '53788971637', 'Lewis Fletcher', '24522432781', 'P.O. Box 857, 7002 Erat St.', '(70) 52646-4290', 'elit.Curabitur.sed@sedpede.org'),
('24873567693', '29800853236', 'Armando Christian', '50074992549', '191-9144 Rhoncus. Rd.', '(55) 14291-7015', 'velit.dui@Maecenasiaculisaliquet.ed'),
('27330340258', '74471749945', 'Samantha Guerra', '43199071933', '382-7089 Mollis Rd.', '(51) 85857-6805', 'mauris.eu.elit@estmauris.org'),
('29216618107', '46582435985', 'Eleanor Delacruz', '25108031547', 'P.O. Box 626, 8660 Proin St.', '(22) 10158-4775', 'tellus.faucibus.leo@utmolestie.org'),
('29883772854', '58483127233', 'Ahmed Joyce', '71249551337', 'P.O. Box 350, 2920 Amet Av.', '(30) 31949-4467', 'pretium@Donec.ca'),
('30895206692', '44300883028', 'Asher Tran', '60228218638', '328-4565 Sit Street', '(18) 01669-2272', 'et@elitdictumeu.net'),
('31828949011', '59043070998', 'William Moon', '78520564980', '7583 Vitae, Street', '(30) 64139-5676', 'dictum.Phasellus@lobortisquispede.c'),
('33733195636', '65053985197', 'Rashad Peck', '67817811829', 'Ap #544-1380 Est. Ave', '(46) 59596-8810', 'pede.Cum@at.com'),
('36724183961', '98376041100', 'Howard Ashley', '85384732720', 'Ap #418-7261 Mi Avenue', '(08) 97900-5649', 'netus.et@eros.net'),
('37710140974', '00695434740', 'Prescott Benson', '61387567926', '103-6726 Gravida Road', '(81) 62464-3429', 'nunc@ornareInfaucibus.com'),
('39774078089', '95168113489', 'Ali Fields', '26462152803', '829-4030 Odio. Road', '(63) 73301-4385', 'velit.Sed.malesuada@Cumsociis.com'),
('39799476801', '65296699186', 'Arthur Mcneil', '53584665980', '184-6499 Et Rd.', '(13) 32947-9405', 'ut@dictumProineget.org'),
('40098513871', '80503224041', 'Brielle Perkins', '18366631077', 'P.O. Box 763, 5150 Et Ave', '(05) 08216-4095', 'ac@iaculisenim.co.uk'),
('40340272738', '83254522060', 'Neil Walls', '00702723071', 'P.O. Box 628, 1987 Nec Rd.', '(71) 57590-0639', 'commodo.at@eratnonummy.com'),
('41557981838', '78088975552', 'Graham Wolf', '41719137597', 'Ap #515-7351 Faucibus Rd.', '(46) 15893-4820', 'felis.orci.adipiscing@orcitincidunt'),
('42651367317', '78302094184', 'Jasmine Harding', '54946025299', 'P.O. Box 661, 9751 Et St.', '(82) 62746-2311', 'Donec@ipsumnonarcu.ca'),
('44867356647', '63528295931', 'Amethyst Hardin', '29717542956', '170-1080 Eros. Road', '(39) 19648-1821', 'tempor.lorem@Praesenteudui.com'),
('46714094451', '47347624279', 'Karina Duffy', '74254313317', 'P.O. Box 598, 7556 Dolor Rd.', '(27) 38192-0600', 'per.inceptos.hymenaeos@lectus.com'),
('49446718983', '84582151305', 'Gareth Lindsay', '25293769388', 'P.O. Box 712, 6576 A Rd.', '(70) 24341-3101', 'ut.sem@elementumat.com'),
('52682301215', '59352633869', 'Kelly Morgan', '14174876902', 'P.O. Box 670, 8613 Consequat Avenue', '(53) 74335-5916', 'dolor@adipiscing.co.uk'),
('53425577940', '26787947451', 'Coby Gutierrez', '69322023520', 'P.O. Box 462, 7902 A Avenue', '(91) 60512-6674', 'nonummy.ac.feugiat@Inmipede.edu'),
('53554942461', '75252287017', 'Teagan Duffy', '78028985981', '557 Mi. Road', '(71) 66874-2841', 'euismod.enim@euultricessit.net'),
('53726732164', '08829233025', 'Adele Wilcox', '55519629655', 'P.O. Box 201, 6617 Tincidunt, Street', '(06) 31603-4967', 'Integer.in@iaculisquis.com'),
('55269925981', '26657523457', 'Anastasia Decker', '03033937983', 'Ap #863-5983 Eleifend, Av.', '(44) 06461-8977', 'ipsum.Phasellus.vitae@at.ca'),
('55570851608', '61482916158', 'Anjolie Dawson', '76809452013', '1774 Magna Street', '(20) 53752-6388', 'nibh.vulputate.mauris@Inat.org'),
('58992358825', '73244764886', 'Rama Peck', '51911840767', '9589 Lorem. Rd.', '(22) 45944-8487', 'Nam@magna.org'),
('59268509932', '12683667494', 'Brynn Malone', '72441883476', '2110 Ornare. St.', '(32) 17358-8258', 'et.tristique.pellentesque@tristique'),
('61617932606', '72670667386', 'Jana Gray', '95434156396', 'Ap #720-7297 Condimentum. Rd.', '(86) 07805-8986', 'Cras.dolor.dolor@Phasellus.com'),
('62442968596', '68734621072', 'Sierra David', '92426503055', '919-2129 Convallis St.', '(39) 82922-4375', 'Suspendisse.sagittis.Nullam@ultrici'),
('63715205138', '82927603846', 'Judah Barron', '47673516413', '299-6002 Morbi St.', '(36) 18118-1498', 'eget.tincidunt@sodalesnisi.net'),
('64008090814', '08450378994', 'Kimberly Hendricks', '88484457153', 'P.O. Box 669, 5273 Laoreet St.', '(31) 80436-9255', 'amet.diam@semutdolor.co.uk'),
('64875424796', '16343710545', 'Jin Gallegos', '39599841168', '7226 Ullamcorper, Street', '(17) 13216-1412', 'ipsum@aneque.co.uk'),
('65314292279', '01421372803', 'Lesley Charles', '61588376452', 'P.O. Box 724, 1405 Malesuada Avenue', '(22) 05335-3186', 'penatibus.et@Phaselluselit.net'),
('65467352610', '78467400925', 'Baxter Vaughn', '29981086161', '3183 Orci St.', '(80) 69600-2121', 'rhoncus@fermentummetusAenean.ca'),
('65727022040', '96283411758', 'Patricia Buckner', '84579763687', '3303 Non Avenue', '(20) 39261-9112', 'libero.Proin.mi@Integer.org'),
('66483172996', '95103906044', 'Ulysses Anderson', '66273066327', 'P.O. Box 280, 5758 Fusce Road', '(49) 78876-8087', 'neque.venenatis.lacus@blanditat.co.'),
('68525974510', '24350326528', 'Brendan Alvarez', '36191011566', '5226 Egestas. Avenue', '(09) 33983-1644', 'ante.blandit@non.co.uk'),
('69116642625', '93811630290', 'Colt Oneil', '48929411260', '363-2626 Faucibus Road', '(38) 69919-0371', 'elit.sed@idmollisnec.edu'),
('69332890061', '15583153884', 'Ila Rogers', '21533703741', '2996 Lectus Rd.', '(58) 49714-4513', 'metus@vitaediamProin.edu'),
('69549023296', '14514801059', 'Driscoll Beasley', '73056045760', '138-1733 Cras St.', '(22) 10352-3163', 'primis.in@id.com'),
('69900223710', '31631290823', 'Amethyst Mcgowan', '58581351856', 'Ap #290-3962 Commodo Avenue', '(13) 70591-9207', 'ullamcorper@elementumpurusaccumsan.'),
('71459516632', '84060223582', 'Maryam Beasley', '94614719705', 'Ap #870-5159 Semper, Ave', '(59) 93310-9889', 'ridiculus.mus@pede.co.uk'),
('71847375739', '18428703154', 'Ria Cantu', '48988914180', '9680 Convallis Ave', '(84) 21640-4185', 'Maecenas.iaculis@vulputate.com'),
('72794180423', '32914969116', 'Jonah Burks', '24741353665', '9987 Eu St.', '(60) 92113-3596', 'est.Mauris.eu@elementum.org'),
('73149665286', '66667289086', 'Rebekah Blake', '11802483183', '481-3982 Dolor Road', '(39) 59103-6039', 'enim.diam.vel@nasceturridiculus.co.'),
('74446077046', '11886727942', 'Adena Freeman', '81588027732', 'P.O. Box 573, 1901 Mi Street', '(34) 59294-6911', 'ipsum.Suspendisse.sagittis@volutpat'),
('74598582664', '70914106087', 'Yuri Valdez', '22069861574', 'P.O. Box 727, 1451 Scelerisque Rd.', '(97) 32128-2672', 'a.sollicitudin.orci@ultrices.co.uk'),
('75943587360', '38553353969', 'Beverly Levine', '28668533861', '1619 Magnis Ave', '(92) 62376-3836', 'vel.sapien@nequeInornare.com'),
('76059432857', '87803337385', 'Imani Wilkinson', '93893641946', '935-7711 Gravida. Street', '(58) 09400-5705', 'ipsum.non.arcu@convallisincursus.ed'),
('76932400345', '41708454215', 'Garrison Melton', '55155785753', 'Ap #810-4712 Aliquam Avenue', '(22) 93570-2703', 'Cras.convallis@arcuSed.edu'),
('77511043621', '19606480797', 'Vaughan Oneal', '92401798347', '2731 Elementum St.', '(26) 22299-0631', 'Duis.volutpat@temporbibendumDonec.o'),
('77712703416', '24314802478', 'Preston Gibbs', '67087784730', '551-8028 Sollicitudin Av.', '(49) 43149-4594', 'diam@elementum.org'),
('77716018951', '20497995693', 'Dominic Vargas', '26240711136', '3587 Urna. St.', '(28) 93995-6380', 'aptent@egestasnuncsed.edu'),
('78367549015', '50483455332', 'Shelly Wynn', '16417897894', 'Ap #348-7597 Accumsan Road', '(47) 10683-0147', 'eget@NullamnislMaecenas.ca'),
('79782392920', '90165268587', 'April Mcdaniel', '60988949669', 'P.O. Box 652, 7007 Nec, Ave', '(40) 68141-3752', 'Duis.at.lacus@ornaretortorat.edu'),
('79944492753', '07225669939', 'Yvonne Lopez', '01350894801', '7221 Ornare. Rd.', '(51) 84417-6849', 'facilisis.facilisis.magna@Nullam.co'),
('80869364864', '95719629023', 'Dora Beard', '00022138301', 'P.O. Box 634, 8830 Enim. Rd.', '(64) 81157-6146', 'lectus@temporestac.com'),
('81920532088', '24011567693', 'Maile Bass', '60582314102', 'P.O. Box 693, 8382 Auctor. St.', '(88) 09154-8046', 'Donec.non.justo@vitaepurus.ca'),
('83017403903', '51966926935', 'Nehru Barnett', '72096162772', '9808 Mauris St.', '(24) 43727-6068', 'amet.ultricies@facilisisegetipsum.c'),
('83824137179', '12678328584', 'Jack Schneider', '39716298571', 'Ap #461-8438 Sed Road', '(92) 34465-0520', 'nulla@In.edu'),
('84587233862', '06594751767', 'Illiana Odonnell', '81705215652', '264-6633 Duis Street', '(13) 55668-1463', 'nulla.Integer.urna@ligula.net'),
('85309527459', '63673103907', 'Jack Slater', '17612892502', 'Ap #648-860 Scelerisque Rd.', '(73) 35692-8088', 'lorem@Aeneanmassa.org'),
('86416859705', '88370607962', 'Aurelia Vinson', '51047054161', '194-1864 Phasellus Avenue', '(27) 99522-3473', 'et@Donectincidunt.org'),
('87800537027', '41072075013', 'Galena Salinas', '59340292728', 'Ap #272-1354 Nec St.', '(00) 83632-2786', 'Donec.consectetuer@facilisisegetips'),
('88209861451', '60086997374', 'Paula Glass', '55791631989', '885-4495 Praesent Rd.', '(17) 25469-2824', 'porttitor@odioAliquam.ca'),
('91175861767', '89793409347', 'Lionel Gould', '82403954936', '6827 Dui. Ave', '(21) 93910-0617', 'semper.Nam@ametmetusAliquam.edu'),
('92602790446', '25480830151', 'Nichole Petty', '74643786008', 'P.O. Box 751, 1527 Eget, St.', '(72) 58706-8545', 'ipsum@interdumenimnon.co.uk'),
('92651207571', '20759399970', 'Brooke Craft', '88646901840', 'P.O. Box 819, 6997 Felis St.', '(18) 18413-1097', 'dui.Cras.pellentesque@etmagnisdis.o'),
('93490302099', '66996905976', 'Wanda Richardson', '17314617823', 'P.O. Box 472, 7011 Dictum St.', '(59) 32149-0948', 'dictum@morbitristique.net'),
('94299837219', '28244233225', 'Joel Mcdowell', '54364587800', 'Ap #319-6441 Mi. Avenue', '(47) 68802-9702', 'non.enim.Mauris@at.co.uk'),
('94989258148', '75841424250', 'Colby Bauer', '49369613219', 'Ap #243-8724 Tellus Rd.', '(00) 07525-6519', 'ultricies.ligula.Nullam@sempercursu'),
('96168014368', '34628905208', 'Theodore Jordan', '32137586836', 'P.O. Box 874, 5895 Donec Rd.', '(30) 57014-3274', 'quam.vel.sapien@elementum.org'),
('97237648735', '58082179131', 'Devin Bender', '93761832045', '7045 Tortor. Ave', '(41) 37546-1228', 'molestie.tortor.nibh@lacusNullatinc'),
('99898190535', '89619574629', 'Jaime Cole', '86197573399', '796 Dolor Street', '(41) 58477-3998', 'arcu@auctorquistristique.edu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `user` text,
  `senha` text,
  `tipo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`user`, `senha`, `tipo`) VALUES
('venenatis@leoVivamusnibh.net', '4321', 'c'),
('miqueas@mail.com', '1234', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `placa` varchar(8) NOT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `anoFabricacao` int(10) UNSIGNED DEFAULT NULL,
  `fabricante` varchar(30) DEFAULT NULL,
  `opcionais` text,
  `motorizacao` varchar(50) NOT NULL,
  `valorBase` float NOT NULL,
  `idcategoria` int(2) NOT NULL,
  `locado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`placa`, `modelo`, `anoFabricacao`, `fabricante`, `opcionais`, `motorizacao`, `valorBase`, `idcategoria`, `locado`) VALUES
('DFT-2641', 'Gol', 2019, 'Volkswagen', 'Ar condicionado', '1.6', 90, 2, 0),
('GUI-9617', 'Uno', 2019, 'Fiat', '', '1.0', 80, 2, 0),
('JYD-3792', 'Toro', 2018, 'Fiat', 'Ar condicionado', '1.8', 110, 4, 0),
('TYU-4578', 'Expert', 2018, 'Peugeot', 'Ar condicionado, TV', '1.5', 132, 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `exemplares`
--
ALTER TABLE `exemplares`
  ADD PRIMARY KEY (`id_exemplar`);

--
-- Indexes for table `locacao`
--
ALTER TABLE `locacao`
  ADD PRIMARY KEY (`id_locacao`);

--
-- Indexes for table `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`placa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
