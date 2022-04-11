<h3 class="mt-3 text-primary">
    Cadastrar Categoria
</h3>

<div class="card shadow">
    <form method="post" name="formsalvar" id="formSalvar" class="m-3" enctype="multipart/form-data">
        <!-- m-3 determinei todas as bordas, não mudei o form-->
        <div class="form-group row">            
            <label for="inputText" class="col-sm-2 col-form-label">                
                Descrição
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="txtDescricao" name="txtdescricao" placeholder="Descrição de Categoria" maxlength="50">
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
            <a href="?p=categoria/consultar" class="btn btn-danger">Voltar</a>
        </div>
    </form>
</div>
<?php
if (filter_input(INPUT_POST, 'btnsalvar')) {
    include_once '../class/Categoria.php';
    $cat = new Categoria();
    
    $descricao = filter_input(INPUT_POST, 'txtdescricao', FILTER_SANITIZE_STRING);
    
    $cat->setDescricao($descricao);
    //aqui chamo o método salvar
    
    echo $cat->getDescricao();
}









