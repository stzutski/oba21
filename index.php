	<?php 
  require_once('config.php');

  require_once('vendor/autoload.php');

  $_page='';

  use \Slim\Slim;
  $app = new \Slim\Slim();  
  
  $app->get('/', function () {
    //echo 'inicial';
    
    include_once('php/template/includes/header-login.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    include_once('php/template/includes/footer-login.tpl.php');
    
  });  
    
  
  $app->get('/login', function () {
    
    
    include_once('php/template/includes/header-login.tpl.php');
    //include_once('php/template/includes/top-menu.tpl.php');
    include_once('php/template/includes/form.login.tpl.php');
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
  
  $app->get('/recuperar-acesso', function () {
    
    
    include_once('php/template/includes/header-login.tpl.php');
    //include_once('php/template/includes/top-menu.tpl.php');
    include_once('php/template/includes/form-lost.login.tpl.php');
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
    
  
  $app->get('/senha-atualizada', function () {
    
    
    include_once('php/template/includes/header-login.tpl.php');
    //include_once('php/template/includes/top-menu.tpl.php');
    include_once('php/template/includes/pwd-recovery.tpl.php');
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
    
  
  $app->get('/cadastro', function () {
    
    
    include_once('php/template/includes/header-login.tpl.php');
    //include_once('php/template/includes/top-menu.tpl.php');
    //echo 'cadastro de usuario';
    include_once('php/template/includes/form.cadastro-inicial.tpl.php');
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
    
  
  $app->get('/politicas', function () {
    
    
    include_once('php/template/includes/header-login.tpl.php');
    //include_once('php/template/includes/top-menu.tpl.php');
    //echo 'cadastro de usuario';
    include_once('php/template/includes/politicas.tpl.php');
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
    
  
  $app->get('/confirmar-email', function () {
    
    
    include_once('php/template/includes/header-login.tpl.php');
    //include_once('php/template/includes/top-menu.tpl.php');
    //echo 'confirmar email do usuario';
    include_once('php/template/includes/msg.confirme.email.tpl.php');
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
    
  
  $app->get('/confirmar-email/resend', function () {
    
    
    include_once('php/template/includes/header-login.tpl.php');
    //include_once('php/template/includes/top-menu.tpl.php');
    //echo 'confirmar email do usuario';
    include_once('php/template/includes/resend.msg.confirme.email.tpl.php');
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
    
  
  $app->get('/painel', function () {
    
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    echo 'painel do usuario';
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  
  $app->get('/servicos', function () {
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    include_once('php/template/includes/servicos-escolha.tpl.php');
    //echo 'Serviços disponíveis';
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  
  $app->get('/servicos-configuracao', function () {
    
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    echo 'Configurações do Serviço';
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  
  $app->get('/cobrancas-configuracao', function () {
    
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    echo 'Dados para cobrança';
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  
  $app->get('/cobrancas-gerenciar', function () {
    
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    echo 'Minhas cobranças';
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  
  $app->get('/ficha-cadastral', function () {
    
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    echo 'Ficha Cadastral do Cliente e Dependentes';
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  
  $app->get('/meus-arquivos-upload', function () {
    
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    echo 'Uploads de Arquivos do Cliente';
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  
  $app->get('/meus-arquivos', function () {
    
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    echo 'Gerenciador de arquivos do Cliente';
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  $app->run();  
    
	?>   
