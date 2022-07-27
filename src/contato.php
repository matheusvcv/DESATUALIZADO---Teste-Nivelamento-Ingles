<?php

	namespace nivelamento\teste;

	class Contato
	{
		private $email;

		private $endereco;

		private $cep;

		private $telefone;

		public function __construct(string $email, string $endereco, string $cep, string $telefone)
		{

			if($this->validaEmail($email) !== false){

				$this->setEmail($email);

			}else {

				$this->setEmail("E-mail inválido!");
			}

			$this->endereco = $endereco;

			$this->cep = $cep;

			if($this->validaTelefone($telefone)){

				$this->setTelefone($telefone);
			}else{

				$this->setTelefone("Telefone inválido.");
			}

			
		}

		public function getUsuario(): string
		{
			
			$arroba = strpos($this->email, '@');

			if($arroba === false){
				
				return "Nome de usuário inválido!";
			}else{

				return substr($this->email, 0, $arroba);
			}
		}
		
		public function validaEmail(string $email)
		{
			return filter_var($email, FILTER_VALIDATE_EMAIL);
		}

		public function setEmail(string $email): void
		{
			$this->email = $email;
		}

		public function getEmail(): string
		{
			return $this->email; 
		}

		public function getEndereco(): string
		{

			$enderecoCep= [$this->endereco, $this->cep];

			return implode(' - ', $enderecoCep);
		}

		public function getTelefone(): string
		{
			return $this->telefone;
		}

		public function validaTelefone(string $telefone)
		{
			return preg_match('/^[0-9]{5}-[0-9]{4}$/', $telefone, $encontrados);
		}

		private function setTelefone(string $telefone): void
		{
			$this->telefone = $telefone;
		}


	}