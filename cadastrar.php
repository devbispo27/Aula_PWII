<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro Profissional</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="css/cadastrar.css">

</head>
<body>


  <div id="background-canvas"></div>

  <div class="container d-flex justify-content-center align-items-center vh-100 position-relative">
      <div class="card-body">
        <h2>Cadastro de Usuário</h2>

        <form id="formCadastro" action="cadastro.php" method="POST" class="needs-validation animate__animated animate__fadeIn animate__delay-1s" novalidate>
          <div class="form-group mb-3">
            <label for="rm" class="form-label">
              <i class="uil uil-id-badge"></i> RM
            </label>
            <input type="text" id="rm" name="rm" class required>
            <div class="invalid-feedback">
              RM é obrigatório.
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="nome" class="form-label">
              <i class="uil uil-user"></i> Nome
            </label>
            <input type="text" id="nome" name="nome" class required minlength="3">
            <div class="invalid-feedback">
              Nome deve ter pelo menos 3 caracteres.
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="email" class="form-label">
              <i class="uil uil-envelope"></i> E-mail
            </label>
            <input type="email" id="email" name="email" class required>
            <div class="invalid-feedback">
              E-mail inválido.
            </div>
          </div>
          <div class="form-group mb-4">
            <label for="cpf" class="form-label">
              <i class="uil uil-id-card"></i> CPF
            </label>
            <input type="text" id="cpf" name="cpf" pattern="\d{11}" title="Digite apenas os 11 números do CPF" class required>
            <div class="invalid-feedback">
              CPF inválido, digite 11 dígitos numéricos.
            </div>
          </div>
          <button type="submit" class>Cadastrar</button>
        </form>
      </div>
    </div>
  </div>


</body>
</html>
