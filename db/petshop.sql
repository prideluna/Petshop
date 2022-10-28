
--
-- Banco de dados: `petshop`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `raca` varchar(255) NOT NULL,
  `tel_dono` char(11) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Estrutura para tabela `atende`
--

CREATE TABLE `atende` (
  `id` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `id_animal` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `atende`
--
ALTER TABLE `atende`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_animal` (`id_animal`),
  ADD KEY `id_funcionario` (`id_funcionario`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `atende`
--
ALTER TABLE `atende`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `atende`
--
ALTER TABLE `atende`
  ADD CONSTRAINT `atende_ibfk_1` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id`),
  ADD CONSTRAINT `atende_ibfk_2` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`id`);
COMMIT;


--
-- Despejando dados para a tabela `animal`
--

INSERT INTO `animal` (`id`, `nome`, `raca`, `tel_dono`, `data_cadastro`) VALUES
(1, 'Piper', 'Chow Chow', '99999999', '2022-10-21 00:10:22');

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `email`, `data_cadastro`) VALUES
(1, 'isaac', 'isaac.newton@gmail.com', '2022-10-20 00:00:00');


--
-- Despejando dados para a tabela `atende`
--

INSERT INTO `atende` (`id`, `id_funcionario`, `id_animal`, `data`) VALUES
(1, 1, 1, '2022-10-21 00:11:58');


