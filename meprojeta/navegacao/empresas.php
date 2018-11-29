<?php require('../base/header.php'); ?>


<h3 class="display-4 text-center"> Empresas </h3>
<hr class="bg-dark mb-4 w-25">
<div class="container container mt-4 mb-5">
    <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th class="th">ID</th>
            <th class="th">nome</th>
            <th class="th">Endereço</th>
            <th class="th">CNPJ</th>
            <th class="th"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>AAAA</td>
            <td>12345</td>
            <td>Rua A, blc X - (SP)</td>
            <td>
              <a href="#"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
              <a href="#"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>BBBB</td>
            <td>67890</td>
            <td>Rua B, blc Y - (RJ)</td>
            <td>
              <a href="#"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
              <a href="#"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>CCCC</td>
            <td>24681</td>
            <td>Rua C, blc Z - (RS)</td>
            <td>
              <a href="#"><input name"editar" class="btn btn-outline-info" type="submit" value="Editar"></a>
              <a href="#"><input name="excluir" class="btn btn-outline-info" type="submit" value="Excluir"></a>
            </td>
          </tr>
        </tbody>
      </table>
</div>


<?php require('../base/footer.php'); ?>
