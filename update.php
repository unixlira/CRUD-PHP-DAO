<?php
require 'src/conecta.php';

$id = $_GET['id'];
$sql = 'SELECT * FROM relatorio WHERE id=:id';
$stmt = $connection->prepare($sql);
$stmt->execute([':id' => $id]);
$cliente = $stmt->fetch(PDO::FETCH_OBJ);

if (isset($_POST['nome'])
  && isset($_POST['cpf'])
  && isset($_POST['email'])
  && isset($_POST['telefone'])
  && isset($_POST['endereco'])
  && isset($_POST['instituicao'])
  && isset($_POST['tel_instituicao'])
  && isset($_POST['divida'])
  && isset($_POST['valor'])
  && isset($_POST['data_cadastro'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $instituicao = $_POST['instituicao'];
    $tel_instituicao = $_POST['tel_instituicao'];
    $divida = $_POST['divida'];
    $valor = $_POST['valor'];
    $data_cadastro = $_POST['data_cadastro'];

    $sql = 'UPDATE relatorio SET nome=:nome, cpf=:cpf, email=:email, telefone=:telefone, endereco=:endereco, instituicao=:instituicao, tel_instituicao=:tel_instituicao, divida=:divida, valor=:valor, data_cadastro=:data_cadastro WHERE id=:id';

    $stmt = $connection->prepare($sql);

    if ($stmt->execute([':nome' => $nome, ':cpf' => $cpf, ':email' => $email, ':telefone' => $telefone, ':endereco' => $endereco, ':instituicao' => $instituicao, ':tel_instituicao' => $tel_instituicao, ':divida' => $divida, ':valor' => $valor, ':data_cadastro' => $data_cadastro, ':id' => $id])) {
        $message = 'Alterado com Sucesso';
        header('refresh: 4;index.php');
    }
}

?>
<?php require 'header.php'; ?>
    <div class="card ">
        <div class="card-header">
            <h2>Editar Cliente</h2>
        </div>
        <br>
        <?php if (!empty($message)) : ?>
                <div class="card-body form-horizontal alert alert-success col-md-4 control-label form-group" style="margin-left:34%">
                    <div class="col-md-6">
                        <label class="col-md-12 control-label" for="nome"><?= $message; ?></label>
                    </div>
                </div>
            <?php endif; ?>
        <div class="card-body">
            <form class="form-horizontal mt-3 " method="post">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="nome">Nome</label>
                    <div class="col-md-4">
                        <input type="text" name="nome" id="nome" value="<?= $cliente->nome; ?>" class="form-control input-md" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cpf">CPF</label>
                    <div class="col-md-4">
                        <input type="text" name="cpf" id="cpf" value="<?= $cliente->cpf; ?>" class="form-control" required=""> 
                    </div>                 
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">E-mail</label>
                    <div class="col-md-4">
                        <input type="email" name="email" id="email" value="<?= $cliente->email; ?>" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="telefone">Telefone</label>
                    <div class="col-md-4">
                        <input type="text" name="telefone" id="telefone" value="<?= $cliente->telefone; ?>" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="endereco">Endereço</label>
                    <div class="col-md-4">
                        <input type="text" name="endereco" id="endereco" value="<?= $cliente->endereco; ?>" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="instituicao">Instituição</label>
                    <div class="col-md-4">
                        <input type="text" name="instituicao" id="instituicao" value="<?= $cliente->instituicao; ?>" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="tel_instituicao">Contato Instituição</label>
                    <div class="col-md-4">
                        <input type="text" name="tel_instituicao" id="tel_instituicao" value="<?= $cliente->tel_instituicao; ?>" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="divida">Dívida</label>
                    <div class="col-md-4">
                        <input type="text" name="divida" id="divida" value="<?= $cliente->divida; ?>" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="valor">Valor</label>
                    <div class="col-md-4">
                        <input type="text" name="valor" id="valor" value="<?= $cliente->valor; ?>" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="data_cadastro">Data de Cadastro</label>
                    <div class="col-md-4">
                        <input type="date" name="data_cadastro" id="data_cadastro" value="<?= $cliente->data_cadastro; ?>" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                      <button class="btn btn-success  btn-lg btn-block">Salvar</button>
                    </div>
                </div>
            </form>
            <a href="javascript:window.history.go(-1)"  style="margin-left: 45px;">
                <button type="button" class="btn btn-info mt-3">Voltar</button>
            </a>
        </div>
    </div>
<?php require 'footer.php'; ?>
