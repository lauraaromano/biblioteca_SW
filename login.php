<?php
  include 'cabecalho.php'
?>

      

<div class="tm-page-col-right tm-form-container" 
     style="max-width: 400px; margin: auto; padding: 40px; 
            background-color: #f0e6fa; border-radius: 12px; box-shadow: 0 4px 15px rgba(151, 145, 145, 0.1);">
  <h2 class="tm-text-secondary mb-4" style="font-family: 'Open Sans', sans-serif;">Entrar</h2>
  <form action="dashboard.php" method="POST" id="tm_contact_form">
    
    <div class="form-group mb-4">
      <label for="contact_name" style="font-family: 'Open Sans', sans-serif;">Usuário</label>
      <input
        type="text"
        id="contact_name"
        name="contact_name"
        class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
        placeholder="Digite seu usuário"
        required
        style="font-family: 'Open Sans', sans-serif; background-color: #fafafa;"
      />
    </div>

    <div class="form-group mb-4">
      <label for="contact_password" style="font-family: 'Open Sans', sans-serif;">Senha</label>
      <input
        type="password"
        id="contact_password"
        name="contact_password"
        class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
        placeholder="Digite sua senha"
        required
        style="font-family: 'Open Sans', sans-serif; background-color: #fafafa;"
      />
    </div>

    <div class="text-center">
      <button
        type="submit"
        class="btn btn-secondary tm-btn-submit rounded-0"
        style="font-family: 'Open Sans', sans-serif; width: 100%; padding: 12px;">
        Entrar
      </button>
    </div>

    <div class="text-center mt-3" style="font-family: 'Open Sans', sans-serif; font-size: 14px;">
      <a href="#" style="color: #669999; text-decoration: none;">Esqueceu a senha?</a> | 
      <a href="#" style="color: #669999; text-decoration: none;">Cadastrar-se</a>
    </div>

  </form>
</div>



      <!-- Call to Action -->
     
      <!-- Page footer -->
<?php
  include 'footer.php'
?>