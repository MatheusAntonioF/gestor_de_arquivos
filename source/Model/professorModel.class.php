<?php

namespace Gestor\Model;

use Gestor\Model\AbsConexaoBD;

class ProfessorModel extends AbsConexaoBD{
    private $profId;
    private $profNome;
    private $profEmail;
    private $profSenha;
    private $profDisciplina;
    private $profBiografia;
    private $profFotoPerfil;

    public function __construct($profId = null, $profNome = null, $profEmail = null, $profSenha = null, $profDisciplina = null, $profBiografia = null, $profFotoPerfil = null){
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
        $this->iniciaConexaoBD();

        //Verifica se já existe um professor com o email cadastrado
        $query = "SELECT profId FROM Professor WHERE profEmail = ?";

        $arrayDeValores = array($this->getProfEmail());

        $executou = self::executaPs($query, $arrayDeValores);

        //Verifica se a consulta foi bem sucedida
        if($executou){
            if($this->qtdDeLinhas() >= 1){
                return 0;
            }else{
                unset($query);
            }
        }
       
        $query = "INSERT INTO Professor (profNome, profEmail, profSenha, profDisciplina, profBiografia) VALUES (?, ?, ?, ?, ?)";

        //Filtrar o array para retirar os valores nulos
        $this->setProfDisciplina(array_filter(($this->getProfDisciplina())));
        
        //É preciso converter as disciplinas para JSON
        $this->setProfDisciplina(json_encode($this->getProfDisciplina()));
        
        $arrayDeValores = array($this->getProfNome(), $this->getProfEmail(), $this->getProfSenha(), $this->getProfDisciplina(), $this->getProfBiografia());

        $executou = self::executaPs($query, $arrayDeValores);

        if($executou){
            return true;
        }else{
            return false;
        }
    }

    public function loginUsuario($profEmail, $profSenha){
        $this->iniciaConexaoBD();

        $query = "SELECT profId, profNome, profEmail FROM Professor WHERE profEmail = ? AND profSenha = ? ";

        $arrayDeValores = array($profEmail, $profSenha);

        $executou = self::executaPs($query, $arrayDeValores);

        if($executou){
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
            "profNome" => $objetoBD['profNome'],
            "profEmail" => $objetoBD['profEmail'],
            "profId" => $objetoBD['profId']
        );
        return $arrayDados;
    }


    //GETTERS AND SETTERS
    
    public function getProfId(){
        return $this->profCodigo;
    }

    public function getProfNome(){
        return $this->profNome;
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
        return $this->profDisciplina;
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
