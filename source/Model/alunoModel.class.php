<?php

namespace Gestor\Model;

use Gestor\Model\AbsConexaoBD;

class AlunoModel extends AbsConexaoBD{
    private $alunoId;
    private $alunoNome;
    private $alunoEmail;
    private $alunoSenha;

    public function __construct($alunoId = null, $alunoNome = null, $alunoEmail = null, $alunoSenha = null){
        parent::__construct();
        $this->alunoId = $alunoId;
        $this->alunoNome = $alunoNome;
        $this->alunoEmail = $alunoEmail;
        $this->alunoSenha = $alunoSenha;
    }

    /* Função para cadastrar um aluno no SGBD */
    public static function cadastraAluno(){

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
