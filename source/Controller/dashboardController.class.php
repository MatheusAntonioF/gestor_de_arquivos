<?php

namespace Gestor\Controller;

use \Gestor\Model\ArquivoModel;

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

        $caminhoArquivo = "/".$arquivoNome;
        $arquivoDesc = $_POST['arquivoDesc'];
        $profId = $_POST['profId'];

        $verificou = self::verificaExtensaoArquivo($arquivoNome);

        if(!$verificou){
            self::$mensagensDeErro[] = "Arquivo não permitido";
            self::view('dashboard');
        }
        var_dump($arquivoNome);
        $submetido = (new ArquivoModel(null, $arquivoNome, $caminhoArquivo, $arquivoDesc, date("Y-m-d"), $profId))->uploadArquivo();
        if($submetido){
            echo "FOI";
        }else{
            echo "NÂO FOI";
        }

       
        // return self::view('dashboard');

    }

    public static function verificaExtensaoArquivo($arquivo){
        /* Somente arquivos PDF */
        $extensãoPermitida = array("pdf");

        /* Utiliza a extensão Path::info para verificar a extensão está contida dentro dos 
        arquivos permitidos */
        $nome_paraVerificacao = Path::info($arquivo);

        $extensao = $nome_paraVerificacao->extension();
        
        if(!in_array($extensao, $extensãoPermitida)){
            return false;
        }
        return true;
    }
}