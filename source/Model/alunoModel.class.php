<?php

namespace Gestor\Model;

use Gestor\Model\AbsConexaoBD;

class AlunoModel extends AbsConexaoBD{
	private $alunoId;
	private $alunoNome;
	private $alunoEmail;
	private $alunoSenha;
	
	public function __construct($alunoId = null, $alunoNome = null, $alunoEmail = null, $alunoSenha = null){
		$this->alunoId = $alunoId;
		$this->alunoNome = $alunoNome;
		$this->alunoEmail = $alunoEmail;
		$this->alunoSenha = $alunoSenha;
	}
	
	/* Função para cadastrar um aluno no SGBD */
	public function cadastraAluno(){
		$this->iniciaConexaoBD();
		
		//Verifica se já existe um aluno com o email cadastrado no sistema
		$query = "SELECT alunoId FROM Aluno WHERE alunoEmail = ?";
		
		$arrayDeValores = array($this->getAlunoEmail());
		
		$executou = self::executaPs($query, $arrayDeValores);
		
		//Verifica se a consulta foi bem sucedida
		if($executou){
			if($this->qtdDeLinhas() == 1){
				return 0;
				exit();
			}else{
				unset($query);
			}
		}
		
		$query = "INSERT INTO Aluno (alunoNome, alunoEmail, alunoSenha) VALUES (?, ?, ?)";
		
		$arrayDeValores = array($this->getAlunoNome(), $this->getAlunoEmail(), $this->getAlunoSenha());
		
		$executou = self::executaPs($query, $arrayDeValores);
		
		//Verifica se a inserção foi bem sucedida
		if($executou){
			return true;
		}else{
			return false;
		}
		
	}
	
	/* Função para realizar login */
	public function loginUsuario($alunoEmail, $alunoSenha){
		$this->iniciaConexaoBD();
		
		$query = "SELECT alunoId ,alunoNome, alunoEmail FROM Aluno WHERE alunoEmail = ? AND alunoSenha = ?";
		
		$arrayDeValores = array($alunoEmail, $alunoSenha);
		
		$executou = self::executaPs($query, $arrayDeValores);
		
		//Verifica se a execução foi bem sucedida
		if($executou){
			//Verifica se o usuário foi encontrado no BD
			if($this->qtdDeLinhas() == 1){
				//Continua
			}else{
				return 0;
			}
		}else{
			return false;
		}
		
		$leu = $objetoBD = $this->leTabelaBD();
		
		if(!$leu){
			return false;
		}
		
		$arrayDados = array(
			"alunoNome" => $objetoBD['alunoNome'],
			"alunoEmail" => $objetoBD['alunoEmail'],
			"alunoId" => $objetoBD['alunoId']
		);
		return $arrayDados;
	}
	
	/* Função para excluir um aluno no SGBD */
	public static function excluiAluno(){
		
	}
	
	/* Função para editar um aluno no SGBD */
	public static function editaAluno(){
		
	}
	
	/* Função para retornar um aluno do SGBD  */
	public static function retornaAluno(){
		
	}
	
	
	
	/**
	* Get the value of alunoId
	*/ 
	public function getAlunoId(){
		return $this->alunoId;
	}
	
	/**
	* Get the value of alunoNome
	*/ 
	public function getAlunoNome(){
		return $this->alunoNome;
	}
	
	/**
	* Set the value of alunoNome
	*
	* @return  self
	*/ 
	public function setAlunoNome($alunoNome){
		return $this->alunoNome = $alunoNome;
	}
	
	/**
	* Get the value of alunoEmail
	*/ 
	public function getAlunoEmail(){
		return $this->alunoEmail;
	}
	
	/**
	* Set the value of alunoEmail
	*
	* @return  self
	*/ 
	public function setAlunoEmail($alunoEmail){
		return $this->alunoEmail = $alunoEmail;
	}
	
	/**
	* Get the value of alunoSenha
	*/ 
	public function getAlunoSenha(){
		return $this->alunoSenha;
	}
	
	/**
	* Set the value of alunoSenha
	*
	* @return  self
	*/ 
	public function setAlunoSenha($alunoSenha){
		return $this->alunoSenha = $alunoSenha;   
	}
}
