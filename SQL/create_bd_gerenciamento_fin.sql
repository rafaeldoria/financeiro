--
-- Database: `gerenciamento_fin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE `contas` (
  `conta_id` int(11) UNSIGNED NOT NULL,
  `desc_conta` varchar(100) NOT NULL,
  `sigla_conta` char(3) NOT NULL,
  `dt_created` datetime NOT NULL,
  `dt_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` (`conta_id`, `desc_conta`, `sigla_conta`, `dt_created`, `dt_updated`) VALUES
(1, 'Financeiro', 'fin', '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(2, 'Recursos Humanos', 'rh', '2018-04-28 00:00:00', '2018-04-28 21:39:32'),
(3, 'Administrativo', 'adm', '2018-04-28 00:00:00', '2018-04-28 00:00:00'),
(5, 'Tecnologia da Informação', 'ti', '2018-04-29 16:00:00', '2018-04-29 16:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacoes`
--

CREATE TABLE `transacoes` (
  `transacao_id` int(11) UNSIGNED NOT NULL,
  `desc_transacao` varchar(256) NOT NULL,
  `dt_realizado` date DEFAULT NULL,
  `dt_previsto` date NOT NULL,
  `valor` float(10,0) NOT NULL,
  `status` enum('A','F','C') NOT NULL COMMENT 'A = Aberta, F = Fechada, C = Cancelada',
  `usuario_responsavel` int(11) UNSIGNED NOT NULL,
  `usuario_acao` int(11) UNSIGNED DEFAULT NULL,
  `conta_id` int(11) UNSIGNED NOT NULL,
  `dt_created` datetime NOT NULL,
  `dt_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `transacoes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `nome_usuario` varchar(256) NOT NULL,
  `conta_id` int(10) UNSIGNED NOT NULL,
  `permissao` int(2) NOT NULL DEFAULT '5' COMMENT '5 = user, 4 = user_advanced, 3 = supervisor, 2 = gerente, 1 = diretor, 0 = admin	',
  `dt_created` datetime NOT NULL,
  `dt_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`conta_id`);

--
-- Indexes for table `transacoes`
--
ALTER TABLE `transacoes`
  ADD PRIMARY KEY (`transacao_id`),
  ADD KEY `usario_responsavel` (`usuario_responsavel`),
  ADD KEY `usuario_acao` (`usuario_acao`),
  ADD KEY `conta_id` (`conta_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `conta_id` (`conta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contas`
--
ALTER TABLE `contas`
  MODIFY `conta_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transacoes`
--
ALTER TABLE `transacoes`
  MODIFY `transacao_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `transacoes`
--
ALTER TABLE `transacoes`
  ADD CONSTRAINT `transacoes_ibfk_1` FOREIGN KEY (`conta_id`) REFERENCES `contas` (`conta_id`),
  ADD CONSTRAINT `transacoes_ibfk_2` FOREIGN KEY (`usuario_responsavel`) REFERENCES `usuarios` (`usuario_id`),
  ADD CONSTRAINT `transacoes_ibfk_3` FOREIGN KEY (`usuario_acao`) REFERENCES `usuarios` (`usuario_id`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`conta_id`) REFERENCES `contas` (`conta_id`);
COMMIT;

