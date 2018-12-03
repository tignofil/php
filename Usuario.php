<?php 

class Usuario{

	private $cpf;
	private $nome;
	private $email;
	private $dataNasc;
	private $senha;
	private $situacao;
	private $nivelAcesso;


	public function setCpf($cpf){
		
		$this->cpf = $cpf;
	}

	public function getCpf():string{

		return $this->cpf;
	}

	public function setNome($nome){
		
		$this->nome = $nome;
	}

	public function getNome():string{

		return $this->nome;
	}

	public function setEmail($email){
		
		$this->email = $email;
	}

	public function getEmail():string{

		return $this->email;
	}

	public function setDataNasc($dataNasc){
		
		$this->dataNasc = $dataNasc;
	}

	public function getDataNasc():string{

		return $this->dataNasc;
	}

	public function setSenha($senha){
		
		$this->senha = $senha;
	}

	public function getSenha():string{

		return $this->senha;
	}

	public function setSituacao($situacao){
		
		$this->situacao = $situacao;
	}

	public function getSituacao():string{

		return $this->situacao;
	}

	public function setNivelAcesso($nivelAcesso){
		
		$this->nivelAcesso = $nivelAcesso;
	}

	public function getNivelAcesso():string{

		return $this->nivelAcesso;
	}


}


?>