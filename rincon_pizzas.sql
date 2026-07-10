
-- Banco de dados: `rincon_pizzas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(200) NOT NULL,
  `cpf` varchar(250) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cep` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `telefone`, `cpf`, `endereco`, `cep`) VALUES
(7, 'ian', '6199999999', '67423164989', 'CNB 12', '653-8590'),
(8, 'ian', '619999999', '456.678.693-02', 'CNB 10', '763-9844'),
(9, 'gabriel', '61888888888', '765-055-234-76', 'novo gama', '632-7654'),
(10, 'Joao', '6177777777777', '523.521.765.86', 'taguatinga', '532-6342'),
(11, 'Iago', '6143343333', '542.453.212.63', 'Vicente Pires', '432-4225'),
(12, 'pedro', '6122222222', '787.098.675.45', 'Novo gama', '654-8750'),
(13, 'Ian Cesar', '6167676767', '754324537542', 'riacho fundo', '4321543');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
