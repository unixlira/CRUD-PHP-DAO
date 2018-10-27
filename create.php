<?php
require 'src/conecta.php';

$message = '';

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

        $sql = 'INSERT INTO relatorio (nome, cpf, email, telefone, endereco, instituicao, tel_instituicao, divida, valor, data_cadastro) VALUES (:nome, :cpf, :email, :telefone, :endereco, :instituicao, :tel_instituicao, :divida, :valor, :data_cadastro)';
        $stmt = $connection->prepare($sql);

        if ($stmt->execute([':nome' => $nome, ':cpf' => $cpf, ':email' => $email, ':telefone' => $telefone, ':endereco' => $endereco, ':instituicao' => $instituicao, ':tel_instituicao' => $tel_instituicao, ':divida' => $divida, ':valor' => $valor, ':data_cadastro' => $data_cadastro])
    ) {
            $message = 'Cadastro efetuado com Sucesso';
            header('refresh: 4;index.php');
        }
    }

?>
<?php require 'header.php'; ?>
    <div class="card ">
        <div class="card-header">
            <h2>Novo Cliente</h2>
        </div>
        <br>
        <div class="form-group">
            <label class="col-md-4 control-label" for="nome"></label>
            <?php if (!empty($message)) : ?>
                <div class=" alert alert-success col-md-4 ">                            
                        <span style="margin-left: 115px;"><?= $message; ?></span>                       
                </div>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <form class="form-horizontal mt-2" method="post">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="nome">Nome</label>
                    <div class="col-md-4">
                        <input type="text" name="nome" id="nome" class="form-control input-md" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cpf">CPF</label>
                    <div class="col-md-4">
                        <input type="text" name="cpf" id="cpf" class="form-control" required=""> 
                    </div>                 
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">E-mail</label>
                    <div class="col-md-4">
                        <input type="email" name="email" id="email" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="telefone">Telefone</label>
                    <div class="col-md-4">
                        <input type="text" name="telefone" id="telefone" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="endereco">Endereço</label>
                    <div class="col-md-4">
                        <input type="text" name="endereco" id="endereco" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="instituicao">Instituição</label>
                    <div class="col-md-4">
                        <input type="text" name="instituicao" id="instituicao" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="tel_instituicao">Contato Instituição</label>
                    <div class="col-md-4">
                        <input type="text" name="tel_instituicao" id="tel_instituicao" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="divida">Dívida</label>
                    <div class="col-md-4">
                        <input type="text" name="divida" id="divida" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="valor">Valor</label>
                    <div class="col-md-4">
                        <input type="text" name="valor" id="valor" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="data_cadastro">Data de Cadastro</label>
                    <div class="col-md-4">
                        <input type="date" name="data_cadastro" id="data_cadastro" class="form-control" required="">
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

