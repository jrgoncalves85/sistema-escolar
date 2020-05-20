<?php
  require_once 'classes/Turma.php';
  $turma = new Turma();
  $lista = $turma->listar();
?>

<?php require_once 'layout/header.php' ?>
<?php require_once 'layout/navbar.php' ?>   

<div class="row">
  
  <?php require_once 'layout/sidebar.php' ?>    

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap
        flex-md-nowrap align-items-center pt-3 pb-2">
      <h2>Turmas Listar</h2>
    </div> 

    <a class="btn btn-primary mb-3" href="turmas-inserir.php">Nova turma</a>

    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Turma</th>
            <th>Ano</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody> 
          <?php foreach ($lista as $linha): ?>
          <tr>
            <td><?php echo $linha['id'] ?></td>
            <td><?php echo $linha['descTurma'] ?></td>
            <td><?php echo $linha['ano'] ?></td>
            <td>
              <a href="#"
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