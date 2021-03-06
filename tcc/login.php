<?php
include"cabecalho.php";
?>


<section class="div">
  <div class="ui middle aligned center aligned grid">
    <div class="column">
      <h2 class="ui teal image header">
        <img src="fotos/logo.png" class="image" id="imagemLogin">
        <div class="content login">
          Faça login na sua conta
        </div>
      </h2>
      <form class="ui large form" method="POST" action="home.php?user=admin">
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="email" placeholder="Usuario">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="Password">
            </div>
            <a href="recuperarSenha.php">Esqueceu sua senha?</a>
          </div>
          <div class="ui fluid large black submit button">Login</div>
        </div>

        <div class="ui error message"></div>

      </form>

    </div>
  </div>
</form>

<div class="ui message">
  Novo aqui? <a href="cadUsuario.php">Cadastre-se</a>
</div>
</div>
</div>

</section>