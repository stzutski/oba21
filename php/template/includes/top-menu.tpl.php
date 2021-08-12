<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:#E9ECEF;">
  <a class="navbar-brand" href="<?php echo APP_PATH;?>"><img src="assets/images/logo-login.png" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">

  <ul class="navbar-nav mr-auto">
    
        <li class="nav-item">
          <a class="nav-link" href="<?php echo APP_PATH;?>">Home</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownL" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-users"></i> Usuários
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownL">
              <a class="dropdown-item" href="login">Login</a>
              <a class="dropdown-item" href="recuperar-acesso">Rec Senha</a>
              <a class="dropdown-item" href="senha-atualizada">Senha atualizada</a>
              <a class="dropdown-item" href="cadastro">Cadastro</a>
              <a class="dropdown-item" href="politicas">Políticas de Privacidade</a>
              <a class="dropdown-item" href="confirmar-email">Confirme seu email</a>
              <a class="dropdown-item" href="painel">DashBoard</a>
              <a class="dropdown-item" href="servicos">Escolha o Servicos</a>
              <a class="dropdown-item" href="servicos-configuracao">Configurar Servico</a>
              <a class="dropdown-item" href="cobrancas-configuracao">Dados de Cobrança</a>
              <a class="dropdown-item" href="cobrancas-gerenciar">Gerar Cobrança</a>
              <a class="dropdown-item" href="ficha-cadastral">Form Perfil (auto-save)</a>
              <a class="dropdown-item" href="meus-arquivos-upload">Upload IRPF</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="meus-arquivos">Meus Arquivos</a>
            </div>
        </li>

<!--
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownR" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> Admin
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownR">
              <a class="dropdown-item" href="painel">DashBoard</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="login">Cadastros</a>
              <a class="dropdown-item" href="login">Rec Senha</a>
              <a class="dropdown-item" href="login">Senha atualizada</a>
              <a class="dropdown-item" href="login">Cadastro</a>
              <a class="dropdown-item" href="login">Confirme seu email</a>
            </div>
        </li>
-->
    
  </ul>
  </div>
    <div class="pull-right" >
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <b><i class="fas fa-user"></i><span class="badge badge-danger">9</span></b>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="avisos"><i class="fas fa-envelope"></i> Avisos<span class="badge badge-danger">9</span></a>
                    <a class="dropdown-item" href="meus-dados"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a>
                    <a class="dropdown-item" href="alterar-senha"><i class="fa fa-lock" aria-hidden="true"></i> Alterar Senha</a>
                    <a class="dropdown-item" href="logout"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
