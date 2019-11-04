<?php

namespace Gestor\Controller;

use \Gestor\Model\AlunoModel;

use \Gestor\Model\ProfessorModel;

final class IndexController extends AbsController{
  protected static $mensagens;
  
  public function __construct(){
    self::$mensagens = array();
  }
  
  public static function index(){
    return self::view('index');
  }
  
  public static function viewProfessores(){
    return self::view('professores');
  }
  
  public static function viewCadastrar(){
    return self::view('cadastrar');
    
  }
  public static function viewDashboard(){
    return self::view('dashboard');
  }
  
  public static function cadastrarUsuario(){
    $userNome = $_POST['nomeUsuario'];
    $userEmail = $_POST['emailUsuario'];
    $userSenha = $_POST['senhaUsuario'];
    
    $discente_docente = $_POST['radio'];
    
    $matematica = $_POST['matematica'];
    $portugues = $_POST['portugues'];
    $ciencia = $_POST['ciencia'];
    $historia = $_POST['historia'];
    $geografia = $_POST['geografia'];
    $biologia = $_POST['biologia'];
    
    $checkDisciplinas = [
      $matematica,
      $portugues,
      $ciencia,
      $historia,
      $geografia,
      $biologia,
    ];
    
    $biografia = $_POST['biografia'];
    
    if(!empty($discente_docente)){
      //Verifica se o usuário é um aluno
      if($discente_docente === "discente"){
        
        //Verifica se os dados não estão vázios
        if(!empty($userNome) && !empty($userEmail) && !empty($userSenha)){
          
          $inseriu = (new AlunoModel(null, $userNome, $userEmail, $userSenha))->cadastraAluno();
          if($inseriu){
            
            $tk = self::geraTokenDeAcesso(null, $userNome, $userEmail);
            return self::view('dashboard');
            
          }
        }else{
          self::adicionaMensagemDeErro("Por favor, preencha todos os campos obrigatórios");
          return self::view('dashboard');
        }
        //Verifica se o usuário é professor    
      }else if($discente_docente == "docente"){
        
        //Verifica se os dados não estão vázios
        if(!empty($userNome) && !empty($userEmail) && !empty($userSenha) && !empty($checkDisciplinas) && !empty($biografia)){
          
          $inseriu = (new ProfessorModel(null, $userNome, $userEmail, $userSenha, $checkDisciplinas, $biografia, null))->cadastraProfessor();
          
          if($inseriu){
            return self::view('dashboard');
          }
        }else{
          self::adicionaMensagemDeErro("Por favor, preencha todos os campos obrigatórios");
          return self::view('dashboard');
        }
      }else{
        self::adicionaMensagemDeErro("Falha de execução! Por favor, contate o responsável pelo sistema");
      }
    }else{
      self::adicionaMensagemDeErro("Por favor, preencha todos os campos obrigatórios");
      return self::view('cadastrar');
    }
  }
  
  /* Função que irá tratar o login do usuário para acessar o sistema */
  public static function loginUsuario(){
    $userLogin = $_POST['userLogin'];
    $userSenha = $_POST['userSenha'];
    $discente_docente = $_POST['radio'];
    
    if(!empty($discente_docente)){
      
      if($discente_docente == "docente"){
        
        $profDados = $encontrado = (new ProfessorModel)->loginUsuario($userLogin, $userSenha);
        
        if($encontrado){
          self::criaCookie('prof', $profDados );
          
          return self::view("dashboard");
          
        }else if($encontrado == 0){
          self::adicionaMensagemDeErro("Usuário não encontrado");
          return self::view("index");
          
        }else{
          self::adicionaMensagemDeErro("Falha de execução! Por favor, contate o responsável pelo sistema");
          return self::view("index");
        }
        
      }else if($discente_docente == "discente"){
        $alunoDados = $encontrado = (new AlunoModel)->loginUsuario($userLogin, $userSenha);
        
        self::criaCookie('aluno', $alunoDados );
        
        if($encontrado){
          return self::view("dashboardAluno");
          
        }else if($encontrado == 0){
          
          self::adicionaMensagemDeErro("Usuário não encontrado");
          return self::view("index");
        }else{
          
          self::adicionaMensagemDeErro("Falha de execução! Por favor, contate o responsável pelo sistema");
          return self::view("index");
        }
        
      }else{
        self::adicionaMensagemDeErro("Falha de execução! Por favor, contate o responsável pelo sistema");
        return self::view("index");
      }
    }else{
      self::adicionaMensagemDeErro("Por favor, preencha todos os campos obrigatórios");
      return self::view("index");
    }
    
    
  }
  
  public static function adicionaMensagemDeErro($msg){
    self::$mensagens[] = $msg;
  }
  
}
