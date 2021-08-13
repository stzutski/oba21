	<?php 
  require_once('config.php');

  require_once('vendor/autoload.php');

  $_page='';
  $_md=array();

  use \Slim\Slim;
  $app = new \Slim\Slim();  
  
  $app->get('/', function () {

    $recurso='home';
    $_page  = '';
    $_md['modulo']  = 'md-loja';
    $_md['estilos'] = 'estilos-dashboard';
    $_md['script']  = 'scripts-dashboard';
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    include_once( incMod('view','md-dashboard','dashboard') );
    include_once('php/template/includes/footer.tpl.php');
    
  });  
    
  
  $app->get('/login', function () {
    
    $_page='';
    $_md=array();
      
    include_once('php/template/includes/header-login.tpl.php');
    include_once( incMod('form','md-login','login') );
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
  
  $app->get('/recuperar-acesso', function () {

    $_page='';
    $_md=array();
    
    include_once('php/template/includes/header-login.tpl.php');
    include_once( incMod('form','md-login','rec-senha') );
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
    
  
  $app->get('/senha-atualizada', function () {

    $_page='';
    $_md=array();
    
    include_once('php/template/includes/header-login.tpl.php');
    include_once( incMod('form','md-login','login-recuperado') );
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
    
  
  $app->get('/cadastro', function () {

    $_page='';
    $_md=array();
    
    include_once('php/template/includes/header-login.tpl.php');
    include_once( incMod('form','md-cadastro','cadastro-inicial') );
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
    
  
  $app->get('/politicas', function () {

    $_page='';
    $_md=array();
    
    include_once('php/template/includes/header-login.tpl.php');
    include_once('php/template/pages/politicas.page.php');
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
    
  
  $app->get('/confirmar-email', function () {
    
    $_page='';
    $_md=array();
    
    include_once('php/template/includes/header-login.tpl.php');
    include_once( incMod('view','md-cadastro','msg-confirme-email') );
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
    
  
  $app->get('/confirmar-email/resend', function () {

    $_page='';
    $_md=array();
    
    include_once('php/template/includes/header-login.tpl.php');
    include_once('php/template/includes/resend.msg.confirme.email.tpl.php');
    include_once('php/template/includes/footer-login.tpl.php');
    
  });     
    
  
  $app->get('/painel(/)(/:recurso)', function ($recurso='home') {
    
    $_page  = '';
    $_md['modulo']  = 'md-dashboard';
    $_md['estilos'] = 'estilos-dashboard';
    $_md['script']  = 'scripts-dashboard';
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    include_once( incMod('view','md-dashboard','dashboard') );
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  
  $app->get('/servicos', function () {
    
    $_page  = '';
    $_md['modulo']  = 'md-loja';
    $_md['estilos'] = 'estilos-loja';
    $_md['script']  = 'scripts-loja';
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    include_once( incMod('form','md-loja','selecione-o-servico') );
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  
  $app->get('/servicos-configurar/dependentes', function () {
    
    $_page  = '';
    $_md['modulo']  = 'md-loja';
    $_md['estilos'] = 'estilos-loja';
    $_md['script']  = 'scripts-loja';
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    include_once( incMod('form','md-loja','configurar-dependentes') );
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
    
    
    
  
  $app->get('/servicos-configuracao', function () {
    
    $_page='';
    $_md=array();
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    echo 'Configurações do Serviço';
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  
  $app->get('/cobrancas-configuracao', function () {
    
    $_page='';
    $_md=array();
    
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
    
    $_page='';
    $_md=array();
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    echo 'Ficha Cadastral do Cliente e Dependentes';
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  
  $app->get('/meus-arquivos-upload', function () {
    
    $_page='';
    $_md=array();
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    echo 'Uploads de Arquivos do Cliente';
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  
  $app->get('/meus-arquivos', function () {
    
    $_page='';
    $_md=array();
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    echo 'Gerenciador de arquivos do Cliente';
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  $app->run();  
    
	?>   
