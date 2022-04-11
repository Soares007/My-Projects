<h3 class="mt-3 text-primary">
    Cadastrar Cliente 
</h3>

<div class="card shadow">
    <form method="post" name="formsalvar" id="formSalvar" class="m-3" enctype="multipart/form-data">
        <!-- m-3 determinei todas as bordas, não mudei o form-->
        <div class="form-group row">            
            <label for="inputText" class="col-sm-2 col-form-label">                
                Nome
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="txtnome" name="txtnome" placeholder="Informe seu Nome" maxlength="50">
            </div>
        </div>
        <div class="form-group row">            
            <label for="inputText" class="col-sm-2 col-form-label">                
                Email
            </label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="Informe seu Email" maxlength="50">
            </div>
        </div>
        <div class="form-group row">            
            <label for="inputText" class="col-sm-2 col-form-label">                
                Telefone
            </label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="txttelefone" name="txttelefone" placeholder="Informe seu Telefone" maxlength="11">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">            
                <input type="submit" 
                       class="btn btn-primary" 
                       name="btnsalvar" 
                       value="Cadastrar">               
            </div>
            <!-- faltou um link aqui-->
            <a href="?p=cliente/consultar" class="btn btn-danger">Voltar</a>
        </div>
    </form>
</div>
<?php
if (filter_input(INPUT_POST, 'btnsalvar')) {
    include_once '../class/Cliente.php';
    $cli = new Cliente();

    $nome = filter_input(INPUT_POST, 'txtnome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'txtemail', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'txttelefone', FILTER_SANITIZE_NUMBER_INT);

    $cli->setNome($nome);
    $cli->setEmail($email);
    $cli->setTelefone($telefone);
    //aqui chamo o método salvar

    if ($cli->salvar()) {
        $msg = "Salvo com sucesso";
        $tipo = "primary";
    } else {
        $msg = "Erro ao salvar";
        $tipo = "danger";
    }
    ?>
    <br>
    <div class="alert alert-<?=$tipo?>" role="alert">
        <?= $msg ?>
    </div>
    <?php
}









