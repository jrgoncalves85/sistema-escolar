<?php
  require_once 'classes/Aluno.php';
  $aluno = new Aluno();
  $lista = $aluno->listar();
?>

<?php require_once 'layout/header.php' ?>
<?php require_once 'layout/navbar.php' ?>   

<div class="row">
  
  <?php require_once 'layout/sidebar.php' ?>    

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap
        flex-md-nowrap align-items-center pt-3 pb-2">
      <h2>Alunos Listar</h2>
    </div> 

    <a class="btn btn-primary mb-3" href="alunos-inserir.php">Novo aluno</a>

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Turma</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody> 
          <?php foreach ($lista as $linha): ?>
          <tr>
            <td><?php echo $linha['id'] ?></a></td>
            <td><?php echo $linha['nome'] ?></a></td>
            <td><?php echo $linha['turma_id'] ?></a></td>
            <td>
              <a href="#" 
                 class="btn btn-sm btn-success">Detalhes</a>              
              <a href="#"  
                 class="btn btn-sm btn-warning">Alterar</a>
              <a href="alunos-excluir.php?id=<?php echo $linha['id'] ?>" 
                 class="btn btn-sm btn-danger">Excluir</a>
            </td>
          </tr>
          <?php endforeach ?>  
        </tbody>
      </table>
    </div>
</main>

</div>

<?php require_once 'layout/footer.php' ?>