<?php 
include_once('../../../../config.php');
include_once('../../../../php/functions/functions.db.php');
include_once('../../../../php/functions/functions.all.php');


if(getVar('get')=='udata' && getVar('uid')!=''){
  
  $res = array();
  if(getVar('uid')==1){
    
    $res[] = array(
                    'uid'=>'1',
                    'nome'=>'Roberto',
                    'sobrenome'=>'Stzutski',
                    'datacad'=>'2021-08-07 16:00:00',
                    'status'=>'1');
    
    $res[] = array(
                    'uid'=>'2',
                    'nome'=>'Roberto2',
                    'sobrenome'=>'Stzutski2',
                    'datacad'=>'2021-08-07 16:00:00',
                    'status'=>'0');
    
    $res[] = array(
                    'uid'=>'3',
                    'nome'=>'Roberto3',
                    'sobrenome'=>'Stzutski3',
                    'datacad'=>'2021-08-07 16:00:00',
                    'status'=>'0');
  }else{
    $res[] = array(
                    'uid'=>'0',
                    'nome'=>'Desconhecido',
                    'sobrenome'=>'Desconhecido',
                    'datacad'=>'1900-01-01 01:00:00',
                    'status'=>'0');
  }
  
  header('Content-Type: application/json');
  echo json_encode($res);
}
?>
