<?php

namespace Gestor\Model;

use Gestor\Model\AbsConexaoBD;

class ArquivoModel extends AbsConexaoBD{
	private $arquivoId;
	private $arquivoNome;
	private $arquivo;
	private $arquivoDesc;
	private $arquivo_dataUpload;
	/* Foreign key do SGBD */
	private $professor_profId;
	
	public function __construct($arquivoId = null, $arquivoNome = null, $arquivo = null, $arquivoDesc = null, $arquivo_dataUpload = null, $professor_profId = null){
		$this->arquivoId = $arquivoId;
		$this->arquivoNome = $arquivoNome;
		$this->arquivo = $arquivo;
		$this->arquivoDesc = $arquivoDesc;
		$this->arquivo_dataUpload = $arquivo_dataUpload;
		$this->professor_profId = $professor_profId;
	}
	
	/*Função para submeter arquivo no SGBD */
	public function uploadArquivo(){
		$this->iniciaConexaoBD();
		
		$query = "INSERT INTO Arquivo (arquivoNome, arquivo, arquivoDesc, arquivo_dataUpload, Professor_profId) VALUES (?, ?, ?, ?, ?)";
		
		$arrayDeValores = array($this->getArquivoNome(), $this->getArquivo(), $this->getArquivoDesc(), $this->getArquivo_dataUpload(),
		$this->getProfessor_profId());
		
		$executou = self::executaPs($query, $arrayDeValores);
		
		if($executou){
			return true;
		}else{
			return false;
		}
	}
	
	public function retornaArquivosDoProfessor($profId){
		$this->iniciaConexaoBD();
		
		$query = "SELECT * FROM Arquivo WHERE Professor_profId = ?";
		
		$arrayDeValores = array($profId);
		
		$executou = self::executaPs($query, $arrayDeValores);
		
		if($executou){
			//Continua
		}else{
			return "Não foram encontrados arquivos submetidos";
		}
		
		$leu = $objetoBD =  $this->pdoStatment->fetchAll();
		
		if(!$leu){
			return false;
		}
		
		$arrayDados = array();
		foreach($objetoBD as $obj){
			
			//Pega o nome sem a exetensão
			$aux = explode(".",$obj['arquivoNome']);
			$obj['arquivoNome'] = $aux[0];
			
			//Converte a data para formato desejado
			$aux = explode("-", $obj['arquivo_dataUpload']);
			$obj['arquivo_dataUpload'] = $aux['2'] . "/" . $aux['1'] . "/" . $aux['0'];
			
			$arrayDados[] = [
				
				"arquivoId" => $obj['arquivoId'],
				"arquivoNome" => $obj['arquivoNome'],
				"arquivo" => $obj['arquivo'],
				"arquivoDesc" => $obj['arquivoDesc'],
				"arquivo_dataUpload" => $obj['arquivo_dataUpload'],
				"Professor_profId" => $obj['Professor_profId']
				
			];
		}
		
		return $arrayDados;
	}
	
	public function retornaTodosOsArquivos(){
		$this->iniciaConexaoBD();
		
		$query = "SELECT * FROM Arquivo";
		
		$executou = self::executaPs($query,'');
		
		if($executou){
			//Continua
		}else{
			return "Não foram encontrados arquivos submetidos";
		}
		
		$leu = $objetoBD = $this->pdoStatment->fetchAll();
		
		if(!$leu){
			return false;
		}
		
		$arrayDados = array();
		foreach($objetoBD as $obj){
			
			//Pega o nome sem a exetensão
			$aux = explode(".",$obj['arquivoNome']);
			$obj['arquivoNome'] = $aux[0];
			
			//Converte a data para formato desejado
			$aux = explode("-", $obj['arquivo_dataUpload']);
			$obj['arquivo_dataUpload'] = $aux['2'] . "/" . $aux['1'] . "/" . $aux['0'];
			
			$arrayDados[] = [
				
				"arquivoId" => $obj['arquivoId'],
				"arquivoNome" => $obj['arquivoNome'],
				"arquivo" => $obj['arquivo'],
				"arquivoDesc" => $obj['arquivoDesc'],
				"arquivo_dataUpload" => $obj['arquivo_dataUpload'],
				"Professor_profId" => $obj['Professor_profId']
				
			];
		}
		
		return $arrayDados;
	}
	
	
	/**
	* Get the value of arquivoId
	*/ 
	public function getArquivoId()
	{
		return $this->arquivoId;
	}
	
	
	/**
	* Get the value of arquivoNome
	*/ 
	public function getArquivoNome(){
		return $this->arquivoNome;
	}
	
	/**
	* Set the value of arquivoNome
	*
	* @return  self
	*/ 
	public function setArquivoNome($arquivoNome){
		$this->arquivoNome = $arquivoNome;
		
		return $this;
	}
	
	/**
	* Get the value of arquivo
	*/ 
	public function getArquivo(){
		return $this->arquivo;
	}
	
	/**
	* Set the value of arquivo
	*
	* @return  self
	*/ 
	public function setArquivo($arquivo){
		$this->arquivo = $arquivo;
		
		return $this;
	}
	
	/**
	* Get the value of arquivoDesc
	*/ 
	public function getArquivoDesc(){
		return $this->arquivoDesc;
	}
	
	/**
	* Set the value of arquivoDesc
	*
	* @return  self
	*/ 
	public function setArquivoDesc($arquivoDesc){
		$this->arquivoDesc = $arquivoDesc;
		
		return $this;
	}
	
	/**
	* Get the value of arquivo_dataUpload
	*/ 
	public function getArquivo_dataUpload(){
		return $this->arquivo_dataUpload;
	}
	
	
	/**
	* Get the value of professor_profId
	*/ 
	public function getProfessor_profId(){
		return $this->professor_profId;
	}
	
	
	
	
	
}
