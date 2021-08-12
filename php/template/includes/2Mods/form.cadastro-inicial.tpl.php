<!--
<div class="wrapper fadeInDown">
-->
<div class="wrapper">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div>
      <p class="plogo"><a href="<?php echo APP_PATH;?>"><img src="assets/images/logo-login.png" /></a></p>
    </div>

    <!-- Login Form -->
    <form method="get" action="confirmar-email">
      <input type="text" id="login" class="fadeIn" name="login" placeholder="Nome">
      <input type="text" id="login" class="fadeIn" name="login" placeholder="Sobrenome">
      <input type="text" id="login" class="fadeIn" name="login" placeholder="Seu Email">
      <br /><small class="color-red no-show">Email já esta em uso!</small>
      <input type="text" id="login" class="fadeIn" name="login" placeholder="Seu CPF">
      <br /><small class="color-red no-show">Email CPF já esta em uso!</small>
      <input type="text" id="password" class="fadeIn" name="login" placeholder="Senha">
      <input type="text" id="password" class="fadeIn" name="login" placeholder="Confirme a senha">
      <input type="submit" value="Enviar Dados">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="politicas">Política de privacidade</a>
    </div>

  </div>
</div>
