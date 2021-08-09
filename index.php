	<?php 
  require_once('vendor/autoload.php');

  $_page='';

  use \Slim\Slim;
  $app = new \Slim\Slim();  
  
  $app->get('/', function () {
    //echo 'inicial';
    
    include_once('php/template/includes/header.tpl.php');
    include_once('php/template/includes/top-menu.tpl.php');
    include_once('php/template/includes/footer.tpl.php');
    
  });  
    
  
  $app->get('/cadastro', function () {
    
    
    include_once('php/template/includes/header.tpl.php');
    //include_once('php/template/includes/top-menu.tpl.php');
    
    echo 'cadastro';
    
    include_once('php/template/includes/footer.tpl.php');
    
  });     
    
  $app->run();  
    
	?>   
