<?php

namespace \Gestor\Model;

use Gestor\Model\AbsConexaoBD;

class ArquivoModel extends AbsConexaoBD{
    private $arquivoId;
    private $arquivoNome;
    private $arquivo;
    private $arquivoDesc;
    private $arquivo_dataUpload;
    /* Foreign key do SGBD */
    private $professor_profId;

    public function __construct($arquivoId = null, $arquivoNome = null, $arquivo = null, $arquivoDesc = null, $arquivo_dataUpload = null, $professor_profId){
        parent::__construct();
        $this->arquivoId = $arquivoId;
        $this->arquivoNome = $arquivoNome;
        $this->arquivo = $arquivo;
        $this->arquivoDesc = $arquivoDesc;
        $this->arquivo_dataUpload = $arquivo_dataUpload;
        $this->professor_profId = $professor_profId;
    }

    /*Função para submeter arquivo no SGBD */
    public function uploadArquivo(){
        $query = "INSERT INTO Arquivo (arquivoNome, arquivo, arquivoDesc, arquivo_dataUpload,
         Professor_profId)
         VALUES (`?`, ?, `?`, ?, ?)";

        $arrayDeValores = array($this->getArquivoNome(), $this->getArquivo(), $this->getArquivo_dataUpload(),
        $this->getProfessor_profId());

        $executou = self::executaPs($query, $arrayDeValores);
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