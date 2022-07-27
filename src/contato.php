<?php

	namespace nivelamento\teste;

	class Contato
	{
		private $email;

		private $endereco;

		private $cep;

		public function __construct(string $email, string $endereco, string $cep)
		{

			if($this->validaEmail($email) !== false){

				$this->setEmail($email);

			}else {

				$this->setEmail("E-mail inválido!");
			}

			$this->endereco = $endereco;

			$this->cep = $cep;
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
	}