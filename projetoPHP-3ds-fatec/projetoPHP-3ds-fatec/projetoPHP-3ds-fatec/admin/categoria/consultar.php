<a class="btn btn-primary float-right" href="?p=categoria/salvar">Salvar</a>
<br><br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descrição</th>
      <th>Opções</th>
    </tr>
  </thead>
  <tbody>
      <?php
      include_once '../class/Categoria.php';
      $cat = new Categoria();
      $dados = $cat->consultar();      
      
      foreach ($dados as $mostrar){
      ?>
    <tr>
      <td><?=$mostrar['id']?></td>
      <td><?=$mostrar['descricao']?></td>
      <td>
        <a href="" class="btn btn-success">
      <i class="bi bi-pencil-square" style="color:#FFF;"></i>
      </a>
      <a href="?p=categoria/excluir&id=<?=$mostrar['id']?>" class="btn btn-danger ml-2" data-confirm="Excluir registro?">
      <i class="bi bi-trash3-fill" style="color:#FFF;"></i>
      </a>
      </td>
    </tr>   
     <?php
      }
      ?>
  </tbody>
</table>

