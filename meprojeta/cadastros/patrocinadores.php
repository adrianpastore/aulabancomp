<?php require('../base/header.php'); ?>


<h3 class="display-4 text-center"> Cadastro de Patrocinadores </h3>
<hr class="bg-dark mb-4 w-25">
<div class="container container mt-4 mb-5">
    <div class="container">
      <form action="../navegacao/empresas.php" method="post">
        <div class="form-group">
          <label>Nome da Marca ou Instituição:</label>
          <input name="nomeEmpresa" type="text" class="form-control" placeholder="Empresa ou Instituição">
        </div>
        <div class="form-group">
          <label>Nome Representante:</label>
          <input name="nomeRepresentante" type="text" class="form-control" placeholder="Representante">
        </div>
        <div class="form-group">
          <label>Email para contato:</label>
          <input name="email" type="email" class="form-control" placeholder="Digite o email. Ex.: nome_email@gmail.com">
        </div>
        <div class="form-group">
          <label>Valor do investimento:</label>
          <input name="valorInvestimento" type="number" max="10000"class="form-control" placeholder="Valor do Investimento em reais">
        </div>
        <input name="cadastrar" class="btn btn-outline-info" type="submit" value="Cadastrar">
      </form>

    </div>
</div>


<?php require('../base/footer.php'); ?>
