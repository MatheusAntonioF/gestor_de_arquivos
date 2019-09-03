<?php

namespace \Gestor\Model;

use Gestor\Model\AbsConexaoBD;

class ProfessorModel extends AbsConexaoBD{
    private $profId;
    private $profNome;
    private $profEmail;
    private $profSenha;
    private $profDisciplina;
    private $profBiografia;
    private $profFotoPerfil;

    public function __construct($profId = null, $profNome = null, $profEmail = null, $profSenha = null, $profDisciplina = null, $profBiografia, $profFotoPerfil){
        parent::__construct();
        $this->profCodigo = $profId;
        $this->profNome = $profNome;
        $this->profEmail = $profEmail;
        $this->profSenha = $profSenha;
        $this->profDisciplina = $profDisciplina;
        $this->profBiografia = $profBiografia;
        $this->profFotoPerfil = $profFotoPerfil;
    }

    /* Cadastra novo professor no sistema */
    public function cadastraProfessor(){
       
    }
    
    public function getProfId(){
        return $this->profCodigo;
    }

    public function getProfNome(){
        return $this->profNome();
    }
    public function setProfNome($profNome){
        return $this->profNome = $profNome;
    }

    public function getProfEmail(){
        return $this->profEmail;
    }
    public function setProfEmail($profEmail){
        return $this->profEmail = $profEmail;
    }

    public function getProfSenha(){
        return $this->profSenha;
    }
    public function setProfSenha($profSenha){
        return $this->profSenha = $profSenha;
    }

    public function getProfDisciplina(){
        return $this->proEmail;
    }
    public function setProfDisciplina($profDisciplina){
        return $this->profDisciplina = $profDisciplina;
    }

    public function getProfBiografia(){
        return $this->profBiografia;
    }
    public function setProfBiografia($profBiografia){
        return $this->profBiografia = $profBiografia;
    }

    public function getProfFotoPerfil(){
        return $this->profFotoPerfil;
    }
    public function setProfFotoPerfil($profFotoPerfil){
        return $this->profFotoPerfil = $profFotoPerfil;
    }



}
