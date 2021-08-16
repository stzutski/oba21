<div class="container-fluid content-dashboard">

  <div class="row">

    <div class="col-md-12">
    <h3>Bem-vindo, Rene</h3>
    <hr />
    </div>

    <div class="col-md-12 vsp">
      <?php include_once( incMod('view','md-dashboard','stepper') );?>
    </div>
    <div class="col-md-3 vsp">

      <?php include_once( incMod('view','md-dashboard','menu-lateral') );?>
    
    </div><!-- left col sidebar -->
    
    <div class="col-md-9 vsp">
    
    <?php
      if(isSet($recurso)&&$recurso!=''){
       include_once( incMod('view','md-dashboard',$recurso) );
      }
     ?>
    
    </div><!-- right col -->
    
  </div>
</div>
