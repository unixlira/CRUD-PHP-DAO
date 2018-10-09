<?php require 'header.php'; ?>
<?php
  require 'src/conecta.php';
  $sql = 'SELECT * FROM relatorio';
  $statement = $connection->prepare($sql);
  $statement->execute();
  $clientes = $statement->fetchAll(PDO::FETCH_OBJ);
?>
  <div class="card-header">
    <h2>Cadastro</h2> 
    </div>
    <h2 class="container">
      <a href="create.php">
          <button type="button" class="col-md-12 btn btn-info" style="margin: auto; padding: 20px 70px 20px 70px; font-size: 20px;margin-top: 35px;" title="Cadastre Clientes">Novo Cliente</button>
      </a>
    </h2><br><br>

  <div class="card-header">
    <h2>Clientes Cadastrados</h2>  
  </div>
  <table class="table table-bordered">
    <caption>" Façam todas as Coisas para a glória de Deus " </caption>
      <thead>
        <tr>
          <th width="1%">Código</th>
          <th>Nome</th>
          <th>CPF</th>
          <th>E-mail</th>
          <th>Telefone</th>
          <th>Financeira</th>
          <th width="38%">Dívida</th>
          <th>Valor</th>
          <th width="8%">Data de Cadastro</th>
          <th style="text-align: center;">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($clientes as $cliente): ?>
          <tr>
            <td style="text-align: center;"><?= $cliente->id; ?></td>
            <td><?= $cliente->nome; ?></td>
            <td><?= $cliente->cpf; ?></td>
            <td><?= $cliente->email; ?></td>
            <td><?= $cliente->telefone; ?></td>
            <td><?= $cliente->instituicao; ?></td>
            <td wrap><?= $cliente->divida; ?></td>
            <td><?= $cliente->valor; ?></td>
            <td style="text-align: center;"><?= strftime(' %d-%m-%Y', strtotime($cliente->data_cadastro)); ?></td>
            <td nowrap="">
            <a href="update.php?id=<?= $cliente->id; ?>"><button type="button" class="btn btn-info btn-xs" title="Edite Clientes">Editar</button></a>
            <a onclick="return confirm('Tem certeza que deseja Excluir?')" href="delete.php?id=<?= $cliente->id; ?>"<button type="button" class="btn btn-danger btn-xs" title="Exclua Clientes">Excluir</button></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
<div class="mt-5">
  <hr>
  <?php require 'footer.php'; ?>  
</div>