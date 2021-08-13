<?php 

function retornaStatus($user=''){
  $stats = 'sem status';

  if($user==''){
      $stats = 'usuario nao informado';
  }elseif($user=='roberto'){
      $stats = 'usuario admin';
  }
  return $stats;
}

?>
