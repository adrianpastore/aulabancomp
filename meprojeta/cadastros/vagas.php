<?php require('../base/header.php'); ?>


<h3 class="display-4 text-center"> Cadastro de Vagas </h3>
<hr class="bg-dark mb-4 w-25">
<div class="form-group">
    <div class="container container mt-4 mb-5">
      <button type="submit" class="btn btn-primary mb-2" name="maisVagas">Nova Vaga+</button>
      <br><br>
      <div id="vagas">
        <form action="../navegacao/projetos.php" method="post">
          <div class="form-group">
            <label>Nome da vaga:</label>
            <input name="nomeVaga" type="text" class="form-control" placeholder="Vaga">
          </div>
          <div class="form-group">
            <label>Função:</label><br>
            <textarea name="funcaoVaga" rows="3" cols="80" style="resize: none" class="form-control" placeholder="Descreva as funções que deverãoo ser exercidas nesta vaga"></textarea>
          </div>
          <div class="form-group">
            <label>Salário:</label>
            <input type="number" name="salarioVaga" min="0" value="" class="form-control" placeholder="Informe o salário"><br>
          </div>
          <hr>
          <input name="cadastrar" class="btn btn-outline-info" type="submit" value="Cadastrar">
        </form>
      </div>
    </div>
</div>




<?php require('../base/footer.php'); ?>
