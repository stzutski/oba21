<?php 
session_start();

//local atual da instalacao
$servername = gethostname();

//configuracoes para ambiente dev
if($servername=='debian'){
	
	//credenciais mysql
	define('DBHOST','localhost');
	define('DBNAME','ovisto');
	define('DBUSER','root');
	define('DBPWD','32125');
	
	//dados da aplicacao
	$_app_path = 'http://192.168.0.200/labs/oba21/';
  
  define('APP_PATH',$_app_path);

}else{//configuracoes para ambiente producao

	//credenciais mysql
	define('DBHOST','localhost');
	define('DBNAME','cinbvtww_ufo');
	define('DBUSER','cinbvtww_ufo');
	define('DBPWD','Nv32125//*+');	
	

	//dados da aplicacao
	$_app_path = 'https://ufo.actoweb.com.br/';

}

include_once('php/functions/functions.db.php');
include_once('php/functions/functions.all.php');

?>
