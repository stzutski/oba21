<div class="container-fluid">

  <div class="row">

    <div class="col-md-2">

<div class="card">
  <h5 class="card-header"><i class="fas fa-caret-square-down"></i> Menu do cliente</h5>
  <div class="card-body">

    <ul class="list-group">
      <li class="list-group-item"><a href="painel"><i class="fa fa-home"></i> Painel</a></li>
      <li class="list-group-item"><a href="painel/meus-servicos"><i class="fas fa-user-cog"></i> Meus Serviços</a></li>
      <li class="list-group-item"><a href="painel/pendencias"><i class="fa fa-exclamation-triangle"></i> Pendências <span class="badge badge-danger">1</span></a></li>
      <!-- <li class="list-group-item"><a href="painel/dependentes"><i class="fa fa-users"></i> Dependentes <span class="badge badge-info">2</span></a></li> -->
      <li class="list-group-item"><a href="painel/financeiro"><i class="fas fa-money-bill-alt"></i> Financeiro <span class="badge badge-danger">1</span></a></li>
      <li class="list-group-item"><a href="painel/documentos"><i class="fa fa-folder"></i> Documentos</a></li>
      <li class="list-group-item"><a href="painel/avisos"><i class="fas fa-bullhorn"></i> Avisos <span class="badge badge-danger">9</span></a></li>
      <li class="list-group-item"><a href="painel/duvidas-frequentes"><i class="fas fa-question-circle"></i> Dúvidas Frequêntes</a></li>
    </ul>

  </div>
</div>    
    
    
    </div><!-- left col -->
    
    <div class="col-md-10">
    
    <?php
      if(isSet($recurso)&&$recurso!=''){
       include_once( incMod('view','md-dashboard',$recurso) );
      }
     ?>
    
    </div><!-- right col -->
    
  </div>
</div>
