<?php require('../base/header.php'); ?>

<h3 class="display-4 text-center"> Projetos </h3>
<hr class="bg-dark mb-4 w-25">
<div class="container container mt-4 mb-5">
    <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th class="th">Empresa</th>
            <th class="th">nome</th>
            <th class="th">Descrição</th>
            <th class="th">Total de Vagas</th>
            <th class="th"></th>
            <th class="th"></th>
            <th class="th"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>A</td>
            <td>ABCDEFGH</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</td>
            <td>11</td>
            <td>
              <a href="#"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
            </td>
            <td>
              <a href="#"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
            </td>
            <td>
              <a href="../navegacao/oportunidades.php"><input name="verVagas" class="btn btn-outline-info" type="submit" value="Ver vagas"></a>
            </td>
          </tr>
          <tr>
            <td>B</td>
            <td>IJKLMNOP</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</td>
            <td>20</td>
            <td>
              <a href="#"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
            </td>
            <td>
              <a href="#"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
            </td>
            <td>
              <a href="../navegacao/oportunidades.php"><input name="verVagas" class="btn btn-outline-info" type="submit" value="Ver vagas"></a>
            </td>
          </tr>
          <tr>
            <td>C</td>
            <td>QRSTUVWX</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</td>
            <td>1</td>
            <td>
              <a href="#"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
            </td>
            <td>
              <a href="#"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
            </td>
            <td>
              <a href="../navegacao/oportunidades.php"><input name="verVagas" class="btn btn-outline-info" type="submit" value="Ver vagas"></a>
            </td>
          </tr>
        </tbody>
      </table>
</div>


<?php require('../base/footer.php'); ?>
