<a class="btn btn-primary float-right" href="?p=cliente/salvar">Salvar</a>
<br><br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Cliente</th>
    </tr>
  </thead>
  <tbody>
      <?php
      include_once '../class/Cliente.php';
      $cli = new Cliente();
      $dados = $cli->consultar();      
      
      foreach ($dados as $mostrar){
      ?>
    <tr>
      <td><?=$mostrar['id']?></td>
      <td><?=$mostrar['nome']?></td>
      <td><?=$mostrar['email']?></td>
      <td><?=$mostrar['telefone']?></td>
      <td>
        <a href="" class="btn btn-success">
      <i class="bi bi-pencil-square" style="color:#FFF;"></i>
      </a>
      <a href="?p=cliente/excluir&id=<?=$mostrar['id']?>" class="btn btn-danger ml-2" data-confirm="Excluir registro?">
      <i class="bi bi-trash3-fill" style="color:#FFF;"></i>
      </a>
      </td>
    </tr>   
     <?php
      }
      ?>
  </tbody>
</table>

