<div class="service-wrapper">


    <div id="service-wrapperContent">
      
      <div class="card-header text-white bg-info">
        <h3>Contrate seu serviço</h3>
      </div>
      <div class="card-body">
          <div class="row ticket">
            <div class="col-md-12"><input type="text" disabled class="form-control" id="nomecompleto" value="Fulano de tals"></div>
            <div class="col-md-6"><input type="text" disabled class="form-control" id="emailusuario" value="fulano@beltrano.com"></div>
            <div class="col-md-6"><input type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" placeholder="<?php echo date('d/m/Y');?>" id="nascimento"></div>
            <div class="col-md-2">Destino:</div>
            <div class="col-md-10">
            
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                </select>         
            
            </div>
            
          </div>
        </div>
          
          
                      
        <div class="">
          <form>
            <div class="form-row deps">
              <div class="form-group col-md-7"><input type="text" class="form-control" id="dep1" name="dep[]" value="Nome completo"></div>
              <div class="form-group col-md-2"><input type="text" class="form-control datepicker"  data-date-format="dd/mm/yyyy" id="dtdep1" name="dtdep[]" placeholder="<?php echo date('d/m/Y');?>"></div>
              <div class="form-group col-md-3 tempass">
                <div class="custom-control custom-switch tempass">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1"><small>Possui Passaporte?</small></label>
                </div>
              </div>
            </div>
            
             <div class="form-row deps">
              <div class="form-group col-md-7"><input type="text" class="form-control" id="dep2" name="dep[]" value="Nome completo"></div>
              <div class="form-group col-md-2"><input type="text" class="form-control datepicker"  data-date-format="dd/mm/yyyy" id="dtdep2" name="dtdep[]" placeholder="<?php echo date('d/m/Y');?>"></div>
              <div class="form-group col-md-3 tempass">
                <div class="custom-control custom-switch tempass">
                  <input type="checkbox" class="custom-control-input" id="customSwitch2">
                  <label class="custom-control-label" for="customSwitch2"><small>Possui Passaporte?</small></label>
                </div>
              </div>
            </div>
            
            
            
          </form>        
        </div>                    
          


      </div>
      
    </div>



</div>
