-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2021 às 18:31
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Mensage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Mensage`) VALUES
(1, 'Agostinho', 'agostinho@carrara.com', 'Teste de envio de mensagem no área de contato...'),
(2, 'Renan Fernando', 'renanfernando055@gmail.com', 'Só para preencher espaço, e aparecer em duas colunas mesmo...'),
(3, 'Renan Fernando', 'renanfernando055@gmail.com', 'Outra mensagem aqui kkkkkk'),
(4, 'José Carlos', 'josec92@yahoo.com.br', 'Estou tendo problemas com a recuperação de senha... gostaria saber se podem me ajudar'),
(5, 'Thiago', 'thiago@gmail.com', 'Teste de mensagem do nosso compatriota Thiagão!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `IdPost` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Subtitle` varchar(255) DEFAULT NULL,
  `Scope` mediumtext DEFAULT NULL,
  `Send_date` datetime DEFAULT NULL,
  `Edit_date` datetime DEFAULT NULL,
  `Author` int(11) DEFAULT NULL,
  `Img` varchar(255) DEFAULT NULL,
  `Caption` varchar(255) DEFAULT NULL,
  `Tags` varchar(255) DEFAULT NULL,
  `BlockedPost` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`IdPost`, `Title`, `Subtitle`, `Scope`, `Send_date`, `Edit_date`, `Author`, `Img`, `Caption`, `Tags`, `BlockedPost`) VALUES
(1, 'PACIENTES COM FIBROMIALGIA FALAM SOBRE TRATAMENTO QUE REDUZIU 90% SUAS DORES', 'A técnica foi desenvolvida pela MultFISIO Brasil em parceria com a USP de São Carlos e está à disposição nas clínicas espalhadas pelo país.', 'Um tratamento inovador desenvolvido por pesquisadores do Grupo de Óptica do Instituto de Física de São Carlos, da Universidade de São Paulo (USP), tem mostrado resultados significativos, zerando a dor de 90% dos pacientes tratados. Trata-se do tratamento fotossônico, que envolve a aplicação de ultrassom terapêutico e um laser de baixa potência em conjunto com um protocolo de tratamento da MultFISIO Brasil, que apresenta ação anti-inflamatória e analgésica, promovendo equilíbrio no organismo e, consequentemente, controle da dor.\r\nSegundo Antônio Eduardo de Aquino Junior, que liderou a pesquisa clínica para tratamento de fibromialgia, os pacientes fibromiálgicos possuem uma maior quantidade de células receptoras nas palmas das mãos quando comparados aos pacientes saudáveis. Por isso, um dos principais pontos de aplicação do tratamento é nas palmas das mãos. “O tratamento funciona basicamente com a ação conjugada de laser e ultrassom aplicada em pontos determinados, diferentemente da fisioterapia tradicional”, explica o pesquisador. “A gente consegue promover um efeito anti-inflamatório e analgésico sistêmico, fazendo com que o paciente consiga retornar às atividades normais”, diz.\r\nSegundo Antônio, o tratamento convencional da doença envolve o uso de muitos medicamentos, o que pode gerar ainda indisposição. Com o tratamento da MultFISIO Brasil, o paciente recebe a aplicação do protocolo de tratamento, de forma indolor e com sessões realizadas ao longo da semana, ao todo, são necessárias dez sessões.\r\nAs clínicas da rede MultFISIO Brasil estão presentes atualmente em 3 estados do país. Pioneiras em tratamentos inovadores para doenças como a fibromialgia, doença de Parkinson, artrose, artrite reumatoide e outras, a MultFISIO Brasil se reinventa para oferecer aos seus pacientes o melhor da tecnologia, pesquisa e tratamentos que têm bom resultado. “Hoje nós temos ao menos 50% dos pacientes com no mínimo 60% de melhora na qualidade de vida e no mínimo 50% dos pacientes com ao menos 70% de melhora na dor. Cerca de 90% dos pacientes têm melhora nas duas questões”, diz o especialista.\r\nHistória da vida real\r\nUma das pacientes que viu sua vida melhorar exponencialmente foi Izabel Ranu, de 69 anos, de São Carlos, interior de São Paulo. Izabel sofre com a fibromialgia há mais de 30 anos e já fez todos os tipos de tratamentos que encontrou na cidade onde vive e na redondeza, sem resultados relevantes. Foi o marido dela, Marinelson Ranu, que ouviu falar da técnica desenvolvida pela USP de São Carlos em parceria com a MultFISIO Brasil na televisão e a levou para participar dos testes há cerca de 3 anos, ainda em fase experimental. “No primeiro dia que fui, meu marido me empurrava porque eu não conseguia andar, com tanta dor”, recorda.\r\nIzabel lembra que as quatro primeiras sessões fizeram com que ela tivesse vontade de desanimar, já que não via resultados efetivos, mas que a partir da quarta ela já se sentia melhor. “Cada dia que passava, eu me sentia melhor. Fiz as dez sessões e falei para o Daniel e o Antonio [líderes da pesquisa] que queria continuar e segui o tratamento na MultFISIO Brasil. O atendimento e o tratamento foram geniais. Eu só posso agradecer”, conta a idosa. Izabel também explica que antes do tratamento não conseguia fazer suas tarefas domésticas e que hoje tem disposição para tudo. “É claro que não posso abusar! Nessa pandemia eu fiquei praticamente 6 meses sem aparecer na MultFISIO Brasil e eu tive crises, mas não chega em nem um décimo do que tinha antes. O tratamento é genial, muito bom! A equipe é sensacional, os funcionários deixam a gente muito à vontade”, avalia a paciente.\r\nMarinelson, o marido de Izabel, testemunha a melhora. “Antigamente ela não conseguia fazer nada por causa das dores, mas eu indico para quem tem fibromialgia que procure esse tratamento porque é muito bom. Só de melhorar 70% já é bastante coisa. Eu só tenho a agradecer a eles pelo que fizeram com a Izabel”, aconselha.', '2021-11-14 22:24:33', '2021-11-19 19:46:33', 3, '9225a23a6b6450e087df2e162809168b.jpg', 'Marinelson foi o grande apoiador de Izabel, que hoje, depois do tratamento na MultFISIO Brasil, se sente melhor e sem dores', NULL, 0),
(2, 'SUS PODERá ATENDER INTEGRALMENTE PACIENTES COM FIBROMIALGIA E FADIGA CRôNICA', '', 'Pessoas acometidas por síndrome de fibromialgia ou fadiga crônica poderão receber atendimento integral pelo Sistema Único de Saúde (SUS). É o que prevê o Projeto de Lei (PL) 3.525/2019, aprovado nesta terça-feira (21) pela Comissão de Assuntos Econômicos (CAE). \r\nPela proposição, de autoria da deputada federal Erika Kokay (PT-DF), a pessoa acometida por síndrome de fibromialgia ou fadiga crônica receberá atendimento integral pelo SUS, que incluirá, no mínimo: atendimento multidisciplinar por equipe composta de profissionais das áreas de medicina, de psicologia, de nutrição e de fisioterapia; acesso a exames complementares; assistência farmacêutica; e acesso a modalidades terapêuticas reconhecidas, inclusive fisioterapia e atividade física. \r\nO projeto estabelece, ainda, que a relação dos exames, medicamentos e modalidades terapêuticas será definida em regulamento. \r\nO relator, senador Angelo Coronel (PSD-BA), apresentou relatório favorável à proposta. De de acordo com ele, o texto “tem por objetivo principal assegurar acesso ao tratamento digno e efetivo às pessoas atingidas pela fibromialgia ou fadiga crônica”. \r\n— Estima-se que cerca de 2,5% da população mundial sofre da síndrome de fibromialgia, tendo incidência mais relevante em mulheres entre 30 e 50 anos. E dados da Sociedade Brasileira de Clínica Médica indicam que 1,5% da população mundial convive com o cansaço crônico — enfatizou o relator.\r\nImpacto financeiro\r\nAngelo Coronel também destacou que o projeto atende às condições de impacto econômico e não resultará em impactos financeiros, visto que o ônus do atendimento obrigatório às pessoas acometidas por essas condições será repartido entre os entes. \r\n“Com efeito, o custo do tratamento poderá ser abarcado com a previsão orçamentária do Ministério da Saúde, por exemplo, com a atenção especializada por meio da ação de Atenção à Saúde da População para Procedimentos em Média e Alta Complexidade. De acordo com o projeto de lei orçamentária para o exercício de 2020, são previstos quase R$ 50 bilhões para a referida ação, que podem ser alocados em diversos tratamentos, inclusive os relacionados à síndrome da fibromialgia e à fadiga crônica”, expôs o relator. \r\nO PL 3.525/2019 seguirá agora para análise da Comissão de Assuntos Sociais (CAS).', '2021-11-16 22:26:06', '2021-11-19 19:52:26', 3, '73c6534540fd6e8d8e9f385c6cf3b7d7.jpg', '', NULL, 0),
(3, 'PESSOAS COM FIBROMIALGIA PASSAM A TER ATENDIMENTO PREFERENCIAL EM óRGãOS PúBLICOS E EMPRESAS NO AC', 'Lei que determina inclusão dessas pessoas em atendimento preferencial foi publicada na edição desta quarta-feira (14) do Diário Oficial do Estado.', 'Pessoas com fibromialgia passam a ter atendimento preferencial nos estabelecimentos comerciais, órgãos públicos no Acre e empresas privadas. A lei com a determinação foi publicada na edição desta quarta-feira (14) do Diário Oficial do Estado.\r\nO projeto, de autoria do deputado Roberto Duarte (MDB), tinha sido aprovado na Assembleia Legislativa do Estado (Aleac) no último dia 23 de junho pelos parlamentares.\r\nA norma prevê que os órgãos públicos, empresas concessionárias de serviços públicos e empresas privadas em todo o estado são obrigadas, durante todo o horário de expediente, a oferecer atendimento preferencial às pessoas com fibromialgia.\r\nNo caso das empresas comerciais que recebem pagamentos de contas, a lei determina que estas devem incluir as pessoas com fibromialgia nas filas de atendimento preferencial já destinadas aos idosos, gestantes e pessoas com deficiência.\r\nAinda segundo a legislação, a identificação dos beneficiários vai se dar por meio de cartão expedido, gratuitamente, por órgão de saúde competente.\r\nA fibromialgia é uma doença que não tem cura e que causa dores no corpo. Segundo estudos, a doença é conhecida como uma síndrome dolorosa crônica, sem uma causa definida. O paciente tem dificuldade em produzir hormônios e neurotransmissores relacionados ao alívio da dor.\r\n“A aprovação da proposta objetiva o reconhecimento das limitações que a fibromialgia condiciona aos seus portadores, além de conscientizar a sociedade sobre o aspecto incapacidade desta doença”, destacava parte do projeto de lei.\r\n\r\nAjuda\r\nA encarregada de serviço geral Creuza Monteiro da Silva, de 47 anos, convive com a fibromialgia há mais de um ano. Em dias com dores muito fortes, Creuza não consegue se locomover direito e não sai de casa.\r\nPara ela, a prioridade vai agilizar o atendimento dos portadores. Sem um tratamento específico, Creuza explicou que o diagnóstico da doença é muito difícil\r\n\"Vai ajudar muito. Começo a sentir as dores de repente. Quando entro no ciclo da menstruação ataca mais, tem dia que ando na ponta dos pés porque não aguento andar direito. Dói o corpo todo, e tudo afeta, emocional, estresse. Não tenho como pegar um laudo porque não tem o diagnóstico, os exames não acusam que você tem fibromialgia. Tenho raio-X até dos meus dedos e não acusou nada\", lamentou.', '2021-11-18 09:03:27', '2021-11-18 09:02:27', 1, '9acff5f7e0b47c91175cb3b0da0474b8.jpg', NULL, NULL, 0),
(4, 'PROJETO FACILITA RECEBIMENTO DE BENEFíCIOS DO INSS POR PESSOA COM FIBROMIALGIA', 'Não tem', 'O Projeto de Lei 4399/19 inclui a fibromialgia no rol das doenças dispensadas de carência para o recebimento de auxílio-doença ou aposentadoria por invalidez, benefícios pagos aos segurados do Instituto Nacional do Seguro Social (INSS). A proposta, já aprovada no Senado, tramita agora na Câmara dos Deputados.\r\nO texto altera a Lei de Benefícios da Previdência Social, que hoje dispensa de carência as pessoas com doenças como hanseníase, neoplasia maligna (câncer) e aids.\r\nO projeto é de autoria da Comissão de Direitos Humanos e Legislação Participativa do Senado (CDH), e é baseado em sugestão de uma internauta, que propôs o texto por meio do e-Cidadania, portal que recebe sugestões e consultas da população.\r\nApós discutir a ideia em audiências públicas, a CDH entendeu que a fibromialgia é uma doença crônica incapacitante e merecedora de atenção multiprofissional. O relator da sugestão, senador Flávio Arns (Rede-PR), lembrou que a lei brasileira já reconhece a fibromialgia como doença crônica e assegura a seus portadores acesso a medicamentos e terapias pelo Sistema Único de Saúde (SUS).\r\nServiço\r\nO PL 4399/19 é o primeiro projeto aprovado pelos senadores oriundo de uma sugestão legislativa encaminhada por meio do portal e-Cidadania.\r\nA Câmara dos Deputados possui um serviço similar, à disposição dos cidadãos, que podem apresentar sugestões de audiências públicas, projetos de lei e até emendas ao orçamento da União por meio de página mantida pela Comissão de Legislação Participativa.', '2021-11-18 13:36:39', '2021-11-22 22:40:28', 1, '870521269b6f31c6d49bae1b4fddd9d4.jpg', 'Proposta dispensa portadores de fibromialgia de carência para recebimento de benefícios', NULL, 0),
(6, 'PESQUISA DA UFSC SOBRE FIBROMIALGIA é CAPA DE REVISTA CIENTíFICA INTERNACIONAL', 'Não tem', 'Uma pesquisa desenvolvida no Laboratório de Autoimunidade e Imunofarmacologia, do Departamento de Ciências da Saúde da Universidade Federal de Santa Catarina – campus Araranguá (LAIF/UFSC) foi escolhida para estampar a capa da revista internacional Neural Regeneration Research (NRR). O artigo, intitulado “Efeito da ativação dos receptores dopaminérgicos no modelo experimental de fibromialgia”, é de autoria de Carlos Pereira Martins, vinculado ao Programa de Pós-Graduação em Neurociências (PPG NEURO/UFSC), cuja dissertação de mestrado foi defendida em dezembro de 2020 sob orientação do professor Rafael Cypriano Dutra.\r\n“Nesse projeto, demonstramos que um medicamento amplamente utilizado para tratar a doença de Parkinson, conhecido como pramipexol – e que ativa os receptores do neurotransmissor dopamina – foi capaz de inibir o desenvolvimento e a progressão da fibromialgia em animais de laboratório”, comenta Dutra. Em conclusão, os resultados dessa pesquisa representam considerável avanço nas perspectivas de novos tratamentos para a fibromialgia, bem como outros tipos de dores crônicas com medicamentos comumente utilizados em outras doenças, que já possuem estudos clínicos de segurança e eficácia. Esse “reposicionamento” dos medicamentos pode encurtar as distâncias na aplicação clínica desses fármacos em doenças de difícil tratamento.', '2021-11-22 20:23:37', '2021-11-22 20:23:37', 1, '74734c071cdc6b8f058bda0360fbc476.jpg', 'Capa da revista internacional Neural Regeneration Research (NRR)', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts_tags`
--

CREATE TABLE `posts_tags` (
  `posts_id` varchar(50) DEFAULT NULL,
  `tags_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tags`
--

CREATE TABLE `tags` (
  `IdTag` int(11) NOT NULL,
  `NameTag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tags`
--

INSERT INTO `tags` (`IdTag`, `NameTag`) VALUES
(1, 'Doença'),
(2, 'Pandemia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Birth` date DEFAULT NULL,
  `Occupation` varchar(255) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Type` int(2) DEFAULT NULL,
  `Blocked` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Password`, `Phone`, `Gender`, `Birth`, `Occupation`, `Photo`, `Type`, `Blocked`) VALUES
(1, 'Renan Fernando', 'renanfernando055@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '11994390308', 'Masculino', '2004-01-19', 'Técnico de TI', '14e3e5a805d9bcdda2e7dcbdefbe9cd1.svg', 0, 0),
(2, 'Elisa Zerbinatto', 'elisa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '11989463562', 'Feminino', '2003-10-09', 'Psicóloga', '9cdc8c7fce605def8ed615fc7ae7ed98.svg', 1, 0),
(3, 'Heloiza Cunha', 'heloiza@gmail.com.br', '3aeeb53d05962f856848058de468f07a', '11998997367', 'Feminino', '2004-02-15', 'Web Design', 'ca034c92d400008d23307cda8dd562dd.svg', 0, 0),
(4, 'Kauan Fernandes', 'kauan@gmail.com', '935fbe59ab9c7135330664eb8af31ae4', '', 'Masculino', '2004-02-08', '', '', 2, 0),
(5, 'Elena Pereira', 'elena@gmail.com', 'fadf17141f3f9c3389d10d09db99f757', '', 'Feminino', '1998-05-12', '', '', 2, 0),
(6, 'Luiz', 'asas@asa', 'e10adc3949ba59abbe56e057f20f883e', '', 'Masculino', NULL, NULL, NULL, 2, 0),
(7, 'Bernardo', 'ber@gmail.com', 'df99f76fcb35a29e8fc9d9e5c3924712', '11954671872', 'Masculino', '2004-03-24', 'vagabundo', '95d32712df17ba30c292a9367c04abb1.svg', 2, 1),
(8, 'Diego Matioli', 'matioli.motta@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '22131213213', 'Outro', '0000-00-00', '', 'c9c40be006d74de53e206f915a6a53ee.svg', 0, 0),
(9, 'Otávio Pereira', 'otavio@pereir.com', '3acee203eba913796c1236d1839657f0', '', 'Masculino', NULL, NULL, NULL, 2, 0),
(10, 'Daniel', 'dani@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Masculino', NULL, NULL, NULL, 1, 0),
(11, 'Lourdes', 'lourdes@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Feminino', NULL, NULL, NULL, 2, 0),
(12, 'Luiza Linda', 'luiza222azevedo@gmail.com', 'ab4af78a8f617718ac991c3e1eda6b0e', '11984036151', 'Feminino', '2004-03-31', 'A melhor', NULL, 1, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`IdPost`) USING BTREE,
  ADD KEY `FOREIGN KEY` (`Author`) USING BTREE;

--
-- Índices para tabela `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`IdTag`) USING BTREE;

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `IdPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tags`
--
ALTER TABLE `tags`
  MODIFY `IdTag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Author` FOREIGN KEY (`Author`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
