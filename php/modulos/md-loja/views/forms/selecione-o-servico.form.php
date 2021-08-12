<div class="service-wrapper">


    <div id="service-wrapperContent">
      
      <div class="card-header text-white bg-info">
        <h3>Contrate seu serviço</h3>
      </div>
      <div class="card-body md-form">
          <div class="row ticket">
            <div class="col-md-12"><input type="text" disabled class="form-control" id="nomecompleto" value="Fulano de tals"></div>
            <div class="col-md-6"><input type="text" disabled class="form-control" id="emailusuario" value="fulano@beltrano.com"></div>
            <div class="col-md-6">
              <input type="text" class="form-control datepicker noFmargin" data-date-format="dd/mm/yyyy" placeholder="<?php echo date('d/m/Y');?>" id="nascimento">
              <small id="naschelp" class="form-text text-muted text-red">Sua data de nasc.</small>
            </div>
            <div class="col-md-12">
            
                <select class="form-control noFmargin" name="destino" id="inlineFormCustomSelect">
                <option selected>Selecione seu Destino</option>
                <option value="1">VISTO TURISMO - EUA</option>
                <option value="2">VISTO ESTUDO - EUA</option>
                </select>   
                <small id="hpservico" class="form-text text-muted">Visto desejado</small>      
            
            </div>
            <div class="col-md-12">
            <p><br />Além de você, quantas pessoas irão necessitar de visto?</p>
            </div>
            
            <div class="col-md-4">
              <!--Blue select-->
              <select class="form-control noFmargin" name="adultos">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <small id="hpadultos" class="form-text text-muted">Adultos</small>
              <!--/Blue select-->          
            </div>
            
            <div class="col-md-4">
              <!--Blue select-->
              <select class="form-control noFmargin">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <small id="hpadolescentes" class="form-text text-muted">Adolescentes</small>
              <!--/Blue select-->            
            </div>
            
            <div class="col-md-4">
              <!--Blue select-->
              <select class="form-control noFmargin">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <small id="hpcriancas" class="form-text text-muted">Crianças</small>
              <!--/Blue select-->            
            </div>
            
            <div class="col-md-12">
              <a class="btn btn-info btn-av-cad01" role="button">Avançar</a>
            </div>
          
          </div>
        </div>
      </div>
</div>
