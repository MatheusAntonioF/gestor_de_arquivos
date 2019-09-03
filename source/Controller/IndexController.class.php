<?php

namespace Gestor\Controller;

final class IndexController extends AbsController{
    protected static $mensagensDeErro;

    public function __construct(){

    }

    public static function index(){
        return self::view('index');
    }

    public static function viewCadastrar(){
        return self::view('cadastrar');

    }


    /* Função que irá tratar o login do usuário para acessar o sistema */
    public static function loginUsuario(){
        $userLogin = $_POST['userLogin'];
        $userSenha = $_POST['userSenha'];

        return self::view('dashboard');

    }
}