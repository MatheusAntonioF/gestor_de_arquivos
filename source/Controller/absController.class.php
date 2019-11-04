<?php

namespace Gestor\Controller;

use Gestor\Router;

abstract class AbsController{
	private static $storage = array();
	
	// Redireciona a ṕagina para a respectiva view dentro da pasta /views
	protected final function view($_name, array $vars = []){
		$_nomeDoArquivo = __DIR__."/../../views/{$_name}.php";
		if(!file_exists($_nomeDoArquivo)){
			die("View {$_name} não foi encontrada");
		}
		include_once $_nomeDoArquivo;
	}
	
	//Retorna os parâmetros passadas pela URL
	protected final function params($name){
		$params =  Router::getRequest();
		
		if(!isset($params['name'])){
			return null;
		}
		return $params['name'];
	}
	
	//Gera token de acesso para o usuário
	protected final function geraTokenDeAcesso($iss, $name, $email){
		//Cabeçalho do token
		$header = [
			'alg' => 'HS256',
			'typ' => 'JWT'
		];
		$header = json_encode($header);
		$header = base64_encode($header);
		
		if(is_null($iss)){
			$iss = "localhost";
		}
		//Corpo do token
		$payload = [
			'iss' => 'localhost',
			'name' => "{$name}",
			'email' => "{$email}",
		];
		$payload = json_encode($payload);
		$payload = base64_encode($payload);
		
		$cryptoPass = md5(self::getSenhaToken());
		//Assinatura do token
		$signature = hash_hmac('sha256',"$header.$payload", "$cryptoPass", true);
		
		return $signature;
		
	}
	protected final static function leCookie( $key ){
		
		if( isset( $_COOKIE[ $key ] ) ){
			return $_COOKIE[ $key ];
		}else{
			
			if( isset( static::$storage[$key] ) )
			return static::$storage[$key];
		}
	}
	
	public final static function criaCookie( $key, $value){
		self::$storage[$key] = $value;
		setcookie( $key , $value , time() + ( 2 * 3600 ) );
	}
	
	//Redireciona a página para um caminho específico
	protected final function redirect(string $to){
		$url = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
		$pastas = explode('?',$_SERVER['REQUEST_URI'])[0];
		
		header('Location:' . '?r=/' . $to);
		exit();
	}
	
	//GETTER AND SETTER
	protected static function getSenhaToken(){
		$senhaToken = "Nikkvvlsr31";
		
		return md5($senhaToken);
	}
	
}
