<?php
	
	namespace nivelamento\teste;

	class Usuario
	{
		private $nome;
		private $sobrenome;
		private $tratamento;
		private $genero;


		public function __construct(string $nome, string $genero)
		{
			$nomeSobrenome = explode(" ", $nome, 2);

			if($nomeSobrenome[0] === ""){

				$this->nome = "Nome inválido";
			} else{

				$this->nome = $nomeSobrenome[0];
			}

			if($nomeSobrenome[1] === null){

				$this->sobrenome = "Sobrenome inválido";
			} else{

				$this->sobrenome = $nomeSobrenome[1];
			}

			$this->adicionaTratamento($nome, $genero);

			$this->genero = $genero;

		}

		public function getNome(): string
		{
			return $this->nome;
		}

		public function getSobrenome(): string
		{
			return $this->sobrenome;
		}

		public function adicionaTratamento(string $nome, string $genero): void
		{
			if($genero === "M"){

				$this->tratamento = preg_replace('/^(\w+)\b/', 'Sr.', $nome, 1);
			}

			if($genero === "F"){

				$this->tratamento = preg_replace('/^(\w+)\b/', 'Sra.', $nome, 1);
			}

			if($genero === "ND"){

				$this->tratamento = preg_replace('/^(\w+)\b/', 'Sr(a).', $nome, 1);
			}
		}

		public function setTratamento(string $tratamento): void
		{
			$this->tratamento = $tratamento;
		}

		public function getTratamento(): string
		{
			return $this->tratamento;
		}

		public function getGenero(): string
		{
			return $this->genero;
		}
	}

