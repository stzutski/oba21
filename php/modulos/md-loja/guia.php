<?php 
/*
 * exemplo de uma requisicao API 
 * */

$resApi = implode ('', file ( incMod('api','md-cadastro','api') . '?get=udata&uid=1' ));
//modo admin
$resApi = implode ('', file ( incMod('api','md-cadastro','api.admin',true) . '?get=udata&uid=1' ));


/*
 * exemplo url de uma imagem
 * */
$imgUrl = incMod('image','md-cadastro','imgtest.jpg');
//modo admin
$imgUrl = incMod('image','md-cadastro','imgtest.admin.jpg',true);


/*
 * include de um arquivo do modulo
 * variacaoes possiveis
 * view
 * form
 * lista
 * 
 * */

$arquivo2inc = incMod('form','md-cadastro','cadastro');
//modo admin
$arquivo2inc = incMod('form','md-cadastro','cadastro.admin',true);


/*
 * include de rotinas php do modulo
 * */
$incRotina = incMod('rotina','md-cadastro','rotina');
//modo admin
$incRotina = incMod('rotina','md-cadastro','rotina.admin',true);

/*
 * URLs para assets
 * */
$urlAsset = incMod('css','md-cadastro','estilos');  
      /*modo admin => */ 
      $urlAsset = incMod('css','md-cadastro','estilos.admin',true); 
$urlAsset = incMod('js','md-cadastro','scripts');   
      /*modo admin => */ 
      $urlAsset = incMod('js','md-cadastro','scripts.admin',true); 
$urlAsset = incMod('image','md-cadastro','imagetest.jpg');   
      /*modo admin => */ 
      $urlAsset = incMod('image','md-cadastro','imagetest.admin.jpg',true); 


/*
 * includes necessarios no cabecalho de cada arquivo api
 * INICIO DOS CABECALHOS
 * */

include_once('../../../../config.php');
include_once('../../../../php/functions/functions.db.php');
include_once('../../../../php/functions/functions.all.php');

/*
 * FINAL DO CABECALHOS NECESSARIOS
 * 
 *  LEMBRAR QUE A API DEVE RETORNAR TUDO EM JSON ENTAO ANTES DO FIM
 *  header('Content-Type: application/json');
 *  echo json_encode([DADOS A SEREM RETORNADOS]);
 * 
 * */




?>
