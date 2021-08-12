<?php 

// funcao helper para acesso de variaveis post, get, session, cookie, data e array
function chkVar($varname){
  if(isSet($varname)){return $varname;}
  else
  {return false;}
}
function getVar($varname){
  if(isSet($_GET[$varname])){if($_GET[$varname]=='' || $_GET[$varname]!=''){return $_GET[$varname];}}
  else
  {return false;}
}
function postVar($varname){
  if(isSet($_POST[$varname])){if($_POST[$varname]=='' || $_POST[$varname]!=''){return $_POST[$varname];}}
  else{return false;}
}
function sessionVar($varname){
  if(isSet($_SESSION[$varname])){if($_SESSION[$varname]=='' || $_SESSION[$varname]!=''){return $_SESSION[$varname];}}
  else{return false;}
}
function cookieVar($varname){
  if(isSet($_COOKIE[$varname])){if($_COOKIE[$varname]=='' || $_COOKIE[$varname]!=''){return $_COOKIE[$varname];}}
  else{return false;}
}
function dataVar($_RESOURCE,$varname){
  if(isSet($_RESOURCE[$varname])){if($_RESOURCE[$varname]=='' || $_RESOURCE[$varname]!=''){return $_RESOURCE[$varname];}}
  else{return false;}
}
function arrayVar($_ARRAY,$varname=''){
  if($varname==''){
    if(isSet($_ARRAY)){return true;}else{return false;}
  }else{
    if(isSet($_ARRAY[$varname])){
        if($_ARRAY[$varname]=='' || $_ARRAY[$varname]!=''){
          return $_ARRAY[$varname];
        }
    }
    else
    {
      return false;
    }
  }
}


/*
 * funcao para retornar PATHs e URLs dos recursos dos modulos
 * caso o recurso solicitado nao exista entao retorna msg de erro
 * */
function incMod($tipo,$modulo,$incFile,$admin=false){
  $adminArea=''; 
  if($admin==true){$adminArea='/admin';}    
  if($tipo!=''&&$modulo!=''&&$incFile!=''){
   
    /*PATH INCLUSAO DE VIEWS PURAS*/
    if($tipo=='view'){
      $file = 'php/modulos/'.$modulo.'/views'.$adminArea.'/'.$incFile.'.view.php';
      if(!file_exists($file)){$file = 'php/modulos/errors/404.view.php';}
    }
   /*PATH INCLUSAO DE FORMS*/
    if($tipo=='form'){
      $file = 'php/modulos/'.$modulo.'/views'.$adminArea.'/forms/'.$incFile.'.form.php';
      if(!file_exists($file)){$file = 'php/modulos/errors/404.form.php';}
    }
    /*PATH INCLUSAO DE LISTAS*/
    if($tipo=='lista'){
      $file = 'php/modulos/'.$modulo.'/views'.$adminArea.'/listas/'.$incFile.'.lista.php';
      if(!file_exists($file)){$file = 'php/modulos/errors/404.lista.php';}
    }
    /*PATH INCLUSAO DE ROTINAS*/
    if($tipo=='rotina'){
      $file = 'php/modulos/'.$modulo.'/rotinas'.$adminArea.'/'.$incFile.'.php';
      if(!file_exists($file)){$file = 'php/modulos/errors/404.form.php';}
    }
    /*URL DE CHAMADA DA API*/
    if($tipo=='api'){
      $file   = 'php/modulos/'.$modulo.'/api'.$adminArea.'/'.$incFile.'.php';
      if(!file_exists($file)){$file = APP_PATH . 'php/modulos/errors/404.api.php';}
      else{
      $urlApi = APP_PATH . $file;
      $file   = $urlApi;
      }
    }
    /*URL ARQUIVO CSS*/
    if($tipo=='css'){
      $file = 'php/modulos/'.$modulo.'/assets'.$adminArea.'/css/'.$incFile.'.css';
      if(!file_exists($file)){$file = APP_PATH . 'php/modulos/errors/404.css.php';}
      else{
      $urlApi = APP_PATH . $file;
      $file   = $urlApi;
      }        
    }
    /*URL ARQUIVO JS*/
    if($tipo=='js'){
      $file = 'php/modulos/'.$modulo.'/assets'.$adminArea.'/js/'.$incFile.'.js';
      if(!file_exists($file)){$file = APP_PATH . 'php/modulos/errors/404.js.php';}
      else{
      $urlApi = APP_PATH . $file;
      $file   = $urlApi;
      }        
    }
    /*URL INCLUSAO DE IMAGENS*/
    if($tipo=='image'||$tipo=='imagem'){
      $file = 'php/modulos/'.$modulo.'/assets'.$adminArea.'/images/'.$incFile;
      if(!file_exists($file)){$file = APP_PATH . 'php/modulos/errors/no-image.png';}
      else{
      $urlApi = APP_PATH . $file;
      $file   = $urlApi;
      }            
    }    
  }
  return $file;
}




?>
