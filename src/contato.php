<?php

	namespace nivelamento\teste;

	class Contato
	{
		private $email;

		public function __construct(string $email)
		{
			$this->email = $email;

			if($this->validaEmail($email) !== false){

				$this->setEmail($email);

			}else {

				$this->setEmail("E-mail inválido!");
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
		
		public function validaEmail(string $email): string
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
	}