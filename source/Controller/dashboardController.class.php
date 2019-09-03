<?php

namespace Gestor\Controller;

use TS\Filesystem\Path;

final class DashboardController extends AbsController{
    protected static $mensagensDeErro;

    public function __construct(){
        self::$mensagensDeErro = array();
    }

    public static function index(){
        return self::view('index');
    }

    /* Função para tratar o upload do arquivo */
    public function uploadArquivo(){
        if(!isset($_FILES['arquivo'])){
            //Arquivo não submetido
            self::$mensagensDeErro[] = "Arquivo não submetido";
        }
        
        //Recebe os dados via POST
        $arquivoNome = $_FILES['arquivo']['name'];
        $tmpArquivoNome = $_FILES['arquivo']['tmp'];

        
        /* Somente arquivos PDF */
        $extensãoPermitida = array("pdf");

        $nome_paraVerificacao = Path::info($_FILES['arquivo']['name']);

        $extensao = $nome_paraVerificacao->extension();
        
        if(!in_array($extensao, $extensãoPermitida)){
            self::$mensagensDeErro[] = "Arquivo não permitido";
        }

        // return self::view('dashboard');

    }
}