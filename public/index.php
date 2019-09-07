<?php
/* Classe responsável por tratar as rotas da aplicação redirecionando os 
dados para suas devidas Controllers */

require_once __DIR__.'/../vendor/autoload.php';

use Gestor\Router;

$app = new Router();

/* Rota de início */
$app->get('/', function(){
    return \Gestor\Controller\IndexController::index();
});

/*Rota de Login */
$app->post('/loginUsuario', function(){
    return \Gestor\Controller\IndexController::loginUsuario();
});

/* Rota de uploadArquivo */
$app->post('/dashboad/uploadArquivo', function(){
    return \Gestor\Controller\DashboardController::uploadArquivo();
});

$app->get('/viewCadastrar', function(){
    return \Gestor\Controller\IndexController::viewCadastrar();
});

$app->post('/cadastrarUsuario', function(){
    return \Gestor\Controller\IndexController::cadastrarUsuario();
});


$app->run();