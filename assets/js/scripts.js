$( "#campoSelectUserUpdate" ).change(function() {
  window.location=pathApp+'mod/admin/opt/admuser/uid/'+$(this).val();
});     


$('.btn-search-plus').click(function() {
  var errFrm=false;
  if($('#campobusca').val()==''){errFrm=true;Alertify.log.error("Selecione um campo para busca!");return false;}
  if($('#s').val()=='')         {errFrm=true;Alertify.log.error("Informe um critério para busca!");return false;}
  if(errFrm==false){
    var cmp = encodeURIComponent($('#campobusca').val());
    var sqr = encodeURIComponent($('#s').val().replace(/ /g,"-"));
    var urlsearch = pathApp+'mod/home/campo/'+cmp+'/s/'+sqr;
    //window.location=pathApp+'mod/home/campo/'+encodeURI($('#campobusca').val())+'/s/'+encodeURI($('#s').val());
    window.location=urlsearch;
  }
});


$('.btn-alt-pwd').click(function() {
  if($('#cpSenhaAtual').val()=='')                        {Alertify.log.error("Informe sua Senha Atual!");return false;}
  if($('#cpNovaSenha').val()=='')                         {Alertify.log.error("Informe a Nova Senha!");return false;}
  if($('#cpNovaSenha').val().length<4)                    {Alertify.log.error("Sua senha deve ter pelo 4 caracteres!");return false;}
  if($('#cpCnfNovaSenha').val()=='')                      {Alertify.log.error("Confirme a Nova Senha!");return false;}
  if($('#cpNovaSenha').val()!=$('#cpCnfNovaSenha').val()) {Alertify.log.error("Os campo Senha e Confirme devem ser idênticos!");return false;}
  
  Alertify.dialog.confirm("Depois de alterar sua senha você<br>deverá fazer o login novamente!<br><b>Deseja prosseguir?</b>", function () {
      // user clicked "ok"
      Alertify.log.success("Processando!");
  }, function () {
      // user clicked "cancel"
      Alertify.log.error("Cancelado!");
  });  
});


$('.btn-user-alt-pwd').click(function() {
  if($('#cpSenhaAtual').val()=='')                        {Alertify.log.error("Informe sua Senha Atual!");return false;}
  if($('#cpNovaSenha').val()=='')                         {Alertify.log.error("Informe a Nova Senha!");return false;}
  if($('#cpNovaSenha').val().length<4)                    {Alertify.log.error("Sua senha deve ter pelo 4 caracteres!");return false;}
  if($('#cpCnfNovaSenha').val()=='')                      {Alertify.log.error("Confirme a Nova Senha!");return false;}
  if($('#cpNovaSenha').val()!=$('#cpCnfNovaSenha').val()) {Alertify.log.error("Os campo Senha e Confirme devem ser idênticos!");return false;}
  
  Alertify.dialog.confirm("Depois de alterar sua senha você<br>deverá fazer o login novamente!<br><b>Deseja prosseguir?</b>", function () {
      // user clicked "ok"
      $('#altUserPwd').submit();
  }, function () {
      // user clicked "cancel"
      Alertify.log.error("Cancelado!");
  });  
});

  
$('.btn-admin-update-profile').click(function() {
  var errFrm=false;
  if($('#campoNomeCompleto').val()=='')  {errFrm=true; Alertify.log.error("Informe o Nome Completo!");return false;}
  if($('#campoNomeExibicao').val()=='')  {errFrm=true; Alertify.log.error("Informe o Nome!");return false;}
  if($('#campoEmailUsuario').val()=='')  {errFrm=true; Alertify.log.error("Informe o Email ou o Usuário!");return false;}
  if($('#campoStatusUsuario').val()=='') {errFrm=true; Alertify.log.error("Selecione o status do usuário!");return false;}
  if($('#usradmin').val()=='')           {errFrm=true; Alertify.log.error("Selecione se o usuário é ADMIN!");return false;}
  
  if($('#campoSenhaUsuario').val()!=''){
    if($('#campoCnfSenhaUsuario').val().length<4){
          errFrm=true; Alertify.log.error("A senha deve ter pelo menos 4 caracteres!");return false;
    }
    if($('#campoCnfSenhaUsuario').val()==''){
          errFrm=true; Alertify.log.error("Confirme a Senha!");return false;
    }
    if($('#campoSenhaUsuario').val()!=$('#campoCnfSenhaUsuario').val()){
          errFrm=true; Alertify.log.error("O campo SENHA e CONFIRME devem se idênticos!");return false;
    }
  }
  
  if(errFrm==false){
    return true;
  }
});


$('.btn-user-update-profile').click(function() {
  var errFrm=false;
  if($('#campoNomeCompleto').val()=='')  {errFrm=true; Alertify.log.error("Informe o Nome Completo!");return false;}
  if($('#campoNomeExibicao').val()=='')  {errFrm=true; Alertify.log.error("Informe o Nome de Exibição!");return false;}

  if(errFrm==false){
    $('#frmUserProfile').submit();
  }
});  



$(document).on("click","button.btn-remove-form", function(){
  var uid = $(this).attr("data-uid");
  
  Alertify.dialog.confirm("Confirme a remoção deste item?<br><b>A operação não poderá ser desfeita!</b>", function () {
    // user clicked "ok"
    //Alertify.log.success("Processando!");
     var request = $.ajax({
          url: "ajax-process.php",
          method: "POST",
          data: {
                  cp_process:'removeCad',
                  cp_uid:uid
                  },
          dataType: "html",
          success: function(data) {
               //return data;
               if(data){
                 var msg = data.split("|");
                 if(msg[0]=='ERROR'){
                    Alertify.log.error(msg[1]);
                  }
                  if(msg[0]=='OK'){
                    Alertify.log.success(msg[1]);
                    parent.$.fancybox.close();
                    location.reload();
                }
               }
            }
        });
      
  }, function () {
      // user clicked "cancel"
      Alertify.log.error("Cancelado!");
  });  
});  



$(document).on("click","button.btn-reset-form", function(){    
  var idForm = $(this).attr("data-frm");
  $('#'+idForm).each (function(){
    this.reset();
  });   
}); 


$(document).on("click","button.btn-cad-item", function(){  

  var errorForm=false;
  if($('#referencia').val()=='')  {Alertify.log.error("Informe a Referência!"); errorForm=true; return false;}
  if($('#cliente').val()=='')     {Alertify.log.error("Informe o Cliente!"); errorForm=true; return false;}
  if($('#datacad').val()=='')     {Alertify.log.error("Informe a Data de Cadastro!"); errorForm=true; return false;}
  if($('#desen').val()=='')       {Alertify.log.error("Informe o Desen!"); errorForm=true; return false;}
  if($('#tipopeca').val()=='')    {Alertify.log.error("Informe o Tipo de Peça!"); errorForm=true; return false;}
  if($('#quantidade').val()=='')  {Alertify.log.error("Informe a Quantidade!"); errorForm=true; return false;}
  if($('#modelista').val()=='')   {Alertify.log.error("Informe a(o) Modelista!"); errorForm=true; return false;}
  if($('#tecido').val()=='')      {Alertify.log.error("Informe o Tecido!"); errorForm=true; return false;}
  if($('#lavanderia').val()=='')  {Alertify.log.error("Informe a Lavanderia!"); errorForm=true; return false;}

  if(errorForm==true){
    Alertify.log.error("Erros no formulário!");
  }

  if(errorForm==false){

  var cp_referencia   = $('#referencia').val();
  var cp_cliente      = $('#cliente').val();
  var cp_datacad      = $('#datacad').val();
  var cp_desen        = $('#desen').val();
  var cp_tipopeca     = $('#tipopeca').val();
  var cp_quantidade   = $('#quantidade').val();
  var cp_modelista    = $('#modelista').val();
  var cp_tecido       = $('#tecido').val();
  var cp_lavanderia   = $('#lavanderia').val();
  var cp_observacoes  = $('#observacoes').val();
  var cp_process      = $('#process').val();
  var cp_proc_message = $('#proc_message').val();
  var cp_proc_redir   = $('#proc_redir').val();
  var cp_uid          = $('#uid').val();
  

    var request = $.ajax({
      url: "ajax-process.php",
      method: "POST",
      data: {
              cp_uid:cp_uid,
              cp_referencia:cp_referencia,
              cp_cliente:cp_cliente,
              cp_datacad:cp_datacad,
              cp_desen:cp_desen,
              cp_tipopeca:cp_tipopeca,
              cp_quantidade:cp_quantidade,
              cp_modelista:cp_modelista,
              cp_tecido:cp_tecido,
              cp_lavanderia:cp_lavanderia,
              cp_observacoes:cp_observacoes,
              cp_process:cp_process,
              cp_proc_message:cp_proc_message,
              cp_proc_redir:cp_proc_redir
              },
      dataType: "html",
      success: function(data) {
           //return data;
           if(data){
             var msg = data.split("|");
             if(msg[0]=='ERROR'){Alertify.log.error(msg[1]);}
              if(msg[0]=='OK'){
                
                $('.cell_'+cp_uid+'_1').html(cp_referencia);
                $('.cell_'+cp_uid+'_2').html(cp_cliente);
                $('.cell_'+cp_uid+'_3').html(cp_datacad);
                $('.cell_'+cp_uid+'_4').html(cp_desen);
                $('.cell_'+cp_uid+'_5').html(cp_tipopeca);
                $('.cell_'+cp_uid+'_6').html(cp_quantidade);
                $('.cell_'+cp_uid+'_7').html(cp_modelista);
                $('.cell_'+cp_uid+'_8').html(cp_tecido);
                $('.cell_'+cp_uid+'_9').html(cp_lavanderia);
                $('.cell_'+cp_uid+'_10').html(cp_observacoes);
                
                Alertify.log.success(msg[1]);
                parent.$.fancybox.close();
                location.reload();
              }
           }
        }
    });
    
  }

}); 




function autoField(campoNome,idField,idList){
  $(document).on("keyup","input"+idField, function(){
  //$(idField).on("keyup", function(){
    var termo = $(this).val();
    if (termo !=="") {
      $.ajax({
        url:"search-ajax.php",
        type:"POST",
        cache:false,
        data:{termo:termo,campoNome:campoNome},
        success:function(data){
          $(idList).html(data);
          $(idList).fadeIn();
        }  
      });
    }else{
      $(idList).html("");  
      $(idList).fadeOut();
    }
  });
}


$(document).ready(function(){

  $("#various1").fancybox({
      'titlePosition'		: 'inside',
      'transitionIn'		: 'none',
      'transitionOut'		: 'none'
  });

  $(".ajaxfancy").fancybox({
    type: 'ajax',
    padding: 0,
    autoSize: true
  });  

  autoField('cliente','#cliente',"#listaCliente");
  autoField('desen','#desen',"#listaDesen");
  autoField('modelista','#modelista',"#listaModelista");

  // click one particular city name it's fill in textbox
  $(document).on("click","li.li-cliente", function(){
    $('#cliente').val($(this).text());
    $('#listaCliente').fadeOut("fast");
  });

  // click one particular city name it's fill in textbox
  $(document).on("click","li.li-desen", function(){
    $('#desen').val($(this).text());
    $('#listaDesen').fadeOut("fast");
  });

  // click one particular city name it's fill in textbox
  $(document).on("click","li.li-modelista", function(){
    $('#modelista').val($(this).text());
    $('#listaModelista').fadeOut("fast");
  });
  
  $(document).on("dblclick","tr.dbc", function(){
    var uid = $(this).attr("data-uid")
      //href: pathApp+'form-ajax.php?frm=caditem&caduid='+uid,
    $.fancybox({
      type: 'ajax',
      href: 'form-ajax.php?frm=caditem&caduid='+uid,
      padding: 0,
      autoSize: true
    });      
  });  
  
  
});
