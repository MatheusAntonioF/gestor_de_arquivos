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
            self::adicionaMensagemDeErro("Arquivo não submetido");
        }
        
        //Recebe os dados via POST
        $arquivoNome = $_FILES['arquivo']['name'];
        $tmpArquivoNome = $_FILES['arquivo']['tmp_name'];
        $arquivoDesc = $_POST['arquivoDesc'];
        $profId = trim($_POST['profId']);
        $caminhoArquivo = "uploaded/" . $profId . "/" . $arquivoNome;

        //Cria diretório
        $diretorioArquivo = "uploaded/".$profId;
        if(!is_dir($diretorioArquivo)){
            mkdir($diretorioArquivo, 0777, true);
        }

        $verificou = self::verificaExtensaoArquivo($arquivoNome);

        if(!$verificou){
            self::adicionaMensagemDeErro("Arquivo não permitido");
            self::view('dashboard');
        }
        
        $submetido = (new ArquivoModel(null, $arquivoNome, $caminhoArquivo, $arquivoDesc, date("Y-m-d"), $profId))->uploadArquivo();
        
        if(!$submetido){
            self::adicionaMensagemDeErro("Problemas técnicos! Por favor contate o responsável pelo sistema");
            return false;
        }

        //Move arquivo para seu respectivo diretório
        $moveu = move_uploaded_file($tmpArquivoNome,$caminhoArquivo);

        if(!$moveu){
            self::adicionaMensagemDeErro("Problemas técnicos! Por favor contate o responsável pelo sistema");
            return false;
        }
       
        return self::view('dashboard');

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

    public static function adicionaMensagemDeErro($msg){
        self::$mensagensDeErro[] = $msg;
    }

}