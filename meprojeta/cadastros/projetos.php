<?php require('../base/header.php'); ?>


<h3 class="display-4 text-center"> Cadastro de Projetos </h3>
<hr class="bg-dark mb-4 w-25">
<div class="container container mt-4 mb-5">
    <div class="container">
      <form action="../cadastros/vagas.php" method="post">
          <div class="form-group">
            <label>Empresa Responsável:</label>
            <select name="select" class="form-control">
              <option value="1">EMP1</option>
              <option value="1">EMP2</option>
              <option value="1">EMP3</option>
              <option value="1">EMP4</option>
              <option value="1">EMP5</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nome do Projeto</label>
            <input name="nomeProjeto" type="text" class="form-control" placeholder="Projeto">
          </div>
          <div class="form-group">
            <label>Descrição:</label><br>
            <textarea name="descricao" rows="8" cols="80" class="form-control" placeholder="Descreva o projeto"></textarea>
          </div>
          <div class="form-group">
            <label>Etapa:</label>
            <select name="select" class="form-control">
              <option value="1">Fase Inicial</option>
              <option value="2">Fase de Desenvolvimento</option>
              <option value="3">Fase de Finalização</option>
            </select>
          </div>
          <div class="form-group">
            <label>Data de início da etapa:</label><br>
            <input type="date" name="dataInicio" value="" class="form-control">
          </div>
          </select>
          <div class="form-group">
            <label>Previsão de término da etapa para:</label><br>
            <input type="date" name="dataPrevisaoTermino" value="" class="form-control">
          </div>
          <div class="form-group">
            <label>Patrocinador:</label>
            <select name="select" class="form-control">
              <option value="1">PAT1</option>
              <option value="2">PAT2</option>
              <option value="3">PAT3</option>
              <option value="3">PAT4</option>
              <option value="3">PAT5</option>
            </select>
          </div>
        </div><br>
        <input name="cadastrar" class="btn btn-outline-info" type="submit" value="Cadastrar">
      </form>

    </div>
</div>


<?php require('../base/footer.php'); ?>
