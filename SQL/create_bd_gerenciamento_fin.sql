CREATE TABLE `gerenciamento_fin`.`contas` (
`conta_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
`desc_conta` VARCHAR(100) NOT NULL ,
`sigla_conta` CHAR(3) NOT NULL ,
`dt_created` DATE NOT NULL ,
`dt_update` DATE NOT NULL ,
PRIMARY KEY (`conta_id`)) ENGINE = InnoDB;

CREATE TABLE `permissoes` (
  `premissao_id` INT UNSIGNED NOT NULL,
  `desc_permissao` varchar(100) NOT NULL,
  `dt_created` date NOT NULL,
  `dt_updated` int(11) NOT NULL,
PRIMARY KEY (`premissao_id`)) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `gerenciamento_fin`.`usuarios` ( 
`usuario_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
`login` VARCHAR(100) NOT NULL ,
`senha` VARCHAR(256) NOT NULL ,
`nome_usuario` VARCHAR(256) NOT NULL ,
`conta_id` INT UNSIGNED NOT NULL ,
`permissao_id` INT UNSIGNED NOT NULL ,
`dt_created` DATE NOT NULL ,
`dt_updated` DATE NOT NULL , 
PRIMARY KEY (`usuario_id`),
INDEX (`conta_id`),
INDEX (`permissao_id`)) ENGINE = InnoDB;

CREATE TABLE `gerenciamento_fin`.`transacoes` (
`transacao_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
`desc_transacao` VARCHAR(256) NOT NULL ,
`dt_realizado` DATE NULL ,
`dt_previsto` DATE NOT NULL ,
`valor` FLOAT NOT NULL ,
`status` ENUM('A','F','C')) NOT NULL DEFAULT 'A' COMMENT 'A = Aberta, F = Fechada, C = Cancelada',
`usario_responsavel` INT UNSIGNED NOT NULL ,
`usuario_acao` INT UNSIGNED NOT NULL ,
`conta_id` INT UNSIGNED NOT NULL ,
`dt_created` DATE NOT NULL ,
`dt_updated` INT NOT NULL ,
PRIMARY KEY (`transacao_id`),
INDEX (`usario_responsavel`),
INDEX (`usuario_acao`),
INDEX (`conta_id`)) ENGINE = InnoDB;

ALTER TABLE `usuarios` ADD FOREIGN KEY (`conta_id`) REFERENCES `contas`(`conta_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `usuarios` ADD FOREIGN KEY (`permissao_id`) REFERENCES `permissoes`(`premissao_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `transacoes` ADD FOREIGN KEY (`conta_id`) REFERENCES `contas`(`conta_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `transacoes` ADD FOREIGN KEY (`usario_responsavel`) REFERENCES `usuarios`(`usuario_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `transacoes` ADD FOREIGN KEY (`usuario_acao`) REFERENCES `usuarios`(`usuario_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
